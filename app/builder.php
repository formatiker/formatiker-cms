<?php

$slug = $_GET['page'] ?? 'home';
$jsonPath = __DIR__ . "/content/{$slug}.json";

if (!file_exists($jsonPath)) {
    http_response_code(404);
    exit("Seite '{$slug}' nicht gefunden.");
}

$page = json_decode(file_get_contents($jsonPath), true);
$elements = $page['Elements'] ?? [];

foreach ($elements as $elementName => $attributes) {
    if (is_array($attributes)) {
        foreach ($attributes as $key => $value) {
            // Wandelt JSON keys in $-Variablen um (z. B. "headline" → $headline)
            ${$key} = $value;
        }
    }

    $templateFile = __DIR__ . "/view/layout/{$elementName}.php";
    if (file_exists($templateFile)) {
        include $templateFile;
    } else {
        echo "<!-- Template für '{$elementName}' nicht gefunden -->";
    }
}
