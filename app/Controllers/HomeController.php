<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {   
        var_dump($_ENV['DB_HOST']);
        return View::make('index');
    }
}
