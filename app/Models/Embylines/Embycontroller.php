<?php

namespace App\Models\Embylines;

use Illuminate\Database\Eloquent\Model;



class Embycontroller extends Model
{

    public $table = 'embycontrollers';
    


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
        'Name' => 'required'
    ];
}
