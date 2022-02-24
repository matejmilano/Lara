<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// php artisan make:model Employee --all
/**
Model created successfully.
Factory created successfully.
Created Migration: 2022_02_24_190924_create_employees_table
Seeder created successfully.
Request created successfully.
Request created successfully.
Controller created successfully.
Policy created successfully.
 */
class Employee extends Model
{
    use HasFactory;
        /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'employeeNumber';
     /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    //public $incrementing = false;
    public $incrementing = true;  
    
    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'int';  //po defaultu je int, pa ovo vjerojatno nije potrebno
    //protected $keyType = 'string';    
}
