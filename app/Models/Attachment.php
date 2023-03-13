<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename', 'path'
    ];

        
    public function upload($file)
    {
        $filename = $file->getClientOriginalName();
        $path = $file->store('attachments');

        return $this->create([
            'filename' => $filename,
            'path' => $path
        ]);
    }
}
