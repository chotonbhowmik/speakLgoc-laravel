<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Other methods and properties...

    /**
     * Get the analyses associated with the post.
     */
    public function analyses()
    {
        return $this->hasMany(Analysis::class);
    }
    public function IdentifyError()
    {
        return $this->hasMany(IdentifyError::class);
    }
}
