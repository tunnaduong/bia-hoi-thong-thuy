<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];
try {
    $router = new RouteCollector();


    // khu vực cần quan tâm -----------
    // bắt đầu định nghĩa ra các đường dẫn
    $router->get('/', [App\Controllers\HomeController::class, 'index']);

    $router->get('/gioi-thieu', [App\Controllers\HomeController::class, 'about']);

    $router->get('/san-pham', [App\Controllers\HomeController::class, 'product']);

    $router->get('/san-pham/{slug}', [App\Controllers\HomeController::class, 'productDetail']);

    $router->get('/tin-tuc', [App\Controllers\HomeController::class, 'news']);

    $router->get('/tin-tuc/{slug}', [App\Controllers\HomeController::class, 'newsDetail']);

    $router->get('/lien-he', [App\Controllers\HomeController::class, 'contact']);

    $router->post('/contact/send-info', [App\Controllers\HomeController::class, 'sendMail']);

    $router->get('/admin', [App\Controllers\HomeController::class, 'admin']);

    $router->any('/login', [App\Controllers\HomeController::class, 'login']);

    $router->get("/logout", [App\Controllers\HomeController::class, 'logout']);

    $router->get('/admin/manage/posts', [App\Controllers\PostController::class, 'index']);

    $router->get('/admin/manage/posts/create', [App\Controllers\PostController::class, 'create']);

    $router->post('/admin/manage/posts/store', [App\Controllers\PostController::class, 'store']);

    $router->get('/admin/manage/posts/edit/{id}', [App\Controllers\PostController::class, 'edit']);

    $router->post('/admin/manage/posts/update/{id}', [App\Controllers\PostController::class, 'update']);

    $router->post('/admin/manage/posts/delete/{id}', [App\Controllers\PostController::class, 'delete']);

    $router->get('/admin/manage/products', [App\Controllers\ProductController::class, 'index']);

    $router->get('/admin/manage/products/create', [App\Controllers\ProductController::class, 'create']);

    $router->post('/admin/manage/products/store', [App\Controllers\ProductController::class, 'store']);

    $router->get('/admin/manage/products/edit/{id}', [App\Controllers\ProductController::class, 'edit']);

    $router->post('/admin/manage/products/update/{id}', [App\Controllers\ProductController::class, 'update']);

    $router->post('/admin/manage/products/delete/{id}', [App\Controllers\ProductController::class, 'delete']);


    // khu vực cần quan tâm -----------
    //$router->get('test', [App\Controllers\ProductController::class, 'index']);

    # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

    // Print out the value returned from the dispatched function
    echo $response;
} catch (Exception $e) {
    (new \App\Controllers\HomeController)->error404($e->getMessage());
    die;
}
