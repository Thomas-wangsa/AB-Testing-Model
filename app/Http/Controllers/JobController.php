<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\AScoreModelSummary;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            "application_type"=>array(),
            "source_of_registration"=>array()
        );

        try {
            $data["application_type"] = AScoreModelSummary::distinct()->orderBy('application_type')->pluck('application_type');
            $data["source_of_registration"] = AScoreModelSummary::distinct()->orderBy('source_of_registration')->pluck('source_of_registration');
        } catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
        

        return view('job/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            "application_type"=>array(),
            "source_of_registration"=>array()
        );

        try {
            $data["application_type"] = AScoreModelSummary::distinct()->orderBy('application_type')->pluck('application_type');
            $data["source_of_registration"] = AScoreModelSummary::distinct()->orderBy('source_of_registration')->pluck('source_of_registration');
        } catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
        

        return view('job/create',compact('data'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getEngineNameByDataForA(Request $request) {
        $response = ["error"=>True,"messages"=>NULL,"data"=>NULL];

        try {
            $data = AScoreModelSummary::where('application_type',$request->a_app_type)
                ->where('source_of_registration',$request->a_source)
                ->orderBy('start_date')
                ->get();

            if(count($data) < 1 ) {
                $response['messages'] = "data not found!";
            } else {
                $response['data'] = $data;
                $response['error'] = False;
            }
            return json_encode($response);
        } catch(Exception $e) {
            $response['messages'] = $e->getMessage();
            return json_encode($response);
        }
    }
}
