<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\InfoStoreRequest;
use App\Models\Info;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Info::count();

        $infos = Info::orderBy('id','DESC')->paginate(6);
           /* $infos = Info::all(); */
        return view('admin.infos.index', compact('infos'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfoStoreRequest $request)
    {


        $info = new Info;
        $info->title = $request->title;
        $info->description = $request->description;
        $info->save();
        /* $requestData = $request->all;
        if($request->hasFile('icon'));
        {
            $requestData['icon'] = $this->upload_file(); */
            /* $file = $request()->file('icon');
            $fileName = time().'_' .$file->getClientOriginalName();
            $file->move('files/',$fileName);
            $requestData['icon'] = $fileName;
 */

        /* }
        Info::create($requestData);*/
        return redirect()->route('admin.infos.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = Info::find($id);
        return view('admin.infos.show',compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Info::find($id);
        return view('admin.infos.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info/* $id */)
    {
        /* Info::find($id)->update([
            'title' => $request->title,
            'description' =>$request->description,

        ]); */
        request()->validate([
            'title'=>'required',
            'description'=> 'required',
            'icon'=>'mimes:png,jpg|max:2048'
        ]);
        $requestData = $request->all();

        if($request->hasFile('icon'));
        {

        /* if(isset($info->icon) && file_exists(public_path(' /files/' .$info->icon))){
            unlink(public_path(' /files/' .$info->icon));

        } */

        }
        $info->update($requestData);
        return redirect()->route('admin.infos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Info::find($id)->delete();
    }
    public function file_upload(){


        $file = request()->file('icon');
        $fileName = time().'_' .$file->getClientOriginalName();
        $file->move('files/',$fileName);
        return  $fileName;

    }
}
