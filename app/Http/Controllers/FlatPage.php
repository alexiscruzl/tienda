<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlatPage extends Controller
{
    public function index()
{
return view("welcome ");
}

public function nosotros()
{
echo "estas en nosotros";
}

public function productos()
{
echo "estas en productos";
}

public  function contacto()
{
echo "estas en contactos";
}

}
