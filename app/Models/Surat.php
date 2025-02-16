<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $fillable = ['perusahaan_id', 'template_id', 'nomor_surat', 'up', 'perihal', 'content'];
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }
    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
