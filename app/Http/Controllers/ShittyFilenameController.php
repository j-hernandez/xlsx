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
        // formats
        // iPhone camera - IMG_{0-9}+.jpg
        // Cubicle - {report_names}-{camcelCase date}-{random rev}.
        // 
        return "responseRates-12-01-2010.xslx.rev";
    }
}
