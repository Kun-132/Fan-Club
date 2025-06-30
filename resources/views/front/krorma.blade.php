<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krama: Cambodia's Iconic Textile | Cultural Preservation</title>
    <style>
        /* Cambodian-inspired color palette */
        :root {
            --primary: #B22222; /* Cambodian red */
            --secondary: #F4A460; /* Traditional gold */
            --light: #FFF8DC; /* Cream background */
            --dark: #4B3621; /* Dark brown */
            --accent: #556B2F; /* Earthy green */
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Noto Serif', serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.8;
        }
        
        /* Traditional Hero Section */
        .krama-hero {
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), 
                        url('https://images.unsplash.com/photo-1579165466740-5049c5cd9574?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 8rem 2rem;
            margin-bottom: 4rem;
        }
        
        .krama-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .krama-hero p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto;
            font-weight: 300;
        }
        
        /* Main Content Container */
        .krama-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        /* Traditional Presentation Sections */
        .cultural-section {
            margin: 5rem 0;
            padding: 3rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-top: 5px solid var(--primary);
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
        
        /* Krama Showcase Grid */
        .krama-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }
        
        .krama-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .krama-item:hover {
            transform: translateY(-5px);
        }
        
        .krama-image {
            height: 350px;
            overflow: hidden;
        }
        
        .krama-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .krama-item:hover .krama-image img {
            transform: scale(1.05);
        }
        
        .krama-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 1.5rem;
        }
        
        .krama-caption h3 {
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }
        
        /* Weaving Process */
        .process-steps {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .process-step {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        
        .step-number {
            background: var(--primary);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        
        .step-content {
            flex: 1;
        }
        
        /* Cultural Significance */
        .significance-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .significance-item {
            background: rgba(255,255,255,0.8);
            padding: 2rem;
            border-radius: 8px;
            border-left: 4px solid var(--accent);
        }
        
        .significance-item h3 {
            color: var(--primary);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .significance-item h3:before {
            content: "•";
            color: var(--secondary);
            font-size: 2rem;
            margin-right: 0.8rem;
        }
        
        /* Preservation Section */
        .preservation-callout {
            background: var(--primary);
            color: white;
            padding: 3rem;
            border-radius: 8px;
            margin: 4rem 0;
            text-align: center;
        }
        
        .preservation-callout h2 {
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .krama-hero h1 {
                font-size: 2.5rem;
            }
            
            .cultural-section {
                padding: 2rem 1rem;
            }
            
            .process-step {
                flex-direction: column;
            }
            
            .step-number {
                margin-bottom: 1rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    
    <main class="krama-container">
        <!-- Cultural Introduction -->
        <section class="cultural-section">
            <div class="section-header">
                <h2>三宅恭子さんのご協力で試作品を作ってみました</h2>
                <p>"昔ながらの日本の知恵は反物を裁断しないで糸をほどけば1枚の布に戻すことができること。
このあずま袋も2か所縫い合わせただけのシンプルなものですが、風呂敷のようにも使えますし、エコバッグにもなる優れものです"
</p>
            </div>
            
            
            <div class="krama-grid">
                <div class="krama-item">
                    <div class="krama-image">
                    <img src="{{ asset('img/krorma1.jpg') }}"
                 alt="Fresh walnuts">
                    </div>
                    <div class="krama-caption">
                        <h3>Traditional Weaving</h3>
                        <p>Handwoven on wooden looms using techniques passed through generations</p>
                    </div>
                </div>
                
                <div class="krama-item">
                    <div class="krama-image">
                        <img src="{{ asset('img/miyakesan.jpg') }}" alt="Krama in daily life">
                    </div>
                    <div class="krama-caption">
                        <h3>Daily Utility</h3>
                        <p>Essential for protection from sun and dust in rural Cambodia</p>
                    </div>
                </div>
                
                <div class="krama-item">
                    <div class="krama-image">
                        <img src="https://images.unsplash.com/photo-1563492065599-3520f775eeed?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Modern Krama fashion">
                    </div>
                    <div class="krama-caption">
                        <h3>Modern Adaptations</h3>
                        <p>Contemporary designers reimagining traditional patterns</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Traditional Weaving Process -->
        <section class="cultural-section">
            <div class="section-header">
                <h2>The Art of Krama Weaving</h2>
                <p>Preserving ancient techniques in a modern world</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Material Preparation</h3>
                        <p>Traditionally made from cotton or silk, the threads are carefully selected and dyed using natural pigments. The distinctive red and white checks come from madder root and chalk dyes.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Loom Setup</h3>
                        <p>Artisans use wooden frame looms, often passed down through families. The warp threads are measured and arranged with precise tension to create the foundation.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Pattern Weaving</h3>
                        <p>The weaver interlaces the weft threads through the warp, following traditional patterns that vary by region. A skilled weaver can produce about 2 meters of krama per day.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Finishing Touches</h3>
                        <p>The woven fabric is washed, stretched, and sometimes starched to achieve the perfect texture. Fringe is often added to the ends by hand.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Cultural Significance -->
        <section class="cultural-section">
            <div class="section-header">
                <h2>Cultural Significance</h2>
                <p>The Krama's role in Cambodian society</p>
            </div>
            
            <div class="significance-items">
                <div class="significance-item">
                    <h3>National Symbol</h3>
                    <p>The krama's distinctive pattern is instantly recognizable as Cambodian, representing national identity both domestically and abroad.</p>
                </div>
                
                <div class="significance-item">
                    <h3>Rural Livelihood</h3>
                    <p>Weaving provides income for many rural families, particularly women, helping preserve traditional village economies.</p>
                </div>
                
                <div class="significance-item">
                    <h3>Historical Resilience</h3>
                    <p>During difficult periods in Cambodian history, the krama remained a constant, symbolizing the endurance of Cambodian culture.</p>
                </div>
                
                <div class="significance-item">
                    <h3>Spiritual Meaning</h3>
                    <p>In Buddhist practice, the krama is often used in ceremonies and given as sacred offerings at temples.</p>
                </div>
            </div>
        </section>
        
        <!-- Preservation Efforts -->
        <section class="preservation-callout">
            <h2>Preserving the Krama Tradition</h2>
            <p style="max-width: 800px; margin: 0 auto 2rem;">As modernization accelerates, efforts to document and sustain traditional krama weaving techniques have become crucial. Organizations are working to:</p>
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 1.5rem; margin-top: 2rem;">
                <div style="background: rgba(255,255,255,0.2); padding: 1rem; border-radius: 6px;">Train new generations in traditional methods</div>
                <div style="background: rgba(255,255,255,0.2); padding: 1rem; border-radius: 6px;">Document regional pattern variations</div>
                <div style="background: rgba(255,255,255,0.2); padding: 1rem; border-radius: 6px;">Support artisan cooperatives</div>
                <div style="background: rgba(255,255,255,0.2); padding: 1rem; border-radius: 6px;">Promote ethical krama tourism</div>
            </div>
        </section>
    </main>
</body>
</html>