@extends('layouts.app')

@section('content')

  


<div class="container">
  <div class="row">
    <h1>Branch Registration </h1>
    <div class="col-md-6 mx-auto">
      <form action="{{ route('StoreBranch') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Branch short  Name</label>
          <input type="text" class="form-control" name="Sname"aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Branch full  Name</label>
            <input type="text" class="form-control" name="Fname"  aria-describedby="emailHelp">
          </div> 

      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </div>
</div>

@endsection