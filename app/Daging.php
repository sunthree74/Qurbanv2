<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daging extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idjenisdaging', 'iduser', 'jumlah', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    public function jenisdaging()
    {
        return $this->belongsTo(JenisDaging::class);
    }
}
