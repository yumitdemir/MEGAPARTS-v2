<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEGAPARTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>

    <script defer src="../node_modules/gsap/dist/gsap.min.js"></script>
    <script defer src="../node_modules/gsap/dist/ScrollTrigger.min.js"></script>

    <link rel="stylesheet" href="swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="style.css">
    <script defer src="app.js"></script>
    <link rel="stylesheet" href="output.css">


</head>
<body>
<nav class="bg-nav-primary py-[19px] ">
    <div class=" container ps-[11px] pe-[12px] mx-auto flex items-center justify-between whitespace-nowrap ">
        <!--   Mobile     -->
        <img class=" lg:hidden cursor-pointer "
             src="../assets/nav/Megaparts-Logo-Light-Large.svg"
             alt="">
        <img class="lg:hidden w-[24px] h-[18px] cursor-pointer" src="/assets/nav/hamburger-vector.svg" alt="">
        <div class="hidden lg:flex cursor-pointer ">
            <img class=" pe-[25px] border-e border-nav-primary-light" src="../assets/nav/Megaparts-Logo-Light-Large.svg"
                 alt="">
            <img class="ps-[20px] pe-[10px]" src="../assets/nav/MEGACARS-Text.svg" alt="">
            <img src="../assets/nav/MEGA-Bulgarian-Text.svg" alt="">
        </div>
        <div class="hidden lg:flex  cursor-pointer">
            <div class="flex px-[20px] gap-[10px] border-e border-nav-primary-light items-center">
                <img src="../assets/nav/Comment-Vector.svg" alt="">


                <button type="button" data-bs-toggle="modal" data-bs-target="#cart-modal"
                        class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white rounded-lg  ">
                    <img class="min-w-[18px]" src="../assets/nav/Basket-Vector.svg" alt="">
                    <div id="basket-count"
                         class="absolute inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-[6px] -right-[4px] ">
                        <?php
                        echo count($_SESSION['cart_session'])
                        ?>
                    </div>
                </button>
                <div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="cart-modal">Checkout</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div id="cart-modal-body" class="modal-body flex flex-col gap-[15px]">
                                <?php
                                foreach ($_SESSION['cart_session'] as $item) {
                                    $name = htmlspecialchars($item['name']);
                                    $price = htmlspecialchars($item['price']);

                                    echo '<div class="flex justify-between items-center">
                                         <p class="text-xl">' . $name . '</p>
                                         <p class="text-xl text-accent-green">' . $price . '</p>
                                        </div>';
                                }
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn ">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="../assets/nav/Heart-Vector.svg" alt="">
            </div>
            <div class="flex px-[20px]  border-e border-nav-primary-light font-bold gap-[10px] text-[20px] items-center text-white">
                <img src="../assets/nav/user-vector.svg" alt="">
                <p>ВХОД</p>
            </div>
            <div class=" hidden lg:flex   px-[20px] border-e border-white ">
                <img src="../assets/nav/youtube-facebook-icon-vector.svg" alt="">
            </div>
            <div class="hidden lg:flex  px-[20px] text-white text-[20px] gap-[5px] items-center">
                <img src="../assets/nav/phone-vector.svg" alt="">
                <p>02 437 32 48</p>
            </div>
        </div>
    </div>
</nav>

<nav class="bg-nav-secondary pt-[6px] mb-[-2px] ">
    <div class="container mx-auto relative ">
        <div id="second-nav" class="flex  gap-[5px]  ps-[11px] pe-[12px] ">
            <div class="w-fit h-[43px] align-top flex justify-center items-center px-[5px] ">
                <img id="scroll-back-btn" class=" rotate-180 cursor-pointer text-white w-[14px]   h-[14px]"
                     src="/assets/nav/arrow-right-vector.svg" alt="">
            </div>
            <div id="nav-badge-scroll-wrapper" class="scroll-bar-x  flex gap-[8px]  overflow-x-scroll linear-gradiant">
                <div class="flex flex-col gap-[12px]">
                    <div class="badge flex-col nav-badge bg-primary-blue w-full ">
                        <img src="/assets/nav/home-vector.svg" alt="">
                    </div>
                    <img class="ms-[12px] w-[18px] h-[15px]  " src="/assets/nav/Pointer.svg" alt="">
                </div>

                <div class="badge bg-primary-blue nav-badge ">
                    <img src="/assets/nav/gear-vector.svg" alt="">
                    <p>АВТОЧАСТИ</p>
                </div>
                <div class="badge bg-accent-green nav-badge">
                    <img src="/assets/nav/market-vector.svg" alt="">
                    <p>БОРСА ЧАСТИ</p>
                </div>
                <div class="badge nav-badge bg-accent-light-blue ">
                    <img src="/assets/nav/market-vector.svg" alt="">
                    <p>АВТОБОРСА</p>
                </div>

                <div class="badge nav-badge bg-accent-flame ">
                    <img src="/assets/nav/steering-wheel-vector.svg" alt="">
                    <p>ПРОДАВА КОЛИ</p>
                </div>
                <div class="badge nav-badge bg-accent-orange ">
                    <img src="/assets/nav/gear-vector.svg" alt="">
                    <p>ПРОДАВА ЧАСТИ</p>
                </div>
                <div class="badge nav-badge bg-accent-orange ">
                    <img src="/assets/nav/game-controller-vector.svg" alt="">
                    <p>ИГРИ</p>
                </div>
                <div class="badge nav-badge bg-accent-orange ">
                    <img src="/assets/nav/heart-health.svg" alt="">
                    <p>ЗАСТРАХОВКИ </p>
                </div>
                <div class="badge nav-badge bg-accent-orange ">
                    <img src="/assets/nav/heart-health.svg" alt="">
                    <p>test </p>
                </div>
                <div class="badge nav-badge bg-accent-orange ">
                    <img src="/assets/nav/heart-health.svg" alt="">
                    <p>test </p>
                </div>
                <div class="badge nav-badge bg-accent-orange ">
                    <img src="/assets/nav/heart-health.svg" alt="">
                    <p>test </p>
                </div>
                <div class="badge nav-badge bg-accent-orange ">
                    <img src="/assets/nav/heart-health.svg" alt="">
                    <p>test </p>
                </div>

            </div>
            <div class="w-fit h-[43px] align-top flex justify-center items-center">
                <img id="scroll-forward-btn" class=" cursor-pointer text-white w-[12px]  h-[12px]"
                     src="/assets/nav/arrow-right-vector.svg" alt="">
            </div>

        </div>

    </div>
</nav>

<div class="bg-primary-blue pt-[25px] py-[25px]">
    <div class="container mx-auto ps-[11px] pe-[12px] ">
        <div id="quick-search" class="w-full bg-white px-[25px] py-[20px] flex flex-col gap-[25px] rounded-[15px]">
            <div class="flex gap-[15px] items-center">
                <img class="w-[18px] h-[18px]" src="/assets/quick-search/magnifying-glass-vector.svg" alt="">
                <p class="text-nav-primary text-[26px] font-bold ">Бързо търсене</p>
            </div>
            <div class="flex justify-between gap-[5px]">
                <input placeholder="Търсете на Част, марка, категория, обява или др."
                       class="w-full focus:outline-2 outline-primary-blue px-[25px] py-[16px] border border-primary-blue rounded-[25px]"
                       type="text">
                <div class="flex items-center gap-[5px]">
                    <img class="w-[12px] h-[13px] lg:hidden " src="/assets/quick-search/settings-vector.svg" alt="">
                    <button class=" md:text-[26px] hover:bg-opacity-80 text-white bg-primary-blue font-roboto px-[15px] py-[5px] rounded-[25px] font-medium">
                        Търсене
                    </button>
                </div>
            </div>
            <div class="hidden lg:flex gap-[10px]">
                <div class="badge  hover:bg-opacity-80 bg-primary-blue font-bold text-[18px] text-white">
                    <p>Всичко</p>
                </div>
                <div class="badge hover:bg-primary-blue quick-search-badge border-primary-blue">
                    <p>Авточасти</p>
                </div>
                <div class="badge quick-search-badge hover:bg-accent-green  border-accent-green">
                    <p>Борса Части</p>
                </div>
                <div class="badge quick-search-badge hover:bg-accent-light-blue border-accent-light-blue">
                    <p>Автоборса</p>
                </div>
                <div class="badge quick-search-badge hover:bg-accent-flame border-accent-flame">
                    <p>Продава Коли</p>
                </div>
                <div class="badge quick-search-badge hover:bg-accent-orange  border-accent-orange">
                    <p>Продава Части</p>
                </div>
            </div>
        </div>
    </div>
</div>
<img class="min-h-[140px] max-h-[300px] w-full object-cover  " src="/assets/hero-img.png" alt="">
<div class="container mx-auto flex flex-col justify-center items-center lg:flex-row w-full gap-[23px] px-[16px] pt-[14px] pb-[25px] ">
    <div class="flex gap-[15px] justify-start w-full transport-animate ">
        <img class="w-[56px] h-[50px]" src="../assets/delivery-info/truck-vector.svg" alt="">
        <div class="flex flex-col gap-[8px] text-[13px]">
            <p class="font-bold text-primary-text ">Експресна доставка</p>
            <p class="text-primary-text-light">Доставяме до всяка точка на България.</p>
        </div>
    </div>
    <div class="flex gap-[15px]  flex-row-reverse lg:flex-row justify-start text-end lg:text-start w-full transport-animate">
        <img class="w-[56px] h-[50px]" src="../assets/delivery-info/boxes-vector.svg" alt="">
        <div class="flex flex-col gap-[8px] text-[13px]">
            <p class="font-bold text-primary-text ">Нови части всеки ден</p>
            <p class="text-primary-text-light">Ежедневно зареждаме нова стока.</p>
        </div>
    </div>
    <div class="flex gap-[15px] justify-start w-full transport-animate">
        <img class="w-[56px] h-[50px]" src="../assets/delivery-info/box-vector.svg" alt="">
        <div class="flex flex-col gap-[8px] text-[13px]">
            <p class="font-bold text-primary-text ">Проверено качество</p>
            <p class="text-primary-text-light">Авточасти с гаранция.</p>
        </div>
    </div>
    <div class="flex gap-[15px]  flex-row-reverse lg:flex-row justify-start text-end lg:text-start w-full transport-animate">
        <img class="w-[56px] h-[50px]" src="../assets/delivery-info/gear-vector.svg" alt="">
        <div class="flex flex-col gap-[8px] text-[13px]">
            <p class="font-bold text-primary-text ">Право на връщане</p>
            <p class="text-primary-text-light">14 дни право на връщане на всяка поръчка</p>
        </div>
    </div>
</div>
<div id="add-cart-cards"
     class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 items-center justify-center container mx-auto my-4 left-appear-animation">
</div>

<div class="container mx-auto px-[12px] flex flex-col lg:flex-row ">
    <div class="card-category bg-primary-blue gap-[25px] w-full lg:w-fit left-appear-animation">
        <div class="flex-col flex items-center">
            <img src="/assets/category-card/gear-vector.svg" class="w-[32px] h-[32px]" alt="">
            <p class="text-[26px]">Авточасти</p>
        </div>
        <p class="text-center text-[16px]  w-[241px]">Най-големия онлайн магазин за авточасти в България!</p>
        <button class="flex bg-white px-[15px] py-[5px] justify-between text-primary-blue rounded-[25px] items-center gap-[15px]">
            Разгледай
            <img src="/assets/category-card/arrow-right-blue.svg" class="w-[13px] h-[7px]" alt="">
        </button>
    </div>
    <div class="mt-[25px] lg:mt-0 flex flex-col lg:overflow-x-hidden right-appear-animation ">
        <p class="ml-[30px] mb-[6px] text-primary-text font-bold">Специални предложения:</p>
        <div class="flex gap-[5px] items-center">
            <div class="w-fit h-[43px] align-top flex justify-center items-center">
                <img id="scroll-back-btn-offer" class=" rotate-180 cursor-pointer min-w-[22px]  h-[16px]"
                     src="/assets/item-card/arrow-right-blue.svg" alt="">
            </div>
            <div id="offers-scroll-wrapper"
                 class="scroll-bar-x    gap-[8px] lg:gap-[32px] j flex  overflow-x-scroll linear-gradiant">
                <div class="item-card">
                    <img class="item-img" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                    <div class="flex  justify-between items-center">
                        <p class="item-no">Кат. №: s_167232784</p>
                        <p class="item-price">967.70 лв.</p>
                    </div>
                </div>
                <div class="item-card">
                    <img class="item-img" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                    <div class="flex  justify-between items-center">
                        <p class="item-no">Кат. №: s_167232784</p>
                        <p class="item-price">967.70 лв.</p>
                    </div>
                </div>
                <div class="item-card">
                    <img class="item-img" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                    <div class="flex  justify-between items-center">
                        <p class="item-no">Кат. №: s_167232784</p>
                        <p class="item-price">967.70 лв.</p>
                    </div>
                </div>
                <div class="item-card">
                    <img class="item-img" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                    <div class="flex  justify-between items-center">
                        <p class="item-no">Кат. №: s_167232784</p>
                        <p class="item-price">967.70 лв.</p>
                    </div>
                </div>
                <div class="item-card">
                    <img class="item-img" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                    <div class="flex  justify-between items-center">
                        <p class="item-no">Кат. №: s_167232784</p>
                        <p class="item-price">967.70 лв.</p>
                    </div>
                </div>
                <div class="item-card">
                    <img class="item-img" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                    <div class="flex  justify-between items-center">
                        <p class="item-no">Кат. №: s_167232784</p>
                        <p class="item-price">967.70 лв.</p>
                    </div>
                </div>
                <div class="item-card">
                    <img class="item-img" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                    <div class="flex  justify-between items-center">
                        <p class="item-no">Кат. №: s_167232784</p>
                        <p class="item-price">967.70 лв.</p>
                    </div>
                </div>
            </div>
            <div class="w-fit h-[43px] align-top flex justify-center items-center">
                <img id="scroll-forward-btn-offer" class=" cursor-pointer text-white min-w-[22px] h-[16px]"
                     src="/assets/item-card/arrow-right-blue.svg" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-[12px] flex flex-col gap-[32px]  justify-start w-full lg:flex-row-reverse mt-[25px] lg:mt-[80px]">
    <div class="card-category bg-accent-green gap-[25px] w-full lg:w-fit  right-appear-animation ">
        <div class="flex-col flex items-center">
            <img src="/assets/category-card/market-vector.svg" class="w-[32px] h-[32px]" alt="">
            <p class="text-[26px]">Борса части</p>
        </div>
        <p class="text-center text-[16px]  w-[241px]">Най-голямата борса за авточасти в България!</p>
        <button class="flex bg-white px-[15px] py-[5px] justify-between text-accent-green rounded-[25px] items-center gap-[15px]">
            Разгледай
            <img src="/assets/category-card/arrow-right-green.svg" class="w-[13px] h-[7px]" alt="">
        </button>
    </div>
    <div class="mt-[25px] lg:mt-0 flex flex-col lg:overflow-x-hidden w-full left-appear-animation">
        <p class="text-primary-text font-bold">Специални предложения:</p>
        <div class="flex gap-[5px] items-center w-full">

            <div id="latest-offers-scroll-wrapper"
                 class="scroll-bar-x   flex gap-[8px] lg:gap-[32px] justify-start  overflow-x-scroll linear-gradiant w-full">
                <div class="item-card">
                    <img class="item-img green" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">КУПУВАМ Фар за Audi A5 Coupe I (06.2007 - 01.2017)</p>

                </div>
                <div class="item-card">
                    <img class="item-img green" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">ОФЕРТА ЗА Фар за Audi A5 Coupe I (06.2007 - 01.2017)</p>

                </div>
                <div class="item-card">
                    <img class="item-img green" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">КУПУВАМ Фар за Audi A5 Coupe I (06.2007 - 01.2017)</p>

                </div>
                <div class="item-card">
                    <img class="item-img green" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>

                </div>
                <div class="item-card">
                    <img class="item-img green" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>

                </div>
                <div class="item-card">
                    <img class="item-img green" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>

                </div>
                <div class="item-card">
                    <img class="item-img green" src="/assets/item-card/item-1.png" alt="">
                    <p class="item-title">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>

                </div>
            </div>

        </div>

    </div>
