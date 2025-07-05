<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

class Vaccination extends Model
{
    use Notifiable;

    protected $fillable = [
        'bird_register_id',
        'vaccination_details'
    ];

    protected $casts = ['vaccination_details' => 'array'];


    public function birdRegister()
    {
        return $this->belongsTo(BirdRegister::class);
    }

    public static function formatScheduleStatus($date)
    {
        $scheduled_date = Carbon::parse($date)->toFormattedDayDateString();
        $now = now();
        $daysDiff =  ceil($now->floatDiffInDays($scheduled_date, false));// for rounding down
        $monthsDiff = $now->diffInMonths($scheduled_date, false);
        $yearsDiff = $now->diffInYears($scheduled_date, false);

        return match (true) {
            $daysDiff === 0 => 'Today',
            $daysDiff === 1 => 'Tomorrow',
            $daysDiff > 1 && $daysDiff <= 7 => 'In ' . $daysDiff . ' days',
            $daysDiff > 7 && $monthsDiff === 0 => 'Later this month',
            $monthsDiff === 1 => 'Next month',
            $monthsDiff > 1 && $yearsDiff === 0 => 'In ' . $monthsDiff . ' months',
            $yearsDiff >= 1 => 'In ' . $yearsDiff . ' year' . ($yearsDiff > 1 ? 's' : ''),
            default => 'Future'
        };
    }
}
