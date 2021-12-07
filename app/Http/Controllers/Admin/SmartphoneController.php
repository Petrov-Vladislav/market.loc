<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smartphones = Smartphone::orderBy('created_at', 'desc')->get();
        
        return view('admin.smartphone.index', [
            'smartphones' => $smartphones
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.smartphone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $smartphone = new Smartphone();
        $smartphone->name = $request->name;
        $smartphone->img = $request->img;
        $smartphone->price = $request->price.' р.';
        $smartphone->text = $request->text;
        $smartphone->save();

        return redirect()->back()->withSuccess('Товар был успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function show(Smartphone $smartphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Smartphone $smartphone)
    {
        return view('admin.smartphone.edit', [
            'smartphone' => $smartphone
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smartphone $smartphone)
    {
        $smartphone->name = $request->name;
        $smartphone->img = $request->img;
        $smartphone->price = $request->price;
        $smartphone->text = $request->text;
        $smartphone->save();

        return redirect()->back()->withSuccess('Товар был успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smartphone $smartphone)
    {
        $smartphone->delete();
        return redirect()->back()->withSuccess('Товар был успешно удален!');

    }
}
