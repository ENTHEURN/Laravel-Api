<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Resources\ShowStudentResource;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::list();
        $student = StudentResource::collection($student);
        return response()->json(['success' => true, 'data' =>$student], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        Student::store($request);
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'Student created successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        $student = new ShowStudentResource($student);
        return response()->json(['success' => true, 'data' => $student], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        Student::store($request,$id);
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'Student updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'Student delete successfully'
        ], 200);
    }
}
