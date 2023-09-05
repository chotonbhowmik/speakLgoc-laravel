<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalysisQuestion extends Model
{
    use HasFactory;
    public function heading()
    {
        return $this->belongsTo(Post::class, 'id'); // Make sure to specify the correct foreign key column
    }
}
