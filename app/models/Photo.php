<?php

class Photo extends \Eloquent {
	protected $fillable = [];

    public function likes()
    {
        return $this->belongsToMany('User', 'likes')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}