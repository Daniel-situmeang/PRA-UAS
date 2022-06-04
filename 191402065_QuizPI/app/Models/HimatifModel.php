<?php
namespace App\Models;
use CodeIgniter\Model;

class HimatifModel extends Model
{
    protected $table = 'himatif';
    protected $primaryKey = 'id';
    protected $allowedFields = ['divisi', 'jumlah_anggota', 'keterangan_divisi', 'progja_unggulan']; 
    protected $useTimestamps = false; 
}
