<?php

namespace App\Http\Controllers;

use App\Models\invest;
use Illuminate\Http\Request;

class kelolaInvestasiPeternakController extends Controller
{
    
    function index(){
        //
    }


    
    public function store(Request $request){
        $data = $request->except('_token');
        // $data['password'] = Hash::make($data['password']);
     // Handle the profile photo upload
    /* if ($request->hasFile('profile_photo')) {
         $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
         $data['profile_photo'] = $profilePhotoPath;
     }*/
    //   dd($data);
     // Create the user record with both the profile photo path and other data
      invest::create($data);
      return back();
     }

    function destroy($id, $invest_id){
        $investasi = invest::where('user_id', $id)->get()
        ->where('id', $invest_id)
        ->first();
        $investasi->delete();
        // $peternak = User::find($id);
        
        return back();
    }


    public function update($userId, $id, Request $request){
        $data = $request->except('_token');
        
        $investasi = invest::where('user_id', $userId)->get()
        ->where('id', $id)
        ->first();
     
     // dd($request);
     // Create the user record with both the profile photo path and other data
      $investasi -> update($data);
         return back();
     }
}
