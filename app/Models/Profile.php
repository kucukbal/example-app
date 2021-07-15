<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function profileImage(){
        $imagepath=($this->image) ? $this->image : 'profile/NmxpsQTQHPChLEl9oTiinHlzHehri4EWkSQZ8XVZ.png';
        return '/storage/'.$imagepath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
