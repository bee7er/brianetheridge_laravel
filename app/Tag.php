<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // From here it would be useful to get all the resources that are associated
    // with a given tag.
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function resources() {
        // NB If we are using timestamps on the association table then we have to
        // let Laravel know by invoking the withTimestamps() method
        return $this->belongsToMany('App\Resource')->withTimestamps();
    }
}
