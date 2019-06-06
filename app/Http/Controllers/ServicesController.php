<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use App\Http\Requests\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $all_servive = Services::all();
        return view('all_service')->with('services', $all_servive);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Service $request)
    {
       // $validated = $request->validated();
        
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('admin/img/', $image_new_name);
    
       $service =  Services::create([
            'name' => $request->name,
            'image' => 'admin/img/' . $image_new_name,
            'order' => $request->order
        ]);
        
        $service->save();
        
        return view('all_service')->with('services', Services::all());
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services, $id)
    {
        return view('services.edit')->with('service' , Services::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Service $request, Services $services, $id)
    {
        
        
        $service = Services::find($id);
        
        if($request->hasFile('image')){
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('admin/img/', $image_new_name);
        $service->image = 'admin/img/'. $image_new_name;  
        }
        $service->name = $request->name;
        
        $service->order = $request->order;
        $service->save();
        
        return redirect()->route('Service.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $service = Services::find($id);
      $service->delete();
        
        return redirect()->back();
    }
}
