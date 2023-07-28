<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        if ($user->role->name !== $role) {
            return redirect('/');
        }

        $notifications = $user->unreadNotifications;
        $data['notifications'] = [];
        foreach ($notifications as $index => $notification) {
            $data['notifications'][$index] = [
                'title' => $notification->title,
                'message' => $notification->message,
                'type' => $notification->type,
                'reference_id' => $notification->reference_id,
                'read_at' => $notification->read_at,
            ];
        }

        if ($user->role->name == 'coach') {
            View::share('user', [
                'name' => $user->name,
                'email' => $user->email,
                'phone_number' => $user->phone_number,
                'profile_pic' => $user->profile_pic,
                'created_at' => $user->created_at,
                'social_list' => $user->profile->social_list,
            ]);
        }
        
        View::share('notifications', $data['notifications']);

        return $next($request);
    }
}
