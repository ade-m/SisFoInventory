<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $items = Item::where('code', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('item_type', 'LIKE', "%$keyword%")
                ->orWhere('item_category', 'LIKE', "%$keyword%")
                ->orWhere('uom', 'LIKE', "%$keyword%")
                ->orWhere('assigned_user', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $items = Item::latest()->paginate($perPage);
        }

        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
            //VALIDASI
            $validator = Validator::make($request->all(), [
                'code' => 'required|min:5|max:20',
                'description' => 'required|max:255',
                'item_type' => 'required|max:20',
                'item_category' => 'required|max:20',
                'uom' => 'required|max:255',
                'assigned_user' => 'required|max:255',
                ]);
            if ($validator->fails()) { //jika ada eror validasi
                return redirect('admin/items')->withErrors($validator);
            } else {
                $requestData = $request->all();
                
                Item::create($requestData);

                return redirect('admin/items')->with('flash_message', 'Item added!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $item = Item::findOrFail($id);

        return view('admin.items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('admin.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $item = Item::findOrFail($id);
        $item->update($requestData);

        return redirect('admin/items')->with('flash_message', 'Item updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Item::destroy($id);

        return redirect('admin/items')->with('flash_message', 'Item deleted!');
    }
}
