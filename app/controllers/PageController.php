<?php
class PageController extends Controller {
    public function show($slug = 'home') {
        require_once __DIR__ . '/../Models/Content.php';

        // Mapping: 'home' → 'homepage.json'
        $jsonFile = $slug === 'home' ? 'homepage' : $slug;
        $content = Content::load($jsonFile);

        // Wenn Datei nicht existiert → Fehlerseite
        if (!$content) {
            http_response_code(404);
            echo "Seite '$slug' nicht gefunden.";
            return;
        }

        $this->view($slug, [
            'content' => $content,
            'activePage' => $slug,
            'title' => ucfirst(str_replace('_', ' ', $slug)) . ' | Formatiker'
        ]);
    }
}
