@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add2">
    <table class="content-table">
        <thead>
         <tr>
                <th>Course Name</th>
            
                  <th>Topic</th>
                  
                    <th>Institution's Name</th>
                     
                     <th>View Course</th>
                     <th>career</th>
                  <th>Status</th>
                  <th>Action</th>
                 <th>Action</th>
            </tr>
        </thead>
        <tbody>
          
 @foreach ($newcourses as $newcourse)
 <tr>
    <td>{{ $newcourse->coursename }}</td>
    <td>{{ $newcourse->topic }}</td>
    <td>{{ $newcourse->institutionname }}</td>
    <td>{{ $newcourse->viewcourse }}</td>
    <td>{{ $newcourse->career }}</td>
    <td>{{ $newcourse->status}}</td>
    
    <td> 
      <a href="{{ "/delete_course" }}/{{ $newcourse->newcourse_id }}"><button class="btn btn-danger">Delete</button></a></td>
      <td> <a href="{{ "/approve_course" }}/{{ $newcourse->newcourse_id }}"><button class="btn btn-success">Approve</button></a></td>
   </tr>
 @endforeach
        </tbody>
    </table>
</div>
@endsection