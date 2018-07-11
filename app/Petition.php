<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Petition extends Model
{

    protected $fillable = [
        'template',
        'fantasy_name',
        'name',
        'text',
        'wide',
        'status_id',
        'template',
        'fantasy_name',
        'name',
        'state',
        'municipality',
        'video_url',
        'references',
        'links',
        'sender_name',
        'sender_mail',
        'sender_telephone',
        'submitDate'
    ];

    protected $dates = ['submitDate'];

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

}
