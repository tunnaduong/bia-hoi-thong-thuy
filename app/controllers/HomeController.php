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
}
