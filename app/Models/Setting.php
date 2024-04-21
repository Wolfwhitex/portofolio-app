<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable=[
            "username",
            "name",
            "title",
            "linkedin_url",
            "github_url",
            "insta_url",
            "img_profile",
            "email",
            "phone",
            "fullName",
            "property",
            "languages",
    ];

    protected $casts = [
        'languages' => 'array',
    ];

}
