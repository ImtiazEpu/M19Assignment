<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostTag extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'post_id',
        'tag_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    protected $casts = [
        'post_id' => 'integer',
        'tag_id'  => 'integer',
    ];

    /**
     * @return BelongsTo
     */

    public function post(): BelongsTo {
        return $this->belongsTo( Post::class );
    }

    /**
     * @return BelongsTo
     */

    public function tag(): BelongsTo {
        return $this->belongsTo( Tag::class );
    }
}
