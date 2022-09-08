@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add2 ">
  
        <table class="content-table">
            <thead>
             <tr>
                    <th>First Name</th>
                    
                      <th>Email</th>
                     
                       <th>Roll</th>
                      
                      
                         
                         <th>Semester</th>
                         <th>Career</th>
                         <th>Status</th>
                         <th>Action</th>
                         <th> Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach (  $newuser as   $newusers)
                  <tr>
                    <td>{{ $newusers->firstname }}</td>
                 
                        <td>{{ $newusers->email}}</td>  
                          
                          <td>{{ $newusers->roll }}</td>
                       
                            <td>{{ $newusers->semester }}</td>
                            <td>{{ $newusers->career }}</td>
                            <td>{{ $newusers->status}}</td>
                           
                            <td> <a href="{{ "/delete_user" }}/{{ $newusers->user_id }}"><button class="btn btn-danger">Delete</button></a></td>
                            <td><a href="{{ "/approve_user" }}/{{ $newusers->user_id }}"><button class="btn btn-success">Approve</button></a></td>
            
                           
                </tr> 
    @endforeach
            </tbody>
        </table>
    </div>
    @endsection