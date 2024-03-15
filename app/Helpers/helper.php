<?php
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
function getAdminPermissionGroupBy(){
    $permissionGroup  = Permission::select('group_name')
        ->orderBy('created_at','ASC')
        ->groupBy('group_name')
        ->get();
    return $permissionGroup;
}
function getRoleDropdown($selected = 0){
    $roles = \Spatie\Permission\Models\Role::get();
    $html = '<option value="">Select Role</option>';
    if (!empty($roles)){
        foreach ($roles as $role){
            $html .='<option value="'.$role->id.'"';
            if ($role->id == $selected){
                $html .=' selected ';
            }
            $html .=' >'.ucfirst($role->name).'</option>';
        }
    }
    return $html;
}
function getUserRoleName()
{
    if (!auth()->check()){
        return 'Unknown';
    }
    return auth()->user()->roles[0]->name;
}
function getUserRoleNameByUserId($id = 0)
{
    if (empty($id)){
        return false;
    }
    $user = \App\Models\User::where('id',$id)->first();
    if (empty($user)){
        return false;
    }
    return $user->roles[0]->name;
}
function adminDateTime($data){
    return Carbon::parse($data)->format('d-m-Y h:i:s');
}

function uploadSingleFile($request = null, $path = '', $prefix = ''): string
{
    $file = $request;
    $fileName = $prefix.'_'.time().rand(0000,9999).'.'.$file->getClientOriginalExtension();
    $destination = $path;
    $file->storeAs($destination,$fileName,'public');
    $fileNameWithDestination = $destination . '/'.$fileName;
    return $fileNameWithDestination;
}
