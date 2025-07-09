<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        $users = User::all();
        return view('index', compact('orders', 'users')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'fecha_pedido' => 'required|date', 
            'estado' => 'required|string|max:255', 
        ]);
        
        try {
            Order::create($validatedData);
            return redirect()->route('orders.index')->with('success', 'Orden creado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al crear la orden: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'fecha_pedido' => 'required|date',
            'estado' => 'required|string|in:pendiente,en_proceso,completado',
        ]);

        try {
            $order->update($validatedData);
            return redirect()->route('orders.index')->with('success', 'Orden actualizado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar el orden: ' . $e->getMessage());
        }    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        try {
            $order->delete();
            return redirect()->route('orders.index')->with('success', 'Orden eliminado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al eliminar el orden: ' . $e->getMessage());
        }    
    }
}
