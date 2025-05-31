<?php
    class Content {
        public static function load(string $slug) {
            $file = __DIR__ . "/../content/{$slug}.json";
            if (!file_exists($file)) {
                return null;
            }
            $json = file_get_contents($file);
            return json_decode($json, true);
        }
    }
