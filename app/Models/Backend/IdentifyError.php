<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentifyError extends Model
{
    protected $fillable = [
        'actual_error',
        'from_comm_app',
        'entity_error_point_to',
        'error_description',
        'post_id'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
