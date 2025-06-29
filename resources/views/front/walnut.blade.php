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

            <h1 class="text-center mb-4">市民で繋ぐ黒クルミ</h1>
            <img src="{{ asset('img/walnuts.jpg') }}"
                 alt="Fresh walnuts" class="hero-image">
            <p class="lead text-center">
                "空爆があるので森の中の空から見えない道での運送になりました。
今までは舗装された一般道路を走るバスにクルミを首都・ミッチナー事務所に来るたびにスドン村のスタッフが運んでいました。両軍が検問所を作っていたので、その道を空爆することはありませんでした。しかし、空港も含めて一方の軍が治めるようになり、両者による検問所はなくなったのですが、いなくなった軍は空爆ができるようになりました。
そこでベトナム戦争でもそうであったように密林の中の道を見えない運送路として市民は使うようになっています。別途、トラックをチャーターして（７ラック）、悪路をスドン村から州都・ミッチナーに運んでもらいました。
さらにミッチナーからヤンゴンへは陸路では早くて３日間かかります。今はアメリカに留学している元スタッフは、バスが襲われ野宿したことがあり、陸路はともかくいろいろな勢力が入り乱れていますので危険です。空路を選ばざる得ませんでした（10kg ７ラックで15×７ラック（１ラックは6,666円で67万円）でしたが、いろいろ理屈を付けられて追加料金を取られ余分にかかりました。10kgは伝手を使って知り合いにロジサポ（ついでにボランティアで運ぶ仕組み）が引き受けてもらいましたが、ミッチナー事務所でクルミの料理レシピ開発に使い、ビデオで送ってくれ、としましたが、できていないので、７月の樋口がミッチナーに入れたら入ると言ってくれているので、その際に荷物として運びます。
ともかく「危機時に繫ぐ」ことの難しさとコスト高を体験しています。平和な日本では想像もできないでしょうが、世界の戦地では現実に起きていることです。"

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
