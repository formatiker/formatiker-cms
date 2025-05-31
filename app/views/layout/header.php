<?php
    $baseUrl = '/formatiker_php/public/';
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
        <div class="header__area header-box-plr-5-245 header__padding-5 header__style-5 header__sticky header-sticky-blur header-sticky" id="header-sticky">
            <div class="header__top-5 mb-2">
            <div class="mega-menu-wrapper p-relative">
                <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-6 my-2">
                    <div class="logo">
                        <a href="index.html">
                            <img loading="lazy" class="w-100" src="../assets/img/logo/logo-black.svg" alt="logo" />
                        </a>
                    </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-6 col-6 d-flex justify-content-end">
                        <div class="main-menu main-menu-ff-space d-none d-xl-block">
                            <nav class="main-nav">
                                <ul class="d-flex justify-content-end">
                                    <?php foreach ($menuItems as $item): ?>
                                        <li class="<?= $item['active'] ? 'selected' : '' ?>">
                                            <a href="<?= $item['href'] ?>"><b><?= $item['label'] ?></b></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </nav>
                        </div>
                                            <div class="header__right-5 d-flex align-items-center justify-content-end">
                        <div class="header__btn-5 d-none d-xl-block ml-40 my-2">
                            <?php if (($headerActivePage ?? '') === 'kontakt'): ?>
                                <a href="/formatiker_php/public/kontakt" class="tp-btn rounded-2 w-100 to-contact d-flex justify-content-center">Kontakt</a>
                            <?php else: ?>
                                <a href="/formatiker_php/public/kontakt" class="tp-btn-black rounded-2 to-contact">Kontakt</a>
                            <?php endif; ?>
                        </div>
                        <div class="header__hamburger header__hamburger-5 ml-50 d-xl-none">
                            <button type="button" class="hamburger-btn hamburger-btn-blue hamburger-btn-black offcanvas-open-btn" id="sidebarToggle">
                                <span></span><span></span><span></span>
                            </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </header>
    <div class="offcanvas__area offcanvas__area-5">
        <div class="offcanvas__wrapper offcanvas__wrapper-5">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn offcanvas__close-btn-5 offcanvas-close-btn">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a aria-current="page" href="index.html" class="router-link-active router-link-exact-active">
                            <img loading="lazy" class="w-75" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjwhLS0gQ3JlYXRlZCB3aXRoIElua3NjYXBlIChodHRwOi8vd3d3Lmlua3NjYXBlLm9yZy8pIC0tPgoKPHN2ZwogICB3aWR0aD0iMTQwLjY3MzQzbW0iCiAgIGhlaWdodD0iMzAuMDQzMDgzbW0iCiAgIHZpZXdCb3g9IjAgMCAxNDAuNjczNDMgMzAuMDQzMDgzIgogICB2ZXJzaW9uPSIxLjEiCiAgIGlkPSJzdmcxIgogICB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogIDxkZWZzCiAgICAgaWQ9ImRlZnMxIj4KICAgIDxyZWN0CiAgICAgICB4PSI5Ny40NDQyNiIKICAgICAgIHk9IjM2My4wMjc2NSIKICAgICAgIHdpZHRoPSI2MzkuMTE5NjkiCiAgICAgICBoZWlnaHQ9IjI3Mi4yNzA3MiIKICAgICAgIGlkPSJyZWN0MSIgLz4KICA8L2RlZnM+CiAgPGcKICAgICBpZD0ibGF5ZXIxIgogICAgIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0yNS42NTY2OTMsLTkxLjkwOTg0NCkiPgogICAgPHRleHQKICAgICAgIHhtbDpzcGFjZT0icHJlc2VydmUiCiAgICAgICB0cmFuc2Zvcm09InNjYWxlKDAuMjY0NTgzMzMpIgogICAgICAgaWQ9InRleHQxIgogICAgICAgc3R5bGU9ImZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjk2cHg7Zm9udC1mYW1pbHk6Um9ib3RvOy1pbmtzY2FwZS1mb250LXNwZWNpZmljYXRpb246J1JvYm90byBCb2xkJzt0ZXh0LWFsaWduOnN0YXJ0O3dyaXRpbmctbW9kZTpsci10YjtkaXJlY3Rpb246bHRyO3doaXRlLXNwYWNlOnByZTtzaGFwZS1pbnNpZGU6dXJsKCNyZWN0MSk7ZmlsbDojYWFmZmNjO3N0cm9rZTojMDAwMDAwO3N0cm9rZS13aWR0aDoxLjEzMzg2Ij48dHNwYW4KICAgICAgICAgeD0iOTcuNDQzMzU5IgogICAgICAgICB5PSI0NDcuMDI3MzQiCiAgICAgICAgIGlkPSJ0c3BhbjMiPjx0c3BhbgogICAgICAgICAgIHN0eWxlPSJmb250LXN0eWxlOml0YWxpYztmb250LXdlaWdodDo5MDA7LWlua3NjYXBlLWZvbnQtc3BlY2lmaWNhdGlvbjonUm9ib3RvIEhlYXZ5IEl0YWxpYyc7ZmlsbDojMDAwMDAwIgogICAgICAgICAgIGlkPSJ0c3BhbjIiPkZvcm1hdGlrZXI8L3RzcGFuPjwvdHNwYW4+PC90ZXh0PgogICAgPHBhdGgKICAgICAgIHN0eWxlPSJmaWxsOiMwMDAwMDA7ZmlsbC1vcGFjaXR5OjE7c3Ryb2tlOiMwMDAwMDA7c3Ryb2tlLXdpZHRoOjAuMyIKICAgICAgIGQ9Im0gMTI4LjkwNjc2LDkyLjI1OTU2OCBjIDY2LjczMDIxLC0zLjAzMzE5IDIzLjUwNzI0LDI5LjU3MzYxMiAyMy41MDcyNCwyOS41NzM2MTIgMCwwIDI1LjAyMzgzLC0yNi4yODc2NTIgLTIzLjUwNzI0LC0yOS41NzM2MTIgeiIKICAgICAgIGlkPSJwYXRoMiIgLz4KICA8L2c+Cjwvc3ZnPgo=" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="mobile-menu fix mb-40 menu-counter mean-container">
                    <div class="mean-bar">
                        <nav class="mean-nav">
                            <ul>
                                <?php foreach ($menuItems as $item): ?>
                                    <li>
                                        <a class="<?= $item['active'] ? 'selected' : '' ?>" href="<?= $item['href'] ?>"><b><?= $item['label'] ?></b></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="offcanvas__btn-5 mb-60">
                    <?php if (($headerActivePage ?? '') === 'kontakt'): ?>
                        <a href="/formatiker_php/public/kontakt" class="tp-btn rounded-2 w-100 to-contact d-flex justify-content-center">Kontakt</a>
                    <?php else: ?>
                        <a href="/formatiker_php/public/kontakt" class="tp-btn-black rounded-2 w-100 to-contact d-flex justify-content-center">Kontakt</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay">
    </div>
    <main>