<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newguide extends Model
{
    use HasFactory;
    protected $table="newguide";
    protected $primaryKey="newguide_id";
}
