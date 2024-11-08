<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PermssionGates
{
   
    public function handle(Request $request, Closure $next)
    {
        // check if use is authenticated or not.
        $user = auth()->user();

        if (!$user) return $next($request);

        $roles = Role::with("permissions")->get();
        $permissionsArray = [];

        foreach ($roles as $role) {
            foreach ($role->permissions as $permissions) {
                $permissionsArray[$permissions->title][] = $role->id;
            }
        }

        // dd($permissionsArray);
        // Every permission may have multiple roles assigned
        foreach ($permissionsArray as $title => $roles) {
            Gate::define($title, function ($user) use ($roles) {
                // needed roles among current user's roles
                return count(array_intersect($user->roles->pluck("id")->toArray(), $roles)) > 0;
            });
        }

        return $next($request);
    }
}
