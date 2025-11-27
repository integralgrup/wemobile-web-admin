@extends('layouts.main')


@section('content')
<?php $pageTitle = 'Haberler'; 
$mc = ''?>
<main class="main-field">
    <!-- BREADCRUMB | FEATURED IMAGE -->
    <section class="breadcrumb-field relative pb-[87px] md:pb-0 overflow-hidden">
        <!-- FEATURED CAROUSEL -->
        <div class="carousel-field relative h-[calc(100%-85px-35px)] pt-[var(--header-height)]">
            <div class="featured-blog-carousel swiper h-full">
                <div class="swiper-wrapper">
                    <?php foreach ($blogs as $key => $item) : ?>
                        <div class="swiper-slide group/slide">
                            <div class="content relative">
                                <div class="image-field translate-z-0 absolute left-0 top-0 w-full h-full">
                                    <div class="background absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none sm:opacity-80">
                                        <div class="image w-full h-full overflow-hidden translate-z-0">
                                            <img src="assets/image/static/blog-shadow.png" class="full-cover !object-left-top rtl:-scale-x-100" alt="">
                                        </div>
                                    </div>
                                    <div class="background [background:_linear-gradient(180deg,_#FFF_0%,_rgba(255,_255,_255,_0.00)_55.38%)] absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none rtl:-scale-x-100"></div>
                                    <div class="background [background:_linear-gradient(0deg,_#FFF_0%,_rgba(255,_255,_255,_0.00)_55.38%)] absolute bottom-0 left-0 w-full h-[50%] z-2 translate-z-0 pointer-events-none hidden md:block rtl:-scale-x-100"></div>
                                    <div class="image overflow-hidden translate-z-0 aspect-[1920/720] h-[720px] xl:h-[700px] lg:h-[500px] w-full">
                                        <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'blog_images_folder'], $item['lang']) . '/' . $item['image'] ?>" class="full-cover" alt="">
                                    </div>
                                </div>
                                <div class="text-container container max-w-[1500px] py-[100px]">
                                    <div class="text-wrapper max-w-[400px] w-full sm:max-w-full pb-[87px] md:pb-0">
                                        <div class="small-text relative">
                                            <p class="text small-text text-[18px] md:text-[16px] leading-tight text-main-500 tracking-[0.15rem] font-medium">Featured News</p>
                                        </div>
                                        <div class="title-field mt-[20px] lg:mt-[20px] md:mt-[15px] translate-z-0">
                                            <a href="<?= $item['link'] ?>" class="flex group/link">
                                                <span class="text text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold md:[&_br]:hidden duration-350 group-hover/link:text-main-500">{{ $item['title'] }}</span>
                                            </a>
                                        </div>
                                        <div class="editor-field mt-[30px] xl:mt-[30px] lg:mt-[30px] md:mt-[20px] sm:mt-[15px]">
                                            <div class="text-editor !max-w-[400px] w-full md:!max-w-full editor-p:text-[20px] editor-li:text-[20px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px] [&_>*]:hidden [&_>*:first-child]:line-clamp-2">
                                                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                                                <p style="color: #1E1E1E; opacity: 75%;">{{ mb_substr(strip_tags($item['description']), 0, 300) }}{{ strlen($item['description']) > 300 ? '...' : $item['description'] }}...</p>
                                            </div>
                                        </div>
                                        <div class="button-field mt-[30px] xl:mt-[30px] lg:mt-[30px] md:mt-[20px] sm:mt-[15px]">
                                            <a href="<?= $item['link'] ?>" class="flex items-center gap-[15px] w-fit group/link opacity-65 duration-350 hover:opacity-100 translate-z-0">
                                                <span class="text text-[18px] md:text-[16px] sm:text-[14px] leading-tight text-main-500 font-medium duration-350 group-hover/item:text-white tracking-[0.25rem]  translate-z-0">VIEW</span>
                                                <i class="icon icon-arrow-right-2 text-[27px] h-[27px] text-main-500 group-hover/item:text-white group-hover/link:translate-x-[3px] block leading-none duration-350 rtl:rotate-180 rtl:group-hover/link:translate-x-[-3px]"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
                <div class="breadcrumb-wrapper grid grid-cols-[minmax(0,7.8fr)_minmax(0,6.5fr)] xl:grid-cols-[minmax(0,6.5fr)_minmax(0,6fr)] gap-[15px] md:grid-cols-1">
                    <div class="wrapper max-w-full pr-[60px] relative pointer-events-auto 2xl:pr-[60px] xl:pr-[40px] md:max-w-full md:pr-0 rtl:pr-0 rtl:2xl:pr-0 rtl:xl:pr-0 rtl:md:pr-0 rtl:pl-[60px] rtl:2xl:pl-[60px] rtl:xl:pl-[40px] rtl:md:pl-0">
                        <div class="breadcrumb-background bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
                        <div class="content py-[63px] xl:py-[40px] lg:py-[30px] flex flex-col gap-[50px] relative z-20 xl:gap-[30px] lg:gap-[30px] md:gap-[20px] md:py-[20px]">
                            <div class="inner flex justify-between items-center">
                                <div class="text-field flex items-center gap-[60px] 2xl:gap-[50px] xl:gap-[40px] lg:gap-[30px] md:flex-col md:gap-[15px] md:items-start">
                                    <div class="title-field max-w-[410px] w-full md:max-w-full md:order-2">
                                        <h1 class="title text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-none text-white font-semibold">News</h1>
                                    </div>
                                    <div class="navigation-field sm:hidden md:order-1">
                                        <ul class="flex gap-[5px] [&_li:last-child_.seperator]:hidden">
                                            <?php $list = [
                                                ["title" => "Home", "link" => "index.php",],
                                                ["title" => "News", "link" => "blog.php",],
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

                                <div class="carousel-field relative">
                                    <div class="carousel-navigation flex justify-center gap-[20px] md:gap-[15px] sm:gap-[10px] pointer-events-none">
                                        <div class="featured-blog-prev cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                            <div class="icon group/navigation flex items-center justify-center duration-350">
                                                <i class="icon-arrow-left text-white text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-white/30 group-hover/navigation:text-white duration-350 group-hover/navigation:translate-x-[-3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[3px]"></i>
                                            </div>
                                        </div>
                                        <div class="featured-blog-next cursor-pointer pointer-events-auto duration-350 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none group/nav-selector">
                                            <div class="icon group/navigation flex items-center justify-center duration-350">
                                                <div class="icon-arrow-right text-white text-[45px] h-[45px] sm:text-[25px] sm:h-[25px] flex items-center justify-center group-[&.swiper-button-disabled]/nav-selector:text-white/30 group-hover/navigation:text-white duration-350 group-hover/navigation:translate-x-[3px] rtl:rotate-180 rtl:group-hover/navigation:translate-x-[3px]"></div>
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

    <!-- FILTER -->
    <section class="filter-section pt-[100px] pb-[150px] 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px]">
        <div class="container max-w-[1500px]">
            <div class="wrapper flex items-center justify-between gap-[40px] lg:gap-[30px] md:gap-[20px] sm:flex-col">
                <div class="category-field flex items-center gap-[40px] lg:gap-[30px] md:gap-[20px] sm:flex-col sm:items-start sm:w-full">
                    <div class="text-field">
                        <p class="text text-[19px] lg:text-[18px] md:text-[16px] leading-tight text-[#333333]">Category:</p>
                    </div>
                    <div class="filter-list min-w-[120px] w-full">
                        <div class="web-view md:hidden">
                            <ul class="flex gap-[15px]">
                                <li>
                                    <a href="javascrip:;" class="flex group/link px-[45px] h-[60px] justify-center items-center [&.is-active]:bg-main-500 duration-350 border border-solid border-black/10 [&.is-active]:border-main-500 hover:bg-main-500 hover:border-main-500 is-active">
                                        <span class="text text-[18px] leading-tight text-black duration-350 group-[&.is-active]/link:text-white group-hover/link:text-white text-center">Blog</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascrip:;" class="flex group/link px-[45px] h-[60px] justify-center items-center [&.is-active]:bg-main-500 duration-350 border border-solid border-black/10 [&.is-active]:border-main-500 hover:bg-main-500 hover:border-main-500">
                                        <span class="text text-[18px] leading-tight text-black duration-350 group-[&.is-active]/link:text-white group-hover/link:text-white text-center">News</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile-view hidden md:block min-w-[150px] w-full">
                            <div class="custom-select relative group/select pointer-events-auto">
                                <select name="blog-selector" id="blog-selector" class="w-full h-[70px] md:h-[50px] border border-solid border-black/10 duration-350 group-hover/select:border-main-500 bg-bodyColor text-black pl-[30px] pr-[60px]">
                                    <option value="Blog">Blog</option>
                                    <option value="News">News</option>
                                </select>
                                <div class="icon-field absolute right-[30px] top-1/2 -translate-y-1/2 z-20 pointer-events-none rtl:right-auto rtl:left-[30px]">
                                    <i class="icon icon-chevron-bottom text-[12px] h-[12px] text-black/50 block leading-none duration-350"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-field w-full h-[1px] bg-black/10"></div>
                <div class="search-field max-w-[370px] w-full sm:min-w-full">
                    <form action="#">
                        <div class="custom-search border border-solid border-black/10 relative duration-350 hover:border-main-500 flex items-center gap-[25px]">
                            <input type="text" class="h-[70px] md:h-[50px] w-full pl-[25px] rtl:pl-0 rtl:pr-[25px]" placeholder="Kategoride arama yapın...">
                            <button class="icon-field pr-[25px] rtl:pr-0 rtl:pl-[25px]">
                                <i class="icon icon-search text-[22px] h-[22px] sm:text-[18px] sm:h-[18px] text-black/55 block leading-none duration-350 hover:text-main-500"></i>
                            </button>
                        </div>
                    </form>
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

    <!-- BLOG CONTENT -->
    <section class="blog-content-section pb-[120px] 2xl:pb-[80px] xl:pb-[60px] lg:pb-[45px] md:pb-[30px]">
        <div class="container max-w-[1430px]">
            <div class="wrapper">
                <div class="blog-wrapper grid grid-cols-2 gap-[60px] lg:gap-[45px] md:gap-[30px] sm:grid-cols-1">
                    <?php foreach ($blogs as $key => $item) : ?>
                        <div class="item blog-item relative group/item">
                            <div class="content">
                                <div class="image-field aspect-[650/485] w-full h-full overflow-hidden translate-z-0">
                                    <a href="<?= $item['link'] ?>" class="image w-full h-full translate-z-0 group/image">
                                        <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'blog_images_folder'], $item['lang']) . '/' .$item['image'] ?>" class="full-cover duration-350 group-hover/image:scale-105" alt="">
                                    </a>
                                </div>
                                <div class="text-field mt-[20px] md:mt-[15px]">
                                    <div class="date-field">
                                        <p class="date text-[18px] md:text-[16px] sm:text-[14px] tracking-[0.02rem] opacity-65 text-[#676767] group-hover/item:text-black duration-350"><?= date('d M Y', strtotime($item['created_at'])) ?></p>
                                    </div>
                                    <div class="text-field mt-[5px] flex justify-between gap-[15px] md:flex-col">
                                        <a href="<?= $item['link'] ?>" class="flex group/link">
                                            <span class="text text-[22px] xl:text-[20px] lg:text-[18px] font-medium leading-tight text-[#676767] duration-350 group-hover/item:text-black group-hover/item:group-hover/link:text-main-500">{{$item['title']}}</span>
                                        </a>
                                        <div class="button-field opacity-0 duration-350 group-hover/item:opacity-100 flex items-end md:opacity-100">
                                            <a href="<?= $item['link'] ?>" class="flex items-center gap-[15px] w-fit group/link opacity-65 duration-350 hover:opacity-100">
                                                <span class="text text-[18px] md:text-[16px] sm:text-[14px] leading-tight text-main-500 font-medium duration-350 group-hover/item:text-main-600 tracking-[0.25rem]">VIEW</span>
                                                <i class="icon icon-arrow-right-2 text-[27px] h-[27px] text-main-500 group-hover/item:text-main-600 group-hover/link:translate-x-[3px] block leading-none duration-350 rtl:rotate-180 rtl:group-hover/link:translate-x-[-3px]"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="button-field mt-[60px] lg:mt-[45px] md:mt-[30px] flex justify-center">
                    <a href="javascript:;" class="flex items-center gap-[15px] w-fit group/link opacity-65 duration-350 hover:opacity-100">
                        <span class="text text-[18px] md:text-[16px] sm:text-[14px] leading-tight text-main-500 font-medium duration-350 group-hover/item:text-main-600 tracking-[0.25rem]">MORE</span>
                        <i class="icon icon-chevron-bottom text-[15px] h-[15px] text-main-500 group-hover/item:text-main-600 group-hover/link:translate-y-[2px] block leading-none duration-350"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection 

