<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Arus_Bongkar_Muat;

class GrafikbarController extends Controller
{

    public function grafik_bar()
    {
    	$Arus_Bongkar_Muat = \App\Models\Arus_Bongkar_Muat::all();
    	
    	return view('grafik_bar.index',
            [
            'Arus_Bongkar_Muat' => $Arus_Bongkar_Muat,
        ]);
    }

}
