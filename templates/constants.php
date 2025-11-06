<?php
define('USER_NAME', 'Максим');
define('USER_AGE', '33');
define('USER_IMAGE', '/templates/images/me.avif');
define('USER_TELEGRAM', 'https://t.me/the_white_m');
define('USER_EMAIL', 'mailto:btf9458@gmail.com');
define('USER_GITHUB','https://github.com/Maxim-Belyi');

$technologyStack = [
    [
        'title' => 'Языки и разметка',
        'technologies' => [
            [
                'name' => 'HTML',
                'image' => '/templates/icons/html.png',
            ],
            [
                'name' => 'CSS',
                'image' => '/templates/icons/css.png',
            ],
            [
                'name' => 'Javascript',
                'image' => '/templates/icons/javascript.png',
            ],
            [
                'name' => 'Sass',
                'image' => '/templates/icons/sass.png',
            ]
        ]
    ]
];

$socials = [
    [
        'title' => 'Контакты',
        'contacts' => [
            [
                'name' => 'telegram',
                'link' => USER_TELEGRAM,
                'image' => '/templates/icons/telegram.svg'
            ],
            [
                'name' => 'email',
                'link' => USER_EMAIL,
                'image' => '/templates/icons/email.svg'
            ],
            [
                'name' => 'github',
                'link' => USER_GITHUB,
                'image' => '/templates/icons/github.svg'
            ],
        ],
    ]
];

$myProjects = [
    [
        'title' => 'Мои проекты',
        'projects' => [
            [
                'title' => 'Early birds coffee',
                'description' => 'Вёрстка и адаптив одностраничного лендинга, работа с грид сеткой',
                'link' => 'https://maxim-belyi.github.io/pet_Early_Birds_Coffee/',
                'image' => '/templates/images/coffee.avif',
            ],
            [
                'title' => 'Honey Bee',
                'description' => 'Вёрстка и адаптив лендинга, работа с aбсолютным позиционированием',
                'link' => 'https://maxim-belyi.github.io/pet_Honey_Bee/',
                'image' => '/templates/images/honey-bee.avif',
            ],
            [
                'title' => 'Medieval-Times',
                'description' => 'Вёрстка многостраничного лендинга со сборщиком Vite и слайдером',
                'link' => 'https://maxim-belyi.github.io/medieval-times/index.html',
                'image' => '/templates/images/medieval-times.avif',
            ],

            [
                'title' => 'To Do app',
                'description' => 'Сайт для управления задачами, задачи сохраняются в local storage',
                'link' => 'https://maxim-belyi.github.io/to-do/',
                'image' => '/templates/images/to-do.avif',
            ],

            [
                'title' => 'Racing-Js',
                'description' => 'Простая игра на JS, сделана по МК с добавлением своих фич и адаптивом',
                'link' => 'https://maxim-belyi.github.io/pet_Car-Game/',
                'image' => '/templates/images/racing-js.avif',
            ],
        ]
    ]
];

$myFavoriteGames = [

    [
        'title' => 'Dota 2',
        'description' => ' Казуальная игра для отдыха после тяжелого рабочего дня,
            короткие 10-минутные матчи наполнены поддержкой и
            конструктивными советами от товарищей по команде. Новые
            игроки легко осваивают простые и интуитивно понятные
            механики, <span class="title--highlight">а ветераны всегда рады помочь новичку,</span >  даже если он играет за вражескую команду. Вы всегда
            заканчиваете игровую сессию с чувством умиротворения и
            высокой самооценкой, а так же узнаёте много нового про своих
            родственников',
        'image' => '/templates/images/games-image/dota2.webp',
    ],

    [
        'title' => 'Total war: Warhammer 3',
        'description' => ' Быстрая и незатейливая игра про раскрашивание карты с <span class="title--highlight">минимум игровых механик</span
            > специально для новичков, идеально подходящая для того,
            чтобы расслабиться на 15 минут, кнопка \'Авторасчет боя\' —
            ваш лучший друг, который всегда принимает справедливые
            решения и экономит ваше время. Союзники никогда не предадут
            вас в самый ответственный момент, а враги терпеливо
            дожидаются, пока вы подготовите свою экономику и отстроите
            идеальные армии.',
        'image' => '/templates/images/games-image/tww.webp',
    ],

    [
        'title' => 'Divinity: Original Sin 2',
        'description' => '  Незабываемое приключение, в котором вы с друзьями <span class="title--highlight">никогда не будете спорить</span>
            о том, как поступить, простая боевая система, где вы никогда
            случайно не подожжете всю свою команду, пытаясь вылечить
            одного союзника. Удобный и минималистичный инвентарь
            гарантирует, что вы не потратите три часа, пытаясь найти,
            кто из вас таскает 15 картин, бочку с рыбой и коллекцию
            отрубленных голов.',
        'image' => '/templates/images/games-image/divinity.webp',
    ],

    [
        'title' => 'Baldur\'s Gate 3',
        'description' => 'Короткая и линейная история, которую можно пройти за одни
            выходные, минимальный набор классов и подклассов для
            персонажей, ваш успех зависит исключительно от вашего
            мастерства, и <span class="title--highlight">никакие случайные числа не встанут у вас на пути.</span>.
            Все романтические отношения в игре просты, понятны и
            приводят к абсолютно нормальным и предсказуемым. Вы никогда не будете перезагружаться
            10 раз подряд, чтобы удачно пройти проверку на убеждение и
            не начинать бойню в центре города. ПРОСТО ПОТОМУ ЧТО В ЭТОМ
            НЕТ НУЖДЫ.',
        'span' => 'никакие случайные числа не встанут у вас на
                    пути.',
        'image' => '/templates/images/games-image/bg3.webp',
    ],
];
