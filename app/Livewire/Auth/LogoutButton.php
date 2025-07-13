<?php

namespace App\Livewire\Auth;

use App\Livewire\Actions\Logout;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class LogoutButton extends Component
{
    /**
     * Log out the current user
     *
     * @param Logout $logout
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Logout $logout)
    {
        try {
            return $logout();
        } catch (\Exception $e) {
            $this->dispatch('logout-error', message: __('Logout failed. Please try again.'));
            return null;
        }
    }

    public function render(): View
    {
        return view('livewire.auth.logout-button');
    }
}