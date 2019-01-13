<?php

use Phinx\Seed\AbstractSeed;

class EventSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Food Truck Challenge',
                'image' => 'http://res.cloudinary.com/hksqkdlah/image/upload/w_1200,h_630,c_fill/ATK%20Food%20Truck/CAN_ATKFoodTruck_5391_23x9',
                'description' => 'Sample great food, collaborate, and compete!',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Master Chef',
                'image' => 'http://www.3qrecruitment.ie/wp-content/uploads/2018/06/why-you-should-be-a-chef-in-dublin-by-three-q-recruitment-for-catering-780x430.jpg',
                'description' => 'Who will be the best php cake chef in the world?',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $events = $this->table('events');
        $events->insert($data)->save();
    }
}
