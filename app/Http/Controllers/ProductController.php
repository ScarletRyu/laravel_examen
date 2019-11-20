<?php

namespace App\Http\Controllers;

use App\productos;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = productos::all();
        return view('productos/index', ['productos'=>$productos]);
    }