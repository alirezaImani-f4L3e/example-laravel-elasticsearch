<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class AuditMongo extends Model
{
    protected $connection = 'mongodb';

    protected $collection = "audits";

    protected $fillable = ["name" , "age"];
}
