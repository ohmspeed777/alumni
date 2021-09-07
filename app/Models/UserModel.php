<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'student';
  protected $primaryKey = 'id';
  protected $allowedFields = ['id', 'name', 'email', 'password', 'sex', 'province', 'class', 'tel', 'role', 'facebook', 'line', 'position', 'startDate', 'endDate', 'grade', 'avgGrade', 'gen'];
}
