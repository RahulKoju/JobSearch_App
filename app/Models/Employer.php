<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
    // In Employer.php (Model)
    public function getLogoUrlAttribute()
    {
        return Str::startsWith($this->logo, 'http') ? $this->logo : Storage::url($this->logo);
    }
}
