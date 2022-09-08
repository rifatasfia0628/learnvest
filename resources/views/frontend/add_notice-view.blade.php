@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add2">
 
        <div class="col-md-auto">
              
               <table class="content-table">
                   <thead>
                       <tr>
                           <th>Notice</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Action</th>
                              
                       </tr>
                   </thead>
                   <tbody>
                    @foreach ($notices as $notice)
                         <tr>
                                  <td>{{ $notice->notice }}</td>
                                   <td>{{ $notice->description }}</td>
                                   <td>{{ $notice->status }}</td>
                                   <td><a href="{{ "/delete_notice" }}/{{ $notice->notice_id }}"><button class="btn btn-danger">Delete</button></a></td>
                                   <td><a href="{{ "/approve_notice" }}/{{ $notice->notice_id }}"><button class="btn btn-info">Approve</button></a></td>
                        </tr>
                     @endforeach
                   </tbody>
               </table>
           </div>
    </div>
           
@endsection