<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use Session;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('admin.allquiz')->with('quizzes', $quizzes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addnew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validate
//        $this->validate($request, [
//           'name' => 'required',
//        ]);

        Quiz::create([
            'question' => $request->question,
            'first_ans' => $request->first_ans,
            'second_ans' => $request->second_ans,
            'third_ans' => $request->third_ans,
            'fourth_ans' => $request->fourth_ans,
        ]);

        Session::flash('success', 'New quiz added Successfully!!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Quiz $quiz
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz, $id)
    {
        $quiz = Quiz::find($id);
        return view('admin.edit')->with('quiz', $quiz);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Quiz $quiz
     * @param $id
     * @return void
     */
    public function update(Request $request, Quiz $quiz, $id)
    {
        $quiz = Quiz::find($id);
        $quiz -> question = $request->question;
        $quiz -> first_ans = $request->first_ans;
        $quiz -> second_ans = $request->second_ans;
        $quiz -> third_ans = $request->third_ans;
        $quiz -> fourth_ans = $request->fourth_ans;

        $quiz -> save();

        Session::flash('success', 'Quiz Update Successfully!!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param $id
     * @return void
     */
    public function destroy(Request $request)
    {
        $quiz = Quiz::find($request->id);
        $quiz -> delete();

        Session::flash('success', 'Quiz Delete Successfully!!');
        return redirect()->back();
    }

    // //JSON Data
    // public function retrievedatafile($retrieve, $conn) {
    //     $result= mysqli_query($conn,$retrieve);

    //     if (isset($result)) {
    //         if (!$result) {
    //             $info= "{'msg':'data can't retrieve'}";
    //         } else {
    //             // Full Data Show Json
    //             while ($rows= mysqli_fetch_assoc($result)) {
    //                 $output[]=$rows;
    //             }
    //             $info=$output;
    //             print(json_encode(array("data"=>$info)));

    //         }
    //     }
    // }

    public function quiz() {
        $quizzes = Quiz::all();
        return view('quiz')->with('quizzes', $quizzes);
    }

}
