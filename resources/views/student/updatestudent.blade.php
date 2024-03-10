{{-- extend default layout --}}
@extends('includes.dashDefault')

{{-- breadcrumb --}}
@section('crumb','UpdateStudent')
{{-- layout for add --}}
@section('hero')
<div class="container-fluid">
  <h2 class="text-center">Update Student</h2>
  <form action="{{route('student.updateData')}}" method="POST" class="w-75 mx-auto rounded shadow p-3">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">
        Student Id:
      </label>
      <input type="text" value="{{$student->Student_id}}" name="studentId" id="studentId" readonly class="form-control">
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
      <input type="text" name="studentname" value="{{$student->Fullname}}" id="studentName" @required(true) class="form-control">
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
        <input type="text" name="fatherName" value="{{$student->FatherName}}" id="fatherName" @required(true) class="form-control">
        
  
      </div>

    <div class="mb-3">
      <label for="" class="form-label">
        Student Roll:
      </label>
      <input type="number" name="studentRoll" value="{{$student->Roll}}" id="studentRoll" class="form-control">
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
      <input type="text" name="studentClass" value="{{$student->Class}}" id="studentClass"  class="form-control">
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
      <input type="text" name="studentSchool" id="studentSchool" value="{{$student->Schoolname}}"  class="form-control">
      

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Student Address:
      </label>
      <input type="text" name="studentAdd" value="{{$student->Address}}" id="studentAdd" class="form-control">
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
      <input type="number" name="studentPhone" value="{{$student->Phone}}" id="studentPhone" @required(true) class="form-control">
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
      <input type="email" name="studentEmail" value="{{$student->Email}}" id="studentEmail" class="form-control">
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
      <input type="vno" name="vehicleNo" value="{{$student->VehicleNo}}" id="vehicleNo" class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Vehicle No
        @enderror
      </p>
	 <div class="mb-3">
      <label for="" class="form-label">
        Vehicle Route:
      </label>
      <input type="route" name="vehicleRoute" value="{{$student->VehicleRoute}}" id="vehicleRoute" class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Vehicle Route
        @enderror
      </p>

    </div>
   

    <button class="btn btn-success" type="submit">Submit</button>
  </form>
</div>
@endsection


@push('script')


@endpush