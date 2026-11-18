<nav class="navbar navbar-expand-lg custom-navbar" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('images/logo.svg') ?>" alt="Logo" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/') ?>">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Boards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('spalten') ?>">Spalten</a>
                </li>
            </ul>
        </div>
    </div>
</nav>