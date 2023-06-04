<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    public function actionBasket()
    {
        return view('front/basket');
    }

    public function actionProduct($id)
    {
        $product = Product::query()->find($id);
        if (empty($product)) {
            throw new \Exception('Product does not found');
        }
        return view('front/product', compact('product'));
    }

    public function actionGetBasketData()
    {
        $cart = request('cart');
        if (empty($cart)) {
            return [];
        }

        $cart = json_decode($cart, true);
        $ids = array_map(function($obj) {
            return $obj['id'];
        }, $cart);
        $products = Product::query()->whereIn('id', $ids)->get()->toArray();
        return json_encode($products);
    }
}
