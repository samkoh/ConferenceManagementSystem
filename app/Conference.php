<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model {

    protected $fillable = [
        'user_id',
        'conferenceName',
        'acronym',
        'theme',
        'address',
        'websiteURL',
        'email',
        'contactNo',
        'faxNo',
        'startDate',
        'endDate'
    ];

	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function  topic()
    {
        return $this->belongsToMany('App\Topic')->withTimestamps();
    }

}
