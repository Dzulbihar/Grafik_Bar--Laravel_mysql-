<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Arus_Bongkar_Muat;

class DataController extends Controller
{
	
    public function index()
    {
    	$Arus_Bongkar_Muat = \App\Models\Arus_Bongkar_Muat::all();
    	
    	return view('data.index',
            [
            'Arus_Bongkar_Muat' => $Arus_Bongkar_Muat,
        ]);
    }


    public function create(Request $request)
    {
        $Arus_Bongkar_Muat = \App\Models\Arus_Bongkar_Muat::create($request->all());

        return redirect ('/data')->with('sukses', 'Data Arus Bongkar Muat berhasil ditambah');
    }


    public function edit($id)
    {
        $Arus_Bongkar_Muat = \App\Models\Arus_Bongkar_Muat::find($id);

        return view('data.edit', [
            'Arus_Bongkar_Muat' => $Arus_Bongkar_Muat
        ]);
    }

    public function update(Request $request ,$id)
    {       
        $Arus_Bongkar_Muat = \App\Models\Arus_Bongkar_Muat::find($id);
        $Arus_Bongkar_Muat->update($request->all());

        return redirect ('/data')->with('sukses', 'Data Arus Bongkar Muat berhasil diupdate');
    }

    public function delete($id)
    {
        $Arus_Bongkar_Muat = \App\Models\Arus_Bongkar_Muat::find($id);
        $Arus_Bongkar_Muat->delete($Arus_Bongkar_Muat);

        return redirect('/data')->with('sukses', 'Data Arus Bongkar Muat berhasil dihapus');
    }

}
