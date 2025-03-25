<?php

namespace Modules\PkgProduct\App\Services;

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
}
