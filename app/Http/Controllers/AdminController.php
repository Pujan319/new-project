<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

class AdminController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }




    public function index()
    {
        return view('admin.adminhome');
    }

    public function addcategory(){
        return view('admin.addcategory');
    }

    public function addproduct(){
        $category=Category::orderBy('id','asc')->get();
        return view('admin.addproduct',['category'=>$category]);
    }

    public function storecategory(Request $request){
        Category::create([
            'category_name'=>$request->get('cname')
        ]);
        $request->session()->flash('msg','Category Added Succesfully');
        return redirect()->back();
    }

    public  function storeproduct(Request $request){

    $image=null;
     if($request->hasFile('image')){
        $file=$request->file('image');
        $image=mt_rand(10001,9999999).'_'.$file->getClientOriginalName();
        $file->move('admin/upload/products/',$image);
     }  
     Product::create([
        'product_name' =>$request->get('pname'),
        'product_price'=>$request->get('price'),
        'product_quantity'=>$request->get('quantity'),
        'product_description'=>$request->get('description'),
        'product_image'=>$image,
        'category_id'=>$request->get('category')
     ]);
     $request->session()->flash('msg','Product has been added seccessfully');
     return redirect()->back();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showproduct()
    {
        $showproduct=Product::orderBy('id','desc')->get();
        return view('admin.showproduct',['showproduct'=>$showproduct]);
    }


    public function showcategory()
    {
        $showcategory=Category::orderBy('id','desc')->get();
        return view('admin.showcategory',['showcategory'=>$showcategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
