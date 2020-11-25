<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Contact extends Model
{
    use Notifiable;
    protected $table = 'contacts';
	public $timestamps = true;

    protected $fillable = [
        'cname', 'cemail', 'cphone', 'cmsg',
    ];
}

