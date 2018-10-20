<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
use App\Http\Request;
use App\Http\Controllers\Controller;
/**
 * Description of PagesController
 *
 * @author dmitry
 */
class PagesController extends Controller 
{
    public function getIndex() 
    {
        echo __METHOD__;
    } 
}
