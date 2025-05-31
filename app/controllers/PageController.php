<?php
class PageController extends Controller
{
    public function show()
    {
        $uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $slug = end($uri);

        if ($slug === 'public' || $slug === '') {
            $slug = 'homepage';
        }

        $jsonPath = __DIR__ . "/../content/{$slug}.json";

        if (!file_exists($jsonPath)) {
            http_response_code(404);
            echo "Seite '{$slug}' nicht gefunden.";
            return;
        }

        $page = json_decode(file_get_contents($jsonPath), true);
        $elements = $page['Elements'] ?? [];

        foreach ($elements as $elementName => $attributes) {
            if (!is_array($attributes)) continue;

            // Basisname ermitteln, z. B. "about2" → "about"
            $baseName = preg_replace('/\d+$/', '', $elementName);

            // Variablen für dieses Element setzen (z. B. $aboutTitle, $aboutTextArray)
            $this->injectScopedVariables($baseName, $attributes);

            // Template ermitteln (z. B. about.php)
            $templateFile = __DIR__ . "/../views/layout/{$baseName}.php";

            if (file_exists($templateFile)) {
                extract(array_filter(
                    $GLOBALS,
                    fn($v, $k) => str_starts_with($k, $baseName),
                    ARRAY_FILTER_USE_BOTH
                ));

                include $templateFile;
            } else {
                echo "<!-- Template für '{$baseName}' nicht gefunden -->";
            }
        }
    }

    /**
     * Setzt Variablen wie $aboutTitle aus beliebigen Keys wie "about", "about2", "about3"
     */
    private function injectScopedVariables(string $baseName, array $attributes): void
    {
        // Spezialfall: Direktes Array von Objekten → z. B. services
        if (array_is_list($attributes) && isset($attributes[0]) && is_array($attributes[0])) {
            $GLOBALS[$baseName] = $attributes;
            return;
        }

        // Normalfall: Key/Value-Paare → z. B. "title", "textArray", etc.
        foreach ($attributes as $key => $value) {
            $varName = $baseName . ucfirst($key);
            $GLOBALS[$varName] = $value;
        }
    }
}
