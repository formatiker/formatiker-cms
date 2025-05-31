<?php

function component(string $name, array $props = []) {
    $path = __DIR__ . '/../Views/components/' . $name . '.php';
    if (!file_exists($path)) {
        echo "<!-- Component '$name' not found -->";
        return;
    }

    // Alle Keys als Variablen verfügbar machen
    extract($props);
    include $path;
}
