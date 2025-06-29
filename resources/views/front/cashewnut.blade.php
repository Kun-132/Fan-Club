<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Walnuts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            padding: 30px 0;
            background-color: #f8f9fa;
        }
        .hero-image {
            width: 100%;
            height: 600px;
            object-fit: cover;
            border-radius: 8px;
            margin: 30px 0;
        }
        .process-section {
            padding: 60px 0;
            background-color: #fff;
        }
        .process-step {
            text-align: center;
            padding: 20px;
        }
        .process-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 15px;
            border: 3px solid #6c757d;
        }
        .arrow {
            font-size: 4rem;
            color: #27a844;
            margin: 20px 0;
            text-align: center;
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
            color: #28a745;
        }
        .btn-reserve {
            background-color: #28a745;
            color: white;
            padding: 12px 30px;
            font-size: 1.2rem;
            margin-top: 20px;
            border: none;
            border-radius: 50px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
      <div class="container mt-2">
        <a href="{{ route('front.intro') }}" class="btn btn-outline-success">
            ← Back
        </a>
    </div>
    <section class="hero-section">
        <div class="container">

            <h1 class="text-center mb-4">Premium Organic Walnuts</h1>
            <img src="{{ asset('img/bk-walnut.jpg') }}"
                 alt="Fresh walnuts" class="hero-image">
            <p class="lead text-center">
                Our walnuts are hand-picked from the finest orchards, ensuring the highest quality and freshness. 
                Grown without pesticides and harvested at peak ripeness, they deliver exceptional flavor and nutrition.
            </p>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="text-center mb-5">How walnuts are transport?</h2>
            
            <div class="row">
                <!-- Step 1 -->
                <div class="col-md-3 process-step">
                    <img src="https://images.unsplash.com/photo-1519683109079-d5f539e1542f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Harvesting" class="process-circle">
                    <h4>Saudam City</h4>
                    <p>Hand-picked at perfect ripeness</p>
                </div>
                
                <div class="col-md-1 d-flex align-items-center justify-content-center">
                    <div class="arrow">→</div>
                </div>
                
                <!-- Step 2 -->
                <div class="col-md-3 process-step">
                    <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Drying" class="process-circle">
                    <h4>Myitkyina</h4>
                    <p>Naturally dried to preserve flavor</p>
                </div>
                
                <div class="col-md-1 d-flex align-items-center justify-content-center">
                    <div class="arrow">→</div>
                </div>
                
                <!-- Step 3 -->
                <div class="col-md-3 process-step">
                    <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Sorting" class="process-circle">
                    <h4>Yangon</h4>
                    <p>Quality checked by experts</p>
                </div>
                
                <div class="col-md-1 d-flex align-items-center justify-content-center">
                    <div class="arrow">→</div>
                </div>
                
                <!-- Step 4 -->
                <div class="col-md-3 process-step">
                    <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Packaging" class="process-circle">
                    <h4>Japan</h4>
                    <p>Sealed for freshness</p>
                </div>
            </div>
            
            <p class="text-center mt-5 lead">
                Each step of our process is carefully monitored to ensure you receive only the best walnuts, 
                packed with nutrients and delicious flavor.
            </p>
        </div>
    </section>

    <!-- Inventory Section -->
    <section class="inventory-section">
        <div class="container">
            <div class="inventory-label">Current Inventory Available:</div>
            <div class="inventory-amount">100 kg x 10 person</div>
            <button class="btn-reserve">Reserve Now</button>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple reservation button interaction
        document.querySelector('.btn-reserve').addEventListener('click', function() {
            alert('Reservation system will be implemented soon!');
        });
    </script>
</body>
</html>
