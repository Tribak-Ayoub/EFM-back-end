<?php

namespace Modules\PkgProduct\App\Services;

use App\Models\Product;

class PkgProductService
{
    public function evaluate(string $expression, array $data): bool
    {
        $stock = $data['stock'] ?? null;
        $price = $data['price'] ?? null;

        // Replace variables in the rule with the actual values from $data
        $expression = str_replace(['stock', 'price'], [$stock, $price], $expression);

        // Now evaluate the rule using eval (be cautious!)
        return (bool) eval ('return ' . $expression . ';');
    }

    public function paginate($perPage = 10)
    {
        $query = Product::all();

        return $query->paginate($perPage);
    }

    public function getProductById($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }

    public function createProduct(array $data)
    {
        $product = Product::create([
            'name' => $data['name'],
            'stock' => $data['stock'],
            'price' => $data['price'],
        ]);

        return $product;
    }
}
