<?php
class Router {
    private $routes = [];

    public function get($path, $action) {
        $this->routes['GET'][$path] = $action;
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Pfad zum Skript (z. B. /formatiker_php/public)
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);

        // Entferne das Basispfad-Präfix
        $path = '/' . ltrim(str_replace($scriptName, '', $requestUri), '/');

        // Sonderfall: leerer Pfad
        if ($path === '') {
            $path = '/';
        }

        // Action für diesen Pfad holen
        $action = $this->routes[$method][$path] ?? $this->routes[$method]['/:slug'] ?? null;

        if (!$action) {
            http_response_code(404);
            echo "Seite nicht gefunden.";
            exit;
        }

        // Controller und Methode extrahieren
        [$controllerName, $methodName] = explode('@', $action);
        require_once __DIR__ . "/../Controllers/{$controllerName}.php";
        $controller = new $controllerName();

        // Slug aus Pfad ermitteln (z. B. /web → "web")
        $slug = trim($path, '/') ?: 'home';

        // Controller-Methode mit Slug aufrufen
        $controller->$methodName($slug);
    }
}
