@extends('layouts.app')

@section('content')
   

<div class="container">

  
  <div class="row">

    <div class="col-md-6 mx-auto mt-6">
      <h1>Edit Branch  </h1>
      <form action="{{ route('Branchupdate',['id'=>$Branches->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Branches short  Name</label>
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
</div>


@endsection