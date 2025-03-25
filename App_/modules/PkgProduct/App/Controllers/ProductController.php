<?php

namespace Modules\PkgProduct\App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

    public function index()
    {
        $product = $this->productService->paginate();

        return response()->json([
            'product' => $product,
        ]);

    }

    public function show(string $id)
    {
        $product = $this->productService->getProductById($id);

        return response()->json([
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);

        $product = $this->productService->createProduct($validated);

        return response()->json([
            'message' => "The product has been created",
            'product' => $product
        ], Response::HTTP_CREATED);
    }
}

