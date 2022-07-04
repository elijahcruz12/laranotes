<?php

namespace Elijahcruz\Laranote;

use Elijahcruz\Laranote\Models\Note;

trait HasNotes
{
    public function notes()
    {
        return Note::where('belongs_to_model', static::class)
            ->where('belongs_to_id', $this->id)
            ->orderBy('created_at', 'desc');
    }

    public function note($id)
    {
        return Note::where('belongs_to_model', static::class)
            ->where('belongs_to_id', $this->id)
            ->where('id', $id)
            ->first();
    }

    public function createNote($title, $body = null)
    {
        return $this->notes()->create([
            'belongs_to_model' => static::class,
            'belongs_to_id' => $this->id,
            'title' => $title,
            'body' => $body,
        ]);
    }

    public function updateNote($id, $title, $body = null)
    {
        return $this->note($id)->update([
            'title' => $title,
            'body' => $body,
        ]);
    }

    public function deleteNote($id)
    {
        return $this->note($id)->delete();
    }

    public function deleteNotes()
    {
        return $this->notes()->delete();
    }
}