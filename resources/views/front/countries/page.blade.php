<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $country->country_name }} | Fan Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background: white;
            padding: 20px;
            overflow-y: auto;
            border-right: 1px solid #eaeaea;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .sidebar h5 {
            color: #000;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            padding: 8px 12px;
            margin-bottom: 5px;
            color: #202626;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .sidebar a:hover {
            background-color: #27a844;
            color: white;
        }

        .sidebar a.active {
            background-color: #d4edda;
            color: #155724;
            font-weight: 500;
        }

        .content {
            margin-left: 270px;
            padding: 30px;
        }

        .page-header {
            margin-bottom: 40px;
        }

        .page-header h1 {
            color: #000;
            font-weight: 600;
        }

        .main-image {
            height: auto;
            max-height: 45vh;
            object-fit: contain;
            border-radius: 6px;
            margin-bottom: 10px;
            display: block;
        }

        .thumbnail-container {
            display: flex;
            justify-content: flex-start;
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

        .section {
            margin-bottom: 50px;
            padding-bottom: 30px;
            border-bottom: 1px solid #eee;
        }

        .section:last-child {
            border-bottom: none;
        }

        .section h3 {
            color: #000;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #27a844;
            border: none;
            padding: 8px 20px;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #218838;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                border-right: none;
                border-bottom: 1px solid #eaeaea;
            }

            .content {
                margin-left: 0;
                padding: 20px;
            }

            .main-image {
                max-height: 40vh;
            }

            .thumbnail-img {
                height: 60px;
                width: 60px;
            }
        }

        .text-muted {
            color: #6c757d !important;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h5>{{ $country->country_name }}</h5>
    @foreach ($sections as $section)
        <a href="#section-{{ $section->id }}">{{ $section->title }}</a>
    @endforeach
</div>

<div class="content">
    <div class="page-header">
        <h1>{{ $country->country_name }}</h1>
        <p class="text-muted">Explore the highlights of this beautiful country</p>
    </div>

    @foreach ($sections as $section)
        <div class="section" id="section-{{ $section->id }}">
            <h3>{{ $section->title }}</h3>

            @php
                $images = collect([
                    $section->image,
                    $section->image_2,
                    $section->image_3
                ])->filter()->values();
            @endphp

            @if ($images->isNotEmpty())
                <img id="main-image-{{ $section->id }}" src="{{ asset('storage/' . $images[0]) }}" alt="{{ $section->title }}" class="main-image">

                @if ($images->count() > 1)
                    <div class="thumbnail-container" id="thumbnail-container-{{ $section->id }}">
                        @foreach ($images as $idx => $img)
                            <img src="{{ asset('storage/' . $img) }}"
                                 class="thumbnail-img {{ $idx === 0 ? 'active' : '' }}"
                                 data-target="{{ $section->id }}"
                                 alt="Thumbnail {{ $idx + 1 }}">
                        @endforeach
                    </div>
                @endif
            @elseif ($section->video_src)
                <div class="ratio ratio-16x9 mb-3">
                    <iframe src="{{ $section->video_src }}" frameborder="0" allowfullscreen></iframe>
                </div>
            @endif

            <p>{{ $section->paragraph }}</p>

            @if ($section->detail_page)
                <a href="{{ route('country.detail', $section->detail_page) }}" class="btn btn-success">
                    Learn more
                </a>
            @endif
        </div>
    @endforeach
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('.section');
        const navLinks = document.querySelectorAll('.sidebar a');

        window.addEventListener('scroll', function () {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.pageYOffset >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Thumbnail image switch
        document.querySelectorAll('.thumbnail-img').forEach(thumb => {
            thumb.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const newSrc = this.getAttribute('src');
                const mainImage = document.getElementById('main-image-' + targetId);
                mainImage.src = newSrc;

                // Toggle active
                document.querySelectorAll(`#thumbnail-container-${targetId} .thumbnail-img`)
                    .forEach(img => img.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>

</body>
</html>
