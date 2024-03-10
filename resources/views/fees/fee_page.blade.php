{{-- extend default layout --}}
@extends('includes.dashDefault')

{{-- breadcrumb --}}
@section('crumb','StudentFee')
{{-- layout for add --}}
@section('hero')
<div class="container-fluid">
  <h2 class="text-center"> Student Fee</h2>
  <form action="{{route('student.fee_pay')}}" method="POST" class="w-75 mx-auto rounded shadow p-3">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">
        Student Id:
      </label>
      <input type="text" name="Student_id" id="Student_id" value="{{$student->Student_id}}" @readonly(true) class="form-control">
     

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Student Name:
      </label>
      <input type="text" name="studentname" value="{{$student->Fullname}}" id="studentName" @readonly(true) class="form-control">
     

    </div>

    <div class="mb-3">
      <label for="" class="form-label">
        School Admission:
      </label>
      <input name="school_admission" id="school_admission" value="0" onkeyup="total()" class="form-control">


    </div>
    
    <div class="mb-3">
      <label for="" class="form-label">
        Hostel Admission:
      </label>
      <input name="hostel_admission" id="hostel_admission" value="0" onkeyup="total()" class="form-control">
     

    </div>
    
    <div class="mb-3">
      <label for="" class="form-label">
        Tuition Fee:
      </label>
      <input name="tution_fee" id="tution_fee" value="0" onkeyup="total()"  class="form-control">
      
    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Vehicle Fee:
      </label>
      <input name="vechicle_fee" id="vechicle_fee" value="0" onkeyup="total()" class="form-control">
    

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Hostel Fee:
      </label>
      <input name="hostel_fee" id="hostel_fee" value="0" onkeyup="total()" class="form-control">
     

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Exam Fee:
      </label>
      <input name="exam_fee" id="exam_fee" value="0" onkeyup="total()" class="form-control">
     

    </div>
	<div class="mb-3">
      <label for="" class="form-label">
        Books:
      </label>
      <input name="book" id="book" value="0" onkeyup="total()" class="form-control">
      
	 <div class="mb-3">
      <label for="" class="form-label">
        Total:
      </label>
      <input name="totel" id="totel" value="0" class="form-control">
     

    </div>
    <div class="mb-3">
      <label for="" class="form-label">
        Mode 0f Payment:
      </label>
      <select name="Mode" id="" class="form-select">
        <option value="Cash">Cash</option>
        <option value="Online">Online</option>
      </select>
      

    </div>

    <div class="mb-3">
        <label for="" class="form-label">
            Month:
        </label>
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
        
  
      </div>

    <button class="btn btn-success" type="submit">Submit</button>
  </form>
</div>
@endsection


@push('script')
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

@endpush