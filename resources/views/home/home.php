<div class="menu-card" style="background:#6baed6; color: white">
    <div class="container">
        <div class="row align-center">
            <div class="col-9 text-left">
                <p>Dompet Linimasa</p>
            </div>
            <div class="col-3 text-center mb-3 mt-3">
                <i class="fa-solid fa-wallet fa-2x"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-left">
                <h1>Rp. 1.000.000</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-left">
                <p class="disabled">Sisa Saldo</p>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="menu-card">
    <div class="menu-grid">
        <a hx-get="<?= url('saldo')?>" 
            hx-target="#content" 
            hx-push-url="true" class="menu-item">
            <i class="fa-solid fa-wallet"></i>
            <span>Saldo</span>
        </a>
        <a hx-get="<?= url('pinjaman')?>" 
            hx-target="#content" 
            hx-push-url="true" class="menu-item">
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <span>Pinjaman</span>
        </a>
        <a hx-get="<?= url('shu')?>" 
            hx-target="#content" 
            hx-push-url="true" class="menu-item">
            <i class="fa-solid fa-sack-dollar"></i>
            <span>SHU</span>
        </a>
        <a hx-get="<?= url('laporan')?>" 
            hx-target="#content" 
            hx-push-url="true" class="menu-item">
            <i class="fa-solid fa-chart-line"></i>
            <span>Laporan</span>
        </a>
    </div>
</div>
<div class="menu-card mt-3">
    <div class="carousel-container">
        <div class="carousel-card">Informasi 1</div>
        <div class="carousel-card">Informasi 2</div>
        <div class="carousel-card">Informasi 3</div>
        <div class="carousel-card">Informasi 4</div>
        <div class="carousel-card">Informasi 5</div>
    </div>
</div>
