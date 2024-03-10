{{-- extend default layout --}}
@extends('includes.dashDefault')

{{-- shoe crumb --}}
@section('crumb',"Manage Teacher")

@section('hero')
<div class="container-fluid">
  <h2>Manage Teachers</h2>
  <div class="table-responsive-xl">
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Sl.No</td>
          <td> Id</td>
          <td> Name</td>
          <td> About</td>
          <td>Email </td>
          <td>Mobile</td>
          <td>Address</td>
          <td>Actions</td>
        </tr>
      </thead>
      <tbody>
        @php
        $i=0;
        @endphp
        @foreach ($teacher as $item)
        <tr>
          <td>{{$i=$i+1}}</td>
          <td>{{$item->Teacher_id}}</td>
          <td>{{$item->Fullname}}</td>
          <td>{{$item->About}}</td>
          <td>{{$item->Email}}</td>
          <td>{{$item->Phone}}</td>
          <td>{{$item->Address}}</td>
          <td class="d-flex gap-3">
            <a><button class="btn btn-warning">View</button></a>
            <a href="{{route('teacher.update',['id'=>$item->id])}}"><button class="btn btn-primary">Edit</button></a>
            <a href="{{route('teacher.delete',['id'=>$item->id])}}"><button class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection