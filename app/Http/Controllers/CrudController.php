<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Crud;
use App\Services\CrudService;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function read()
    {
        $data = M_Crud::all();
        return view('read')->with([
            'data' => $data
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,CrudService $crudservice)
    {
        $crud = M_Crud::where('name',$request->name)->first();
       $create = $crudservice->crud($request,$crud, 'create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Crud::findOrFail($id);
        return view('edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //s
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,CrudService $crudservice)
    {
        $crud = $id;
        $update = $crudservice->crud($request,$crud,'update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,CrudService $crudservice)
    {
        $destroy = $crudservice->destroy($id, 'delete');
    }
    public function view($slug)
    {
        $data = M_Crud::where('slug',$slug)->first();
        return view('view')->with([
            'data' => $data
        ]);
    }
}
