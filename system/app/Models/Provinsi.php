<?php 

namespace App\Models;

use App\Models\Traits\Attributes\KategoriAttributes;

class Provinsi extends Model{

	use KategoriAttributes;

	protected $table = 'province';
}