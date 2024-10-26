<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function children(){
        return $this->hasMany(Comments::class, 'parent_id')->with('children');
    }
  
}
