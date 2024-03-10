<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    //
    public function teacher_add(){
        return view('teacher.add');
    }
    //
    public function teacher_added(Request $request){
        $request->validate(
            [
                'teacherId' => 'required',
                'teacherName' => 'required',
                'teacherEmail'=>'email',
                'teacherPassword' => 'required'
            ]);
        $teacher =new Teacher();
        $teacher->Teacher_id =$request['teacherId'];
        $teacher->Fullname =$request['teacherName'];
        $teacher->Address =$request['teacherAdd'];
        $teacher->About =" ";
        $teacher->Phone =$request['teacherPhone'];
        $teacher->Email =$request['teacherEmail'];
        $teacher->Password = Hash::make($request['teacherPassword']);
        $teacher->save();
        return redirect()->route('Admin.Dashbroad');
    }
    //
    public function teacher_manage(){
        $teacher= Teacher::all();
        $data=compact('teacher');
        return view('teacher.manage')->with($data);
    }
    //
    public function teacher_delete($id){
        $user = Teacher::find($id);
        if(! is_null( $user)){
            $user->delete();
        }
        return redirect()->route('teacher.manage');
    }
    //teacher data update
    public function teacher_update($id){
        $user = Teacher::find($id);
        return  $user;
        if(! is_null( $user)){
            
        }
        return redirect()->route('teacher.manage');
    }
}
