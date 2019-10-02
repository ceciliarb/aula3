<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function __construct()
    {
        // $this->middleware('soeuposso');
    }

    public function index()
    {
        return view('teste');
    }

    public function posta(Request $request)
    {
        return "POSTANDO $request->nome";
    }

    public function put(Request $request)
    {
        return "FAZENDO PUT $request->nome";
    }
    public function patch(Request $request)
    {
        return "FAZENDO PATCH $request->nome";
    }
    public function delete(Request $request)
    {
        return "FAZENDO DELETE $request->nome";
    }
}
