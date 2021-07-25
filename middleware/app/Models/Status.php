<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Status extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'StatusID';
    public $timestamps = false;
    protected $primaryKey = 'StatusID';

}
