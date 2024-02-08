<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function CategoryPage(Request $request){
        $user_id=$request->header('id');
        $data =  Category::where('user_id',$user_id)->get();
        return view('pages.dashboard.category-page',compact('data'));
    }

    // function CategoryList(Request $request){
    //     $user_id=$request->header('id');
    //     $data =  Category::where('user_id',$user_id)->get();
    //     return view('pages.dashboard.category-page',compact($data));
    // }

    function CategoryCreate(Request $request){
        $user_id=$request->header('id');
        return Category::create([
            'name'=>$request->input('name'),
            'user_id'=>$user_id
        ]);
    }

    function CategoryDelete(Request $request){
        $category_id=$request->input('id');
        $user_id=$request->header('id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->delete();
    }


    function CategoryByID(Request $request,$id){
        $category_id= $id;
        $user_id=$request->header('id');
        $data =  Category::where('id',$category_id)->where('user_id',$user_id)->first();
        return view("pages.dashboard.category-edit",compact('data'));
    }



    function CategoryUpdate(Request $request,$id){
        $category_id=$id;
        $user_id=$request->header('id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->update([
            'name'=>$request->input('name'),
        ]);
    }
}
