<?php

use Illuminate\Database\Seeder;

class PlayerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'team_id' => 1, 'name' => 'Jermy', 'surname' => 'Lin', 'birth_date' => '1984-06-06 20:21:37',],
            ['id' => 2, 'team_id' => 1, 'name' => 'Trae', 'surname' => 'Young', 'birth_date' => '2018-11-08 20:22:31',],
            ['id' => 3, 'team_id' => 1, 'name' => 'Vince', 'surname' => 'Carter', 'birth_date' => '2018-11-14 20:23:00',],
            ['id' => 4, 'team_id' => 1, 'name' => 'John', 'surname' => 'Collins', 'birth_date' => '2018-11-17 20:23:20',],
            ['id' => 5, 'team_id' => 1, 'name' => 'Taurene', 'surname' => 'Prince', 'birth_date' => '2018-11-29 20:23:44',],
            ['id' => 6, 'team_id' => 2, 'name' => 'Stephen', 'surname' => 'Curry', 'birth_date' => '2018-11-17 20:24:46',],
            ['id' => 7, 'team_id' => 2, 'name' => 'Kevin', 'surname' => 'Durant', 'birth_date' => '2018-11-17 20:25:03',],
            ['id' => 8, 'team_id' => 2, 'name' => 'Draymond', 'surname' => 'Green', 'birth_date' => '2018-11-17 20:25:20',],
            ['id' => 9, 'team_id' => 2, 'name' => 'DeMarcus', 'surname' => 'Cousins', 'birth_date' => '2018-11-17 20:25:48',],
            ['id' => 10, 'team_id' => 2, 'name' => 'Klay', 'surname' => 'thompson', 'birth_date' => '2018-11-17 20:26:17',],

            ['id' => 11, 'team_id' => 3, 'name' => 'Meaaow', 'surname' => 'Lin', 'birth_date' => '1984-06-06 20:21:37',],
            ['id' => 12, 'team_id' => 3, 'name' => 'Tranh', 'surname' => 'Young', 'birth_date' => '2018-11-08 20:22:31',],
            ['id' => 13, 'team_id' => 3, 'name' => 'Sansui', 'surname' => 'Carter', 'birth_date' => '2018-11-14 20:23:00',],
            ['id' => 14, 'team_id' => 3, 'name' => 'Faxl', 'surname' => 'Collins', 'birth_date' => '2018-11-17 20:23:20',],
            ['id' => 15, 'team_id' => 3, 'name' => 'Lovelin', 'surname' => 'Prince', 'birth_date' => '2018-11-29 20:23:44',],
            ['id' => 16, 'team_id' => 4, 'name' => 'Micro', 'surname' => 'Curry', 'birth_date' => '2018-11-17 20:24:46',],
            ['id' => 17, 'team_id' => 4, 'name' => 'YOYO', 'surname' => 'Durant', 'birth_date' => '2018-11-17 20:25:03',],
            ['id' => 18, 'team_id' => 4, 'name' => 'MhMM', 'surname' => 'Green', 'birth_date' => '2018-11-17 20:25:20',],
            ['id' => 19, 'team_id' => 4, 'name' => 'yeah', 'surname' => 'Cousins', 'birth_date' => '2018-11-17 20:25:48',],
            ['id' => 20, 'team_id' => 4, 'name' => 'mphas', 'surname' => 'thompson', 'birth_date' => '2018-11-17 20:26:17',],

        ];

        foreach ($items as $item) {
            \App\Player::create($item);
        }
    }
}
