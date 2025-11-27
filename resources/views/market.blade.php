@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $market->title;
$breadcrumbTitle = $market->title;

?>

<main class="main-field ">
    <!-- BREADCRUMB | FEATURED IMAGE -->
    <section class="breadcrumb-field relative pb-[85px] md:pb-0 md:pt-[var(--header-height)] overflow-hidden">
        <!-- FEATURED CAROUSEL -->
        <div class="carousel-field relative h-[calc(100%-85px-35px)] md:h-auto">
            <div class="background [background:_linear-gradient(180deg,_#FFF_0%,_rgba(255,_255,_255,_0.00)_55.38%)] absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
            <div class="background [background:_linear-gradient(0deg,_#FFF_0%,_rgba(255,_255,_255,_0.00)_55.38%)] absolute bottom-0 left-0 w-full h-[50%] z-2 translate-z-0 pointer-events-none hidden md:block"></div>
            <div class="featured-product-carousel swiper h-full">
                <div class="swiper-wrapper">
                    <?php foreach ($marketProducts as $key => $item) : ?>
                        <div class="swiper-slide group/slide">
                            <div class="image-field relative translate-z-0 h-full">
                                <div class="image overflow-hidden translate-z-0 aspect-[1920/720] h-[720px] xl:h-[700px] lg:h-[500px] md:h-auto md:aspect-[5/4] w-full">
                                    <img src="{{ env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $item['lang']) . '/' . $item['image'] }}" class="full-cover" alt="">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="carousel-field relative hidden md:block">
                <div class="carousel-controller">
                    <div class="carousel-navigation flex justify-center gap-[20px] md:gap-[15px] sm:gap-[10px] pointer-events-none z-20 absolute bottom-[20px] right-[20px]">
                        <div class="featured-product-prev cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                            <div class="icon group/navigation flex items-center justify-center duration-350">
                                <i class="icon-arrow-left text-main-500 text-[45px] h-[45px] sm:text-[35px] sm:h-[35px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[-3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[3px]"></i>
                            </div>
                        </div>
                        <div class="featured-product-next cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                            <div class="icon group/navigation flex items-center justify-center duration-350">
                                <div class="icon-arrow-right text-main-500 text-[45px] h-[45px] sm:text-[35px] sm:h-[35px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[-3px]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-field absolute left-[25px] top-1/2 max-w-[93px] w-full z-20 translate-y-[calc((-50%-var(--header-height)+135px))] xl:translate-y-[calc((-50%-var(--header-height)+160px))] lg:translate-y-[calc((-50%-var(--header-height)+130px))] xl:flex xl:max-w-[calc(93px+45px+15px)] xl:gap-[15px] md:hidden">
                <div class="carousel-controller mb-[20px] xl:mb-0 xl:order-2 xl:flex xl:items-end">
                    <div class="carousel-navigation flex flex-col justify-center pointer-events-none z-20">
                        <div class="featured-product-thumb-prev cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                            <div class="icon group/navigation flex items-center justify-center duration-350">
                                <i class="icon-arrow-left text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[-3px]"></i>
                            </div>
                        </div>
                        <div class="featured-product-thumb-next cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                            <div class="icon group/navigation flex items-center justify-center duration-350">
                                <div class="icon-arrow-right text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[3px]"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-product-thumb-carousel swiper h-[240px] lg:h-[175px] xl:order-1">
                    <div class="swiper-wrapper">
                        <?php foreach ($marketProducts as $key => $item) : ?>
                            <div class="swiper-slide group/slide">
                                <div class="image-field relative translate-z-0 aspect-[93/72] w-full h-full border border-solid border-transparent group-[&.swiper-slide-active]/slide:border-main-500">
                                    <div class="image overflow-hidden translate-z-0 w-full h-full cursor-pointer">
                                        <img src="{{ env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], $item['lang']) . '/' . $item['image'] }}" class="full-cover" alt="">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- 2 ADET OLMALI -->
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide lg:hidden"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT INFO -->
        <div class="content-field absolute left-0 bottom-0 z-20 w-full pointer-events-none md:relative md:bottom-auto md:left-auto">
            <div class="background-svg absolute left-0 top-0 z-30 h-full group/bg-svg w-full translate-x-[-25px] pointer-events-none 2xl:hidden">
                <svg class="h-full duration-350 scale-x-0 group-[&.is-active]/bg-svg:scale-x-100 origin-left" width="165" height="308" viewBox="0 0 165 308" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.15" clip-path="url(#clip0_5240_4905)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M-66.2405 23.0679V291.988L-88 285.835V29.2597L-79.5756 26.8518L-66.2405 23.0679ZM149.238 -38.0469L150 353.294L100.216 339.191V-24.1346L149.238 -38.0469ZM76.7627 -17.4842V332.54L48.9072 324.629V-9.57249L76.7627 -17.4842ZM27.698 -3.57185V318.59L-0.157593 310.678V4.33982L27.698 -3.57185ZM-21.3244 10.3405V304.716L-46.2166 297.645V17.4113L-21.3244 10.3405Z" fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_5240_4905">
                            <rect width="165" height="308" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="container max-w-[1500px] relative z-20 pointer-events-none">
                <div class="breadcrumb-wrapper grid grid-cols-2 xl:grid-cols-[minmax(0,6.5fr)_minmax(0,6fr)] gap-[15px] md:grid-cols-1">
                    <div class="wrapper max-w-[calc(650px+95px)] pr-[95px] relative pointer-events-auto 2xl:pr-[60px] xl:pr-[40px] md:max-w-full md:pr-0 rtl:pr-0 rtl:2xl:pr-0 rtl:xl:pr-0 rtl:md:pr-0 rtl:pl-[95px] rtl:2xl:pl-[60px] rtl:xl:pl-[40px] rtl:md:pl-0">
                        <div class="breadcrumb-background bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
                        <div class="content py-[40px] xl:py-[40px] lg:py-[30px] flex flex-col gap-[50px] relative z-20 xl:gap-[30px] lg:gap-[30px] md:gap-[20px] md:py-[20px]">
                            <div class="inner flex items-center gap-[60px] 2xl:gap-[50px] xl:gap-[40px] lg:gap-[30px] md:flex-col md:gap-[15px] md:items-start">
                                <div class="title-field max-w-[410px] w-full md:max-w-full md:order-2">
                                    <h1 class="title text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-white font-semibold line-clamp-2"><?= $market['title'] ?></h1>
                                </div>
                                <div class="navigation-field sm:hidden md:order-1">
                                    <ul class="flex gap-[5px] [&_li:last-child_.seperator]:hidden">
                                        <?php $list = [
                                            ["title" => "Home", "link" => "index.php",],
                                            ["title" => "Market", "link" => "javascript:;",],
                                        ]; ?>

                                        <?php foreach ($list as $key => $item) : ?>
                                            <li>
                                                <a href="<?= $item['link'] ?>" class="flex gap-[5px] group/link">
                                                    <span class="text text-[18px] xl:text-[16px] lg:text-[14px] leading-tight text-white/50 group-hover/link:text-white duration-350 tracking-[0.15rem]"><?= $item['title'] ?></span>
                                                    <span class="seperator text-[18px] xl:text-[16px] lg:text-[14px] leading-tight text-white/50">/</span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- OPSİYONEL -->
                            <!-- <div class="editor-field">
                                <div class="text-editor !max-w-full">
                                    <p style="color: #FFFFFF;">Wemobile is a mobile hospital solutions company that makes healthcare accessible and provides effective solutions in emergency situations.</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // BREADCRUMB
        // ------------------------------------------------------------------
        let breadcrumbField = document.querySelector('.breadcrumb-field');
        let breadcrumbWrapper = breadcrumbField.querySelector('.breadcrumb-wrapper');
        let breadcrumbBG = document.querySelector('.breadcrumb-background');
        let breadcrumbRemainWidth

        breadcrumbRemainWidth = (breadcrumbField.offsetWidth - breadcrumbWrapper.offsetWidth) / 2;
        if (window.innerWidth > 1024) {
            breadcrumbBG.style.width = "calc(100% + " + breadcrumbRemainWidth + "px)";
            if (document.querySelector('html').getAttribute('dir') == 'ltr') {
                breadcrumbBG.style.left = -breadcrumbRemainWidth + 'px';
            }
        } else {
            breadcrumbBG.style.width = "calc(100% + " + breadcrumbRemainWidth * 2 + "px)";
            breadcrumbBG.style.left = -breadcrumbRemainWidth + 'px';
            breadcrumbBG.style.right = -breadcrumbRemainWidth + 'px';
        }
    </script>

    <!-- DESCRIPTION SECTION -->
    <section class="description-section pt-[100px] pb-[130px] 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px]">
        <div class="container max-w-[1500px]">
            <div class="wrapper max-w-[1140px] mx-auto flex flex-col gap-[40px]">
                <div class="content flex flex-col gap-[20px] md:gap-[15px]">
                    <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium text-center md:text-left">{{$market->title}}</p>
                    <h4 class="text text-[44px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden text-center md:text-left">{{$market->title_2}}</h4>
                </div>
                <div class="editor-field">
                    <div class="text-editor !max-w-full editor-p:text-[20px] editor-li:text-[20px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px] md:[&_>*]:!text-left">
                        <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                        <p style="color: #1E1E1E; text-align: center;">{{$market->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- USED PRODUCTS -->
    <section class="used-products-section pb-[130px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px] relative overflow-hidden">
        <div class="content-wrapper relative">
            <div class="background bg-[#FFFFFF] absolute top-0 left-0 w-full h-full z-2 translate-z-0 shadow-[0px_0px_150px_0px_rgba(0,0,0,0.08)] xl:shadow-[0px_0px_50px_0px_rgba(0,0,0,0.08)] pointer-events-none"></div>
            <div class="container max-w-[1500px] py-[70px] 2xl:py-[70px] xl:py-[60px] lg:py-[45px] md:py-[30px] relative z-20">
                <div class="wrapper grid grid-cols-[minmax(0,5.2fr)_minmax(0,7.2fr)] gap-[150px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px] md:grid-cols-1 sm:gap-[20px]">
                    <div class="text-field">
                        <div class="carousel-field relative flex flex-col justify-center h-full">
                            <div class="used-text-carousel swiper w-full">
                                <div class="swiper-wrapper">
                                    <?php foreach ($marketProducts as $key => $item) : ?>
                                        <div class="swiper-slide group/slide">
                                            <div class="content relative overflow-hidden flex flex-col gap-[50px] lg:gap-[40px] md:gap-[30px] sm:gap-[20px]">
                                                <div class="content flex flex-col gap-[20px] md:gap-[15px]" data-swiper-parallax-x="50%">
                                                    <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium">Used Product</p>
                                                    <h4 class="text text-[44px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden">{{$item->title}}</h4>
                                                </div>
                                                <div class="text-editor !max-w-full editor-p:text-[20px] editor-li:text-[20px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px]" data-swiper-parallax-x="50%">
                                                    <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                    <p style="color: #1E1E1E;">{!!$item->description!!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="carousel-controller mt-[80px] 2xl:mt-[80px] xl:mt-[60px] lg:mt-[45px] md:mt-[30px] sm:mt-[15px]">
                                <div class="carousel-navigation flex justify-start gap-[20px] md:gap-[15px] sm:gap-[10px] pointer-events-none z-20">
                                    <div class="used-text-prev cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                        <div class="icon group/navigation flex items-center justify-center duration-350">
                                            <i class="icon-arrow-left text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[-3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[3px]"></i>
                                        </div>
                                    </div>
                                    <div class="used-text-next cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                        <div class="icon group/navigation flex items-center justify-center duration-350">
                                            <div class="icon-arrow-right text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[-3px]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-field">
                        <div class="carousel-field relative md:hidden">
                            <div class="used-image-carousel swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($marketProducts as $key => $item) : ?>
                                        <div class="swiper-slide group/slide">
                                            <div class="content relative">
                                                <div class="background bg-[#FFFFFF] absolute top-0 left-0 w-full h-full z-2 translate-z-0 duration-350 group-[&.swiper-slide]/slide:opacity-65 group-[&.swiper-slide-active]/slide:!opacity-0 pointer-events-none"></div>
                                                <div class="image-field relative translate-z-0 aspect-[740/550] w-full h-full md:aspect-[5/4]">
                                                    <div class="image w-full h-full overflow-hidden translate-z-0">
                                                        <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'product_images_folder'], $item['lang']) . '/' . $item['image'] ?>" class="full-cover" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-field hidden md:block">
                            <div class="used-image-mobile-carousel swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($marketProducts as $key => $item) : ?>
                                        <div class="swiper-slide group/slide">
                                            <div class="content relative">
                                                <div class="background bg-[#FFFFFF] absolute top-0 left-0 w-full h-full z-2 translate-z-0 duration-350 group-[&.swiper-slide]/slide:opacity-65 group-[&.swiper-slide-active]/slide:!opacity-0 pointer-events-none"></div>
                                                <div class="image-field relative translate-z-0 aspect-[740/550] w-full h-full md:aspect-[5/4]">
                                                    <div class="image w-full h-full overflow-hidden translate-z-0">
                                                        <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'product_images_folder'], $item['lang']) . '/' . $item['image'] ?>" class="full-cover" alt="" data-swiper-parallax-x="50%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="faq-section pb-[150px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px]">
        <div class="container max-w-[1500px]">
            <div class="wrapper flex flex-col gap-[80px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px] relative sm:gap-[15px]">
                <div class="border-field border border-solid border-black/15 absolute left-0 bottom-0 w-full h-[calc(100%-40px)] pointer-events-none"></div>
                <div class="content flex flex-col gap-[30px] md:gap-[15px] w-fit mx-auto bg-bodyColor relative z-20 px-[50px] sm:px-[15px]">
                    <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium text-center">Wemobile</p>
                    <h4 class="text text-[44px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden text-center">Frequently Asked Questions</h4>
                </div>
                <!-- FAQ ITEMS | COMPONENT -->
                <div class="faq-items max-w-[calc(1260px+60px)] mx-auto w-full px-[30px] pb-[60px] lg:pb-[45px] md:pb-[30px] sm:px-[10px]">
                    <?php foreach ($market->faqs as $key => $item) : ?>
                        <div class="faq-item item group/item">
                            <div class="content duration-350 group-[&.is-active]/item:bg-main-500 px-[80px] py-[43px] 2xl:px-[60px] xl:p-[45px] lg:p-[30px] md:p-[20px] sm:p-[20px] cursor-pointer">
                                <div class="top-field">
                                    <div class="content-wrapper flex items-center justify-between gap-[15px]">
                                        <div class="text-field">
                                            <p class="text text-[20px] md:text-[18px] sm:text-[16px] leading-tight text-[#111111]/90 duration-350 group-[&.is-active]/item:text-white font-semibold"><?= $item['title'] ?></p>
                                        </div>
                                        <div class="icon-field w-[40px] h-[40px] sm:w-[30px] sm:h-[30px] bg-[#F9F2F2] duration-350 group-[&.is-active]/item:bg-white flex justify-center items-center shrink-0">
                                            <i class="icon icon-chevron-bottom text-[10px] h-[10px] text-main-500 block leading-none duration-350 group-[&.is-active]/item:text-main-500 group-[&.is-active]/item:rotate-180"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-field hidden overflow-hidden group-[&.is-active]/item:block">
                                    <div class="editor-field pt-[50px] lg:pt-[40px] md:pt-[30px] sm:pt-[20px]">
                                        <div class="text-editor !max-w-full editor-p:text-[18px] editor-li:text-[18px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px]">
                                            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                            <p style="color: #FFFFFF;"><?= $item['description'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="split w-full h-[1px] bg-[#111111]/8"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- OTHER PRODUCTS | COMPONENT -->
    <?php
    $opText = "Other Market";
    $opTitle = "Health is With You<br> Everywhere, Every Time!";
    $opCarouselItems = $markets; ?>
    <section class="other-product-section pb-[160px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px] overflow-hidden">
        <div class="container max-w-[1500px]">
            <div class="wrapper grid grid-cols-[minmax(0,3.65fr)_minmax(0,9.4fr)] md:grid-cols-1 gap-[100px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px] sm:gap-[20px]">
                <div class="text-field flex flex-col h-full justify-center gap-[100px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px] sm:gap-[20px] relative z-50">
                    <div class="content flex flex-col gap-[20px] md:gap-[15px]">
                        <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium"><?= $opText ?></p>
                        <h4 class="text text-[44px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden"><?= $opTitle ?></h4>
                    </div>
                    <div class="carousel-controller">
                        <div class="carousel-navigation flex justify-start gap-[20px] md:gap-[15px] sm:gap-[10px] pointer-events-none z-20 ">
                            <div class="other-product-prev cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                <div class="icon group/navigation flex items-center justify-center duration-350">
                                    <i class="icon-arrow-left text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[-3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[3px]"></i>
                                </div>
                            </div>
                            <div class="other-product-next cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                <div class="icon group/navigation flex items-center justify-center duration-350">
                                    <div class="icon-arrow-right text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[-3px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-field relative">
                    <div class="other-product-carousel swiper animate-carousel !overflow-visible">
                        <div class="swiper-wrapper">
                            <?php foreach ($opCarouselItems as $key => $item) : ?>
                                <div class="swiper-slide group/slide [&.swiper-slide-active]:pointer-events-auto [&.swiper-slide-next]:pointer-events-auto py-[20px] pl-[20px] md:p-0">
                                    <div class="item product-item group/item">
                                        <div class="content group-hover/item:shadow-[0px_2.15px_10.76px_0px_rgba(0,0,0,0.10)] duration-350 group-hover/item:bg-main-500">
                                            <div class="image-field aspect-[610/450] md:aspect-[460/275]">
                                                <a href="<?= $item['title-link'] ?>" class="flex w-full h-full image overflow-hidden translate-z-0 group/image">
                                                    <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'market_images_folder'], $item['lang']) . '/' .$item['image'] ?>" class="full-cover group-hover/image:scale-105 duration-350" alt="">
                                                </a>
                                            </div>
                                            <div class="text-field bg-white duration-350 group-hover/item:bg-main-500">
                                                <div class="content px-[40px] py-[35px] lg:p-[20px] shadow-[0px_4px_20px_0px_rgba(0,0,0,0.1)]">
                                                    <div class="category">
                                                        <a href="<?= $item['category-link'] ?>" class="block w-fit group/link">
                                                            <span class="text text-[15px] sm:text-[14px] leading-tight text-[#454545]/50 duration-350 group-hover/item:text-white tracking-[0.1rem] group-hover/item:group-hover/link:text-white/70"><?= $item['category'] ?></span>
                                                        </a>
                                                    </div>
                                                    <div class="title mt-[15px] sm:mt-[5px]">
                                                        <a href="<?= $item['title-link'] ?>" class="block w-fit group/link">
                                                            <span class="text text-[20px] lg:text-[18px] md:text-[16px] leading-tight text-[#1E1E1E] duration-350 group-hover/item:text-white font-semibold group-hover/item:group-hover/link:text-white/70"><?= $item['title'] ?></span>
                                                        </a>
                                                    </div>
                                                    <div class="button-field mt-[24px] lg:mt-[20px] md:mt-[15px] sm:mt-[10px] sm:hidden">
                                                        <a href="<?= $item['title-link'] ?>" class="flex items-center gap-[15px] w-fit group/link opacity-65 duration-350 hover:opacity-100">
                                                            <span class="text text-[16px] sm:text-[14px] leading-tight text-[#1E1E1E] font-medium duration-350 group-hover/item:text-white tracking-[0.25rem]">VIEW</span>
                                                            <i class="icon icon-arrow-right-2 text-[27px] h-[27px] text-[#1E1E1E] group-hover/item:text-white group-hover/link:translate-x-[3px] block leading-none duration-350 rtl:rotate-180 rtl:group-hover/link:translate-x-[-3px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php $fc = '';?>

