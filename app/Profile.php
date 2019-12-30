<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

   
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/lJj4FlvWmhDzoYBQ3LTrrEYi8M1KT64pXf3M68aw.png';
        return '/storage/' . $imagePath;
   
    }


    public function followers()

    {
        return $this->belongsToMany(User::class);
   
    }



    public function user()

    {
        return $this->belongsTo(User::class);
   
    }

}