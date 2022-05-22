<?php

class BaseController {
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';

    /**
     * Quy tắc truyền $path:
     * + foldername.filename
     * + Chỉ cần truyền thư mục bên trong thư mục Views
     */
    protected function view($view_path, $data = []) {
        foreach($data as $key => $value) {
            $$key = $value;
        }

        $view_path = self::VIEW_FOLDER_NAME. '/' . str_replace('.', '/', $view_path) . '.php';
        require($view_path);
    }

    protected function load_model($model_path) {
        $viewPath = self::MODEL_FOLDER_NAME. '/' . $modelPath. '.php';
        require($viewPath);
    }
}