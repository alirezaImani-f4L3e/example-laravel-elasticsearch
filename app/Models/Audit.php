<?php

namespace App\Models;

use PDPhilip\Elasticsearch\Eloquent\Model;
/**
* @mixin \Eloquent
*/
class Audit extends Model
{
    protected $connection = 'elasticsearch';

    protected $index = 'audits';

    protected $fillable = ['name'];
}