</div>
<div class="flex flex-col lg:flex-row  mx-auto container gap-[32px] lg:gap-[3px] justify-between lg:justify-between overflow-x-scroll w-full  px-[12px] mt-[32px] scroll-bar-x">
    <div class="card-category bg-accent-light-blue gap-[25px] w-full lg:w-fit left-appear-animation">
        <div class="flex-col flex items-center">
            <img src="/assets/category-card/car-vector.svg" class="w-[32px] h-[32px]" alt="">
            <p class="text-[26px]">Автоборса</p>
        </div>
        <p class="text-center text-[16px]  w-[241px]">Залагане, търгуване и продаване на автомобили.</p>
        <button class="flex bg-white px-[15px] py-[5px] justify-between text-accent-light-blue rounded-[25px] items-center gap-[15px]">
            Разгледай
            <img src="/assets/category-card/arrow-right-light-blue.svg" class="w-[13px] h-[7px]" alt="">
        </button>
    </div>
    <div class="card-category bg-accent-flame gap-[25px] w-full lg:w-fit left-appear-animation">
        <div class="flex-col flex items-center">
            <img src="/assets/category-card/stering-wheel.svg" class="w-[32px] h-[32px]" alt="">
            <p class="text-[26px]">Продава коли</p>
        </div>
        <p class="text-center text-[16px]  w-[241px]">Обяви за коли.
            Част от <span class="font-bold">MEGACARS</span>.</p>
        <div class="flex flex-col gap-[10px]">
            <button class="flex bg-white px-[15px] py-[5px] justify-between text-accent-flame rounded-[25px] items-center gap-[15px]">
                Разгледай
                <img src="/assets/category-card/arrow-right-flame.svg" class="w-[13px] h-[7px]" alt="">
            </button>
            <button class="flex text-white font-bold  items-center gap-[5px]">
                Към MEGACARS
                <img src="/assets/category-card/arrow-right-white.svg" class="w-[13px] h-[7px]" alt="">
            </button>
        </div>
    </div>

    <div class="card-category bg-accent-orange gap-[25px] w-full lg:w-fit right-appear-animation">
        <div class="flex-col flex items-center">
            <img src="/assets/category-card/gear-vector.svg" class="w-[32px] h-[32px]" alt="">
            <p class="text-[26px]">Продава части</p>
        </div>
        <p class="text-center text-[16px]  w-[241px]">Обяви за части.
            Част от <span class="font-bold">MEGAОБЯВИ</span>.</p>

        <div class="flex flex-col gap-[10px]">

            <button class="flex bg-white px-[15px] py-[5px] justify-between text-accent-orange rounded-[25px] items-center gap-[15px]">
                Разгледай
                <img src="/assets/category-card/arrow-right-orange.svg" class="w-[13px] h-[7px]" alt="">
            </button>
            <button class="flex text-white font-bold items-center gap-[5px]">
                Към MEGAОБЯВИ
                <img src="/assets/category-card/arrow-right-white.svg" class="w-[13px] h-[7px]" alt="">
            </button>
        </div>
    </div>
    <div class="card-category bg-accent-purple gap-[25px] w-full lg:w-fit right-appear-animation">
        <div class="flex-col flex items-center">
            <img src="/assets/category-card/game_controller.svg" class="w-[32px] h-[32px]" alt="">
            <p class="text-[26px]">Игри</p>
        </div>
        <p class="text-center text-[16px]  w-[241px]">Забавления за ценители.</p>
        <button class="flex bg-white px-[15px] py-[5px] justify-between text-accent-purple rounded-[25px] items-center gap-[15px]">
            Разгледай
            <img src="/assets/category-card/arrow-right-purple.svg" class="w-[13px] h-[7px]" alt="">
        </button>
    </div>
</div>

<div class="flex flex-col lg:flex-row  mx-auto container gap-[32px] lg:gap-[3px] justify-between lg:justify-between overflow-x-scroll w-full  px-[12px] mt-[32px] whitespace-nowrap scroll-bar-x">
    <div class="flex flex-col gap-[8px] lg:gap-[32px] border-2 border-accent-flame rounded-[25px] items-center p-[15px] left-appear-animation">
        <div class="flex gap-[10px] w-min-[241px] w-[241px] ">
            <img src="/assets/outline-badges/heart-vector.svg" alt="">
            <p class="text-accent-flame ">Застраховки</p>
        </div>
        <p class="text-primary-text-light">Застраховай автомобила си.</p>
    </div>
    <div class="flex flex-col   gap-[10px] border-2 border-accent-green rounded-[25px] items-center p-[15px] left-appear-animation">
        <div class="flex gap-[10px] w-min-[241px] w-[241px]  ">
            <img src="/assets/outline-badges/coin-vector.svg" alt="">
            <p class="text-accent-green">Кредити</p>
        </div>
        <p class="text-primary-text-light"><span class="font-bold font-roboto">MEGA</span> в нужда се познава.</p>
    </div>
    <div class="flex flex-col   gap-[10px] border-2 border-primary-blue  rounded-[25px] items-center p-[15px] right-appear-animation">
        <div class="flex gap-[10px] w-min-[241px] w-[241px] ">
            <img src="/assets/outline-badges/bookmark-vector.svg" alt="">
            <p class="text-primary-blue">Автодневник</p>
        </div>
        <p class="text-primary-text-light">Твоят автодневник.</p>
    </div>
    <div class="flex flex-col    gap-[10px] border-2 border-primary-blue  rounded-[25px] items-center p-[15px] right-appear-animation">
        <div class="flex gap-[10px] w-min-[241px] w-[241px] ">
            <img src="/assets/outline-badges/article-vector.svg" alt="">
            <p class="text-primary-blue">Новини</p>
        </div>
        <p class="text-primary-text-light">Всичко в света на колите.</p>
    </div>

</div>


