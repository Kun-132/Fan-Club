<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Support Our Cause</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #f8f9fa;
      padding: 20px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }

    .page-title {
      font-weight: 700;
      margin-bottom: 20px;
      text-align: center;
      font-size: 2.5rem;
    }

    .intro-text {
      font-size: 1.1rem;
      color: #555;
      margin-bottom: 40px;
      text-align: center;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
    }

    .gallery-item {
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .gallery-item:hover {
      transform: translateY(-5px);
    }

    .gallery-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .donation-stats {
      background: #f1f8e9;
      padding: 30px;
      border-radius: 8px;
      text-align: center;
      margin-bottom: 40px;
    }

    .donation-amount {
      font-size: 2.5rem;
      font-weight: 700;
      color: #27a844;
      margin-bottom: 10px;
    }

    .donation-text {
      font-size: 1.2rem;
      color: #555;
    }

    .donate-btn {
      display: block;
      width: 250px;
      margin: 0 auto;
      padding: 15px;
      font-size: 1.1rem;
      font-weight: 600;
      background-color: #27a844;
      border: none;
      border-radius: 50px;
      color: white;
      text-align: center;
      text-decoration: none;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .donate-btn:hover {
      background-color: #218838;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(39, 168, 68, 0.3);
      color: white;
    }

    .email-popup {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.7);
      justify-content: center;
      align-items: center;
      z-index: 1000;
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
      margin-bottom: 1.5rem;
      font-size: 1.5rem;
    }

    .email-popup-content label {
      font-weight: 600;
      margin-top: 1rem;
    }

    .email-popup-content input,
    .email-popup-content textarea {
      width: 100%;
      padding: 0.75rem;
      margin-top: 0.3rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .email-popup-content button[type="submit"] {
      background: #27a844;
      color: white;
      border: none;
      padding: 0.8rem 2rem;
      border-radius: 50px;
      cursor: pointer;
      width: 100%;
      font-size: 1rem;
    }

    .email-popup-content button[type="submit"]:hover {
      background: #218838;
    }

    .close-popup {
      position: absolute;
      top: 12px;
      right: 16px;
      font-size: 1.5rem;
      background: none;
      border: none;
      color: #888;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .gallery {
        grid-template-columns: 1fr;
      }
      .page-title {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h1 class="page-title">Help Protect Our Natural Heritage</h1>
    <p class="intro-text">
      Our organization is dedicated to preserving the natural beauty and biodiversity of our planet. 
      With your support, we can continue our vital conservation work, protect endangered species, 
      and maintain ecosystems for future generations. Every donation makes a difference.
    </p>

    <div class="gallery">
      <div class="gallery-item">
        <img src="https://source.unsplash.com/random/600x400/?nature,forest" class="gallery-img" />
      </div>
      <div class="gallery-item">
        <img src="https://source.unsplash.com/random/600x400/?wildlife,animal" class="gallery-img" />
      </div>
      <div class="gallery-item">
        <img src="https://source.unsplash.com/random/600x400/?conservation,earth" class="gallery-img" />
      </div>
      <div class="gallery-item">
        <img src="https://source.unsplash.com/random/600x400/?water,river" class="gallery-img" />
      </div>
    </div>

    <div class="donation-stats">
      <div class="donation-amount">$124,850</div>
      <div class="donation-text">raised so far towards our $200,000 goal</div>
    </div>

    <button class="donate-btn" id="open-email-popup">Email to Donate</button>
  </div>

  <!-- Email Popup -->
  <div class="email-popup" id="email-popup">
    <div class="email-popup-content">
      <button class="close-popup" id="close-popup">&times;</button>
      <h2>Send Your Donation Message</h2>
      <div id="form-response" style="margin-bottom:1rem;"></div>
      <form id="email-form">
        <label for="name">Your Name</label>
        <input type="text" id="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" required>

        <label for="message">Message</label>
        <textarea id="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>

  <!-- CSRF Token (if used in Laravel) -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const openPopup = document.getElementById('open-email-popup');
      const emailPopup = document.getElementById('email-popup');
      const closePopup = document.getElementById('close-popup');
      const emailForm = document.getElementById('email-form');
      const formResponse = document.getElementById('form-response');

      openPopup.addEventListener('click', () => {
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

      emailForm.addEventListener('submit', function (e) {
        e.preventDefault();

        formResponse.innerHTML = '';
        formResponse.style.display = 'none';

        const data = {
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
            'X-CSRF-TOKEN': data._token
          },
          body: JSON.stringify(data)
        })
          .then(res => res.json())
          .then(data => {
            if (data.success) {
              formResponse.innerHTML = '<div style="color:green;">Thank you! Message sent.</div>';
              formResponse.style.display = 'block';
              emailForm.reset();
              setTimeout(() => emailPopup.style.display = 'none', 2000);
            } else {
              formResponse.innerHTML = '<div style="color:red;">Error: ' + (data.message || 'Try again') + '</div>';
              formResponse.style.display = 'block';
            }
          })
          .catch(() => {
            formResponse.innerHTML = '<div style="color:red;">An error occurred.</div>';
            formResponse.style.display = 'block';
          });
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
