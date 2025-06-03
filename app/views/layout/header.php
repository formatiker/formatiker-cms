<?php
    $baseUrl = '/formatiker_php_refactor/public/';
    $headerActivePage = $headerActivePage ?? '';

    // ✨ Feste Reihenfolge und Titel
    $menuDefinition = [
        'home' => 'Home',
        'web' => 'Web-Entwicklung',
        'pc' => 'PC-Montage',
        'learn' => 'Lernhilfe',
        'ueber_mich' => 'Über mich',
        // 'kontakt' => 'Kontakt' // bewusst ausgeschlossen
    ];

    $menuItems = [];

    foreach ($menuDefinition as $filename => $label) {
        $href = $filename === 'home' ? $baseUrl : $baseUrl . $filename;
        $isActive = $headerActivePage === $filename;

        $menuItems[] = [
            'href' => $href,
            'label' => $label,
            'active' => $isActive
        ];
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$headerTitle?></title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/sal.css" />
</head>
<body>
  <header>
  <nav class="navbar fixed-top shadow">
    <div class="container-xxl px-3 px-sm-4 px-lg-5 px-xxl-1">
      <a class="logo my-2" href="#">
        <img loading="lazy" class="logo__img logo__img--dynamic" src="<?=$headerLogoLight?>" alt="logo" />
      </a>
      <ul class="navbar-nav d-none d-xl-flex flex-row ms-auto gap-4">
        <?php foreach ($menuItems as $item): ?>
          <li class="nav-item">
            <a href="<?= $item['href'] ?>" class="nav-link <?= $item['active'] ? 'active' : '' ?>" href="#"><b><?= $item['label'] ?></b></a>
          </li>
        <?php endforeach; ?>
        <!--
          <li class="nav-item dropdown position-relative">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menü
              </a>
              <ul class="dropdown-menu position-absolute dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Eintrag 1</a></li>
                  <li><a class="dropdown-item" href="#">Eintrag 2</a></li>
              </ul>
          </li> 
        -->
        <li class="d-flex align-items-center ps-4">
            <?php if (($headerActivePage ?? '') === 'kontakt'): ?>
              <a href="/formatiker_php_refactor/public/kontakt" class="btn btn-primary">Kontakt</a>
            <?php else: ?>
              <a href="/formatiker_php_refactor/public/kontakt" class="btn btn-secondary">Kontakt</a>
            <?php endif; ?>   
        </li>
        <li class="d-flex align-items-center">
          <button id="themeToggle" class="btn btn-outline-secondary"></button>     
        </li>
      </ul>
      <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="bg-body-inverted"></span>
        <span class="bg-body-inverted"></span>
        <span class="bg-body-inverted"></span>
      </button>
    </div>
    <div class="backdrop-blur w-100 h-100 position-absolute start-0 top-0"></div>
  </nav>
  <div class="offcanvas offcanvas-end d-xl-none p-4" tabindex="-1" id="offcanvasNavbar">
    <div class="offcanvas-header p-0">
      <a class="logo" href="#">
        <img loading="lazy" class="logo__img logo__img--dynamic" src="<?=$headerLogoLight?>" alt="logo" />
      </a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body position-relative p-0">
      <ul class="navbar-nav justify-content-end flex-grow-1 mt-2">
        <?php foreach ($menuItems as $item): ?>
          <li class="nav-item">
            <a href="<?= $item['href'] ?>" class="nav-link <?= $item['active'] ? 'active' : '' ?>" href="#"><b><?= $item['label'] ?></b></a>
          </li>
        <?php endforeach; ?>
        <li class="d-flex align-items-center w-100 mt-4">
            <?php if (($headerActivePage ?? '') === 'kontakt'): ?>
              <a href="/formatiker_php_refactor/public/kontakt" class="btn btn-primary w-100">Kontakt</a>
            <?php else: ?>
              <a href="/formatiker_php_refactor/public/kontakt" class="btn btn-secondary w-100">Kontakt</a>
            <?php endif; ?>   
        </li>
      </ul>
      <button id="themeToggleMobile" class="btn mt-2 btn-outline-secondary"></button>   
    </div>
  </div>
</header>
<main>