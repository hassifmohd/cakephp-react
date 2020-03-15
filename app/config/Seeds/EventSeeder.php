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
                'title' => 'Stella Beats In-store performance [1 copy]',
                'image' => 'https://a.sofmap.com/ec/topics/4230/yDmgLeac.jpg',
                'description' => 'The members are five members: Lake Yonemanashi, Misaki Maeda, Takajo Shinho, Tsuyoshi Ogura, Aoi Sato After several member changes since debut, the current structure will be in effect on April 22, 2018.',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Ikeuta Hearts Cool hearts',
                'image' => 'https://a.sofmap.com/ec/topics/4230/QXhY0uEq.jpg',
                'description' => 'Cool Hearts is a Japanese female idol group formed on September 7, 2014. The concept is to have a negative heart converted into a cool heart with songs dance and energy smiles',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'DASH BEATS In-store performance [1 copy]',
                'image' => 'https://a.sofmap.com/ec/topics/4230/2R0acPe4.jpg',
                'description' => 'DASH BEATS team members',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Bomi 1st full album',
                'image' => 'https://a.sofmap.com/ec/topics/4230/1hvWU2Wp.jpg',
                'description' => 'Female idol members',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $events = $this->table('events');
        $events->insert($data)->save();
    }
}
