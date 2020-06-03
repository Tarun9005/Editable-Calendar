<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use DB;

class SearchController extends Controller
{
    //

    public function find(Request $request){

    	$credentials=$request->only('search');
    	//dd($credentials);



    $find = Events::where('title', $credentials)->get();
    //dd($find);
    return view('search',compact('find'));
}



public function update(Request $request)


    {

    	

    	$event1=$request->only('eventname');
    	//$Myroutes = Events::find($event1);
    	 //$Myroutes->title = $request->input('eventname');
     //$Myroutes->start_date= $request->input('eventname');
     //$Myroutes->end_date = $request->input('eventend');

     Myroutes::where('title', $event1)
                ->update(['title' => $request->input('eventname'),
                         'start_date'=>$request->input('eventname'),
                         'end_date'=>$request->input('eventend')]
                        );

     $Myroutes->save();

    	//$event2=$request->only('eventtime');
    	//$event3=$request->only('eventend');
    	//$user= Events::findOrFail($event1);
    	//dd($event1);
    	 //DB::table('events')
                
            //    ->update(['start_date' =>$request[$event2],
                
              //  'title'=>$request[$event1],
               // 'end_date'=>$request[$event3]
               // ]);
        
         // $user->save();
        return view('edit');
       // echo json_encode(['status' => 'Event has been update']);

    }
}
