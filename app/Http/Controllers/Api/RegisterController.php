<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ComplaintForm;
use App\Models\User;
use App\Models\UserQuestion;
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
            'file_upload'=>['nullable','max:2048'],
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
            $user->languages = $request->language;
            $user->principal_place_of_practice = $request->principal_place_of_practice;
            $user->qualifications = $request->qualifications;
            $user->registration_number = $request->registration_number;
            $user->registration_expiry = $request->registration_expiry;
            $user->date_of_first_registration = $request->date_of_first_registration;
            $user->profession = $request->profession;
            $user->registration_status = $request->registration_status;
            if ($request->file_upload){
                $user->file = uploadSingleFile($request->file_upload,'attachment');
            }
            $user->save();
            $role = Role::firstOrCreate(['name' => REGISTRANTS]);
            $user->assignRole($role);

            $question = new UserQuestion();
            $question->user_id = $user->id;
            $question->suspended = $request->suspended;
            $question->effectiveDateSuspended = $request->effectiveDateSuspended;
            $question->countrySuspended = $request->countrySuspended;
            $question->stateProvinceSuspended = $request->stateProvinceSuspended;
            $question->medicalBoardSuspended = $request->medicalBoardSuspended;
            $question->reasonForActionSuspended = $request->reasonForActionSuspended;
            $question->denied = $request->denied;
            $question->noticeDateDenied = $request->noticeDateDenied;
            $question->countryDenied = $request->countryDenied;
            $question->stateProvinceDenied = $request->stateProvinceDenied;
            $question->medicalBoardDenied = $request->medicalBoardDenied;
            $question->reasonForDenial = $request->reasonForDenial;
            $question->guilty = $request->guilty;
            $question->decisionDateGuilty = $request->decisionDateGuilty;
            $question->countryGuilty = $request->countryGuilty;
            $question->stateProvinceGuilty = $request->stateProvinceGuilty;
            $question->medicalBoardGuilty = $request->medicalBoardGuilty;
            $question->explanationOfGuilty = $request->explanationOfGuilty;
            $question->investigation = $request->investigation;
            $question->investigationDate = $request->investigationDate;
            $question->countryInvestigation = $request->countryInvestigation;
            $question->stateProvinceInvestigation = $request->stateProvinceInvestigation;
            $question->medicalBoardInvestigation = $request->medicalBoardInvestigation;
            $question->explanationInvestigation = $request->explanationInvestigation;
            $question->review = $request->review;
            $question->reviewDate = $request->reviewDate;
            $question->countryReview = $request->countryReview;
            $question->stateProvinceReview = $request->stateProvinceReview;
            $question->medicalBoardReview = $request->medicalBoardReview;
            $question->explanationReview = $request->explanationReview;
            $question->medicalCouncils1 = $request->medicalCouncils1;
            $question->medicalCouncils2 = $request->medicalCouncils2;
            $question->ethics = $request->ethics;
            $question->save();

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

    public function specialistRegistration(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:191'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'file_upload'=>['nullable','max:2048'],
            'registration_expiry'=>['nullable','date'],
            'date_of_first_registration'=>['nullable','date']
        ]);
        \DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->status = 'Pending';
            $user->location = $request->location;
            $user->bio = $request->bio;
            $user->languages = $request->language;
            $user->principal_place_of_practice = $request->principal_place_of_practice;
            $user->qualifications = $request->qualifications;
            $user->registration_number = $request->registration_number;
            $user->registration_expiry = $request->registration_expiry;
            $user->date_of_first_registration = $request->date_of_first_registration;
            $user->specialist = $request->specialist;
            $user->registration_status = $request->registration_status;
            if ($request->file_upload){
                $user->file = uploadSingleFile($request->file_upload,'attachment');
            }
            $user->save();
            $role = Role::firstOrCreate(['name' => SPECIALIST]);
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

    public function complaintForm(Request  $request)
    {
        $this->validate($request,[
            'incident_date'=>['nullable','date','date_format:Y-m-d'],
            'time'=>['nullable','date_format:H:i'],
            'documents'=>['nullable','max:2048'],
        ]);
        $form = new ComplaintForm();
        $form->complainant_name = $request->complainant_name;
        $form->complainant_address = $request->complainant_address;
        $form->complainant_phone = $request->complainant_phone;
        $form->practitioner_name = $request->practitioner_name;
        $form->practitioner_address = $request->practitioner_address;
        $form->practitioner_phone = $request->practitioner_phone;
        $form->complaint_type = $request->complaint_type;
        $form->incident_details = $request->incident_details;
        $form->incident_date = $request->incident_date;
        $form->time = $request->time;
        if ($request->documents){
            $form->documents = $request->documents;
        }
        $form->save();
        return response()->json([
            'status'=>true,
            'msg'=>'Complaint send successfully'
        ]);
    }
}
