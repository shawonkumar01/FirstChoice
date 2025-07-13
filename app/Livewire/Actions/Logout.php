<?php

namespace App\Livewire\Actions;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class Logout
{
    /**
     * Log the current user out of the application.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke()
    {
        try {
            Auth::guard('web')->logout();
            
            Session::invalidate();
            Session::regenerateToken();
            
            return redirect()->to('/');
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'logout' => __('Logout failed. Please try again.'),
            ]);
        }
    }
}