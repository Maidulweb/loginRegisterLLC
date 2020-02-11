<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function errormsg ($msg)
    {
        session()->flash('message', $msg);
        session()->flash('type', 'danger');
    }
    public function successmsg ($msg)
    {
        session()->flash('message', $msg);
        session()->flash('type', 'success');
    }
}
