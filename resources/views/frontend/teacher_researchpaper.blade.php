@extends('frontend.teacherdashboardlayouts.main')
@section('main-container')
<div class="add">

    <form class="row g-3" action="{{ url('/') }}/teacher_researchpaper" method="post">
        @if (Session::has ('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has ('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        <div class="col-md-6">
            <label for="inputprofessorsname" class="form-label">Professor's Name</label>
            <input type="text" name="professorsname"class="form-control" id="inputprofessorsname">
            <span class="text-danger"> 
              @error('professorsname')
            
                {{ $message }}
              @enderror
            </span>
          </div>
  <div class="col-md-6">
    <label for="inputinstitutionname" class="form-label">Institution Name</label>
    <input type="text" name="institutionname"class="form-control" id="inputinstitutionname">
    <span class="text-danger"> 
      @error('institutionname')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputtopic" class="form-label">Topic</label>
    <input type="text" name="topic"class="form-control" id="inputtopic">
    <span class="text-danger"> 
      @error('topic')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputheadline" class="form-label">Research Headline</label>
    <input type="text" name="headline"class="form-control" id="inputheadline">
    <span class="text-danger"> 
      @error('headline')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputpublicationname" class="form-label">Publication Name</label>
    <input type="text"  name="publicationname"class="form-control" id="inputpublicationname">
    <span class="text-danger"> 
      @error('publicationname')
    
        {{ $message }}
      @enderror
    </span>
  </div>

<div class="col-md-6">
    <label for="inputcontactprofessor" class="form-label">Contact Professor</label>
    <input type="email"  name="contactprofessor" class="form-control" id="inputcontactprofessor">
    <span class="text-danger"> 
      @error('contactprofessor')
    
        {{ $message }}
      @enderror
    </span>
</div> 
<div class="col-md-6">
    <label for="inputviewpaper" class="form-label">Contact Professor</label>
    <input type="link"  name="viewpaper" class="form-control" id="inputviewpaper">
    <span class="text-danger"> 
      @error('viewpaper')
    
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
