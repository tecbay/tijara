<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tecbay\Laramedia\Models\TemporaryMedia;

class ValidateMedia
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

        $request->validate([
            'medias' => [
                'bail', 'sometimes', 'array', 'bail', 'min:1', function ($key, array $value, $fail) {
                    if (TemporaryMedia::whereIn('uuid', $value)->count() !== count($value)) {
                        $fail('Media not found!');
                    }
                },
            ],
        ]);

        return $next($request);
    }
}
