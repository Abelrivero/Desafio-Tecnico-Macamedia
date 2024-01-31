<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Alumno;
use App\Models\Carrera;
use App\Models\CondicionAlumno;
use App\Models\Estado;
use App\Models\Materia;
use App\Models\User;
use App\Policies\AlumnoPolicy;
use App\Policies\CarreraPolicy;
use App\Policies\CondicionalumnoPolicy;
use App\Policies\EstadoPolicy;
use App\Policies\MateriaPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Estado:: class => EstadoPolicy::class,
        Carrera::class => CarreraPolicy::class,
        Materia::class => MateriaPolicy::class,
        Alumno::class => AlumnoPolicy::class,
        CondicionAlumno::class => CondicionalumnoPolicy::class,
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class 
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
