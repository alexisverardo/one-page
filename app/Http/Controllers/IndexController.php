<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 24/04/18
 * Time: 15:59
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}