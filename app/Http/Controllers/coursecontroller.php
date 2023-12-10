<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Models\Course;
class coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches= Branch::all();
    return view('AddCourses',compact('branches'));
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course= new Course;
        $course->Branch_id= $request->Branch_id;
        $course->Cname= $request->Cname;
        if($course->save()){
            return redirect()->route('Addcourses');
        }
        
    
    }

    /**
     * Display the specified resource.         
     */
    public function show()
    {
        $courses= course::select('branches.bfull', 'courses.cname' ,'courses.branch_id')
        ->join('branches', 'courses.branch_id','branches.id')->get();
        return view('ShowCourses',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function check(){
        return view('Course');
    }
}
