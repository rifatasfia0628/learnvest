@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add">

    <form class="row g-3" action="{{ url('/') }}/new_job_offers" method="post">
        @if (Session::has ('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has ('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
  <div class="col-md-6">
    <label for="inputcompanyname" class="form-label">Company Name</label>
    <input type="text" name="companyname"class="form-control" id="inputcompanyname">
    <span class="text-danger"> 
      @error('companyname')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputposition" class="form-label">Position</label>
    <input type="text"  name="position"class="form-control" id="inputposition">
    <span class="text-danger"> 
      @error('position')
    
        {{ $message }}
      @enderror
    </span>
  </div>
   <div class="col-md-6">
    <label for="requirments" class="form-label">Requirments</label>
    <input type="text" name="requirments" class="form-control" id="inputrequirments">
    <span class="text-danger"> 
      @error('requirments')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputresponsibilties" class="form-label">Responsibilities</label>
    <input type="text"  name="responsibilities" class="form-control" id="inputresponsibilities">
    <span class="text-danger"> 
      @error('responsibilities')
    
        {{ $message }}
      @enderror
    </span>
</div> 
<div class="col-md-6">
    <label for="inputexperienceneeded" class="form-label">Experience Needed</label>
    <input type="text"  name="experienceneeded" class="form-control" id="inputexperienceneeded">
    <span class="text-danger"> 
      @error('experienceneeded')
    
        {{ $message }}
      @enderror
    </span>
</div> 
<div class="col-md-6">
    <label for="inputsalaryrange" class="form-label">Salary Range</label>
    <input type="text"  name="salaryrange" class="form-control" id="inputsalaryrange">
    <span class="text-danger"> 
      @error('salaryrange')
    
        {{ $message }}
      @enderror
    </span>
</div> 
<div class="col-md-6">
    <label for="inputdropyourcv" class="form-label">Drop Your CV</label>
    <input type="email"  name="dropyourcv" class="form-control" id="inputdropyourcv">
    <span class="text-danger"> 
      @error('dropyourcv')
    
        {{ $message }}
      @enderror
    </span>
</div> 
<div class="col-md-6 sec">
    <label for="inputCareer" class="form-label">Career Field</label>
 <select class="form-select"  name="career" aria-label="Default select example">
<option selected>Select Your Career</option>
<option value="Android">Android</option>
<option value="Web Development">Web Development</option>
<option value="Networking">Networking</option>
<option value="Hardware">Hardware</option>
<option value="Artificial Intelligence">Artificial Intelligence</option>
<option value="IOT">IOT</option>
</select>
<span class="text-danger"> 
@error('career')

  {{ $message }}
@enderror
</span> </div>
 
<div class="col-md-6 sec">
    <button type="submit" class="btn btn-primary btn1">Add</button></div>
</form>
			

		</div>

@endsection   