<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $group = Role::firstOrCreate(['name'=>ADMIN]);
        $permissions = [
            [
                'groupName'=>'User Groups',
                'permission'=>[
                    [
                        'user_groups.index',
                        'Read'
                    ],
                    [
                        'user_groups.create',
                        'Create'
                    ],
                    [
                        'user_groups.update',
                        'Update'
                    ],
                    [
                        'user_groups.update',
                        'Update'
                    ],
                    [
                        'user_groups.delete',
                        'Delete'
                    ],
                    [
                        'user_groups.access',
                        'Access'
                    ],
                ]
            ],
            [
                'groupName'=>'User Profiles',
                'permission'=>[
                    [
                        'profile.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'Stuff panel',
                'permission'=>[
                    [
                        'stuff-panel.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'Online Payment System',
                'permission'=>[
                    [
                        'online-payment-system.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'Sub Committees',
                'permission'=>[
                    [
                        'sub-committees.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'All Members',
                'permission'=>[
                    [
                        'all-members.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'Polls And Surveys',
                'permission'=>[
                    [
                        'polls-and-survey.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'Articles',
                'permission'=>[
                    [
                        'articles.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'Calendar Of Events',
                'permission'=>[
                    [
                        'calendar-of-events.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'Messages',
                'permission'=>[
                    [
                        'messages.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'CME Management',
                'permission'=>[
                    [
                        'cme-management.index',
                        'Read'
                    ],
                ]
            ],
            [
                'groupName'=>'Settings',
                'permission'=>[
                    [
                        'settings.index',
                        'Read'
                    ],
                ]
            ]
        ];
        for ($i = 0; $i < count($permissions); $i ++){
            $permissionGroup = $permissions[$i]['groupName'];
            for ($j = 0; $j < count($permissions[$i]['permission']);$j++){
                $permission = Permission::firstOrCreate([
                    'name'=>$permissions[$i]['permission'][$j][0],
                    'preview'=>$permissions[$i]['permission'][$j][1],
                    'group_name'=>$permissionGroup
                ]);
                $permission->syncRoles($group);
            }
        }
    }
}
