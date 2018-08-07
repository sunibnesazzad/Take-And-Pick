<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    //showing all categories
    public function index(){
        $categorys= Category::all();
        return view('Admin.category.index',compact('categorys'));
    }

    ////showing create category page
    public function create(){
        return view('Admin.category.create');
    }

    //storing in database
    public function store(Request $request){
        //validation
        $this->validate($request,[
            'category' => 'required'
        ]);
        $category = new Category;
        $category->name = $request->input('category');

        $category->save();
        $notification = [
            'message' => 'Category Added Successfully.!',
            'alert-type' => 'success'
        ];
        return redirect('/category')->with($notification);

    }

    //showing category update page
    public function update($id){
        $category = Category::find($id);
        return view('Admin.category.update',compact('category'));

    }

    //storing updated category
    public function edit(Request $request,$id){

        //validation
        $this->validate($request,[
            'category' => 'required'
        ]);

        $data = array(
            'name' => $request->input('category'),
        );
        //updating in database
        Category::where('id',$id)->update($data);
        $notification = [
            'message' => 'Category Updated Sucessfully.!',
            'alert-type' => 'success'
        ];

        return redirect('/category')->with($notification);
    }

    //deleting category
    public function destroy($id){
        Category::where('id',$id)->delete($id);
        $notification = [
            'message' => 'Category Deleted Sucessfully.!',
            'alert-type' => 'info'
        ];
        return redirect('/category')->with($notification);
    }
}
