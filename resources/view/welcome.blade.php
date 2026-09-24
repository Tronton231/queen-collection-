<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produk - Queen Collection</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f5f2;
            color: #222;
        }

        header {
            background: #111;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            letter-spacing: 2px;
        }

        nav {
            margin-top: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 40px 20px;
        }

        .title {
            text-align: center;
            margin-bottom: 35px;
        }

        .title h2 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .title p {
            color: #777;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
            transition: .2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .photo {
            height: 260px;
            background: #e5e5e5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
        }

        .info {
            padding: 20px;
        }

        .info h3 {
            margin-bottom: 8px;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn {
            display: block;
            text-align: center;
            background: #111;
            color: white;
            text-decoration: none;
            padding: 12px;
            border-radius: 8px;
        }

        footer {
            margin-top: 50px;
            background: #111;
            color: white;
            text-align: center;
            padding: 25px;
        }
    </style>
</head>

<body>

<header>
    <h1>QUEEN COLLECTION</h1>

    <nav>
        <a href="/">Home</a>
        <a href="/produk">Produk</a>
    </nav>
</header>

<div class="container">

    <div class="title">
        <h2>Our Collection</h2>
        <p>Pilih produk favoritmu</p>
    </div>

    <div class="grid">

        <div class="card">
            <div class="photo">Foto Produk 1</div>

            <div class="info">
                <h3>Queen Dress</h3>
                <p class="price">Rp299.000</p>

                <a href="#" class="btn">
                    Lihat Detail
                </a>
            </div>
        </div>

        <div class="card">
            <div class="photo">Foto Produk 2</div>

            <div class="info">
                <h3>Elegant Blouse</h3>
                <p class="price">Rp199.000</p>

                <a href="#" class="btn">
                    Lihat Detail
                </a>
            </div>
        </div>

        <div class="card">
            <div class="photo">Foto Produk 3</div>

            <div class="info">
                <h3>Queen Skirt</h3>
                <p class="price">Rp229.000</p>

                <a href="#" class="btn">
                    Lihat Detail
                </a>
            </div>
        </div>

        <div class="card">
            <div class="photo">Foto Produk 4</div>

            <div class="info">
                <h3>Royal Set</h3>
                <p class="price">Rp349.000</p>

                <a href="#" class="btn">
                    Lihat Detail
                </a>
            </div>
        </div>

    </div>

</div>

<footer>
    <p>© 2026 Queen Collection</p>
</footer>

</body>
</html>

