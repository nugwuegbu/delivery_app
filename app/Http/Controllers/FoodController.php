<?php

namespace App\Http\Controllers;
//use App\Food;
use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //

    }
    public function index(){
        $foodinst = new Food();
        $food = Food::all();
        return response()->json($food);
    }

    public function create(Request $request){
        $food = Food;
        $food->title = $request->title;
        $food->price = $request->price;
        $food->discount = $request->discount;
        $food->category_id = $request->category_id;
        $food->image_path = $request->image_path;
        $food->save();
        return response()->json($food);
    }

    public function show($id){
        $food = Food::find($id);
        return response()->json($food);
    }

    public function update(Request $request,$id){
        $food = Food::find($id);
        $food->title = $request->title;
        $food->price = $request->price;
        $food->discount = $request->discount;
        $food->save();
        return response()->json($food);
    }

    public function destroy($id){
        $food = Food::find($id);
//        $food  = $foodinst->find($id);
        $food->delete();
        return response()->json($food);
    }





    //
}
