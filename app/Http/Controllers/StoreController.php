<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('store');
    }

    public function agregarAlCarrito($idProducto)
    {
        if (!session()->has('carrito')) {
            session()->put('carrito', []);
        }

        $carrito = session()->get('carrito');
        if (array_key_exists($idProducto, $carrito)) {
            $carrito[$idProducto]++;
        } else {
            $carrito[$idProducto] = 1;
        }

        session()->put('carrito', $carrito);

        // Retorna una respuesta JSON indicando que el producto se agregó exitosamente al carrito
        return response()->json(['success' => true]);
    }

    public function obtenerCarrito()
    {
        $carrito = session()->get('carrito', []);
        return response()->json(['carrito' => $carrito]);
    }
}


