@extends('layouts.main')

@section('content')
<?php 
$pageTitle = 'Using areas';
$breadcrumbTitle = 'Using areas';
?>

<main class="main-field">
    <!-- BREADCRUMB -->
    <?php
        $breadcrumbImage = "using-areas-breadcrumb.jpg";
        
    ?>

    <section class="breadcrumb w-full relative h-[525px] xl:h-[400px] lg:h-[350px] md:h-[300px]">
        <div class="image-wrapper relative w-full h-full">
            <img src="../assets/image/general/<?= $breadcrumbImage ?>" alt="<?= $pageTitle ?>" width="1920" height="525" class="w-full h-full object-cover">
            <div class="overlay pointer-events-none absolute left-0 top-0 w-full h-full z-2 bg-[linear-gradient(180deg,_#2E475C_0%,_rgba(46,71,92,0.20)_100%)]"></div>
        </div>
        <div class="absolute w-full h-full z-3 left-0 bottom-0 flex items-end pb-[120px] 2xl:pb-[95px] xl:pb-[60px] lg:pb-[30px] md:pb-0">
            <div class="container max-w-[1640px]">
                <div class="flex min-md:items-center md:flex-col justify-between gap-[20px]">
                    <h1 class="text-[64px] 2xl:text-[52px] xl:text-[40px] lg:text-[28px] md:text-[24px] leading-[80px] 2xl:leading-[70px] xl:leading-[60px] lg:leading-[40px] md:leading-[36px] font-normal text-white [&_span]:font-bold [&_span]:text-white reveal">Using Areas</h1>
                    <div class="breadcrumb-area flex min-md:justify-end md:w-full reveal">
                        <div class="breadcrumb md:w-full relative py-[40px] pl-[100px] 2xl:pl-[60px] md:px-0 md:py-[20px] before:absolute before:left-0 before:md:-left-1/2 before:top-0 before:w-screen before:md:w-[calc(100vw+50%)] before:h-full before:bg-primary-main before:min-md:-skew-x-[30deg] before:rounded-[6px]">
                            <ul class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-white/60 flex items-center flex-wrap relative z-2">
                                <li class="inline-flex items-center">
                                    <a href="index.php" class="block">
                                        <i class="icon-home text-[18px] md:text-[15px] leading-none h-[18px]  text-white"></i>
                                    </a>
                                </li>

                                <li class="inline-flex items-center">
                                    <a href="" class="block">
                                        <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">Using areas</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <!-- CONTENT -->
    <section class="using-area pt-[80px] xl:pt-[40px] mb-[160px] 2xl:mb-[120px] xl:mb-[90px] lg:mb-[60px]">
        <div class="container max-w-[1640px]">
            <div class="wrapper px-[135px] 2xl:px-[100px] xl:px-[65px] lg:px-[35px] md:px-0">
                <div class="flex flex-col gap-[80px] xl:gap-[40px] md:gap-[24px]">
                    <?php foreach ($markets as $key => $item): ?>
                        <div class="reveal-image">
                            <div class="item bg-white shadow-[0px_4px_30px_0px_rgba(0,0,0,0.10)] p-[24px] rounded-[20px] transition-all duration-450 border border-solid border-transparent hover:border-primary-main group">
                                <div class="grid grid-cols-2 sm:grid-cols-1 gap-[100px] xl:gap-[70px] lg:gap-[40px] md:gap-[20px]">
                                    <div class="left flex flex-col justify-center px-[70px] xl:px-[50px] lg:px-[25px] md:px-0">
                                        <span class="inline-block text-[24px] md:text-[20px] leading-[36px] text-primary-main mb-[10px]">0<?= $key + 1 ?></span>
                                        <h2 class="text-[48px] 2xl:text-[40px] xl:text-[30px] md:text-[20px] leading-[64px] xl:leading-[35px] text-secondary-main font-semibold transition-all duration-450 group-hover:text-primary-main mb-[30px] sm:mb-[15px] line-clamp-2">
                                            <a href="using-area-detail.php"><?= $item['title_1'] ?></a>
                                        </h2>
                                        <p class="text-[18px] md:text-[16px] leading-[28px] text-secondary-main/75 mb-[30px] line-clamp-3"><?= $item['description'] ?></p>
                                        <div class="button min-sm:pl-[10px] min-sm:h-0 min-sm:opacity-0 min-sm:translate-y-[10px] min-sm:transition-all min-sm:duration-450 min-sm:overflow-hidden group-hover:min-sm:h-[60px] group-hover:min-sm:opacity-100 group-hover:min-sm:translate-y-0">
                                            <?php
                                            $link = env('HTTP_DOMAIN') . '/' . getUrl('market_url') . '/' . $item->seo_url;
                                            $title = "Details";
                                            $background = "bg-secondary-50 backdrop-blur-[15px]";
                                            $backgroundHover = "before:bg-primary-main";
                                            $textColor = "text-secondary-main";
                                            $textColorHover = "group-hover/button:min-md:text-white";
                                            ?>
                                        </div>
                                        <a href="<?= $link ?>" class="main-button group/button inline-flex items-center sm:justify-between gap-[32px] lg:gap-[24px] xs:gap-[20px] w-fit sm:w-full max-h-[60px] py-[6px] pl-[50px] lg:pl-[25px] xs:pl-[15px] pr-[11px] relative transition-all duration-450 before:absolute before:-skew-x-12 before:rounded-[6px] before:z-3 before:right-0 before:top-0 before:w-0 before:h-full <?= $backgroundHover ?> before:transition-all before:duration-450 hover:before:min-md:w-full hover:before:min-md:right-auto hover:before:min-md:left-0">
                                            <div class="absolute w-full h-full left-0 top-0 -skew-x-12 rounded-[6px] z-2 <?= $background ?>"></div>
                                            <span class="text-[18px] md:text-[16px] leading-[24px] relative z-5 transition-all duration-450 whitespace-nowrap <?= $textColorHover ?>  <?= $textColor ?>"><?= $title ?></span>
                                            <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center relative z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] ---- after:absolute after:right-0 after:top-0 after:w-0 after:h-full after:bg-secondary-main after:transition-all after:duration-450 group-hover/button:after:delay-200 after:-skew-x-12 after:rounded-[6px] group-hover/button:after:min-md:w-full group-hover/button:after:min-md:right-auto group-hover/button:after:min-md:left-0">
                                                <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="right">
                                        <a href="using-area-detail.php" class="image-wrapper block w-full h-[420px] sm:h-[360px] xs:h-[300px] rounded-[20px] overflow-hidden">
                                            <img src="<?= asset( getFolder(['uploads_folder', 'market_images_folder'], app()->getLocale()) ) . '/'. $item['image'] ?>" alt="<?= $item['title'] ?>" width="632" height="420" class="w-full h-full object-cover">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection