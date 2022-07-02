<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EditorMiddleware
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
        $employ = $request->route('employ');

        if(!$employ->isEditable()){
            
            return redirect('/employees/employers')->with('Error', 'You are not allowed to edit this post');
        }
        return $next($request);
    }
}
