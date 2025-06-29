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

        /* Sidebar */
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
            color: #2c3e50;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            padding: 8px 12px;
            margin-bottom: 5px;
            color: #2c3e50;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .sidebar a:hover {
            background-color: #f0f0f0;
        }

        .sidebar a.active {
            background-color: #e3f2fd;
            color: #1976d2;
            font-weight: 500;
        }

        /* Main Content */
        .content {
            margin-left: 270px;
            padding: 30px;
        }

        .page-header {
            margin-bottom: 40px;
        }

        .page-header h1 {
            color: #2c3e50;
            font-weight: 600;
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
            color: #1976d2;
            margin-bottom: 20px;
        }

        .section img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .btn-primary {
            background-color: #1976d2;
            border: none;
            padding: 8px 20px;
            margin-top: 10px;
        }

        /* Responsive Design */
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
        }

        /* Utilities */
        .text-muted {
            color: #6c757d !important;
        }
    </style>
</head>
<body>

    <!-- Simple Sidebar Navigation -->
    <div class="sidebar">
        <h5>{{ $country->country_name }}</h5>
        @foreach ($sections as $section)
            <a href="#section-{{ $section->id }}">{{ $section->title }}</a>
        @endforeach
    </div>

    <!-- Clean Content Area -->
    <div class="content">
        <div class="page-header">
            <h1>{{ $country->country_name }}</h1>
            <p class="text-muted">Explore the highlights of this beautiful country</p>
        </div>

        @foreach ($sections as $section)
            <div class="section" id="section-{{ $section->id }}">
                <h3>{{ $section->title }}</h3>

                @if ($section->image)
                    <img src="{{ asset('storage/' . $section->image) }}" alt="{{ $section->title }}" class="img-fluid">
                @elseif ($section->video_src)
                    <div class="ratio ratio-16x9 mb-3">
                        <iframe src="{{ $section->video_src }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                @endif

                <p>{{ $section->paragraph }}</p>

                @if ($section->detail_page)
                    <a href="{{ route('country.detail', $section->detail_page) }}" class="btn btn-primary">
                        Learn more
                    </a>
                @endif
            </div>
        @endforeach
    </div>

    <script>
        // Simple active section highlighting
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.section');
            const navLinks = document.querySelectorAll('.sidebar a');
            
            window.addEventListener('scroll', function() {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
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
        });
    </script>
</body>
</html>