<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignData extends Model
{
    const TYPE_ROI = 'ROI';
    const TYPE_CPA = 'CPA';
    
    protected $table = 'campaign_data';
    protected $guarded = ['id'];

}
