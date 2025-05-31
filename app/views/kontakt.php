<?php
    $data = json_decode(file_get_contents(__DIR__ . '/../content/kontakt.json'), true);

    $globalPageName = $data['globalPageName'] ?? '';
    $headerTitle = $data['header']['title'] ?? '';
    $headerActivePage = $data['header']['activePage'] ?? '';
    require __DIR__ . '/layout/header.php';
?>
<?php 
    require __DIR__ . '/layout/placeHolder.php';
?>
<?php 
    $aboutSubtitle = $data['about']['subtitle'] ?? '';
    $aboutTitle = $data['about']['title'] ?? '';
    $aboutTextArray = $data['about']['textArray'] ?? [];
    require __DIR__ . '/layout/about.php';
?>
<?php 
    $picture = $data['singleImage']['picture'] ?? '';
    require __DIR__ . '/layout/singleImage.php';
?>
<?php 
    require __DIR__ . '/layout/contactForm.php';
?>
<?php
    $footerLogo = $data['footer']['logo'] ?? '';
    $footerInfo = $data['footer']['info'] ?? '';
    $footerPhoneLink = $data['footer']['phoneLink'] ?? '';
    $footerPhoneDisplay = $data['footer']['phoneDisplay'] ?? '';
    $footerEmailLink = $data['footer']['emailLink'] ?? '';
    $footerEmailDisplay = $data['footer']['emailDisplay'] ?? '';
    $footerOpeningList = $data['footer']['openingList'] ?? [];
    require __DIR__ . '/layout/footer.php';
?>