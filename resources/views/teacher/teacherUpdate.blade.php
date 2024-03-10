{{-- extend default layout --}}
@extends('includes.dashDefault')

{{-- breadcrumb --}}
@section('crumb','AddTeacher')
{{-- layout for add --}}
@section('hero')
<div class="container-fluid">
  <h2 class="text-center">Update Teacher</h2>
  <form  action="" method="POST" class="w-75 mx-auto rounded shadow p-3">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">
        Teacher Id:
      </label>
      <input type="text" name="teacherId" id="teacherId" @readonly(true) class="form-control">
      <p class="form-text text-danger">
        @error('te-id')
        Enter valid Teacher Id
        @enderror
      </p>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Teacher Name:
      </label>
      <input type="text" name="teacherName" id="teachername" @required(true) class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Teacher Name
        @enderror
      </p>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Teacher Address:
      </label>
      <input type="text" name="teacherAdd" id="teacherAdd" class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Teacher Address
        @enderror
      </p>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Teacher Email:
      </label>
      <input type="email" name="teacherEmail" id="teacherEmail" class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Teacher Email
        @enderror
      </p>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Teacher Phone Number:
      </label>
      <input type="number" name="teacherPhone" id="teacherPhone" @required(true) class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Teacher Phone Number
        @enderror
      </p>

    </div>
    
    <div class="mb-3">
      <label for="" class="form-label">
        Password:
      </label>
      <input type="password" name="teacherPassword" id="teacherPassword" @required(true) class="form-control">
      <p class="form-text text-danger">
        @error('te-name')
        Enter valid Password
        @enderror
      </p>

    </div>

    <button class="btn btn-success" type="submit">Update</button>
  </form>
</div>
@endsection


@push('script')




@endpush