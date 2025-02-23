<?php

namespace App\Controllers;

use eftec\bladeone\BladeOne;

class BaseController
{
    public function render($viewFile, $data = [])
    {
        $viewDir = "./app/views";
        $storageDir = "./storage";
        $blade = new BladeOne($viewDir, $storageDir, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }

    public function uploadFile(array $file, $folder = 'products')
    {
        // Kiểm tra nếu không có file hoặc file lỗi
        if (!isset($file['error']) || $file['error'] !== UPLOAD_ERR_OK) {
            return null;
        }

        // Lấy phần mở rộng file (jpg, png, ...)
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);

        // Đặt tên file tránh trùng
        $fileName = time() . '-' . uniqid() . '.' . $ext;

        // Thư mục lưu trữ
        $uploadDir = 'storage/uploads/' . trim($folder, '/') . '/';

        // Tạo thư mục nếu chưa có
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Đường dẫn đầy đủ
        $destPath = $uploadDir . $fileName;

        // Di chuyển file
        if (move_uploaded_file($file['tmp_name'], $destPath)) {
            return $destPath; // Trả về đường dẫn để lưu vào database
        }

        return null; // Trả về null nếu có lỗi
    }

    public function uploadFiles(array $files, $folder = 'products')
    {
        $uploadedPaths = [];

        foreach ($files['name'] as $key => $fileName) {
            $file = [
                'name' => $files['name'][$key],
                'type' => $files['type'][$key],
                'tmp_name' => $files['tmp_name'][$key],
                'error' => $files['error'][$key],
                'size' => $files['size'][$key],
            ];

            $uploadedPath = $this->uploadFile($file, $folder);
            if ($uploadedPath) {
                $uploadedPaths[] = $uploadedPath;
            }
        }

        return $uploadedPaths; // Return an array of uploaded file paths
    }
}
