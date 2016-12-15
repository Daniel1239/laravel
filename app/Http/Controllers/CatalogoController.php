<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Productos;
use Illuminate\Http\Request;
use Validator;

class CatalogoController extends Controller
{
    /**
     * Muestra la vista para crear la categoria
     * @return Vista
     */
    public function index()
    {
        return view('catalogo.formCategory', []);
    }
    /**
     * Funcion que me premitira ingresar las categorias a la base de datos
     */
    public function createCategory(Request $request)
    {
        // Creo un objeto de validacion
        $validator = Validator::make($request->all(), [
            'name'        => 'required|max:24|min:2',
            'description' => 'required|min:2',
        ]);
        // Comprubo que la validacion pase
        if ($validator->fails()) {
            // si no pasa redirije al formulario
            return redirect('/home/createCategory')
            //->wihtInput()
            ->withErrors($validator);
        }

        $data              = new Categorias();
        $data->name        = $request->name;
        $data->description = $request->description;
        $data->user_id     = \Auth::user()->id;
        $data->save();

        return redirect('/home');
    }
    public function createProducts()
    {
    	$tasks = Products::orderBy('created_at', 'asc')->get();
        return view('catalogo.formProducts', ['tasks' => $tasks]);
    }

}
