<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function createAcount()
    {
        return view('create');
    }

    public function storeAccount(Request $request)
    {
        putenv('name=' . $request['name']);
        var_dump(shell_exec('/etc/openvpn-install/newUser1.sh'));
        echo "downloadLink:"."<a href='http://5.152.193.3/".$request['name'].">Download</a>";
    }
}
