<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Dance Performances | [Organization Name]</title>
    <style>
        /* Modern Global Dance Style */
        :root {
            --primary: #2c3e50; /* Deep blue */
            --secondary: #e74c3c; /* Vibrant red */
            --light: #ecf0f1; /* Light gray */
            --dark: #34495e; /* Dark slate */
            --accent: #3498db; /* Bright blue */
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        
        body {
            background-color: white;
            color: var(--dark);
            line-height: 1.7;
        }
        
        /* Navigation */
        .main-nav {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .nav-links {
            display: flex;
            justify-content: center;
            list-style: none;
        }
        
        .nav-links li {
            margin: 0 1.5rem;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--primary);
            font-weight: 600;
            font-size: 1.1rem;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--secondary);
        }
        
        /* Hero Section */
        .performance-hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                        url('https://images.unsplash.com/photo-1547153760-18fc86324498?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 8rem 2rem;
            margin-bottom: 3rem;
        }
        
        .performance-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }
        
        .performance-hero p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto;
            font-weight: 300;
        }
        
        /* Main Content */
        .performance-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        /* Performance Sections */
        .performance-section {
            margin: 4rem 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-header h2 {
            color: var(--primary);
            font-size: 2.5rem;
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
        
        /* Tour Grid */
        .tour-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin: 3rem 0;
        }
        
        .tour-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .tour-card:hover {
            transform: translateY(-10px);
        }
        
        .tour-image {
            height: 250px;
            overflow: hidden;
        }
        
        .tour-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .tour-card:hover .tour-image img {
            transform: scale(1.05);
        }
        
        .tour-content {
            padding: 2rem;
        }
        
        .tour-content h3 {
            color: var(--primary);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        
        .tour-date {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
        }
        
        .tour-date:before {
            content: "📅";
            margin-right: 0.5rem;
        }
        
        .tour-location {
            color: var(--dark);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .tour-location:before {
            content: "📍";
            margin-right: 0.5rem;
        }
        
        /* Japan Locations */
        .japan-locations {
            background: var(--light);
            padding: 3rem;
            border-radius: 8px;
            margin: 4rem 0;
        }
        
        .location-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .location-item {
            background: white;
            border-radius: 6px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .location-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0;
        }

        .location-image {
            width: 120px;
            height: 120px;
            flex-shrink: 0;
            overflow: hidden;
        }

        .location-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .location-item:hover .location-image img {
            transform: scale(1.1);
        }

        .location-text {
            padding: 1.2rem;
            flex: 1;
        }

        .location-text h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .location-text p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 0.3rem;
        }
        
        /* Featured Performance */
        .featured-performance {
            max-width: 800px; 
            margin: 0 auto; 
            background: var(--light); 
            padding: 2rem; 
            border-radius: 8px;
        }
        
        /* Footer */
        .performance-footer {
            background: var(--primary);
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
        
        /* Responsive Adjustments */
        @media (max-width: 900px) {
            .performance-hero h1 {
                font-size: 2.5rem;
            }
            
            .performance-hero p {
                font-size: 1.1rem;
            }
            
            .nav-links {
                flex-wrap: wrap;
            }
            
            .nav-links li {
                margin: 0.5rem 1rem;
            }
        }
        
        @media (max-width: 600px) {
            .location-content {
                flex-direction: column;
            }
            
            .location-image {
                width: 100%;
                height: 150px;
            }
            
            .location-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <header class="performance-hero">
        <h1>Dance Performances Around The World</h1>
        <p>Connecting cultures through movement in 2024-2025</p>
    </header>
    
    <main class="performance-container">
        <section class="performance-section">
            <div class="section-header">
                <h2>International Tour 2024-2025</h2>
                <p>Bringing our performances to global audiences</p>
            </div>
            
            <div class="tour-grid">
                <!-- Tour 1 -->
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1518621736915-f3b1c41bfd00?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Bali performance">
                    </div>
                    <div class="tour-content">
                        <h3>Peace Without Borders</h3>
                        <div class="tour-date">September 2024</div>
                        <div class="tour-location">Bali, Indonesia</div>
                        <p>Our original "Peace without Borders" performance with English and Indonesian narration will be shown at international schools and community centers in the Kuta area.</p>
                    </div>
                </div>
                
                <!-- Tour 2 -->
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Philippines performance">
                    </div>
                    <div class="tour-content">
                        <h3>Cultural Ambassador Program</h3>
                        <div class="tour-date">Autumn 2024</div>
                        <div class="tour-location">Manila, Philippines</div>
                        <p>Participating as cultural ambassadors with performances and workshops at local universities and cultural centers.</p>
                    </div>
                </div>
                
                <!-- Tour 3 -->
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1529255484355-cb73c33c04bb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="India performance">
                    </div>
                    <div class="tour-content">
                        <h3>Southern India Cultural Exchange</h3>
                        <div class="tour-date">December 2024</div>
                        <div class="tour-location">Karnataka, India</div>
                        <p>Learning traditional local dances and performing collaborative pieces with Indian artists in Bangalore and surrounding areas.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="performance-section">
            <div class="section-header">
                <h2>Japan Tour Locations</h2>
                <p>10 performances across the country in Spring 2024</p>
            </div>
            
            <div class="japan-locations">
                <div class="location-grid">
                    <!-- Tokyo -->
                    <div class="location-item">
                        <div class="location-content">
                            <div class="location-image">
                                <img src="https://images.unsplash.com/photo-1542051841857-5f90071e7989?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Tokyo">
                            </div>
                            <div class="location-text">
                                <h3>Tokyo (2 locations)</h3>
                                <p>Meguro Ward Community Center</p>
                                <p>Telayama City Chamber of Commerce</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Chiba -->
                    <div class="location-item">
                        <div class="location-content">
                            <div class="location-image">
                                <img src="https://images.unsplash.com/photo-1578640463384-fbc6a63e2c3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Chiba">
                            </div>
                            <div class="location-text">
                                <h3>Chiba</h3>
                                <p>Nayada Flat in Kerima Visual</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Aichi -->
                    <div class="location-item">
                        <div class="location-content">
                            <div class="location-image">
                                <img src="https://images.unsplash.com/photo-1588416930657-8c6b2a8a37e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Aichi">
                            </div>
                            <div class="location-text">
                                <h3>Aichi (3 locations)</h3>
                                <p>Community halls in Nagoya</p>
                                <p>Free schools in Chita County</p>
                                <p>Temples in the region</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Ishikawa -->
                    <div class="location-item">
                        <div class="location-content">
                            <div class="location-image">
                                <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Ishikawa">
                            </div>
                            <div class="location-text">
                                <h3>Ishikawa (2 locations)</h3>
                                <p>Kanazawa</p>
                                <p>Hakusan</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gifu and Nie -->
                    <div class="location-item">
                        <div class="location-content">
                            <div class="location-image">
                                <img src="https://images.unsplash.com/photo-1588416930657-8c6b2a8a37e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Gifu">
                            </div>
                            <div class="location-text">
                                <h3>Gifu and Nie</h3>
                                <p>Community halls in Gifu</p>
                                <p>Third World Strong's partner venues</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="performance-section">
            <div class="section-header">
                <h2>Featured Performance</h2>
                <p>"Peace Without Borders" - Honoring Cultural Exchange</p>
            </div>
            
            <div class="featured-performance">
                <p style="margin-bottom: 1.5rem;">Our signature piece "Peace Without Borders" is based on the story of a young Japanese volunteer, Alaribu Nakata, who served in Cambodia's Kampong Thom province and died supporting Cambodia's first democratic elections.</p>
                <p>The performance features Cambodian youths performing traditional dances before and after the main piece, creating a powerful dialogue between cultures.</p>
            </div>
        </section>
    </main>
    
   
</body>
</html>