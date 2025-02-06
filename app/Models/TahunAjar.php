<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($kelas) {
            $activity = class_basename($kelas) . ' ' . $kelas->tingkatan . ' ' . $kelas->kelas;
            $kelas->CreateLog('Creating ' . $activity);
        });

        self::updating(function ($kelas) {
            $activity = class_basename($kelas) . ' ' . $kelas->tingkatan . ' ' . $kelas->kelas;
            $kelas->CreateLog('Updating ' . $activity);
        });
        self::deleting(function ($kelas) {
            $activity = class_basename($kelas) . ' ' . $kelas->tingkatan . ' ' . $kelas->kelas;
            $kelas->CreateLog('Deleting ' . $activity);
        });
    }
}
