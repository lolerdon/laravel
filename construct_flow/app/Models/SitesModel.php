<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SitesModel extends Model
{
    protected $table = 'sites';
    protected $fillable = ['site_code', 'name', 'city', 'country'];
}
