<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrafiklineController extends Controller
{

    public function grafik_line()
    {
    	$Arus_Bongkar_Muat = \App\Models\Arus_Bongkar_Muat::all();
    	
    	return view('grafik_line.index',
            [
            'Arus_Bongkar_Muat' => $Arus_Bongkar_Muat,
        ]);
    }

}
