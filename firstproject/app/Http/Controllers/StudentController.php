<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('student')->get();
        return view('home', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
        DB::table('student') ->insert([
            'name' => $request->name,
            'city' => $request->city,
            'marks' => $request->marks,
            'phoneNo' => $request->phoneNo,
            'BloodGroup' => $request->BloodGroup,
        ]);
        return redirect(route('index'))->with('status','student Added !!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = DB::table('student')->find($id);
        return view('editform', ['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('student')->where('id', $id)->update([
            'name' => $request->name,
            'city' => $request->city,
            'marks' => $request->marks,
            'marks' => $request->marks,
            'phoneNo' => $request->phoneNo,
            'BloodGroup' => $request->BloodGroup,
        ]);
        return redirect(route('index'))->with('status','student updated !!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('student')->where('id',$id)->delete();
        return redirect(route('index'))->with('status','student deleted !!');
    }
}
