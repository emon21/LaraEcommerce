<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')->orderBy('id','DESC')->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validation
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',

        ]);

        //object method of save date
        // $category = new Category;
        // $category->category_name = $request->category_name;
        // $category->category_slug = Str::slug($request->category_name);
        // $category->save();



        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name,'-')
        ]);




        return redirect()->back()->with('success','Category Added Successfully !!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category,$id)
    {
        //query Builder
        $data = DB::table('categories')->where('id',$id)->first();
        return response()->json($data);

        //Eluqrem ORM
        // $data = Category::findOrfail($id);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // $category = DB::table('categories')->find($category->id);
        // return $category;

        $category = Category::where('id',$request->id)->first(); //get the record
        $category->update([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name),
        ]);


        // DB::table('categories')->where('id',$request->id)->update([
        //     'category_name' => $request->category_name,
        //     'category_slug' => Str::slug($request->category_name,'-'),
        // ]);

        //Eloqueent ORM

        // $category = Category::where('id',$request->id)->first();

        // $category->update([
        //     'category_name' => $request->category_name,
        //     'category_slug' => Str::slug($request->category_name),
        // ]);


        // $category = Category::find($id);

        // $category->category_name = $request->category_name;
        // $category->category_slug = Str::slug($request->category_name);
        // $category->save();

        // $data=array();
    	// $data['category_name']=$request->category_name;
    	// $data['category_slug']=Str::slug($request->category_name, '-');
    	// DB::table('categories')->where('id',$request->id)->update($data);

        // $data=array();
    	// $data['category_name']=$request->category_name;
    	// $data['category_slug']=Str::slug($request->category_name, '-');
    	// DB::table('categories')->where('id',$request->id)->update($data);

        $notyfication = array('message' => 'Category Updated!!','alert-type' => 'success');
        return redirect()->back()->with($notyfication);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //

        Category::destroy($category->id);

        $notyfication = array('message' => 'Category Deleted!','alert-type' => 'error');

        return redirect()->route('category.index')->with($notyfication);

    }
}
