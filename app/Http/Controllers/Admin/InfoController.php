<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Info;
use App\Events\AuditEvent;
use App\Http\Requests\InfoStoreRequest;
use App\Http\Requests\InfoUpdateRequest;



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


        /* $info = new Info;
        $info->title = $request->title;
        $info->description = $request->description;
        $info->save(); */
        $info = new Info;
        $info->title = $request->title;
        $info->description = $request->description;
        if ($request->hasFile('icon')); {
            $file = $request->file('icon');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('files/', $fileName);
            $info->icon = $fileName;
        }
        $info->save();
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
        // dd($info);
        return view('admin.infos.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {

        $requestData = $request->all();

        if ($request->hasFile('icon'));
        {
            $file = request()->file('icon');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('files/', $fileName);
            


            $requestData['icon'] = $fileName;
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
    public function destroy(Info $info)
    {
        $user = auth()->user()->name;
        event(new AuditEvent($user, 'infos', 'delete', json_encode($info)));

        if(isset($info->icon) && file_exists(public_path('/files/'.$info->icon))){
            unlink(public_path('/files/'.$info->icon));
        }

        $info->delete();

        return redirect()->route('admin.infos.index');
    }

    public function icon_upload(){
        $file = request()->file('icon');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('files/', $fileName);
        return $fileName;
    }
    }
