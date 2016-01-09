<?php

namespace App\Http\Controllers;

class ShittyFilenameController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function createShittyFilename()
    {
        return "responseRates-12-01-2010.xslx.rev";
    }
}
