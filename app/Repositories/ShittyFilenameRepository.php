<?php

namespace App\Repositories;

use Carbon\Carbon;

class ShittyFilenameRepository
{
    public function __construct() {
        //
    }

    public function create() {
        $shittyFilenames = [
            'ResponseRates_2009_01_39-rev.xlsx',
            'IMG_3320.JPG',
            'ResumeRevised-JH-2013.pdf',
            'DSC39023092332.jpg',
            '2309380202_3209309230984098302934.jpg'
        ];
        return $shittyFilenames[array_rand($shittyFilenames)];
    }
}
