<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSite extends Model
{
    use HasFactory;
    protected $table="webSite" ;
    protected $primaryKey="num_s" ;
}
