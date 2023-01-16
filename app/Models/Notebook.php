<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;
    protected $fillable=['name', 'surname', 'fname', 'company', 'phone', 'email', 'born_date', 'image'];
    protected $guarded = false;
}
