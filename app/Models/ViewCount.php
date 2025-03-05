<?php

namespace App\Models;

class ViewCount extends BaseModel
{
    public function getViewCountForPost($postId)
    {
        $this->setQuery('SELECT views FROM news_posts WHERE id = ?');
        return $this->loadRow([$postId]);
    }

    public function incrementViewCountForPost($postId)
    {
        $this->setQuery('UPDATE news_posts SET views = views + 1 WHERE id = ?');
        return $this->execute([$postId]);
    }

    public function getViewCountForProduct($productId)
    {
        $this->setQuery('SELECT views FROM products WHERE id = ?');
        return $this->loadRow([$productId]);
    }

    public function incrementViewCountForProduct($productId)
    {
        $this->setQuery('UPDATE products SET views = views + 1 WHERE id = ?');
        return $this->execute([$productId]);
    }
}
