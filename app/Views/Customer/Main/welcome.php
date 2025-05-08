<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Marketplace UEMKAEM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('public/dist/css/newcss.css') ?>">
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

<!-- Carousel -->
<div class="container mt-3">
  <div id="smallCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner rounded">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1519744792095-2f2205e87b6f" class="d-block w-100" alt="Promo 1" />
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1530731141654-5993c3016c77" class="d-block w-100" alt="Promo 2" />
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8" class="d-block w-100" alt="Promo 3" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#smallCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#smallCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>

<!-- Etalase Produk -->
<div class="container my-5">
  <h4 class="mb-4">Etalase Produk</h4>

  <!-- Filter Kategori -->
  <div class="mb-4">
    <label class="form-label fw-semibold">Pilih Kategori:</label>
    <select class="form-select w-auto d-inline-block" id="categoryFilter" onchange="filterCombined(event)">
      <option value="all">Semua</option>
      <option value="elektronik">Elektronik</option>
      <option value="fashion">Fashion</option>
      <option value="furniture">Furniture</option>
      <option value="aksesoris">Aksesoris</option>
    </select>
  </div>

  <div class="row" id="productContainer">

    <!-- Produk 1 -->
    <div class="col-md-3 mb-4 product-item" data-name="smartphone xyz" data-category="elektronik">
      <div class="product-card">
          <a href="<?= base_url('home/produk') ?>"> <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9" alt="Smartphone XYZ" /></a>
        <h6 class="mt-2">Smartphone XYZ</h6>
        <div class="rating mb-1">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
        </div>
        <p class="text-muted">Rp 3.000.000</p>
        <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
        <button class="btn btn-primary btn-sm"><i class="fas fa-shopping-bag"></i></button>
      </div>
    </div>

    <!-- Produk 2 -->
    <div class="col-md-3 mb-4 product-item" data-name="sepatu pria" data-category="fashion">
      <div class="product-card">
        <img src="https://images.unsplash.com/photo-1530731141654-5993c3016c77" alt="Sepatu Pria" />
        <h6 class="mt-2">Sepatu Pria</h6>
        <div class="rating mb-1">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="text-muted">Rp 500.000</p>
        <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
        <button class="btn btn-primary btn-sm"><i class="fas fa-shopping-bag"></i></button>
      </div>
    </div>

    <!-- Produk 3 -->
    <div class="col-md-3 mb-4 product-item" data-name="meja kantor" data-category="furniture">
      <div class="product-card">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" alt="Meja Kantor" />
        <h6 class="mt-2">Meja Kantor</h6>
        <div class="rating mb-1">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="text-muted">Rp 700.000</p>
        <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
        <button class="btn btn-primary btn-sm"><i class="fas fa-shopping-bag"></i></button>
      </div>
    </div>

    <!-- Produk 4 -->
    <div class="col-md-3 mb-4 product-item" data-name="headphone bluetooth" data-category="aksesoris">
      <div class="product-card">
        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8" alt="Headphone Bluetooth" />
        <h6 class="mt-2">Headphone Bluetooth</h6>
        <div class="rating mb-1">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="text-muted">Rp 350.000</p>
        <button class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i></button>
        <button class="btn btn-primary btn-sm"><i class="fas fa-shopping-bag"></i></button>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
  <div class="container">
    <div class="row small text-secondary">
      <div class="col-md-6 mb-2">
        <h6 class="text-uppercase text-white mb-2">Kontak</h6>
        <p class="mb-1"><i class="fas fa-phone me-2"></i> +62 812-3456-7890</p>
        <p class="mb-1"><i class="fas fa-envelope me-2"></i> support@marketplace.id</p>
        <p class="mb-0"><i class="fab fa-instagram me-2"></i> @marketplaceID</p>
      </div>
      <div class="col-md-6 mb-2">
        <h6 class="text-uppercase text-white mb-2">Alamat</h6>
        <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i> Jl. Merdeka No.123, Jakarta Pusat, Indonesia</p>
      </div>
    </div>
    <div class="text-center mt-3 border-top pt-2 small text-muted">
      &copy; 2025 Marketplace. All rights reserved.
    </div>
  </div>
</footer>

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function filterCombined(event) {
  if (event) event.preventDefault();
  const query = document.getElementById('searchInput').value.toLowerCase();
  const category = document.getElementById('categoryFilter').value;
  const items = document.querySelectorAll('.product-item');

  items.forEach(item => {
    const name = item.getAttribute('data-name');
    const cat = item.getAttribute('data-category');
    const matchText = name.includes(query);
    const matchCat = category === 'all' || cat === category;

    item.style.display = (matchText && matchCat) ? 'block' : 'none';
  });
}
</script>

</body>
</html>
