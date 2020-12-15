<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {


        $this->registerPolicies();
        Gate::resource('autherPolicy','App\Policies\autherPolicy');

        Gate::resource('reviewerPolicy','App\Policies\reviewerPolicy');


        Gate::resource('admins','App\Policies\AdminPolicy');
        Gate::resource('roles','App\Policies\RolePolicy');
        Gate::resource('permissions','App\Policies\PermissionPolicy');

        Gate::resource('attendance','App\Policies\AttendancePolicy');
        Gate::resource('user_diractions','App\Policies\user_diractions');
        Gate::resource('education','App\Policies\EducationPolicy');
        Gate::resource('employee','App\Policies\EmployeePolicy');
        Gate::resource('group','App\Policies\GroupPolicy');
        Gate::resource('student','App\Policies\StudentPolicy');
        Gate::define('look','App\Policies\StudentPolicy@look');
        Gate::define('innvoice','App\Policies\StudentPolicy@innvoice');

        Gate::resource('subject','App\Policies\SubjectPolicy');
        Gate::resource('teacher','App\Policies\TeacherPolicy');

        Gate::define('showdata','ahmedpolicy@showdata');

        //
    }
}
