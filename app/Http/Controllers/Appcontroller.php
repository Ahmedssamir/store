<?php

  

namespace App\Http\Controllers;
use App\scheduler;
use App\doctors;
use App\Http\Requests\schedulerrquest;
use Illuminate\Http\Request;
class Appcontroller extends Controller

{

    public function index()

    {

      $apps = scheduler::latest()->paginate(5);

  

        return view('scheduler.index',compact('apps'))

        ->with('i', (request()->input('page', 1) - 1) * 5)  ;

    }

   

    
    public function create()

    {

        return view('scheduler.create');

    }

  

    
    public function store(schedulerrquest $request)
    {
         
       scheduler::create([
            
            'day'=>$request->day,
            'time'=>$request->time,
            'price'=>$request->price,
            
            ]);
            return redirect()->route('apps.index')->with('success','you are success');
        }
          
   

    

    public function show($scheduler_id)
    {
      $ddd=scheduler::find($scheduler_id);
      $dd=$ddd->doctors;
      return $dd;
    }
   


    public function edit($id)
    {   
        $scheduler=array('id' => $id);
        $data['product_info'] = scheduler::where($scheduler)->first();
 
        return view('scheduler.edit', $data);
    }
  

    

    public function update(schedulerrquest $request,$id)

   {
   
    
    $scheduler = ['day' => $request->day, 
    
    'time' => $request->time, 
    'price' => $request->price
];
    scheduler::where('id',$id)->update($scheduler);

    return redirect()->route('apps.index')->with('success','you are success');
}

    

    public function destroy($id)

    { 
        $scheduler=scheduler::find($id);

        $scheduler->delete();
        return redirect()->route('apps.index')

                        ->with('success','time deleted successfully');

    }
}