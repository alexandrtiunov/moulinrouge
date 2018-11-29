<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function date(){
        date_default_timezone_set('Europe/Kiev');
        $date = date('d.m.Y');
        $date = strtotime($date . "+1 days");
        $date = date('Y-m-d', $date);

        return $date;
    }
}
