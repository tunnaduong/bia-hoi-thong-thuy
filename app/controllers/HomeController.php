<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $this->render("pages.home");
    }

    public function about()
    {
        $this->render("pages.about");
    }

    public function product()
    {
        $this->render("pages.product");
    }

    public function news()
    {
        $this->render("pages.news");
    }
}
