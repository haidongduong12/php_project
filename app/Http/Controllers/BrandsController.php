<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brands;
use Illuminate\Support\Facades\Storage;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brands::all();
        // var_dump($brands);
        return view('dashboard.brand.brands', compact('brands'));
    }

    public function create()
    {
        $brands = Brands::all();
        return view('dashboard.brand.create', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required',
            'brand_description' => 'required|nullable',
            'brand_image' => 'nullable|image|required',
        ]);

        $brand = new Brands;
        if ($request->hasFile('brand_image')) {
            $path = $request->file('brand_image')->store('public/images');
            $brand->image = basename($path); // Store only the basename
        }
        $brand->name = $request->brand_name;
        $brand->description = $request->brand_description;
        $brand->image = basename($path);

        if ($brand) {
            $brand->save();
            return redirect()->route('brands.index')->with('success', 'Brand created successfully.');
        } else {
            return redirect()->route('brands.index')->with('error', 'Brand created fails.');
        }
    }


    public function edit($id)
    {
        $brand = Brands::find($id);
        $brands = Brands::all();
        return view('dashboard.brand.edit', compact('brand', 'brands'));
    }

    public function update(Request $request, Brands $brand)
    {
        $request->validate([
            'brand_name' => 'required',
            'brand_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand_description' => 'nullable'
        ]);

        // Handle the image upload
        if ($request->hasFile('brand_image')) {
            // Delete the old image if it exists
            if ($brand->image) {
                Storage::delete('public/images/' . $brand->image);
            }

            $path = $request->file('brand_image')->store('public/images');
            $brand->image = basename($path); // Store only the basename
        }

        // Update the brand details
        $brand->name = $request->brand_name;
        $brand->description = $request->brand_description;

        // Save the updated brand
        $brand->save();

        return redirect()->route('brands.index')
            ->with('success', 'Brand updated successfully.');
    }

    public function destroy(Brands $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')
            ->with('success', 'Brand deleted successfully.');
    }
}
