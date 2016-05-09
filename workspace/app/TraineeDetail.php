<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraineeDetail extends Model
{
    //
    public $primaryKey  = 'traineeId';
    protected $hidden = ['traineeId', 'trainerId', 'hasPlan', 'hasTrainer', 'created_at', 'updated_at'];
    protected $fillable = array('traineeId');
    
    public function user(){
        return $this->belongsTo('App\User', 'userId', 'traineeId');
    }
    
    public function trainer(){
        return $this->belongsTo('App\Trainer', 'trainerId', 'trainerId');
    }
    
    public function plan(){
        return $this->hasOne('App\Plan', 'traineeId', 'traineeId');
    }
}
