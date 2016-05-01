<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItemSaleDocumentController extends Controller
{
    public function increaseQuantity(Request $request) {
    	$item_id = $request->item_id;
    	$sale_document_id = $request->sale_document_id;
    	$quantity = array('quantity' => $request->current_quantity + 1);
    	\App\SaleDocument::find($sale_document_id)->items()->updateExistingPivot($item_id, $quantity);

    	return back();
    }

    public function decreaseQuantity(Request $request) {
    	$item_id = $request->item_id;
    	$sale_document_id = $request->sale_document_id;
    	$quantity = array('quantity' => $request->current_quantity - 1);
    	if ($request->current_quantity - 1 == 0) {
    		$sale_document = \App\SaleDocument::findOrFail($sale_document_id);
	        $sale_document->items()->detach($item_id);
    	} else {
	    	\App\SaleDocument::find($sale_document_id)->items()->updateExistingPivot($item_id, $quantity);
    	}
    	return back();
    }
}
