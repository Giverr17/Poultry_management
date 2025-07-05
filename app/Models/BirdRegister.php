<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BirdRegister extends Model
{
    use Notifiable;

    protected $fillable=[
        'batch_name',
        'bird_details',
    ];

    protected $casts=[
        'bird_details'=>'array'
    ];

    public function vaccinations(){
        return $this->hasMany(Vaccination::class);
    }
}
