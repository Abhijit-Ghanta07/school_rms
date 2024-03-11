{{-- extend the base layout --}}
@extends("includes.dashDefault")

@section("title","Fees Book Report")
{{-- crumb the section --}}
@section("crumb","Print Report")


@section("hero")
<div class="container" id="school-name">
  <div class="row">
    <div class="col text-center">
      <h2>School Name</h2>
      {{-- <h2>{{$student->Schoolname}}</h2> --}}
    </div>
  </div>
</div>

{{-- <title>{{$student->Schoolname}} Fees Book Report</title> --}}

{{-- <img src="{{ asset('public/image/sabujsisutirtha.jpeg') }}" alt="sabuj sishu tirtha" /> --}}


<div class="student-info">
  <p>Student's Name: <span> {{$student->Fullname}}</span></p>
  <p>Father's Name:<span>{{$student->FatherName}}<span></p>
  <p>Contact No:<span>{{$student->Phone}}</span></p>
  <p>Class:<span>{{$student->Class}}</span></p>
  <p>Roll No: <span>{{$student->Roll}}</span></p>

</div>
<div class="fees-table">
  <table>
    <thead>
      <tr>
        <th>Month</th>
        <th>Admission Fees</th>
        <th>Tuition Fees</th>
        <th>Vehicle Fee</th>
        <th>Hostel Fee</th>
        <th>Exam Fee</th>
        <th>Book Fee</th>
        <th>Payment Mode</th>
        <th>Total Payment</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$free->month}}</td>
        <td class="row border-0 gap-2 m-0">
          <p class="col text-center bg-light m-0">{{$free->SchoolAdmission}}</p>
          <p class="col text-center bg-light m-0">{{$free->HostelAdmission}}</p>
        </td>
        <td>{{$free->TuitionFee}}</td>
        <td>{{$free->VehicleFee}}</td>
        <td>{{$free->HostelFee}}</td>
        <td>{{$free->ExamFee}}</td>
        <td>{{$free->Books}}</td>
        <td>{{$free->fee_type}}</td>
        <td>{{$free->amount}}</td>
      </tr>
    </tbody>
  </table>
  <div class="row py-3">
    <div class="col text-center">
      <button class="btn btn-success" id="printBtn">Print</button>
    </div>
  </div>

</div>


<footer>
  Copyright &copy; 2024 Procenture Tech|| All rights reserved.
</footer>
@endsection


{{-- push style to main layout --}}
@push("styles")
<link rel="stylesheet" href="{{ asset('public/style12.css') }}">

@endpush

{{-- push scripts to main layout --}}
@push("script")
<script>
  const printBtn=document.querySelector("#printBtn");
printBtn.addEventListener("click",()=>{
  window.print();
  window.addEventListener("afterprint", () => self.close);
})
</script>

@endpush