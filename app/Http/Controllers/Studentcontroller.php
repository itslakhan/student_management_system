<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\Branch;
use App\Models\Course;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegistrationMail;

class Studentcontroller extends Controller
{
    public function student(){
        $courses =Course::all();
        $branches = Branch::all();
        return view('StudentRegister',compact('courses', 'branches'));
    }


    public function studentRegister(Request $request){

        $student= new Student;
        $student->sname = $request->Sname;
        $student->fname = $request->Fname;
        $student->phnumber = $request->Phnumber;
        $student->class = $request->Class;
        $student->email = $request->Email;
        $student->branch_id = $request->branch_id;
        $student->course_id = $request->course_id;
          if($student->save()){
            Mail::to($student->email)->send(new StudentRegistrationMail($student));
            dd('done');
            return redirect()->route('StudentDetails');
          }

    }

    public function StudentDetails(){
        $students= student::all();
        return  view('StudentDetail',compact('students'));
    }

    public function EditStudent($id){
        $students = Student::find($id);
    
        // Check if the student exists
        if (!$students) {
            return redirect()->route('StudentDetails')->with('error', 'Student not found');
        }
    
        return view('EditStudent', compact('students'));
    }
    
    public function UpdateStudent(Request $request , $id){
        $student = Student::find($id);
    
        // Check if the student exists
        if (!$student) {
            return redirect()->route('StudentDetails')->with('error', 'Student not found');
        }
    
        $student->sname = $request->Sname;
        $student->fname = $request->Fname;
        $student->phnumber = $request->Phnumber;
        $student->class = $request->Class;
        $student->email = $request->Email;  
       
    
        // Save the changes
        if ($student->save()) {
            return redirect()->route('StudentDetails')->with('success', 'Student updated successfully');
        } else {
            return redirect()->route('StudentDetails')->with('error', 'Failed to update student');
        }
    }

    public function DeleteStudent($id){
        $student = student::find($id);

        if(!$student){
            return redirect()->route('StudentDetails')->with('error', 'no student found');
        }else{
            $student->delete();
            return redirect()->route('StudentDetails')->with('succes', '  studentdeleted');

        }

    }

    public function StudenCourse (Request $req){
        $id=$req->id;
        $data['courses']= Course::where('branch_id',$id)->get();
        echo json_encode($data);
        
    }

    public function StudentMail(){
        return view("Emails.StudentRegistrationMail");
    }
}    
