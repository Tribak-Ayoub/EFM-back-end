<?php

namespace Modules\PkgProduct\App\Controllers;

use Illuminate\Routing\Controller;
use Modules\PkgProduct\App\Services\PkgProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(PkgProductService $productService)
    {
        $this->productService = $productService;
    }

    public function test()
    {
        $data = ['stock' => 2, 'price' => 150];

        $expression = "stock < 5 && price > 100";

        $result = $this->productService->evaluate($expression, $data);

        return view('PkgProduct::test', compact('data', 'expression', 'result'));
    }
}

