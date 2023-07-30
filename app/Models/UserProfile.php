<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    protected $fillable = ['title', 'description', 'url', 'image'];  

    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/noIMG.png';
        return '/storage/' . $imagePath;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
