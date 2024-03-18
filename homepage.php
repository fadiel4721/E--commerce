<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Project</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="css/homepage.css" />
  <!-- Alphine js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- App -->
  <script src="src/app.js" async></script>
  <!-- Midtrans -->
  <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-nY3TuQwxQXzL71ex"></script>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar" x-data>
    <a href="#" class="navbar-logo">Kenangan<span>Manies</span>.</a>
    <!-- span ini agar warna dalam kata senja berbeda dgn kata kenangan -->

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#products">Produk</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button">
        <i data-feather="shopping-cart"></i>
        <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity"></span>
      </a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
    <!-- kita akan simpan komponen pencarian kita di akhir navbar karena searching itu akan menjadi bagian dari navbar-->
    <!-- Search Form Start-->
    <div class="search-form">
      <!-- lalu didalamnya kita bikin dua elemen -->
      <input type="search" id="search-box" placeholder="search here..." />
      <label for="search-box"><i data-feather="search"></i></label>
      <!-- kenapa inputnya kita make id?: karena agar kita gampang di javascriptnya lalu kita pakai placeholder supaya ada tulisan search nya -->
      <!-- dibawah search ini kita makai label, for nya sesuaikan dengan id yg didalamnya kita kasih icon-->
    </div>
    <!-- Search Form End-->
    <!-- Shopping Cart start -->
    <div class="shopping-cart">
      <template x-for="(item, index) in $store.cart.items" x-keys="index">
        <div class="cart-item">
          <img :src="`image/${item.image}`" :alt="item.name">
          <div class="item-detail">
            <h3 x-text="item.name"></h3>
            <div class="item-price">
              <span x-text="rupiah(item.price)"></span>&times;
              <button id="remove" @click="$store.cart.remove(item.id)">&minus;</button>
              <span x-text="item.quantity"></span>
              <button id="add" @click="$store.cart.add(item)">&plus;</button> &equals;
              <span x-text="rupiah(item.total)"></span>
            </div>
          </div>
        </div>
      </template>
      <h4 x-show="!$store.cart.items.length" style="margin-top: 1rem;">Keranjang anda kosong</h4>
      <h4 x-show="$store.cart.items.length">Total : <span x-text="rupiah($store.cart.total)"></span></h4>
      <div class="form-container" x-show="$store.cart.items.length">
        <form action="" id="checkoutform">
          <input type="hidden" name="items" x-model="JSON.stringify($store.cart.items)">
          <input type="hidden" name="total" x-model="$store.cart.total">
           <h5>Detail Pelanggan</h5>
          <label for="name">
            <span>Name</span>
            <input type="text" name="name" id="name">
          </label>

          <label for="email">
            <span>Email</span>
            <input type="email" name="email" id="email">
          </label>

          <label for="phone">
            <span>No HP</span>
            <input type="number" name="phone" id="phone" autocomplete="off">
          </label>

          <button class="checkout-button disabled" type="submit" id="checkout-button" value="checkout">Checkout</button>
          <dotlottie-player src="https://lottie.host/e74fdaf1-ecfd-408f-95eb-4b61acb185e4/zpc6KzkJne.json" background="transparent" speed="1" style="width: 300px; height: 300px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
        </form>
      </div>
    </div>
    <!-- Shopping Cart end-->
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
  <!-- Supaya nanti ketika user klik menu di navbar atau nnti di footer bagian home makaa
    dia akan mengarah ke id nya yaitu home jadi saat user klik user akan mengarah ke bagian paling atas
  dari hero section nya -->
  <section class="hero" id="home">
    <div class="mask-container">
      <main class="content">
        <h1>Mari nikmati secangkir <span>Kopi</span></h1>
        <p>
          Nikmati Kopi Di Saat Sibuk Merupakan Suatu Kenikmatan Yang Tak
          Terlupakan.
        </p>
        <!-- selanjutnya kita butuh sebuah link yg nnti bentuknya seperti tombol -->

        <!-- ingat jikalau salah satu kata yg diganti warna mka hrus dibungkus dengan tag Span -->
      </main>
    </div>
  </section>
  <!-- didalam section kita buat satu elemen yaitu main dimna nnti tersimpan
    semua elemen2 utama dri bagian section ini kenapa buat main karen section nya akan kita bikin
  agar ukurannya satu layar dan punya bckground image sedgkan main itu untuk menyimpan
