<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'duedate', 'priority', 'tags'];

    public function scopeFilter($query, array $filters, $userTags) {
        if ($filters['tagPriority'] ?? false) {
            $query->where('priority', 'like', '%' . request('tagPriority') . '%');
        }
        if ($filters['tagStatus'] ?? false) {
            $query->where('status', 'like', '%' . request('tagStatus') . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%');
        }
        if ($userTags) {
            $tags = explode(',', $userTags);
            
            $query->where(function ($query) use ($tags) {
                foreach ($tags as $tag) {
                    $query->orWhere('tags', 'like', '%' . $tag . '%');
                }
            });
        }
    }
}
