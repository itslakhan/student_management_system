@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <h1>Edit Student </h1>
        
          <form action="{{ route('UpdateStudent', ['id' => $students->id] ) }}" method="POST">
          
          

            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Student Name</label>
              <input type="text" class="form-control" value="{{ $students->sname }}" name="Sname"aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Father Name</label>
                <input type="text" class="form-control" value="{{ $students->fname }}" name="Fname"  aria-describedby="emailHelp">
              </div> 
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input type="text" class="form-control" value="{{ $students->phnumber }}" name="Phnumber"  aria-describedby="emailHelp">
              </div>      
               <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Class</label>
                <input type="text" class="form-control"  value="{{ $students->class }}" name="Class"  aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" value="{{ $students->email }}" name="Email" aria-describedby="emailHelp">
              </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
@endsection