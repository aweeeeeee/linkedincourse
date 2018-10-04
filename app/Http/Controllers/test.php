<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title as Title;
class test extends Controller
{
    //
    
    public function __construct( Title $titles ){
        $this->titles = $titles->all();
    }
    
    public function di(){
            dd($this->titles);
    }
}
