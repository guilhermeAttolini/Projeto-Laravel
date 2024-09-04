<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:level')->only('index');
    }

    public function my_clients(User $id)
    {
        $user = User::where('id', $id->id)->first();
        $clients = $user->customers()->get();

        return view('clientes.my_clients', [
            'clients' => $clients
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clientes.index', [
            'clientes' => Cliente::orderBy('name')->paginate('5')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->user_id = $request->user_id;
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->phone = $request->phone;
        $cliente->enterprise = $request->enterprise;
        $cliente->comercial_phone = $request->comercial_phone;

        $cliente->save();

        return redirect()->route('cliente.create')->with('msg', 'Client Registered');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        Cliente::findOrFail($cliente->id)->update($request->all());

        return redirect()->route('cliente.show', $cliente->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        Cliente::findOrFail($cliente->id)->delete();

        return redirect()->route('my.clients', Auth::user()->id);
    }

    public function confirm_delete(Cliente $id)
    {
        return view('clientes.confirm_delete', [
            'id' => $id
        ]);
    }
}
