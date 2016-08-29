<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\FormularioRequest;
use App\Http\Controllers\Controller;
use App\Pruebatabla;


class PruebatablaController extends Controller
{
    public function index()
    {
      	return view('welcome');
    }

    public function store(FormularioRequest $request)
    {
      	if (Pruebatabla::create($request->all())) {
      		return redirect('thanks');
      	}
    }

    public function thanks()
    {
      return view('thanks');
    }
}
