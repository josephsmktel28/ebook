<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
        'NIS' => 3103120118,
        'NAMA' => 'Joseph Satrio Budi Prasetyo',
        'PHONE' => '081542104956',
        'Class' => 'XII RPL 4'
        ]; 
    }
}
 