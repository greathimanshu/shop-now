<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{

    public function index()
    {

        $result = Product::with('category')->where('user_id', Auth::id())->paginate(10);
        return view('merchant.product.index', compact('result'));
    }

    public function create()
    {

        $data = [];
        $data['page_title'] = 'Add Product';
        $categorys = Category::where('status', 'active')->get();

        return view('merchant.product.add')->with(compact('data', 'categorys'));
    }

    public function store(Request $request)
    {

        try {
            // dd($request->all());
            $requestData = $request->all();
            $userID = Auth::id();
            $request->validate([
                'name' => 'required|max:100|string',
                'cost' => 'required|integer|not_in:0|regex:/^\d*(\.\d{2})?$/',
                'description' => 'required|max:255|string',
                'category' => 'required',
                'discount' => 'sometimes',
                'quantity' => 'required|integer',
            ]);
            $data = [];

            $data['page_title'] = 'Add Product';
            $product = new Product();
            $product->name = $requestData['name'];
            $product->cost = $requestData['cost'];
            $product->user_id = $userID;
            $product->description = $requestData['description'];
            $product->category_id = $requestData['category'];
            $product->discount = $requestData['discount'] ?? null;
            $product->quantity = $requestData['quantity'] ?? null;

            if(isset($requestData['discount'])){
                $dis_rate =$requestData['cost'] - ($requestData['cost'] * ($requestData['discount']/100));
                $product->discount_cost = $dis_rate;
            }

            $product->save();
            return redirect()->route('products')->with('success', 'Product added successfully');
        } catch (\Exception $e) {
            $message = $e->getMessage();
            Log::error($e->getTraceAsString());
            return redirect()->back()->withInput()->with('error', $message);
        }
    }

    public function edit($id)
    {
        $data = [];
        $data['page_title'] = 'Add Product';
        $data = Product::where('id', $id)->first();
        $categorys = Category::where('status', 'active')->get();

        return view('merchant.product.edit')->with(compact('data', 'categorys'));
    }

    public function show($id)
    {
        $data = [];
        $data['page_title'] = 'Add Show';
        $data = Product::where('id', $id)->first();
        $categorys = Category::where('status', 'active')->get();

        return view('merchant.product.detail')->with(compact('data', 'categorys'));
    }
}
