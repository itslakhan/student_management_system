@extends('layouts.app')


@section('content')
 

<div class="contaner bg-dark">
    <div class="row">
        <div class="col-md-6 mx-auto mt-3 ">
            <table class="table table-bordered  text-white  ">
                <thead class="thead-light">
                    
                    <tr>
                        <h3>Student Details</h3>
                        <th>Id</th>
                        <th>Student name</th>
                        <th>Father name</th>
                        <th>Phone number</th>
                        <th>Class</th>
                        <th>Email</th>
                        <th>Action</th>
            
                    </tr>
                </thead>
                <tbody>
                    <!-- Add rows and data here -->
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->sname }}</td>
                        <td>{{ $student->fname }}</td>
                        <td>{{ $student->phnumber }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                           <a href="{{ route('EditStudent' ,['id' => $student->id]) }}"> <button type="button" class="btn btn-primary">Edit</button></a>
                           {{-- <form action="{{ route('DeleteStudent', ['id' => $student->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a><button type="submit" class="btn btn-danger">Delete</button></a> --}}
                           {{-- <a href="{{ route('DeleteStudent' ,['id' => $student->id]) }}"> <button type="button" class="btn btn-danger">Delete</button></a> --}}
            
                        {{-- </form> --}}
                        <a href=" {{ route('DeleteStudent', ['id' => $student->id]) }}"> <button type="button" class="btn btn-danger">Delete</button></a>
                        
            
                           
            
                        </td>
                      
            
            
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>

{{-- 
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
</style> --}}

@endsection
