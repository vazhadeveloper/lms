<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Program;
use Illuminate\Http\Request;
use Validator;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        return view('program.index')->with('programs', $programs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::all();
        return view('program.create')->with('faculties', $faculties);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'               => 'required|max:255',
            'faculty_id'         => 'required|exists:faculties,id',
            'mandatorty_credits' => 'required|integer',
            'optional_credits'   => 'required|integer',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $program = Program::create($request->all());
        return redirect()->route('programs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Program::findOrFail($id);

        return view('program.show')
            ->with('program', $program);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $faculties = Faculty::all();
        return view('program.edit')
            ->with('program', $program)
            ->with('faculties', $faculties);
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
        $validator = Validator::make($request->all(), [
            'name'               => 'required|max:255',
            'faculty_id'         => 'required|exists:faculties,id',
            'mandatorty_credits' => 'required|integer',
            'optional_credits'   => 'required|integer',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        }
        $program = Program::findOrFail($id);
        $program->fill($request->all());
        $program->save();
        return redirect()->route('programs.show', $program->id);
    }
}
