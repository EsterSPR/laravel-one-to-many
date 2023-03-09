<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\Type;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['project_title', 'cover_img','slug','project_desk','type_id'];

    public static function generateSLug($title){
        return Str::slug($title, '-');
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
