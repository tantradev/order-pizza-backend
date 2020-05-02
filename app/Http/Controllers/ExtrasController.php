<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Extras;

class ExtrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return IlluminateHttpResponse
     */
    public function all()
    {
        $extras = Extras::all(['name','price']);
        return response()->json($extras);
    }
}
