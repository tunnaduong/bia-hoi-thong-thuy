<?php

namespace App\Models;

class ProductModel extends BaseModel
{
    public function getAllProducts()
    {
        $this->setQuery("SELECT * FROM products ORDER BY created_at DESC");
        return $this->loadAllRows();
    }

    public function getProductById($id)
    {
        $this->setQuery("SELECT * FROM products WHERE id = ?");
        return $this->loadRow([$id]);
    }

    public function createProduct($data)
    {
        $this->setQuery("INSERT INTO products (name, short_description, description, images, created_at) VALUES (?, ?, ?, ?, ?)");
        return $this->execute([
            $data['name'],
            $data['short_description'],
            $data['description'],
            $data['images'],
            $data['created_at']
        ]);
    }

    public function updateProduct($id, $data)
    {
        $this->setQuery("UPDATE products SET name = ?, short_description = ?, description = ?, images = ?, updated_at = ? WHERE id = ?");
        return $this->execute([
            $data['name'],
            $data['short_description'],
            $data['description'],
            $data['images'],
            $data['updated_at'],
            $id
        ]);
    }

    public function deleteProduct($id)
    {
        $this->setQuery("DELETE FROM products WHERE id = ?");
        return $this->execute([$id]);
    }
}
