<?php

namespace App\Http\Middleware;

use Closure;
use \App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckpostOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        $post = Task::find($request->post);
        if ($post && $post->user_id == Auth::id()){
        return $next($request);
        }
        abort(403);
    }
}
