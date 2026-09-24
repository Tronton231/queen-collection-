<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produk — Queen Collection</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f7f4f0;
            color: #171717;
            overflow-x: hidden;
        }

        /* BACKGROUND */

        .blob {
            position: fixed;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            filter: blur(100px);
            opacity: .22;
            z-index: -1;
            animation: floating 9s ease-in-out infinite;
        }

        .blob.one {
            background: #f0abfc;
            top: 0;
            left: -100px;
        }

        .blob.two {
            background: #c4b5fd;
            right: -100px;
            top: 45%;
            animation-delay: 2s;
        }

        .blob.three {
            background: #f9a8d4;
            bottom: -150px;
            left: 30%;
            animation-delay: 4s;
        }

        @keyframes floating {
            0%, 100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(30px, -40px);
            }
        }

        /* NAVBAR */

        nav {
            position: fixed;
            z-index: 1000;

            top: 18px;
            left: 50%;
            transform: translateX(-50%);

            width: min(1100px, 92%);

            padding: 14px 20px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: rgba(255,255,255,.72);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border: 1px solid rgba(255,255,255,.9);
            border-radius: 22px;

            box-shadow: 0 12px 40px rgba(0,0,0,.08);
        }

        .logo {
            font-size: 19px;
            font-weight: 900;
            letter-spacing: -1px;
        }

        .logo span {
            color: #c026d3;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-links a {
            color: #222;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: .3s;
        }

        .nav-links a:hover {
            color: #c026d3;
        }

        /* HEADER */

        .header {
            min-height: 55vh;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            padding: 150px 7% 70px;
        }

        .header-content {
            max-width: 850px;
        }

        .badge {
            display: inline-block;

            padding: 9px 16px;
            margin-bottom: 22px;

            border-radius: 50px;

            background: rgba(255,255,255,.7);
            border: 1px solid rgba(255,255,255,.9);

            font-size: 12px;
            font-weight: 800;
        }

        .header h1 {
            font-size: clamp(45px, 10vw, 90px);
            line-height: .95;
            letter-spacing: -5px;
            font-weight: 900;

            background: linear-gradient(
                90deg,
                #111,
                #c026d3,
                #ec4899
            );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .header p {
            max-width: 600px;

            margin: 25px auto 0;

            color: #666;
            line-height: 1.7;
        }

        /* PRODUCTS */

        .products-section {
            padding: 40px 7% 100px;
        }

        .products {
            max-width: 1100px;
            margin: auto;

            display: grid;
            grid-template-columns: repeat(3, 1fr);

            gap: 22px;
        }

        .product {
            overflow: hidden;

            border-radius: 28px;

            background: rgba(255,255,255,.72);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            border: 1px solid rgba(255,255,255,.9);

            box-shadow: 0 15px 40px rgba(0,0,0,.07);

            transition: .4s;

            opacity: 0;
            transform: translateY(40px);
        }

        .product.show {
            opacity: 1;
            transform: translateY(0);
        }

        .product:hover {
            transform: translateY(-10px);
        }

        .product-image {
            height: 300px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 80px;

            background: linear-gradient(
                135deg,
                #fbcfe8,
                #e9d5ff
            );
        }

        .product:nth-child(2) .product-image {
            background: linear-gradient(
                135deg,
                #ddd6fe,
                #bfdbfe
            );
        }

        .product:nth-child(3) .product-image {
            background: linear-gradient(
                135deg,
                #fed7aa,
                #fef3c7
            );
        }

        .product:nth-child(4) .product-image {
            background: linear-gradient(
                135deg,
                #fecdd3,
                #f5d0fe
            );
        }

        .product:nth-child(5) .product-image {
            background: linear-gradient(
                135deg,
                #bae6fd,
                #ddd6fe
            );
        }

        .product:nth-child(6) .product-image {
            background: linear-gradient(
                135deg,
                #bbf7d0,
                #d9f99d
            );
        }

        .product-info {
            padding: 22px;
        }

        .product-info h2 {
            font-size: 19px;
            margin-bottom: 8px;
        }

        .product-info p {
            color: #777;
            font-size: 13px;
            line-height: 1.6;

            margin-bottom: 15px;
        }

        .product-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .price {
            font-size: 19px;
            font-weight: 900;
        }

        .buy-btn {
            padding: 10px 16px;

            border-radius: 11px;

            background: #111;
            color: white;

            text-decoration: none;

            font-size: 12px;
            font-weight: 800;

            transition: .3s;
        }

        .buy-btn:hover {
            background: #c026d3;
            transform: translateY(-2px);
        }

        /* BACK BUTTON */

        .back {
            text-align: center;
            margin-top: 55px;
        }

        .back a {
            display: inline-block;

            padding: 14px 22px;

            border-radius: 14px;

            background: rgba(255,255,255,.75);
            color: #222;

            border: 1px solid rgba(255,255,255,.9);

            text-decoration: none;

            font-size: 13px;
            font-weight: 800;

            transition: .3s;
        }

        .back a:hover {
            background: #111;
            color: white;
        }

        /* FOOTER */

        footer {
            padding: 50px 20px;

            text-align: center;

            background: #111;
            color: white;
        }

        footer h3 {
            font-size: 20px;
        }

        footer p {
            margin-top: 10px;
            color: #aaa;
            font-size: 13px;
        }

        /* MOBILE */

        @media (max-width: 750px) {

            .nav-links {
                gap: 15px;
            }

            .products {
                grid-template-columns: 1fr;
            }

            .header h1 {
                letter-spacing: -3px;
            }

            .product-image {
                height: 280px;
            }
        }
    </style>
</head>

<body>

    <!-- BACKGROUND -->

    <div class="blob one"></div>
    <div class="blob two"></div>
    <div class="blob three"></div>


    <!-- NAVBAR -->

    <nav>

        <div class="logo">
            QUEEN<span>.</span>
        </div>

        <ul class="nav-links">

            <li>
                <a href="/">Home</a>
            </li>

            <li>
                <a href="#koleksi">Produk</a>
            </li>

        </ul>

    </nav>


    <!-- HEADER -->

    <header class="header">

        <div class="header-content">

            <div class="badge">
                ✦ QUEEN COLLECTION
            </div>

            <h1>
                Koleksi Baju
            </h1>

            <p>
                Temukan berbagai pilihan baju Queen Collection
                dengan harga terjangkau. Semua produk hanya
                Rp25.000.
            </p>

        </div>

    </header>


    <!-- PRODUK -->

    <section
        class="products-section"
        id="koleksi">

        <div class="products">


            <!-- PRODUK 1 -->

            <div class="product">

                <div class="product-image">
                    👕
                </div>

                <div class="product-info">

                    <h2>
                        Queen Basic
                    </h2>

                    <p>
                        Baju basic yang nyaman untuk
                        dipakai sehari-hari.
                    </p>

                    <div class="product-bottom">

                        <div class="price">
                            Rp25.000
                        </div>

                        <a
                            href="https://wa.me/628881223438?text=Halo%20Queen%20Collection%2C%20saya%20mau%20pesan%20Queen%20Basic%20Rp25.000."
                            class="buy-btn">

                            Beli

                        </a>

                    </div>

                </div>

            </div>


            <!-- PRODUK 2 -->

            <div class="product">

                <div class="product-image">
                    👚
                </div>

                <div class="product-info">

                    <h2>
                        Queen Casual
                    </h2>

                    <p>
                        Model casual untuk aktivitas
                        harian.
                    </p>

                    <div class="product-bottom">

                        <div class="price">
                            Rp25.000
                        </div>

                        <a
                            href="https://wa.me/628881223438?text=Halo%20Queen%20Collection%2C%20saya%20mau%20pesan%20Queen%20Casual%20Rp25.000."
                            class="buy-btn">

                            Beli

                        </a>

                    </div>

                </div>

            </div>


            <!-- PRODUK 3 -->

            <div class="product">

                <div class="product-image">
                    👕
                </div>

                <div class="product-info">

                    <h2>
                        Queen Simple
                    </h2>

                    <p>
                        Desain simpel yang mudah dipadukan
                        dengan berbagai outfit.
                    </p>

                    <div class="product-bottom">

                        <div class="price">
                            Rp25.000
                        </div>

                        <a
                            href="https://wa.me/628881223438?text=Halo%20Queen%20Collection%2C%20saya%20mau%20pesan%20Queen%20Simple%20Rp25.000."
                            class="buy-btn">

                            Beli

                        </a>

                    </div>

                </div>

            </div>


            <!-- PRODUK 4 -->

            <div class="product">

                <div class="product-image">
                    👚
                </div>

                <div class="product-info">

                    <h2>
                        Queen Daily
                    </h2>

                    <p>
                        Pilihan baju untuk menemani
                        kegiatan sehari-hari.
                    </p>

                    <div class="product-bottom">

                        <div class="price">
                            Rp25.000
                        </div>

                        <a
                            href="https://wa.me/628881223438?text=Halo%20Queen%20Collection%2C%20saya%20mau%20pesan%20Queen%20Daily%20Rp25.000."
                            class="buy-btn">

                            Beli

                        </a>

                    </div>

                </div>

            </div>


            <!-- PRODUK 5 -->

            <div class="product">

                <div class="product-image">
                    👕
                </div>

                <div class="product-info">

                    <h2>
                        Queen Street
                    </h2>

                    <p>
                        Gaya santai untuk aktivitas
                        outdoor dan nongkrong.
                    </p>

                    <div class="product-bottom">

                        <div class="price">
                            Rp25.000
                        </div>

                        <a
                            href="https://wa.me/628881223438?text=Halo%20Queen%20Collection%2C%20saya%20mau%20pesan%20Queen%20Street%20Rp25.000."
                            class="buy-btn">

                            Beli

                        </a>

                    </div>

                </div>

            </div>


            <!-- PRODUK 6 -->

            <div class="product">

                <div class="product-image">
                    👚
                </div>

                <div class="product-info">

                    <h2>
                        Queen Style
                    </h2>

                    <p>
                        Baju simpel dan stylish untuk
                        berbagai kesempatan.
                    </p>

                    <div class="product-bottom">

                        <div class="price">
                            Rp25.000
                        </div>

                        <a
                            href="https://wa.me/628881223438?text=Halo%20Queen%20Collection%2C%20saya%20mau%20pesan%20Queen%20Style%20Rp25.000."
                            class="buy-btn">

                            Beli

                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- BACK -->

        <div class="back">

            <a href="/">
                ← Kembali ke Home
            </a>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        <h3>
            QUEEN COLLECTION
        </h3>

        <p>
            Fashion • Simple • Affordable
        </p>

        <p>
            © 2026 Queen Collection
        </p>

    </footer>


    <script>

        const products =
            document.querySelectorAll(".product");


        const observer =
            new IntersectionObserver(
                entries => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add("show");

                            observer.unobserve(entry.target);

                        }

                    });

                },
                {
                    threshold: 0.12
                }
            );


        products.forEach(product => {

            observer.observe(product);

        });

    </script>

</body>
</html>
