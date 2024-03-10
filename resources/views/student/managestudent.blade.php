{{-- extend default layout --}}
@extends('includes.dashDefault')

{{-- shoe crumb --}}
@section('crumb',"Manage Students")

@section('hero')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h2>Manage Students</h2>
    </div>
    <div class="col">
      <select name="" class="form-select" id="">
        <option value="" class="form-option">
          All
        </option>
        <option value="1" class="form-option">
          Class -1
        </option>
        <option value="2" class="form-option">
          Class -2
        </option>
        <option value="3" class="form-option">
          Class -3
        </option>
        <option value="4" class="form-option">
          Class -4
        </option>
        <option value="5" class="form-option">
          Class -5
        </option>
        <option value="6" class="form-option">
          Class -6
        </option>
        <option value="7" class="form-option">
          Class -7
        </option>
        <option value="8" class="form-option">
          Class -8
        </option>
      </select>
    </div>
  </div>

  <div class="table-responsive-xl">
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Sl.No</td>
          <td>Id</td>
          <td>Student Name</td>
          <td>Roll</td>
          <td>Class</td>
          <td>School</td>
          <td>Mobile</td>
          <td>Email</td>
          <td>Address</td>
		  <td>Vehicle Route</td>
		  <td>Vehicle No</td>
          <td>Actions</td>
        </tr>
      </thead>
      <tbody>
        @php
        $i=0;
        @endphp
        @foreach ($student as $item)
        <tr>
          <td>{{$i=$i+1}}</td>
          <td>{{$item->Student_id}}</td>
          <td>{{$item->Fullname}}</td>
          <td>{{$item->Roll}}</td>
          <td>{{$item->Class}}</td>
          <td>{{$item->Schoolname}}</td>
          <td>{{$item->Phone}}</td>
          <td>{{$item->Email}}</td>
          <td>{{$item->Address}}</td>
		  <td>{{$item->VehicleRoute}}</td>
		  <td>{{$item->VehicleNo}}</td>
          <td class="d-flex gap-3">
            <a><button class="btn btn-warning">View</button></a>
            <a href="{{route('student.update',['id'=>$item->id])}}"><button class="btn btn-primary">Edit</button></a>
            <a href="{{route('student.delete',['id'=>$item->id])}}"><button class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection