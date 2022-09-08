<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newcourse extends Model
{
    use HasFactory;
    protected $table="newcourse";
    protected $primaryKey="newcourse_id";
}
