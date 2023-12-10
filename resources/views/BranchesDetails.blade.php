@extends('layouts.app')

@section('content')
<br />
<br />
<br />
<div class="container-fluid">
    <div class="card">
        <h3>Branch Details</h3>
        <div class="card-body">
<table>
    <thead>
        <tr> 
             {{-- <h3>Branch Details</h3> --}}
            <th>Id</th>
            <th>Short name</th>
            <th>Full name</th>

            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <!-- Add rows and data here -->
        @foreach($Branches as $Branches)
        <tr>
            <td>{{ $Branches->id }}</td>
            <td>{{ $Branches->bsort }}</td>
            <td>{{ $Branches->bfull }}</td>
           <td>
               <a href="{{ route('BranchEdit' ,['id' => $Branches->id]) }}"> <button type="button" class="btn btn-primary">Edit</button></a>

                <a href="{{ route('DeleteBranch' ,['id' => $Branches->id]) }}"><button type="submit" class="btn btn-danger">Delete</button></a>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>

@endsection
