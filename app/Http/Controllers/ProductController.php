<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $products = Product::orderBy('created_at', 'desc')->paginate(4);

        // Trả về view và truyền dữ liệu sản phẩm vào view
        return view('layouts.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 4);
    }
    public function showDetails($id)
    {

        $product = Product::find($id);
        // Lấy các sản phẩm liên quan
        $comments = Comment::where('product_id', $id)->get();
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id) // Loại trừ sản phẩm hiện tại
            ->take(4) // Chỉ lấy 4 sản phẩm liên quan (có thể điều chỉnh)
            ->get();
        return view('productDetails', compact('product', 'relatedProducts', 'comments'));
    }
    public function search(Request $request)
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $products = Product::orderBy('created_at', 'desc')->paginate(4);

        $searchTerm = $request->except('_token')['search'];
        $productSearch = Product::where('product_name', 'like', '%' . $searchTerm . '%')
            ->orWhere('product_description', 'like', '%' . $searchTerm . '%')
            ->get();
        return view('searchResults', compact('productSearch', 'products', 'searchTerm'));
    }

    public function index()
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $products = Product::orderBy('product_price', 'asc')->paginate(4);

        // Trả về view và truyền dữ liệu sản phẩm vào view
        return view('dashboard.product.products', compact('products'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    public function create()
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $products = Product::orderBy('created_at', 'desc')->paginate(4);
        $categories = Category::all();
        return view('dashboard.product.create', compact('categories', 'products'));
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'product_name' => 'required',
                'product_price' => 'required|numeric',
                'product_quantity' => 'required|integer',
                'product_description' => 'required|nullable',
                'product_image' => 'nullable|image|required|mimes:jpeg,png|mimetypes:image/jpeg,image/png|max:2048',
                'category_id' => 'required|exists:categories,id'
            ],
            [
                'product_name.required' => 'Ten khong duoc de trong',

            ]
        );
        $product = new Product;
        if ($request->hasFile('product_image')) {
            $path = $request->file('product_image')->store('public/images');
            $product->product_image = basename($path); // Store only the basename
        }
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_quantity = $request->input('product_quantity');
        $product->category_id = $request->input('category_id');
        $product->product_description = $request->input('product_description');
        $product->product_image = basename($path);

        if ($product) {
            $product->save();
            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        } else {
            return redirect()->route('products.index')->with('error', 'Product created fails.');
        }
    }

    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $products = Product::orderBy('created_at', 'desc')->paginate(4);
        $categories = Category::all();
        return view('dashboard.product.edit', compact('categories', 'products', 'product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|integer',
            'product_description' => 'nullable',
            'category_id' => 'required',

        ]);
        $input = $request->except('_token', '_method');
        $update = Product::where('id', $id)->update($input);


        if ($update) {
            return redirect()->route('products.index')->with('success', 'Product updated successfully');
        } else {
            return redirect()->route('products.index')->with('error', 'Product updated fails');
        }
        // $product->fill($request->all());
        // var_dump($product);
        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('images');
        //     $product->image = $path;
        // }

        // return redirect()->route('products.index')->with('success', 'Product updated successfully.');;
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    public function searchDashProduct(Request $request)
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $products = Product::orderBy('created_at', 'desc')->paginate(4);

        $searchTerm = $request->except('_token')['searchDash'];
        $productSearch = Product::where('product_name', 'like', '%' . $searchTerm . '%')
            // ->orWhere('product_description', 'like', '%' . $searchTerm . '%')
            ->get();
        return view('dashboard.product.search', compact('productSearch', 'products', 'searchTerm'));
    }

    public function filterPrice()
    {
    }
}
