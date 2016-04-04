<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;
use DB;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Input;
use App\SaleDocument;
// use Illuminate\Database\Schema\Blueprint;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = array();
        $query = DB::select('select distinct category from items');
        foreach ($query as $category) {
            if ($category->category != "") {
                $categories[$category->category] = ucfirst($category->category);
            }
        }

        $brands = array();
        $query = DB::select('select distinct brand from items');
        foreach ($query as $brand) {
            if ($brand->brand != "") {
                $brands[$brand->brand] = ucfirst($brand->brand);
            }
        }
        
        

        return view('item.create', compact('categories', 'brands'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modName = '';
        // dd($request);
        if ($request->image) {

            $image = $request->image;
            // dd($image);
            $origExtension = strtolower($image->getClientOriginalExtension());
            if (in_array($origExtension, ['jpg', 'jpeg', 'png', 'bmp', 'gif', 'tiff'], true)) {
                $size = $image->getClientSize();
                if ($size <= 500000) {
                    if ($image->isValid()) {
                        
                        $modName = 'image_' . str_random(8) . $image->getClientOriginalName();
                        $path = $_SERVER['DOCUMENT_ROOT'] . '/client_item_image_files/';
                        $image->move($path, $modName);
                    } else {
                        return $image->getError();
                    }
                
                } else {
                    return Redirect::back()->withErrors(['Your file is too large.']);  // These errors can also be passed back in a better way (in a later version) if I use the Validator::make method and then something like $errors->add('logo', 'Your file is too large.')
                }
            } else {
                return Redirect::back()->withErrors(['Your file is not the correct type.']);
                // return 'Your file is not the correct type.';
            }
        }

        if ($request->new_category != '') {
            $category = $request->new_category;
        } else {
            $category = $request->category;
        }

        if ($request->new_brand != '') {
            $brand = $request->new_brand;
        } else {
            $brand = $request->brand;
        }

        Item::create([
            'category' => ucfirst($category),
            'brand' => ucfirst($brand),
            'name' => ucfirst($request->name),
            'number' => $request->number,
            'base_price' => str_replace('$', '', $request->base_price),
            'image' => $modName,
            ]);

        return redirect('/item');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::findOrFail($id);

        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);

        $categories = array();
        $query = DB::select('select distinct category from items');
        foreach ($query as $category) {
            if ($category->category != "") {
                $categories[$category->category] = ucfirst($category->category);
            }
        }

        $brands = array();
        $query = DB::select('select distinct brand from items');
        foreach ($query as $brand) {
            if ($brand->brand != "") {
                $brands[$brand->brand] = ucfirst($brand->brand);
            }
        }

        return view('item.edit', compact('item', 'categories', 'brands'));
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
        $item = Item::findOrFail($id);

        $modName = $item->image;
        // dd($request);
        if ($request->image) {

            $image = $request->image;
            // dd($image);
            $origExtension = strtolower($image->getClientOriginalExtension());
            if (in_array($origExtension, ['jpg', 'jpeg', 'png', 'bmp', 'gif', 'tiff'], true)) {
                $size = $image->getClientSize();
                if ($size <= 500000) {
                    if ($image->isValid()) {
                        
                        $modName = 'image_' . str_random(8) . $image->getClientOriginalName();
                        $path = $_SERVER['DOCUMENT_ROOT'] . '/client_item_image_files/';
                        $image->move($path, $modName);
                    } else {
                        return $image->getError();
                    }
                
                } else {
                    return Redirect::back()->withErrors(['Your file is too large.']);  // These errors can also be passed back in a better way (in a later version) if I use the Validator::make method and then something like $errors->add('logo', 'Your file is too large.')
                }
            } else {
                return Redirect::back()->withErrors(['Your file is not the correct type.']);
                // return 'Your file is not the correct type.';
            }
        }

        if ($request->new_category != '') {
            $category = $request->new_category;
        } else {
            $category = $request->category;
        }

        if ($request->new_brand != '') {
            $brand = $request->new_brand;
        } else {
            $brand = $request->brand;
        }

        $item->update([
            'category' => ucfirst($category),
            'brand' => ucfirst($brand),
            'name' => ucfirst($request->name),
            'number' => $request->number,
            'base_price' => str_replace('$', '', $request->base_price),
            'image' => $modName,
            ]);

        return redirect('/item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search_for_item($sale_document_id)
    {
        


        
        $queries = explode(' ', Input::get('q'));
        // dd($query);
        // $columns = \Schema::getColumnListing('items');

        // $search = 'function test() { $result = \App\Item::';  
        // foreach ($columns as $column) {
        //     $search .= "orWhere('$column', 'LIKE', \"%$query%\")->";
        // }
        // $search .= 'get(); return $result;} return test();';
        
        // $items = eval($search);

        $columns = \Schema::getColumnListing('items');
        $queryObj = array( '\App\Item', 'orWhere' );
        foreach($queries as $query) {
            foreach( $columns as $column ){
                $tmpObj = call_user_func( $queryObj, $column, 'LIKE', "%{$query}%" );
                $queryObj = array( $tmpObj, 'orWhere' );
            }
            $lastQueryObj = $queryObj[0];
            if( is_object( $lastQueryObj ) ){
                $items = $lastQueryObj->get();
            }
            else{
                $items = Item::all();
                
            }
        }


        return view('item.search', compact('sale_document_id', 'items'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_item_to_sale_document($sale_document_id, $item_id)
    {
        $sale_document = SaleDocument::findOrFail($sale_document_id);
        $sale_document->items()->attach($item_id);
        
        return redirect('quote/'.$sale_document_id);
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
