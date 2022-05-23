<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Siswa extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'excerpt', 'body'];
    // $fillable untuk menginput data sekaligus, dengan aturan hanya field tsb yang boleh di isi

    // $guarded, parameter field tsb tidak boleh di isi, sisanya boleh di isi
    protected $guarded = ['id'];

    // with , eager loading untuk memangkas jumlah query (N+1 Problem)
    protected $with = ['author'];

    public function author()
    {
        // belongsTo karena satu Post hanya boleh dimiliki satu User
        return $this->belongsTo(User::class, 'user_id');
    }

    //customizing Route Model Binding
    public function getRouteKeyName()
    {
    return 'nama';
    }
}