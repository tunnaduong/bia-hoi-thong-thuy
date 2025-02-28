<?php

namespace App\Models;

class PostModel extends BaseModel
{
    public function getAllPosts()
    {
        $this->setQuery("SELECT * FROM news_posts ORDER BY created_at DESC");
        return $this->loadAllRows();
    }

    public function getPostById($id)
    {
        $this->setQuery("SELECT * FROM news_posts WHERE id = ?");
        return $this->loadRow([$id]);
    }

    public function getPostBySlug($slug)
    {
        $this->setQuery("SELECT * FROM news_posts WHERE slug = ?");
        return $this->loadRow([$slug]);
    }

    public function createPost($data)
    {
        $this->setQuery("INSERT INTO news_posts (title, content, slug, tags, thumbnail, created_at) VALUES (?, ?, ?, ?, ?, ?)");
        return $this->execute([
            $data['title'],
            $data['content'],
            $data['slug'],
            $data['tags'],
            $data['thumbnail'],
            $data['created_at']
        ]);
    }

    public function updatePost($id, $data)
    {
        $this->setQuery("UPDATE news_posts SET title = ?, content = ?, slug = ?, tags = ?, thumbnail = ?, updated_at = ? WHERE id = ?");
        return $this->execute([
            $data['title'],
            $data['content'],
            $data['slug'],
            $data['tags'],
            $data['thumbnail'],
            $data['updated_at'],
            $id
        ]);
    }

    public function deletePost($id)
    {
        $this->setQuery("DELETE FROM news_posts WHERE id = ?");
        return $this->execute([$id]);
    }
}
