<?php

namespace App\Policies;

use App\Models\User;
use App\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeacherPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin  $admin
     * @return mixed
     */
    public function view(admin $admin)
    {
        //
        return  $this->getPermission($admin,'اظهار المدرس');

    }

    /**
     * Determine whether the user can create admins.
     *
     * @param Admin $admin
     * @return mixed
     */
    public function create(admin $admin)
    {
        //

        return  $this->getPermission($admin,'اضافة المدرس');
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin  $admin
     * @return mixed
     */
    public function update(admin $admin)
    {
        //
        return $this->getPermission($admin,'تعديل المدرس');

    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin  $admin
     * @return mixed
     */
    public function delete(admin $admin)
    {
        //
        return $this->getPermission($admin,'حذف المدرس');

    }
    protected function getPermission($admin,$p_title){
        foreach ($admin->roles as $role){
          
            foreach ($role->permissions as $permission){
                if ($permission->title == $p_title){
                    return true;
                }
            }
        }
        return false;
    }
}
