<?php

namespace App\Http\Controllers;

use App\Models\Ajuste;
use Illuminate\Http\Request;

class AjusteController extends Controller
{
    public function index()
    {
        $jsonData = file_get_contents("https://api.hilariweb.com/divisas");

        $divisas = json_decode($jsonData, true);

        return view("admin.ajustes.index" , compact("divisas"));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show(Ajuste $ajuste)
    {
        
    }

    public function edit(Ajuste $ajuste)
    {
        
    }

    public function update(Request $request, Ajuste $ajuste)
    {
        
    }

    public function destroy(Ajuste $ajuste)
    {
        
    }
}
