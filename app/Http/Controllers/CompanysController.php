<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CompanysController extends Controller
{
    // Only authenticated users can enter
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companys = DB::table('companys')->paginate(10);
        return view('companys', ['companys' => $companys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCompanyForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Validate form data
        $request->validate([
            'logo' => 'file|mimes:jpg,jpeg,png',
            'name' => 'required',
            'email' => 'email|required|unique:companys'
        ]);

        if($request->hasFile('logo')){
            $request->file('logo')->store('public/logos');
        }
        
        // if data validation pass, then insert in database
        DB::table('companys')->insert([
            'logo' => $request->file('logo')->store('public/logos'),
            'name' => $request->name,
            'email' => $request->email
        ]);
    
        return redirect('/dashboard');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('companys')->where('id', $id)->delete();
        return redirect('/dashboard');
    }
}
