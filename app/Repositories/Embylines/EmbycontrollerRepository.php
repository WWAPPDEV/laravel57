<?php

namespace App\Repositories\Embylines;

use App\Models\Embylines\Embycontroller;
use InfyOm\Generator\Common\BaseRepository;

class EmbycontrollerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Embycontroller::class;
    }
}
