<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $messages;

    public function __construct()
    {
        $this->messages = [
            'required' => 'Field ini tidak boleh kosong',
            'string' => 'Value field ini harus berupa text',
            'mimes' => 'Format file tidak diizinkan'
        ];
    }
}
