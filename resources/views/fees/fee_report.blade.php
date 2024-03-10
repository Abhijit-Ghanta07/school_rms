<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$student->Schoolname}} Fees Book Report</title>
    <link rel="stylesheet" href="{{ asset('public/style12.css') }}">
	<img src="{{ asset('public/image/sabujsisutirtha.jpeg') }}" alt="sabuj sishu tirtha" />
</head>

<body>
    <header>
        <h1>{{$student->Schoolname}}</h1>
        <h2>Fees Book Report</h2>
    </header>

    <main>
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
                 <table>
    <thead>

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
        <td>
          <table class="sub-table">
            <tr>
              <th>{{$free->SchoolAdmission}}</th>
              <th>{{$free->HostelAdmission}}</th>
            </tr>
            </table>
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
              
			</div>
			
    </main>

    <footer>
        &copy; 2024|| {{$student->Schoolname}}. All rights reserved.
    </footer>
</body>

</html>
