<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/templates/assets/main-Df5nSMHR.css">
    <title>Giga School</title>
</head>

<body>

    <?php
    require_once "constants.php";
    ?>

    <header>
        <section class="hero">
            <div class="hero__ellipse" aria-hidden="true">
                <svg
                    width="760"
                    height="325"
                    viewBox="0 0 629 675"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_101_460)">
                        <path
                            d="M197.187 473.805C292.282 467.548 354.347 432.446 414.715 350.776C537.011 185.329 -177.514 132.772 -78.0045 314.534C-15.2616 429.139 75.7205 481.796 197.187 473.805Z"
                            fill="white"
                            fill-opacity="0.18" />
                    </g>
                    <defs>
                        <filter
                            id="filter0_f_101_460"
                            x="-287.545"
                            y="0.353516"
                            width="916.391"
                            height="674.24"
                            filterUnits="userSpaceOnUse"
                            color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend
                                mode="normal"
                                in="SourceGraphic"
                                in2="BackgroundImageFix"
                                result="shape" />
                            <feGaussianBlur
                                stdDeviation="100"
                                result="effect1_foregroundBlur_101_460" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="hero__description">
                <h1 class="hero__title">
                    Привет, меня зовут
                    <span class="hero__title title--highlight"><?= $userName; ?>!</span>
                </h1>
                <p class="hero__about">
                    Мне <?= $userAge; ?> года, в свободное от работы время я занимаюсь разработкой
                </p>
                <p class="hero__interests">
                    В свободное от разработки и работы время я хожу в зал, играю в комп
                    и хожу в горы
                </p>
            </div>
            <img
                class="hero__image"
                src=<?= $userImage; ?>
                alt="my photo"
                width="432"
                height="535" />
        </section>
    </header>