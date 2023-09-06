<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KelolaPeternakController extends Controller
{
    public function index(){
        $peternak = User::paginate(1);
        return view('mykelolapeternak', compact(['peternak']));
    }
    
    public function detail($id){
        $peternak = User::find($id);
        return view('mydetailkelolauser', compact(['peternak']));
    }

    public function store(Request $request){
       $data = $request->except('_token');

    // Handle the profile photo upload
    if ($request->hasFile('profile_photo')) {
        $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
        $data['profile_photo'] = $profilePhotoPath;
    }
    // dd($request);
    // Create the user record with both the profile photo path and other data
     User::create($data);
        return redirect('/kelolapeternak');
    }

    function destroy($id){
        $peternak = User::find($id);
        $peternak->delete();
        return redirect('/kelolapeternak');
    }

    public function update($id, Request $request){
        $data = $request->except('_token');
        $peternak = User::find($id);
     // Handle the profile photo upload
     if ($request->hasFile('profile_photo')) {
         $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
         $data['profile_photo'] = $profilePhotoPath;
     }
     // dd($request);
     // Create the user record with both the profile photo path and other data
      $peternak -> update($data);
         return redirect('/kelolapeternak');
     }
}
