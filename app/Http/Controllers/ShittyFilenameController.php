<?php

namespace App\Http\Controllers;

use App\Repositories\ShittyFilenameRepository;

class ShittyFilenameController extends Controller
{
    private $repo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ShittyFilenameRepository $repo)
    {
        $this->repo = $repo;
    }

    //
    public function createShittyFilename()
    {
        // formats
        // iPhone camera - IMG_{0-9}+.jpg
        // Cubicle - {report_names}-{camcelCase date}-{random rev}.
        // 
        $filename = $this->repo->create();
        return $filename; 
    }
}
