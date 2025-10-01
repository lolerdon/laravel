<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsModel extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name', 'project_code', 'status', 'start_date'];
}
