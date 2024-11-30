<?php

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
//Usar este PageNotFoundException!

class IndexController extends BaseController
{
    public function index()
    {

        $categoriesModel = model('CategoriesModel');

        $data = [
            'title'     => 'Inicio',
            'categories_list' => $categoriesModel->getCategoriesWithSubcategories()
        ];

        return view('templates/headerTemplate', $data)
            . view('general/index')
            . view('templates/footerTemplate');
    }
}