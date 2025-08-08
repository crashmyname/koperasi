<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi App</title>
    <link rel="stylesheet" href="<?= asset('css/style.css')?>">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/modules/bootstrap-social/bootstrap-social.css')?>">
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/css/components.css') ?>">
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@2.0.6/dist/htmx.min.js"></script>

</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row align-center" style="align-items: center;">
                <div class="col-3 text-left">
                    <img src="<?= asset('logo/logo.webp')?>" class="img-fluid img-rounded" alt="Logo" style="max-height: 50px;">
                </div>
                <div class="col-6 text-center">
                    <h1 style="margin: 0; font-size: 18px; font-weight: bold;">Koperasi Stanley</h1>
                </div>
                <div class="col-3 text-right">
                    <img src="<?= asset('default_profil.webp')?>" class="img-fluid img-rounded" alt="Profile" style="max-height: 50px;">
                </div>
            </div>
        </div>
    </div>
    <div class="app-container">
        <!-- Bottom Navigation -->
        <nav class="bottom-nav">
            <a href="#" 
            class="nav-item" 
            hx-get="<?= url('home')?>" 
            hx-target="#content" 
            hx-push-url="true">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>
            <a href="#" 
            class="nav-item" 
            hx-get="<?= url('notif')?>" 
            hx-target="#content" 
            hx-push-url="true">
                <i class="fa-solid fa-bell"></i>
                <span>Notif</span>
            </a>
            <a href="#" 
            class="nav-item" 
            hx-get="<?= url('setting')?>" 
            hx-target="#content" 
            hx-push-url="true">
                <i class="fa-solid fa-gear"></i>
                <span>Setting</span>
            </a>
            <a href="#" 
            class="nav-item" 
            hx-get="<?= url(params: 'profile')?>" 
            hx-target="#content" 
            hx-push-url="true">
                <i class="fa-solid fa-user"></i>
                <span>Profile</span>
            </a>
        </nav>

        <!-- Content Area -->
        <main class="content" id="content">
            <?= $content; ?>
        </main>
    </div>

</body>
</html>
