<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use Response;

class TareasController extends Controller
{
    //

    public function getTareas()
    {
        $tareas = Tareas::all();
        return response()->json($tareas);
    }
}
