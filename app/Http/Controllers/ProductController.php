<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $products = Product::query()
            ->paginate(10);

        return JsonResource::collection($products);
    }

    public function show(Product $product): JsonResource
    {
        return JsonResource::make($product);
    }

    public function bestSellingProducts(): AnonymousResourceCollection
    {
        $products = Product::query()
            ->withCount('orderItems')
            ->orderBy('order_items_count', 'desc')
            ->take(4)
            ->get();

        return JsonResource::collection($products);
    }
}
