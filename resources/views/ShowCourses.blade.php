@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6  mx-auto">
            <table>
                <thead>
                    <tr>
            
                        <th>ID</th>
                        <th>Branch Name</th>
                        <th>Courses name</th>
            
                        <th>Action</th>
            
                    </tr>
                </thead>
                <tbody>
                    <!-- Add rows and data here -->
                    @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->branch_id }}</td>
                        <td>{{ $course->bfull }}</td>
                        <td>{{ $course->cname }}</td>
                       
                       <td>
                           <a href=""> <button type="button" class="btn btn-primary">Edit</button></a>
            
                            {{-- <a href="{{ route('DeleteCourse' ,['id' => $course->id]) }}"><button type="submit" class="btn btn-danger">Delete</button></a> --}}
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
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


