@extends('includes.dashDefault')

{{-- yeild title --}}

@section('crumb')
Student Fees

@endsection

{{-- main content --}}
@section('hero')

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <form action="{{route('student.Search_fee')}}" method="POST" class="d-flex px-3 justify-content-between">
        @csrf
        <div class="form-group w-75">
          <label for="" class="form-label">
            Search By Student Id
          </label>
          <input type="text" name="Student_Id" id="Student_Id" class="form-control"> 
          <button hidden class="btn btn-primary">Search</button>
        </div>
       
          
        
      </form>
    </div>
  </div>
  <div class="row mt-3">
    <div class="d-flex justify-content-between mb-3">
      <h2>Student Fees Table</h2>
      <button data-bs-target="#dateModal" data-bs-toggle="modal" class="btn btn-success">Add Payment</button>
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <td>No</td>
            <td>Student ID</td>
            <td>Student Name</td>
            <td>Class</td>
            <td>   </td>
            <td>January</td>
            <td>Febuary</td>
            <td>March</td>
            <td>April</td>
            <td>May</td>
            <td>June</td>
            <td>July</td>
            <td>August</td>
            <td>September</td>
            <td>October</td>
            <td>November</td>
            <td>December</td>
          </tr>
        </thead>
        <tbody>
          @php
          $i=0;
          @endphp
          @foreach ($student_fee_recode as $item)
          <tr>
            <td>{{$i=$i+1}}</td>
            <td>{{$item->Student_id}}</td>
            <td>{{$item->Student_name}}</td>
            <td>{{$item->Student_class}}</td>
           <td> <a href="{{route('student.fee_page',['id'=>$item->Student_id])}}" ><button  class="btn btn-success"> Payment</button></a></td>
            <td> @if ($item->January)
             <a href="{{route('student.fee_report',['id'=>$item->January])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button> </a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
              
            </td>
            <td>
              @if ($item->Febuary)
              <a href="{{route('student.fee_report',['id'=>$item->Febuary])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
            </td>
            <td>
              @if ($item->March)
              <a href="{{route('student.fee_report',['id'=>$item->March])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
            </td>

            <td> @if ($item->April)
              <a href="{{route('student.fee_report',['id'=>$item->April])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif</td>
            <td>
              @if ($item->May)
              <a href="{{route('student.fee_report',['id'=>$item->May])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
            </td>
            <td> @if ($item->June)
              <a href="{{route('student.fee_report',['id'=>$item->June])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif</td>
            <td>
              @if ($item->July)
              <a href="{{route('student.fee_report',['id'=>$item->July])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
            </td>
            <td>
              @if ($item->August)
              <a href="{{route('student.fee_report',['id'=>$item->August])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
            </td>
            <td>
              @if ($item->September)
              <a href="{{route('student.fee_report',['id'=>$item->September])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
            </td>
            <td>
              @if ($item->October)
              <a href="{{route('student.fee_report',['id'=>$item->October])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
            </td>
            <td>
              @if ($item->November)
              <a href="{{route('student.fee_report',['id'=>$item->November])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
            </td>
            <td>
              @if ($item->December)
              <a href="{{route('student.fee_report',['id'=>$item->December])}}"> <button class="btn btn-success ">PAID <i class="bi bi-printer-fill"></i></button></a>
            @else
              <button class="btn btn-danger">UNPAID <i class="bi bi-cash-coin"></i></button>
            @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="modal fade" id="dateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered">
    <form action="{{route('student.fee_pay')}}" method="POST" class="w-100">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Enter Fees</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-lable">
              Student ID:
             <select name="Student_id" id="Student_id" class="form-select">
               @foreach ($student as $item)
               <option value={{$item->Student_id}} >{{$item->Student_id}}</option>
               @endforeach
              </select>
            </label>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">
             School Admission:
              <input  name="school_admission" id="school_admission" value="0" onkeyup="total()" class="form-date">
            </label>
			<label for="" class="form-label">
              Hostel Admission:
              <input  name="hostel_admission" id="hostel_admission" value="0" onkeyup="total()" class="form-date">
            </label>
			<label for="" class="form-label">
              Tuition Fee:
              <input  name="tution_fee" id="tution_fee" value="0" onkeyup="total()" class="form-date">
            </label>
			<label for="" class="form-label">
              Vehicle Fee:
              <input  name="vechicle_fee" id="vechicle_fee" value="0" onkeyup="total()" class="form-date">
            </label>
			<label for="" class="form-label">
              Hostel Fee:
              <input  name="hostel_fee" id="hostel_fee" value="0" onkeyup="total()" class="form-date">
            </label>
			<label for="" class="form-label">
              Exam Fee:
              <input  name="exam_fee" id="exam_fee" value="0" onkeyup="total()" class="form-date">
            </label>
			<label for="" class="form-label">
              Books:
              <input  name="book" id="book" value="0" onkeyup="total()" class="form-date">
            </label>
			<label for="" class="form-label">
              Total:
              <input  name="totel" id="totel" value="0" class="form-date">
            </label>
			<label for="" class="form-label">
              Mode 0f Payment:
              <select name="Mode" id="" class="form-select">
                <option value="Cash">Cash</option>
                <option value="Online">Online</option>
              </select>
            </label>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">
              Month:
              <select name="Month" id="" class="form-select">
                <option value="January">January</option>
                <option value="Febuary">Febuary</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
            </label>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button  class="btn btn-primary" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>

</div>

</div>
<script>
  function total(){
    var school_admission = document.getElementById('school_admission').value;
    var hostel_admission = document.getElementById('hostel_admission').value;
    var tution_fee = document.getElementById('tution_fee').value;
    var vechicle_fee = document.getElementById('vechicle_fee').value;
    var hostel_fee = document.getElementById('hostel_fee').value;
    var exam_fee = document.getElementById('exam_fee').value;
    var book = document.getElementById('book').value;
    var total = document.getElementById('total');
   var d = parseInt(school_admission) + parseInt(hostel_admission) + parseInt(tution_fee) + parseInt(vechicle_fee) + parseInt(hostel_fee) + parseInt(exam_fee) + parseInt(book);
    document.getElementById('totel').value = d;
  }
  </script>
@endsection