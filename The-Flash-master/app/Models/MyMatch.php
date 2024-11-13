<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyMatch extends Model
{
    use HasFactory;
    protected $table  = 'matches';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'id	',
        'TournamentID',
        'TournamentName	',
        'DateTimeStart',
        'DateTimeEnd',
        'Stadium',
        'TeamA',
        'TeamAFormation',
        'TeamB',
        'TeamBFormation',
        'Score',
        'Type',
        'created_at',
        'updated_at	',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];
}
