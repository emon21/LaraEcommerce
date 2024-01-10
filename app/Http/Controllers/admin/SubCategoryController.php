<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
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
        //query builder with one to one join
        // $data = DB::table('subcategories')->leftJoin('categories','subcategories.category_id','categories.id')
        // ->select('subcategories.*','categories.category_name')->get();

        //Eloqument ORM

        $data = Subcategory::all();

        $category = Category::all();
        return view('admin.category.subcategory.index',compact('data','category'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        // $validated = $request->validate([
        //     'category_name' => 'required|unique:categories|max:255',
        // ]);

        //object method of save date
        // $subcategory = new SubCategory;
        // $subcategory->category_id = $request->category_id;
        // $subcategory->subcategory_name = $request->subcategory_name;
        // $subcategory->subcategory_slug = Str::slug($request->subcategory_name);
        // $subcategory->save();



        //Query Bulder

        // $data=array();
        // $data['category_id'] = $request->category_id;
        // $data['subcategory_name'] = $request->subcategory_name;
        // $data['subcategory_slug'] = Str::slug($request->subcategory_name, '-');
        // DB::table('subcategories')->insert($data);

        DB::table('subcategories')->insert([
            'category_id'=> $request->category_id,
            'subcategory_name'=> $request->subcategory_name,
            'subcategory_slug'=> Str::slug($request->subcategory_name,'-')
        ]);

        //Eloqument Query

        // SubCategory::insert([
        //     'category_id'=> $request->category_id,
        //     'subcategory_name'=> $request->subcategory_name,
        //     'subcategory_slug'=> Str::slug($request->subcategory_name,'-')
        // ]);

        // $notyfication = array('message' => 'Sub Category Added Successfully','alert-type' => 'success');
        // return redirect()->back()->with($notyfication);
        return redirect()->back()->with('success','Sub Category Added Successfully !!');

    }

    /**
     * Display the specified resource.
     */

    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory,$id)
    {
        //

        //query builder
        $data = Subcategory::find($id);
        $category = DB::table('categories')->get();

        return view('admin.category.subcategory.edit',compact('data','category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //

        // $Subcategory = Subcategory::find($request->id);

        // $Subcategory->category_id = $request->id;
        // $Subcategory->subcategory_name = $request->subcategory_name;
        // $Subcategory->subcategory_slug = Str::slug($request->subcategory_name);
        // $Subcategory->save();

        //eloqument ORM
        $subcategory = Subcategory::where('id',$request->id)->first(); //get the record
        $subcategory->update([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => Str::slug($request->subcategory_name,'-'),
        ]);


        //Query Bulder

        // DB::table('subcategories')->where('id',$request->id)->update([
        //     'category_id' => $request->category_id,
        //     'subcategory_name' => $request->subcategory_name,
        //     'subcategory_slug' => Str::slug($request->subcategory_name,'-'),
        // ]);
        // dd($subcategory);


        // $data=array();
        // $data['category_id'] = $request->category_id;
        // $data['subcategory_name'] = $request->subcategory_name;
        // $data['subcategory_slug'] = Str::slug($request->subcategory_name, '-');
        // DB::table('subcategories')->where('id',$request->id)->update($data);

        // dd($data);

        return redirect()->back()->with('success','Sub Category Updated Successfully !!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        //Query Builder

    //    DB::table('subcategories')->where('id',$id)->delete();

    //Eloqument Query
       $subcate = Subcategory::find($subcategory->id);
    //    return $subcate;
       $subcate->delete();

    //    SubCategory::destroy($subcategory->id);

     $notyfication = array('message' => 'Sub Category Delete Successfully','alert-type' => 'error');
        return redirect()->back()->with($notyfication);

    }
}
