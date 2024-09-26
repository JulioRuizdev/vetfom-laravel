<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return new CategoriaResource(Categoria::all());
    }
}
