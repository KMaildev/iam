<?php

namespace App\Http\Controllers;

use App\Models\StudentDocs;
use App\Models\User;
use Illuminate\Http\Request;

class StudentDocsController extends Controller
{
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        $file_managements = StudentDocs::where('user_id', $id)->get();
        return view('account.student.student_docs', compact('file_managements'));
    }


    public function store(Request $request)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $path = $file->store('public/student_docs');
                $original_name = $file->getClientOriginalName();
                $insert[$key]['file_path'] = $path;
                $insert[$key]['user_id'] = auth()->user()->id ?? 0;
                $insert[$key]['upload_date'] = date('Y-m-d');
                $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
                $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
            }
            StudentDocs::insert($insert);
        }
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function destroy($id)
    {
        $member = StudentDocs::findOrFail($id);
        $member->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
