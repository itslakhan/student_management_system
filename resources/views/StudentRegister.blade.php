@extends('layouts.app')

@section('content')


        <div class="container  bg-dark">
           <div class="row">          
            <div class="col-md-6 mx-auto mt-10  text-white">
              <h1 class="text-white">Student Registration</h1>
              <form action="{{ route('studentRegister') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Student Name</label>
                  <input type="text" class="form-control text-white" name="Sname"aria-describedby="emailHelp">
                </div>
                <div class="mb-3 text-white">
                    <label for="exampleInputEmail1" class="form-label text-white">Father Name</label>
                    <input type="text" class="form-control text-white" name="Fname"  aria-describedby="emailHelp">
                  </div> 
                 <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Phone Number</label>
                    <input type="text" class="form-control text-white" name="Phnumber"  aria-describedby="emailHelp">
                  </div>      
                   <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Class</label>
                    <input type="text" class="form-control text-white" name="Class"  aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                    <input type="email" class="form-control text-white" name="Email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Branch Name</label>
                     <select class="form-control text-white branches" name="branch_id"> 
                      @foreach( $branches as $branch)
                            <option class="text-white" value="{{ $branch->id }}">{{ $branch->bfull }}</option>
                      @endforeach
                     </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">courses</label>
                     <select class="form-control text-white courses" name="course_id" > 
                    
                            <option class="text-white" >select -----course </option>
                     
                     </select>
                  </div>
                   <div class="text-center">
                     <button type="submit" class="btn btn-success  text-black">Submit</button>   
                   </div>
              </form>
            </div>
           </div>
        </div>  
         

@endsection

@push('ajax-scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('change', '.branches', function(e){
      var branch_id = $(this).val();
      $.ajax({
        url: 'StudenCourse',
        dataType: 'json',
        data: {"id": branch_id, "_token": "{{ csrf_token() }}"},
        method: 'POST',
        success: function(data) {
          if (data && data.courses && Array.isArray(data.courses)) {
            var courses = '<option>---- select courses ----</option>';
            var arr = data.courses.length;
            var aa = data.courses;
            for (var i = 0; i < arr; i++) {
              courses += '<option value="' + aa[i].id + '">' + aa[i].Cname + '</option>';
            }
            $(".courses").html(courses);
          } else {
            console.error("Invalid data received:", data);
          }
        },
        error: function(error) {
          console.error("Ajax request failed:", error);
        }
      });
    });
  });
</script>

  
    
@endpush