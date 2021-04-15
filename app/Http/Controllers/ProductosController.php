<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function get_productos()
    {
        return Productos::get()->toJson();
    }

}
