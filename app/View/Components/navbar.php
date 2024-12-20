<?php

namespace App\View\Components;

use App\Models\UsersPicture;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if(Auth::check()) {
            $filename = UsersPicture::find(Auth::id());
            return view('components.navbar', ['profile_picture' => $filename->filename]);
        }
        else {
            return view('components.navbar');
        }
    }
}
