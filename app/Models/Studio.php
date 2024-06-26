<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Studio extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_studio',
        'deskripsi',
        'telepone',
        'sosial',
        'alamat',
        'id_image',
    ];

    public function tempatStudio()
    {
        return $this->belongsTo(tempatStudio::class, 'id');
    }
    public static function rules($id = null) // Optional for update-specific validation
    {
        return [
            'judul' => 'required|string|max:255', // Customize validation rules here
            'image' => 'nullable|string', // Adjust based on image format requirements
        ];
    }

    public function validate($data) // Instance method, not static
    {
        $validator = validator($data, static::rules());

        if ($validator->fails()) {
            throw new ValidationException($validator);  // Throw a ValidationException
        }

        return true; // Or return the validated data if needed
    }
}
