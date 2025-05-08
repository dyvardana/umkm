<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Marketplace UEMKAEM</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('public/dist/css/newcss.css') ?>">

  <style>
    body {
      padding-top: 80px; /* Agar tidak tertutup navbar */
    }
    .product-img {
      width: 100%;
      border-radius: 8px;
    }
    .price-tag {
      font-size: 1.5rem;
      color: #28a745;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-success" href="#">Buleleng - UMKM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <form class="d-flex ms-auto me-3" role="search" onsubmit="filterCombined(event)">
        <input class="form-control me-2" type="search" placeholder="Cari produk..." id="searchInput" />
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Konten -->
<div class="container my-5">
  <div class="row">
    <!-- Gambar Produk -->
    <!-- Gambar Produk dengan Galeri -->
<div class="col-md-6 mb-4">
  <div class="border rounded p-2 shadow-sm">
    <img id="mainImage" src="<?= esc($gambar) ?>" alt="<?= esc($nama) ?>" class="w-100 rounded mb-3" style="max-height: 400px; object-fit: contain;" />
    
    <div class="d-flex gap-2 overflow-auto">
      <img src="<?= esc($gambar) ?>" class="img-thumbnail thumb-img" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage(this.src)">
      <!-- Tambahan thumbnail lainnya -->
      <?php if (!empty($galeri)) : ?>
        <?php foreach ($galeri as $foto) : ?>
          <img src="<?= esc($foto) ?>" class="img-thumbnail thumb-img" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="changeImage(this.src)">
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>


    <!-- Info Produk -->
    <div class="col-md-6">
      <h4 class="fw-semibold"><?= esc($nama) ?></h4>
      <div class="mb-2 text-muted small">
        <i class="fas fa-store"></i> UMKM Lokal Buleleng
      </div>
      <div class="price-tag mb-3"><?= esc($harga) ?></div>

      <div class="mb-3">
        <button class="btn btn-success btn-buy mb-2">
          <i class="fas fa-shopping-cart me-2"></i>Tambah ke Keranjang
        </button>
        <button class="btn btn-outline-primary btn-buy">
          <i class="fas fa-comments me-2"></i> Chat Penjual
        </button>
      </div>

      <div class="mt-4">
        <h6>Deskripsi Produk</h6>
        <p class="text-muted"><?= esc($deskripsi) ?></p>
      </div>
    </div>
  </div>

  <!-- Testimoni Pembeli -->
  <div class="mt-5">
    <h5>Ulasan Pembeli</h5>

    <!-- Testimoni 1 -->
    <div class="d-flex mb-4">
      <div class="me-3">
        <img src="https://i.pravatar.cc/50?img=1" class="rounded-circle" alt="User" />
      </div>
      <div>
        <h6 class="mb-1">Dewi A.</h6>
        <div class="text-warning small mb-1">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="mb-0 text-muted">Barang sesuai deskripsi, pengiriman cepat, dan kualitas oke. Terima kasih UMKM lokal!</p>
      </div>
    </div>

    <!-- Testimoni 2 -->
    <div class="d-flex mb-4">
      <div class="me-3">
        <img src="https://i.pravatar.cc/50?img=3" class="rounded-circle" alt="User" />
      </div>
      <div>
        <h6 class="mb-1">Raka P.</h6>
        <div class="text-warning small mb-1">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="mb-0 text-muted">Desain bagus, tapi pengemasan kurang rapi. Tetap worth it untuk harga segini.</p>
      </div>
    </div>

    <!-- Testimoni 3 -->
    <div class="d-flex mb-4">
      <div class="me-3">
        <img src="https://i.pravatar.cc/50?img=5" class="rounded-circle" alt="User" />
      </div>
      <div>
        <h6 class="mb-1">Tari W.</h6>
        <div class="text-warning small mb-1">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="mb-0 text-muted">Topi-nya lucu dan nyaman dipakai. Anak saya suka sekali!</p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS & dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
  function changeImage(src) {
    document.getElementById('mainImage').src = src;
  }
</script>
