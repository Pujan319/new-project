<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Category;

use App\Models\Customer;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.homepage');
    
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function about()
    {
        return view('user.about');
    }
    public function team()
    {
        return view('user.team');
    }
    public function product()
    {
        $show=Product::orderBy('id','desc')->get();
        return view('user.product',['show'=>$show]);
    }
    public function service()
    {
        return view('user.service');
    }
    public function pricing()
    {
        return view('user.pricing');
    }
    public function blog()
    {
        return view('user.blog');
    }
    public function productdetail($id){
        $detail=Product::find($id);

        $recent=Product::orderBy('id','desc')->limit(5)->get();

        $category=Category::withCount('products')->get();

        return view('user.productdetail',compact('detail','recent','category'));
    }
    public function search(Request $request){
        $searchitem=$request->get('search');
        $result=Product::orderBy('id','desc')->where('product_name','like','%'.$searchitem.'%')->get();
        return view('user.searchproduct',['result'=>$result]);
    }


    public function productbycategory($id){
        $category=category::find($id);
        return view('user.productbycategory',['category'=>$category]);
    }


    public function signupform(){
        return view('user.signup');
    }

    public function storecustomer(Request $request){
        Customer::create([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('pass'))
        ]);
        $request->session()->flash('msg','Account has been created successfully');
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