@endsection

@section('scripts')
<script>
    // FEATURED PRODUCT
    // ------------------------------------------------------------------
    if (document.querySelector('.featured-product-carousel')) {
        // FEATURED PRODUCT CAROUSEL
        // ------------------------------------------------------------------
        let featuredProductCarousel = new Swiper(".featured-product-carousel", {
            modules: [A, P, N, Px, EC],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 10,
            loop: false,
            resistance: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,
            parallax: true,
            allowTouchMove: false,
            effect: 'creative',
            creativeEffect: {
                prev: {
                    scale: 1.5,
                    opacity: 0,
                    shadow: true,
                },
                next: {
                    scale: 1.5,
                    opacity: 0,
                    shadow: true,
                },
            },
            navigation: {
                nextEl: ".featured-product-next",
                prevEl: ".featured-product-prev"
            },
            pagination: {
                el: ".featured-product-pagination",
                clickable: true,
            },
        });
        if (window.innerWidth > 1024) {
            // Featured Product Thumb CAROUSEL
            // ------------------------------------------------------------------
            let featuredProductThumbCarousel = new Swiper(".featured-product-thumb-carousel", {
                modules: [A, N],
                slidesPerView: 1,
                speed: 1000,
                spaceBetween: 10,
                loop: false,
                resistance: true,
                resistanceRatio: 0,
                direction: 'vertical',
                slideToClickedSlide: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                navigation: {
                    nextEl: ".featured-product-thumb-next",
                    prevEl: ".featured-product-thumb-prev"
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    481: {
                        slidesPerView: 2,
                    },
                    991: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 2,
                    },
                    1281: {
                        slidesPerView: 3,
                    },
                },
            });

            featuredProductThumbCarousel.on('slideChange', function() {
                let activeIndex = featuredProductThumbCarousel.activeIndex;
                featuredProductCarousel.slideTo(activeIndex);
            });

            // PAUSE ON MOUSE ENTER
            featuredProductThumbCarousel.autoplay.stop();
            let featuredProductSection = document.querySelector('.breadcrumb-field');
            let featuredProductThumbSlide = document.querySelectorAll('.featured-product-thumb-carousel .swiper-slide');
            if (window.innerWidth > 1024) {
                featuredProductSection.addEventListener('mouseenter', function() {
                    featuredProductThumbCarousel.autoplay.stop();
                });
                featuredProductSection.addEventListener('mouseleave', function() {
                    featuredProductThumbCarousel.autoplay.start();
                });

                featuredProductThumbSlide.forEach(function(item, index) {
                    gsap.to(item, {
                        scrollTrigger: {
                            trigger: item,
                            start: "top-=300px center",
                            end: "bottom+=300px center",
                            scrub: true,
                            onEnter: function() {
                                featuredProductThumbCarousel.autoplay.start();
                            },
                            onLeave: function() {
                                featuredProductThumbCarousel.autoplay.stop();
                            },
                            onEnterBack: function() {
                                featuredProductThumbCarousel.autoplay.start();
                            },
                            onLeaveBack: function() {
                                featuredProductThumbCarousel.autoplay.stop();
                            },
                        },
                    });
                });
            }
        }
    }
