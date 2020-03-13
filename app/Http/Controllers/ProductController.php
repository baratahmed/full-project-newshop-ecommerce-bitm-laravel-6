<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Image;
use DB;
use Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->join('brands', 'products.brand_id', '=', 'brands.id')
                    ->select('products.*', 'categories.category_name','brands.brand_name')
                    ->get();
        return view('admin.product.manage-product',[
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
        return view('admin.product.add-product',[
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }



    protected  function productInfoValidate($request){
        $this->validate($request, [
            'product_name' => 'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
            'product_price' => 'required',
            'product_quantity' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'publication_status' => 'required',
        ]);
    }
    protected  function productImageUpload($request){
        $productImage = $request->file('product_image');
        $filetype = $productImage->getClientOriginalExtension();
        $imageName = 'IMG'.time().$request->product_name.'.'.$filetype;
        //$imageName = $productImage->getClientOriginalName();
        $directory = 'product-images/';
        $imageUrl = $directory.$imageName;
        //$productImage->move($directory,$imageName);
        Image::make($productImage)->resize(200,200)->save($imageUrl);

        return $imageUrl;
    }
    protected function saveProductBasicInfo($request, $imageUrl ){
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->saveProductBasicInfo($request, $imageUrl);
        Session::flash('success','Product added successfully!');
        return redirect()->back();       
    }


    public function unpublishedProductInfo($id){
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();
        Session::flash('success','Product unpublished successfully!');
        return redirect()->back();
    }

    public function publishedProductInfo($id){
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();
        Session::flash('success','Product published successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
         return view('admin.product.edit-product',[
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function productBasicInfoUpdate($request,$product,$imageUrl=null){
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        if ($imageUrl) {
            $product->product_image = $imageUrl;
        }        
        
        $product->publication_status = $request->publication_status;
        $product->save();
    }
    public function update(Request $request)
    {
        $productImage = $request->file('product_image');
        $product = Product::find($request->product_id);
        if ($productImage) {
            unlink($product->product_image);
            $imageUrl = $this->productImageUpload($request);
            $this->productBasicInfoUpdate($request,$product,$imageUrl);
        } 
        else {
            $this->productBasicInfoUpdate($request,$product);
        }
        Session::flash('success','Product updated successfully!');
        return redirect()->route('manage-product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        unlink($product->product_image);
        Session::flash('success','Product deleted successfully!');
        return redirect()->route('manage-product');
    }
}
