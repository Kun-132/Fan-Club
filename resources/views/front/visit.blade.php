<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Activities | Explore [Destination]</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    color: #333;
}

header {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://via.placeholder.com/1920x600?text=Destination');
    background-size: cover;
    color: white;
    text-align: center;
    padding: 100px 20px;
}

h1, h2 {
    margin: 0;
}

/* Gallery Styles */
.gallery {
    padding: 50px 20px;
    text-align: center;
}

.gallery-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

.gallery-item {
    position: relative;
    width: 100%;
    max-width: 400px;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.gallery-item img {
    width: 100%;
    height: auto;
    transition: transform 0.3s;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

.caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 10px;
    text-align: center;
}

/* Description Section */
.description {
    padding: 50px 20px;
    text-align: center;
    background: #f9f9f9;
    font-size: 24px;
}

.cta-button {
    background: #ff6b6b;
    color: white;
    border: none;
    padding: 12px 30px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 20px;
    transition: background 0.3s;
}

.cta-button:hover {
    background: #ff5252;
}

/* FAQ Section - Modern Redesign */
.faq {
    padding: 60px 20px;
    background: #f8f9fa;
    text-align: center;
}

.faq h2 {
    font-size: 2.2rem;
    margin-bottom: 40px;
    color: #2c3e50;
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    margin-bottom: 20px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-card:hover {
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    cursor: pointer;
    background: #fff;
    border-bottom: 1px solid #eee;
}

.faq-question h3 {
    margin: 0;
    font-size: 1.1rem;
    color: #2c3e50;
    font-weight: 600;
}

.faq-question i {
    color: #7f8c8d;
    transition: transform 0.3s ease;
}

.faq-card.active .faq-question i {
    transform: rotate(180deg);
    color: #3498db;
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    background: #f8f9fa;
}

.faq-card.active .faq-answer {
    max-height: 500px; /* Adjust based on content */
}

.faq-answer p {
    padding: 20px;
    margin: 0;
    color: #555;
    line-height: 1.6;
    text-align: left;
}

/* Footer */
footer {
    text-align: center;
    padding: 20px;
    background: #333;
    color: white;
}
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Explore [Destination]</h1>
        <p>Discover unforgettable experiences and adventures</p>
    </header>

    <!-- Image Gallery -->
    <section class="gallery">
        <h2>Popular Activities</h2>
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Hiking">
                <div class="caption">Scenic Hiking Trails</div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Beach">
                <div class="caption">Sunset Beach Tours</div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Food">
                <div class="caption">Local Food Tasting</div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="History">
                <div class="caption">Historical Landmarks</div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="History">
                <div class="caption">Historical Landmarks</div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="History">
                <div class="caption">Historical Landmarks</div>
            </div>
        </div>
    </section>

    <!-- Description Section -->
    <section class="description">
        <h2></h2>
        <p>
            [Destination] offers a unique blend of natural beauty, rich culture, and thrilling adventures. 
            Whether you're exploring ancient ruins, relaxing on pristine beaches, or tasting local delicacies, 
            there's something for everyone. Our guided tours ensure you experience the best of what [Destination] has to offer.
        </p>
        <button class="cta-button">Book a Tour Now</button>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
    <h2>よくある質問（FAQ)</h2>
    <p>はじめてのカンボジア、しかもディープな村に入るということで、知っておきたいことがいろいろあると思います。</p>
    <div class="faq-container">
        <!-- FAQ Item 1 -->
        <div class="faq-card">
            <div class="faq-question">
                <h3>これは持っていくべきものは何でしょうか</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>カンボジアは日中は３０度以上になりますが、朝夕は結構涼しいです。蒸し暑いので、汗拭き用のタオルは必須です。熱中症対策もお願いします。また、宿泊するところはゲストハウスなので、ご自身の洗面道具やシャンプー等を持参してください。
　それから、カンボジアのトイレは基本的にトイレットペーパーがありません。新しい施設や観光客が多いところは洋式ですが、和式のようなトイレも結構あります。桶から汲んで洗うという形になっています。携帯に便利な水に流せるティッシュや、たくさん使う人はトイレットペーパーの芯を抜いて１ロール持ってくるのもOKです。洋式になっていても甕から水を汲んで流すという方式もあります。
　また、日よけ対策も念入りにお願いします。 帽子やサングラスもあったほうがいいと思います。
　よく観光本に書いてあるような内容ですが、コンセントの差込口が違う場合(コンポントムのホテルは大丈夫です)や、電圧が日本と違いますのでご注意ください。汚れなどが気になる方はウェットティシュなども。レストランなどで出てきたコップの縁や濡れた器、スプーンなどを紙ナプキンで拭いたりするのはカンボジアでは失礼には当たりません。カンボジアの人もやります。　
　また、飛行機の中は乾燥し、冷房もすごく効いている場合もありますので、マスクや上着もあったほうがよいかと思います。
　他には、今、カンボジアは雨季です。突然のスコールなどもありますので、雨具があると便利です。アンコールワット早朝観光のためには、足元を照らす懐中電灯もあったほうがいいかもしれませんね、スマホでも大丈夫ですが。
　意外と役にたつのが、濡れても平気な履物をひとつ、余分に。ビーチサンダルで大丈夫です。</p>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-card">
            <div class="faq-question">
                <h3>マラリアとかは大丈夫ですか？</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>　カンボジアではプノンペンやシェムリアップ周辺にはあまりマラリア蚊はいないんだそうですが、一般的な蚊はいますし、デング熱もあります。しかも結構刺されると大きく腫れます。虫よけ対策は万全に準備されることをお勧めします。あと、蟻も結構噛みますので、基本的には直接肌を出さない服装をしているのが一番です。また、夜は意外に涼しいです。蚊取り線香やワンプッシュのリキッドタイプのものなども使っています。</p>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-card">
            <div class="faq-question">
                <h3>氷は大丈夫ですか？</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>カンボジアでは氷屋さんから仕入れたものをクーラーボックスで保管しています（真ん中が穴の開いている細長い氷が一般的）が、これで今までお腹を壊した経験はありません。怖いと思ったら汗をかいたとしてもお茶なども熱いものをオーダーしましょう。暑いからといってあまり冷たいものばかりゴクゴク飲んでいるとそれでお腹を冷やすことがありますので、ご注意ください。</p>
            </div>
        </div>
         <div class="faq-card">
            <div class="faq-question">
                <h3>両替はどれくらいしたらいいでしょうか？</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>カンボジアの通貨は「リエル」ですが、実はアメリカドルがかなり普通に生活の中で使えます。なので、ドルだけ両替をしてくださったら大丈夫です。１ドル＝４０００リエルになります。例えば、５０００リエルの買い物の時は１ドルと１０００リエルという払い方をしてもOKですし、５０００リエルを払ってもOKです。２ドル出せば３０００リエルのお釣りが返ってきます。
　1万円もあれば不自由ないと思いますが、100ドルや50ドル札などはお釣りが出せないので受け取ってもらえないところが多いです。なるべく細かいドル札（1、5、10ドル札）で持ってこられることをお勧めします。</p>
            </div>
        </div>
         <div class="faq-card">
            <div class="faq-question">
                <h3>薬は何を持っていけばいいですか？</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>　食あたりや風邪薬、胃薬など、自分のお気に入りのものがあれば持参することをお勧めします。日中、暑くて汗をかいて、夜に窓を開け放して涼しい風に当たって風邪をひくこともあります。あとは虫刺され用の薬、虫よけスプレーも必須です。</p>
            </div>
        </div>
        <div class="faq-card">
            <div class="faq-question">
                <h3>治安はどうですか？</h3>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>　私たちが経験している限りでは、ここではあまり危ないと思ったことがありません。真っ暗になる夜には、出歩かないので…。ベトナムやタイに比べて事件・事故が少ないと思います。ただし、盗難事故はあり得ます。特に気をつけたいのがお金と携帯電話です。用心していつも貴重品は肌身離さず持つようにしてください。
　あまり金目のものを多く持ってこない、肌身離さず持ち歩くようにするなど、自分なりの管理をお願いします。きれいで何か高そうなものが入っていそうだと目をつけられたら盗まれることもあるかもしれませんから…。盗ませるような不用心が罪を作ります。</p>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 [Destination] Tourism Board. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
    <script>
       document.querySelectorAll('.faq-card').forEach(card => {
    const question = card.querySelector('.faq-question');
    question.addEventListener('click', () => {
        card.classList.toggle('active');
        
        // Close other open FAQs
        document.querySelectorAll('.faq-card').forEach(otherCard => {
            if (otherCard !== card && otherCard.classList.contains('active')) {
                otherCard.classList.remove('active');
            }
        });
    });
});
    </script>
</body>
</html>