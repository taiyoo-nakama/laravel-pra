<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MyTable extends Model
{
    use HasFactory;
    protected $table = 'MyTable';
    protected $guarded = array('id');
    public $timestamps = false;
}
