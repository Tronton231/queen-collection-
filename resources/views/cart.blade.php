<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Keranjang — Queen Collection</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f7f4f0;
            color: #171717;
            min-height: 100vh;
        }

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
            top: -100px;
            left: -100px;
        }

        .blob.two {
            background: #c4b5fd;
            right: -100px;
            bottom: -100px;
        }

        nav {
            position: fixed;
            top: 18px;
            left: 50%;
            transform: translateX(-50%);

            width: min(1100px, 92%);

            padding: 14px 20px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            background: rgba(255,255,255,.75);
            backdrop-filter: blur(20px);

            border: 1px solid rgba(255,255,255,.9);
            border-radius: 22px;

            box-shadow: 0 12px 40px rgba(0,0,0,.08);
        }

        .logo {
            font-size: 19px;
            font-weight: 900;
        }

        .logo span {
            color: #c026d3;
        }

        nav a {
            text-decoration: none;
            color: #222;
            font-size: 13px;
            font-weight: 800;
        }

        main {
            max-width: 900px;
            margin: auto;

            padding: 140px 20px 80px;
        }

        .title {
            text-align: center;
            margin-bottom: 40px;
        }

        .title h1 {
            font-size: clamp(40px, 8vw, 65px);
            font-weight: 900;
            letter-spacing: -3px;
        }

        .title p {
            margin-top: 10px;
            color: #777;
        }

        .cart {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .item {
            display: flex;
            align-items: center;
            gap: 18px;

            padding: 20px;

            background: rgba(255,255,255,.75);
            backdrop-filter: blur(15px);

            border: 1px solid rgba(255,255,255,.9);
            border-radius: 22px;

            box-shadow: 0 12px 35px rgba(0,0,0,.06);
        }

        .icon {
            width: 70px;
            height: 70px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 18px;

            background: linear-gradient(
                135deg,
                #fbcfe8,
                #e9d5ff
            );

            font-size: 35px;
        }

        .info {
            flex: 1;
        }

        .info h2 {
            font-size: 17px;
            margin-bottom: 6px;
        }

        .info p {
            color: #777;
            font-size: 13px;
        }

        .quantity {
            font-size: 13px;
            font-weight: 800;
        }

        .item-price {
            font-size: 16px;
            font-weight: 900;
        }

        .summary {
            margin-top: 25px;

            padding: 25px;

            background: #111;
            color: white;

            border-radius: 25px;

            box-shadow: 0 15px 40px rgba(0,0,0,.15);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .summary-row span:first-child {
            color: #aaa;
            font-size: 13px;
        }

        .total {
            font-size: 24px;
            font-weight: 900;
        }

        .checkout {
            display: block;

            margin-top: 20px;

            padding: 15px;

            border-radius: 14px;

            background: white;
            color: #111;

            text-align: center;
            text-decoration: none;

            font-size: 13px;
            font-weight: 900;

            transition: .3s;
        }

        .checkout:hover {
            background: #c026d3;
            color: white;
        }

        .empty {
            padding: 60px 20px;

            text-align: center;

            background: rgba(255,255,255,.7);
            border-radius: 25px;
        }

        .empty-icon {
            font-size: 55px;
            margin-bottom: 15px;
        }

        .empty h2 {
            margin-bottom: 10px;
        }

        .empty p {
            color: #777;
            margin-bottom: 25px;
        }

        .back {
            display: inline-block;

            padding: 13px 20px;

            border-radius: 13px;

            background: #111;
            color: white;

            text-decoration: none;

            font-size: 13px;
            font-weight: 800;
        }

        @media (max-width: 600px) {

            .item {
                flex-wrap: wrap;
            }

            .item-price {
                width: 100%;
                margin-left: 88px;
            }
        }
    </style>
</head>

<body>

    <div class="blob one"></div>
    <div class="blob two"></div>


    <nav>

        <div class="logo">
            QUEEN<span>.</span>
        </div>

        <a href="/produk">
            ← Produk
        </a>

    </nav>


    <main>

        <div class="title">

            <h1>
                Keranjang
            </h1>

            <p>
                Produk yang kamu pilih
            </p>

        </div>


        @if(count($cart) === 0)

            <div class="empty">

                <div class="empty-icon">
                    🛒
                </div>

                <h2>
                    Keranjang masih kosong
                </h2>

                <p>
                    Yuk pilih baju favoritmu.
                </p>

                <a
                    href="/produk"
                    class="back">

                    Lihat Produk

                </a>

            </div>

        @else

            <div class="cart">

                @php
                    $total = 0;
                @endphp


                @foreach($cart as $item)

                    @php
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    @endphp


                    <div class="item">

                        <div class="icon">
                            {{ $item['icon'] }}
                        </div>

                        <div class="info">

                            <h2>
                                {{ $item['name'] }}
                            </h2>

                            <p>
                                Rp{{ number_format($item['price'], 0, ',', '.') }}
                                × {{ $item['quantity'] }}
                            </p>

                        </div>

                        <div class="quantity">
                            {{ $item['quantity'] }}x
                        </div>

                        <div class="item-price">
                            Rp{{ number_format($subtotal, 0, ',', '.') }}
                        </div>

                    </div>

                @endforeach

            </div>


            <div class="summary">

                <div class="summary-row">

                    <span>
                        Total Belanja
                    </span>

                    <div class="total">
                        Rp{{ number_format($total, 0, ',', '.') }}
                    </div>

                </div>


                <a
                    href="https://wa.me/628881223438?text=Halo%20Queen%20Collection%2C%20saya%20ingin%20memesan%20produk%20dari%20keranjang."
                    class="checkout">

                    Checkout via WhatsApp

                </a>

            </div>

        @endif

    </main>

</body>
</html>
