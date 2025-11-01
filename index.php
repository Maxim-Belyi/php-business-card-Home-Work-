<?php include('templates/header.php'); ?>
<main>
    <section>
        <div data-tabs>
            <div
                    class="tabs__buttons"
                    role="tablist"
                    aria-labelledby="blog-category-title"
            >
                <button
                        class="tabs__button is-active"
                        type="button"
                        id="tab-1"
                        role="tab"
                        aria-controls="tabpannel-1"
                        data-tabs-button
                        aria-selected="true"
                >
                    Стек
                </button>

                <button
                        class="tabs__button"
                        type="button"
                        id="tab-2"
                        role="tab"
                        aria-controls="tabpannel-2"
                        data-tabs-button
                        aria-selected="false"
                        tabindex="-1"
                >
                    Проекты
                </button>

                <button
                        class="tabs__button"
                        type="button"
                        id="tab-3"
                        role="tab"
                        aria-controls="tabpannel-3"
                        data-tabs-button
                        aria-selected="false"
                        tabindex="-1"
                >
                    Любимые игры
                </button>
            </div>

            <div
                    class="stack tabs__content is-active"
                    id="tabpannel-1"
                    role="tabpanel"
                    aria-labelledby="tab-1"
                    tabindex="0"
                    data-tabs-content
            >
                <h2 class="stack__content-title">Технологический стэк</h2>
                <div class="stack__wrapper">
                    <h3 class="stack__list-title">Языки и разметка</h3>
                    <ul class="stack__list">
                        <li class="stack__list-item">
                            <img
                                    src="/icons/html.png"
                                    alt="logo"
                                    width="120"
                                    height="120"
                            />
                            <p>html</p>
                        </li>

                        <li class="stack__list-item">
                            <img
                                    src="/icons/css.png"
                                    alt="logo"
                                    width="120"
                                    height="120"
                            />
                            <p>css</p>
                        </li>

                        <li class="stack__list-item">
                            <img
                                    src="/icons/sass.png"
                                    alt="logo"
                                    width="120"
                                    height="120"
                            />
                            <p>scss</p>
                        </li>

                        <li class="stack__list-item">
                            <img
                                    src="/icons/javascript.png"
                                    alt="logo"
                                    width="120"
                                    height="120"
                            />
                            <p>javascript</p>
                        </li>
                    </ul>
                </div>

                <div class="stack__wrapper">
                    <h3 class="stack__list-title">Инструменты</h3>
                    <ul class="stack__list">
                        <li class="stack__list-item">
                            <img
                                    src="/icons/github.png"
                                    alt="logo"
                                    width="120"
                                    height="120"
                            />
                            <p>github</p>
                        </li>

                        <li class="stack__list-item">
                            <img
                                    src="/icons/vite.png"
                                    alt="logo"
                                    width="120"
                                    height="120"
                            />
                            <p>vite</p>
                        </li>

                        <li class="stack__list-item">
                            <img
                                    src="/icons/npm.png"
                                    alt="logo"
                                    width="120"
                                    height="120"
                            />
                            <p>npm</p>
                        </li>

                        <li class="stack__list-item">
                            <img
                                    src="/icons/git.png"
                                    alt="logo"
                                    width="120"
                                    height="120"
                            />
                            <p>git</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                    class="projects tabs__content"
                    id="tabpannel-2"
                    aria-labelledby="tab-2"
                    role="tabpanel"
                    tabindex="0"
                    data-tabs-content
            >
                <h2 class="projects__content-title">Мои проекты</h2>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="projects__item swiper-slide">
                            <img
                                    src="/images/coffe.avif"
                                    alt="web site image"
                                    loading="lazy"
                            />
                            <a
                                    class="projects__item-link"
                                    href="https://maxim-belyi.github.io/pet_Early_Birds_Coffee/"
                                    target="_blank"
                            >Early birds coffe</a
                            >
                            <p class="projects__item-description">
                                Вёрстка и адаптив одностраничного лендинга, работа с грид
                                сеткой
                            </p>
                        </div>

                        <div class="projects__item swiper-slide">
                            <img
                                    src="/images/honey-bee.avif"
                                    alt="web site image"
                                    loading="lazy"
                            />
                            <a
                                    class="projects__item-link"
                                    href="https://maxim-belyi.github.io/pet_Honey_Bee/"
                                    target="_blank"
                            >Honey Bee</a
                            >
                            <p class="projects__item-description">
                                Вёрстка и адаптив лендинга, работа с aбсолютным
                                позиционированием
                            </p>
                        </div>

                        <div class="projects__item swiper-slide">
                            <img
                                    src="/images/racing-js.avif"
                                    alt="web site image"
                                    loading="lazy"
                            />
                            <a
                                    class="projects__item-link"
                                    href="https://maxim-belyi.github.io/pet_Car-Game/"
                                    target="_blank"
                            >Racing-Js</a
                            >
                            <p class="projects__item-description">
                                Простая игра на JS, сделана по МК с добавлением своих фич и
                                адаптивом
                            </p>
                        </div>

                        <div class="projects__item swiper-slide">
                            <img
                                    src="/images/medieval-times.avif"
                                    alt="web site image"
                                    loading="lazy"
                            />
                            <a
                                    class="projects__item-link"
                                    href="https://maxim-belyi.github.io/medieval-times/index.html"
                                    target="_blank"
                            >Medieval-Times</a
                            >
                            <p class="projects__item-description">
                                Вёрстка многостраничного лендинга со сборщиком Vite и
                                слайдером
                            </p>
                        </div>

                        <div class="projects__item swiper-slide">
                            <img
                                    src="/images/to-do.avif"
                                    alt="web site image"
                                    loading="lazy"
                            />
                            <a
                                    class="projects__item-link"
                                    href="https://maxim-belyi.github.io/to-do/"
                                    target="_blank"
                            >To Do app</a
                            >
                            <p class="projects__item-description">
                                Сайт для управления задачами, задачи сохраняются в local
                                storage
                            </p>
                        </div>
                    </div>
                    <div class="swiper-button swiper-button-prev"></div>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div
                    class="games tabs__content"
                    id="tabpannel-3"
                    aria-labelledby="tab-3"
                    role="tabpanel"
                    tabindex="0"
                    data-tabs-content
            >
                <h2 class="games__content-title">Мои любимые игры</h2>
                <ul class="games__list">
                    <li class="games__item">
                        <h3 class="games__name">Dota 2</h3>
                        <button type="button" class="games__button">
                            Показать описание
                        </button>
                        <img
                                class="games__image"
                                src="/images/games-image/dota2.webp"
                                alt="game image"
                                loading="lazy"
                        />

                        <p class="games__description">
                            Казуальная игра для отдыха после тяжелого рабочего дня,
                            короткие 10-минутные матчи наполнены поддержкой и
                            конструктивными советами от товарищей по команде. Новые
                            игроки легко осваивают простые и интуитивно понятные
                            механики,
                            <span class="title--highlight"
                            >а ветераны всегда рады помочь новичку,</span
                            >
                            даже если он играет за вражескую команду. Вы всегда
                            заканчиваете игровую сессию с чувством умиротворения и
                            высокой самооценкой, а так же узнаёте много нового про своих
                            родственников
                        </p>
                    </li>

                    <li class="games__item">
                        <h3 class="games__name">Total war: Warhammer 3</h3>
                        <button type="button" class="games__button">
                            Показать описание
                        </button>
                        <img
                                class="games__image"
                                src="/images/games-image/tww.webp"
                                alt="game image"
                                loading="lazy"
                        />
                        <p class="games__description">
                            Быстрая и незатейливая игра про раскрашивание карты с
                            <span class="title--highlight">минимум игровых механик</span
                            > специально для новичков, идеально подходящая для того,
                            чтобы расслабиться на 15 минут, кнопка "Авторасчет боя" —
                            ваш лучший друг, который всегда принимает справедливые
                            решения и экономит ваше время. Союзники никогда не предадут
                            вас в самый ответственный момент, а враги терпеливо
                            дожидаются, пока вы подготовите свою экономику и отстроите
                            идеальные армии.
                        </p>
                    </li>

                    <li class="games__item">
                        <h3 class="games__name">Divinity: Original Sin 2</h3>
                        <button type="button" class="games__button">
                            Показать описание
                        </button>
                        <img
                                class="games__image"
                                src="/images/games-image/divinity.webp"
                                alt="game image"
                                loading="lazy"
                        />

                        <p class="games__description">
                            Незабываемое приключение, в котором вы с друзьями
                            <span class="title--highlight">никогда не будете спорить</span>
                            о том, как поступить, простая боевая система, где вы никогда
                            случайно не подожжете всю свою команду, пытаясь вылечить
                            одного союзника. Удобный и минималистичный инвентарь
                            гарантирует, что вы не потратите три часа, пытаясь найти,
                            кто из вас таскает 15 картин, бочку с рыбой и коллекцию
                            отрубленных голов.
                        </p>
                    </li>

                    <li class="games__item">
                        <h3 class="games__name">Baldur's Gate 3</h3>
                        <button type="button" class="games__button">
                            Показать описание
                        </button>
                        <img
                                class="games__image"
                                src="/images/games-image/bg3.webp"
                                alt="game image"
                                loading="lazy"
                        />

                        <p class="games__description">
                            Короткая и линейная история, которую можно пройти за одни
                            выходные, минимальный набор классов и подклассов для
                            персонажей, ваш успех зависит исключительно от вашего
                            мастерства, и <span class="title--highlight">никакие случайные числа не встанут у вас на
                    пути.</span> Все романтические отношения в игре просты, понятны и
                            приводят к абсолютно нормальным и предсказуемым последствиям
                            (особенно с друидом). Вы никогда не будете перезагружаться
                            10 раз подряд, чтобы удачно пройти проверку на убеждение и
                            не начинать бойню в центре города. ПРОСТО ПОТОМУ ЧТО В ЭТОМ
                            НЕТ НУЖДЫ.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php include 'templates/footer.php'; ?>
<script type="module" src="/src/scripts/main.js"></script>
</body>
</html>
