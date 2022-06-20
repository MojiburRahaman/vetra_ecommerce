<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Intervention\Image\Facades\Image;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoreis = Category::select('id', 'title', 'thumbnail', )->latest('id')->simplepaginate(10);
        return view('backend.category.index',[
            'categoreis' => $categoreis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'unique:categories,title'],
            'thumbnail' => ['required', 'mimes:png,jpg']
        ]);
        // return $request;
        $catagory = new Category;
        $catagory->title = $request->title;
        $catagory->slug = Str::slug($request->title);

        if ($request->hasFile('thumbnail')) {
            $product_thumbnail = $request->file('thumbnail');
            $extension = Str::slug($request->title) . '-' . Str::random(1) . '.' . $product_thumbnail->getClientOriginalExtension();
            Image::make($product_thumbnail)->save(public_path('category_images/' . $extension), 90);
        }
        $catagory->thumbnail = $extension;
        $catagory->save();

        return redirect()->route('category.index')->with('success','Category Added');
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
        $catagory = Category::findorfail($id);
        return view('backend.category.edit', [
            "catagory" => $catagory,
        ]);
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
        $request->validate([
            'title' => ['required', 'string', 'unique:categories,title,' . $id],
        ]);
        $catagory =  Category::findorfail($id);
        $catagory->title = $request->title;
        $catagory->slug = Str::slug($request->title);

        if ($request->hasFile('thumbnail')) {
            if ($catagory->thumbnail != '') {
                $old_thumbnail = public_path('category_images/' . $catagory->catagory_image);
                if (file_exists($old_thumbnail)) {
                    @unlink($old_thumbnail);
                }
            }
            $product_thumbnail = $request->file('thumbnail');
            $extension = Str::slug($request->title) . '-' . Str::random(1) . '.' . $product_thumbnail->getClientOriginalExtension();
            Image::make($product_thumbnail)->save(public_path('category_images/' . $extension), 90);
            $catagory->thumbnail = $extension;
        }

        $catagory->save();
        return redirect()->route('category.index')->with('warning', 'Category Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catagory =  Category::findorfail($id);
        if ($catagory->thumbnail != '') {
            $old_thumbnail = public_path('category_images/' . $catagory->thumbnail);
            if (file_exists($old_thumbnail)) {
                @unlink($old_thumbnail);
            }
        }
        $catagory->delete();
        return redirect()->route('category.index')->with('danger','Category Deleted');
    }
}
