<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\Role;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $role = Role::where('slug', 'admin')->first();
        // // dd($role);
        // if ($role->contains('admin')){
        //     return redirect('/admin');
        // }
        return $next($request);
    }
}