<div class="swiper mySwiper container px-[12px] mt-[87px]">
    <div class="swiper-wrapper  ">
        <div class="swiper-slide flex flex-col items-center  justify-center gap-[20px] w-[150px]">
            <div class="justify-center items-center flex mb-[15px]">
                <img src="../assets/reviews/“.svg" class="w-[29px] h-[26px]" alt=>

            </div>

            <div class="flex items-center justify-center mb-[10px]">
                <p class="text-center  font-[500] font-roboto main-text ">Доволен съм от поръчаните до момента
                    авточасти.
                    Хубаво е
                    да Ви има на пазара с авточасти, защото иначе
                    автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък пазар на
                    части
                    втора употреба. Благодаря!</p>
            </div>
            <div class="flex items-center justify-center">
                <img src="../assets/reviews/Ellipse%2019.svg" alt="">
                <div class="flex flex-col justify-between ">
                    <p class="font-bold font-roboto text-primary-blue">Мартин Илиев</p>
                    <div class="flex gap-[5px] justify-center">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide flex flex-col items-center  justify-center gap-[20px] w-[150px]">
            <div class="justify-center items-center flex mb-[15px]">
                <img src="../assets/reviews/“.svg" class="w-[29px] h-[26px]" alt=>

            </div>

            <div class="flex items-center justify-center mb-[10px]">
                <p class="text-center  font-[500] font-roboto main-text ">Доволен съм от поръчаните до момента
                    авточасти.
                    Хубаво е
                    да Ви има на пазара с авточасти, защото иначе
                    автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък пазар на
                    части
                    втора употреба. Благодаря!</p>
            </div>
            <div class="flex items-center justify-center">
                <img src="../assets/reviews/Ellipse%2019.svg" alt="">
                <div class="flex flex-col justify-between ">
                    <p class="font-bold font-roboto text-primary-blue">Мартин Илиев</p>
                    <div class="flex gap-[5px] justify-center">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide flex flex-col items-center  justify-center gap-[20px] w-[150px]">
            <div class="justify-center items-center flex mb-[15px]">
                <img src="../assets/reviews/“.svg" class="w-[29px] h-[26px]" alt=>

            </div>

            <div class="flex items-center justify-center mb-[10px]">
                <p class="text-center  font-[500] font-roboto main-text ">Доволен съм от поръчаните до момента
                    авточасти.
                    Хубаво е
                    да Ви има на пазара с авточасти, защото иначе
                    автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък пазар на
                    части
                    втора употреба. Благодаря!</p>
            </div>
            <div class="flex items-center justify-center">
                <img src="../assets/reviews/Ellipse%2019.svg" alt="">
                <div class="flex flex-col justify-between ">
                    <p class="font-bold font-roboto text-primary-blue">Мартин Илиев</p>
                    <div class="flex gap-[5px] justify-center">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                        <img src="../assets/reviews/star.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<div class="relative w-max-[1179px] h-max-[687px] h-full mx-auto  flex justify-center items-center  mt-[100px]">
    <svg class="absolute" viewBox="0 0 1179 687" fill="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <filter id="filter0_d_240_2037" x="0.849609" y="0.811432" width="97.8516" height="105.087" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset/>
                <feGaussianBlur stdDeviation="10"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_240_2037"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_240_2037" result="shape"/>
            </filter>
            <linearGradient id="paint0_linear_240_1967" x1="345.754" y1="49.506" x2="49.2439" y2="49.5059" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1, 0, 0, 1, 145.882719, 217.378982)">
                <stop stop-color="#008AEE"/>
                <stop offset="1" stop-color="#006DBB"/>
            </linearGradient>
            <filter id="filter0_d_240_1967" x="0.24646" y="0.922073" width="97.8516" height="105.087" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset/>
                <feGaussianBlur stdDeviation="10"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_240_1967"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_240_1967" result="shape"/>
            </filter>
            <linearGradient id="paint0_linear_240_2024" x1="0.847047" y1="49.3174" x2="297.357" y2="49.3174" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1, 0, 0, 1, 546.220284, 132.444933)">
                <stop stop-color="#008AEE"/>
                <stop offset="1" stop-color="#006DBB"/>
            </linearGradient>
            <filter id="filter0_d_240_2024" x="248.431" y="0.73349" width="97.8516" height="105.087" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset/>
                <feGaussianBlur stdDeviation="10"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_240_2024"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_240_2024" result="shape"/>
            </filter>
        </defs>

        <g id="sofia-open" class="opacity-0 " transform="matrix(1, 0, 0, 1, 0, 7.105427357601002e-15)">
            <path d="M 195.127 238.312 L 463.064 238.312 C 478.844 238.312 491.637 251.104 491.637 266.885 C 491.637 282.665 478.844 295.458 463.064 295.458 L 195.127 295.458 L 195.127 238.312 Z" fill="url(#paint0_linear_240_1967)"/>
            <path d="M 239.344 251.259 L 241.576 251.259 L 244.863 260.654 L 248.151 251.259 L 250.383 251.259 L 245.76 264.056 L 243.967 264.056 L 239.344 251.259 Z M 238.14 251.259 L 240.363 251.259 L 240.768 260.417 L 240.768 264.056 L 238.14 264.056 L 238.14 251.259 Z M 249.364 251.259 L 251.596 251.259 L 251.596 264.056 L 248.959 264.056 L 248.959 260.417 L 249.364 251.259 Z M 262.494 261.999 L 262.494 264.056 L 255.683 264.056 L 255.683 261.999 L 262.494 261.999 Z M 256.544 251.259 L 256.544 264.056 L 253.908 264.056 L 253.908 251.259 L 256.544 251.259 Z M 261.607 256.471 L 261.607 258.475 L 255.683 258.475 L 255.683 256.471 L 261.607 256.471 Z M 262.486 251.259 L 262.486 253.324 L 255.683 253.324 L 255.683 251.259 L 262.486 251.259 Z M 274.175 257.367 L 274.175 262.439 C 273.976 262.679 273.668 262.94 273.252 263.221 C 272.836 263.496 272.3 263.733 271.644 263.933 C 270.988 264.132 270.194 264.232 269.262 264.232 C 268.436 264.232 267.683 264.097 267.003 263.827 C 266.324 263.552 265.738 263.15 265.245 262.623 C 264.759 262.096 264.384 261.451 264.12 260.69 C 263.857 259.922 263.725 259.046 263.725 258.062 L 263.725 257.262 C 263.725 256.277 263.851 255.401 264.103 254.634 C 264.361 253.866 264.727 253.219 265.201 252.691 C 265.676 252.164 266.242 251.763 266.898 251.487 C 267.554 251.212 268.284 251.074 269.086 251.074 C 270.2 251.074 271.114 251.256 271.828 251.619 C 272.543 251.977 273.088 252.475 273.463 253.113 C 273.844 253.746 274.078 254.473 274.166 255.293 L 271.609 255.293 C 271.544 254.859 271.421 254.482 271.24 254.159 C 271.058 253.837 270.797 253.585 270.457 253.403 C 270.123 253.222 269.69 253.131 269.157 253.131 C 268.717 253.131 268.325 253.222 267.979 253.403 C 267.639 253.579 267.352 253.84 267.117 254.186 C 266.883 254.531 266.704 254.959 266.581 255.469 C 266.458 255.979 266.397 256.57 266.397 257.244 L 266.397 258.062 C 266.397 258.73 266.461 259.321 266.59 259.837 C 266.719 260.347 266.909 260.777 267.161 261.129 C 267.419 261.475 267.736 261.735 268.111 261.911 C 268.486 262.087 268.922 262.175 269.42 262.175 C 269.836 262.175 270.182 262.14 270.457 262.069 C 270.739 261.999 270.964 261.914 271.134 261.815 C 271.31 261.709 271.445 261.609 271.538 261.516 L 271.538 259.248 L 269.13 259.248 L 269.13 257.367 L 274.175 257.367 Z M 281.505 253.447 L 278.025 264.056 L 275.221 264.056 L 279.976 251.259 L 281.76 251.259 L 281.505 253.447 Z M 284.397 264.056 L 280.908 253.447 L 280.626 251.259 L 282.428 251.259 L 287.209 264.056 L 284.397 264.056 Z M 284.239 259.292 L 284.239 261.358 L 277.48 261.358 L 277.48 259.292 L 284.239 259.292 Z M 293.379 259.494 L 290.118 259.494 L 290.118 257.438 L 293.379 257.438 C 293.883 257.438 294.293 257.356 294.61 257.191 C 294.926 257.022 295.158 256.787 295.304 256.488 C 295.451 256.19 295.524 255.853 295.524 255.478 C 295.524 255.097 295.451 254.742 295.304 254.414 C 295.158 254.086 294.926 253.822 294.61 253.623 C 294.293 253.424 293.883 253.324 293.379 253.324 L 291.033 253.324 L 291.033 264.056 L 288.396 264.056 L 288.396 251.259 L 293.379 251.259 C 294.381 251.259 295.24 251.441 295.954 251.804 C 296.675 252.161 297.226 252.656 297.607 253.289 C 297.988 253.922 298.178 254.646 298.178 255.46 C 298.178 256.286 297.988 257.001 297.607 257.605 C 297.226 258.208 296.675 258.674 295.954 259.002 C 295.24 259.33 294.381 259.494 293.379 259.494 Z M 303.742 253.447 L 300.261 264.056 L 297.457 264.056 L 302.212 251.259 L 303.996 251.259 L 303.742 253.447 Z M 306.633 264.056 L 303.144 253.447 L 302.863 251.259 L 304.664 251.259 L 309.446 264.056 L 306.633 264.056 Z M 306.475 259.292 L 306.475 261.358 L 299.716 261.358 L 299.716 259.292 L 306.475 259.292 Z M 310.632 251.259 L 315.405 251.259 C 316.383 251.259 317.224 251.405 317.927 251.698 C 318.636 251.991 319.181 252.425 319.562 252.999 C 319.943 253.573 320.133 254.279 320.133 255.117 C 320.133 255.803 320.016 256.392 319.782 256.884 C 319.553 257.37 319.228 257.777 318.806 258.106 C 318.39 258.428 317.901 258.686 317.338 258.879 L 316.503 259.318 L 312.355 259.318 L 312.337 257.262 L 315.422 257.262 C 315.885 257.262 316.269 257.18 316.574 257.016 C 316.878 256.852 317.107 256.623 317.259 256.33 C 317.417 256.037 317.496 255.697 317.496 255.311 C 317.496 254.9 317.42 254.546 317.268 254.247 C 317.116 253.948 316.884 253.72 316.574 253.562 C 316.263 253.403 315.873 253.324 315.405 253.324 L 313.269 253.324 L 313.269 264.056 L 310.632 264.056 L 310.632 251.259 Z M 317.786 264.056 L 314.868 258.352 L 317.655 258.334 L 320.608 263.933 L 320.608 264.056 L 317.786 264.056 Z M 327.358 251.259 L 327.358 264.056 L 324.73 264.056 L 324.73 251.259 L 327.358 251.259 Z M 331.295 251.259 L 331.295 253.324 L 320.854 253.324 L 320.854 251.259 L 331.295 251.259 Z M 339.32 260.707 C 339.32 260.479 339.284 260.274 339.214 260.092 C 339.15 259.904 339.027 259.734 338.845 259.582 C 338.663 259.424 338.409 259.269 338.08 259.116 C 337.752 258.964 337.327 258.806 336.806 258.642 C 336.226 258.454 335.675 258.243 335.154 258.009 C 334.638 257.774 334.181 257.502 333.783 257.191 C 333.39 256.875 333.079 256.509 332.851 256.093 C 332.628 255.677 332.517 255.193 332.517 254.643 C 332.517 254.109 332.634 253.626 332.868 253.192 C 333.103 252.753 333.431 252.378 333.853 252.067 C 334.275 251.751 334.773 251.508 335.347 251.338 C 335.927 251.168 336.563 251.083 337.254 251.083 C 338.198 251.083 339.021 251.253 339.724 251.593 C 340.427 251.933 340.972 252.399 341.359 252.99 C 341.751 253.582 341.948 254.259 341.948 255.021 L 339.328 255.021 C 339.328 254.646 339.249 254.317 339.091 254.036 C 338.939 253.749 338.704 253.524 338.388 253.359 C 338.077 253.195 337.685 253.113 337.21 253.113 C 336.753 253.113 336.372 253.184 336.068 253.324 C 335.763 253.459 335.534 253.644 335.382 253.878 C 335.23 254.107 335.154 254.364 335.154 254.651 C 335.154 254.868 335.206 255.065 335.312 255.24 C 335.423 255.416 335.587 255.58 335.804 255.733 C 336.021 255.885 336.287 256.028 336.604 256.163 C 336.92 256.298 337.286 256.43 337.702 256.559 C 338.4 256.77 339.012 257.007 339.539 257.271 C 340.073 257.534 340.518 257.83 340.875 258.158 C 341.233 258.486 341.502 258.858 341.684 259.274 C 341.866 259.691 341.956 260.162 341.956 260.69 C 341.956 261.246 341.848 261.744 341.631 262.184 C 341.414 262.623 341.101 262.995 340.691 263.3 C 340.281 263.605 339.791 263.836 339.223 263.994 C 338.655 264.152 338.019 264.232 337.316 264.232 C 336.683 264.232 336.059 264.149 335.444 263.985 C 334.828 263.816 334.269 263.561 333.765 263.221 C 333.267 262.881 332.868 262.447 332.57 261.92 C 332.271 261.393 332.121 260.769 332.121 260.048 L 334.767 260.048 C 334.767 260.446 334.828 260.783 334.951 261.059 C 335.075 261.334 335.247 261.557 335.47 261.727 C 335.699 261.897 335.968 262.02 336.279 262.096 C 336.595 262.172 336.941 262.21 337.316 262.21 C 337.773 262.21 338.148 262.146 338.441 262.017 C 338.74 261.888 338.959 261.709 339.1 261.481 C 339.246 261.252 339.32 260.994 339.32 260.707 Z M 354.894 260.707 C 354.894 260.479 354.859 260.274 354.788 260.092 C 354.724 259.904 354.601 259.734 354.419 259.582 C 354.238 259.424 353.983 259.269 353.655 259.116 C 353.326 258.964 352.902 258.806 352.38 258.642 C 351.8 258.454 351.249 258.243 350.728 258.009 C 350.212 257.774 349.755 257.502 349.357 257.191 C 348.964 256.875 348.654 256.509 348.425 256.093 C 348.202 255.677 348.091 255.193 348.091 254.643 C 348.091 254.109 348.208 253.626 348.443 253.192 C 348.677 252.753 349.005 252.378 349.427 252.067 C 349.849 251.751 350.347 251.508 350.921 251.338 C 351.501 251.168 352.137 251.083 352.828 251.083 C 353.772 251.083 354.595 251.253 355.298 251.593 C 356.001 251.933 356.546 252.399 356.933 252.99 C 357.326 253.582 357.522 254.259 357.522 255.021 L 354.903 255.021 C 354.903 254.646 354.824 254.317 354.665 254.036 C 354.513 253.749 354.279 253.524 353.962 253.359 C 353.652 253.195 353.259 253.113 352.784 253.113 C 352.327 253.113 351.947 253.184 351.642 253.324 C 351.337 253.459 351.109 253.644 350.956 253.878 C 350.804 254.107 350.728 254.364 350.728 254.651 C 350.728 254.868 350.781 255.065 350.886 255.24 C 350.997 255.416 351.161 255.58 351.378 255.733 C 351.595 255.885 351.862 256.028 352.178 256.163 C 352.494 256.298 352.861 256.43 353.277 256.559 C 353.974 256.77 354.586 257.007 355.114 257.271 C 355.647 257.534 356.092 257.83 356.45 258.158 C 356.807 258.486 357.076 258.858 357.258 259.274 C 357.44 259.691 357.531 260.162 357.531 260.69 C 357.531 261.246 357.422 261.744 357.205 262.184 C 356.989 262.623 356.675 262.995 356.265 263.3 C 355.855 263.605 355.366 263.836 354.797 263.994 C 354.229 264.152 353.593 264.232 352.89 264.232 C 352.257 264.232 351.633 264.149 351.018 263.985 C 350.403 263.816 349.843 263.561 349.339 263.221 C 348.841 262.881 348.443 262.447 348.144 261.92 C 347.845 261.393 347.696 260.769 347.696 260.048 L 350.341 260.048 C 350.341 260.446 350.403 260.783 350.526 261.059 C 350.649 261.334 350.822 261.557 351.044 261.727 C 351.273 261.897 351.542 262.02 351.853 262.096 C 352.169 262.172 352.515 262.21 352.89 262.21 C 353.347 262.21 353.722 262.146 354.015 262.017 C 354.314 261.888 354.534 261.709 354.674 261.481 C 354.821 261.252 354.894 260.994 354.894 260.707 Z M 358.761 259.398 L 358.761 259.213 C 358.761 258.516 358.861 257.874 359.06 257.288 C 359.259 256.696 359.549 256.184 359.93 255.75 C 360.311 255.316 360.78 254.98 361.336 254.739 C 361.893 254.493 362.532 254.37 363.252 254.37 C 363.973 254.37 364.615 254.493 365.177 254.739 C 365.74 254.98 366.211 255.316 366.592 255.75 C 366.979 256.184 367.272 256.696 367.471 257.288 C 367.67 257.874 367.77 258.516 367.77 259.213 L 367.77 259.398 C 367.77 260.089 367.67 260.731 367.471 261.322 C 367.272 261.908 366.979 262.421 366.592 262.86 C 366.211 263.294 365.742 263.631 365.186 263.871 C 364.629 264.111 363.991 264.232 363.27 264.232 C 362.549 264.232 361.908 264.111 361.345 263.871 C 360.788 263.631 360.317 263.294 359.93 262.86 C 359.549 262.421 359.259 261.908 359.06 261.322 C 358.861 260.731 358.761 260.089 358.761 259.398 Z M 361.292 259.213 L 361.292 259.398 C 361.292 259.796 361.327 260.168 361.398 260.514 C 361.468 260.859 361.579 261.164 361.732 261.428 C 361.89 261.686 362.095 261.888 362.347 262.034 C 362.599 262.181 362.907 262.254 363.27 262.254 C 363.621 262.254 363.923 262.181 364.175 262.034 C 364.427 261.888 364.629 261.686 364.782 261.428 C 364.934 261.164 365.045 260.859 365.116 260.514 C 365.192 260.168 365.23 259.796 365.23 259.398 L 365.23 259.213 C 365.23 258.826 365.192 258.463 365.116 258.123 C 365.045 257.777 364.931 257.473 364.773 257.209 C 364.62 256.94 364.418 256.729 364.166 256.576 C 363.914 256.424 363.61 256.348 363.252 256.348 C 362.895 256.348 362.59 256.424 362.338 256.576 C 362.092 256.729 361.89 256.94 361.732 257.209 C 361.579 257.473 361.468 257.777 361.398 258.123 C 361.327 258.463 361.292 258.826 361.292 259.213 Z M 372.49 264.056 L 369.95 264.056 L 369.95 254.115 C 369.95 253.307 370.114 252.624 370.442 252.067 C 370.776 251.511 371.25 251.089 371.866 250.802 C 372.487 250.515 373.237 250.371 374.116 250.371 C 374.614 250.371 375.097 250.421 375.566 250.521 C 376.034 250.614 376.518 250.737 377.016 250.89 L 376.647 252.92 C 376.325 252.82 375.979 252.727 375.61 252.639 C 375.241 252.551 374.795 252.507 374.274 252.507 C 373.688 252.507 373.242 252.645 372.938 252.92 C 372.639 253.19 372.49 253.588 372.49 254.115 L 372.49 264.056 Z M 374.379 254.546 L 374.379 256.339 L 368.534 256.339 L 368.534 254.546 L 374.379 254.546 Z M 378.194 254.546 L 378.194 264.056 L 375.654 264.056 L 375.654 254.546 L 378.194 254.546 Z M 385.445 261.911 L 385.445 257.675 C 385.445 257.37 385.395 257.109 385.295 256.893 C 385.196 256.67 385.04 256.497 384.829 256.374 C 384.624 256.251 384.358 256.19 384.03 256.19 C 383.748 256.19 383.505 256.239 383.3 256.339 C 383.095 256.433 382.937 256.57 382.826 256.752 C 382.714 256.928 382.659 257.136 382.659 257.376 L 380.127 257.376 C 380.127 256.972 380.221 256.588 380.409 256.225 C 380.596 255.861 380.868 255.542 381.226 255.267 C 381.583 254.985 382.008 254.766 382.5 254.608 C 382.998 254.449 383.555 254.37 384.17 254.37 C 384.909 254.37 385.565 254.493 386.139 254.739 C 386.713 254.985 387.164 255.355 387.492 255.847 C 387.826 256.339 387.993 256.954 387.993 257.692 L 387.993 261.762 C 387.993 262.283 388.026 262.711 388.09 263.045 C 388.155 263.373 388.248 263.66 388.371 263.906 L 388.371 264.056 L 385.814 264.056 C 385.691 263.798 385.597 263.476 385.533 263.089 C 385.474 262.696 385.445 262.304 385.445 261.911 Z M 385.779 258.264 L 385.796 259.696 L 384.381 259.696 C 384.047 259.696 383.757 259.734 383.511 259.811 C 383.265 259.887 383.063 259.995 382.905 260.136 C 382.746 260.271 382.629 260.429 382.553 260.61 C 382.483 260.792 382.448 260.991 382.448 261.208 C 382.448 261.425 382.497 261.621 382.597 261.797 C 382.697 261.967 382.84 262.102 383.028 262.201 C 383.215 262.295 383.435 262.342 383.687 262.342 C 384.068 262.342 384.399 262.266 384.68 262.113 C 384.961 261.961 385.178 261.774 385.33 261.551 C 385.489 261.328 385.571 261.117 385.576 260.918 L 386.244 261.99 C 386.151 262.231 386.022 262.48 385.858 262.737 C 385.7 262.995 385.497 263.238 385.251 263.467 C 385.005 263.69 384.709 263.874 384.364 264.021 C 384.018 264.161 383.608 264.232 383.133 264.232 C 382.53 264.232 381.982 264.111 381.49 263.871 C 381.003 263.625 380.617 263.288 380.329 262.86 C 380.048 262.427 379.908 261.935 379.908 261.384 C 379.908 260.886 380.001 260.443 380.189 260.057 C 380.376 259.67 380.652 259.345 381.015 259.081 C 381.384 258.812 381.844 258.609 382.395 258.475 C 382.946 258.334 383.584 258.264 384.311 258.264 L 385.779 258.264 Z" fill="white"/>
            <path d="M 240.419 282.476 L 242.716 274.945 L 244.732 274.945 L 241.341 284.687 C 241.263 284.895 241.161 285.122 241.036 285.366 C 240.911 285.611 240.747 285.843 240.544 286.062 C 240.346 286.286 240.099 286.465 239.802 286.601 C 239.505 286.741 239.146 286.812 238.724 286.812 C 238.557 286.812 238.396 286.796 238.239 286.765 C 238.088 286.739 237.945 286.71 237.81 286.679 L 237.802 285.241 C 237.854 285.247 237.916 285.252 237.989 285.257 C 238.067 285.262 238.13 285.265 238.177 285.265 C 238.489 285.265 238.75 285.226 238.958 285.148 C 239.166 285.075 239.336 284.955 239.466 284.788 C 239.601 284.622 239.716 284.398 239.81 284.116 L 240.419 282.476 Z M 239.122 274.945 L 241.13 281.273 L 241.466 283.257 L 240.161 283.593 L 237.091 274.945 L 239.122 274.945 Z M 251.161 274.945 L 251.161 276.445 L 247.036 276.445 L 247.036 274.945 L 251.161 274.945 Z M 252.638 274.945 L 252.638 283.398 L 250.755 283.398 L 250.755 274.945 L 252.638 274.945 Z M 246.576 274.945 L 248.435 274.945 L 248.208 279.124 C 248.177 279.744 248.115 280.291 248.021 280.765 C 247.932 281.234 247.812 281.637 247.661 281.976 C 247.51 282.309 247.326 282.58 247.107 282.788 C 246.888 282.997 246.633 283.15 246.341 283.249 C 246.049 283.348 245.721 283.398 245.357 283.398 L 244.771 283.398 L 244.763 281.851 L 245.06 281.827 C 245.252 281.812 245.419 281.762 245.56 281.679 C 245.7 281.59 245.82 281.465 245.919 281.304 C 246.023 281.142 246.107 280.934 246.169 280.679 C 246.237 280.424 246.289 280.122 246.326 279.773 C 246.367 279.424 246.398 279.017 246.419 278.554 L 246.576 274.945 Z M 254.716 282.46 C 254.716 282.169 254.815 281.924 255.013 281.726 C 255.211 281.523 255.479 281.421 255.818 281.421 C 256.161 281.421 256.43 281.523 256.622 281.726 C 256.82 281.924 256.919 282.169 256.919 282.46 C 256.919 282.752 256.82 282.997 256.622 283.195 C 256.43 283.392 256.161 283.491 255.818 283.491 C 255.479 283.491 255.211 283.392 255.013 283.195 C 254.815 282.997 254.716 282.752 254.716 282.46 Z M 267.529 278.257 L 264.63 278.257 L 264.615 276.827 L 267.146 276.827 C 267.573 276.827 267.935 276.765 268.232 276.64 C 268.534 276.51 268.763 276.325 268.919 276.085 C 269.076 275.84 269.154 275.546 269.154 275.202 C 269.154 274.822 269.081 274.512 268.935 274.273 C 268.789 274.033 268.565 273.859 268.263 273.749 C 267.966 273.64 267.586 273.585 267.122 273.585 L 265.224 273.585 L 265.224 283.398 L 263.263 283.398 L 263.263 272.023 L 267.122 272.023 C 267.747 272.023 268.305 272.083 268.794 272.202 C 269.289 272.322 269.708 272.51 270.052 272.765 C 270.401 273.015 270.664 273.333 270.841 273.718 C 271.023 274.103 271.115 274.562 271.115 275.093 C 271.115 275.562 271.003 275.991 270.779 276.382 C 270.555 276.767 270.224 277.083 269.786 277.327 C 269.349 277.572 268.805 277.718 268.154 277.765 L 267.529 278.257 Z M 267.443 283.398 L 264.013 283.398 L 264.896 281.843 L 267.443 281.843 C 267.885 281.843 268.255 281.77 268.552 281.624 C 268.849 281.473 269.07 281.267 269.216 281.007 C 269.367 280.741 269.443 280.432 269.443 280.077 C 269.443 279.708 269.378 279.387 269.247 279.116 C 269.117 278.84 268.911 278.629 268.63 278.484 C 268.349 278.333 267.982 278.257 267.529 278.257 L 265.326 278.257 L 265.341 276.827 L 268.208 276.827 L 268.654 277.366 C 269.279 277.387 269.792 277.525 270.193 277.781 C 270.599 278.036 270.901 278.366 271.099 278.773 C 271.297 279.179 271.396 279.616 271.396 280.085 C 271.396 280.809 271.237 281.416 270.919 281.906 C 270.607 282.395 270.156 282.767 269.568 283.023 C 268.979 283.273 268.271 283.398 267.443 283.398 Z M 277.951 281.702 L 277.951 277.671 C 277.951 277.369 277.896 277.109 277.786 276.89 C 277.677 276.671 277.51 276.502 277.286 276.382 C 277.068 276.262 276.792 276.202 276.458 276.202 C 276.151 276.202 275.885 276.254 275.661 276.359 C 275.437 276.463 275.263 276.603 275.138 276.781 C 275.013 276.958 274.951 277.158 274.951 277.382 L 273.076 277.382 C 273.076 277.049 273.156 276.726 273.318 276.413 C 273.479 276.101 273.714 275.822 274.021 275.577 C 274.328 275.333 274.695 275.14 275.122 274.999 C 275.549 274.859 276.029 274.788 276.56 274.788 C 277.195 274.788 277.758 274.895 278.247 275.109 C 278.742 275.322 279.13 275.645 279.411 276.077 C 279.698 276.504 279.841 277.041 279.841 277.687 L 279.841 281.445 C 279.841 281.83 279.867 282.176 279.919 282.484 C 279.977 282.786 280.057 283.049 280.161 283.273 L 280.161 283.398 L 278.232 283.398 C 278.143 283.195 278.073 282.937 278.021 282.624 C 277.974 282.307 277.951 281.999 277.951 281.702 Z M 278.224 278.257 L 278.24 279.421 L 276.888 279.421 C 276.539 279.421 276.232 279.455 275.966 279.523 C 275.701 279.585 275.479 279.679 275.302 279.804 C 275.125 279.929 274.992 280.08 274.904 280.257 C 274.815 280.434 274.771 280.635 274.771 280.859 C 274.771 281.083 274.823 281.288 274.927 281.476 C 275.031 281.658 275.182 281.801 275.38 281.906 C 275.583 282.01 275.828 282.062 276.115 282.062 C 276.5 282.062 276.836 281.984 277.122 281.827 C 277.414 281.666 277.643 281.471 277.81 281.241 C 277.977 281.007 278.065 280.786 278.076 280.577 L 278.685 281.413 C 278.622 281.627 278.516 281.856 278.365 282.101 C 278.214 282.346 278.016 282.58 277.771 282.804 C 277.531 283.023 277.242 283.202 276.904 283.343 C 276.57 283.484 276.185 283.554 275.747 283.554 C 275.195 283.554 274.703 283.445 274.271 283.226 C 273.839 283.002 273.5 282.702 273.255 282.327 C 273.01 281.947 272.888 281.517 272.888 281.038 C 272.888 280.59 272.971 280.195 273.138 279.851 C 273.31 279.502 273.56 279.21 273.888 278.976 C 274.221 278.741 274.628 278.564 275.107 278.445 C 275.586 278.32 276.133 278.257 276.747 278.257 L 278.224 278.257 Z M 285.263 282.054 C 285.57 282.054 285.846 281.994 286.091 281.874 C 286.341 281.749 286.542 281.577 286.693 281.359 C 286.849 281.14 286.935 280.887 286.951 280.601 L 288.724 280.601 C 288.714 281.148 288.552 281.645 288.24 282.093 C 287.927 282.541 287.513 282.898 286.997 283.163 C 286.482 283.424 285.911 283.554 285.286 283.554 C 284.641 283.554 284.078 283.445 283.599 283.226 C 283.12 283.002 282.721 282.695 282.404 282.304 C 282.086 281.913 281.846 281.463 281.685 280.952 C 281.529 280.442 281.451 279.895 281.451 279.312 L 281.451 279.038 C 281.451 278.455 281.529 277.908 281.685 277.398 C 281.846 276.882 282.086 276.429 282.404 276.038 C 282.721 275.648 283.12 275.343 283.599 275.124 C 284.078 274.9 284.638 274.788 285.279 274.788 C 285.956 274.788 286.549 274.924 287.06 275.195 C 287.57 275.46 287.971 275.833 288.263 276.312 C 288.56 276.786 288.714 277.338 288.724 277.968 L 286.951 277.968 C 286.935 277.656 286.857 277.374 286.716 277.124 C 286.581 276.869 286.388 276.666 286.138 276.515 C 285.893 276.364 285.599 276.288 285.255 276.288 C 284.875 276.288 284.56 276.366 284.31 276.523 C 284.06 276.674 283.865 276.882 283.724 277.148 C 283.583 277.408 283.482 277.702 283.419 278.031 C 283.362 278.353 283.333 278.689 283.333 279.038 L 283.333 279.312 C 283.333 279.661 283.362 279.999 283.419 280.327 C 283.477 280.656 283.576 280.95 283.716 281.21 C 283.862 281.465 284.06 281.671 284.31 281.827 C 284.56 281.978 284.878 282.054 285.263 282.054 Z M 292.115 280.648 L 295.435 274.945 L 297.318 274.945 L 297.318 283.398 L 295.435 283.398 L 295.435 277.687 L 292.115 283.398 L 290.232 283.398 L 290.232 274.945 L 292.115 274.945 L 292.115 280.648 Z M 304.99 274.945 L 304.99 276.445 L 300.865 276.445 L 300.865 274.945 L 304.99 274.945 Z M 306.466 274.945 L 306.466 283.398 L 304.583 283.398 L 304.583 274.945 L 306.466 274.945 Z M 300.404 274.945 L 302.263 274.945 L 302.036 279.124 C 302.005 279.744 301.943 280.291 301.849 280.765 C 301.76 281.234 301.641 281.637 301.49 281.976 C 301.339 282.309 301.154 282.58 300.935 282.788 C 300.716 282.997 300.461 283.15 300.169 283.249 C 299.878 283.348 299.549 283.398 299.185 283.398 L 298.599 283.398 L 298.591 281.851 L 298.888 281.827 C 299.081 281.812 299.247 281.762 299.388 281.679 C 299.529 281.59 299.648 281.465 299.747 281.304 C 299.852 281.142 299.935 280.934 299.997 280.679 C 300.065 280.424 300.117 280.122 300.154 279.773 C 300.195 279.424 300.227 279.017 300.247 278.554 L 300.404 274.945 Z M 320.099 272.023 L 320.099 273.585 L 314.646 273.585 L 314.646 272.023 L 320.099 272.023 Z M 321.599 272.023 L 321.599 283.398 L 319.638 283.398 L 319.638 272.023 L 321.599 272.023 Z M 314.255 272.023 L 316.201 272.023 L 315.927 277.671 C 315.891 278.499 315.82 279.228 315.716 279.859 C 315.612 280.489 315.471 281.028 315.294 281.476 C 315.117 281.924 314.893 282.291 314.622 282.577 C 314.352 282.859 314.026 283.067 313.646 283.202 C 313.271 283.333 312.831 283.398 312.326 283.398 L 311.826 283.398 L 311.826 281.843 L 312.13 281.82 C 312.406 281.799 312.643 281.734 312.841 281.624 C 313.044 281.51 313.216 281.343 313.357 281.124 C 313.497 280.9 313.615 280.611 313.708 280.257 C 313.802 279.903 313.875 279.471 313.927 278.96 C 313.984 278.45 314.026 277.853 314.052 277.171 L 314.255 272.023 Z M 327.49 283.554 C 326.865 283.554 326.299 283.452 325.794 283.249 C 325.294 283.041 324.867 282.752 324.513 282.382 C 324.164 282.012 323.896 281.577 323.708 281.077 C 323.521 280.577 323.427 280.038 323.427 279.46 L 323.427 279.148 C 323.427 278.486 323.523 277.887 323.716 277.351 C 323.909 276.814 324.177 276.356 324.521 275.976 C 324.865 275.59 325.271 275.296 325.74 275.093 C 326.208 274.89 326.716 274.788 327.263 274.788 C 327.867 274.788 328.396 274.89 328.849 275.093 C 329.302 275.296 329.677 275.583 329.974 275.952 C 330.276 276.317 330.5 276.752 330.646 277.257 C 330.797 277.762 330.872 278.32 330.872 278.929 L 330.872 279.734 L 324.341 279.734 L 324.341 278.382 L 329.013 278.382 L 329.013 278.234 C 329.003 277.895 328.935 277.577 328.81 277.281 C 328.69 276.984 328.505 276.744 328.255 276.562 C 328.005 276.379 327.672 276.288 327.255 276.288 C 326.943 276.288 326.664 276.356 326.419 276.491 C 326.18 276.622 325.979 276.812 325.818 277.062 C 325.656 277.312 325.531 277.614 325.443 277.968 C 325.359 278.317 325.318 278.71 325.318 279.148 L 325.318 279.46 C 325.318 279.83 325.367 280.174 325.466 280.491 C 325.57 280.804 325.721 281.077 325.919 281.312 C 326.117 281.546 326.357 281.731 326.638 281.866 C 326.919 281.997 327.24 282.062 327.599 282.062 C 328.052 282.062 328.456 281.971 328.81 281.788 C 329.164 281.606 329.471 281.348 329.732 281.015 L 330.724 281.976 C 330.542 282.241 330.305 282.497 330.013 282.741 C 329.721 282.981 329.365 283.176 328.943 283.327 C 328.526 283.478 328.042 283.554 327.49 283.554 Z M 336.451 279.781 L 333.747 279.781 L 333.732 278.452 L 335.951 278.452 C 336.315 278.452 336.615 278.416 336.849 278.343 C 337.089 278.27 337.266 278.161 337.38 278.015 C 337.495 277.864 337.552 277.682 337.552 277.468 C 337.552 277.291 337.518 277.137 337.451 277.007 C 337.383 276.872 337.279 276.762 337.138 276.679 C 337.003 276.59 336.831 276.528 336.622 276.491 C 336.419 276.45 336.182 276.429 335.911 276.429 L 334.372 276.429 L 334.372 283.398 L 332.49 283.398 L 332.49 274.945 L 335.911 274.945 C 336.453 274.945 336.94 274.991 337.372 275.085 C 337.81 275.179 338.182 275.322 338.49 275.515 C 338.797 275.708 339.031 275.952 339.193 276.249 C 339.359 276.541 339.443 276.885 339.443 277.281 C 339.443 277.541 339.385 277.786 339.271 278.015 C 339.161 278.244 338.997 278.447 338.779 278.624 C 338.56 278.801 338.292 278.947 337.974 279.062 C 337.656 279.171 337.292 279.239 336.88 279.265 L 336.451 279.781 Z M 336.451 283.398 L 333.201 283.398 L 333.951 281.913 L 336.451 281.913 C 336.784 281.913 337.06 281.872 337.279 281.788 C 337.497 281.705 337.659 281.585 337.763 281.429 C 337.872 281.267 337.927 281.077 337.927 280.859 C 337.927 280.635 337.875 280.442 337.771 280.281 C 337.667 280.119 337.505 279.997 337.286 279.913 C 337.073 279.825 336.794 279.781 336.451 279.781 L 334.302 279.781 L 334.318 278.452 L 336.872 278.452 L 337.411 278.968 C 337.948 279.004 338.393 279.119 338.747 279.312 C 339.102 279.504 339.367 279.747 339.544 280.038 C 339.721 280.33 339.81 280.648 339.81 280.991 C 339.81 281.387 339.734 281.736 339.583 282.038 C 339.437 282.34 339.219 282.593 338.927 282.796 C 338.641 282.994 338.289 283.145 337.872 283.249 C 337.456 283.348 336.982 283.398 336.451 283.398 Z M 344.888 282.054 C 345.195 282.054 345.471 281.994 345.716 281.874 C 345.966 281.749 346.167 281.577 346.318 281.359 C 346.474 281.14 346.56 280.887 346.576 280.601 L 348.349 280.601 C 348.339 281.148 348.177 281.645 347.865 282.093 C 347.552 282.541 347.138 282.898 346.622 283.163 C 346.107 283.424 345.536 283.554 344.911 283.554 C 344.266 283.554 343.703 283.445 343.224 283.226 C 342.745 283.002 342.346 282.695 342.029 282.304 C 341.711 281.913 341.471 281.463 341.31 280.952 C 341.154 280.442 341.076 279.895 341.076 279.312 L 341.076 279.038 C 341.076 278.455 341.154 277.908 341.31 277.398 C 341.471 276.882 341.711 276.429 342.029 276.038 C 342.346 275.648 342.745 275.343 343.224 275.124 C 343.703 274.9 344.263 274.788 344.904 274.788 C 345.581 274.788 346.174 274.924 346.685 275.195 C 347.195 275.46 347.596 275.833 347.888 276.312 C 348.185 276.786 348.339 277.338 348.349 277.968 L 346.576 277.968 C 346.56 277.656 346.482 277.374 346.341 277.124 C 346.206 276.869 346.013 276.666 345.763 276.515 C 345.518 276.364 345.224 276.288 344.88 276.288 C 344.5 276.288 344.185 276.366 343.935 276.523 C 343.685 276.674 343.49 276.882 343.349 277.148 C 343.208 277.408 343.107 277.702 343.044 278.031 C 342.987 278.353 342.958 278.689 342.958 279.038 L 342.958 279.312 C 342.958 279.661 342.987 279.999 343.044 280.327 C 343.102 280.656 343.201 280.95 343.341 281.21 C 343.487 281.465 343.685 281.671 343.935 281.827 C 344.185 281.978 344.503 282.054 344.888 282.054 Z M 351.826 274.945 L 351.826 283.398 L 349.943 283.398 L 349.943 274.945 L 351.826 274.945 Z M 357.341 274.945 L 353.536 280.031 L 351.388 280.031 L 351.138 278.327 L 352.708 278.327 L 354.99 274.945 L 357.341 274.945 Z M 355.138 283.398 L 352.591 279.71 L 354.076 278.64 L 357.615 283.398 L 355.138 283.398 Z M 360.583 280.648 L 363.904 274.945 L 365.786 274.945 L 365.786 283.398 L 363.904 283.398 L 363.904 277.687 L 360.583 283.398 L 358.701 283.398 L 358.701 274.945 L 360.583 274.945 L 360.583 280.648 Z M 385.935 279.031 L 385.935 280.148 L 381.208 280.148 L 381.208 279.031 L 385.935 279.031 Z M 380.888 275.296 L 380.888 274.648 C 380.888 274.111 380.997 273.637 381.216 273.226 C 381.44 272.809 381.753 272.484 382.154 272.249 C 382.555 272.015 383.029 271.898 383.576 271.898 C 384.133 271.898 384.609 272.015 385.005 272.249 C 385.406 272.484 385.716 272.809 385.935 273.226 C 386.154 273.637 386.263 274.111 386.263 274.648 L 386.263 275.296 C 386.263 275.833 386.154 276.307 385.935 276.718 C 385.721 277.129 385.414 277.452 385.013 277.687 C 384.617 277.921 384.143 278.038 383.591 278.038 C 383.039 278.038 382.56 277.921 382.154 277.687 C 381.753 277.452 381.44 277.129 381.216 276.718 C 380.997 276.307 380.888 275.833 380.888 275.296 Z M 382.201 274.648 L 382.201 275.296 C 382.201 275.614 382.25 275.895 382.349 276.14 C 382.448 276.385 382.602 276.577 382.81 276.718 C 383.018 276.859 383.279 276.929 383.591 276.929 C 383.898 276.929 384.154 276.859 384.357 276.718 C 384.56 276.577 384.711 276.385 384.81 276.14 C 384.909 275.895 384.958 275.614 384.958 275.296 L 384.958 274.648 C 384.958 274.335 384.906 274.057 384.802 273.812 C 384.703 273.567 384.552 273.374 384.349 273.234 C 384.146 273.088 383.888 273.015 383.576 273.015 C 383.268 273.015 383.01 273.088 382.802 273.234 C 382.599 273.374 382.448 273.567 382.349 273.812 C 382.25 274.057 382.201 274.335 382.201 274.648 Z M 379.794 272.023 L 379.794 283.398 L 377.724 283.398 L 373.81 275.249 L 373.81 283.398 L 371.919 283.398 L 371.919 272.023 L 373.99 272.023 L 377.911 280.187 L 377.911 272.023 L 379.794 272.023 Z M 393.122 271.984 L 393.122 283.398 L 391.24 283.398 L 391.24 274.218 L 388.451 275.163 L 388.451 273.609 L 392.896 271.984 L 393.122 271.984 Z M 404.701 281.898 L 404.701 283.398 L 397.076 283.398 L 397.076 282.109 L 400.779 278.07 C 401.185 277.611 401.505 277.215 401.74 276.882 C 401.974 276.549 402.138 276.249 402.232 275.984 C 402.331 275.713 402.38 275.45 402.38 275.195 C 402.38 274.835 402.312 274.52 402.177 274.249 C 402.047 273.973 401.854 273.757 401.599 273.601 C 401.344 273.439 401.034 273.359 400.669 273.359 C 400.247 273.359 399.893 273.45 399.607 273.632 C 399.32 273.814 399.104 274.067 398.958 274.39 C 398.812 274.708 398.74 275.072 398.74 275.484 L 396.857 275.484 C 396.857 274.822 397.008 274.218 397.31 273.671 C 397.612 273.119 398.049 272.682 398.622 272.359 C 399.195 272.031 399.885 271.866 400.693 271.866 C 401.453 271.866 402.099 271.994 402.63 272.249 C 403.161 272.504 403.565 272.866 403.841 273.335 C 404.122 273.804 404.263 274.359 404.263 274.999 C 404.263 275.353 404.206 275.705 404.091 276.054 C 403.977 276.403 403.812 276.752 403.599 277.101 C 403.391 277.445 403.143 277.791 402.857 278.14 C 402.57 278.484 402.255 278.833 401.911 279.187 L 399.451 281.898 L 404.701 281.898 Z M 408.38 276.859 L 409.505 276.859 C 409.943 276.859 410.305 276.783 410.591 276.632 C 410.883 276.481 411.099 276.273 411.24 276.007 C 411.38 275.741 411.451 275.437 411.451 275.093 C 411.451 274.734 411.385 274.426 411.255 274.171 C 411.13 273.911 410.937 273.71 410.677 273.57 C 410.422 273.429 410.096 273.359 409.701 273.359 C 409.367 273.359 409.065 273.426 408.794 273.562 C 408.529 273.692 408.318 273.879 408.161 274.124 C 408.005 274.364 407.927 274.65 407.927 274.984 L 406.036 274.984 C 406.036 274.379 406.195 273.843 406.513 273.374 C 406.831 272.906 407.263 272.538 407.81 272.273 C 408.362 272.002 408.982 271.866 409.669 271.866 C 410.404 271.866 411.044 271.989 411.591 272.234 C 412.143 272.473 412.573 272.833 412.88 273.312 C 413.187 273.791 413.341 274.385 413.341 275.093 C 413.341 275.416 413.266 275.744 413.115 276.077 C 412.964 276.411 412.74 276.715 412.443 276.991 C 412.146 277.262 411.776 277.484 411.333 277.656 C 410.891 277.822 410.378 277.906 409.794 277.906 L 408.38 277.906 L 408.38 276.859 Z M 408.38 278.327 L 408.38 277.296 L 409.794 277.296 C 410.461 277.296 411.029 277.374 411.497 277.531 C 411.971 277.687 412.357 277.903 412.654 278.179 C 412.951 278.45 413.167 278.76 413.302 279.109 C 413.443 279.458 413.513 279.827 413.513 280.218 C 413.513 280.749 413.417 281.223 413.224 281.64 C 413.036 282.051 412.768 282.4 412.419 282.687 C 412.07 282.973 411.661 283.189 411.193 283.335 C 410.729 283.481 410.224 283.554 409.677 283.554 C 409.187 283.554 408.719 283.486 408.271 283.351 C 407.823 283.215 407.422 283.015 407.068 282.749 C 406.714 282.478 406.432 282.142 406.224 281.741 C 406.021 281.335 405.919 280.866 405.919 280.335 L 407.802 280.335 C 407.802 280.674 407.88 280.973 408.036 281.234 C 408.198 281.489 408.422 281.689 408.708 281.835 C 409 281.981 409.333 282.054 409.708 282.054 C 410.104 282.054 410.445 281.984 410.732 281.843 C 411.018 281.702 411.237 281.494 411.388 281.218 C 411.544 280.942 411.622 280.609 411.622 280.218 C 411.622 279.775 411.536 279.416 411.365 279.14 C 411.193 278.864 410.948 278.661 410.63 278.531 C 410.312 278.395 409.937 278.327 409.505 278.327 L 408.38 278.327 Z" fill="#EDEDED"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M 464.734 265.957 C 464.147 265.957 463.669 265.478 463.669 264.891 C 463.669 264.305 464.147 263.826 464.734 263.826 C 465.321 263.826 465.799 264.305 465.799 264.891 C 465.799 265.478 465.321 265.957 464.734 265.957 Z M 464.734 261.696 C 462.969 261.696 461.538 263.126 461.538 264.891 C 461.538 266.656 462.969 268.087 464.734 268.087 C 466.499 268.087 467.929 266.656 467.929 264.891 C 467.929 263.126 466.499 261.696 464.734 261.696 Z M 464.734 274.867 C 464.734 274.867 459.408 267.411 459.408 264.215 C 459.408 261.279 461.797 258.889 464.734 258.889 C 467.67 258.889 470.06 261.279 470.06 264.215 C 470.06 267.411 464.734 274.867 464.734 274.867 Z M 464.734 256.759 C 460.616 256.759 457.278 260.097 457.278 264.215 C 457.278 268.333 464.734 278.063 464.734 278.063 C 464.734 278.063 472.19 268.333 472.19 264.215 C 472.19 260.097 468.852 256.759 464.734 256.759 Z" fill="white"/>
            <g filter="url(#filter0_d_240_1967)" transform="matrix(1, 0, 0, 1, 145.882723, 217.378986)">
                <path d="M78.0981 49.8479C78.0981 65.8232 65.1476 78.7737 49.1723 78.7737C33.197 78.7737 20.2465 65.8232 20.2465 49.8479C20.2465 33.8726 33.197 20.9221 49.1723 20.9221C65.1476 20.9221 78.0981 33.8726 78.0981 49.8479Z" fill="#008AEE"/>
                <path d="M49.9813 85.6379C49.5557 86.1334 48.7888 86.1334 48.3632 85.6379L41.4863 77.6324C40.8921 76.9408 41.3835 75.8708 42.2953 75.8708H56.0491C56.9609 75.8708 57.4523 76.9408 56.8582 77.6324L49.9813 85.6379Z" fill="#008AEE"/>
            </g>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M 191.315 249.965 C 192.521 249.704 193.771 249.566 195.055 249.566 C 196.483 249.566 197.873 249.738 199.202 250.058 L 199.202 252.462 C 200.481 252.82 201.693 253.341 202.812 254.001 L 204.502 252.31 C 206.746 253.738 208.647 255.66 210.05 257.923 L 208.356 259.619 C 208.993 260.732 209.495 261.933 209.837 263.199 L 212.233 263.199 C 212.535 264.492 212.695 265.841 212.695 267.226 C 212.695 268.556 212.547 269.85 212.27 271.096 L 209.884 271.096 C 209.549 272.383 209.05 273.602 208.413 274.734 L 210.11 276.433 C 208.722 278.707 206.834 280.64 204.598 282.082 L 202.912 280.394 C 201.764 281.082 200.519 281.621 199.202 281.992 L 199.202 284.395 C 197.873 284.716 196.483 284.887 195.055 284.887 C 193.771 284.887 192.521 284.748 191.315 284.487 L 191.315 282.103 C 190.662 281.939 190.028 281.731 189.412 281.486 L 192.155 278.74 C 193.084 278.972 194.055 279.098 195.055 279.098 C 201.604 279.098 206.913 273.783 206.913 267.226 C 206.913 260.67 201.604 255.355 195.055 255.355 C 188.505 255.355 183.196 260.67 183.196 267.226 C 183.196 268.292 183.34 269.324 183.602 270.307 L 180.875 273.037 C 180.618 272.41 180.4 271.762 180.227 271.096 L 177.841 271.096 C 177.563 269.85 177.415 268.556 177.415 267.226 C 177.415 265.841 177.575 264.492 177.876 263.199 L 180.271 263.199 C 180.642 261.835 181.194 260.545 181.904 259.36 L 180.217 257.672 C 181.657 255.435 183.587 253.545 185.859 252.153 L 187.555 253.853 C 188.723 253.195 189.984 252.684 191.315 252.351 L 191.315 249.965 Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M 195.426 259.779 C 196.141 259.779 196.856 259.885 197.545 260.097 L 193.011 264.635 L 194.016 268.388 L 197.766 269.394 L 202.298 264.857 C 202.475 265.432 202.578 266.025 202.607 266.621 L 202.616 266.979 C 202.616 268.717 201.991 270.456 200.739 271.827 L 200.511 272.066 C 198.626 273.952 195.955 274.572 193.554 273.925 L 193.288 273.848 L 184.155 282.981 C 182.371 281.871 180.837 280.394 179.66 278.656 L 179.413 278.28 L 188.564 269.117 C 187.824 266.734 188.349 264.043 190.14 262.098 L 190.344 261.885 C 191.669 260.559 193.384 259.859 195.119 259.785 L 195.426 259.779 Z" fill="white"/>
        </g>
        <g id="varna-open" class="opacity-0" transform="matrix(1, 0, 0, 1, 208.93735052551853, -18.056288034562577)">
            <path d="M 843.577 153.189 L 575.64 153.189 C 559.86 153.189 547.067 165.982 547.067 181.762 C 547.067 197.543 559.86 210.335 575.64 210.335 L 843.577 210.335 L 843.577 153.189 Z" fill="url(#paint0_linear_240_2024)"/>
            <path d="M 591.284 166.136 L 593.517 166.136 L 596.804 175.532 L 600.091 166.136 L 602.324 166.136 L 597.7 178.933 L 595.908 178.933 L 591.284 166.136 Z M 590.08 166.136 L 592.304 166.136 L 592.708 175.295 L 592.708 178.933 L 590.08 178.933 L 590.08 166.136 Z M 601.304 166.136 L 603.536 166.136 L 603.536 178.933 L 600.9 178.933 L 600.9 175.295 L 601.304 166.136 Z M 614.435 176.877 L 614.435 178.933 L 607.623 178.933 L 607.623 176.877 L 614.435 176.877 Z M 608.485 166.136 L 608.485 178.933 L 605.848 178.933 L 605.848 166.136 L 608.485 166.136 Z M 613.547 171.348 L 613.547 173.352 L 607.623 173.352 L 607.623 171.348 L 613.547 171.348 Z M 614.426 166.136 L 614.426 168.202 L 607.623 168.202 L 607.623 166.136 L 614.426 166.136 Z M 626.116 172.245 L 626.116 177.316 C 625.916 177.556 625.609 177.817 625.193 178.098 C 624.777 178.374 624.241 178.611 623.584 178.81 C 622.928 179.009 622.134 179.109 621.202 179.109 C 620.376 179.109 619.623 178.974 618.944 178.705 C 618.264 178.429 617.678 178.028 617.186 177.501 C 616.699 176.973 616.324 176.329 616.061 175.567 C 615.797 174.799 615.665 173.923 615.665 172.939 L 615.665 172.139 C 615.665 171.155 615.791 170.279 616.043 169.511 C 616.301 168.744 616.667 168.096 617.142 167.569 C 617.616 167.042 618.182 166.64 618.838 166.365 C 619.494 166.09 620.224 165.952 621.027 165.952 C 622.14 165.952 623.054 166.133 623.769 166.497 C 624.484 166.854 625.029 167.352 625.404 167.991 C 625.784 168.624 626.019 169.35 626.107 170.171 L 623.549 170.171 C 623.485 169.737 623.362 169.359 623.18 169.037 C 622.998 168.715 622.738 168.463 622.398 168.281 C 622.064 168.099 621.63 168.008 621.097 168.008 C 620.658 168.008 620.265 168.099 619.919 168.281 C 619.579 168.457 619.292 168.717 619.058 169.063 C 618.824 169.409 618.645 169.837 618.522 170.346 C 618.399 170.856 618.337 171.448 618.337 172.122 L 618.337 172.939 C 618.337 173.607 618.402 174.199 618.531 174.715 C 618.659 175.224 618.85 175.655 619.102 176.007 C 619.36 176.352 619.676 176.613 620.051 176.789 C 620.426 176.965 620.863 177.052 621.361 177.052 C 621.777 177.052 622.122 177.017 622.398 176.947 C 622.679 176.877 622.905 176.792 623.074 176.692 C 623.25 176.587 623.385 176.487 623.479 176.393 L 623.479 174.126 L 621.071 174.126 L 621.071 172.245 L 626.116 172.245 Z M 633.446 168.325 L 629.965 178.933 L 627.161 178.933 L 631.916 166.136 L 633.7 166.136 L 633.446 168.325 Z M 636.337 178.933 L 632.848 168.325 L 632.567 166.136 L 634.368 166.136 L 639.15 178.933 L 636.337 178.933 Z M 636.179 174.17 L 636.179 176.235 L 629.42 176.235 L 629.42 174.17 L 636.179 174.17 Z M 645.32 174.372 L 642.059 174.372 L 642.059 172.315 L 645.32 172.315 C 645.824 172.315 646.233 172.233 646.55 172.069 C 646.866 171.899 647.098 171.665 647.244 171.366 C 647.391 171.067 647.464 170.73 647.464 170.355 C 647.464 169.974 647.391 169.62 647.244 169.292 C 647.098 168.964 646.866 168.7 646.55 168.501 C 646.233 168.301 645.824 168.202 645.32 168.202 L 642.973 168.202 L 642.973 178.933 L 640.336 178.933 L 640.336 166.136 L 645.32 166.136 C 646.321 166.136 647.18 166.318 647.895 166.681 C 648.615 167.039 649.166 167.534 649.547 168.167 C 649.928 168.799 650.118 169.523 650.118 170.338 C 650.118 171.164 649.928 171.879 649.547 172.482 C 649.166 173.086 648.615 173.551 647.895 173.88 C 647.18 174.208 646.321 174.372 645.32 174.372 Z M 655.682 168.325 L 652.201 178.933 L 649.397 178.933 L 654.152 166.136 L 655.937 166.136 L 655.682 168.325 Z M 658.573 178.933 L 655.084 168.325 L 654.803 166.136 L 656.605 166.136 L 661.386 178.933 L 658.573 178.933 Z M 658.415 174.17 L 658.415 176.235 L 651.656 176.235 L 651.656 174.17 L 658.415 174.17 Z M 662.572 166.136 L 667.345 166.136 C 668.323 166.136 669.164 166.283 669.867 166.576 C 670.576 166.869 671.121 167.302 671.502 167.877 C 671.883 168.451 672.073 169.157 672.073 169.995 C 672.073 170.68 671.956 171.269 671.722 171.761 C 671.493 172.248 671.168 172.655 670.746 172.983 C 670.33 173.305 669.841 173.563 669.278 173.757 L 668.443 174.196 L 664.295 174.196 L 664.277 172.139 L 667.362 172.139 C 667.825 172.139 668.209 172.057 668.514 171.893 C 668.818 171.729 669.047 171.501 669.199 171.208 C 669.357 170.915 669.437 170.575 669.437 170.188 C 669.437 169.778 669.36 169.423 669.208 169.125 C 669.056 168.826 668.824 168.597 668.514 168.439 C 668.203 168.281 667.814 168.202 667.345 168.202 L 665.209 168.202 L 665.209 178.933 L 662.572 178.933 L 662.572 166.136 Z M 669.727 178.933 L 666.809 173.229 L 669.595 173.212 L 672.548 178.81 L 672.548 178.933 L 669.727 178.933 Z M 679.298 166.136 L 679.298 178.933 L 676.67 178.933 L 676.67 166.136 L 679.298 166.136 Z M 683.235 166.136 L 683.235 168.202 L 672.794 168.202 L 672.794 166.136 L 683.235 166.136 Z M 691.26 175.585 C 691.26 175.356 691.225 175.151 691.154 174.969 C 691.09 174.782 690.967 174.612 690.785 174.46 C 690.604 174.301 690.349 174.146 690.021 173.994 C 689.692 173.841 689.268 173.683 688.746 173.519 C 688.166 173.332 687.615 173.121 687.094 172.886 C 686.578 172.652 686.121 172.38 685.723 172.069 C 685.33 171.753 685.02 171.386 684.791 170.97 C 684.568 170.554 684.457 170.071 684.457 169.52 C 684.457 168.987 684.574 168.504 684.809 168.07 C 685.043 167.631 685.371 167.256 685.793 166.945 C 686.215 166.629 686.713 166.385 687.287 166.215 C 687.867 166.046 688.503 165.961 689.194 165.961 C 690.138 165.961 690.961 166.131 691.664 166.47 C 692.367 166.81 692.912 167.276 693.299 167.868 C 693.691 168.46 693.888 169.136 693.888 169.898 L 691.269 169.898 C 691.269 169.523 691.189 169.195 691.031 168.914 C 690.879 168.627 690.645 168.401 690.328 168.237 C 690.018 168.073 689.625 167.991 689.15 167.991 C 688.693 167.991 688.313 168.061 688.008 168.202 C 687.703 168.337 687.475 168.521 687.322 168.756 C 687.17 168.984 687.094 169.242 687.094 169.529 C 687.094 169.746 687.147 169.942 687.252 170.118 C 687.363 170.294 687.527 170.458 687.744 170.61 C 687.961 170.762 688.228 170.906 688.544 171.041 C 688.86 171.175 689.227 171.307 689.643 171.436 C 690.34 171.647 690.952 171.884 691.48 172.148 C 692.013 172.412 692.458 172.708 692.815 173.036 C 693.173 173.364 693.442 173.736 693.624 174.152 C 693.806 174.568 693.897 175.04 693.897 175.567 C 693.897 176.124 693.788 176.622 693.571 177.061 C 693.355 177.501 693.041 177.873 692.631 178.177 C 692.221 178.482 691.731 178.714 691.163 178.872 C 690.595 179.03 689.959 179.109 689.256 179.109 C 688.623 179.109 687.999 179.027 687.384 178.863 C 686.769 178.693 686.209 178.438 685.705 178.098 C 685.207 177.758 684.809 177.325 684.51 176.798 C 684.211 176.27 684.062 175.646 684.062 174.925 L 686.707 174.925 C 686.707 175.324 686.769 175.661 686.892 175.936 C 687.015 176.212 687.188 176.434 687.41 176.604 C 687.639 176.774 687.908 176.897 688.219 176.973 C 688.535 177.049 688.881 177.088 689.256 177.088 C 689.713 177.088 690.088 177.023 690.381 176.894 C 690.68 176.765 690.899 176.587 691.04 176.358 C 691.187 176.13 691.26 175.872 691.26 175.585 Z M 704.786 176.261 L 707.801 166.136 L 710.736 166.136 L 706.28 178.933 L 704.347 178.933 L 704.786 176.261 Z M 702.009 166.136 L 705.015 176.261 L 705.472 178.933 L 703.521 178.933 L 699.091 166.136 L 702.009 166.136 Z M 716.502 176.789 L 716.502 172.552 C 716.502 172.248 716.452 171.987 716.353 171.77 C 716.253 171.548 716.098 171.375 715.887 171.252 C 715.682 171.129 715.415 171.067 715.087 171.067 C 714.806 171.067 714.563 171.117 714.357 171.216 C 714.152 171.31 713.994 171.448 713.883 171.63 C 713.772 171.805 713.716 172.013 713.716 172.254 L 711.185 172.254 C 711.185 171.849 711.278 171.465 711.466 171.102 C 711.653 170.739 711.926 170.42 712.283 170.144 C 712.641 169.863 713.065 169.643 713.558 169.485 C 714.056 169.327 714.612 169.248 715.228 169.248 C 715.966 169.248 716.622 169.371 717.196 169.617 C 717.771 169.863 718.222 170.232 718.55 170.724 C 718.884 171.216 719.051 171.832 719.051 172.57 L 719.051 176.639 C 719.051 177.161 719.083 177.589 719.147 177.923 C 719.212 178.251 719.306 178.538 719.429 178.784 L 719.429 178.933 L 716.871 178.933 C 716.748 178.675 716.654 178.353 716.59 177.966 C 716.531 177.574 716.502 177.181 716.502 176.789 Z M 716.836 173.141 L 716.854 174.574 L 715.439 174.574 C 715.105 174.574 714.814 174.612 714.568 174.688 C 714.322 174.764 714.12 174.873 713.962 175.013 C 713.804 175.148 713.687 175.306 713.61 175.488 C 713.54 175.67 713.505 175.869 713.505 176.086 C 713.505 176.302 713.555 176.499 713.654 176.674 C 713.754 176.844 713.897 176.979 714.085 177.079 C 714.272 177.173 714.492 177.219 714.744 177.219 C 715.125 177.219 715.456 177.143 715.737 176.991 C 716.019 176.839 716.235 176.651 716.388 176.428 C 716.546 176.206 716.628 175.995 716.634 175.796 L 717.302 176.868 C 717.208 177.108 717.079 177.357 716.915 177.615 C 716.757 177.873 716.555 178.116 716.309 178.344 C 716.063 178.567 715.767 178.752 715.421 178.898 C 715.075 179.039 714.665 179.109 714.19 179.109 C 713.587 179.109 713.039 178.989 712.547 178.749 C 712.061 178.503 711.674 178.166 711.387 177.738 C 711.105 177.304 710.965 176.812 710.965 176.261 C 710.965 175.763 711.059 175.321 711.246 174.934 C 711.434 174.548 711.709 174.222 712.072 173.959 C 712.441 173.689 712.901 173.487 713.452 173.352 C 714.003 173.212 714.642 173.141 715.368 173.141 L 716.836 173.141 Z M 723.533 171.498 L 723.533 178.933 L 721.002 178.933 L 721.002 169.423 L 723.384 169.423 L 723.533 171.498 Z M 726.398 169.362 L 726.355 171.709 C 726.231 171.691 726.082 171.676 725.906 171.665 C 725.736 171.647 725.581 171.638 725.44 171.638 C 725.083 171.638 724.772 171.685 724.509 171.779 C 724.251 171.867 724.034 171.999 723.858 172.174 C 723.689 172.35 723.56 172.564 723.472 172.816 C 723.39 173.068 723.343 173.355 723.331 173.677 L 722.821 173.519 C 722.821 172.904 722.883 172.339 723.006 171.823 C 723.129 171.301 723.308 170.847 723.542 170.461 C 723.782 170.074 724.075 169.775 724.421 169.564 C 724.767 169.353 725.162 169.248 725.607 169.248 C 725.748 169.248 725.892 169.259 726.038 169.283 C 726.185 169.3 726.305 169.327 726.398 169.362 Z M 730.072 171.454 L 730.072 178.933 L 727.541 178.933 L 727.541 169.423 L 729.914 169.423 L 730.072 171.454 Z M 729.703 173.844 L 729.018 173.844 C 729.018 173.141 729.108 172.508 729.29 171.946 C 729.472 171.378 729.727 170.894 730.055 170.496 C 730.383 170.091 730.772 169.784 731.224 169.573 C 731.681 169.356 732.19 169.248 732.753 169.248 C 733.198 169.248 733.605 169.312 733.975 169.441 C 734.344 169.57 734.66 169.775 734.924 170.056 C 735.193 170.338 735.398 170.71 735.539 171.173 C 735.686 171.635 735.759 172.201 735.759 172.869 L 735.759 178.933 L 733.21 178.933 L 733.21 172.86 C 733.21 172.438 733.151 172.11 733.034 171.876 C 732.917 171.641 732.744 171.477 732.516 171.383 C 732.293 171.284 732.018 171.234 731.689 171.234 C 731.35 171.234 731.054 171.301 730.802 171.436 C 730.556 171.571 730.351 171.758 730.187 171.999 C 730.028 172.233 729.908 172.508 729.826 172.825 C 729.744 173.141 729.703 173.481 729.703 173.844 Z M 742.816 176.789 L 742.816 172.552 C 742.816 172.248 742.767 171.987 742.667 171.77 C 742.567 171.548 742.412 171.375 742.201 171.252 C 741.996 171.129 741.73 171.067 741.401 171.067 C 741.12 171.067 740.877 171.117 740.672 171.216 C 740.467 171.31 740.309 171.448 740.197 171.63 C 740.086 171.805 740.03 172.013 740.03 172.254 L 737.499 172.254 C 737.499 171.849 737.593 171.465 737.78 171.102 C 737.968 170.739 738.24 170.42 738.598 170.144 C 738.955 169.863 739.38 169.643 739.872 169.485 C 740.37 169.327 740.927 169.248 741.542 169.248 C 742.28 169.248 742.937 169.371 743.511 169.617 C 744.085 169.863 744.536 170.232 744.864 170.724 C 745.198 171.216 745.365 171.832 745.365 172.57 L 745.365 176.639 C 745.365 177.161 745.397 177.589 745.462 177.923 C 745.526 178.251 745.62 178.538 745.743 178.784 L 745.743 178.933 L 743.186 178.933 C 743.063 178.675 742.969 178.353 742.904 177.966 C 742.846 177.574 742.816 177.181 742.816 176.789 Z M 743.15 173.141 L 743.168 174.574 L 741.753 174.574 C 741.419 174.574 741.129 174.612 740.883 174.688 C 740.637 174.764 740.435 174.873 740.276 175.013 C 740.118 175.148 740.001 175.306 739.925 175.488 C 739.855 175.67 739.819 175.869 739.819 176.086 C 739.819 176.302 739.869 176.499 739.969 176.674 C 740.068 176.844 740.212 176.979 740.399 177.079 C 740.587 177.173 740.807 177.219 741.059 177.219 C 741.439 177.219 741.771 177.143 742.052 176.991 C 742.333 176.839 742.55 176.651 742.702 176.428 C 742.86 176.206 742.942 175.995 742.948 175.796 L 743.616 176.868 C 743.522 177.108 743.394 177.357 743.23 177.615 C 743.071 177.873 742.869 178.116 742.623 178.344 C 742.377 178.567 742.081 178.752 741.735 178.898 C 741.39 179.039 740.98 179.109 740.505 179.109 C 739.901 179.109 739.354 178.989 738.861 178.749 C 738.375 178.503 737.988 178.166 737.701 177.738 C 737.42 177.304 737.279 176.812 737.279 176.261 C 737.279 175.763 737.373 175.321 737.561 174.934 C 737.748 174.548 738.023 174.222 738.387 173.959 C 738.756 173.689 739.216 173.487 739.767 173.352 C 740.317 173.212 740.956 173.141 741.683 173.141 L 743.15 173.141 Z" fill="white"/>
            <path d="M 592.36 197.353 L 594.657 189.822 L 596.672 189.822 L 593.282 199.564 C 593.203 199.773 593.102 199.999 592.977 200.244 C 592.852 200.489 592.688 200.721 592.485 200.939 C 592.287 201.163 592.039 201.343 591.742 201.478 C 591.446 201.619 591.086 201.689 590.664 201.689 C 590.498 201.689 590.336 201.674 590.18 201.642 C 590.029 201.616 589.886 201.588 589.75 201.556 L 589.742 200.119 C 589.795 200.124 589.857 200.129 589.93 200.135 C 590.008 200.14 590.071 200.142 590.117 200.142 C 590.43 200.142 590.69 200.103 590.899 200.025 C 591.107 199.952 591.276 199.833 591.407 199.666 C 591.542 199.499 591.657 199.275 591.75 198.994 L 592.36 197.353 Z M 591.063 189.822 L 593.071 196.15 L 593.407 198.135 L 592.102 198.471 L 589.032 189.822 L 591.063 189.822 Z M 603.102 189.822 L 603.102 191.322 L 598.977 191.322 L 598.977 189.822 L 603.102 189.822 Z M 604.578 189.822 L 604.578 198.275 L 602.696 198.275 L 602.696 189.822 L 604.578 189.822 Z M 598.516 189.822 L 600.375 189.822 L 600.149 194.002 C 600.117 194.622 600.055 195.168 599.961 195.642 C 599.873 196.111 599.753 196.515 599.602 196.853 C 599.451 197.187 599.266 197.458 599.047 197.666 C 598.828 197.874 598.573 198.028 598.282 198.127 C 597.99 198.226 597.662 198.275 597.297 198.275 L 596.711 198.275 L 596.703 196.728 L 597 196.705 C 597.193 196.689 597.36 196.64 597.5 196.556 C 597.641 196.468 597.761 196.343 597.86 196.181 C 597.964 196.02 598.047 195.812 598.11 195.556 C 598.177 195.301 598.229 194.999 598.266 194.65 C 598.308 194.301 598.339 193.895 598.36 193.431 L 598.516 189.822 Z M 606.657 197.338 C 606.657 197.046 606.755 196.801 606.953 196.603 C 607.151 196.4 607.42 196.299 607.758 196.299 C 608.102 196.299 608.37 196.4 608.563 196.603 C 608.761 196.801 608.86 197.046 608.86 197.338 C 608.86 197.629 608.761 197.874 608.563 198.072 C 608.37 198.27 608.102 198.369 607.758 198.369 C 607.42 198.369 607.151 198.27 606.953 198.072 C 606.755 197.874 606.657 197.629 606.657 197.338 Z M 619.469 193.135 L 616.571 193.135 L 616.555 191.705 L 619.086 191.705 C 619.513 191.705 619.875 191.642 620.172 191.517 C 620.474 191.387 620.703 191.202 620.86 190.963 C 621.016 190.718 621.094 190.424 621.094 190.08 C 621.094 189.7 621.021 189.39 620.875 189.15 C 620.729 188.911 620.505 188.736 620.203 188.627 C 619.907 188.517 619.526 188.463 619.063 188.463 L 617.164 188.463 L 617.164 198.275 L 615.203 198.275 L 615.203 186.9 L 619.063 186.9 C 619.688 186.9 620.245 186.96 620.735 187.08 C 621.229 187.2 621.649 187.387 621.992 187.642 C 622.341 187.892 622.604 188.21 622.782 188.596 C 622.964 188.981 623.055 189.439 623.055 189.971 C 623.055 190.439 622.943 190.869 622.719 191.26 C 622.495 191.645 622.164 191.96 621.727 192.205 C 621.289 192.45 620.745 192.596 620.094 192.642 L 619.469 193.135 Z M 619.383 198.275 L 615.953 198.275 L 616.836 196.721 L 619.383 196.721 C 619.826 196.721 620.196 196.648 620.492 196.502 C 620.789 196.351 621.011 196.145 621.157 195.885 C 621.308 195.619 621.383 195.309 621.383 194.955 C 621.383 194.585 621.318 194.265 621.188 193.994 C 621.058 193.718 620.852 193.507 620.571 193.361 C 620.289 193.21 619.922 193.135 619.469 193.135 L 617.266 193.135 L 617.282 191.705 L 620.149 191.705 L 620.594 192.244 C 621.219 192.265 621.732 192.403 622.133 192.658 C 622.539 192.913 622.841 193.244 623.039 193.65 C 623.237 194.056 623.336 194.494 623.336 194.963 C 623.336 195.687 623.177 196.293 622.86 196.783 C 622.547 197.273 622.097 197.645 621.508 197.9 C 620.92 198.15 620.211 198.275 619.383 198.275 Z M 629.891 196.58 L 629.891 192.549 C 629.891 192.247 629.836 191.986 629.727 191.767 C 629.617 191.549 629.451 191.379 629.227 191.26 C 629.008 191.14 628.732 191.08 628.399 191.08 C 628.091 191.08 627.826 191.132 627.602 191.236 C 627.378 191.34 627.203 191.481 627.078 191.658 C 626.953 191.835 626.891 192.036 626.891 192.26 L 625.016 192.26 C 625.016 191.926 625.097 191.603 625.258 191.291 C 625.42 190.978 625.654 190.7 625.961 190.455 C 626.269 190.21 626.636 190.017 627.063 189.877 C 627.49 189.736 627.969 189.666 628.5 189.666 C 629.136 189.666 629.698 189.773 630.188 189.986 C 630.683 190.2 631.071 190.523 631.352 190.955 C 631.638 191.382 631.782 191.918 631.782 192.564 L 631.782 196.322 C 631.782 196.708 631.808 197.054 631.86 197.361 C 631.917 197.663 631.998 197.926 632.102 198.15 L 632.102 198.275 L 630.172 198.275 C 630.084 198.072 630.013 197.814 629.961 197.502 C 629.914 197.184 629.891 196.877 629.891 196.58 Z M 630.164 193.135 L 630.18 194.299 L 628.828 194.299 C 628.479 194.299 628.172 194.333 627.907 194.4 C 627.641 194.463 627.42 194.556 627.242 194.681 C 627.065 194.806 626.933 194.958 626.844 195.135 C 626.755 195.312 626.711 195.512 626.711 195.736 C 626.711 195.96 626.763 196.166 626.867 196.353 C 626.972 196.536 627.123 196.679 627.321 196.783 C 627.524 196.887 627.769 196.939 628.055 196.939 C 628.44 196.939 628.776 196.861 629.063 196.705 C 629.354 196.543 629.584 196.348 629.75 196.119 C 629.917 195.885 630.005 195.663 630.016 195.455 L 630.625 196.291 C 630.563 196.504 630.456 196.734 630.305 196.978 C 630.154 197.223 629.956 197.458 629.711 197.681 C 629.472 197.9 629.183 198.08 628.844 198.221 C 628.511 198.361 628.125 198.431 627.688 198.431 C 627.136 198.431 626.644 198.322 626.211 198.103 C 625.779 197.879 625.44 197.58 625.196 197.205 C 624.951 196.825 624.828 196.395 624.828 195.916 C 624.828 195.468 624.912 195.072 625.078 194.728 C 625.25 194.379 625.5 194.088 625.828 193.853 C 626.162 193.619 626.568 193.442 627.047 193.322 C 627.526 193.197 628.073 193.135 628.688 193.135 L 630.164 193.135 Z M 637.203 196.931 C 637.511 196.931 637.787 196.872 638.032 196.752 C 638.282 196.627 638.482 196.455 638.633 196.236 C 638.789 196.017 638.875 195.765 638.891 195.478 L 640.664 195.478 C 640.654 196.025 640.492 196.523 640.18 196.971 C 639.867 197.418 639.453 197.775 638.938 198.041 C 638.422 198.301 637.852 198.431 637.227 198.431 C 636.581 198.431 636.019 198.322 635.539 198.103 C 635.06 197.879 634.662 197.572 634.344 197.181 C 634.026 196.791 633.787 196.34 633.625 195.83 C 633.469 195.319 633.391 194.773 633.391 194.189 L 633.391 193.916 C 633.391 193.333 633.469 192.786 633.625 192.275 C 633.787 191.76 634.026 191.306 634.344 190.916 C 634.662 190.525 635.06 190.221 635.539 190.002 C 636.019 189.778 636.578 189.666 637.219 189.666 C 637.896 189.666 638.49 189.801 639 190.072 C 639.511 190.338 639.912 190.71 640.203 191.189 C 640.5 191.663 640.654 192.215 640.664 192.846 L 638.891 192.846 C 638.875 192.533 638.797 192.252 638.657 192.002 C 638.521 191.747 638.328 191.543 638.078 191.392 C 637.834 191.241 637.539 191.166 637.196 191.166 C 636.815 191.166 636.5 191.244 636.25 191.4 C 636 191.551 635.805 191.76 635.664 192.025 C 635.524 192.286 635.422 192.58 635.36 192.908 C 635.302 193.231 635.274 193.567 635.274 193.916 L 635.274 194.189 C 635.274 194.538 635.302 194.877 635.36 195.205 C 635.417 195.533 635.516 195.827 635.657 196.088 C 635.802 196.343 636 196.549 636.25 196.705 C 636.5 196.856 636.818 196.931 637.203 196.931 Z M 644.055 195.525 L 647.375 189.822 L 649.258 189.822 L 649.258 198.275 L 647.375 198.275 L 647.375 192.564 L 644.055 198.275 L 642.172 198.275 L 642.172 189.822 L 644.055 189.822 L 644.055 195.525 Z M 656.93 189.822 L 656.93 191.322 L 652.805 191.322 L 652.805 189.822 L 656.93 189.822 Z M 658.406 189.822 L 658.406 198.275 L 656.523 198.275 L 656.523 189.822 L 658.406 189.822 Z M 652.344 189.822 L 654.203 189.822 L 653.977 194.002 C 653.945 194.622 653.883 195.168 653.789 195.642 C 653.701 196.111 653.581 196.515 653.43 196.853 C 653.279 197.187 653.094 197.458 652.875 197.666 C 652.656 197.874 652.401 198.028 652.109 198.127 C 651.818 198.226 651.49 198.275 651.125 198.275 L 650.539 198.275 L 650.531 196.728 L 650.828 196.705 C 651.021 196.689 651.188 196.64 651.328 196.556 C 651.469 196.468 651.589 196.343 651.688 196.181 C 651.792 196.02 651.875 195.812 651.938 195.556 C 652.005 195.301 652.057 194.999 652.094 194.65 C 652.135 194.301 652.167 193.895 652.188 193.431 L 652.344 189.822 Z M 672.039 186.9 L 672.039 188.463 L 666.586 188.463 L 666.586 186.9 L 672.039 186.9 Z M 673.539 186.9 L 673.539 198.275 L 671.578 198.275 L 671.578 186.9 L 673.539 186.9 Z M 666.195 186.9 L 668.141 186.9 L 667.867 192.549 C 667.831 193.377 667.76 194.106 667.656 194.736 C 667.552 195.366 667.411 195.905 667.234 196.353 C 667.057 196.801 666.833 197.168 666.563 197.455 C 666.292 197.736 665.966 197.944 665.586 198.08 C 665.211 198.21 664.771 198.275 664.266 198.275 L 663.766 198.275 L 663.766 196.721 L 664.07 196.697 C 664.346 196.676 664.583 196.611 664.781 196.502 C 664.984 196.387 665.156 196.221 665.297 196.002 C 665.438 195.778 665.555 195.489 665.648 195.135 C 665.742 194.78 665.815 194.348 665.867 193.838 C 665.925 193.327 665.966 192.731 665.992 192.049 L 666.195 186.9 Z M 679.43 198.431 C 678.805 198.431 678.24 198.33 677.734 198.127 C 677.234 197.918 676.807 197.629 676.453 197.26 C 676.104 196.89 675.836 196.455 675.648 195.955 C 675.461 195.455 675.367 194.916 675.367 194.338 L 675.367 194.025 C 675.367 193.364 675.464 192.765 675.656 192.228 C 675.849 191.692 676.117 191.234 676.461 190.853 C 676.805 190.468 677.211 190.174 677.68 189.971 C 678.148 189.767 678.656 189.666 679.203 189.666 C 679.807 189.666 680.336 189.767 680.789 189.971 C 681.242 190.174 681.617 190.46 681.914 190.83 C 682.216 191.194 682.44 191.629 682.586 192.135 C 682.737 192.64 682.813 193.197 682.813 193.806 L 682.813 194.611 L 676.281 194.611 L 676.281 193.26 L 680.953 193.26 L 680.953 193.111 C 680.943 192.773 680.875 192.455 680.75 192.158 C 680.63 191.861 680.445 191.622 680.195 191.439 C 679.945 191.257 679.612 191.166 679.195 191.166 C 678.883 191.166 678.604 191.234 678.359 191.369 C 678.12 191.499 677.919 191.689 677.758 191.939 C 677.596 192.189 677.471 192.491 677.383 192.846 C 677.3 193.194 677.258 193.588 677.258 194.025 L 677.258 194.338 C 677.258 194.708 677.307 195.051 677.406 195.369 C 677.51 195.681 677.661 195.955 677.859 196.189 C 678.057 196.424 678.297 196.609 678.578 196.744 C 678.859 196.874 679.18 196.939 679.539 196.939 C 679.992 196.939 680.396 196.848 680.75 196.666 C 681.104 196.484 681.411 196.226 681.672 195.892 L 682.664 196.853 C 682.482 197.119 682.245 197.374 681.953 197.619 C 681.661 197.859 681.305 198.054 680.883 198.205 C 680.466 198.356 679.982 198.431 679.43 198.431 Z M 688.391 194.658 L 685.688 194.658 L 685.672 193.33 L 687.891 193.33 C 688.255 193.33 688.555 193.293 688.789 193.221 C 689.029 193.148 689.206 193.038 689.32 192.892 C 689.435 192.741 689.492 192.559 689.492 192.346 C 689.492 192.168 689.458 192.015 689.391 191.885 C 689.323 191.749 689.219 191.64 689.078 191.556 C 688.943 191.468 688.771 191.405 688.563 191.369 C 688.359 191.327 688.122 191.306 687.852 191.306 L 686.313 191.306 L 686.313 198.275 L 684.43 198.275 L 684.43 189.822 L 687.852 189.822 C 688.393 189.822 688.88 189.869 689.313 189.963 C 689.75 190.056 690.122 190.2 690.43 190.392 C 690.737 190.585 690.971 190.83 691.133 191.127 C 691.3 191.418 691.383 191.762 691.383 192.158 C 691.383 192.418 691.326 192.663 691.211 192.892 C 691.102 193.122 690.938 193.325 690.719 193.502 C 690.5 193.679 690.232 193.825 689.914 193.939 C 689.596 194.049 689.232 194.116 688.82 194.142 L 688.391 194.658 Z M 688.391 198.275 L 685.141 198.275 L 685.891 196.791 L 688.391 196.791 C 688.724 196.791 689 196.749 689.219 196.666 C 689.438 196.583 689.599 196.463 689.703 196.306 C 689.813 196.145 689.867 195.955 689.867 195.736 C 689.867 195.512 689.815 195.319 689.711 195.158 C 689.607 194.997 689.445 194.874 689.227 194.791 C 689.013 194.702 688.734 194.658 688.391 194.658 L 686.242 194.658 L 686.258 193.33 L 688.813 193.33 L 689.352 193.846 C 689.888 193.882 690.333 193.997 690.688 194.189 C 691.042 194.382 691.307 194.624 691.484 194.916 C 691.661 195.208 691.75 195.525 691.75 195.869 C 691.75 196.265 691.675 196.614 691.523 196.916 C 691.378 197.218 691.159 197.471 690.867 197.674 C 690.581 197.872 690.229 198.023 689.813 198.127 C 689.396 198.226 688.922 198.275 688.391 198.275 Z M 696.828 196.931 C 697.135 196.931 697.411 196.872 697.656 196.752 C 697.906 196.627 698.107 196.455 698.258 196.236 C 698.414 196.017 698.5 195.765 698.516 195.478 L 700.289 195.478 C 700.279 196.025 700.117 196.523 699.805 196.971 C 699.492 197.418 699.078 197.775 698.563 198.041 C 698.047 198.301 697.477 198.431 696.852 198.431 C 696.206 198.431 695.643 198.322 695.164 198.103 C 694.685 197.879 694.286 197.572 693.969 197.181 C 693.651 196.791 693.411 196.34 693.25 195.83 C 693.094 195.319 693.016 194.773 693.016 194.189 L 693.016 193.916 C 693.016 193.333 693.094 192.786 693.25 192.275 C 693.411 191.76 693.651 191.306 693.969 190.916 C 694.286 190.525 694.685 190.221 695.164 190.002 C 695.643 189.778 696.203 189.666 696.844 189.666 C 697.521 189.666 698.115 189.801 698.625 190.072 C 699.135 190.338 699.536 190.71 699.828 191.189 C 700.125 191.663 700.279 192.215 700.289 192.846 L 698.516 192.846 C 698.5 192.533 698.422 192.252 698.281 192.002 C 698.146 191.747 697.953 191.543 697.703 191.392 C 697.458 191.241 697.164 191.166 696.82 191.166 C 696.44 191.166 696.125 191.244 695.875 191.4 C 695.625 191.551 695.43 191.76 695.289 192.025 C 695.148 192.286 695.047 192.58 694.984 192.908 C 694.927 193.231 694.898 193.567 694.898 193.916 L 694.898 194.189 C 694.898 194.538 694.927 194.877 694.984 195.205 C 695.042 195.533 695.141 195.827 695.281 196.088 C 695.427 196.343 695.625 196.549 695.875 196.705 C 696.125 196.856 696.443 196.931 696.828 196.931 Z M 703.766 189.822 L 703.766 198.275 L 701.883 198.275 L 701.883 189.822 L 703.766 189.822 Z M 709.281 189.822 L 705.477 194.908 L 703.328 194.908 L 703.078 193.205 L 704.648 193.205 L 706.93 189.822 L 709.281 189.822 Z M 707.078 198.275 L 704.531 194.588 L 706.016 193.517 L 709.555 198.275 L 707.078 198.275 Z M 712.523 195.525 L 715.844 189.822 L 717.727 189.822 L 717.727 198.275 L 715.844 198.275 L 715.844 192.564 L 712.523 198.275 L 710.641 198.275 L 710.641 189.822 L 712.523 189.822 L 712.523 195.525 Z M 737.875 193.908 L 737.875 195.025 L 733.148 195.025 L 733.148 193.908 L 737.875 193.908 Z M 732.828 190.174 L 732.828 189.525 C 732.828 188.989 732.938 188.515 733.156 188.103 C 733.38 187.687 733.693 187.361 734.094 187.127 C 734.495 186.892 734.969 186.775 735.516 186.775 C 736.073 186.775 736.55 186.892 736.945 187.127 C 737.346 187.361 737.656 187.687 737.875 188.103 C 738.094 188.515 738.203 188.989 738.203 189.525 L 738.203 190.174 C 738.203 190.71 738.094 191.184 737.875 191.596 C 737.661 192.007 737.354 192.33 736.953 192.564 C 736.557 192.799 736.083 192.916 735.531 192.916 C 734.979 192.916 734.5 192.799 734.094 192.564 C 733.693 192.33 733.38 192.007 733.156 191.596 C 732.938 191.184 732.828 190.71 732.828 190.174 Z M 734.141 189.525 L 734.141 190.174 C 734.141 190.491 734.19 190.773 734.289 191.017 C 734.388 191.262 734.542 191.455 734.75 191.596 C 734.958 191.736 735.219 191.806 735.531 191.806 C 735.839 191.806 736.094 191.736 736.297 191.596 C 736.5 191.455 736.651 191.262 736.75 191.017 C 736.849 190.773 736.898 190.491 736.898 190.174 L 736.898 189.525 C 736.898 189.213 736.846 188.934 736.742 188.689 C 736.643 188.444 736.492 188.252 736.289 188.111 C 736.086 187.965 735.828 187.892 735.516 187.892 C 735.208 187.892 734.951 187.965 734.742 188.111 C 734.539 188.252 734.388 188.444 734.289 188.689 C 734.19 188.934 734.141 189.213 734.141 189.525 Z M 731.734 186.9 L 731.734 198.275 L 729.664 198.275 L 725.75 190.127 L 725.75 198.275 L 723.859 198.275 L 723.859 186.9 L 725.93 186.9 L 729.852 195.064 L 729.852 186.9 L 731.734 186.9 Z M 745.063 186.861 L 745.063 198.275 L 743.18 198.275 L 743.18 189.096 L 740.391 190.041 L 740.391 188.486 L 744.836 186.861 L 745.063 186.861 Z M 756.641 196.775 L 756.641 198.275 L 749.016 198.275 L 749.016 196.986 L 752.719 192.947 C 753.125 192.489 753.445 192.093 753.68 191.76 C 753.914 191.426 754.078 191.127 754.172 190.861 C 754.271 190.59 754.32 190.327 754.32 190.072 C 754.32 189.713 754.253 189.398 754.117 189.127 C 753.987 188.851 753.794 188.635 753.539 188.478 C 753.284 188.317 752.974 188.236 752.609 188.236 C 752.188 188.236 751.833 188.327 751.547 188.51 C 751.26 188.692 751.044 188.944 750.898 189.267 C 750.753 189.585 750.68 189.95 750.68 190.361 L 748.797 190.361 C 748.797 189.7 748.948 189.096 749.25 188.549 C 749.552 187.997 749.99 187.559 750.563 187.236 C 751.135 186.908 751.826 186.744 752.633 186.744 C 753.393 186.744 754.039 186.872 754.57 187.127 C 755.102 187.382 755.505 187.744 755.781 188.213 C 756.063 188.681 756.203 189.236 756.203 189.877 C 756.203 190.231 756.146 190.583 756.031 190.931 C 755.917 191.28 755.753 191.629 755.539 191.978 C 755.331 192.322 755.083 192.668 754.797 193.017 C 754.51 193.361 754.195 193.71 753.852 194.064 L 751.391 196.775 L 756.641 196.775 Z M 760.32 191.736 L 761.445 191.736 C 761.883 191.736 762.245 191.661 762.531 191.51 C 762.823 191.359 763.039 191.15 763.18 190.885 C 763.32 190.619 763.391 190.314 763.391 189.971 C 763.391 189.611 763.326 189.304 763.195 189.049 C 763.07 188.788 762.878 188.588 762.617 188.447 C 762.362 188.306 762.036 188.236 761.641 188.236 C 761.307 188.236 761.005 188.304 760.734 188.439 C 760.469 188.569 760.258 188.757 760.102 189.002 C 759.945 189.241 759.867 189.528 759.867 189.861 L 757.977 189.861 C 757.977 189.257 758.135 188.721 758.453 188.252 C 758.771 187.783 759.203 187.416 759.75 187.15 C 760.302 186.879 760.922 186.744 761.609 186.744 C 762.344 186.744 762.984 186.866 763.531 187.111 C 764.083 187.351 764.513 187.71 764.82 188.189 C 765.128 188.668 765.281 189.262 765.281 189.971 C 765.281 190.293 765.206 190.622 765.055 190.955 C 764.904 191.288 764.68 191.593 764.383 191.869 C 764.086 192.14 763.716 192.361 763.273 192.533 C 762.831 192.7 762.318 192.783 761.734 192.783 L 760.32 192.783 L 760.32 191.736 Z M 760.32 193.205 L 760.32 192.174 L 761.734 192.174 C 762.401 192.174 762.969 192.252 763.438 192.408 C 763.911 192.564 764.297 192.78 764.594 193.056 C 764.891 193.327 765.107 193.637 765.242 193.986 C 765.383 194.335 765.453 194.705 765.453 195.096 C 765.453 195.627 765.357 196.101 765.164 196.517 C 764.977 196.929 764.708 197.278 764.359 197.564 C 764.01 197.851 763.602 198.067 763.133 198.213 C 762.669 198.359 762.164 198.431 761.617 198.431 C 761.128 198.431 760.659 198.364 760.211 198.228 C 759.763 198.093 759.362 197.892 759.008 197.627 C 758.654 197.356 758.372 197.02 758.164 196.619 C 757.961 196.213 757.859 195.744 757.859 195.213 L 759.742 195.213 C 759.742 195.551 759.82 195.851 759.977 196.111 C 760.138 196.366 760.362 196.567 760.648 196.713 C 760.94 196.859 761.273 196.931 761.648 196.931 C 762.044 196.931 762.385 196.861 762.672 196.721 C 762.958 196.58 763.177 196.372 763.328 196.096 C 763.484 195.819 763.563 195.486 763.563 195.096 C 763.563 194.653 763.477 194.293 763.305 194.017 C 763.133 193.741 762.888 193.538 762.57 193.408 C 762.253 193.273 761.878 193.205 761.445 193.205 L 760.32 193.205 Z" fill="#EDEDED"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M 573.97 180.834 C 573.383 180.834 572.905 180.356 572.905 179.769 C 572.905 179.182 573.383 178.704 573.97 178.704 C 574.557 178.704 575.035 179.182 575.035 179.769 C 575.035 180.356 574.557 180.834 573.97 180.834 Z M 573.97 176.573 C 572.205 176.573 570.775 178.004 570.775 179.769 C 570.775 181.534 572.205 182.964 573.97 182.964 C 575.735 182.964 577.166 181.534 577.166 179.769 C 577.166 178.004 575.735 176.573 573.97 176.573 Z M 573.97 189.745 C 573.97 189.745 568.644 182.288 568.644 179.093 C 568.644 176.156 571.033 173.767 573.97 173.767 C 576.907 173.767 579.296 176.156 579.296 179.093 C 579.296 182.288 573.97 189.745 573.97 189.745 Z M 573.97 171.637 C 569.852 171.637 566.514 174.975 566.514 179.093 C 566.514 183.211 573.97 192.94 573.97 192.94 C 573.97 192.94 581.426 183.211 581.426 179.093 C 581.426 174.975 578.088 171.637 573.97 171.637 Z" fill="white"/>
            <g filter="url(#filter0_d_240_2024)" transform="matrix(1, 0, 0, 1, 546.220284, 132.444933)">
                <path d="M326.283 49.6593C326.283 65.6346 313.332 78.5851 297.357 78.5851C281.381 78.5851 268.431 65.6346 268.431 49.6593C268.431 33.684 281.381 20.7335 297.357 20.7335C313.332 20.7335 326.283 33.684 326.283 49.6593Z" fill="#008AEE"/>
                <path d="M298.166 85.4493C297.74 85.9448 296.973 85.9448 296.548 85.4493L289.671 77.4438C289.077 76.7522 289.568 75.6822 290.48 75.6822H304.234C305.145 75.6822 305.637 76.7522 305.043 77.4438L298.166 85.4493Z" fill="#008AEE"/>
            </g>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M 839.836 164.843 C 841.043 164.582 842.293 164.444 843.577 164.444 C 845.005 164.444 846.394 164.615 847.724 164.935 L 847.724 167.339 C 849.003 167.698 850.215 168.218 851.334 168.878 L 853.023 167.187 C 855.268 168.615 857.168 170.537 858.571 172.8 L 856.878 174.496 C 857.515 175.61 858.017 176.81 858.359 178.077 L 860.755 178.077 C 861.056 179.37 861.217 180.719 861.217 182.104 C 861.217 183.433 861.069 184.728 860.791 185.973 L 858.405 185.973 C 858.071 187.26 857.571 188.48 856.935 189.612 L 858.631 191.311 C 857.243 193.584 855.355 195.517 853.119 196.959 L 851.433 195.271 C 850.285 195.959 849.041 196.499 847.724 196.869 L 847.724 199.272 C 846.394 199.594 845.005 199.765 843.577 199.765 C 842.293 199.765 841.043 199.626 839.836 199.365 L 839.836 196.98 C 839.184 196.816 838.55 196.609 837.933 196.363 L 840.677 193.617 C 841.606 193.85 842.577 193.976 843.577 193.976 C 850.125 193.976 855.435 188.661 855.435 182.104 C 855.435 175.547 850.125 170.232 843.577 170.232 C 837.027 170.232 831.718 175.547 831.718 182.104 C 831.718 183.17 831.862 184.202 832.123 185.184 L 829.397 187.915 C 829.14 187.288 828.921 186.64 828.749 185.973 L 826.363 185.973 C 826.085 184.728 825.937 183.433 825.937 182.104 C 825.937 180.719 826.097 179.37 826.398 178.077 L 828.793 178.077 C 829.164 176.712 829.715 175.423 830.426 174.237 L 828.738 172.55 C 830.178 170.313 832.109 168.422 834.38 167.031 L 836.076 168.73 C 837.244 168.073 838.505 167.562 839.836 167.228 L 839.836 164.843 Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M 843.948 174.656 C 844.662 174.656 845.377 174.763 846.066 174.975 L 841.533 179.512 L 842.538 183.265 L 846.287 184.271 L 850.82 179.734 C 850.996 180.309 851.099 180.902 851.129 181.498 L 851.138 181.856 C 851.138 183.595 850.512 185.334 849.26 186.705 L 849.033 186.943 C 847.148 188.83 844.477 189.449 842.075 188.802 L 841.81 188.725 L 832.677 197.859 C 830.892 196.749 829.359 195.272 828.181 193.534 L 827.934 193.157 L 837.085 183.995 C 836.346 181.612 836.87 178.92 838.662 176.976 L 838.866 176.763 C 840.191 175.437 841.905 174.737 843.641 174.663 L 843.948 174.656 Z" fill="white"/>
        </g>
        <g id="sofia" class="cursor-pointer" transform="matrix(1, 0, 0, 1, 0, 7.105427357601002e-15)">
            <g filter="url(#filter0_d_240_2037)" transform="matrix(1, 0, 0, 1, 145.404574, 218.444736)">
                <path d="M78.7012 49.7372C78.7012 65.7125 65.7507 78.663 49.7754 78.663C33.8001 78.663 20.8496 65.7125 20.8496 49.7372C20.8496 33.762 33.8001 20.8114 49.7754 20.8114C65.7507 20.8114 78.7012 33.762 78.7012 49.7372Z" fill="#008AEE"/>
                <path d="M50.5845 85.5273C50.1588 86.0227 49.3919 86.0227 48.9663 85.5273L42.0894 77.5218C41.4953 76.8301 41.9867 75.7602 42.8985 75.7602H56.6523C57.5641 75.7602 58.0555 76.8301 57.4613 77.5218L50.5845 85.5273Z" fill="#008AEE"/>
            </g>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M 191.44 250.921 C 192.646 250.66 193.896 250.522 195.18 250.522 C 196.609 250.522 197.998 250.693 199.327 251.013 L 199.327 253.417 C 200.606 253.776 201.818 254.296 202.937 254.957 L 204.627 253.265 C 206.871 254.693 208.772 256.615 210.175 258.878 L 208.481 260.574 C 209.118 261.688 209.62 262.888 209.962 264.155 L 212.358 264.155 C 212.66 265.448 212.82 266.797 212.82 268.182 C 212.82 269.511 212.672 270.806 212.395 272.051 L 210.009 272.051 C 209.674 273.338 209.175 274.558 208.538 275.69 L 210.235 277.389 C 208.847 279.662 206.959 281.595 204.723 283.037 L 203.037 281.35 C 201.889 282.037 200.644 282.577 199.327 282.947 L 199.327 285.351 C 197.998 285.672 196.609 285.843 195.18 285.843 C 193.896 285.843 192.646 285.704 191.44 285.443 L 191.44 283.058 C 190.787 282.894 190.153 282.687 189.537 282.441 L 192.28 279.695 C 193.209 279.928 194.18 280.054 195.18 280.054 C 201.729 280.054 207.038 274.739 207.038 268.182 C 207.038 261.625 201.729 256.31 195.18 256.31 C 188.63 256.31 183.322 261.625 183.322 268.182 C 183.322 269.248 183.465 270.28 183.727 271.262 L 181 273.993 C 180.743 273.366 180.525 272.718 180.352 272.051 L 177.966 272.051 C 177.688 270.806 177.54 269.511 177.54 268.182 C 177.54 266.797 177.7 265.448 178.001 264.155 L 180.396 264.155 C 180.767 262.79 181.319 261.501 182.029 260.315 L 180.342 258.628 C 181.782 256.391 183.712 254.5 185.984 253.109 L 187.68 254.808 C 188.848 254.151 190.109 253.64 191.44 253.306 L 191.44 250.921 Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M 195.551 260.735 C 196.266 260.735 196.981 260.841 197.67 261.053 L 193.137 265.59 L 194.141 269.344 L 197.891 270.349 L 202.423 265.812 C 202.6 266.387 202.703 266.98 202.732 267.576 L 202.741 267.934 C 202.741 269.673 202.116 271.412 200.864 272.783 L 200.636 273.021 C 198.751 274.908 196.08 275.527 193.679 274.88 L 193.413 274.803 L 184.28 283.937 C 182.496 282.827 180.963 281.35 179.785 279.612 L 179.538 279.235 L 188.689 270.073 C 187.949 267.69 188.474 264.998 190.265 263.054 L 190.469 262.841 C 191.794 261.515 193.509 260.815 195.245 260.741 L 195.551 260.735 Z" fill="white"/>
        </g>
        <g id="varna" class="cursor-pointer" transform="matrix(1, 0, 0, 1, 0, 7.105427357601002e-15)">
            <g>
                <g filter="url(#filter0_d_240_2037)" transform="matrix(1, 0, 0, 1, 1001.359085, 115.265901)">
                    <path d="M78.7012 49.7372C78.7012 65.7125 65.7507 78.663 49.7754 78.663C33.8001 78.663 20.8496 65.7125 20.8496 49.7372C20.8496 33.762 33.8001 20.8114 49.7754 20.8114C65.7507 20.8114 78.7012 33.762 78.7012 49.7372Z" fill="#008AEE"/>
                    <path d="M50.5845 85.5273C50.1588 86.0227 49.3919 86.0227 48.9663 85.5273L42.0894 77.5218C41.4953 76.8301 41.9867 75.7602 42.8985 75.7602H56.6523C57.5641 75.7602 58.0555 76.8301 57.4613 77.5218L50.5845 85.5273Z" fill="#008AEE"/>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M 1047.394 147.742 C 1048.6 147.481 1049.85 147.343 1051.134 147.343 C 1052.563 147.343 1053.952 147.514 1055.281 147.834 L 1055.281 150.238 C 1056.56 150.597 1057.772 151.117 1058.891 151.778 L 1060.581 150.086 C 1062.825 151.514 1064.726 153.436 1066.129 155.699 L 1064.435 157.395 C 1065.072 158.509 1065.574 159.709 1065.916 160.976 L 1068.312 160.976 C 1068.614 162.269 1068.774 163.618 1068.774 165.003 C 1068.774 166.332 1068.626 167.627 1068.349 168.872 L 1065.963 168.872 C 1065.628 170.159 1065.129 171.379 1064.492 172.511 L 1066.189 174.21 C 1064.801 176.483 1062.913 178.416 1060.677 179.858 L 1058.991 178.171 C 1057.843 178.858 1056.598 179.398 1055.281 179.768 L 1055.281 182.172 C 1053.952 182.493 1052.563 182.664 1051.134 182.664 C 1049.85 182.664 1048.6 182.525 1047.394 182.264 L 1047.394 179.879 C 1046.741 179.715 1046.107 179.508 1045.491 179.262 L 1048.234 176.516 C 1049.163 176.749 1050.134 176.875 1051.134 176.875 C 1057.683 176.875 1062.992 171.56 1062.992 165.003 C 1062.992 158.446 1057.683 153.131 1051.134 153.131 C 1044.584 153.131 1039.276 158.446 1039.276 165.003 C 1039.276 166.069 1039.419 167.101 1039.681 168.083 L 1036.954 170.814 C 1036.697 170.187 1036.479 169.539 1036.306 168.872 L 1033.92 168.872 C 1033.642 167.627 1033.494 166.332 1033.494 165.003 C 1033.494 163.618 1033.654 162.269 1033.955 160.976 L 1036.35 160.976 C 1036.721 159.611 1037.273 158.322 1037.983 157.136 L 1036.296 155.449 C 1037.736 153.212 1039.666 151.321 1041.938 149.93 L 1043.634 151.629 C 1044.802 150.972 1046.063 150.461 1047.394 150.127 L 1047.394 147.742 Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M 1051.505 157.556 C 1052.22 157.556 1052.935 157.662 1053.624 157.874 L 1049.091 162.411 L 1050.095 166.165 L 1053.845 167.17 L 1058.377 162.633 C 1058.554 163.208 1058.657 163.801 1058.686 164.397 L 1058.695 164.755 C 1058.695 166.494 1058.07 168.233 1056.818 169.604 L 1056.59 169.842 C 1054.705 171.729 1052.034 172.348 1049.633 171.701 L 1049.367 171.624 L 1040.234 180.758 C 1038.45 179.648 1036.917 178.171 1035.739 176.433 L 1035.492 176.056 L 1044.643 166.894 C 1043.903 164.511 1044.428 161.819 1046.219 159.875 L 1046.423 159.662 C 1047.748 158.336 1049.463 157.636 1051.199 157.562 L 1051.505 157.556 Z" fill="white"/>
            </g>
        </g>
    </svg>
    <img src="../assets/map.svg" alt="">

