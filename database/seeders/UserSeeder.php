<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run()
  {
    $data = array(
      [
        'name' => 'Administrator',
        'email' => 'admin@example.com',
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('123456789'),
        'phone' => '0',
        'role' => 'a',
        'class_id' => NULL
      ],
      [
        'name' => 'Administrator 2',
        'email' => 'admin2@example.com',
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('123456789'),
        'phone' => '089512345678',
        'role' => 'a',
        'class_id' => NULL
      ],
      [
        'name' => 'Guru',
        'email' => 'guru@example.com',
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('123456789'),
        'phone' => '081234567890',
        'role' => 'g',
        'class_id' => NULL
      ],
      [
        'name' => 'juwita',
        'email' => 'juwita@example.com',
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('123456789'),
        'phone' => '089876543210',
        'role' => 's',
        'class_id' => '1'
      ],
      [
        'name' => 'samto',
        'email' => 'samto@example.com',
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('123456789'),
        'phone' => '089876543211',
        'role' => 's',
        'class_id' => '2'
      ],
      [
        'name' => 'dwi',
        'email' => 'dwi@example.com',
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('123456789'),
        'phone' => '089876543212',
        'role' => 's',
        'class_id' => '3'
      ],
      [
        'name' => 'sofia',
        'email' => 'sofia@example.com',
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('123456789'),
        'phone' => '089876543213',
        'role' => 's',
        'class_id' => '1'
      ],
      [
        'name' => 'taufik',
        'email' => 'taufik@example.com',
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('123456789'),
        'phone' => '089876543214',
        'role' => 's',
        'class_id' => '7'
      ],
      [
        'name' => 'iqbal',
        'email' => 'iqbal@example.com',
        'email_verified_at' => date('Y-m-d H:i:s'),
        'password' => Hash::make('123456789'),
        'phone' => '089876543215',
        'role' => 's',
        'class_id' => '13'
      ],

    );
    foreach ($data as $d) {
      User::create([
        'name' => $d['name'],
        'email' => $d['email'],
        'email_verified_at' => $d['email_verified_at'],
        'phone' => $d['phone'],
        'password' => $d['password'],
        'role' => $d['role'],
        'class_id' => $d['class_id']
      ]);
    }
  }
}
