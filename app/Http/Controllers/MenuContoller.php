<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Menu;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return IlluminateHttpResponse
     */
    public function all()
    {
        $menu = Menu::all(['id','name','description','price','dollarPrice']);
        return response()->json($menu);
    }
}