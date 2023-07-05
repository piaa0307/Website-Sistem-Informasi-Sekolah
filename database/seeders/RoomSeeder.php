<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      [
        'id' => 1,
        'title' => 'X IPA 1',
        'year'  => '2022'
      ],
      [
        'id' => 2,
        'title' => 'X IPA 2',
        'year'  => '2022'
      ],
      [
        'id' => 3,
        'title' => 'X IPA 3',
        'year'  => '2022'
      ],
      [
        'id' => 4,
        'title' => 'X IPS 1',
        'year'  => '2022'
      ],
      [
        'id' => 5,
        'title' => 'X IPS 2',
        'year'  => '2022'
      ],
      [
        'id' => 6,
        'title' => 'X IPS 3',
        'year'  => '2022'
      ],
      [
        'id' => 7,
        'title' => 'XI IPA 1',
        'year'  => '2022'
      ],
      [
        'id' => 8,
        'title' => 'XI IPA 2',
        'year'  => '2022'
      ],
      [
        'id' => 9,
        'title' => 'XI IPA 3',
        'year'  => '2022'
      ],
      [
        'id' => 10,
        'title' => 'XI IPS 1',
        'year'  => '2022'
      ],
      [
        'id' => 11,
        'title' => 'XI IPS 2',
        'year'  => '2022'
      ],
      [
        'id' => 12,
        'title' => 'XI IPS 3',
        'year'  => '2022'
      ],
      [
        'id' => 13,
        'title' => 'XII IPA 1',
        'year'  => '2022'
      ],
      [
        'id' => 14,
        'title' => 'XII IPA 2',
        'year'  => '2022'
      ],
      [
        'id' => 15,
        'title' => 'XII IPA 3',
        'year'  => '2022'
      ],
      [
        'id' => 16,
        'title' => 'XII IPS 1',
        'year'  => '2022'
      ],
      [
        'id' => 17,
        'title' => 'XII IPS 2',
        'year'  => '2022'
      ],
      [
        'id' => 18,
        'title' => 'XII IPS 3',
        'year'  => '2022'
      ],
    ];

    foreach ($data as $d) {
      Room::create([
        'id' => $d['id'],
        'title' => $d['title'],
        'year'  => $d['year']
      ]);
    }
  }
}
