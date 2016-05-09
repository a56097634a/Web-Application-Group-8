<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'password', 'isTrainer',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'id', 'created_at', 'updated_at', 'isTrainer',
    ];
    
    public function trainee(){
        return $this->hasOne('App\TraineeDetail', 'traineeId', 'id');
    }
    
    public function trainer(){
        return $this->hasOne('App\Trainer', 'trainerId', 'id');
    }
    
}
