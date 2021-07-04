<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\EditCompanyRequest;
use App\Models\Company;

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
    public function store(StoreCompanyRequest $request)
    {
        // Validate form fields
        $request->validated();
        
        $logoPath = "";
        if($request->hasFile('logo')){
           $logoPath = $request->file('logo')->store('public/logos');
        }
        
        // if data validation pass, then store in database
        Company::create([
            'logo' => $logoPath,
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect('/dashboard/companys');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        $query= trim($request->get('search'));    
        
        // Geting companys by name with case-insensitive argument of postgresql ILIKE
        $companys = Company::where('name','ILIKE','%'.$query.'%')
                            ->orderby('id','asc')
                            ->paginate(10);   

        return view('companys',['companys' => $companys]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = DB::table('companys')->where('id', $id)->first();
        return view('editCompanyForm', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCompanyRequest $request)
    {   
        // Validate form fields
        $request->validated();
        
        $company = Company::find($request->id);

        if($request->hasFile('logo')){
            $company->logo = $request->file('logo')->store('public/logos');
        }

        $company->update($request->only('name'));

        return redirect('/dashboard/companys');
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
        return redirect('/dashboard/companys');
    }
}
