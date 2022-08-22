<?php
namespace App\View\Components;

use Illuminate\View\Component;

class MultiAuthSwitcher extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.multi_auth_switcher');
    }
}
