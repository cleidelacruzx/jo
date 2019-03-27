<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests;
use Session;

class CuserController extends Controller
{

    

    public function index()
    {
        //
        $clients = Client::orderBy('id','desc')
                               ->get();

        $no = 1;
        return view('cuser.index')->with([
            'clients'=>$clients,
            'count'=>$no,
        ]);
    }

    public function store(Request $request)
    {
        //
        $check_client = Client::where('username','LIKE',$request->input('username'))
                                  ->get();

        $count = count($check_client);

        if($count >= 1){

          Session::flash('repeat','Username Already Exist');

          return redirect()->route('cuser.index');//,$partner->id);

        }else{
        $client = new Client;

        $client->lname = $request->input('lname');
        $client->fname = $request->input('fname');
        $client->email = $request->input('email');
        $client->username = $request->input('username');
        $client->password = bcrypt($request->input('password'));
        $client->province = $request->input('province');
        $client->municipality = $request->input('municipality');
        $client->facility = $request->input('facility');

        $client->save();

        Session::flash('success','New Client was Successfully Save..!');

        return redirect()->route('cuser.index');
        }
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
