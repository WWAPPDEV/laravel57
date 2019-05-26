<?php

namespace App\Repositories\Emby;

use App\Models\Emby\EmbyUsers;
use InfyOm\Generator\Common\BaseRepository;

class EmbyUsersRepository extends BaseRepository
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
        return EmbyUsers::class;
    }
}
