<?php
    $data = json_decode(file_get_contents(__DIR__ . '/../content/homepage.json'), true);

    $globalPageName = $data['globalPageName'] ?? '';
    $headerTitle = $data['header']['title'] ?? '';
    $headerActivePage = $data['header']['activePage'] ?? '';
    require __DIR__ . '/layout/header.php';
?>
<?php
    $sliderImages = $data['slider']['images'] ?? '';
    $sliderHeadline = $data['slider']['headline'] ?? '';
    $sliderTextPoints = $data['slider']['textPoints'] ?? '';
    $sliderPhoneLink = $data['slider']['phoneLink'] ?? '';
    $sliderPhoneDisplay = $data['slider']['phoneDisplay'] ?? '';
    $sliderEmailLink = $data['slider']['emailLink'] ?? '';
    $sliderEmailDisplay = $data['slider']['emailDisplay'] ?? '';
    require __DIR__ . '/layout/slider.php';
?>
<?php 
    $services = $data['services'];
    require __DIR__ . '/layout/services.php';
?>

<?php 
    $aboutSubtitle = $data['about']['subtitle'] ?? '';
    $aboutTitle = $data['about']['title'] ?? '';
    $aboutTextArray = $data['about']['textArray'] ?? [];
    require __DIR__ . '/layout/about.php';
?>

<?php 
    $ctaSubtitle = $data['cta']['subtitle'] ?? '';
    $ctaTitle = $data['cta']['title'] ?? '';
    $ctaLink = $data['cta']['link'] ?? '';
    $ctaLinkText = $data['cta']['linkText'] ?? '';
    require __DIR__ . '/layout/cta.php';
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