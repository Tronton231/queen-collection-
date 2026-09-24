<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product['name'] }} — Queen Collection</title>

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
            min-height: 100vh;
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
        }

        .blob.one {
            background: #f0abfc;
            top: -80px;
            left: -100px;
        }

        .blob.two {
            background: #c4b5fd;
            right: -100px;
            bottom: -100px;
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

            background: rgba(255,255,255,.75);
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

        nav a {
            color: #222;
            text-decoration: none;
            font-size: 13px;
            font-weight: 800;
        }

        /* PRODUCT */

        .product-page {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 140px 6% 80px;
        }

        .product-card {
            width: min(1050px, 100%);

            display: grid;
            grid-template-columns: 1fr 1fr;

            overflow: hidden;

            background: rgba(255,255,255,.72);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border: 1px solid rgba(255,255,255,.9);
            border-radius: 35px;

            box-shadow: 0 25px 70px rgba(0,0,0,.08);

            animation: appear .7s ease;
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(35px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* IMAGE */

        .product-image {
            min-height: 550px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 130px;

            background: linear-gradient(
                135deg,
                #fbcfe8,
                #e9d5ff
            );
        }

        /* DETAIL */

        .product-detail {
            padding: 55px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .category {
            display: inline-block;

            width: fit-content;

            padding: 8px 14px;

            margin-bottom: 20px;

            border-radius: 50px;

            background: #fce7f3;
            color: #c026d3;

            font-size: 11px;
            font-weight: 900;
        }

        .product-detail h1 {
            font-size: clamp(38px, 6vw, 65px);

            line-height: .95;

            letter-spacing: -3px;

            font-weight: 900;

            margin-bottom: 20px;
        }

        .description {
            color: #666;

            line-height: 1.8;

            font-size: 14px;

            margin-bottom: 25px;
        }

        .price {
            font-size: 32px;
            font-weight: 900;

            margin-bottom: 28px;
        }

        .price span {
            color: #c026d3;
        }

        /* SIZE */

        .size-title {
            font-size: 13px;
            font-weight: 800;

            margin-bottom: 10px;
        }

        .sizes {
            display: flex;
            gap: 10px;

            margin-bottom: 30px;
        }

        .size {
            padding: 10px 17px;

            border-radius: 11px;

            background: white;

            border: 1px solid #ddd;

            font-size: 12px;
            font-weight: 800;

            cursor: pointer;

            transition: .25s;
        }

        .size:hover,
        .size.active {
            background: #111;
            color: white;
            border-color: #111;
        }

        /* BUTTON */

        .buy {
            display: block;

            width: 100%;

            padding: 16px;

            border-radius: 15px;

            background: #111;
            color: white;

            text-align: center;
            text-decoration: none;

            font-size: 14px;
            font-weight: 900;

            transition: .3s;

            box-shadow: 0 12px 30px rgba(0,0,0,.15);
        }

        .buy:hover {
            background: #c026d3;
            transform: translateY(-3px);
        }

.cart-button {
    display: block;

    width: 100%;

    margin-top: 12px;

    padding: 15px;

    border-radius: 15px;

    background: white;
    color: #111;

    border: 1px solid #ddd;

    font-family: inherit;

    font-size: 14px;
    font-weight: 900;

    cursor: pointer;

    transition: .3s;
}

.cart-button:hover {
    background: #c026d3;
    color: white;

    border-color: #c026d3;

    transform: translateY(-3px);
}
        .back {
            display: block;

            margin-top: 15px;

            text-align: center;

            color: #777;

            text-decoration: none;

            font-size: 12px;
            font-weight: 700;
        }

        .back:hover {
            color: #c026d3;
        }

        /* MOBILE */

        @media (max-width: 750px) {

            .product-card {
                grid-template-columns: 1fr;
            }

            .product-image {
                min-height: 330px;
                font-size: 100px;
            }

            .product-detail {
                padding: 35px 25px;
            }

            .product-detail h1 {
                letter-spacing: -2px;
            }

            .product-page {
                padding-top: 120px;
            }
        }
    </style>
</head>

<body>

    <div class="blob one"></div>
    <div class="blob two"></div>


    <!-- NAVBAR -->

    <nav>

        <div class="logo">
            QUEEN<span>.</span>
        </div>

        <a href="/produk">
            ← Produk
        </a>

    </nav>


    <!-- PRODUCT DETAIL -->

    <main class="product-page">

        <div class="product-card">

            <div class="product-image">
                {{ $product['icon'] }}
            </div>


            <div class="product-detail">

                <div class="category">
                    QUEEN COLLECTION
                </div>

                <h1>
                    {{ $product['name'] }}
                </h1>

                <p class="description">
                    {{ $product['description'] }}
                </p>

                <div class="price">
                    Rp<span>25.000</span>
                </div>


                <div class="size-title">
                    Pilih Ukuran
                </div>

                <div class="sizes">

                    <button class="size" onclick="selectSize(this)">
                        S
                    </button>

                    <button class="size" onclick="selectSize(this)">
                        M
                    </button>

                    <button class="size" onclick="selectSize(this)">
                        L
                    </button>

                    <button class="size" onclick="selectSize(this)">
                        XL
                    </button>

                </div>


                <a
                    id="buyButton"
                    href="#"
                    class="buy">

                    Beli Sekarang via WhatsApp

                </a>

<form
    action="/keranjang/tambah/{{ $product['id'] }}"
    method="POST">

    @csrf

    <button
        type="submit"
        class="cart-button">

        🛒 Tambah ke Keranjang

    </button>

</form>


                <a
                    href="/produk"
                    class="back">

                    ← Kembali ke semua produk

                </a>

            </div>

        </div>

    </main>


    <script>

        let selectedSize = "M";

        function selectSize(button) {

            document
                .querySelectorAll(".size")
                .forEach(size => {

                    size.classList.remove("active");

                });

            button.classList.add("active");

            selectedSize = button.innerText;

            updateWhatsApp();

        }


        function updateWhatsApp() {

            const productName =
                @json($product['name']);

            const message =
                "Halo Queen Collection, saya mau pesan " +
                productName +
                " ukuran " +
                selectedSize +
                " dengan harga Rp25.000.";

            const url =
                "https://wa.me/628881223438?text=" +
                encodeURIComponent(message);

            document
                .getElementById("buyButton")
                .href = url;

        }


        updateWhatsApp();

    </script>

</body>
</html>
