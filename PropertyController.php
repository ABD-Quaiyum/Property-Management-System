<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    c function index()
    {
        $Property = Property::orderby('price', 'DESC')->get();
        return view('property.index', compact('Property'));
    }

    public function create()
    {
        return view('property.create');
    }
    public function store(Request $request)
    {
        //Validate
        $this->validate($request, [
            'location' => 'required|min:3|max:40'
        ]);
        $this->validate($request, [
            'seller_name' => 'required|min:3|max:40'
        ]);
        $this->validate($request, [    
        'seller_email' => 'required|min:6|max:50|unique:properties'
        ]);
        $this->validate($request, [
        'price' => 'required|min:3|max:20'
        ]);

        $Property = new Property();
        $Property->location = $request->location;
        $Property->seller_name = $request->seller_name;
        $Property->seller_email = $request->seller_email;
        $Property->price = $request->price;
        $Property->save(); 

    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $Property = Property::findOrFail($id);
        return view('property.edit', compact('Property'));
    }

    public function update(Request $request, $id)
    {
        
    }
    
    public function destroy($id)
    {
                $Property = Property::findOrFail($id);
                $Property->delete(); 
        
                return redirect()->route('property.index');
    }
}