elemen elemen isinya -->
  <!-- Hero Section End -->
  <!-- About Section Start-->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>
    <div class="row">
      <div class="about-img">
        <img src="image/tentang-kami.jpg" alt="Tentang Kami" />
        <!-- membantu membuat konten web lebih dapat diakses bagi 
      pengguna dengan kebutuhan khusus, seperti pengguna 
      yang menggunakan pembaca layar. Ketika gambar tidak dapat 
      dimuat atau diakses, teks alternatif dari atribut alt dapat
      dibacakan oleh pembaca layar untuk memberikan informasi tentang
       konten gambar. -->
      </div>
      <div class="content">
        <h3>Kenapa Memilih Kopi Kami?</h3>
        <p>
          Karena Kopi Kami Yang Merupakan Jenis Kopi Robusta dibudidaya
          Langsung di Tempat Penghasil Kopi Terbesar di Indonesia Yaitu Pulau
          Sumatera.
        </p>
        <p>
          Dipilih dari Biji Kopi Pilihan Yang Melalui Proses Higienis dan
          Dibantu Oleh Teknologi Modern Menciptakan Kopi Terbaik Yang Cocok
          Untuk Menemani Kesibukan.
        </p>
      </div>
    </div>
  </section>
  <!-- About Section End-->
  <!-- Menu Section Start -->
  <section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>
      Selamat datang di warung kopi kami, tempat yang memadukan cita rasa kopi
      terbaik dengan atmosfer yang hangat. Temukan kenikmatan kopi istimewa
      dan suasana yang menyenangkan bersama kami.
    </p>
    <div class="row">
      <div class="menu-card">
        <img src="image/Kopimenu.png" alt="Espresso" class="menu-card-img" />
        <h3 class="menu-card-title">~Espresso~</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="image/kopihati.png" alt="kopihati" class="menu-card-img" />
        <h3 class="menu-card-title">~Mocha latte~</h3>
        <p class="menu-card-price">IDR 18K</p>
      </div>
      <div class="menu-card">
        <img src="image/Kopii.jpg" alt="Kopihitam" class="menu-card-img" />
        <h3 class="menu-card-title">~Black Coffe~</h3>
        <p class="menu-card-price">IDR 12K</p>
      </div>
      <div class="menu-card">
        <img src="image/Kopisantuy.png" alt="Kopisantuy" class="menu-card-img" />
        <h3 class="menu-card-title">~Cappucino~</h3>
        <p class="menu-card-price">IDR 20K</p>
      </div>
      <div class="menu-card">
        <img src="image/Kopilucu.png" alt="KopiJegeer" class="menu-card-img" />
        <h3 class="menu-card-title">~Machiato~</h3>
        <p class="menu-card-price">IDR 22K</p>
      </div>
      <div class="menu-card">
        <img src="image/Kopicroisant.png" alt="Kopicroisant" class="menu-card-img" />
        <h3 class="menu-card-title">~Americano~</h3>
        <p class="menu-card-price">IDR 24K</p>
      </div>
    </div>
    <!-- agar tulisan Menu Kami Sama ke tengah seperti
      Tentang Kami Caranya hanya cari about h2 dan about diatas di css nya dikasih
    koma(,) lalu tambahkan .Menu maka akan otomatis ke tengah  -->
  </section>
  <!-- Menu Section End -->
  <!-- Product section Start-->
  <section class="products" id="products" x-data="products">
    <h2><Span>Produk Unggulan </Span>Kami</h2>
    <p>Produk unggulan kami berupa produk yang memiliki rating yang bagus dari pelanggan!.</p>
    <div class="row">
      <template x-for="(item, index) in items" x-key="index">
        <div class="product-card">
          <div class="product-icons">
            <a href="#" @click.prevent="$store.cart.add(item)">
              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <use href="image/feather-sprite.svg#shopping-cart" />
              </svg>
            </a>
            <a href="#" class="item-detail-button"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <use href="image/feather-sprite.svg#eye" />
              </svg></a>
          </div>
          <div class="product-image">
            <img :src="`image/${item.image}`" :alt="item.name">
          </div>
          <div class="product-content">
            <h3 x-text="item.name"></h3>
            <div class="product-stars">
              <svg width="24" height="24" fill="currentcolor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <use href="image/feather-sprite.svg#star" />
              </svg>
              <svg width="24" height="24" fill="currentcolor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <use href="image/feather-sprite.svg#star" />
              </svg>
              <svg width="24" height="24" fill="currentcolor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <use href="image/feather-sprite.svg#star" />
              </svg>
              <svg width="24" height="24" fill="currentcolor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <use href="image/feather-sprite.svg#star" />
              </svg>
              <svg width="24" height="24" fill="currentcolor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <use href="image/feather-sprite.svg#star" />
              </svg>
            </div>
            <div class="product-price"><span x-text="rupiah(item.price)"></span></div>
          </div>
        </div>
      </template>
    </div>
  </section>
  <!-- Product section End-->
  <!-- Contact Section Start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>
      Jikalau ada yang ngin diketahui lebih lanjut mengenai bisnis atau
      permasalahan lain bisa hubungi kontak kami
    </p>
    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.372378280111!2d106.8123867740976!3d-6.3458010936439955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efb2ed2ef853%3A0xa752fb4761539d01!2sNASI%20BEBEK%20FERDIANSYAH!5e0!3m2!1sid!2sid!4v1703428363785!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      <!-- form ini didalamnya saya akan memberikan beberapa elemen seperti nama, email, dan
          nomor hp untuk mendata calon pelanggan -->
      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama" />
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="email" />
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no hp" />
        </div>
        <button type="submit" class="btn">Kirim Pesan</button>
      </form>
    </div>
  </section>
  <!-- Contact Section End -->
  <!-- Footer Start -->
  <!-- di footer punya elemen html nya sendiri jadi gaperlu make section
    langsung footer -->
  <footer>
    <!-- didalam footer ada 3 bagian -->
    <!-- pertama yang link ke social media, kedua link ke section yg sma sprti di navbar, ketiga copyright -->
    <div class="socials">
      <!-- a href ini akan mengarah ke social media kita dan dikasih ikon yaitu i data feather -->
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>
    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>
    <div class="credit">
      <p>Created by <a href="">Fadiel Muhammad</a> . | &copy; 2023.</p>
    </div>
  </footer>
  <!-- Footer End -->
  <!-- Modal Box item Detail Start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="image/download-compresskaru.com (1).png" alt="Product 1">
        <div class="product-content">
          <h3>Kopiku</h3>
          <p>Produk kopi ini memiliki cita rasa yang khas dengan perpaduan rasa manis
            yang sedikit ditambahkan rasa pahit didalamnya membuat
            meminum kopi seakan tidak akan terkena penyakit diabetes!</p>
          <div class="product-stars">
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <a href="#"><i data-feather="shopping-cart"></i><span>add to cart </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box item Detail End -->
  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>
  <!-- Lottiefiles -->
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
  <!-- My Javascript -->
  <script src="js/ecommerce.js"></script>
</body>

</html>