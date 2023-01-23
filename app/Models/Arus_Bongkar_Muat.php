<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arus_Bongkar_Muat extends Model
{
    use HasFactory;

	protected $table = 'tbl_arus';
    protected $fillable = 
    		[
            'Lokasi',
            'Tahun',
            'Bulan',
            'shipcall',
            'gt',
            'if20',
            'if40',
            'if45',
            'ie20',
            'ie40',
            'ie45',
            'ef20',
            'ef40',
            'ef45',
            'ee20',
            'ee40',
            'ee45',
        	];

}
