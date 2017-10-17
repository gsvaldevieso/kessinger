<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckAuthMiddleware {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		if (!Auth::guest()) {
			if (!Auth::user()->isActivated()) {
				Auth::user()    ->activate();
				$request->attributes->add(['activate' => 'true']);
			}
		}

		return $next($request);
	}
}
