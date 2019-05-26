<?php

namespace App\Models\Emby;

use Illuminate\Database\Eloquent\Model;



class EmbyUsers extends Model
{

    public $table = 'embyUserss';
    


    public $fillable = [
        'Name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
