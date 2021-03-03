<?php
require 'Model.php';

class Karyawan extends Model {
    protected $fields = [
        'id',
        'nama',
        'jk',
        'alamat',
        'umur',
        'jabatan'
    ];
    protected $table = 'tb_karyawan';
}