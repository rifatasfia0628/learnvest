@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add2">
 
  <div class="col-md-auto">
        
         <table class="content-table">
             <thead>
                 <tr>
                     <th>First Name</th>
                      <th>Last Name</th>
                      <th>Supervised Semester</th>
                      <th>Supervised Section</th>
                      <th>Career Supervision</th>
                      <th>Status</th>
                      <th>Action</th>
                      <th>Action</th>
                     
                        
                 </tr>
             </thead>
             <tbody>
              @foreach (  $newteacher as $teacher)
                   <tr>
                            <td>{{ $teacher->firstname}}</td>
                            <td>{{ $teacher->lastname }}</td>
                            <td>{{ $teacher->semester }}</td>
                            <td>{{ $teacher->section }}</td>
                            <td>{{ $teacher->career }}</td>
                            <td>{{ $teacher->status}}</td>
                             <td><a href="{{ "/delete" }}/{{ $teacher->teachers_id }}"><button class="btn btn-danger">Delete</button></a></td>
                             <td><a href="{{ "/delete" }}/{{ $teacher->teachers_id }}"><button class="btn btn-success">Approve</button></a></td>
                 </tr>
               @endforeach
             </tbody>
         </table>
     </div>
</div>
@endsection