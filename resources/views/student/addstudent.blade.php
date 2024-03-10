{{-- extend default layout --}}
@extends('includes.dashDefault')

{{-- breadcrumb --}}
@section('crumb','AddStudent')
{{-- layout for add --}}
@section('hero')
<div class="container-fluid">
  <h2 class="text-center">Add Student</h2>
  <form action="{{route('student.added')}}" method="POST" class="w-75 mx-auto rounded shadow p-3">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">
        Student Id:
      </label>
      <input type="text" name="studentId" id="studentId" @readonly(true) class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Student Id
        @enderror
      </p>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Student Name:
      </label>
      <input type="text" name="studentname" id="studentName" @required(true) class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Student Name
        @enderror
      </p>

    </div>

    <div class="mb-3">
      <label for="" class="form-label">
        Student Father Name:
      </label>
      <input type="text" name="fatherName" id="fatherName" @required(true) class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Student Father Name
        @enderror
      </p>

    </div>
    
    <div class="mb-3">
      <label for="" class="form-label">
        Student Roll:
      </label>
      <input type="number" name="studentRoll" id="studentRoll" class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Student Roll
        @enderror
      </p>

    </div>
    
    <div class="mb-3">
      <label for="" class="form-label">
        Class:
      </label>
      <input type="text" name="studentClass" id="studentClass"  class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Class
        @enderror
      </p>

    </div>

    <div class="mb-3">
      <label for="" class="form-label">
        School Name:
      </label>
      <input type="text" name="studentSchool" id="studentSchool" @required(true) class="form-control">
      

    </div>

    <div class="mb-3">
      <label for="" class="form-label">
        Student Address:
      </label>
      <input type="text" name="studentAdd" id="studentAdd" class="form-control">
      <p class="form-text text-danger">
        @error('te-subject')
        Enter valid Student Address
        @enderror
      </p>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Student Phone Number:
      </label>
      <input type="number" name="studentPhone" id="studentPhone" @required(true) class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Student Phone Number
        @enderror
      </p>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Student Email:
      </label>
      <input type="email" name="studentEmail" id="studentEmail" class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Student Email
        @enderror
      </p>

    </div>
	<div class="mb-3">
      <label for="" class="form-label">
        Vehicle No:
      </label>
      <input type="vno" name="vehicleNo" id="vehicleNo" class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Vehicle No
        @enderror
      </p>
	 <div class="mb-3">
      <label for="" class="form-label">
        Vehicle Route:
      </label>
      <input type="route" name="vehicleRoute" id="vehicleRoute" class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Vehicle Route
        @enderror
      </p>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Student Password:
      </label>
      <input type="password" name="studentPassword" id="studentPassword" @required(true) class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Student Password
        @enderror
      </p>

    </div>

    <button class="btn btn-success" type="submit">Submit</button>
  </form>
</div>
@endsection


@push('script')
<script>
  var d = new Date();
  var t = new Date().getTime();
  var randomnum = Math.floor(Math.random() * (10000 - 500)) + 100;
  randomnum = d.getFullYear() + d.getMonth() + d.getDate() + randomnum;
  randomnum = 'Std'+randomnum  ;
  console.log(randomnum);
  document.getElementById('studentId').value = randomnum;
  
  </script>

@endpush