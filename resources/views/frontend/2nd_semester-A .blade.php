@extends('frontend.layouts.main')
@section('main-container')
 <div class="std-info">
       <div class="col-md-auto">
 
<h5 style="padding-left:40% ;padding-top:25px;padding-bottom:25px;">Student's list</h5>
<table class="content-table">
    <thead>
        <tr>
            <th>Name</th>
             <th>Roll</th>
              <th>Registration</th>
               <th>Section</th>
                <th>Interest</th>
                 <th>Contact Number</th>
                 <th>View profile</th>
        </tr>
    </thead>
    <tbody>
          <tr>
            <td>Rifa</td>
              <td>57</td>
                <td>16502000430</td>  
                  <td>A</td>
                    <td>Web Developing</td>
                    <td>01920011984</td>
                    <td><a href="#">View Profile</a></td>
        </tr>
         
    </tbody>
</table>
</div>
</div>
@endsection