<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    // Enable mass assigment
    protected $fillable = [
        'seq', 'name', 'description',
        'type', 'url', 'status',
        'image','thumb','created_at', 'updated_at'
    ];

    // Make Carbon instances
    protected $dates = [
        // Any date field names here will be treated as Carbon instances
        // and, therefore, can be formatted as such...nice!
        'published_at'
        // $resource->published_at->format('Y-m-d')

        // created_at and updated_at are already treated as such
    ];

    // Scope functions: basically a 'where' clause function, for criteria one uses frequently
    public function scopePublished($query) {
        // Convention:  'scope' + 'what you want the method to be called'
        // For example:
        $query->where('published_at', '<=', Carbon::now());
        // When used can also pass parameters:
        //      Resource::published($value);
        // Will be invoked as:
        //      scopePublished($query, $value);
    }

    // Mutator functions: when the field is being set the mutator is called to do something in addition
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = mcrypt($password);
        // When the following happens:
        //      $user->password = 'foobar';
        // The user password will be a hashed version of that
    }

    // Relationships: let's say the resource is owned by a user.  On this entity we would
    // have a user object as follows
    //
    public function user() {
        return $this->belongsTo('App\User');
        // When used:
        //      $resource->user     // Uses the user_id to find and load the user
        // The reciprocal also works.  On the user model:
        //      $this->hasMany('App\Resouce');
        //
        //      $user->resources        // Contains all that user's resources
        //
        // With the relationships in place you can also make life easy when writing records:
        //      Auth::user()->resources()->save($resource);     // Will automatically use the right user_id
        //
    }
}