</script>

<script>
    // USED TEXT CAROUSEL
    // ------------------------------------------------------------------
    if (document.querySelector('.used-text-carousel')) {
        let usedTextCarousel = new Swiper(".used-text-carousel", {
            modules: [A, P, N, Px],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 30,
            loop: false,
            resistance: true,
            resistanceRatio: 0,
            parallax: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            navigation: {
                nextEl: ".used-text-next",
                prevEl: ".used-text-prev"
            },
        });
        // USED IMAGE CAROUSEL
        // ------------------------------------------------------------------
        let usedImageCarousel = new Swiper(".used-image-carousel", {
            modules: [A, Px, ECa],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 0,
            loop: false,
            resistance: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,
            parallax: true,
            allowTouchMove: false,
            effect: "cards",
            cardsEffect: {
                slideShadows: false,
                perSlideRotate: 1,
                rotate: false,
                fadeEffect: {
                    crossFade: true,
                },
            },
        });

        // USED IMAGE CAROUSEL | MOBILE
        // ------------------------------------------------------------------
        let usedImageMobileCarousel = new Swiper(".used-image-mobile-carousel", {
            modules: [A, P, N, Px],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 0,
            loop: false,
            resistance: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,
            parallax: true,
            allowTouchMove: false,
        });

        usedTextCarousel.on('slideChange', function() {
            let activeIndex = usedTextCarousel.activeIndex;
            usedImageCarousel.slideTo(activeIndex);
        });

        usedTextCarousel.on('slideChange', function() {
            let activeIndex = usedTextCarousel.activeIndex;
            usedImageMobileCarousel.slideTo(activeIndex);
        });

        // PAUSE ON MOUSE ENTER
        usedTextCarousel.autoplay.stop();
        let usedProductSection = document.querySelector('.used-products-section');
        let usedProductImageSlide = document.querySelectorAll('.used-text-carousel .swiper-slide');
        if (window.innerWidth > 1024) {
            usedProductSection.addEventListener('mouseenter', function() {
                usedTextCarousel.autoplay.stop();
            });
            usedProductSection.addEventListener('mouseleave', function() {
                usedTextCarousel.autoplay.start();
            });

            usedProductImageSlide.forEach(function(item, index) {
                gsap.to(item, {
                    scrollTrigger: {
                        trigger: item,
                        start: "top-=300px center",
                        end: "bottom+=300px center",
                        scrub: true,
                        onEnter: function() {
                            usedTextCarousel.autoplay.start();
                        },
                        onLeave: function() {
                            usedTextCarousel.autoplay.stop();
                        },
                        onEnterBack: function() {
                            usedTextCarousel.autoplay.start();
                        },
                        onLeaveBack: function() {
                            usedTextCarousel.autoplay.stop();
                        },
                    },
                });
            });
        }
    }
</script>                   
@endsection 