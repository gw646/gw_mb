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
    return auth()->user()->roles[0]->name;
}
function adminDateTime($data){
    return Carbon::parse($data)->format('d-m-Y h:i:s');
}
