<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Console\Input\InputInterface;

class GunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Gun::all();
        $list_category = Category::all();
        return view('admin.gun.page.list')
            ->with('list_obj', $list_obj)
            ->with('list_category', $list_category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gun.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Gun();
        $obj->name = Input::get('name');
        $obj->image = Input::get('image');
        $obj->videoId = Input::get('videoId');
        $obj->categoryId = Input::get('categoryId');
        $obj->ammo = Input::get('ammo');
        $obj->magazine_capability = Input::get('magazine_capability');
        $obj->range = Input::get('range');
        $obj->bullet_speed = Input::get('bullet_speed');
        $obj->fire_rate = Input::get('fire_rate');
        $obj->description = Input::get('description');
        $obj->detail = Input::get('detail');
        $obj->status = Input::get('status');
        $obj->price = Input::get('price');
        if($obj->save()){
            return redirect('admin/gunshop');
        }
        return 'Fail';
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
        $obj = Gun::find($id);
        if($obj == null){
            return '404';
        }
        return view('admin.gun.page.edit')->with('obj', $obj);
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
        $obj = Gun::find($id);
        if($obj == null){
            return '404';
        }
        $obj->name = Input::get('name');
        $obj->image = Input::get('image');
        $obj->videoId = Input::get('videoId');
        $obj->categoryId = Input::get('categoryId');
        $obj->ammo = Input::get('ammo');
        $obj->magazine_capability = Input::get('magazine_capability');
        $obj->range = Input::get('range');
        $obj->bullet_speed = Input::get('bullet_speed');
        $obj->fire_rate = Input::get('fire_rate');
        $obj->description = Input::get('description');
        $obj->detail = Input::get('detail');
        $obj->status = Input::get('status');
        $obj->price = Input::get('price');
        if($obj->save()){
            return redirect('/admin/gun');
        }
        return 'Fail';
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
