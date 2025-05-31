<?php
    class Controller {
        protected function view($viewName, $data = []) {
            extract($data);
            require __DIR__ . "/../Views/{$viewName}.php";
        }
    }
