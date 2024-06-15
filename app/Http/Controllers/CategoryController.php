<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.category.categories', compact('categories'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_description' => 'required|nullable',
            'category_image' => 'nullable|image|required',
        ]);

        $category = new Category;
        if ($request->hasFile('category_image')) {
            $path = $request->file('category_image')->store('public/images');
            $category->category_image = basename($path); // Store only the basename
        }
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_image = basename($path);

        if ($category) {
            $category->save();
            return redirect()->route('categories.index')->with('success', 'Category created successfully.');
        } else {
            return redirect()->route('categories.index')->with('error', 'Category created fails.');
        }
    }


    public function edit($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        return view('dashboard.category.edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required',
            'category_description' => 'required|nullable',
            'category_image' => 'nullable|image|required',
        ]);

        // Handle the image upload
        if ($request->hasFile('category_image')) {
            // Delete the old image if it exists
            if ($category->category_image) {
                Storage::delete('public/images/' . $category->category_image);
            }

            $path = $request->file('category_image')->store('public/images');
            $category->category_image = basename($path); // Store only the basename
        }

        // Update the category details
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;

        // Save the updated category
        $category->save();

        return redirect()->route('categories.index')
            ->with('success', 'category updated successfully.');
    }

    public function destroy($id)
    {
        // Tìm danh mục theo ID
        $category = Category::find($id);

        if ($category) {
            // Lấy tất cả các sản phẩm liên quan
            $products = $category->products;

            // Cập nhật category_id của các sản phẩm liên quan thành null
            foreach ($products as $product) {
                $product->category_id = null;
                $product->save();
            }

            // Xóa danh mục
            $category->delete();

            return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
        } else {
            return redirect()->route('categories.index')->with('error', 'Category delete fails.');
        }
    }
    public function searchDashCate(Request $request)
    {
        // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        $categories = Category::orderBy('created_at', 'desc')->paginate(4);

        $searchTerm = $request->except('_token')['searchDashCate'];
        $cateSearch = Category::where('category_name', 'like', '%' . $searchTerm . '%')
            // ->orWhere('product_description', 'like', '%' . $searchTerm . '%')
            ->get();
        return view('dashboard.category.search', compact('cateSearch', 'categories', 'searchTerm'));
    }
}
