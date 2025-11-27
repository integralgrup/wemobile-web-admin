@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $about;
$breadcrumbTitle = $about->title;
$mc = '';

?>

<main class="main-field">
    <!-- BREADCRUMB -->
    <section class="breadcrumb-field relative pb-[85px] md:pb-0 rtl:overflow-hidden">
        <!-- FEATURED CAROUSEL -->
        <div class="carousel-field relative h-[calc(100%-85px-35px)]">
            <div class="image-field relative translate-z-0 h-full">
                <div class="background [background:_linear-gradient(180deg,_#FFF_0%,_rgba(255,_255,_255,_0.00)_55.38%)] absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
                <div class="background [background:_linear-gradient(0deg,_#FFF_0%,_rgba(255,_255,_255,_0.00)_55.38%)] absolute bottom-0 left-0 w-full h-[50%] z-2 translate-z-0 pointer-events-none hidden md:block"></div>
                <div class="image overflow-hidden translate-z-0 aspect-[1920/600] h-[600px] xl:h-[600px] lg:h-[500px] md:h-[300px] sm:h-[250px] w-full">
                    <img src="assets/image/other/about-1.jpg" class="full-cover" alt="">
                </div>
            </div>
        </div>
        <!-- PRODUCT INFO -->
        <div class="content-field absolute left-0 bottom-0 z-20 w-full pointer-events-none md:relative md:bottom-auto md:left-auto">
            <div class="background-svg absolute left-0 top-0 z-30 h-full group/bg-svg w-full translate-x-[-25px] pointer-events-none 2xl:hidden">
                <svg class="h-full duration-350 scale-x-0 group-[&.is-active]/bg-svg:scale-x-100 origin-left" viewBox="0 0 164 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.15" clip-path="url(#clip0_5240_3487)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.994 -15.4621V189.317L0 184.631V-10.7471L5.80505 -12.5807L14.994 -15.4621ZM163.475 -62L164 236L129.695 225.26V-51.406L163.475 -62ZM113.534 -46.3418V220.196L94.3394 214.172V-40.3172L113.534 -46.3418ZM79.7247 -35.7478V209.573L60.5301 203.549V-29.7232L79.7247 -35.7478ZM45.9445 -25.1538V199.008L28.7919 193.624V-19.7695L45.9445 -25.1538Z" fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_5240_3487">
                            <rect width="164" height="174" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="container max-w-[1500px] relative z-20 pointer-events-none">
                <div class="breadcrumb-wrapper grid grid-cols-[minmax(0,7.8fr)_minmax(0,6.5fr)] xl:grid-cols-[minmax(0,6.5fr)_minmax(0,6fr)] gap-[15px] md:grid-cols-1">
                    <div class="wrapper max-w-full pr-[60px] relative pointer-events-auto 2xl:pr-[60px] xl:pr-[40px] md:max-w-full md:pr-0
                    rtl:pr-0 rtl:2xl:pr-0 rtl:xl:pr-0 rtl:md:pr-0
                    rtl:pl-[60px] rtl:2xl:pl-[60px] rtl:xl:pl-[40px] rtl:md:pl-0
                    ">
                        <div class="breadcrumb-background bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
                        <div class="content py-[70px] xl:py-[40px] lg:py-[30px] flex flex-col gap-[50px] relative z-20 xl:gap-[30px] lg:gap-[30px] md:gap-[20px] md:py-[20px]">
                            <div class="inner flex justify-between items-center">
                                <div class="text-field flex items-center gap-[60px] 2xl:gap-[50px] xl:gap-[40px] lg:gap-[30px] md:flex-col md:gap-[15px] md:items-start w-full">
                                    <div class="title-field max-w-[410px] w-fit md:max-w-full md:order-2">
                                        <h1 class="title text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-white font-semibold line-clamp-2">About Us</h1>
                                    </div>
                                    <div class="navigation-field sm:hidden md:order-1">
                                        <ul class="flex gap-[5px] [&_li:last-child_.seperator]:hidden">
                                            <?php $list = [
                                                ["title" => "Home", "link" => "index.php",],
                                                ["title" => "About Us", "link" => "about.php",],
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

    <!-- DETAIL -->
    <section class="detail-section py-[100px] 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px]">
        <div class="container max-w-[1500px]">
            <div class="wrapper grid grid-cols-2 md:grid-cols-1 gap-[100px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px]">
                <div class="carousel-field relative">
                    <div class="detail-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 2; $i++) : ?>
                                <div class="swiper-slide group/slide">
                                    <div class="image-field aspect-[670/660] md:aspect-video relative translate-z-0">
                                        <div class="image w-full h-full overflow-hidden translate-z-0">
                                            <img src="assets/image/other/about-<?= $i ?>.jpg" class="full-cover" alt="" data-swiper-parallax-x="50%">
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="carousel-controller mt-[20px] lg:mt-[15px]">
                        <div class="carousel-navigation flex justify-end gap-[20px] md:gap-[15px] sm:gap-[10px] pointer-events-none md:justify-start">
                            <div class="detail-prev cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                <div class="icon group/navigation flex items-center justify-center duration-350">
                                    <i class="icon-arrow-left text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[-3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[3px]"></i>
                                </div>
                            </div>
                            <div class="detail-next cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                <div class="icon group/navigation flex items-center justify-center duration-350">
                                    <div class="icon-arrow-right text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[-3px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-field">
                    <div class="text-content flex flex-col justify-center h-full">
                        <div class="content flex flex-col gap-[20px] md:gap-[15px]">
                            <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium">Wemobile</p>
                            <h2 class="text text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden">Health is With You<br> Everywhere, Every Time!</h2>
                        </div>
                        <div class="editor-field mt-[80px] xl:mt-[60px] lg:mt-[45px] md:mt-[30px]">
                            <div class="text-editor !max-w-full editor-p:text-[20px] editor-li:text-[20px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px]">
                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                <p style="color: #1E1E1E;">Wemobile is a mobile hospital solutions company that makes healthcare accessible and provides effective solutions in emergency situations. With its high quality and specially designed Mobile Hospital Truck, Container and Trailer vehicles, Wemobile enables fast and effective healthcare services, equipped with healthcare equipment and expert personnel.</p>
                                <p style="color: #1E1E1E;">Hospital Truck, Container and Trailer vehicles, Wemobile enables fast and effective healthcare services, equipped with healthcare equipment and expert personnel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CERTIFICATES | COMPONENT -->
    <section class="certificates-section pb-[130px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px]">
    <div class="container max-w-[1500px]">
        <div class="wrapper flex flex-col gap-[60px] lg:gap-[45px] md:gap-[30px]">
            <div class="content flex flex-col gap-[20px] md:gap-[15px]">
                <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium text-center">Certificates</p>
            </div>
            <div class="carousel-field relative">
                <div class="certificates-carousel swiper">
                    <div class="swiper-wrapper">
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <div class="swiper-slide group/slide">
                                <div class="content relative">
                                    <div class="image-field relative translate-z-0">
                                        <a href="javascript:;" class="image group/image aspect-[280/65] max-w-[280px] max-h-[65px] sm:aspect-[220/100] sm:max-h-[100px] w-full h-full overflow-hidden translate-z-0 flex items-center justify-center">
                                            <!-- SİYAH BEYAZ İPTAL EDİLMEK İSTENİYORSA, grayscale group-hover/image:grayscale-0 KALDIRILIR -->
                                            <img src="assets/image/reference/reference-<?= $i ?>.png" class="full-contain max-h-[calc(65px+5px)] sm:max-h-[calc(100px+5px)] duration-350 grayscale group-hover/image:grayscale-0 group-hover/image:-translate-y-[5px] opacity-60 group-hover/image:opacity-100 pt-[5px]" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- MISSION/VISION -->
    <section class="mission-vision-section pb-[130px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px] relative">
        <div class="section-content relative py-[85px] xl:py-[60px] lg:py-[45px] md:py-[30px]">
            <div class="background bg-[#F9F2F2] absolute top-0 left-0 w-full h-full z-2 translate-z-0"></div>
            <div class="container max-w-[1500px] relative z-20">
                <div class="wrapper grid grid-cols-[minmax(0,1fr)_minmax(0,auto)_minmax(0,1fr)] md:grid-cols-1 gap-[70px] 2xl:gap-[45px] xl:gap-[30px] lg:gap-[20px] md:gap-[15px]">
                    <div class="info-item item relative group/item">
                        <div class="content relative p-[30px] lg:p-[20px] md:p-[15px]">
                            <div class="line-field absolute left-0 top-0 w-full h-full pointer-events-none">
                                <div class="line-top-left absolute top-0 left-0 w-[40px] h-[40px]">
                                    <div class="line absolute left-0 top-0 w-0 h-[1px] bg-main-500 duration-350 group-hover/item:w-[40px]"></div>
                                    <div class="line absolute left-0 top-0 w-[1px] h-0 bg-main-500 duration-350 group-hover/item:h-[40px]"></div>
                                </div>
                                <div class="line-bottom-left absolute bottom-0 right-0 w-[40px] h-[40px]">
                                    <div class="line absolute right-0 bottom-0 w-0 h-[1px] bg-main-500 duration-350 group-hover/item:w-[40px]"></div>
                                    <div class="line absolute right-0 bottom-0 w-[1px] h-0 bg-main-500 duration-350 group-hover/item:h-[40px]"></div>
                                </div>
                            </div>
                            <div class="content flex flex-col gap-[15px] md:gap-[15px]">
                                <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium text-center">Our</p>
                                <h2 class="text text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden text-center">Mission</h2>
                            </div>
                            <div class="editor-field mt-[50px] xl:mt-[60px] lg:mt-[45px] md:mt-[30px]">
                                <div class="text-editor !max-w-[550px] w-full md:!max-w-full mx-auto editor-p:text-[20px] editor-li:text-[20px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px]">
                                    <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                    <p style="color: #1E1E1E; text-align: center;">Wemobile is a mobile hospital solutions company that makes healthcare accessible and provides effective solutions in emergency situations. With its high quality and specially designed Mobile Hospital Truck, Container and Trailer vehicles, Wemobile enables fast and effective healthcare services, equipped with healthcare equipment and expert personnel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-field w-[1px] h-full md:w-full md:h-[1px]">
                        <div class="line w-full h-full bg-black/10"></div>
                    </div>
                    <div class="info-item item relative group/item">
                        <div class="content relative p-[30px] lg:p-[20px] md:p-[15px]">
                            <div class="line-field absolute left-0 top-0 w-full h-full pointer-events-none">
                                <div class="line-top-left absolute top-0 left-0 w-[40px] h-[40px]">
                                    <div class="line absolute left-0 top-0 w-0 h-[1px] bg-main-500 duration-350 group-hover/item:w-[40px]"></div>
                                    <div class="line absolute left-0 top-0 w-[1px] h-0 bg-main-500 duration-350 group-hover/item:h-[40px]"></div>
                                </div>
                                <div class="line-bottom-left absolute bottom-0 right-0 w-[40px] h-[40px]">
                                    <div class="line absolute right-0 bottom-0 w-0 h-[1px] bg-main-500 duration-350 group-hover/item:w-[40px]"></div>
                                    <div class="line absolute right-0 bottom-0 w-[1px] h-0 bg-main-500 duration-350 group-hover/item:h-[40px]"></div>
                                </div>
                            </div>
                            <div class="content flex flex-col gap-[15px] md:gap-[15px]">
                                <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium text-center">Our</p>
                                <h2 class="text text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden text-center">Vision</h2>
                            </div>
                            <div class="editor-field mt-[50px] xl:mt-[60px] lg:mt-[45px] md:mt-[30px]">
                                <div class="text-editor !max-w-[550px] w-full md:!max-w-full mx-auto editor-p:text-[20px] editor-li:text-[20px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px]">
                                    <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                    <p style="color: #1E1E1E; text-align: center;">Wemobile is a mobile hospital solutions company that makes healthcare accessible and provides effective solutions in emergency situations. With its high quality and specially designed Mobile Hospital Truck, Container and Trailer vehicles, Wemobile enables fast and effective healthcare services, equipped with healthcare equipment and expert personnel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW WE ARE DOING -->
    <section class="services-section pb-[130px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px]">
        <div class="container max-w-[1500px]">
            <div class="wrapper">
                <div class="title-field srb-short-all">
                    <div class="content flex flex-col gap-[15px] md:gap-[15px]">
                        <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium text-center">Wemobile</p>
                        <h2 class="text text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden text-center">How We Are Doing?</h2>
                    </div>
                </div>
                <?php $list = [
                    [
                        "title" => "Design",
                        "expo" => '<p style="color: #1E1E1E;">Wemobile is a mobile hospital solutions company that makes healthcare accessible and provides effective solutions in emergency situations. With its high quality and specially designed Mobile Hospital Truck, Container and Trailer vehicles, Wemobile enables fast and effective healthcare services, equipped with healthcare equipment and expert personnel.</p>',
                        "image" => "assets/image/other/image-1.jpg",
                    ],
                    [
                        "title" => "Installation",
                        "expo" => '<p style="color: #1E1E1E;">Wemobile is a mobile hospital solutions company that makes healthcare accessible and provides effective solutions in emergency situations. With its high quality and specially designed Mobile Hospital Truck, Container and Trailer vehicles, Wemobile enables fast and effective healthcare services, equipped with healthcare equipment and expert personnel.</p>',
                        "image" => "assets/image/other/image-1.jpg",
                    ],
                    [
                        "title" => "Maintenance",
                        "expo" => '<p style="color: #1E1E1E;">Wemobile is a mobile hospital solutions company that makes healthcare accessible and provides effective solutions in emergency situations. With its high quality and specially designed Mobile Hospital Truck, Container and Trailer vehicles, Wemobile enables fast and effective healthcare services, equipped with healthcare equipment and expert personnel.</p>',
                        "image" => "assets/image/other/image-1.jpg",
                    ],
                ]; ?>
                <!-- pb-[calc((170px+70px+70px)+(170px+70px+70px))] 2xl:pb-[calc((150px+90px+45px)+(150px+90px))] xl:pb-[calc((115px+60px+30px)+(115px+60px))] lg:pb-[calc((105px+40px+20px)+(105px+40px))] md:pb-0 -->
                <div class="relative pb-[130px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px]">
                    <div class="service-wrapper relative pt-[60px] xl:pt-[45px] lg:pt-[30px] md:pt-[20px] sm:pt-[15px] md:flex md:flex-col md:gap-[30px]">
                        <?php foreach ($list as $key => $item) : ?>
                            <div class="item service-item group/item relative w-full [&:not(:first-child)]:absolute [&:not(:first-child)]:left-0 [&:not(:first-child)]:w-full [&:not(:first-child)]:h-full brightness-100 md:!relative md:!h-auto md:!top-auto md:!left-auto [&:nth-child(2)]:top-[calc((160px))] 2xl:[&:nth-child(2)]:top-[calc((160px))] xl:[&:nth-child(2)]:top-[calc((115px+60px+30px))] lg:[&:nth-child(2)]:top-[calc((105px+40px+20px))] [&:nth-child(3)]:top-[calc((160px+100px))] 2xl:[&:nth-child(3)]:top-[calc((150px+100px))] xl:[&:nth-child(3)]:top-[calc((115px+60px+30px)+(115px+60px))] lg:[&:nth-child(3)]:top-[calc((105px+40px+20px)+(105px+40px))] md:[&:nth-child(2)]:top-0 md:[&:nth-child(3)]:top-0">
                                <div class="content sm:overflow-hidden bg-white px-[60px] py-[45px] lg:p-[40px] md:p-[30px] duration-350 group-[&.is-active]/item:bg-main-500 shadow-[0px_0px_100px_0px_rgba(0,0,0,0.08)]">
                                    <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,7.1fr)] md:grid-cols-1 gap-[90px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px]">
                                        <div class="image-field aspect-[500/400] md:aspect-video">
                                            <div class="image w-full h-full overflow-hidden translate-z-0">
                                                <img src="<?= $item['image'] ?>" class="full-cover" alt="">
                                            </div>
                                        </div>
                                        <div class="text-field flex flex-col gap-[100px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px] justify-center">
                                            <h2 class="text text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden duration-350 group-[&.is-active]/item:text-white"><?= $item['title'] ?></h2>
                                            <div class="text-editor !max-w-full editor-p:text-[20px] editor-li:text-[20px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px] group-[&.is-active]/item:[&_>*]:!text-white [&_>*]:duration-350">
                                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                <?= $item['expo'] ?>
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
    </section>

    <!-- MARKET | COMPONENT -->
    <section class="market-section pb-[130px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px] relative">
    <div class="section-content relative bg-bodyColor">
        <div class="carousel-field relative">
            <div class="market-image-carousel swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($markets as $key => $item) : ?>
                        <div class="swiper-slide group/slide">
                            <div class="content relative">
                                <div class="image-field relative translate-z-0 sm:absolute sm:left-0 sm:top-0 sm:w-full sm:h-full">
                                    <div class="image aspect-[1920/1000] overflow-hidden translate-z-0 sm:aspect-none sm:w-full sm:h-full">
                                        <div class="background absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none">
                                            <div class="image w-full h-full overflow-hidden translate-z-0">
                                                <img src="assets/image/static/homepage-market-shadow.png" class="full-cover" alt="">
                                            </div>
                                        </div>
                                        <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'market_images_folder'], $item['lang']) . '/' . $item['image'] ?>" class="full-cover" alt="">
                                    </div>
                                </div>
                                <div class="text-container container max-w-[1500px] min-sm:absolute min-sm:left-1/2 min-sm:-translate-x-1/2 min-sm:top-1/2 min-sm:-translate-y-1/2 sm:relative sm:py-[30px]">
                                    <div class="text-wrapper flex flex-col gap-[30px] lg:gap-[20px] pl-[30px] sm:pl-[20px] py-[15px] lg:py-[10px] relative translate-z-0 rtl:pr-[30px] sm:pr-[20px]">
                                        <div class="line-field w-0 absolute left-0 top-0 h-full duration-350 group-[&.swiper-slide-active]/slide:w-[7px] sm:group-[&.swiper-slide-active]/slide:w-[3px] group-[&.swiper-slide-active]/slide:delay-1000 rtl:left-auto rtl:right-0">
                                            <div class="line w-full h-full bg-main-500"></div>
                                        </div>
                                        <div class="category-field flex flex-col gap-[15px] duration-350 opacity-0 translate-y-[5px] group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:delay-1000">
                                            <p class="category text-[18px] md:text-[16px] leading-tight font-medium tracking-[0.15rem] text-white"><?= $item['category'] ?></p>
                                        </div>
                                        <div class="title-field flex flex-col gap-[15px] duration-350 opacity-0 translate-y-[5px] group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:delay-1100">
                                            <a href="<?= $item['link'] ?>" class="title text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-none text-white font-semibold [&_br]:hidden"><?= $item['title'] ?></a>
                                        </div>
                                        <div class="editor-field flex flex-col gap-[15px] mt-[10px] lg:mt-0 duration-350 opacity-0 translate-y-[5px] group-[&.swiper-slide-active]/slide:translate-y-0 group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:delay-1200">
                                            <div class="text-editor !max-w-[600px] w-full md:max-w-full editor-p:text-[18px] editor-li:text-[18px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px]">
                                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                <?= $item['editor'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-controller mt-[70px] 2xl:mt-[60px] xl:mt-[50px] lg:mt-[40px] md:mt-[30px]">
                                        <div class="carousel-navigation flex justify-start gap-[20px] md:gap-[15px] sm:gap-[10px] pointer-events-none">
                                            <div class="market-image-prev cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector rtl:rotate-180">
                                                <div class="icon group/navigation flex items-center justify-center duration-350">
                                                    <i class="icon-arrow-left text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[-3px]"></i>
                                                </div>
                                            </div>
                                            <div class="market-image-next cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector rtl:rotate-180">
                                                <div class="icon group/navigation flex items-center justify-center duration-350">
                                                    <div class="icon-arrow-right text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[3px]"></div>
                                                </div>
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
        <div class="market-iconable-field absolute left-1/2 -translate-x-1/2 w-full bottom-0 z-50 lg:hidden">
            <div class="container max-w-[1560px]">
                <div class="wrapper">
                    <ul class="grid grid-cols-7 gap-[18px]">
                        <?php foreach ($markets as $key => $item) : ?>
                            <li class="market-image-item group/mii relative cursor-pointer">
                                <div class="content flex flex-col gap-[20px] lg:gap-[15px] duration-350 bg-white/10 h-full group-[&.is-active]/mii:bg-main-500 py-[40px] px-[20px] xl:py-[30px] lg:p-[20px] group-hover/mii:bg-white/30">
                                    <div class="image-field aspect-square max-w-[54px] max-h-[54px] w-full h-full mx-auto">
                                        <div class="image w-full h-full overflow-hidden translate-z-0">
                                            <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'market_images_folder'], $item['lang']) . '/' .$item['icon_image'] ?>" class="full-contain" alt="">
                                        </div>
                                    </div>
                                    <span class="text text-[16px] leading-tight text-white duration-350 text-center"><?= $item['title'] ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  

    <!-- BRANDS -->
    <section class="brands-section pb-[130px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px]">
        <div class="container max-w-[1435px]">
            <div class="wrapper grid grid-cols-[minmax(0,6.6fr)_minmax(0,6.3fr)] md:grid-cols-1 gap-[80px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px] sm:gap-[20px]">
                <div class="carousel-field relative">
                    <div class="brand-main-image-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($brands as $item) : ?>
                                <div class="swiper-slide group/slide">
                                    <div class="image-field aspect-[660/720] w-full md:aspect-video relative translate-z-0">
                                        <div class="image w-full h-full overflow-hidden translate-z-0">
                                            <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'brand_images_folder'], $item['lang']) . '/' . $item['slider_image'] ?>" class="full-cover" alt="" data-swiper-parallax-x="50%">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="text-field">
                    <div class="text-content flex flex-col justify-center h-full">
                        <div class="carousel-controller mb-[40px] xl:mb-[30px] lg:mb-[20px] md:mb-[15px]">
                            <div class="carousel-navigation flex justify-start gap-[20px] md:gap-[15px] sm:gap-[10px] pointer-events-none md:justify-start">
                                <div class="brand-main-image-prev cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                    <div class="icon group/navigation flex items-center justify-center duration-350">
                                        <i class="icon-arrow-left text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[-3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[3px]"></i>
                                    </div>
                                </div>
                                <div class="brand-main-image-next cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                    <div class="icon group/navigation flex items-center justify-center duration-350">
                                        <div class="icon-arrow-right text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[-3px]"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content flex flex-col gap-[20px] md:gap-[15px]">
                            <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium">Brands</p>
                            <h2 class="text text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden">Health is With You<br> Everywhere, Every Time!</h2>
                        </div>
                        <div class="carousel-field relative mt-[80px] xl:mt-[60px] lg:mt-[45px] md:mt-[30px]">
                            <div class="background bg-white absolute top-[-5px] left-[-5px] w-[25%] h-[calc(100%+10px)] z-2 translate-z-0 [mask-image:linear-gradient(90deg,black,transparent)] pointer-events-none"></div>
                            <div class="background bg-white absolute top-[-5px] right-[-5px] w-[25%] h-[calc(100%+10px)] z-2 translate-z-0 [mask-image:linear-gradient(270deg,black,transparent)] pointer-events-none"></div>
                            <div class="brand-carousel swiper">
                                <div class="swiper-wrapper">
                                    <!-- STABİL BİR ÇALIŞMA İÇİN, EN AZ 6 TANE GÖRSEL YÜKLENMELİDİR. -->
                                   <?php foreach ($brands as $item) : ?>
                                            <div class="swiper-slide group/slide">
                                                <div class="image aspect-[270/55] max-w-[270px] overflow-hidden translate-z-0">
                                                    <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'brand_images_folder'], $item['lang']) . '/' . $item['image'] ?>" class="full-contain opacity-50 grayscale group-[&.swiper-slide-active]/slide:grayscale-0 group-[&.swiper-slide-active]/slide:opacity-100 duration-350" alt="">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="carousel-controller hidden md:block mt-[20px]">
                                <div class="carousel-navigation flex justify-center gap-[20px] md:gap-[15px] sm:gap-[10px] pointer-events-none">
                                    <div class="brand-prev cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                        <div class="icon group/navigation flex items-center justify-center duration-350">
                                            <i class="icon-arrow-left text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[-3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[3px]"></i>
                                        </div>
                                    </div>
                                    <div class="brand-next cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                        <div class="icon group/navigation flex items-center justify-center duration-350">
                                            <div class="icon-arrow-right text-main-500 text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-[#676767] group-hover/navigation:text-main-500 duration-350 group-hover/navigation:translate-x-[3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[-3px]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="editor-field mt-[45px] lg:mt-[45px] md:mt-[30px]">
                            <div class="text-editor !max-w-full editor-p:text-[20px] editor-li:text-[20px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px]">
                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                <p style="color: #1E1E1E;">To provide environmentally friendly solutions that improve people's quality of life by using the power of advanced chemistry technology. We create transformation by combining durability and aesthetics in a wide range from sports areas to living spaces, from industrial spaces to public spaces.</p>
                            </div>
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
    // DETAIL
    // ------------------------------------------------------------------

    // DETAIL CAROUSEL
    // ------------------------------------------------------------------
    if (document.querySelector('.detail-carousel')) {
        let detailCarousel = new Swiper(".detail-carousel", {
            modules: [A, N, Px],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 0,
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
                nextEl: ".detail-next",
                prevEl: ".detail-prev"
            },
        });

        // PAUSE ON MOUSE ENTER
        detailCarousel.autoplay.stop();
        let detailSection = document.querySelector('.detail-section');
        let detailSlide = document.querySelectorAll('.detail-carousel .swiper-slide');
        if (window.innerWidth > 1024) {
            detailSection.addEventListener('mouseenter', function() {
                detailCarousel.autoplay.stop();
            });
            detailSection.addEventListener('mouseleave', function() {
                detailCarousel.autoplay.start();
            });

            detailSlide.forEach(function(item, index) {
                gsap.to(item, {
                    scrollTrigger: {
                        trigger: item,
                        start: "top-=300px center",
                        end: "bottom+=300px center",
                        scrub: true,
                        onEnter: function() {
                            detailCarousel.autoplay.start();
                        },
                        onLeave: function() {
                            detailCarousel.autoplay.stop();
                        },
                        onEnterBack: function() {
                            detailCarousel.autoplay.start();
                        },
                        onLeaveBack: function() {
                            detailCarousel.autoplay.stop();
                        },
                    },
                });
            });
        }
    }
