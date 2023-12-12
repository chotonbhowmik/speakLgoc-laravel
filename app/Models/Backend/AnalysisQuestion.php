<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalysisQuestion extends Model
{
    use HasFactory;
    public function post()
    {
        return $this->belongsTo(Post::class, 'question', 'id'); // Make sure to specify the correct foreign key column
    }
}
