@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="card">
        <h1>Edit Branch  </h1>
        <div class="card-body">
          <form action="{{ route('Branchupdate',['id'=>$Branches->id]) }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Branch short  Name</label>
              <input type="text" class="form-control"  value="{{ $Branches->bsort }}" name="Sname"aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Branch full  Name</label>
                <input type="text" class="form-control" value="{{ $Branches->bsort }}" name="Fname"  aria-describedby="emailHelp">
              </div> 

          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
@endsection