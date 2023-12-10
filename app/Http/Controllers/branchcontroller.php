<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class branchcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return   view('AddBranch');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $branch = new Branch;
        $branch->bsort = $request->Sname;
        $branch->bfull = $request->Fname;
    
        if ($branch->save()) {
            return redirect()->route('BranchesDetails');
        } else {
            return redirect()->route('StoreBranch');
        }
    }
    
 
    /**
     * Display the specified resource.
     */
    public function show()
    {     
        $Branches= Branch::all();
        return view('BranchesDetails',compact( 'Branches'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
        {         
        $Branches= Branch::find($id);

           return view('BranchEdit',compact('Branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $branch =  Branch::find($id);
        $branch->bsort = $request->Sname;
        $branch->bfull = $request->Fname;
    
        if ($branch->save()) {
            return redirect()->route('BranchesDetails');
        } else {
            return redirect()->route('StoreBranch');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete( $id)
    {
        $branch=branch::find($id);

        $branch->delete();
        return redirect()->route('BranchesDetails');
        //
    }
}
