<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    //

    /**
     * action from page check privacy
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function check_privacy(Request $request)
    {
        //var_dump($request->post('accept')!=null);exit;
        // if(isset($request->post('accept')))
        if($request->post('accept')!=null){
            return redirect('dashboard');
        }else{
            return back();
        }

    }

    /**
     * หน้าแสดง comment สำหรับนักศึกษา และแสดง editor ให้เจ้าหน้าที่ comment
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editor(Request $request){

        return view('text');
    }

    /**
     * action step1
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function step_one(Request $request){

        return view('step.step_one');
    }


    /**
     * action step2 FORM
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function step_two(Request $request){

        return view('step.step_two');
    }

    /**
     * action step3
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function step_three(Request $request){

        return view('step.step_three');
    }

    /**
     * action step4
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function step_four(Request $request){

        return view('step.step_four');
    }

    /**
     * action step5
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function step_five(Request $request){

        return view('step.step_five');
    }
}
