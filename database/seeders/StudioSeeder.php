<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studios')->insert([
            [
                'name'          => 'Sega Games',
                'logo'          => 'sega.png',
                'description'   => 'Sega Games Co., Ltd (ранее — Sega Corporation, Sega Enterprises, Service Games или просто Sega) — международная компания, производящая видеоигры и (до 2001 года) оборудование для них. После реструктуризации компания в основном занимается разработкой и изданием игр для различных игровых платформ.',
                'country'       => 'Япония',
                'slug'          => 'sega-games'
            ],
            [
                'name'          => 'Creative Assembly',
                'logo'          => 'creative-assembly.png',
                'description'   => 'Creative Assembly (официально The Creative Assembly, Ltd., букв. рус. Творческое Собрание) — британская компания-разработчик компьютерных игр, дочерняя компания корпорации Sega. Основана 28 августа 1987 года Тимом Анселлом (англ. Tim Ansell). Компания наиболее известна по серии стратегических компьютерных игр Total War и survival horror игре Alien: Isolation.',
                'country'       => 'Великобритания',
                'slug'          => 'creative-assembly'
            ],
            [
                'name'          => 'Amanita Design',
                'logo'          => 'amanita.jpg',
                'description'   => 'Amanita Design — независимая студия-разработчик видеоигр, расположенная в Чешской Республике в городе Праге. Она была основана в 2003 году Якубом Дворски в его родном городе Брно после того, как он окончил Академию Искусств в Праге с бесплатной онлайн флеш-игрой под названием Samorost, сделанной им для выпускного проекта. В 2005 году Вацлав Блин присоединился к Якубу как аниматор студии, и после был создан Samorost 2. На данный момент в студии работает 26 человек. Помимо компьютерных игр, Amanita Design создала несколько музыкальных видео, веб-сайтов, мультипликаций, иллюстраций, а также занимается производственным дизайном.',
                'country'       => 'Чехия',
                'slug'          => 'amanita-design'
            ],
            [
                'name'          => 'Electronic Arts',
                'logo'          => 'ea-sports.png',
                'description'   => 'Марка основана в 1993 году и является одной из самых успешных и известных марок среди спортивных игр. Марка EA Sports — это аутентичные спортивные симуляторы и официальные лицензионные продукты по самым популярным видам спорта. Студия EA Sports в Ванкувере, Канада, использует современные технологии, как, например, Motion Capturing (захват движения), делающие движения спортсменов в игре максимально реалистичными. Кроме того, студия сотрудничает со многими известными спортсменами со всего мира.',
                'country'       => 'США',
                'slug'          => 'electronic-arts'
            ],
            [
                'name'          => 'Mojang Studios',
                'logo'          => 'mojang.png',
                'description'   => 'Mojang Studios (от швед. mojäng — «штуковина») — компания, занимающаяся разработкой компьютерных игр, принадлежащая Xbox Game Studios. Наиболее известна как разработчик игры Minecraft. Основана в мае 2009 года Маркусом Перссоном. В 2014 году была куплена корпорацией Microsoft за 2,5 миллиарда долларов. Офис компании находится в Стокгольме.',
                'country'       => 'Швеция',
                'slug'          => 'mojang'
            ],
            [
                'name'          => 'Blizzard Entertainment',
                'logo'          => 'blizzard.png',
                'description'   => 'Blizzard Entertainment (сокр. Blizzard) — американский разработчик и издатель компьютерных игр. Компания была основана 8 февраля 1991 года тремя выпускниками Калифорнийского университета в Лос-Анджелесе: Алленом Адамом, Фрэнком Пирсом и Майком Морхеймом. Прежде носила название Silicon & Synapse затем Chaos Studios, а позже стала подразделением издательства Activision Blizzard. Штаб-квартира Blizzard Entertainment расположена в городе Ирвайн, штат Калифорния.',
                'country'       => 'США',
                'slug'          => 'blizzard'
            ]
        ]);
    }
}
