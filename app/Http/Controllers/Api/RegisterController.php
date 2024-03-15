<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    public function registrationBoardMembership(Request  $request)
    {
        $this->validate($request,[
            'name'=>['required','max:191'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'file'=>['nullable','max:2048'],
            'registration_expiry'=>['nullable','date'],
            'date_of_first_registration'=>['nullable','date']
        ]);
        \DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->status = 'Active';
            $user->location = $request->location;
            $user->bio = $request->bio;
            $user->languages = $request->languages;
            $user->principal_place_of_practice = $request->principal_place_of_practice;
            $user->qualifications = $request->qualifications;
            $user->registration_number = $request->registration_number;
            $user->registration_expiry = $request->registration_expiry;
            $user->date_of_first_registration = $request->date_of_first_registration;
            $user->profession = $request->profession;
            $user->registration_status = $request->registration_status;
            $user->file = $request->file;
            $user->save();
            $role = Role::firstOrCreate(['name' => REGISTRANTS]);
            $user->assignRole($role);
            \DB::commit();
            return response()->json([
                'status'=>true,
                'msg'=>'User Create successful'
            ]);
        }catch (\Exception $exception){
            \DB::rollBack();
            return response()->json([
                'status'=>false,
                'msg'=>$exception->getMessage()
            ]);
        }
    }
}
