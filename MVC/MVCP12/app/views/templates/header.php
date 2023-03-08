<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data; ?></title>
    <link href="<?= BaseURL; ?>/css/bootstrap.css" rel="stylesheet" >
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="<?= BaseURL; ?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="<?= BaseURL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?= BaseURL; ?>/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?= BaseURL; ?>/mahasiswa">Mahasiswa</a>
        </li>

        </li>
      </ul>
    </div>
  </div>
</nav>

