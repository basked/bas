<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_active'];

    public function statuses(){
        return $this->belongsToMany(Status::class, 'pivot_statuses', 'current_status_id','next_status_id')->withPivot(['id','next_status_id', 'access']);
    }
}
