<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    //Add any field you want to be able to add to the db
    //when creating a table here
    //or you write Model::unguard() 
    //in the boot fucntion of the AppServiceProvider.php file
    //and then import the Model class if its not imported
    //protected $fillable = ["title", "company", "location", "website", "email", "description", "tags"];

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    //Relationship To User
    public function user() {
        return $this->belongsTo(User::class, "user_id");
    }
}
