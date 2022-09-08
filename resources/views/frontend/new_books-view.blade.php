@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add2 ">
    <table class="content-table">
        <thead>
         <tr>
                <th>Subject name</th>
                 <th>Writer's Name</th>
                  <th>Book Name</th>
                   <th>Semester</th>
                   <th>Status</th>
                   <th>Action</th>
                   <th>Action</th>
                  
            </tr>
        </thead>
        <tbody>
            @foreach ($newbook  as $newbooks)
              <tr>
                <td>{{ $newbooks->subjectname }}</td>
                  <td>{{ $newbooks->writersname }}</td>
                    <td>{{ $newbooks->bookname}}</td>  
                      <td>{{ $newbooks->semester }}</td>
                      <td>{{ $newbooks->status }}</td>
                      <td> 
                        <a href="{{ "/delete_book" }}/{{$newbooks->newbook_id }}"><button class="btn btn-danger">Delete</button></a></td>
                      <td>  <a href="{{ "/approve_book" }}/{{$newbooks->newbook_id }}"><button class="btn btn-success">Approve</button></a></td>
                       
            </tr> 
@endforeach
        </tbody>
    </table>
</div>
@endsection