<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Heritage Museum | [Your Organization]</title>
    <style>
        /* Modern Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        
        :root {
            --primary: #2c3e50;
            --secondary: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --accent: #3498db;
        }
        
        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.7;
        }
        
        /* Header with Hero Image */
        .hero-header {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 6rem 1rem;
            margin-bottom: 3rem;
        }
        
        .hero-header h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 300;
        }
        
        .hero-header p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto;
            font-weight: 300;
        }
        
        /* Main Content Container */
        .museum-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        /* Section Styling */
        .museum-section {
            margin-bottom: 4rem;
            display: flex;
            flex-direction: column;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-header h2 {
            color: var(--primary);
            font-size: 2.2rem;
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
        
      .exhibits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        
        .gallery-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        
        .gallery-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }
        
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 1.5rem 1rem 1rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-caption {
            opacity: 1;
        }
        
        .gallery-caption h3 {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        
        .gallery-caption p {
            font-size: 0.9rem;
            margin-bottom: 0;
        }
        
        /* Timeline Section */
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem 0;
        }
        
        .timeline:before {
            content: '';
            position: absolute;
            width: 4px;
            background: var(--accent);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
        }
        
        .timeline-item {
            padding: 1rem 3rem;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
        }
        
        .timeline-content {
            padding: 1.5rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .timeline-date {
            font-weight: bold;
            color: var(--secondary);
            margin-bottom: 0.5rem;
        }
        
        /* Image + Text Section */
        .image-text-section {
            display: flex;
            gap: 3rem;
            align-items: center;
            margin: 3rem 0;
        }
        
        .image-text-section img {
            flex: 1;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            max-width: 500px;
        }
        
        .text-content {
            flex: 1;
        }
        .map-container {
    flex: 1;
    min-height: 400px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    border-radius: 8px;
    overflow: hidden;
}

/* Keep existing image-text-section styles */
.image-text-section {
    display: flex;
    gap: 3rem;
    align-items: center;
    margin: 3rem 0;
}

@media (max-width: 900px) {
    .image-text-section {
        flex-direction: column;
    }
    
    .map-container {
        width: 100%;
        order: 2; /* Ensures map appears below text on mobile */
    }
}
        /* Footer */
        .museum-footer {
            background: var(--dark);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
            margin-top: 4rem;
        }
        
        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 1.5rem 0;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--accent);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 900px) {
            .hero-header h1 {
                font-size: 2.5rem;
            }
            
            .image-text-section {
                flex-direction: column;
            }
            
            .timeline:before {
                left: 30px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 20px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
        }
    </style>
</head>
<body>
    <header class="hero-header">
        <h1>Community Heritage Museum</h1>
        <p>Preserving and celebrating our shared history and cultural legacy</p>
    </header>
    
    <main class="museum-container">
        <!-- About Section -->
        <section class="museum-section">
            <div class="section-header">
                <h2>About Our Museum</h2>
                <p>Discover the rich tapestry of our community's history and culture</p>
            </div>
            
            <div class="image-text-section">
                <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Museum exterior">
                <div class="text-content">
                    <p>Founded in 1995, our Community Heritage Museum serves as the guardian of our shared history. What began as a small collection of artifacts in a single room has grown into a vibrant cultural center that attracts visitors from around the region.</p>
                    <p>Our mission is to collect, preserve, and interpret the diverse stories of our community, ensuring that future generations can learn from and be inspired by those who came before them.</p>
                    <p>The museum features permanent and rotating exhibits, educational programs, and community events that bring history to life.</p>
                </div>
            </div>
        </section>
        
        <!-- Exhibits Section -->
             <section class="museum-section">
            <div class="section-header">
                <h2>Museum Collection</h2>
                <p>Explore highlights from our permanent collection</p>
            </div>
            
            <div class="exhibits-grid">
                <!-- Item 1 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1551029506-0807df4e2031?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Ancient pottery" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Ancient Pottery</h3>
                        <p>Ceramic vessels from 200 BCE, discovered in local excavations</p>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1532163254421-75f04a8b9c9a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Vintage textiles" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Traditional Textiles</h3>
                        <p>Handwoven fabrics showcasing regional patterns</p>
                    </div>
                </div>
                
                <!-- Item 3 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Historical documents" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Founding Documents</h3>
                        <p>Original town charters and early correspondence</p>
                    </div>
                </div>
                
                <!-- Item 4 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1575224300306-1b8da36134ec?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Agricultural tools" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Farming Implements</h3>
                        <p>Tools used by early settlers in the 19th century</p>
                    </div>
                </div>
                
                <!-- Item 5 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1551818255-e6e10975bc17?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Vintage photographs" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Historical Photographs</h3>
                        <p>Early 20th century images of community life</p>
                    </div>
                </div>
                
                <!-- Item 6 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Indigenous artifacts" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Indigenous Artifacts</h3>
                        <p>Tools and artwork from the region's first inhabitants</p>
                    </div>
                </div>
                
                <!-- Item 7 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1578302758063-0ef3e0480972?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Military uniforms" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Military History</h3>
                        <p>Uniforms and equipment from local veterans</p>
                    </div>
                </div>
                
                <!-- Item 8 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Industrial artifacts" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Industrial Relics</h3>
                        <p>Machinery from the town's manufacturing era</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- History Timeline -->
        <section class="museum-section">
            <div class="section-header">
                <h2>Our History</h2>
                <p>Key milestones in the development of our museum</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">1995</div>
                        <h3>Museum Founded</h3>
                        <p>The Community Heritage Museum was established by a group of local historians and community leaders with an initial collection of 150 artifacts.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2002</div>
                        <h3>First Permanent Home</h3>
                        <p>After years in temporary spaces, the museum moved into its first dedicated building in the historic downtown district.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2010</div>
                        <h3>Major Expansion</h3>
                        <p>A new wing was added to accommodate growing collections and educational programs, doubling the museum's size.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2018</div>
                        <h3>Digital Archives Launched</h3>
                        <p>The museum digitized its collections, making thousands of artifacts and photographs available online to researchers worldwide.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2023</div>
                        <h3>New Education Center</h3>
                        <p>The opening of the Community Learning Center expanded the museum's capacity for school programs and public workshops.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Visit Section -->
   <section class="museum-section">
    <div class="section-header">
        <h2>Plan Your Visit</h2>
        <p>We look forward to welcoming you</p>
    </div>
    
    <div class="image-text-section">
        <div class="text-content">
            <h3>Hours & Admission</h3>
            <p><strong>Tuesday-Sunday:</strong> 10:00 AM - 5:00 PM</p>
            <p><strong>Closed:</strong> Mondays and major holidays</p>
            <p><strong>Adults:</strong> $10 | <strong>Seniors/Students:</strong> $7 | <strong>Children under 12:</strong> Free</p>
            
            <h3 style="margin-top: 1.5rem;">Location</h3>
            <p>123 Heritage Lane, Communityville</p>
            <p>Free parking available in the museum lot</p>
            
            <h3 style="margin-top: 1.5rem;">Accessibility</h3>
            <p>Our museum is fully wheelchair accessible with audio guides available for visitors with visual impairments.</p>
        </div>
        
        <!-- Google Map Embed -->
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2152091794237!2d-73.9878449245377!3d40.74844097138972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ0JzU0LjQiTiA3M8KwNTknMDkuNyJX!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                width="100%" 
                height="400" 
                style="border:0; border-radius: 8px;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>
    </main>
</body>
</html>