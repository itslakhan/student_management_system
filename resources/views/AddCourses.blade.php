@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="card">
        <h1>Add Courses </h1>
        <div class="card-body">
          <form action="{{ route('Storecourse') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Branch Name</label>
               <select class="form-control" name="Branch_id"> 
                @foreach( $branches as $branch)
                      <option value="{{ $branch->id }}">{{ $branch->bfull }}</option>
                @endforeach
               </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Courses Name</label>
                <input type="text" class="form-control" name="Cname"  aria-describedby="emailHelp">
              </div> 

          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
@endsection