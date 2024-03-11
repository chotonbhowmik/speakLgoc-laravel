<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
    protected $table = 'postanalyses';

    protected $fillable = ['post_id', 'content'];
}
