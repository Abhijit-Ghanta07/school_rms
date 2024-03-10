<?php

namespace App\Http\Controllers;

use App\Models\fees;
use App\Models\Student;
use App\Models\student_fee_recode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //
    public function student_add(){
        return view('student.addstudent');
    }
    //
    public function student_added(Request $request){
        $request->validate(
            [
                'studentId' => 'required',
                'studentname' => 'required',
                'studentEmail'=>'email',
                'studentPassword' => 'required'
            ]);
        $student =new Student();
        $student->Student_id =$request['studentId'];
        $student->Fullname =$request['studentname'];
        $student->Address =$request['studentAdd'];
        $student->Class =$request['studentClass'];
        $student->Roll =$request['studentRoll'];
        $student->Phone =$request['studentPhone'];
        $student->Email =$request['studentEmail'];
        $student->FatherName =$request['fatherName'];
        $student->VehicleRoute =$request['vehicleRoute'];
        $student->VehicleNo =$request['vehicleNo'];
        $student->Schoolname =$request['studentSchool'];
        $student->Password = Hash::make($request['studentPassword']);
        $student->save();

        $student_fee_recode =new student_fee_recode();
        $student_fee_recode->Student_id =$request['studentId'];
        $student_fee_recode->Student_name =$request['studentname'];
        $student_fee_recode->Student_class =$request['studentClass'];
        $student_fee_recode->save();

        return redirect()->route('Admin.Dashbroad');
    }
    //
    public function student_update_data(Request $request){
       
        $student =Student::where("Student_id",'=',$request['studentId'] )->get()->first();
        $student->Fullname =$request['studentname'];
        $student->Address =$request['studentAdd'];
        $student->Class =$request['studentClass'];
        $student->Roll =$request['studentRoll'];
        $student->Phone =$request['studentPhone'];
        $student->Email =$request['studentEmail'];
        $student->FatherName =$request['fatherName'];
        $student->VehicleRoute =$request['vehicleRoute'];
        $student->Schoolname =$request['studentSchool'];
        $student->VehicleNo =$request['vehicleNo'];
        $student->Password = Hash::make($request['studentPassword']);
        $student->save();
        $student_fee_recode =student_fee_recode::where("Student_id",'=',$request['studentId'] )->first();
        $student_fee_recode->Student_name =$request['studentname'];
        $student_fee_recode->Student_class =$request['studentClass'];
        return redirect()->route('student.manage');
    }
//
    public function student_manage(){
        $student= Student::all();
        $data=compact('student');
        return view('student.managestudent')->with($data);
    }
    //
    public function student_delete($id){
        $user = Student::find($id);
        $student_fee_recode =student_fee_recode::where("Student_id",'=',$user['Student_id'] )->get()->first();
        if(! is_null( $user)){
            $user->delete();
            $student_fee_recode->delete();
        }
        return redirect()->route('student.manage');
    }
     //student data update
     public function student_update($id){
        $user = Student::find($id);
       
        if(! is_null( $user)){
            $student= Student::where("id",'=',$id )->get()->first();
           // return $student;
            $data=compact('student');
            return view('student.updatestudent')->with($data);
        }
        return redirect()->route('student.manage');
    }
    //
    public function student_fee(){
        $student_fee_recode =student_fee_recode::all();
        $data=compact('student_fee_recode');
        $student= Student::all();
        $data1=compact('student');
        return view('fees.studentFees')->with($data)->with($data1);
    }
    //
    public function student_Search_fee(Request $request){
        $student_fee_recode=student_fee_recode::where("Student_id",'=',$request->input('Student_Id') )->get();
        $data=compact('student_fee_recode');
        $student= Student::all();
        $data1=compact('student');
        return view('fees.studentFees')->with($data)->with($data1);
    }
    //
    public function student_fee_report($id){

        $free=fees::where("fee_id",'=',$id )->get()->first();
       $data1=compact('free');
       $Student_id=$free['student_id'];
      
       $student= Student::where("Student_id",'=',$Student_id )->get()->first();
      $data2=compact('student');
        return view('fees.fee_report')->with($data1)->with($data2);
    }
    //
    public function student_fee_page($id){
        $student= Student::where("Student_id",'=',$id )->get()->first();
        $data=compact('student');
        return view('fees.fee_page')->with($data);
    }
    //
    public function student_fee_pay(Request $request){
       
        $abc= rand(0, 99999999);
       
        $student_fee_recode =student_fee_recode::where("Student_id",'=',$request->input('Student_id') )->get();
        
        if($student_fee_recode->count() == 0){
            return redirect()->route('student.fee');
        }
       
        $student_fee_recode =student_fee_recode::where("Student_id",'=',$request->input('Student_id') )->first();
        if("January" == $request->input('Month')){
            $student_fee_recode->January = $abc;
        }
        if("February" == $request->input('Month')){
            $student_fee_recode->February = $abc;
        }
        if("March" == $request->input('Month')){
            $student_fee_recode->March = $abc;
        }
        if("April" == $request->input('Month')){
            $student_fee_recode->April = $abc;
        }
        if("May" == $request->input('Month')){
            $student_fee_recode->May = $abc;
        }
        if("June" == $request->input('Month')){
            $student_fee_recode->June = $abc;
        }
        if("July" == $request->input('Month')){
            $student_fee_recode->July = $abc;
        }
        if("August" == $request->input('Month')){
            $student_fee_recode->August = $abc;
        }
        if("September" == $request->input('Month')){
            $student_fee_recode->September = $abc;
        }
        if("October" == $request->input('Month')){
            $student_fee_recode->October = $abc;
        }
        if("November" == $request->input('Month')){
            $student_fee_recode->November = $abc;
        }
        if("December" == $request->input('Month')){
            $student_fee_recode->December = $abc;
        }
        $student_fee_recode->save();
        $fee= new fees();
        $fee->Student_id =$request->input('Student_id');
        $fee->fee_id =$abc;
        $fee->SchoolAdmission =$request->input('school_admission');
        $fee->HostelAdmission =$request->input('hostel_admission');
        $fee->TuitionFee =$request->input('tution_fee');
        $fee->VehicleFee =$request->input('vechicle_fee');
        $fee->HostelFee =$request->input('hostel_fee');
        $fee->ExamFee =$request->input('exam_fee');
        $fee->Books =$request->input('book');
        $fee->month =$request->input('Month');
        $fee->fee_type =$request->input('Mode');
        $fee->Amount =$request->input('totel');
        $fee->save();

        return redirect()->route('student.fee');
    }
}
