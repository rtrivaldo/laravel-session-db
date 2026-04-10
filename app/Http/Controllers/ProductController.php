<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('variants')->get();

        foreach ($products as $p) {
            echo $p->name . "<br>";

            foreach ($p->variants as $v) {
                echo "- " . $v->name . "<br>";
            }
        }
    }

    public function storeSession(Request $request)
    {
        session([
            'product_name' => $request->name
        ]);

        return "Data '{$request->name}' disimpan ke session";
    }

    public function getSession()
    {
        return "Data di session: " . session('product_name');
    }

    public function deleteSession()
    {
        session()->forget('product_name');

        return "Session dihapus";
    }
}