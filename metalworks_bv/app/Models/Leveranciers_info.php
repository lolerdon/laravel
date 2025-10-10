<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leveranciers_info extends Model
{

    protected $table = 'leveranciers_info';
    protected $fillable = ['bedrijfsnaam', 'contactpersoon', 'email', 'telefoonnummer', 'adres', 'postcode', 'plaats', 'land', 'kvk_nummer', 'bankrekening'];

}
