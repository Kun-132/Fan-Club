<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewing Activities | Creative Stitches</title>
    <style>
        /* Modern Sewing Theme */
        :root {
            --primary: #6D4C41; /* Warm brown */
            --secondary: #D81B60; /* Vibrant pink */
            --light: #FFF8F0; /* Cream */
            --dark: #3E2723; /* Dark brown */
            --accent: #26A69A; /* Teal */
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.7;
        }
        
        /* Header */
        .sewing-header {
            background: linear-gradient(rgba(62, 39, 35, 0.7), rgba(62, 39, 35, 0.7)), 
                        url('https://images.unsplash.com/photo-1533461502717-83546f485d24?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 6rem 2rem;
            margin-bottom: 3rem;
        }
        
        .sewing-header h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 800;
        }
        
        .sewing-header p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto;
            font-weight: 300;
        }
        
        /* Main Content */
        .sewing-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        /* Video Section */
        .video-section {
            margin: 4rem 0;
            text-align: center;
        }
        
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 800px;
            margin: 2rem auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* About Section */
        .about-section {
            background: white;
            padding: 4rem;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            margin: 4rem 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-header h2 {
            color: var(--primary);
            font-size: 2.3rem;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        
        .section-header h2:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: var(--secondary);
            bottom: -10px;
            left: 25%;
        }
        
        /* Gallery Section */
        .gallery-section {
            margin: 5rem 0;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }
        
        .gallery-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            aspect-ratio: 1/1;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            color: white;
            padding: 1.5rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-caption {
            opacity: 1;
        }
        
        /* Activity Cards */
        .activity-section {
            margin: 6rem 0;
        }
        
        .activity-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .activity-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .activity-card:hover {
            transform: translateY(-10px);
        }
        
        .activity-image {
            height: 200px;
            overflow: hidden;
        }
        
        .activity-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .activity-card:hover .activity-image img {
            transform: scale(1.1);
        }
        
        .activity-content {
            padding: 1.5rem;
        }
        
        .activity-content h3 {
            color: var(--primary);
            margin-bottom: 1rem;
            font-size: 1.4rem;
        }
        
        .activity-content p {
            color: #666;
            margin-bottom: 1rem;
        }
        
        /* Order Button */
        .order-section {
            text-align: center;
            margin: 5rem 0;
        }
        
        .order-button {
            background-color: var(--secondary);
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.2rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(216, 27, 96, 0.3);
        }
        
        .order-button:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(109, 76, 65, 0.4);
        }
        
        /* Footer */
        .sewing-footer {
            background: var(--dark);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
            margin-top: 4rem;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 1.5rem 0;
            flex-wrap: wrap;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--accent);
        }
        
        /* Email Popup Styles */
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
            border-radius: 8px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }
        
        .close-popup {
            float: right;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .sewing-header h1 {
                font-size: 2.5rem;
            }
            
            .sewing-header p {
                font-size: 1.1rem;
            }
            
            .about-section {
                padding: 2rem;
            }
            
            .activity-cards, .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header class="sewing-header">
        <h1>Creative Sewing Activities</h1>
        <p>Discover the art and joy of sewing through our diverse programs and workshops</p>
    </header>
    
    <main class="sewing-container">
        <section class="video-section">
            <div class="section-header">
                <h2>Our Sewing Journey</h2>
                <p>Watch how we bring fabrics to life through traditional and modern techniques</p>
            </div>
            
            <div class="video-wrapper">
                <iframe src="https://player.vimeo.com/video/1096811933?" allowfullscreen></iframe>
            </div>
        </section>
        
        <section class="about-section">
            <div class="section-header">
                <h2>About Our Sewing Programs</h2>
                <p>Preserving traditions while embracing innovation</p>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <p style="margin-bottom: 1.5rem;">At Creative Stitches, we believe sewing is more than just a craft—it's a way to connect with cultural heritage, express creativity, and build sustainable practices. Our programs cater to all skill levels, from complete beginners to advanced artisans.</p>
                
                <p style="margin-bottom: 1.5rem;">We offer a unique blend of traditional techniques passed down through generations and contemporary approaches that push the boundaries of textile arts. Our instructors are master sewists with years of experience in both teaching and professional practice.</p>
                
                <p>Whether you're interested in garment construction, home decor, quilting, or textile art, our activities provide a supportive environment to learn, create, and grow.</p>
            </div>
        </section>
        
        <section class="gallery-section">
            <div class="section-header">
                <h2>Sewing Gallery</h2>
                <p>Explore the beautiful creations from our community</p>
            </div>
            
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1533461502717-83546f485d24?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Traditional embroidery">
                    <div class="gallery-caption">
                        <h3>Traditional Embroidery</h3>
                        <p>Hand-stitched designs from our heritage workshop</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1583744946564-b52d01e2da64?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Modern quilting">
                    <div class="gallery-caption">
                        <h3>Modern Quilting</h3>
                        <p>Contemporary patterns with traditional techniques</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1579649102-bf8e34f1ef61?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Sustainable fashion">
                    <div class="gallery-caption">
                        <h3>Sustainable Fashion</h3>
                        <p>Upcycled garments from our eco-sewing class</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1562162978-02c0f6c2b60e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Community project">
                    <div class="gallery-caption">
                        <h3>Community Project</h3>
                        <p>Collaborative textile art installation</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Children's workshop">
                    <div class="gallery-caption">
                        <h3>Children's Workshop</h3>
                        <p>Introducing young makers to sewing basics</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Advanced techniques">
                    <div class="gallery-caption">
                        <h3>Advanced Techniques</h3>
                        <p>Master classes for experienced sewists</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="order-section">
            <button class="order-button" id="email-button">Send an Email</button>
            
            <!-- Email Form Popup -->
            <div id="email-popup" class="email-popup">
                <div class="email-popup-content">
                    <button class="close-popup" id="close-popup">&times;</button>
                    
                    <h2 style="color: var(--primary); margin-bottom:1.5rem;">Contact Creative Stitches</h2>
                    
                    <div id="form-response" style="margin-bottom:1rem;"></div>
                    
                    <form id="email-form">
                        <div style="margin-bottom:1rem;">
                            <label for="name" style="display:block; margin-bottom:0.5rem;">Your Name</label>
                            <input type="text" id="name" name="name" required 
                                   style="width:100%; padding:0.8rem; border:1px solid #ddd; border-radius:4px;">
                        </div>
                        
                        <div style="margin-bottom:1rem;">
                            <label for="email" style="display:block; margin-bottom:0.5rem;">Your Email</label>
                            <input type="email" id="email" name="email" required 
                                   style="width:100%; padding:0.8rem; border:1px solid #ddd; border-radius:4px;">
                        </div>
                        
                        <div style="margin-bottom:1.5rem;">
                            <label for="message" style="display:block; margin-bottom:0.5rem;">Message</label>
                            <textarea id="message" name="message" required rows="5"
                                     style="width:100%; padding:0.8rem; border:1px solid #ddd; border-radius:4px;"></textarea>
                        </div>
                        
                        <button type="submit" class="order-button" style="width:100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    
    <footer class="sewing-footer">
        <div class="footer-links">
            <a href="#">About Us</a>
            <a href="#">Workshops</a>
            <a href="#">Contact</a>
            <a href="#">Privacy Policy</a>
        </div>
        <p>&copy; 2023 Creative Stitches. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailButton = document.getElementById('email-button');
            const emailPopup = document.getElementById('email-popup');
            const closePopup = document.getElementById('close-popup');
            const emailForm = document.getElementById('email-form');
            const formResponse = document.getElementById('form-response');
            
            // Toggle popup
            emailButton.addEventListener('click', function() {
                emailPopup.style.display = 'flex';
            });
            
            closePopup.addEventListener('click', function() {
                emailPopup.style.display = 'none';
            });
            
            // Close when clicking outside
            emailPopup.addEventListener('click', function(e) {
                if (e.target === emailPopup) {
                    emailPopup.style.display = 'none';
                }
            });
            
            // Handle form submission
            emailForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Clear previous response
                formResponse.innerHTML = '';
                formResponse.style.display = 'none';
                
                // Get form data
                const formData = {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    message: document.getElementById('message').value,
                    _token: document.querySelector('meta[name="csrf-token"]').content
                };
                
                // Send AJAX request
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
                        // Show success message
                        formResponse.innerHTML = '<div style="background:#d4edda; color:#155724; padding:1rem; border-radius:4px;">Message sent successfully!</div>';
                        formResponse.style.display = 'block';
                        
                        // Reset form
                        emailForm.reset();
                        
                        // Close popup after 2 seconds
                        setTimeout(() => {
                            emailPopup.style.display = 'none';
                        }, 2000);
                    } else {
                        // Show error message
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
</body>
</html>