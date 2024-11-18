<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubmissionProjectController extends Controller
{
    public function index()
    {
        // Read - Display a list of items
    }
    public function create()
    {
        // Create - Show the form to create a new item
    }
    public function store(Request $request)
    {
        $Q5  = [
            'Q5-1' => $request->Q5_1,
            'Q5-2' => $request->Q5_2,
            'Q5-3' => $request->Q5_3,
            'Q5-3-1' => $request->Q5_3_1,
            'Q5-3-1' => $request->Q5_3_2,
        ];

        $Q13_1  = [
            '13-1' => $request->Q13_1,
        ];

        $Q28  = [
            'Q28-1' => $request->Q28_1,
            'Q28-2' => $request->Q28_2,
            'Q28-3' => $request->Q28_3,
            'Q28-4' => $request->Q28_4,
            'Q28-5' => $request->Q28_5,
            'Q28-6' => $request->Q28_6,
            'Q28-7' => $request->Q28_7,
        ];

        $Q29  = [
            'Q29-1' => $request->Q29_1,
            'Q29-2' => $request->Q29_2,
            'Q29-3' => $request->Q29_3,
            'Q29-4' => $request->Q29_4,
            'Q29-5' => $request->Q29_5,
            'Q29-6' => $request->Q29_6,
            'Q29-7' => $request->Q29_7,
            'Q29-8' => $request->Q29_8,
        ];

        $Q36  = [
            'Q36-1' => $request->Q36_1,
            'Q36-2' => $request->Q36_2,
            'Q36-3' => $request->Q36_3,
            'Q36-4' => $request->Q36_4,
            'Q36-5' => $request->Q36_5,
            'Q36-6' => $request->Q36_6,
            'Q36-7' => $request->Q36_7,
            'Q36-8' => $request->Q36_8,
            'Q36-9' => $request->Q36_9,
            'Q36-10' => $request->Q36_10,
            'Q36-11' => $request->Q36_11,
            'Q36-12' => $request->Q36_12,
            'Q36-13' => $request->Q36_13,
            'Q36-14' => $request->Q36_14,
            'Q36-15' => $request->Q36_15,
        ];

        $Q47  = [
            'Q47-1' => $request->Q47_1,
            'Q47-2' => $request->Q47_2,

        ];

        try {
            DB::table('submission_project')->insert([
                'Q1' => $request->Q1,
                'Q2' => $request->Q2,
                'Q3' => $request->Q3,
                'Q4' => $request->Q4,
                'Q5' => json_encode($Q5),
                'Q6' => $request->Q6,
                'Q7' => $request->Q7,
                'Q8' => $request->Q8,
                'Q9' => $request->Q9,
                'Q10' => $request->Q10,
                'Q11' => $request->Q11,
                'Q12' => $request->Q12,
                'Q13-1' => json_encode($Q13_1),
                'Q13-2' => $request->Q13_2,
                'Q13-3' => $request->Q13_3,
                'Q13-4' => $request->Q13_4,
                'Q14' => $request->Q14,
                'Q15'=> $request->Q15,
                'Q16'=> $request->Q16,
                'Q17'=> $request->Q17,
                'Q18'=> $request->Q18,
                'Q19' => $request->Q19,
                'Q20'=> $request->Q20,
                'Q21' => $request->Q21,
                'Q22'=> $request->Q22,
                'Q23'=> $request->Q23,
                'Q24'=> $request->Q24,
                'Q25' => $request->Q25,
                'Q26'=> $request->Q26,
                'Q27'=> $request->Q27,
                'Q28' => json_encode($Q28),
                'Q29'=> $request->Q29,
                'Q30'=> $request->Q30,
                'Q31'=> $request->Q31,
                'Q32'=> $request->Q32,
                'Q33'=> $request->Q33,
                'Q34'=>$request->Q34,
                'Q35'=> $request->Q35,
                'Q36' => json_encode($Q36),
                'Q37'=> $request->Q37,
                'Q38'=> $request->Q38,
                'Q39'=> $request->Q39,
                'Q40'=> $request->Q40,
                'Q41'=> $request->Q41,
                'Q42'=> $request->Q42,
                'Q43'=> $request->Q43,
                'Q44'=> $request->Q44,
                'Q45'=> $request->Q45,
                'Q46'=> $request->Q46,
                'Q47' => json_encode($Q47)
            ]);

            return response()->json(['status'=>True]);

        }   catch(\Exception $e) {
            return $e;
        }
    }
    public function show($id)
    {
        // Read - Display a single item
    }
    public function edit($id)
    {
        // Update - Show the form to edit an item
    }
    public function update(Request $request, $id)
    {
        // Update - Save the edited item to the database
    }
    public function destroy($id)
    {
        // Delete - Remove an item from the database
    }
}
