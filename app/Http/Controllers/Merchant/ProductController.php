<?php
namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller{

    public function index(){

        // $result = Product::get();
        $result = [];
        return view('merchant.product.index', compact('result'));

    }

    public function create(){

        $data = [];
        $data['page_title'] = 'Add Product';
        
        return view('merchant.product.add')->with(compact('data'));
    }
}
