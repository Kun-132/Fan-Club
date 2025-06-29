<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Story Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 850px;
            margin: auto;
            padding : 0px 50px 10px;
            background-color:rgb(183, 189, 196);
            height: 100vh;

        }

        .main-image {
            width: 100%;
            height: auto;
            max-height: 45vh;
            object-fit: contain;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .thumbnail-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .thumbnail-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.2s ease-in-out;
        }

        .thumbnail-img:hover,
        .thumbnail-img.active {
            border-color: #0d6efd;
            transform: scale(1.05);
        }

        .content-section {
            display: none;
            animation: fadeIn 0.3s ease-in-out;
        }

        .content-section.active {
            display: block;
        }

        .no-translation {
            color: #dc3545;
            font-style: italic;
            margin-top: 10px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @media (max-width: 768px) {
            .thumbnail-img {
                height: 60px;
                width: 60px;
            }

            .main-image {
                max-height: 40vh;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <!-- Language Selector -->
        <div class="d-flex justify-content-end mb-3">
            <select id="language-selector" class="form-select w-auto">
                <option value="en">English</option>
                <option value="ja">日本語</option>
                <option value="mm">မြန်မာ</option>
                <option value="kh">ភាសាខ្មែរ</option>
            </select>
        </div>

        <!-- Main Image -->
        <div class="text-center">
            <img id="main-image" src="" alt="Main Flower Image" class="main-image">
        </div>

        <!-- Thumbnails: only show if more than 1 image -->
        @php
            $imageCount = collect([
                $flowerStory->image1,
                $flowerStory->image2,
                $flowerStory->image3,
                $flowerStory->image4,
            ])->filter()->count();
        @endphp

        @if($imageCount > 1)
        <div class="thumbnail-container" id="thumbnail-container"></div>
        @endif

        <!-- Content Sections -->
        @foreach(['en' => 'English', 'ja' => 'Japanese', 'mm' => 'Myanmar', 'kh' => 'Khmer'] as $lang => $langName)
            <div id="{{ $lang }}-content" class="content-section {{ $loop->first ? 'active' : '' }} mt-4">
                <h4 id="{{ $lang }}-title" class="mb-2 fw-bold"></h4>
                <div id="{{ $lang }}-paragraph" class="text-secondary small"></div>
                <div id="{{ $lang }}-missing" class="no-translation d-none">{{ $langName }} translation not available</div>
            </div>
        @endforeach

    </div>

    <script>
        const flowerStory = {
            slug: "{{ $flowerStory->slug ?? '' }}",
            title_en: "{{ $flowerStory->title_en ?? '' }}",
            title_ja: "{{ $flowerStory->title_ja ?? '' }}",
            title_mm: "{{ $flowerStory->title_mm ?? '' }}",
            title_kh: "{{ $flowerStory->title_kh ?? '' }}",
            paragraph_en: `{!! $flowerStory->paragraph_en ?? '' !!}`,
            paragraph_ja: `{!! $flowerStory->paragraph_ja ?? '' !!}`,
            paragraph_mm: `{!! $flowerStory->paragraph_mm ?? '' !!}`,
            paragraph_kh: `{!! $flowerStory->paragraph_kh ?? '' !!}`,
            images: [
                @if($flowerStory->image1) "{{ asset('storage/'.$flowerStory->image1) }}", @endif
                @if($flowerStory->image2) "{{ asset('storage/'.$flowerStory->image2) }}", @endif
                @if($flowerStory->image3) "{{ asset('storage/'.$flowerStory->image3) }}", @endif
                @if($flowerStory->image4) "{{ asset('storage/'.$flowerStory->image4) }}", @endif
            ].filter(Boolean)
        };

        const langKeys = ['en', 'ja', 'mm', 'kh'];

        document.addEventListener('DOMContentLoaded', () => {
            const mainImage = document.getElementById('main-image');
            const thumbnailContainer = document.getElementById('thumbnail-container');

            if (flowerStory.images.length) {
                mainImage.src = flowerStory.images[0];

                // Only render thumbnails if more than 1 image
                if (flowerStory.images.length > 1 && thumbnailContainer) {
                    flowerStory.images.forEach((src, idx) => {
                        const thumb = document.createElement('img');
                        thumb.src = src;
                        thumb.className = 'thumbnail-img' + (idx === 0 ? ' active' : '');
                        thumb.alt = `Thumbnail ${idx + 1}`;
                        thumb.addEventListener('click', () => {
                            mainImage.src = src;
                            document.querySelectorAll('.thumbnail-img').forEach(img => img.classList.remove('active'));
                            thumb.classList.add('active');
                        });
                        thumbnailContainer.appendChild(thumb);
                    });
                }
            }

            langKeys.forEach(lang => {
                const title = flowerStory[`title_${lang}`];
                const paragraph = flowerStory[`paragraph_${lang}`];
                const titleEl = document.getElementById(`${lang}-title`);
                const paraEl = document.getElementById(`${lang}-paragraph`);
                const missingEl = document.getElementById(`${lang}-missing`);

                if (title && paragraph) {
                    titleEl.textContent = title;
                    paraEl.innerHTML = paragraph.replace(/\n/g, '<br>');
                    missingEl.classList.add('d-none');
                } else {
                    titleEl.textContent = flowerStory.title_en;
                    paraEl.innerHTML = flowerStory.paragraph_en.replace(/\n/g, '<br>');
                    missingEl.classList.remove('d-none');
                }
            });

            document.getElementById('language-selector').addEventListener('change', function () {
                langKeys.forEach(lang => {
                    document.getElementById(`${lang}-content`).classList.remove('active');
                });
                document.getElementById(`${this.value}-content`).classList.add('active');
            });
        });
    </script>
</body>
</html>
