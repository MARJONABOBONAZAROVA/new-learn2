<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function blogs(){
        return view('pages.blogs');
    }

    public function  store(Request $request){
        DB::table('orders')->insert([

        'name' => $request->name,
        'phone' => $request->phone,
        'group' => $request->group

        ]);

        return back();


    }
}
