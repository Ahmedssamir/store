<?php

namespace App\Http\Controllers;
use App\User;
use App\UserData;
use App\hospital;
use App\doctors;

use Illuminate\Http\Request;

class Hoscontroller extends Controller
{


    public function api(){

return view('hospital.hospital');


    }
    public function hospital(){

$hos=UserData::select('id','name','email')->get();
return view('hospital.hospital',compact('hos'));


    }

    public function hospital1(){

        $hos=hospital::WhereHas('doctors')->get();
        return view('hospital.doctors',compact('hos'));
        
        
            }


    public function doctors($hospital_id){

        $hoss=UserData::find($hospital_id);
        $doctors=$hoss->doctors;
        return view('hospital.doctors',compact('doctors'));
        
        
            }
/*public function delete($id){
    $hos=UserData::find($id);
    $hos->delete();
    
    if(!$hos) 
    return abort('404');
    
    

}*/
public function  delete($id)
{
    $post = UserData::findOrFail($id);
    $post->delete();
    return redirect()->with(['message'=> 'Successfully deleted!!']);
} 





}
