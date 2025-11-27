@extends('layouts.main')

@section('content')

<?php $pageTitle = 'İletişim';
$mc = 'bg-white';?>

<main class="main-field hs-padding">
    <?php $contact = [
        [
            "title" => "Head Office",
            "content" => [
                [
                    "icon" => '<i class="icon icon-phone text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "+90 (212) 678 13 13",
                ],
                [
                    "icon" => '<i class="icon icon-mail text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "info@wemobile.com",
                ],
                [
                    "icon" => '<svg class="w-[28px] h-[28px] 2xl:w-[24px] xl:w-[22px] lg:w-[20px] md:w-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] fill-main-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.25 30.25"><path d="M16.03,30.25c-.25,0-.51-.03-.76-.08-.84-.17-1.61-.64-2.15-1.3-.55-.66-.85-1.5-.86-2.36v-8.52H3.75c-.87,0-1.71-.32-2.37-.86-.66-.54-1.12-1.31-1.3-2.15-.17-.84-.05-1.72.34-2.49.39-.77,1.04-1.38,1.82-1.73L25.07.23c.69-.25,1.44-.3,2.16-.14.72.16,1.38.52,1.9,1.04.52.52.88,1.18,1.04,1.9.16.72.11,1.46-.15,2.16l-10.54,22.84c-.34.77-.96,1.42-1.72,1.81-.54.27-1.13.42-1.73.42ZM13.38,15.75h1.12v10.75c0,.33.13.67.35.94.22.27.53.46.87.53.34.07.7.02,1.01-.14.31-.16.56-.42.7-.74L27.94,4.33c.07-.2.09-.51.03-.81-.07-.3-.21-.57-.43-.79-.22-.22-.49-.37-.79-.43-.29-.06-.58-.05-.86.05L3.17,12.82c-.33.15-.59.4-.75.71-.16.31-.21.67-.14,1.01.07.34.26.65.52.87.27.22.61.35.96.35h9.62Z" /></svg>',
                    "text" => "IOSB Bedrettin Dalan Bulvarı<br> Metro 34 Plaza No:23/100<br> Basaksehir – Istanbul / TURKEY",
                ],
            ],
        ],
        [
            "title" => "London, UK",
            "content" => [
                [
                    "icon" => '<i class="icon icon-phone text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "+90 (212) 678 13 13",
                ],
                [
                    "icon" => '<i class="icon icon-mail text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "info@wemobile.com",
                ],
                [
                    "icon" => '<svg class="w-[28px] h-[28px] 2xl:w-[24px] xl:w-[22px] lg:w-[20px] md:w-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] fill-main-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.25 30.25"><path d="M16.03,30.25c-.25,0-.51-.03-.76-.08-.84-.17-1.61-.64-2.15-1.3-.55-.66-.85-1.5-.86-2.36v-8.52H3.75c-.87,0-1.71-.32-2.37-.86-.66-.54-1.12-1.31-1.3-2.15-.17-.84-.05-1.72.34-2.49.39-.77,1.04-1.38,1.82-1.73L25.07.23c.69-.25,1.44-.3,2.16-.14.72.16,1.38.52,1.9,1.04.52.52.88,1.18,1.04,1.9.16.72.11,1.46-.15,2.16l-10.54,22.84c-.34.77-.96,1.42-1.72,1.81-.54.27-1.13.42-1.73.42ZM13.38,15.75h1.12v10.75c0,.33.13.67.35.94.22.27.53.46.87.53.34.07.7.02,1.01-.14.31-.16.56-.42.7-.74L27.94,4.33c.07-.2.09-.51.03-.81-.07-.3-.21-.57-.43-.79-.22-.22-.49-.37-.79-.43-.29-.06-.58-.05-.86.05L3.17,12.82c-.33.15-.59.4-.75.71-.16.31-.21.67-.14,1.01.07.34.26.65.52.87.27.22.61.35.96.35h9.62Z" /></svg>',
                    "text" => "IOSB Bedrettin Dalan Bulvarı<br> Metro 34 Plaza No:23/100<br> Basaksehir – Istanbul / TURKEY",
                ],
            ],
        ],
        [
            "title" => "Dohai Qatar",
            "content" => [
                [
                    "icon" => '<i class="icon icon-phone text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "+90 (212) 678 13 13",
                ],
                [
                    "icon" => '<i class="icon icon-mail text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "info@wemobile.com",
                ],
                [
                    "icon" => '<svg class="w-[28px] h-[28px] 2xl:w-[24px] xl:w-[22px] lg:w-[20px] md:w-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] fill-main-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.25 30.25"><path d="M16.03,30.25c-.25,0-.51-.03-.76-.08-.84-.17-1.61-.64-2.15-1.3-.55-.66-.85-1.5-.86-2.36v-8.52H3.75c-.87,0-1.71-.32-2.37-.86-.66-.54-1.12-1.31-1.3-2.15-.17-.84-.05-1.72.34-2.49.39-.77,1.04-1.38,1.82-1.73L25.07.23c.69-.25,1.44-.3,2.16-.14.72.16,1.38.52,1.9,1.04.52.52.88,1.18,1.04,1.9.16.72.11,1.46-.15,2.16l-10.54,22.84c-.34.77-.96,1.42-1.72,1.81-.54.27-1.13.42-1.73.42ZM13.38,15.75h1.12v10.75c0,.33.13.67.35.94.22.27.53.46.87.53.34.07.7.02,1.01-.14.31-.16.56-.42.7-.74L27.94,4.33c.07-.2.09-.51.03-.81-.07-.3-.21-.57-.43-.79-.22-.22-.49-.37-.79-.43-.29-.06-.58-.05-.86.05L3.17,12.82c-.33.15-.59.4-.75.71-.16.31-.21.67-.14,1.01.07.34.26.65.52.87.27.22.61.35.96.35h9.62Z" /></svg>',
                    "text" => "IOSB Bedrettin Dalan Bulvarı<br> Metro 34 Plaza No:23/100<br> Basaksehir – Istanbul / TURKEY",
                ],
            ],
        ],
        [
            "title" => "Moscow, RUSSIA",
            "content" => [
                [
                    "icon" => '<i class="icon icon-phone text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "+90 (212) 678 13 13",
                ],
                [
                    "icon" => '<i class="icon icon-mail text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "info@wemobile.com",
                ],
                [
                    "icon" => '<svg class="w-[28px] h-[28px] 2xl:w-[24px] xl:w-[22px] lg:w-[20px] md:w-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] fill-main-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.25 30.25"><path d="M16.03,30.25c-.25,0-.51-.03-.76-.08-.84-.17-1.61-.64-2.15-1.3-.55-.66-.85-1.5-.86-2.36v-8.52H3.75c-.87,0-1.71-.32-2.37-.86-.66-.54-1.12-1.31-1.3-2.15-.17-.84-.05-1.72.34-2.49.39-.77,1.04-1.38,1.82-1.73L25.07.23c.69-.25,1.44-.3,2.16-.14.72.16,1.38.52,1.9,1.04.52.52.88,1.18,1.04,1.9.16.72.11,1.46-.15,2.16l-10.54,22.84c-.34.77-.96,1.42-1.72,1.81-.54.27-1.13.42-1.73.42ZM13.38,15.75h1.12v10.75c0,.33.13.67.35.94.22.27.53.46.87.53.34.07.7.02,1.01-.14.31-.16.56-.42.7-.74L27.94,4.33c.07-.2.09-.51.03-.81-.07-.3-.21-.57-.43-.79-.22-.22-.49-.37-.79-.43-.29-.06-.58-.05-.86.05L3.17,12.82c-.33.15-.59.4-.75.71-.16.31-.21.67-.14,1.01.07.34.26.65.52.87.27.22.61.35.96.35h9.62Z" /></svg>',
                    "text" => "IOSB Bedrettin Dalan Bulvarı<br> Metro 34 Plaza No:23/100<br> Basaksehir – Istanbul / TURKEY",
                ],
            ],
        ],
        [
            "title" => "New York, USA",
            "content" => [
                [
                    "icon" => '<i class="icon icon-phone text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "+90 (212) 678 13 13",
                ],
                [
                    "icon" => '<i class="icon icon-mail text-[28px] h-[28px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] text-main-500 block leading-none duration-350"></i>',
                    "text" => "info@wemobile.com",
                ],
                [
                    "icon" => '<svg class="w-[28px] h-[28px] 2xl:w-[24px] xl:w-[22px] lg:w-[20px] md:w-[18px] 2xl:h-[24px] xl:h-[22px] lg:h-[20px] md:h-[18px] fill-main-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.25 30.25"><path d="M16.03,30.25c-.25,0-.51-.03-.76-.08-.84-.17-1.61-.64-2.15-1.3-.55-.66-.85-1.5-.86-2.36v-8.52H3.75c-.87,0-1.71-.32-2.37-.86-.66-.54-1.12-1.31-1.3-2.15-.17-.84-.05-1.72.34-2.49.39-.77,1.04-1.38,1.82-1.73L25.07.23c.69-.25,1.44-.3,2.16-.14.72.16,1.38.52,1.9,1.04.52.52.88,1.18,1.04,1.9.16.72.11,1.46-.15,2.16l-10.54,22.84c-.34.77-.96,1.42-1.72,1.81-.54.27-1.13.42-1.73.42ZM13.38,15.75h1.12v10.75c0,.33.13.67.35.94.22.27.53.46.87.53.34.07.7.02,1.01-.14.31-.16.56-.42.7-.74L27.94,4.33c.07-.2.09-.51.03-.81-.07-.3-.21-.57-.43-.79-.22-.22-.49-.37-.79-.43-.29-.06-.58-.05-.86.05L3.17,12.82c-.33.15-.59.4-.75.71-.16.31-.21.67-.14,1.01.07.34.26.65.52.87.27.22.61.35.96.35h9.62Z" /></svg>',
                    "text" => "IOSB Bedrettin Dalan Bulvarı<br> Metro 34 Plaza No:23/100<br> Basaksehir – Istanbul / TURKEY",
                ],
            ],
        ],
    ]; ?>
    <!-- BREADCRUMB | MAP -->
    <section class="map-field">
        <div id="map" class="aspect-[1920/570] w-full h-full md:h-[300px] [&_*]:!border-0"></div>
    </section>

    <!-- FILTER SECTION -->
    <section class="filter-section mb-[60px] 2xl:mb-[60px] xl:mb-[60px] lg:mb-[45px] md:mb-[30px] relative pointer-events-none overflow-hidden">
        <div class="content-section relative">
            <div class="container max-w-[1500px]">
                <div class="wrapper">
                    <div class="content-field w-full pointer-events-none md:relative md:bottom-auto md:left-auto">
                        <div class="background-svg absolute left-0 top-0 z-30 h-full group/bg-svg w-full translate-x-[-25px] pointer-events-none 2xl:hidden">
                            <svg class="h-full duration-350 scale-x-0 group-[&.is-active]/bg-svg:scale-x-100 origin-left" viewBox="0 0 164 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.15" clip-path="url(#clip0_5240_4804)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.994 -15.4621V189.317L0 184.631V-10.7471L5.80505 -12.5807L14.994 -15.4621ZM163.475 -62L164 236L129.695 225.26V-51.406L163.475 -62ZM113.534 -46.3418V220.196L94.3394 214.172V-40.3172L113.534 -46.3418ZM79.7247 -35.7478V209.573L60.5301 203.549V-29.7232L79.7247 -35.7478ZM45.9445 -25.1538V199.008L28.7919 193.624V-19.7695L45.9445 -25.1538Z" fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5240_4804">
                                        <rect width="164" height="174" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="container max-w-[1500px] px-0 relative z-20 pointer-events-none md:px-0">
                            <div class="breadcrumb-wrapper grid grid-cols-[minmax(0,5.1fr)_minmax(0,8.8fr)] gap-[85px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px] md:grid-cols-1">
                                <div class="wrapper max-w-[calc(650px+95px)] pr-[95px] relative pointer-events-auto 2xl:pr-[60px] xl:pr-[40px] md:max-w-full md:pr-0 rtl:pr-0 rtl:2xl:pr-0 rtl:xl:pr-0 rtl:md:pr-0 rtl:pl-[95px] rtl:2xl:pl-[60px] rtl:xl:pl-[40px] rtl:md:pl-0">
                                    <div class="breadcrumb-background bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
                                    <div class="content py-[57.5px] 2xl:py-[55px] xl:py-[45px] lg:py-[30px] flex flex-col gap-[50px] relative z-20 xl:gap-[30px] lg:gap-[30px] md:gap-[20px] md:py-[20px]">
                                        <div class="inner flex items-center gap-[60px] 2xl:gap-[50px] xl:gap-[40px] lg:gap-[30px] md:flex-col md:gap-[15px] md:items-start">
                                            <div class="title-field max-w-[410px] w-full md:max-w-full md:order-2">
                                                <h1 class="title text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-white font-semibold line-clamp-2">Contact</h1>
                                            </div>
                                            <div class="navigation-field sm:hidden md:order-1">
                                                <ul class="flex gap-[5px] [&_li:last-child_.seperator]:hidden">
                                                    <?php $list = [
                                                        ["title" => "Home", "link" => "index.php",],
                                                        ["title" => "Contact", "link" => "javascript:;",],
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
                                    </div>
                                </div>
                                <div class="button-wrapper grid grid-cols-1 items-end pointer-events-none md:justify-center gap-[30px] sm:grid-cols-1">
                                    <div class="carousel-field relative top-[34px] md:top-0">
                                        <div class="contact-carousel swiper pointer-events-auto w-full md:hidden [&_.swiper-slide:last-child_.split]:hidden">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($contact as $key => $item) : ?>
                                                    <div class="swiper-slide group/slide pb-[34px] md:pb-0">
                                                        <div class="content relative group/link filter-item">
                                                            <a href="javascript:;" class="flex justify-center items-center gap-[10px] px-[10px] lg:px-[15px] h-[55px] lg:h-[50px] group-hover/link:bg-main-500 duration-350 sm:w-full group-[&.is-active]/link:bg-main-500">
                                                                <div class="icon w-[8px] h-[8px] rounded-full bg-white"></div>
                                                                <span class="text text-[17px] sm:text-[16px] leading-tight text-[#1E1E1E] group-hover/link:text-white group-[&.is-active]/link:text-white duration-350"><?= $item['title'] ?></span>
                                                            </a>
                                                            <div class="icon-field absolute left-1/2 -translate-x-1/2 top-[calc(100%+20px)] md:top-[calc(100%+5px)] duration-350 opacity-0 group-hover/link:opacity-100 group-[&.is-active]/link:opacity-100 sm:hidden">
                                                                <i class="icon icon-chevron-bottom-3 text-[14px] h-[14px] text-main-500 block leading-none duration-350"></i>
                                                            </div>
                                                            <div class="split w-[1px] h-[27px] bg-black/10 sm:hidden absolute right-0 top-3"></div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="mobile-view hidden md:block">
                                            <div class="custom-select relative group/select pointer-events-auto">
                                                <select name="contact-selector" id="contact-selector" class="w-full h-[56px] border border-solid border-black/20 duration-350 group-hover/select:border-black bg-bodyColor text-black pl-[30px] pr-[45px] rtl:pl-[45px] rtl:pr-[30px]">
                                                    <?php foreach ($contact as $key => $item) : ?>
                                                        <option value="<?= $item['title'] ?>"><?= $item['title'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="icon-field absolute right-[30px] top-1/2 -translate-y-1/2 z-20 pointer-events-none rtl:right-auto rtl:left-[30px]">
                                                    <i class="icon icon-chevron-bottom text-[12px] h-[12px] text-black/50 block leading-none duration-350"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-controller hidden">
                                            <div class="carousel-navigation flex justify-center gap-[20px] md:gap-[15px] sm:gap-[10px] pointer-events-none">
                                                <div class="contact-prev pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                                    <div class="icon group/navigation flex items-center justify-center w-[45px] h-[45px] border border-solid border-white bg-white rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-350">
                                                        <i class="icon-chevron-left text-main-500 text-[16px] h-[16px] flex items-center justify-center group-hover/navigation:text-white duration-350 group-hover/navigation:translate-x-[-3px]"></i>
                                                    </div>
                                                </div>
                                                <div class="contact-next pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                                    <div class="icon group/navigation flex items-center justify-center w-[45px] h-[45px] border border-solid border-white bg-white rounded-full cursor-pointer hover:bg-main-500 hover:border-main-500 duration-350">
                                                        <div class="icon-chevron-right text-main-500 text-[16px] h-[16px] flex items-center justify-center group-hover/navigation:text-white duration-350 group-hover/navigation:translate-x-[3px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // FILTER SECTION
        // ------------------------------------------------------------------
        let breadcrumbField = document.querySelector('.filter-section');
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

    <!-- CONTACT INFORMATION -->
    <section class="contact-information-section pb-[120px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px] relative">
        <div class="background-field absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none overflow-hidden">
            <div class="background rounded-full opacity-8 [background:_radial-gradient(50%_50%_at_50%_50%,_#AB3433_0%,_rgba(171,_52,_51,_0.00)_100%)] absolute top-0 left-1/2 -translate-x-1/2 translate-y-[-15%] aspect-square max-w-[1320px] max-h-[1320px] w-full h-full z-2 translate-z-0"></div>
            <div class="background rounded-full opacity-8 [background:_radial-gradient(50%_50%_at_50%_50%,_#AB3433_0%,_rgba(171,_52,_51,_0.00)_100%)] absolute top-0 left-0 -translate-x-1/2 aspect-square max-w-[1260px] max-h-[1260px] w-full h-full z-2 translate-z-0"></div>
            <div class="background rounded-full opacity-8 [background:_radial-gradient(50%_50%_at_50%_50%,_#AB3433_0%,_rgba(171,_52,_51,_0.00)_100%)] absolute bottom-0 right-0 translate-x-[-30%] translate-y-[30%] aspect-square max-w-[1260px] max-h-[1260px] w-full h-full z-2 translate-z-0"></div>
        </div>
        <div class="container max-w-[1500px] relative z-20">
            <div class="wrapper">
                <div class="contact-information-content border border-solid border-black/20 relative duration-350 overflow-hidden">
                    <?php foreach ($contact as $key => $item) : ?>
                        <ul class="contact-ul flex justify-between absolute left-0 top-0 w-full px-[100px] py-[45px] opacity-0 invisible pointer-events-none translate-y-[10px] duration-350 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:pointer-events-auto [&.is-active]:translate-y-0 [&.is-active]:delay-350 2xl:px-[80px] xl:p-[60px] lg:p-[45px] md:p-[30px] gap-[15px] sm:flex-col
                        ">
                            <?php foreach ($item['content'] as $key => $content) : ?>
                                <li class="flex items-center">
                                    <a href="javascript:;" class="flex items-center gap-[30px] lg:gap-[20px] md:gap-[15px] group/link">
                                        <?= $content['icon'] ?>
                                        <span class="text text-[26px] 2xl:text-[24px] xl:text-[22px] lg:text-[20px] md:text-[18px] leading-tight text-[#1E1E1E] duration-350 group-hover/link:text-main-500 group-hover/link:translate-x-[3px]"><?= $content['text'] ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section class="contact-form-section pb-[120px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px]">
        <div class="container max-w-[1500px]">
            <div class="wrapper bg-white py-[120px] 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px] px-[30px] shadow-[0px_0px_250px_0px_rgba(0,0,0,0.09)]">
                <div class="content flex flex-col gap-[80px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px] max-w-[970px] mx-auto">
                    <div class="title-field flex flex-col gap-[15px]">
                        <p class="text text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-none text-[#1E1E1E] font-semibold">Get In Touch</p>
                    </div>
                    <form action="">
                        <div class="form-wrapper grid grid-cols-6 sm:grid-cols-1 gap-x-[30px] gap-y-[45px] lg:gap-y-[30px] md:gap-y-[30px] sm:gap-[20px]">
                            <div class="item form-item relative group/item col-span-3 sm:col-span-1 flex flex-col">
                                <input id="full-name" type="text" class="form-el w-full h-[50px] peer order-2" required>
                                <label for="full-name" class="text text-[18px] md:text-[16px] text-[#1E1E1E] leading-tight block bg-white order-1 peer-focus:text-main-500 duration-350 relative top-1/2 pointer-events-none peer-focus:top-0 group-[&.is-focus]/item:top-0">Full Name *</label>
                                <div class="line-field absolute left-0 bottom-0 w-full h-[1px] bg-black/15 before:absolute before:left-0 before:bottom-0 before:w-full before:h-[1px] before:bg-main-500 before:duration-350 before:scale-x-0 before:origin-left peer-focus:before:!scale-x-100"></div>
                            </div>
                            <div class="item form-item relative group/item col-span-3 sm:col-span-1 flex flex-col">
                                <input id="mail" type="mail" class="form-el w-full h-[50px] peer order-2" required>
                                <label for="mail" class="text text-[18px] md:text-[16px] text-[#1E1E1E] leading-tight block bg-white order-1 peer-focus:text-main-500 duration-350 relative top-1/2 pointer-events-none peer-focus:top-0 group-[&.is-focus]/item:top-0">Email *</label>
                                <div class="line-field absolute left-0 bottom-0 w-full h-[1px] bg-black/15 before:absolute before:left-0 before:bottom-0 before:w-full before:h-[1px] before:bg-main-500 before:duration-350 before:scale-x-0 before:origin-left peer-focus:before:!scale-x-100"></div>
                            </div>
                            <div class="item form-item relative group/item col-span-3 sm:col-span-1 flex flex-col">
                                <input id="phone" type="tel" class="form-el w-full h-[50px] peer order-2">
                                <label for="phone" class="text text-[18px] md:text-[16px] text-[#1E1E1E] leading-tight block bg-white order-1 peer-focus:text-main-500 duration-350 relative top-1/2 pointer-events-none peer-focus:top-0 group-[&.is-focus]/item:top-0">Phone</label>
                                <div class="line-field absolute left-0 bottom-0 w-full h-[1px] bg-black/15 before:absolute before:left-0 before:bottom-0 before:w-full before:h-[1px] before:bg-main-500 before:duration-350 before:scale-x-0 before:origin-left peer-focus:before:!scale-x-100"></div>
                            </div>
                            <div class="item form-item relative group/item col-span-3 sm:col-span-1 flex flex-col">
                                <input id="company-name" type="text" class="form-el w-full h-[50px] peer order-2">
                                <label for="company-name" class="text text-[18px] md:text-[16px] text-[#1E1E1E] leading-tight block bg-white order-1 peer-focus:text-main-500 duration-350 relative top-1/2 pointer-events-none peer-focus:top-0 group-[&.is-focus]/item:top-0">Company Name</label>
                                <div class="line-field absolute left-0 bottom-0 w-full h-[1px] bg-black/15 before:absolute before:left-0 before:bottom-0 before:w-full before:h-[1px] before:bg-main-500 before:duration-350 before:scale-x-0 before:origin-left peer-focus:before:!scale-x-100"></div>
                            </div>
                            <div class="item form-item relative group/item col-span-6 sm:col-span-1 flex flex-col">
                                <textarea id="your-message" type="text" class="form-el w-full min-h-[150px] md:min-h-[100px] sm:min-h-[85px] peer order-2 resize-none"></textarea>
                                <label for="your-message" class="text text-[18px] md:text-[16px] text-[#1E1E1E] leading-tight block bg-white order-1 peer-focus:text-main-500 duration-350 relative top-[calc(22.5px+10px)] pointer-events-none peer-focus:top-[-10px] group-[&.is-focus]/item:top-[-10px]">Your Message *</label>
                                <div class="line-field absolute left-0 bottom-0 w-full h-[1px] bg-black/15 before:absolute before:left-0 before:bottom-0 before:w-full before:h-[1px] before:bg-main-500 before:duration-350 before:scale-x-0 before:origin-left peer-focus:before:!scale-x-100"></div>
                            </div>
                            <div class="item form-item relative group/item col-span-4 sm:col-span-1 flex flex-col">
                                <div class="check flex items-center gap-[20px] sm:gap-[15px] h-full">
                                    <input type="checkbox" id="contact-gdpr" class="peer cursor-pointer absolute left-0 top-0 w-full h-full opacity-0 z-10">
                                    <div class="box relative shrink-0 w-[30px] sm:w-[20px] rounded-none aspect-square before:absolute before:duration-350 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:rounded-none before:scale-0 before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-main-500 duration-350 border-[1px] border-solid bg-black/0 border-black/25 peer-hover:bg-black/10 peer-hover:border-black/50 peer-checked:!border-main-500"></div>
                                    <label for="contact-gdpr" class="text-[#111111] leading-snug duration-350 text-[15px] [&_a]:font-bold [&_a:hover]:text-main-500 [&_a]:inline-block [&_a]:relative [&_a]:z-20 [&_a]:duration-350">Please review our <a href="#popup-gdpr" data-fancybox>Privacy Policy</a> for more information about your rights, our privacy practices, how to unsubscribe, and how we are committed to protecting and respecting your personal data.</label>
                                </div>
                            </div>
                            <div class="item form-item relative group/item col-span-2 sm:col-span-1 flex flex-col">
                                <div class="button-field flex justify-end items-end sm:justify-start">
                                    <button class="button w-fit min-w-[120px] group/button flex items-center gap-[20px]">
                                        <span class="text text-[18px] md:text-[16px] leading-tight text-main-500 group-hover/button:text-main-600 tracking-[0.25rem] font-medium">SEND</span>
                                        <i class="icon icon-arrow-right text-[39px] h-[39px] text-main-500 block leading-none duration-350 group-hover/button:text-main-600 group-hover/button:translate-x-[3px] rtl:rotate-180 rtl:group-hover/button:translate-x-[-3px]"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
    // Location List
    window.locations = [{
            latLng: {
                lat: 41.0242476,
                lng: 28.9701656
            },
            zoom: 17,
            url: 'https://pentayazilim.com',
            marker: `<div class="inner aspect-[43/58] max-w-[43px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[33/48] max-w-[33px] md:aspect-square md:max-w-[30px] w-full overflow-hidden translate-z-0">
                    <img src="assets/image/static/marker.png" class="full-contain" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] sm:px-[15px] sm:py-[10px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-350 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-350">Get Direction</p>
                </div>
            </div>`
        },
        {
            latLng: {
                lat: 41.0447299,
                lng: 28.6339078
            },
            zoom: 17,
            url: 'https://google.com',
            marker: `<div class="inner aspect-[43/58] max-w-[43px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[33/48] max-w-[33px] md:aspect-square md:max-w-[30px] w-full overflow-hidden translate-z-0">
                    <img src="assets/image/static/marker.png" class="full-contain" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] sm:px-[15px] sm:py-[10px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-350 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <i class="icon icon-location text-[16px] h-[16px] text-white block leading-none duration-350"></i>
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-350">Get Direction</p>
                </div>
            </div>`
        }, {
            latLng: {
                lat: 41.0242476,
                lng: 28.9701656
            },
            zoom: 17,
            url: 'https://pentayazilim.com',
            marker: `<div class="inner aspect-[43/58] max-w-[43px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[33/48] max-w-[33px] md:aspect-square md:max-w-[30px] w-full overflow-hidden translate-z-0">
                    <img src="assets/image/static/marker.png" class="full-contain" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] sm:px-[15px] sm:py-[10px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-350 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <i class="icon icon-location text-[16px] h-[16px] text-white block leading-none duration-350"></i>
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-350">Get Direction</p>
                </div>
            </div>`
        },
        {
            latLng: {
                lat: 41.0447299,
                lng: 28.6339078
            },
            zoom: 17,
            url: 'https://google.com',
            marker: `<div class="inner aspect-[43/58] max-w-[43px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[33/48] max-w-[33px] md:aspect-square md:max-w-[30px] w-full overflow-hidden translate-z-0">
                    <img src="assets/image/static/marker.png" class="full-contain" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] sm:px-[15px] sm:py-[10px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-350 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <i class="icon icon-location text-[16px] h-[16px] text-white block leading-none duration-350"></i>
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-350">Get Direction</p>
                </div>
            </div>`
        }, {
            latLng: {
                lat: 41.0242476,
                lng: 28.9701656
            },
            zoom: 17,
            url: 'https://pentayazilim.com',
            marker: `<div class="inner aspect-[43/58] max-w-[43px] sm:w-[40px] sm:h-[40px] duration-350 flex-center group/marker">
                <div class="image aspect-[33/48] max-w-[33px] md:aspect-square md:max-w-[30px] w-full overflow-hidden translate-z-0">
                    <img src="assets/image/static/marker.png" class="full-contain" alt="">
                </div>
                <div class="text-field flex items-center px-[25px] py-[17.5px] sm:px-[15px] sm:py-[10px] bg-main-500 rounded-full absolute top-full left-1/2 -translate-x-1/2 w-fit gap-[15px] duration-350 group-hover/marker:bg-main-600 translate-y-[10px] group-hover/marker:translate-y-[5px] opacity-0 group-hover/marker:opacity-100">
                    <i class="icon icon-location text-[16px] h-[16px] text-white block leading-none duration-350"></i>
                    <p class="text text-[16px] whitespace-nowrap text-white tracking-[0.1rem] font-light group-hover/marker:tracking-[0.15rem] duration-350">Get Direction</p>
                </div>
            </div>`
        },
    ];

    // Generate Map Function
    function generateMap(i) {
        window.latLng = locations[i].latLng
        window.mapZoom = locations[i].zoom;
        window.mapURL = locations[i].url

        window.mapMarker = document.createElement('div');
        mapMarker.href = mapURL;
        mapMarker.target = '_blank';
        mapMarker.className = 'map-marker block !pointer-events-auto relative z-30';
        mapMarker.innerHTML = locations[i].marker;
    }
    generateMap(0)
</script>

<?php $fc = ''; ?>
@endsection

@section('scripts')

<script>
    // Map Change
    let filterItem = document.querySelectorAll('.filter-item');
    filterItem.forEach((trigger, i) => {
        trigger.addEventListener('click', () => {
            if (trigger.classList.contains('is-active')) return;
            filterItem.forEach(trigger => trigger.classList.remove('is-active'));
            trigger.classList.add('is-active');
            generateMap(i);
            initMap();
        });
    });

    let filterSection = document.querySelector('.filter-section');
    if (window.innerWidth > 1024) {
        filterSection.style.marginTop = -filterSection.offsetHeight / 2 + 'px';
    }

    // CONTACT INFORMATION
    let contactUL = document.querySelectorAll('.contact-ul');
    let contactInformationContent = document.querySelector('.contact-information-content');

    contactUL[0].classList.add('is-active');
    contactInformationContent.style.height = contactUL[0].offsetHeight + 'px';

    // FILTER CAROUSEL
    // ------------------------------------------------------------------
    if (document.querySelector('.contact-carousel')) {
        let contactCarousel = new Swiper(".contact-carousel", {
            modules: [N],
            slidesPerView: 4,
            speed: 1000,
            spaceBetween: 0,
            loop: false,
            resistance: true,
            resistanceRatio: 0,
            navigation: {
                nextEl: ".contact-next",
                prevEl: ".contact-prev"
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
                1025: {
                    slidesPerView: 5,
                },
            },
        });

        filterItem[0].classList.add('is-active');

        filterItem.forEach((item, index) => {
            item.addEventListener('click', function() {
                filterItem.forEach((item, index) => {
                    item.classList.remove('is-active');
                });
                item.classList.add('is-active');

                contactUL.forEach((item, index) => {
                    item.classList.remove('is-active');
                });
                contactUL[index].classList.add('is-active');
                contactInformationContent.style.height = contactUL[index].offsetHeight + 'px';
            });
        });

        let contactSelector = document.querySelector('#contact-selector');

        contactSelector.addEventListener('change', function() {
            filterItem.forEach((item, index) => {
                item.classList.remove('is-active');
            });
            filterItem[contactSelector.selectedIndex].classList.add('is-active');

            contactUL.forEach((item, index) => {
                item.classList.remove('is-active');
            });
            contactUL[contactSelector.selectedIndex].classList.add('is-active');
            contactInformationContent.style.height = contactUL[contactSelector.selectedIndex].offsetHeight + 'px';

            generateMap(contactSelector.selectedIndex);
            initMap();
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxycU6lO2UWtUA4BZDIfXrSVyYVqQ0wRM&callback=initMap&libraries=marker&v=beta" defer=""></script>


@endsection