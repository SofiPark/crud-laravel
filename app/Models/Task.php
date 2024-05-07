<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'due_date', 'status'];
}

/*
Sara Sofía Alzate Charry
TCDS
Frameworks NRC: 66988
4to Semestre
Mario Porras
*/ 
