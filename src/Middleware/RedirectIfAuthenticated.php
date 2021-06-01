<?php namespace Sentrasoft\Cas\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated {

	protected $auth;
	protected $cas;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
		$this->cas = app('cas');
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($this->cas->check())
		{
			return redirect(config('cas.cas_redirect_path'));
		}

		return $next($request);
	}
}
