<?php

namespace App\Policies;

use App\User;

use App\type;



use Illuminate\Auth\Access\HandlesAuthorization;

class reviewerPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //



    }


    public function view(User $User)
    {
        //
        return $this->getPermission($User,'button_reviewer');
        // return $this->getPermission($admin,'اظهار ادمن');


    }



    protected function getPermission($User,$p_title){

//dd($User->roles);
        foreach ($User->roles as $role){

            foreach ($role->permissions as $permission){

                if ($permission->title == $p_title){
                    return true;
                }
            }
        }
        return false;
    }



}
