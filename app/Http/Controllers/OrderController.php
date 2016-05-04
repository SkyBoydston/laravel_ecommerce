<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SaleDocument;
use Illuminate\Support\Facades\Input;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {

            $orders = SaleDocument::IsOrder()->get();

        } elseif (Auth::user()->hasRole('company')) {

            $company_id = Auth::user()->company->id;  

            $orders = SaleDocument::BelongsToCompany($company_id)->IsOrder()->get();

        } elseif (Auth::user()->hasRole('agent')) {

            $orders = Auth::user()->sale_documents()->IsOrder()->get();
        
        }

        return view('order.index', compact('orders'));
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
        $order = SaleDocument::findOrFail($id);

        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = SaleDocument::findOrFail($id);
        if (Input::get('mark') == 'revert') {
            $order->converted_to_order = '0000-00-00 00:00:00';
            $order->update();
            return redirect('/order');
        }  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = SaleDocument::findOrFail($id);

        if ($request->estimated_shipping_date) {
            $order->estimated_shipping_date = $request->estimated_shipping_date;
            $order->update();
            return redirect('/order' . '/' . $order->id);
        } elseif ($request->estimated_arrival) {
            $order->estimated_arrival = $request->estimated_arrival;
            $order->update();
            return redirect('/order' . '/' . $order->id);
        }
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

    /**
     * Show the area for finalizing an order, be that exporting it, printing, or whatever else.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function finalize($id)
    {
        return view('order.finalize', compact('id'));
    }
}
