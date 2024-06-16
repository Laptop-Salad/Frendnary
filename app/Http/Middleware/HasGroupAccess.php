<?php

namespace App\Http\Middleware;

use App\Models\GroupUser;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class HasGroupAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $group = $request->route('group');

        $user_in_group = GroupUser::where('group_id', $group->id)
            ->where('user_id', auth()->user()->id)->get();

        dump($user_in_group);

        if ($user_in_group->isEmpty()) {
            abort(403);
        }

        return $next($request);
    }
}
