<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Buku extends Eloquent
{
    //
    protected $connection ="mongodb";
    protected $collection = "buku";
    protected $fillable = ["Judul Buku","Pengarang","halaman"];
}
