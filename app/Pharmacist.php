<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pharmacist extends Model
{
    use Notifiable;
    protected $table = 'pharmacists';
	public $timestamps = true;

    protected $fillable = [
        'phname', 'phemail', 'phphone', 
    ];
}
