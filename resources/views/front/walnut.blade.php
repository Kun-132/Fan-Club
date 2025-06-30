<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Walnuts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #202626;
            --secondary: #27a844;
            --light: #FFF8F0;
            --dark: #202626;
            --accent: #27a844;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            font-family: 'Nunito', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            margin: 30px 0;
        }

        .image-left {
            width: 45%;
            padding-right: 20px;
        }

        .text-content {
            width: 55%;
            padding-left: 20px;
        }

        .image-bottom {
            width: 100%;
            text-align: right;
            margin-top: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .btn-reserve {
            background-color: var(--secondary);
            color: white;
            padding: 12px 30px;
            font-size: 1.2rem;
            margin-top: 20px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn-reserve:hover {
            background-color:  #00796b;
        }

        .inventory-section {
            padding: 40px 0;
            background-color: #f8f9fa;
            text-align: center;
        }

        .inventory-label {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .inventory-amount {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--accent);
        }

        /* Email Popup Styling */
        .email-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .email-popup-content {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            position: relative;
        }

        .email-popup-content h2 {
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        .email-popup-content label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .email-popup-content input,
        .email-popup-content textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 1.2rem;
            font-size: 1rem;
        }

        .email-popup-content button[type="submit"] {
            background-color: var(--accent);
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
        }

        .email-popup-content button[type="submit"]:hover {
            background-color: #00796b;
        }

        .close-popup {
            position: absolute;
            top: 12px;
            right: 16px;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #999;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .image-left, .text-content {
                width: 100%;
                padding: 0;
            }
        }
    </style>
</head>
<body>

<div class="container mt-2">
    <a href="{{ route('front.intro') }}" class="btn btn-outline-success">← Back</a>
</div>

<div class="container">
    <h1 class="mb-4">市民で繋ぐ黒クルミ</h1>

    <div class="content-wrapper">
        <div class="image-left">
            <img src="{{ asset('img/walnuts.jpg') }}" alt="Fresh walnuts">
        </div>

        <div class="text-content">
            <p>
                "空爆があるので森の中の空から見えない道での運送になりました。
                ...（省略）...
                ともかく「危機時に繫ぐ」ことの難しさとコスト高を体験しています。"
            </p>
        </div>

        <div class="image-bottom">
            <img src="{{ asset('img/truck.jpg') }}" alt="Truck">
        </div>
    </div>
</div>

<!-- Inventory Section -->
<section class="inventory-section">
    <div class="container">
        <div class="inventory-label">Current Inventory Available:</div>
        <div class="inventory-amount">100 kg x 10 person</div>
        <button class="btn-reserve" id="reserve-now-button">Reserve Now</button>
    </div>
</section>

<!-- Email Form Popup -->
<div id="email-popup" class="email-popup">
    <div class="email-popup-content">
        <button class="close-popup" id="close-popup">&times;</button>
        <h2>Contact Creative Stitches</h2>
        <div id="form-response" style="margin-bottom:1rem;"></div>
        <form id="email-form">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" required rows="5"></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const reserveNowButton = document.getElementById('reserve-now-button');
        const emailPopup = document.getElementById('email-popup');
        const closePopup = document.getElementById('close-popup');
        const emailForm = document.getElementById('email-form');
        const formResponse = document.getElementById('form-response');

        reserveNowButton.addEventListener('click', () => {
            emailPopup.style.display = 'flex';
        });

        closePopup.addEventListener('click', () => {
            emailPopup.style.display = 'none';
        });

        emailPopup.addEventListener('click', (e) => {
            if (e.target === emailPopup) {
                emailPopup.style.display = 'none';
            }
        });

        emailForm.addEventListener('submit', function(e) {
            e.preventDefault();

            formResponse.innerHTML = '';
            formResponse.style.display = 'none';

            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                message: document.getElementById('message').value,
                _token: document.querySelector('meta[name="csrf-token"]').content
            };

            fetch('{{ route("contact.send") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': formData._token
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    formResponse.innerHTML = '<div style="background:#d4edda; color:#155724; padding:1rem; border-radius:4px;">Message sent successfully!</div>';
                    formResponse.style.display = 'block';
                    emailForm.reset();
                    setTimeout(() => {
                        emailPopup.style.display = 'none';
                    }, 2000);
                } else {
                    formResponse.innerHTML = '<div style="background:#f8d7da; color:#721c24; padding:1rem; border-radius:4px;">Error: ' + (data.message || 'Failed to send message') + '</div>';
                    formResponse.style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                formResponse.innerHTML = '<div style="background:#f8d7da; color:#721c24; padding:1rem; border-radius:4px;">An error occurred. Please try again.</div>';
                formResponse.style.display = 'block';
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
