<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fan Club Intro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        .intro-bg {
            background-size: cover;
            position: relative;
            height: 100vh;
            background-attachment: fixed;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.7);
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
        .intro-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
            padding: 0 20px;
        }
        .intro-content h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 2rem;  /* Increased margin */
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            animation: fadeInDown 1s ease;
        }
        .intro-content p {
            font-size: 1.25rem;
            margin-bottom: 3rem;  /* Increased margin */
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
            animation: fadeIn 1s ease 0.3s forwards;
        }
        .country-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;  /* Increased gap */
            max-width: 800px;
            margin: 0 auto;
            padding-bottom: 2rem;  /* Bottom margin for container */
        }
        .country-button {
            display: inline-flex;
            align-items: center;
            gap: 12px;  /* Increased gap */
            background: #ffffff;  /* Solid white */
            border-radius: 8px;  /* Slightly less rounded */
            padding: 14px 28px;  /* Increased padding */
            text-decoration: none;
            color: #222;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);  /* Stronger shadow */
            border: 2px solid transparent;  /* Added border */
            animation: fadeInUp 0.5s ease;
            animation-fill-mode: both;
        }
        .country-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);  /* Stronger hover shadow */
            border-color: rgba(0,0,0,0.1);  /* Subtle border on hover */
        }
        .country-button img {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .intro-content h1 {
                font-size: 2.2rem;
                margin-bottom: 1.5rem;  /* Adjusted for mobile */
            }
            .intro-content p {
                font-size: 1.1rem;
                margin-bottom: 2.5rem;  /* Adjusted for mobile */
            }
            .country-button {
                padding: 12px 22px;  /* Adjusted for mobile */
                font-size: 0.9rem;
            }
            .country-buttons {
                gap: 12px;  /* Adjusted for mobile */
            }
        }
    </style>
</head>
<body>
<div class="intro-bg" style="background: url('{{ asset('img/intro.jpg') }}') no-repeat center center; background-size: cover;">
    <div class="overlay"></div>
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="intro-content">
            <h1 class="animate__animated animate__fadeInDown">Welcome to Our Global Fan Club</h1>
            <p class="animate__animated animate__fadeIn">Join millions of fans worldwide celebrating together</p>
            
            <div class="country-buttons">
                @foreach($countries as $country)
                    <a href="{{ route('country.show', $country->slug) }}" 
                       class="country-button animate__animated animate__fadeInUp"
                       style="animation-delay: {{ $loop->index * 0.1 + 0.3 }}s">
                        <img src="{{ asset('img/flags/' . $country->slug . '.png') }}" 
                             alt="{{ $country->country_name }} Flag"
                             loading="lazy">
                        {{ $country->country_name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>