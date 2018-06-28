<?php

namespace App\Http\Controllers;

use App\Serie;
use App\Rem;
use Doctrine\DBAL\Event\SchemaEventArgs;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        return view('welcome');

    }

}
