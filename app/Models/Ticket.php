<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Ticket extends Model
{
    protected $table = "tickets";
    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable=[
        'user_id',
        'current_location',
        'service',
        'urgency',
        'asign_to',
        'state',
        'short_description',
        'description',
        'status',
        'date'
    ];

    use HasFactory;
}
