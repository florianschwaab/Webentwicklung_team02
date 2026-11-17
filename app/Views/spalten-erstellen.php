<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Webentwicklung - Team02</title>
    <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png') ?>">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('images/favicon.png') ?>">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <!--Eigene CSS-Datei-->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="d-flex flex-column min-vh-100">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg custom-navbar" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('images/logo.svg') ?>" alt="Logo" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('/') ?>">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Boards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('spalten') ?>">Spalten</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container my-4">
    <div class="card">
        <div class="card-header fs-4 fw-bold">
            Spalte erstellen
        </div>
        <div class="card-body" style="min-height: 80px;">
            <form>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Spalten-Bezeichnung</label>
                    <div class="col-sm-9">
                        <input type = "text" class = "form-control" placeholder="Bezeichnung für die Spalte">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Spaltenbeschreibung</label>
                    <div class="col-sm-9">
                        <textarea class ="form-control" rows="3" ></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Sortid</label>
                    <div class="col-sm-9">
                        <input type = "text" class = "form-control" placeholder="Sortid angeben">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Board auswählen</label>
                    <div class="col-sm-9">
                       <select class= "form-select">
                           <option selected>Allgemeine Todos</option>
                           <option> Projekt A</option>
                           <option> Projekt B</option>
                       </select>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-success me-2">Speichern</button>
                    <button type="button" class="btn btn-secondary">Abbrechen</button>
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="custom-navbar text-white py-3 mt-auto">
    <div class="container d-flex justify-content-between align-items-center">
        <span>© Web-Entwicklung Team 02</span>
        <div>
            <a href="#" class="text-white me-3 text-decoration-none">Impressum</a>
            <a href="#" class="text-white me-3 text-decoration-none">Datenschutz</a>
            <a href="#" class="text-white text-decoration-none">Kontakt</a>
        </div>
    </div>
</footer>
</body>
</html>