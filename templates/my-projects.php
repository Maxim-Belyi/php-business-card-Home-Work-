<?php include('header.php'); ?>
<?php include ('link-wrapper.php'); ?>
    <h2 class="projects__content-title">Мои проекты</h2>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="projects__item swiper-slide">
                <img
                    src="/templates/images/coffe.avif"
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
                    src="/templates/images/honey-bee.avif"
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
                    src="/templates/images/racing-js.avif"
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
                    src="/templates/images/medieval-times.avif"
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
                    src="/templates/images/to-do.avif"
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
<?php include ('footer.php'); ?>
