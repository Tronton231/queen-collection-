<!DOCTYPE html><html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Queen Collection</title>

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
        background: #f8f5f7;
        color: #171717;
        overflow-x: hidden;
    }

    /* =========================
       BACKGROUND
    ========================= */

    body::before {
        content: "";
        position: fixed;
        width: 500px;
        height: 500px;
        top: -180px;
        left: -180px;
        background: #f3b5df;
        filter: blur(100px);
        opacity: .35;
        border-radius: 50%;
        z-index: -2;
    }

    body::after {
        content: "";
        position: fixed;
        width: 500px;
        height: 500px;
        right: -180px;
        bottom: -180px;
        background: #cdb9ff;
        filter: blur(110px);
        opacity: .3;
        border-radius: 50%;
        z-index: -2;
    }

    /* =========================
       NAVBAR
    ========================= */

    nav {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: min(1150px, 92%);
        padding: 15px 22px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: rgba(255,255,255,.72);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,.9);
        border-radius: 22px;
        box-shadow: 0 15px 45px rgba(0,0,0,.08);
        z-index: 1000;
    }

    .logo {
        font-size: 20px;
        font-weight: 900;
        letter-spacing: -1px;
    }

    .logo span {
        color: #d946a6;
    }

    .nav-links {
        display: flex;
        gap: 30px;
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
        color: #d946a6;
    }

    .menu-btn {
        display: none;
        border: none;
        background: none;
        font-size: 25px;
        cursor: pointer;
    }

    /* =========================
       HERO 16:9
    ========================= */

    .hero {
        min-height: 100vh;
        max-width: 1400px;
        margin: auto;
        padding: 120px 7% 60px;

        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: 50px;
    }

    .hero-text {
        animation: heroText .9s ease forwards;
    }

    @keyframes heroText {
        from {
            opacity: 0;
            transform: translateX(-40px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .badge {
        display: inline-block;
        padding: 9px 15px;
        margin-bottom: 22px;
        border-radius: 50px;
        background: white;
        border: 1px solid #eee;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: .5px;
    }

    .hero h1 {
        font-size: clamp(65px, 9vw, 135px);
        line-height: .8;
        letter-spacing: -8px;
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

    .hero h2 {
        margin-top: 25px;
        font-size: clamp(25px, 3vw, 43px);
        line-height: 1.1;
    }

    .hero-text p {
        max-width: 560px;
        margin: 20px 0;
        color: #666;
        line-height: 1.7;
    }

    .price {
        font-size: 20px;
        font-weight: 800;
        margin: 25px 0;
    }

    .price span {
        color: #c026d3;
    }

    .hero-btn {
        display: inline-block;
        padding: 15px 25px;
        border-radius: 14px;
        background: #111;
        color: white;
        text-decoration: none;
        font-size: 13px;
        font-weight: 800;
        box-shadow: 0 15px 35px rgba(0,0,0,.15);
        transition: .3s;
    }

    .hero-btn:hover {
        transform: translateY(-5px);
        background: #c026d3;
    }

    /* =========================
       HERO IMAGE
    ========================= */

    .hero-visual {
        min-height: 570px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .image-card {
        width: min(420px, 80%);
        height: 520px;
        border-radius: 220px 220px 35px 35px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 30px 80px rgba(0,0,0,.18);
        background: #ddd;
        z-index: 2;
    }

    .image-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* =========================
       ROTATING CIRCLE
    ========================= */

    .orbit {
        position: absolute;
        width: 510px;
        height: 510px;
        border: 1px solid rgba(192,38,211,.35);
        border-radius: 50%;
        animation: rotate 14s linear infinite;
        z-index: 1;
    }

    .orbit::before {
        content: "QUEEN • COLLECTION • FASHION • ";
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%);
        padding: 7px 15px;
        background: #111;
        color: white;
        border-radius: 50px;
        font-size: 10px;
        font-weight: 800;
        white-space: nowrap;
        letter-spacing: 2px;
    }

    .orbit-dot {
        position: absolute;
        width: 18px;
        height: 18px;
        background: #ec4899;
        border-radius: 50%;
        top: 50%;
        left: -9px;
        box-shadow: 0 0 25px #ec4899;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .floating-card {
        position: absolute;
        right: 0;
        bottom: 70px;
        padding: 15px 18px;
        background: rgba(255,255,255,.85);
        backdrop-filter: blur(15px);
        border-radius: 18px;
        box-shadow: 0 15px 40px rgba(0,0,0,.12);
        z-index: 5;
        animation: floatCard 3s ease-in-out infinite;
    }

    .floating-card strong {
        display: block;
        font-size: 18px;
    }

    .floating-card small {
        color: #777;
        font-size: 10px;
    }

    @keyframes floatCard {
        0%, 100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-12px);
        }
    }

    /* =========================
       SECTION
    ========================= */

    section {
        padding: 100px 7%;
    }

    .section-title {
        text-align: center;
        margin-bottom: 45px;
    }

    .section-title h2 {
        font-size: clamp(35px, 5vw, 55px);
        font-weight: 900;
    }

    .section-title p {
        margin-top: 10px;
        color: #777;
    }

    /* =========================
       PRODUCTS
    ========================= */

    .products {
        max-width: 1150px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .product {
        overflow: hidden;
        border-radius: 25px;
        background: rgba(255,255,255,.75);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255,255,255,.9);
        box-shadow: 0 15px 40px rgba(0,0,0,.07);
        transition: .35s;
    }

    .product:hover {
        transform: translateY(-9px);
        box-shadow: 0 25px 55px rgba(0,0,0,.12);
    }

    .product-image {
        height: 280px;
        overflow: hidden;
        background: #eee;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .5s;
    }

    .product:hover .product-image img {
        transform: scale(1.06);
    }

    .product-info {
        padding: 22px;
    }

    .product-info h3 {
        font-size: 18px;
    }

    .product-info p {
        margin: 8px 0 17px;
        color: #777;
        font-size: 13px;
        line-height: 1.5;
    }

    .product-bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .product-price {
        font-size: 18px;
        font-weight: 900;
    }

    .buy-btn {
        padding: 9px 14px;
        border-radius: 10px;
        background: #111;
        color: white;
        text-decoration: none;
        font-size: 11px;
        font-weight: 800;
        transition: .3s;
    }

    .buy-btn:hover {
        background: #c026d3;
    }

    /* =========================
       INFO
    ========================= */

    .info-grid {
        max-width: 1050px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .info {
        padding: 30px;
        text-align: center;
        border-radius: 25px;
        background: rgba(255,255,255,.7);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255,255,255,.9);
        transition: .3s;
    }

    .info:hover {
        transform: translateY(-7px);
    }

    .info-icon {
        font-size: 35px;
        margin-bottom: 15px;
    }

    .info h3 {
        margin-bottom: 8px;
    }

    .info p {
        color: #777;
        font-size: 13px;
        line-height: 1.6;
    }

    /* =========================
       ABOUT
    ========================= */

    .about {
        max-width: 900px;
        margin: auto;
        padding: 55px 40px;
        text-align: center;
        border-radius: 35px;
        background: rgba(255,255,255,.72);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,.9);
        box-shadow: 0 20px 60px rgba(0,0,0,.07);
    }

    .about h2 {
        font-size: 40px;
        margin-bottom: 20px;
    }

    .about p {
        color: #666;
        line-height: 1.8;
    }

    /* =========================
       CONTACT
    ========================= */

    .contact-box {
        max-width: 850px;
        margin: auto;
        padding: 70px 30px;
        text-align: center;
        border-radius: 35px;
        background: #111;
        color: white;
        box-shadow: 0 25px 70px rgba(0,0,0,.18);
    }

    .contact-box h2 {
        font-size: clamp(35px, 5vw, 55px);
        margin-bottom: 15px;
    }

    .contact-box p {
        color: #aaa;
        margin-bottom: 30px;
    }

    .contact-btn {
        display: inline-block;
        padding: 15px 25px;
        border-radius: 14px;
        background: white;
        color: #111;
        text-decoration: none;
        font-size: 13px;
        font-weight: 800;
        transition: .3s;
    }

    .contact-btn:hover {
        background: #ec4899;
        color: white;
        transform: translateY(-4px);
    }

    /* =========================
       FOOTER
    ========================= */

    footer {
        padding: 45px 20px;
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
        font-size: 12px;
    }

    /* =========================
       ANIMATION
    ========================= */

    .reveal {
        opacity: 0;
        transform: translateY(35px);
        transition: .8s ease;
    }

    .reveal.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 850px) {

        nav {
            top: 12px;
        }

        .nav-links {
            position: absolute;
            top: 65px;
            left: 0;
            width: 100%;
            display: none;
            flex-direction: column;
            gap: 18px;
            padding: 22px;
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
        }

        .nav-links.active {
            display: flex;
        }

        .menu-btn {
            display: block;
        }

        .hero {
            grid-template-columns: 1fr;
            text-align: center;
            padding-top: 130px;
        }

        .hero-text p {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-visual {
            min-height: 500px;
        }

        .products,
        .info-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 600px) {

        .hero h1 {
            letter-spacing: -5px;
        }

        .hero-visual {
            min-height: 430px;
        }

        .image-card {
            width: 75%;
            height: 400px;
        }

        .orbit {
            width: 390px;
            height: 390px;
        }

        .floating-card {
            right: 2%;
            bottom: 35px;
        }

        .products,
        .info-grid {
            grid-template-columns: 1fr;
        }

        section {
            padding: 75px 6%;
        }

        .about {
            padding: 40px 25px;
        }
    }
/* =========================================
QUEEN COLLECTION — NEON BLUE PARTY THEME
========================================= */

body {
background:
radial-gradient(circle at 15% 20%, rgba(0, 140, 255, .18), transparent 30%),
radial-gradient(circle at 85% 80%, rgba(0, 255, 255, .12), transparent 30%),
#030712;
color: #f8fafc;
}

/* Neon background glow */

body::before {
background: #0066ff;
opacity: .18;
filter: blur(130px);
}

body::after {
background: #00eaff;
opacity: .12;
filter: blur(140px);
}

/* NAVBAR */

nav {
background: rgba(3, 12, 30, .72);
border: 1px solid rgba(0, 183, 255, .35);
box-shadow:
0 0 25px rgba(0, 174, 255, .12),
0 15px 45px rgba(0, 0, 0, .35);
}

.logo {
color: #ffffff;
text-shadow:
0 0 8px #00aaff,
0 0 20px rgba(0, 170, 255, .7);
}

.logo span {
color: #00eaff;
}

.nav-links a {
color: #dbeafe;
}

.nav-links a:hover {
color: #00eaff;
text-shadow: 0 0 12px #00eaff;
}

/* HERO */

.badge {
background: rgba(0, 120, 255, .12);
color: #7dd3fc;
border: 1px solid rgba(0, 210, 255, .4);
box-shadow:
0 0 15px rgba(0, 200, 255, .15);
}

.hero h1 {
background: linear-gradient(
90deg,
#ffffff,
#38bdf8,
#00eaff,
#2563eb
);

-webkit-background-clip: text;
-webkit-text-fill-color: transparent;

filter:
    drop-shadow(0 0 15px rgba(0, 190, 255, .35));

}

.hero h2 {
color: #e0f2fe;
}

.hero-text p {
color: #94a3b8;
}

.price {
color: #e2e8f0;
}

.price span {
color: #00eaff;
text-shadow:
0 0 10px rgba(0, 234, 255, .8);
}

/* BUTTON */

.hero-btn,
.buy-btn {
background: #006eff;
color: white;

box-shadow:
    0 0 10px rgba(0, 110, 255, .7),
    0 0 30px rgba(0, 190, 255, .35);

border: 1px solid #00c8ff;

}

.hero-btn:hover,
.buy-btn:hover {
background: #00d9ff;
color: #00111a;

box-shadow:
    0 0 15px #00d9ff,
    0 0 40px rgba(0, 217, 255, .8);

}

/* MODEL */

.image-card {
box-shadow:
0 0 20px rgba(0, 180, 255, .25),
0 0 70px rgba(0, 110, 255, .25);
}

.orbit {
border-color: rgba(0, 220, 255, .5);

box-shadow:
    0 0 20px rgba(0, 200, 255, .15),
    inset 0 0 20px rgba(0, 200, 255, .1);

}

.orbit::before {
background: #006eff;
color: white;

box-shadow:
    0 0 12px #008cff,
    0 0 30px rgba(0, 180, 255, .7);

}

.orbit-dot {
background: #00eaff;

box-shadow:
    0 0 10px #00eaff,
    0 0 30px #00eaff,
    0 0 50px rgba(0, 234, 255, .8);

}

/* FLOATING CARD */

.floating-card {
background: rgba(3, 15, 35, .82);
color: white;

border: 1px solid rgba(0, 200, 255, .4);

box-shadow:
    0 0 20px rgba(0, 180, 255, .2),
    0 15px 40px rgba(0, 0, 0, .4);

}

.floating-card small {
color: #7dd3fc;
}

/* SECTION */

.section-title h2 {
color: #f8fafc;
text-shadow:
0 0 15px rgba(0, 170, 255, .25);
}

.section-title p {
color: #94a3b8;
}

/* PRODUCT CARDS */

.product {
background: rgba(7, 18, 38, .75);

border: 1px solid rgba(0, 180, 255, .25);

box-shadow:
    0 10px 40px rgba(0, 0, 0, .35);

}

.product:hover {
border-color: rgba(0, 220, 255, .7);

box-shadow:
    0 0 20px rgba(0, 180, 255, .2),
    0 25px 55px rgba(0, 0, 0, .45);

}

.product-info h3 {
color: #f8fafc;
}

.product-info p {
color: #94a3b8;
}

.product-price {
color: #38bdf8;
text-shadow:
0 0 8px rgba(56, 189, 248, .45);
}

/* INFO */

.info {
background: rgba(7, 18, 38, .7);

border: 1px solid rgba(0, 180, 255, .22);

box-shadow:
    0 10px 35px rgba(0, 0, 0, .3);

}

.info:hover {
border-color: rgba(0, 220, 255, .65);

box-shadow:
    0 0 25px rgba(0, 190, 255, .18);

}

.info h3 {
color: #f8fafc;
}

.info p {
color: #94a3b8;
}

.info-icon {
filter:
drop-shadow(0 0 8px rgba(0, 210, 255, .7));
}

/* ABOUT */

.about {
background: rgba(7, 18, 38, .75);

border: 1px solid rgba(0, 190, 255, .3);

box-shadow:
    0 0 30px rgba(0, 150, 255, .12),
    0 20px 60px rgba(0, 0, 0, .4);

}

.about h2 {
color: #ffffff;

text-shadow:
    0 0 15px rgba(0, 200, 255, .3);

}

.about p {
color: #94a3b8;
}

/* CONTACT */

.contact-box {
background:
radial-gradient(
circle at center,
#06285a,
#020617 70%
);

border: 1px solid rgba(0, 200, 255, .35);

box-shadow:
    0 0 35px rgba(0, 150, 255, .18),
    0 25px 70px rgba(0, 0, 0, .5);

}

.contact-box p {
color: #94a3b8;
}

.contact-btn {
background: #00c8ff;
color: #00111a;

box-shadow:
    0 0 15px #00c8ff,
    0 0 35px rgba(0, 200, 255, .5);

}

.contact-btn:hover {
background: #ffffff;
color: #006eff;
}

/* FOOTER */

footer {
background: #01040a;

border-top: 1px solid rgba(0, 180, 255, .2);

}

footer h3 {
color: #00eaff;

text-shadow:
    0 0 10px rgba(0, 220, 255, .7);

}

footer p {
color: #64748b;
}

/* MOBILE MENU */

@media (max-width: 850px) {

.nav-links {
    background: rgba(3, 12, 30, .96);
    border: 1px solid rgba(0, 180, 255, .3);
    box-shadow:
        0 0 25px rgba(0, 150, 255, .2);
}

.nav-links a {
    color: #dbeafe;
}

} 
/* =========================================
   NEON MOVING BACKGROUND
========================================= */

body {
    overflow-x: hidden;
}

body::before,
body::after {
    content: "";
    position: fixed;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    pointer-events: none;
    z-index: -1;
}

body::before {
    top: 5%;
    left: -100px;
    background: #006eff;
    opacity: .16;
    filter: blur(100px);
    animation: neonMove1 8s ease-in-out infinite alternate;
}

body::after {
    right: -100px;
    bottom: 5%;
    background: #00eaff;
    opacity: .13;
    filter: blur(110px);
    animation: neonMove2 10s ease-in-out infinite alternate;
}

@keyframes neonMove1 {
    0% {
        transform: translate(0, 0) scale(1);
    }

    50% {
        transform: translate(180px, 100px) scale(1.2);
    }

    100% {
        transform: translate(50px, 250px) scale(.9);
    }
}

@keyframes neonMove2 {
    0% {
        transform: translate(0, 0) scale(1);
    }

    50% {
        transform: translate(-150px, -100px) scale(1.25);
    }

    100% {
        transform: translate(-50px, -220px) scale(.9);
    }
}


/* =========================================
   PRODUCT NEON HOVER
========================================= */

.product {
    transition:
        transform .35s ease,
        border-color .35s ease,
        box-shadow .35s ease;
}

.product:hover {
    transform: translateY(-10px) scale(1.02);

    border-color: #00eaff;

    box-shadow:
        0 0 15px rgba(0, 234, 255, .35),
        0 0 35px rgba(0, 110, 255, .25),
        0 20px 50px rgba(0, 0, 0, .5);
}

.product:hover img {
    transform: scale(1.06);
    filter:
        brightness(1.08)
        drop-shadow(0 0 15px rgba(0, 220, 255, .35));
}

.product img {
    transition:
        transform .4s ease,
        filter .4s ease;
}
</style>

</head><body><!-- NAVBAR -->

<nav>

    <div class="logo">
        QUEEN<span>.</span>
    </div>

    <ul class="nav-links" id="navLinks">

        <li><a href="#home">Home</a></li>
        <li><a href="#produk">Produk</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#kontak">Kontak</a></li>

    </ul>

    <button class="menu-btn" onclick="toggleMenu()">
        ☰
    </button>

</nav>


<!-- HERO -->

<section class="hero" id="home">

    <div class="hero-text">

        <div class="badge">
            ✦ QUEEN COLLECTION
        </div>

        <h1>QUEEN</h1>

        <h2>Fashion For Everyone</h2>

        <p>
            Koleksi fashion simpel dan nyaman
            untuk menemani aktivitas sehari-hari
            dengan harga yang tetap bersahabat.
        </p>

        <div class="price">
            Mulai dari <span>Rp25.000</span>
        </div>

        <a href="#produk" class="hero-btn">
            Lihat Koleksi →
        </a>

    </div>


    <div class="hero-visual">

        <div class="orbit">
            <div class="orbit-dot"></div>
        </div>

        <div class="image-card">

            <img
                src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=900&q=85"
                alt="Queen Collection Fashion">

        </div>

        <div class="floating-card">

            <strong>Rp25K+</strong>

            <small>
                Fashion pilihan
            </small>

        </div>

    </div>

</section>


<!-- PRODUK -->

<section id="produk">

    <div class="section-title reveal">

        <h2>Koleksi Baju</h2>

        <p>
            Pilih gaya favoritmu.
        </p>

    </div>


    <div class="products">

        <div class="product reveal">

            <div class="product-image">

                <img
                    src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=700&q=85"
                    alt="Queen Basic">

            </div>

            <div class="product-info">

                <h3>Queen Basic</h3>

                <p>
                    Basic dan nyaman untuk sehari-hari.
                </p>

                <div class="product-bottom">

                    <div class="product-price">
                        Rp25.000
                    </div>

                    <a
                        href="https://wa.me/628881223438?text=Halo%20Queen%20Collection,%20saya%20ingin%20pesan%20Queen%20Basic."
                        class="buy-btn">

                        Beli

                    </a>

                </div>

            </div>

        </div>


        <div class="product reveal">

            <div class="product-image">

                <img
                    src="https://images.unsplash.com/photo-1503341504253-dff4815485f1?auto=format&fit=crop&w=700&q=85"
                    alt="Queen Casual">

            </div>

            <div class="product-info">

                <h3>Queen Casual</h3>

                <p>
                    Gaya casual untuk berbagai aktivitas.
                </p>

                <div class="product-bottom">

                    <div class="product-price">
                        Rp25.000
                    </div>

                    <a
                        href="https://wa.me/628881223438?text=Halo%20Queen%20Collection,%20saya%20ingin%20pesan%20Queen%20Casual."
                        class="buy-btn">

                        Beli

                    </a>

                </div>

            </div>

        </div>


        <div class="product reveal">

            <div class="product-image">

                <img
                    src="https://images.unsplash.com/photo-1485968579580-b6d095142e6e?auto=format&fit=crop&w=700&q=85"
                    alt="Queen Style">

            </div>

            <div class="product-info">

                <h3>Queen Style</h3>

                <p>
                    Tampilan simpel dengan gaya modern.
                </p>

                <div class="product-bottom">

                    <div class="product-price">
                        Rp25.000
                    </div>

                    <a
                        href="https://wa.me/628881223438?text=Halo%20Queen%20Collection,%20saya%20ingin%20pesan%20Queen%20Style."
                        class="buy-btn">

                        Beli

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- INFO -->

<section>

    <div class="section-title reveal">

        <h2>Kenapa Queen?</h2>

        <p>
            Belanja simpel tanpa ribet.
        </p>

    </div>


    <div class="info-grid">

        <div class="info reveal">

            <div class="info-icon">
                💰
            </div>

            <h3>Harga Bersahabat</h3>

            <p>
                Koleksi fashion dengan harga mulai Rp25.000.
            </p>

        </div>


        <div class="info reveal">

            <div class="info-icon">
                ✨
            </div>

            <h3>Style Modern</h3>

            <p>
                Desain simpel yang mudah dipadukan.
            </p>

        </div>


        <div class="info reveal">

            <div class="info-icon">
                📦
            </div>

            <h3>Praktis</h3>

            <p>
                Pesan dengan mudah melalui WhatsApp.
            </p>

        </div>

    </div>

</section>


<!-- TENTANG -->

<section id="tentang">

    <div class="about reveal">

        <h2>Tentang Queen Collection</h2>

        <p>
            Queen Collection hadir untuk menyediakan
            fashion yang simpel, nyaman, dan mudah
            dipakai sehari-hari dengan harga yang
            terjangkau.
        </p>

    </div>

</section>


<!-- KONTAK -->

<section id="kontak">

    <div class="contact-box reveal">

        <h2>Mau Pesan?</h2>

        <p>
            Hubungi Queen Collection langsung melalui WhatsApp.
        </p>

        <a
            href="https://wa.me/628881223438?text=Halo%20Queen%20Collection,%20saya%20ingin%20bertanya%20tentang%20produk."
            class="contact-btn">

            Chat WhatsApp →

        </a>

    </div>

</section>


<!-- FOOTER -->

<footer>

    <h3>QUEEN COLLECTION</h3>

    <p>
        Fashion • Simple • Affordable
    </p>

    <p>
        © 2026 Queen Collection
    </p>

</footer>


<script>

    function toggleMenu() {

        document
            .getElementById("navLinks")
            .classList
            .toggle("active");

    }


    const observer =
        new IntersectionObserver(
            entries => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        entry.target
                            .classList
                            .add("show");

                    }

                });

            },
            {
                threshold: 0.12
            }
        );


    document
        .querySelectorAll(".reveal")
        .forEach(element => {

            observer.observe(element);

        });


    document
        .querySelectorAll(".nav-links a")
        .forEach(link => {

            link.addEventListener(
                "click",
                () => {

                    document
                        .getElementById("navLinks")
                        .classList
                        .remove("active");

                }
            );

        });

</script>

</body>
</html>
