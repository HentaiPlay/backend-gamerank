<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'name'          => 'Minecraft',
                'preview_image' => 'preview.jpg',
                'description'   => 'Minecraft - это инди-игра в жанре песочницы с элементами выживания и открытым миром. По стилю, мир игры полностью состоит из блоков (ландшафт, предметы, мобы, игрок), и для текстурирования используются текстуры с низким разрешением (16×16 текселей). Изначально игра разработана шведским программистом Маркусом Перссоном , известным также как «Notch». Игра была задумана как клон игры Infiniminer, хотя Перссон выражал желание уподобить её геймплей игре Dwarf Fortress. Игра написана на Java с использованием библиотеки LWJGL. Геймплей в игре прост - игроки добывают ресурсы, чтобы строить дома, замки и целые города. Ограничений в Minecraft фактически нет, кроме высоты уровня - в остальном игроки вольны творить все, что пожелают.',
                'slug'          => 'minecraft'
            ],
            [
                'name'          => 'Total War Rome 2',
                'preview_image' => 'preview.jpg',
                'description'   => 'Total War: Rome II - масштабная стратегия на новом движке, который позволит отображать на экаранах игроков десятки тысяч юнитов. Игровой сеттинг отправляет игроков в Древний Рим, продолжая сюжет оригинального Rome: Total War.',
                'slug'          => 'total-war-rome-2'
            ],
            [
                'name'          => 'Warcraft 3',
                'preview_image' => 'preview.jpg',
                'description'   => 'Warcraft 3: The Frozen Throne - это прямое продолжение ролевой стратегии Warcraft III: The Reign of Chaos, в котором игроки возвращаются в мир Азерота, в котором прошло буквально несколько месяцев со времен окончания предыдущей игры. Армия Пылающего Легиона была разбита, и жизнь всех рас начала налаживаться. Ночные эльфы вернулись в чащу Ашенвальского леса, потрепанная в битвах Орда обосновалась в холмах на востоке Калимдора, как и остатки людей. Артас же, ведомый зовом Ледяного Трона, намеревается бросить вызов всему миру, став Королем-Личем и обрушив всю свою ярость на остальные народы.',
                'slug'          => 'warcraft-3'
            ],
            [
                'name'          => 'Creaks',
                'preview_image' => 'preview.jpg',
                'description'   => 'Creaks - это игра от создателей Samorost, Machinarium, Botanicula и Chuchel, выполненная в необычном для студии жанре платформера. Игроков ждет фантастический мир с огромным количеством головоломок и фирменным сюрреалистическим стилем студии.',
                'slug'          => 'creaks'
            ],
            [
                'name'          => 'Total War Warhammer',
                'preview_image' => 'preview.jpg',
                'description'   => 'Total War: Warhammer - это масштабная стратегия от мастеров жанра из Creative Assembly, действие которой разворачивается во вселенной Warhammer Fantasy Battles. Игроки могут выбрать одну из нескольких уникальных рас - Империю, гномов, вампиров, орков или Хаос, чтобы затем сойтись с остальными расами в бесконечной войне, из которой победителем выйти может только одна сторона.',
                'slug'          => 'total-war-warhammer'
            ],
            [
                'name'          => 'Alice Madness Returns',
                'preview_image' => 'preview.jpg',
                'description'   => 'Alice: Madness Returns - очередная вариация на тему приключений Алисы, которые имеют место спустя десять лет после окончания событий оригинала, в котором Алиса изо всех сил пыталась оправиться от эмоциональной травмы полученной вследствие потери всей ее семьи в зареве жуткого пожарища. После десятилетия, проведенного в глухих стенах психушки, девочку берет под свое крыло известный психиатр, обещающий помочь ей избавиться от кошмарных галлюцинаций, которые все еще часто посещают Алису. Алиса предпринимает попытку раскрыть тайну мистической смерти ее семьи, сбежав из мрачного Лондона к аляповатой и богатой на провокации Расчудесии.',
                'slug'          => 'alice-madness-returns'
            ],
            [
                'name'          => 'NHL 2014',
                'preview_image' => 'preview.jpg',
                'description'   => ' NHL 2014 отдает под вашу ответственность самых дорогих игроков Национальной Хоккейной Лиги. Получив в свое распоряжение один из сотен клубов, вы становитесь его полноправным владельцем и тренером команды. Именно от ваших действий на тренировочной площадке и во время матча зависит, покинут подопечные стадион победителями или проигравшими. Грамотно координируйте действия команды, не считайте ворон, и никто не сможет вас одолеть!',
                'slug'          => 'nhl-2014'
            ],
            [
                'name'          => 'Machinarium',
                'preview_image' => 'preview.jpg',
                'description'   => 'Machinarium – это приключенческая игра, в главной роли в которой выступает маленький робот, которого случайно выбрасывают на помойку. Он не хочет мириться с такой судьбой и возвращается в город, чтобы спасти свою подружку из лап бандитов, по чьей вине он и оказался на помойке. Чтобы достичь цели, игроку надо решить массу головоломок и сложить множество паззлов.',
                'slug'          => 'machinarium'
            ],
            [
                'name'          => 'Diablo II',
                'preview_image' => 'preview.jpg',
                'description'   => 'Diablo II - продолжение культового hack slash изометрического экшена, события которого разворачиваются спустя некоторое время после событий оригинальной игры. Рыцарь из Diablo стал новым Воплощением Зла, Темным странником, который отправился к джунглям Кураста в попытках высвободить из заточения Мефисто, воплощение Ненависти. Лучница стала одержима демонами и поселилась на кладбище неподалеку от Монастыря, ну а судьба мага доподлинно неизвестна. В Diablo 2 игрок может выбрать между пятью различными персонажами: некромантом, амазонкой, варваром, волшебницей и паладином. Каждый персонаж имеет свои сильные и слабые стороны.',
                'slug'          => 'diablo-ii'
            ],
            [
                'name'          => 'FIFA 2020',
                'preview_image' => 'preview.jpg',
                'description'   => 'FIFA — серия компьютерных игр в жанре симулятора футбола, которая разрабатывается студией EA Canada, входящей в состав корпорации Electronic Arts. Игры издаются под брендом EA Sports, каждый год выходит новое издание, включающее в себя изменения, произошедшие в футбольном мире за год. Electronic Arts владеет множеством лицензий на использование в игре футбольных лиг разных стран и игроков, выступающих в этих чемпионатах.',
                'slug'          => 'fifa-2020'
            ]
        ]);
    }
}