@push('scripts')
<script>
    // FEATURED PRODUCT
    // ------------------------------------------------------------------
    if (document.querySelector('.featured-blog-carousel')) {
        // FEATURED PRODUCT CAROUSEL
        // ------------------------------------------------------------------
        let featuredProductCarousel = new Swiper(".featured-blog-carousel", {
            modules: [A, P, N, Px, EC],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 10,
            loop: false,
            resistance: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,
            parallax: true,
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
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            navigation: {
                nextEl: ".featured-blog-next",
                prevEl: ".featured-blog-prev"
            },
            pagination: {
                el: ".featured-blog-pagination",
                clickable: true,
            },
        });

        // PAUSE ON MOUSE ENTER
        featuredProductCarousel.autoplay.stop();
        let featuredProductSection = document.querySelector('.breadcrumb-field');
        let featuredProductThumbSlide = document.querySelectorAll('.featured-blog-carousel .swiper-slide');
        if (window.innerWidth > 1024) {
            featuredProductSection.addEventListener('mouseenter', function() {
                featuredProductCarousel.autoplay.stop();
            });
            featuredProductSection.addEventListener('mouseleave', function() {
                featuredProductCarousel.autoplay.start();
            });

            featuredProductThumbSlide.forEach(function(item, index) {
                gsap.to(item, {
                    scrollTrigger: {
                        trigger: item,
                        start: "top-=300px center",
                        end: "bottom+=300px center",
                        scrub: true,
                        onEnter: function() {
                            featuredProductCarousel.autoplay.start();
                        },
                        onLeave: function() {
                            featuredProductCarousel.autoplay.stop();
                        },
                        onEnterBack: function() {
                            featuredProductCarousel.autoplay.start();
                        },
                        onLeaveBack: function() {
                            featuredProductCarousel.autoplay.stop();
                        },
                    },
                });
            });
        }
    }
</script>
@endpush