<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Serie;
use Carbon\Carbon;

class SerieController extends Controller
{
    public function show() : array
    {
        return [ 'id' => 1, 'nome_serie' => 'Mad Man', 'created_at' => Carbon::now()->format('d-m-Y'), 'updated_at' => null ];
    }
}
