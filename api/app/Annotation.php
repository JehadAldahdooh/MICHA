<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Annotation extends Model {

    //protected $hidden = array('password');
    protected $fillable = [
        'name', 'email', 'password',
    ];

}




?>