<?php

namespace App\Controllers;

class PostController extends BaseController
{
    private $postModel;

    public function __construct()
    {
        $this->postModel = new \App\Models\PostModel();
    }

    public function index()
    {
        $posts = $this->postModel->getAllPosts();
        return $this->render('admin.posts.index', ['posts' => $posts, 'section' => 'posts']);
    }

    public function create()
    {
        return $this->render('admin.posts.create', ['section' => 'posts']);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $content = $_POST['content'] ?? '';

            $this->postModel->createPost([
                'title' => $title,
                'content' => $content,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            header('Location: /admin/manage/posts');
            exit;
        }
    }

    public function edit($id)
    {
        $post = $this->postModel->getPostById($id);
        return $this->render('admin.posts.edit', ['post' => $post, 'section' => 'posts']);
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $content = $_POST['content'] ?? '';

            $this->postModel->updatePost($id, [
                'title' => $title,
                'content' => $content,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            header('Location: /admin/manage/posts');
            exit;
        }
    }

    public function delete($id)
    {
        $this->postModel->deletePost($id);
        header('Location: /admin/manage/posts');
        exit;
    }
}
