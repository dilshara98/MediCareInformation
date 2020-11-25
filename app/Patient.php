<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Patient extends Model
{
    use Notifiable;
    protected $table = 'patients';
	public $timestamps = true;

    protected $fillable = [
        'pname', 'pemail', 'pphone', 'paddress', 'pbday', 'poccupation', 'pblood', 'palmedicine' ,'pgender', 'pstatus',
         
    ];
}
