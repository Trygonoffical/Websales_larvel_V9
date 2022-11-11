<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductList;

use Illuminate\Support\Facades\Auth;


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
        $products =  ProductList::all();
        
        return view('product.viewproduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productUpload(Request $request){
        
        $product_name = New Product();
        $product_name->Product_Name = $request->input('P_name');
        $product_name->save();
        return response()->json([
            'message'   => 'Your Form Has Been Submitted !!',
            'class_name'  => 'alert-success',
            'product_name' => '<option value='.$product_name->id.' selected>'.$request->input('P_name').'</option>' 
            ]);


        // return response()->json([
        //         'message'   => 'Your Form Has Been Submitted !!',
        //         'class_name'  => $request->input('P_name')
        //         ]);
    



    }



    public function create()

    {
        
        $productList = Product::all();
        
        return view('product.createProduct', compact('productList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('Product_Image')){
            $filenameWithExt = $request-file('Product_Image')->getClientOriginalName();
            echo $filenameWithExt;
            // $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // $extension = $request->file('Product_Image')->getClientOriginalExtension();
            // $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // $path = $request->file('Product_Image')->storeAs('public/Product_Images', $fileNameToStore);
        }
        // else{
        //     $fileNameToStore = 'noimage.jpg';
        // }
        // $productslist = new ProductList();
        // if($request->input('P_name')){
        
        // }
        // $products = new Product();
        // $products->Name = $request->input('Product_Name');
        // $productslist->Product_Code = $request->input('Product_Code');
        // $productslist->Description = $request->input('Description');
        // $productslist->How_Many_In_Bundle = $request->input('How_Many_In_Bundle');
        // $productslist->Price_CAD = $request->input('Price_CAD');
        // $productslist->Product_Image = $fileNameToStore;
        // $products->save();
        // $productslist->save();
        // return redirect('product');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        return view('product.editProduct',compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products =  Product::find($id);
        $products->Name = $request->input('Name');
        $products->Category = $request->input('Category');
        $products->Attribute = $request->input('Attribute');
        $products->Attribute_value = $request->input('Attribute_value');
        $products->price = $request->input('price');
        $products->Stock = $request->input('Stock');
        $products->save();
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  Product::find($id);
        $product->delete();
        return redirect('product');
        // dd($id);
    }
}
