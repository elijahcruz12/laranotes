<?php

namespace Elijahcruz\Laranote\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $belongs_to_model
 * @property string $belongs_to_id
 * @property string $title
 * @property string|null $body
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Note extends Model
{
    use HasFactory;

    public function owner()
    {
        // Change belongs_to_model to the model name of the class that owns the notes.
        return $this->belongsTo($this->belongs_to_model);
    }

    protected $fillable = [
        'belongs_to_model',
        'belongs_to_id',
        'title',
        'body',
    ];

    protected $casts = [
        'belongs_to_id' => 'string',
        'title' => 'string',
        'body' => 'string',
    ];
}