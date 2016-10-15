<?php

namespace Charlie\Http\Controllers;

use Illuminate\Http\Request;

use Charlie\Http\Requests;
use Charlie\Customer;
use Charlie\Http\Requests\CustomerFormRequest;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index')->with(compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        $customersForSelect = Customer::groupBy('state')
            ->get(['state'])
            ->pluck('state', 'state');

        return view('customers.edit')->with(compact('customer', 'customersForSelect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerFormRequest $request, $id)
    {
        $input = $request->only('name', 'special_customer', 'city', 'state');
        $input['special_customer'] = isset($input['special_customer']);
        $customer = Customer::find($id);
        $customer->fill($input);
        $customer->save();
        return redirect()
            ->route('clientes.edit', $id)
            ->with(['success' => 'Cliente salvo com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
