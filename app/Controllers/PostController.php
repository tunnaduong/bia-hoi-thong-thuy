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
            $slug = $_POST['slug'] ?? NULL;
            $tags = !empty($_POST['tags']) ? $_POST['tags'] : null;

            if (!empty($_FILES['thumbnail']['name'])) { // Check if files were uploaded
                $imagePath = $this->uploadFile($_FILES['thumbnail'], 'posts');
            }

            $this->postModel->createPost([
                'title' => $title,
                'content' => $content,
                'slug' => $slug,
                'tags' => $tags,
                'thumbnail' => $imagePath ?? null,
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
            $slug = $_POST['slug'] ?? '';
            $tags = !empty($_POST['tags']) ? $_POST['tags'] : null;
            $existingImage = $_POST['existing_image'] ?? '';

            if (!empty($_FILES['thumbnail']['name'])) { // Check if files were uploaded
                $imagePath = $this->uploadFile($_FILES['thumbnail'], 'posts');
            } else {
                $imagePath = $existingImage;
            }

            $this->postModel->updatePost($id, [
                'title' => $title,
                'content' => $content,
                'slug' => $slug,
                'tags' => $tags,
                'thumbnail' => $imagePath,
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
