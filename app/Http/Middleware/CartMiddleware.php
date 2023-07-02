<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CartMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [];
        }
        session()->put('cart', $cart);
        return $next($request);
    }
}
