<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\Category;
use App\Models\Product;
use App\Models\Material;
use App\Models\Addon;
use App\Models\Increment;

class SiteController extends Controller
{
    public function index()
    {   
        $first = Category::first();

        if ($first == null) {
            return 'Нет категорий в базе.';
        }

        return redirect('/calc/' . $first->slug);
    }

    public function showCategory(Request $request, $slug) 
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        $managers = Manager::get();
        $products = Product::whereCategoryId($category->id)->get();
        $materials = Material::whereCategoryId($category->id)->get();
        $addons = Addon::whereCategoryId($category->id)->get();
        $increments = [];

        foreach (Increment::with(['product', 'material'])->whereCategoryId($category->id)->get() as $inc) {
            if (!isset($increments[$inc->name])) {
                $increments[$inc->name] = [
                    'id' => $inc->id,
                    'width' => $inc->width,
                    'values' => [],
                ];
                $increments[$inc->name]['values'][$inc->product->type . '_' . $inc->material->slug . '-' . $inc->product->size] = $inc->price;
            }

            $increments[$inc->name]['values'][$inc->product->type . '_' . $inc->material->slug . '-' . $inc->product->size] = $inc->price;
        }

        // dd($increments);

        return view('welcome', compact('category', 'managers', 'products', 'materials', 'addons', 'increments'));
    }
}
