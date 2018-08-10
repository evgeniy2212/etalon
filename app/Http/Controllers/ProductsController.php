<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use stdClass;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();

        $category = $data['category'];

        $sub_category = $data['sub_category'];

        if ($category == "2" && $sub_category == "none") {

            return view('sub_categories', [
                'category' => $category,
                'sub_categories' => SubCategory::all(),
            ]);
        } else if ($category == "2" && $sub_category != "none") {

                $products = Product::where('category_id', $category)->where('sub_category_id', $sub_category)->get();

                return view('catalog', [
                    'category' => $category,
                    'products' => $products,
                ]);
        } else {

            $products = Product::where('category_id', $category)->get();

            return view('catalog', [
                'category' => $category,
                'products' => $products,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        $product = new Product();

        $file = $request->file('img');

        $data = $request->all();

        $file->move(public_path(). '/img', $file->getClientOriginalName());

        $product->fill($data);

        $product->img = 'img/'. $file->getClientOriginalName();

        $product->category_id = $data['category_id'];

        $product->save();

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = [];

        $sub_category = [];

        foreach (Category::all() as $item) {
            $name = $item['name'];
            $category[$item->id] = $name;
        }

        foreach (SubCategory::all() as $item) {
            $sub_name = $item['name'];

            $sub_category[$item->id] = $sub_name;
        }

        return view('add-product', [
            'product' => $product,
            'category' => $category,
            'sub_category' => $sub_category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request, Product $product)
    {
        $data = $request->all();

        $file = $request->file('img');

        $file->move(public_path(). '/img', $file->getClientOriginalName());

        $data['img'] = 'img/'. $file->getClientOriginalName();

        $product->update($data);

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->route('admin.index');
    }
}
