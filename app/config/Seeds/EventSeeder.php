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
                'title' => 'Stella Beats インストア公演【1部】',
                'image' => 'https://a.sofmap.com/ec/topics/4230/yDmgLeac.jpg',
                'description' => 'メンバーは米満梨湖、前田美咲、新穂貴城、小倉月奏、佐藤葵の5人組。 デビューから数回のメンバーチェンジを経て、2018年4月22日から現在の体制となる。',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Ikeuta Hearts イケてるハーツ',
                'image' => 'https://a.sofmap.com/ec/topics/4230/QXhY0uEq.jpg',
                'description' => 'イケてるハーツは、2014年9月7日に結成された日本の女性アイドルグループである。 コンセプトは「ネガティブなハートを『歌』と『ダンス』と『元気な笑顔』で『イケてるハート』へとポジティブ変換してもらうこと」。',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'DASH BEATS インストア公演【1部】',
                'image' => 'https://a.sofmap.com/ec/topics/4230/2R0acPe4.jpg',
                'description' => 'イケてるハーツは、2014年9月7日に結成された日本の女性アイドルグループである。 コンセプトは「ネガティブなハートを『歌』と『ダンス』と『元気な笑顔』で『イケてるハート』へとポジティブ変換してもらうこと」。',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'ぼみ1stフルアルバム「９」',
                'image' => 'https://a.sofmap.com/ec/topics/4230/1hvWU2Wp.jpg',
                'description' => 'イケてるハーツは、2014年9月7日に結成された日本の女性アイドルグループである。 コンセプトは「ネガティブなハートを『歌』と『ダンス』と『元気な笑顔』で『イケてるハート』へとポジティブ変換してもらうこと」。',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $events = $this->table('events');
        $events->insert($data)->save();
    }
}
