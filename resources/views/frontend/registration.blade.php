@extends('frontend.layouts.main')
@section('main-container')

			<div class="headline1">
			<h1>Register</h1>
		</div>
   
		<div class="registrationbox">
			<form class="row g-3" action="{{ url('/') }}/registration" method="post">
        @if (Session::has ('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has ('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
  <div class="col-md-6">
    <label for="inputfirstname" class="form-label">First Name</label>
    <input type="text" name="firstname"class="form-control" id="inputfirstname">
    <span class="text-danger"> 
      @error('firstname')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputlastname" class="form-label">Last Name</label>
    <input type="text"  name="lastname"class="form-control" id="inputlastname">
    <span class="text-danger"> 
      @error('lastname')
    
        {{ $message }}
      @enderror
    </span>
  </div>
   <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4">
    <span class="text-danger"> 
      @error('email')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password"  name="password" class="form-control" id="inputPassword4">
    <span class="text-danger"> 
      @error('password')
    
        {{ $message }}
      @enderror
    </span>
</div> 
<div class="col-md-6">
    <label for="inputroll" class="form-label">Roll</label>
    <input type="text"  name="roll"class="form-control" id="inputroll">
    <span class="text-danger"> 
      @error('roll')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputreg" class="form-label">Registration</label>
    <input type="text"  name="registration" class="form-control" id="inputreg">
    <span class="text-danger"> 
      @error('registration')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputnumber" class="form-label">Mobile Number</label>
    <input type="text"  name="number"class="form-control" id="inputnumber">
    <span class="text-danger"> 
      @error('number')
    
        {{ $message }}
      @enderror
    </span>
  </div>
    <div class="col-md-6 sec">
      <label for="inputsemester" class="form-label">Select Your Semester</label>
   <select class="form-select"  name="semester" aria-label="Default select example">
  <option selected>Select Semester</option>
  <option value="1st">1st</option>
  <option value="2nd">2nd</option>
  <option value="3rd">3rd</option>
  <option value="4th">4th</option>
  <option value="5th">5th</option>
  <option value="6th">6th</option>
  <option value="7th">7th</option>
  <option value="8th">8th</option>
</select> <span class="text-danger"> 
  @error('semester')

    {{ $message }}
  @enderror
</span>
  </div>
   <div class="col-md-6 sec">
      <label for="inputsection" class="form-label">Select Your section</label>
   <select class="form-select"  name="section" aria-label="Default select example">
  <option selected>Select Your Section</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
</select>
<span class="text-danger"> 
  @error('section')

    {{ $message }}
  @enderror
</span></div>
<div class="col-md-6 sec">
      <label for="inputCareer" class="form-label">Choose Your Desired Career</label>
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
    <button type="submit" class="btn btn-primary btn1">Sign in</button>
</form>
			

		</div>
	
    @endsection