</div>
<footer class="bg-nav-secondary py-[33px] px-[15px] flex justify-center items-center mt-[120px]">
    <div class="container flex flex-col lg:flex-row justify-center  gap-[16px]  ">
        <div class="flex flex-col gap-[16px]">
            <div class="flex gap-[10px] rounded-[10px] flex-col bg-nav-primary py-[33px] px-[15px] text-white">
                <p class="font-bold">Полезно за вас</p>
                <p class="font-[500]">Формуляр за връщане</p>
                <p class="font-[500]">Мнения за MEGAPARTS</p>
                <p class="font-[500]">Регистрирай се за продавач</p>
            </div>
            <div class="flex rounded-[10px] flex-col bg-nav-primary py-[15px] text-center px-[15px] text-accent-green font-bold">
                <p class="font-bold">Онлайн оценка на колата ви</p>
            </div>
        </div>
        <div class="flex gap-[10px] rounded-[10px] flex-col bg-nav-primary py-[33px] px-[15px] text-white">
            <p class="font-bold">Онлайн Пазаруване</p>
            <p class="font-[500]">Общи условия на платформата</p>
            <p class="font-[500]">Политика за използване на “бисквитки”</p>
            <p class="font-[500]">Политика за защита на лични данни</p>
        </div>
        <div class="flex gap-[10px] rounded-[10px] flex-col bg-nav-primary py-[33px] px-[15px] text-white">
            <p class="font-bold">За нас</p>
            <p class="font-[500]">Представяне</p>
            <p class="font-[500]">Социални мрежи</p>
            <p class="font-[500]">at@megaparts.bg</p>
        </div>
        <div class="flex gap-[10px] rounded-[10px] flex-col bg-nav-primary py-[33px] px-[15px] text-white">
            <div class="flex flex-col gap-1 justify-center items-center">
                <img src="../assets/nav/Megaparts-Logo-Light-Large.svg" alt="">
                <p class="text-primary-text-light text-[14px] font-[500]">2023 © MEGAPARTS Marketplace</p>
            </div>
            <div class="flex flex-col gap-[10px] justify-center items-center">
                <img class="w-[115px] h-[30px]" src="../assets/nav/MEGA-Bulgarian-Text.svg" alt="">
                <img class="w-[115px] h-[30px]" src="../assets/nav/MEGACARS-Text.svg" alt="">
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>