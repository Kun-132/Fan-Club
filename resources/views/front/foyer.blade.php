<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foyer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @php
    use App\Models\FlowerStory;
    $flowerStories = FlowerStory::orderBy('created_at', 'desc')->get();
@endphp
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .foyer-container {
            display: flex;
            height: 100vh;
            padding: 40px;
            box-sizing: border-box;
            gap: 20px;
            align-items: center;
        }
        .left-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-right: 3%;
        }
        .right-section {
            flex: 0 0 40%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo {
            position: absolute;
            top: 30px;
            left: 30px;
            width: 80px;
            z-index: 10;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #2c3e50;
            font-weight: 700;
        }
        p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #495057;
            margin-bottom: 2rem;
        }
        .external-link {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background-color: #3498db;
            color: white;
            border-radius: 30px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 600;
            border: none;
            align-self: flex-start;
            box-shadow: 0 4px 6px rgba(52, 152, 219, 0.2);
        }
        .external-link:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(52, 152, 219, 0.3);
        }
        
        /* Simplified Carousel */
        .carousel-container {
            width: 80%;
            height: 400px;
            position: relative;
            overflow: hidden;
            background: #f8f9fb;
        }
        .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .carousel-slide.active {
            opacity: 1;
        }
        .carousel-slide img {
            width: 80%;
            height: auto;
            object-fit: cover;
        }

        @media (max-width: 992px) {
            .foyer-container {
                flex-direction: column;
                padding: 20px;
                height: auto;
            }
            .right-section {
                width: 100%;
                height: 400px;
                margin-top: 30px;
            }
            .left-section {
                padding-right: 0;
            }
        }
        @media (max-width: 768px) {
            .logo {
                width: 60px;
                top: 15px;
                left: 15px;
            }
            h1 {
                font-size: 2rem;
            }
            .carousel-container {
                height: 300px;
            }
        }

        /* Flower Stories Cards */
.hover-shadow {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

.card {
    border-radius: 0.5rem;
    overflow: hidden;
}

.card-img-top {
    border-bottom: 1px solid rgba(0,0,0,0.1);
}

.card-body {
    padding: 1.25rem;
}

.card-footer {
    padding: 0.75rem 1.25rem;
    background: transparent;
}
    </style>
</head>
<body>
    <img src="{{ asset('img/foyer_logo.png') }}" alt="Logo" class="logo">
    <div class="foyer-container">
        <div class="left-section">
            <h1>Welcome to the Foyer</h1>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            <a href="https://example.com" target="_blank" class="external-link">Visit Main Website</a>
        </div>
        <div class="right-section">
            <div class="carousel-container">
                <div class="carousel-slide active">
                    <img src="{{ asset('img/foyer1.jpg') }}" alt="Foyer Image 1">
                </div>
                <div class="carousel-slide">
                    <img src="{{ asset('img/foyer2.jpg') }}" alt="Foyer Image 2">
                </div>
                <div class="carousel-slide">
                    <img src="{{ asset('img/foyer3.jpg') }}" alt="Foyer Image 3">
                </div>
            </div>
        </div>
    </div>

    <!-- Flower Stories Preview Section -->
<section class="flower-stories-preview py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Flower Stories</h2>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @forelse($flowerStories as $story)
            <div class="col">
                <a href="{{ route('flower-detail', $story->slug) }}" class="text-decoration-none">

                <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                    @if($story->image1)
                    <img src="{{ asset('storage/'.$story->image1) }}" 
                         class="card-img-top" 
                         alt="{{ $story->title_en }}"
                         style="height: 180px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $story->title_en }}</h5>
                    </div>
                </div>
                </a>

            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    No flower stories available yet.
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.carousel-slide');
            let currentSlide = 0;
            
            function rotateSlides() {
                // Hide current slide
                slides[currentSlide].classList.remove('active');
                
                // Move to next slide
                currentSlide = (currentSlide + 1) % slides.length;
                
                // Show new slide
                slides[currentSlide].classList.add('active');
            }
            
            // Start automatic rotation (4 seconds interval)
            setInterval(rotateSlides, 4000);
        });
    </script>
</body>
</html>