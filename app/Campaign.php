<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{

    const SOURCE_FILE = 'FILE';
    const SOURCE_ADWORDS = 'ADWORDS';

    protected $table = 'campaign';
    protected $guarded = ['id'];
    
}