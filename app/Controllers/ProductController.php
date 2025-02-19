<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new \App\Models\ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAllProducts();
        return $this->render('admin.products.index', ['products' => $products, 'section' => 'products']);
    }

    public function create()
    {
        return $this->render('admin.products.create', ['section' => 'products']);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $short_description = $_POST['short_description'] ?? '';

            $this->productModel->createProduct([
                'name' => $name,
                'description' => $description,
                'short_description' => $short_description,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            header('Location: /admin/manage/products');
            exit;
        }
    }

    public function edit($id)
    {
        $product = $this->productModel->getProductById($id);
        return $this->render('admin.products.edit', ['product' => $product, 'section' => 'products']);
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $short_description = $_POST['short_description'] ?? '';

            $this->productModel->updateProduct($id, [
                'name' => $name,
                'short_description' => $short_description,
                'description' => $description,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            header('Location: /admin/manage/products');
            exit;
        }
    }

    public function delete($id)
    {
        $this->productModel->deleteProduct($id);
        header('Location: /admin/manage/products');
        exit;
    }
}
