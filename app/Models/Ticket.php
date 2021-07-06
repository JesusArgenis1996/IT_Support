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

    public function user()
    {
        return $this->belongsTo(User::class,'asign_to');
    }
    public function createBy()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    use HasFactory;
}
