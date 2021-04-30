<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    public function index()
    {

        // select * from companies
        //$companies = Companies::all();
        $companies = Companies::orderBy('id','desc')->paginate(8);
        return view('companies.index', compact('companies'));
    }

    //formulario vies html
    public function create()
    {
        return view('companies.create');
    }

    //true , false
    public function store(Request $request)
    {
        // INSERT INTO usuarios() VALUES()
        $companies = Companies::create($request->all());

        return redirect('companies');
    }
        // view/htlm
        public function show($id){
        //
            $companies = Companies::find($id);

            return view('companies.show',compact('companies'));

        }
}
