
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEGAPARTS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>

    <script defer src="../node_modules/gsap/dist/gsap.min.js"></script>
    <script defer src="../node_modules/gsap/dist/ScrollTrigger.min.js"></script>

    <link rel="stylesheet" href="swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="app.js"></script>


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
                <img src="../assets/nav/Basket-Vector.svg" alt="">
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
    <div  class="container mx-auto relative ">
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
<div id="add-cart-cards" class="flex gap-[25px] container mx-auto  flex-wrap items-center justify-center my-[20px]   right-appear-animation">

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
        <div class="swiper-slide flex flex-col items-center gap-[20px] w-[150px]">
            <img src="../assets/reviews/“.svg" class="w-[29px] h-[26px]" alt=>
            <p class="text-center font-[500] font-roboto main-text ">Доволен съм от поръчаните до момента авточасти.
                Хубаво е
                да Ви има на пазара с авточасти, защото иначе
                автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък пазар на
                части
                втора употреба. Благодаря!</p>
            <div class="flex ">
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
        <div class="swiper-slide flex flex-col items-center gap-[20px] w-[150px]">
            <img src="../assets/reviews/“.svg" class="w-[29px] h-[26px]" alt=>
            <p class="text-center font-[500] font-roboto main-text ">Доволен съм от поръчаните до момента авточасти.
                Хубаво е
                да Ви има на пазара с авточасти, защото иначе
                автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък пазар на
                части
                втора употреба. Благодаря!</p>
            <div class="flex ">
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
        <div class="swiper-slide flex flex-col items-center gap-[20px] w-[150px]">
            <img src="../assets/reviews/“.svg" class="w-[29px] h-[26px]" alt=>
            <p class="text-center font-[500] font-roboto main-text ">Доволен съм от поръчаните до момента авточасти.
                Хубаво е
                да Ви има на пазара с авточасти, защото иначе
                автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък пазар на
                части
                втора употреба. Благодаря!</p>
            <div class="flex ">
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
        <div class="swiper-slide flex flex-col items-center gap-[20px] w-[150px]">
            <img src="../assets/reviews/“.svg" class="w-[29px] h-[26px]" alt=>
            <p class="text-center font-[500] font-roboto main-text ">Доволен съм от поръчаните до момента авточасти.
                Хубаво е
                да Ви има на пазара с авточасти, защото иначе
                автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък пазар на
                части
                втора употреба. Благодаря!</p>
            <div class="flex ">
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
        <div class="swiper-slide flex flex-col items-center gap-[20px] w-[150px]">
            <img src="../assets/reviews/“.svg" class="w-[29px] h-[26px]" alt=>
            <p class="text-center font-[500] font-roboto main-text ">Доволен съм от поръчаните до момента авточасти.
                Хубаво е
                да Ви има на пазара с авточасти, защото иначе
                автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък пазар на
                части
                втора употреба. Благодаря!</p>
            <div class="flex ">
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
        <div class="swiper-slide flex flex-col items-center gap-[20px] w-[150px]">
            <img src="../assets/reviews/“.svg" class="w-[29px] h-[26px]" alt=>
            <p class="text-center font-[500] font-roboto main-text ">Доволен съм от поръчаните до момента авточасти.
                Хубаво е
                да Ви има на пазара с авточасти, защото иначе
                автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък пазар на
                части
                втора употреба. Благодаря!</p>
            <div class="flex ">
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
<div  class="container relative h-full mx-auto  flex justify-center items-center  mt-[100px]">
    <img class=" " src="../assets/map.svg" alt="">
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


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>