</script>

<script>
    if (window.innerWidth > 1024) {
        let serviceCards = document.querySelectorAll('.services-section .service-wrapper > .item');
        let serviceTL = gsap.timeline({
            scrollTrigger: {
                trigger: '.services-section .service-wrapper',
                start: 'top top',
                end: 'top+=' + serviceCards.length * 1.5 * 100 + '% top-=50%',
                scrub: 1.5,
                pin: true,
                onUpdate: function() {
                    let progress = serviceTL.progress();
                    let index = Math.floor(progress * serviceCards.length);
                    serviceCards.forEach(card => {
                        card.classList.remove('is-active');
                    });
                    serviceCards[index].classList.add('is-active');
                }
            }
        });

        serviceCards.forEach(card => {
            let index = [...serviceCards].indexOf(card);
            gsap.set(card, {
                yPercent: (index * 100),
            });

            serviceTL.to(card, {
                yPercent: 0,
                duration: 1,
                ease: 'none',
            });

            if (index + 1 < serviceCards.length) serviceTL.to(card, {
                duration: 0.5,
                ease: 'none',
                scale: 0.9,
            });
        });
    }
</script>

<script>
    // BRANDS
    // ------------------------------------------------------------------

    // BRAND MAIN IMAGE CAROUSEL
    // ------------------------------------------------------------------
    if (document.querySelector('.brand-main-image-carousel')) {
        let brandMainImageCarousel = new Swiper(".brand-main-image-carousel", {
            modules: [A, N, Px],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 0,
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
                nextEl: ".brand-main-image-next",
                prevEl: ".brand-main-image-prev"
            },
        });

        // PAUSE ON MOUSE ENTER
        brandMainImageCarousel.autoplay.stop();
        let brandSection = document.querySelector('.brands-section');
        let brandSlide = document.querySelectorAll('.brand-main-image-carousel .swiper-slide');
        if (window.innerWidth > 1024) {
            brandSection.addEventListener('mouseenter', function() {
                brandMainImageCarousel.autoplay.stop();
            });
            brandSection.addEventListener('mouseleave', function() {
                brandMainImageCarousel.autoplay.start();
            });

            brandSlide.forEach(function(item, index) {
                gsap.to(item, {
                    scrollTrigger: {
                        trigger: item,
                        start: "top-=300px center",
                        end: "bottom+=300px center",
                        scrub: true,
                        onEnter: function() {
                            brandMainImageCarousel.autoplay.start();
                        },
                        onLeave: function() {
                            brandMainImageCarousel.autoplay.stop();
                        },
                        onEnterBack: function() {
                            brandMainImageCarousel.autoplay.start();
                        },
                        onLeaveBack: function() {
                            brandMainImageCarousel.autoplay.stop();
                        },
                    },
                });
            });
        }
    }

    // BRAND CAROUSEL
    // ------------------------------------------------------------------
    if (document.querySelector('.brand-carousel')) {
        let brandCarousel = new Swiper(".brand-carousel", {
            modules: [A, N],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 30,
            loop: true,
            resistance: true,
            resistanceRatio: 0,
            centeredSlides: true,
            navigation: {
                nextEl: ".brand-next",
                prevEl: ".brand-prev"
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                769: {
                    slidesPerView: 2.5,
                },
            },
        })
    }
</script>                  
@endsection 