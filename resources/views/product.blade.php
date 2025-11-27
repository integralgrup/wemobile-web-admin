@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $product->title;
$breadcrumbTitle = $product->title;
?>
    <style>
        body {
            background-color: white !important;
        }
    </style>

<main class="main-field header-space sub-page">
   
    <section class="main-area w-full overflow-hidden md:pt-[30px]">
        <div class="container max-w-[1640px] mb-[100px] lg:mb-[60px]">
            <div class="flex flex-wrap">
                <div class="w-1/2 md:w-full pr-[15px] md:pr-0 md:mb-[30px]">
                    <div class="breadcrumb-area min-md:!hidden flex min-md:justify-end md:w-full mb-[130px] 2xl:mb-[90px] xl:mb-[60px] lg:mb-[45px] reveal">
                        <div class="breadcrumb md:w-full relative py-[40px] pl-[100px] 2xl:pl-[60px] md:px-0 md:py-[20px] before:absolute before:left-0 before:md:-left-1/2 before:top-0 before:w-screen before:md:w-[calc(100vw+50%)] before:h-full before:bg-primary-main before:min-md:-skew-x-[30deg] before:rounded-[6px]">
                            <ul class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-white/60 flex items-center flex-wrap relative z-2">
                                <li class="inline-flex items-center">
                                    <a href="index.php" class="block">
                                        <i class="icon-home text-[18px] md:text-[15px] leading-none h-[18px]  text-white"></i>
                                    </a>
                                </li>

                                <li class="inline-flex items-center">
                                    <a href="products.php" class="block">
                                        <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">Products</p>
                                    </a>
                                </li>

                                <li class="inline-flex items-center">
                                    <a href="product-detail.php" class="block">
                                        <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">Product Detail</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-area w-full flex items-center md:flex-col-reverse gap-[70px] 2xl:gap-[35px] md:gap-[20px]">
                        <div class="product-detail-thumb-slider overflow-hidden h-[376px] md:h-[160px] sm:h-[100px] md:w-full reveal w-[70px]">
                            <div class="swiper-wrapper">
                                <?php foreach ($product->images as $image): ?>
                                    <div class="swiper-slide group">
                                        <div class="item w-full h-full p-[5px] rounded-[5px] overflow-hidden border border-solid border-transparent group-[&.swiper-slide-thumb-active]:border-primary-main md:h-auto md:aspect-square">
                                            <img src="<?= asset(getFolder(['uploads_folder', 'product_images_folder'], $product['lang']) . '/' . $image->image)?>" alt="<?=$image->alt?>" width="376" height="518" class="w-full h-full object-contain transition-all duration-300 opacity-35 group-[&.swiper-slide-thumb-active]:opacity-100">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="product-detail-slider overflow-hidden h-[700px] lg:h-[600px] md:h-[450px] sm:h-[320px] md:w-full reveal">
                            <div class="swiper-wrapper">
                                <?php foreach ($product->images as $image): ?>
                                    <div class="swiper-slide">
                                        <a href="<?= asset(getFolder(['uploads_folder', 'product_images_folder'], $product['lang']) . '/' . $image->image) ?>" class="block item w-full h-full" data-fancybox="product-gallery">
                                            <img src="<?= asset(getFolder(['uploads_folder', 'product_images_folder'], $product['lang']) . '/' . $image->image) ?>" alt="<?= $image->alt ?>" width="547" height="772" class="w-full h-full object-contain">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-full pl-[15px] md:p-0">
                    <div class="flex flex-col w-full">
                        <div class="breadcrumb-area md:!hidden flex min-md:justify-end md:w-full mb-[130px] 2xl:mb-[90px] xl:mb-[60px] lg:mb-[45px] reveal">
                            <div class="breadcrumb md:w-full relative py-[40px] pl-[100px] 2xl:pl-[60px] md:px-0 md:py-[20px] before:absolute before:left-0 before:md:-left-1/2 before:top-0 before:w-screen before:md:w-[calc(100vw+50%)] before:h-full before:bg-primary-main before:min-md:-skew-x-[30deg] before:rounded-[6px]">
                                <ul class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-white/60 flex items-center flex-wrap relative z-2">
                                    <li class="inline-flex items-center">
                                        <a href="index.php" class="block">
                                            <i class="icon-home text-[18px] md:text-[15px] leading-none h-[18px]  text-white"></i>
                                        </a>
                                    </li>

                                    <li class="inline-flex items-center">
                                        <a href="products.php" class="block">
                                            <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">Products</p>
                                        </a>
                                    </li>

                                    <li class="inline-flex items-center">
                                        <a href="product-detail.php" class="block">
                                            <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">Product Detail</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[20px] xs:gap-[10px] w-full mb-[50px] pl-[50px] xl:pl-[30px] lg:pl-0">
                            <span class="text-[24px] lg:text-[20px] leading-[36px] text-primary-main reveal"><?=$product->category->title?></span>
                            <div class="title mb-[20px] xs:mb-[5px] reveal">
                                <h1 class="text-[32px] xl:text-[28px] leading-[48px] xl:leading-[40px] font-bold text-secondary-main"><?=$product->title?></h1>
                            </div>
                            <p class="text-[20px] lg:text-[18px] leading-[30px] text-secondary-main opacity-85 reveal"><?=strip_tags($product->description)?></p>
                        </div>
                        <div class="buttons flex min-sm:items-center sm:flex-col gap-[20px] pl-[50px] xl:pl-[30px] lg:pl-0 mb-[60px] lg:mb-[40px]">
                            <div class="reveal-button-left">
                                <a href="#popup-get-offer" data-fancybox class="main-button group/button inline-flex items-center sm:justify-between gap-[32px] lg:gap-[24px] xs:gap-[20px] w-fit sm:w-full max-h-[60px] py-[6px] pl-[50px] lg:pl-[25px] xs:pl-[15px] pr-[11px] relative transition-all duration-450 before:absolute before:-skew-x-12 before:rounded-[6px] before:z-3 before:right-0 before:top-0 before:w-0 before:h-full before:bg-primary-main before:transition-all before:duration-450 hover:before:min-md:w-full hover:before:min-md:right-auto hover:before:min-md:left-0">
                                    <div class="absolute w-full h-full left-0 top-0 -skew-x-12 rounded-[6px] z-2 bg-secondary-50 backdrop-blur-[15px]"></div>
                                    <span class="text-[18px] md:text-[16px] leading-[24px] relative z-5 transition-all duration-450 whitespace-nowrap group-hover/button:min-md:text-white  text-secondary-main">Get Offer</span>
                                    <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center relative z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] ---- after:absolute after:right-0 after:top-0 after:w-0 after:h-full after:bg-secondary-main after:transition-all after:duration-450 group-hover/button:after:delay-200 after:-skew-x-12 after:rounded-[6px] group-hover/button:after:min-md:w-full group-hover/button:after:min-md:right-auto group-hover/button:after:min-md:left-0">
                                        <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                    </div>
                                </a>
                            </div>

                            <div class="reveal-button-right">
                                <a href="<?= asset(getFolder(['uploads_folder', 'product_images_folder'], $product['lang']) . '/' . $product->pdf_file) ?>" target="_blank" class="main-button group/button inline-flex items-center sm:justify-between gap-[32px] lg:gap-[24px] xs:gap-[20px] w-fit sm:w-full max-h-[60px] py-[6px] pl-[50px] lg:pl-[25px] xs:pl-[15px] pr-[11px] relative transition-all duration-450 before:absolute before:-skew-x-12 before:rounded-[6px] before:z-3 before:right-0 before:top-0 before:w-0 before:h-full before:bg-primary-main before:transition-all before:duration-450 hover:before:min-md:w-full hover:before:min-md:right-auto hover:before:min-md:left-0">
                                    <div class="absolute w-full h-full left-0 top-0 -skew-x-12 rounded-[6px] z-2 bg-secondary-50 backdrop-blur-[15px]"></div>
                                    <span class="text-[18px] md:text-[16px] leading-[24px] relative z-5 transition-all duration-450 whitespace-nowrap group-hover/button:min-md:text-white text-secondary-main">Catalog</span>
                                    <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center relative z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-secondary-main before:-skew-x-12 before:rounded-[6px] ---- after:absolute after:right-0 after:top-0 after:w-0 after:h-full after:bg-white after:transition-all after:duration-450 group-hover/button:after:delay-200 after:-skew-x-12 after:rounded-[6px] group-hover/button:after:min-md:w-full group-hover/button:after:min-md:right-auto group-hover/button:after:min-md:left-0">
                                        <i class="icon-pdf text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white group-hover/button:min-md:text-secondary-main relative z-5 transition-all duration-450 delay-200"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="product-icon-slider-area w-full py-[30px] pr-[50px] lg:px-[30px] md:px-0 mb:pb-0 relative before:absolute before:bg-white before:left-0 before:top-0 before:w-screen before:h-full before:shadow-[0px_4px_30px_0px_rgba(0,0,0,0.10)] before:rounded-[20px] md:before:hidden">
                            <div class="product-icon-slider overflow-hidden reveal">
                                <div class="swiper-wrapper items-center">
                                    <?php $icons = [
                                        ['icon' => 'icon-1.svg', 'title' => 'Infrastructure Works'],
                                        ['icon' => 'icon-2.svg', 'title' => 'Floor Arrangements'],
                                        ['icon' => 'icon-4.svg', 'title' => 'Steel Tribune & Seat Installation'],
                                        ['icon' => 'icon-3.svg', 'title' => 'Electric & Weak Currents'],
                                    ]; for ($i = 0; $i < count($icons) * 2; $i++): foreach ($icons as $item): ?>
                                        <div class="swiper-slide h-[140px] sm:h-[160px] flex-grow">
                                            <div class="item w-full h-full flex items-center justify-center flex-col text-center gap-[15px] px-[40px] md:px-[20px] border-0 !border-r border-solid border-black/8">
                                                <div class="image-wrapper w-[45px] aspect-square">
                                                    <img src="../assets/image/general/<?= $item['icon'] ?>" alt="<?= $item['title'] ?>" width="45" height="45">
                                                </div>
                                                <p class="text-[16px] sm:text-[14px] leading-[24px] sm:leading-[20px] text-[#1D1D1D]/65"><?= $item['title'] ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; endfor; ?>
                                </div>
                            </div>
                            <div class="nav-buttons flex min-md:flex-col md:justify-center md:px-[10px] gap-[30px] md:w-full md:z-2 min-md:absolute right-0 min-md:top-1/2 md:bottom-0 min-md:-translate-y-1/2 md:mt-[20px] md:hidden">
                                <div class="product-icon-prev cursor-pointer [&.product-icon-disabled]:cursor-auto w-[25px] aspect-square flex items-center justify-center group reveal-button-left">
                                    <i class="icon-arrow-left text-[25px] leading-none h-[25px] text-primary-main transition-all duration-300 group-[&.product-icon-disabled]:text-secondary-main/20"></i>
                                </div>
                                <div class="product-icon-next cursor-pointer [&.product-icon-disabled]:cursor-auto w-[25px] aspect-square flex items-center justify-center group reveal-button-right">
                                    <i class="icon-arrow-right text-[25px] leading-none h-[25px] text-primary-main transition-all duration-300 group-[&.product-icon-disabled]:text-secondary-main/20"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container max-w-[1640px] xsm:!px-0 mb-[160px] 2xl:mb-[120px] xl:mb-[90px] lg:mb-[60px] xsm:bg-secondary-main">
            <div class="product-tabs bg-secondary-main min-xsm:overflow-hidden rounded-[20px] xsm:rounded-0 relative p-[100px] pt-[70px] xl:p-[45px] sm:py-[20px] sm:px-0 transition-all duration-450 will-change-[height,transform]">
                <div class="circle absolute left-[40px] top-0 w-[816px] h-[341px] rounded-b-full bg-[radial-gradient(50%_100%_at_50%_0%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] opacity-30"></div>
                <div class="flex flex-col items-center gap-[70px] lg:gap-[40px] md:gap-[30px] relative z-2">
                    <div class="tabs xl:overflow-auto w-full">
                        <div class="tabs-overflow flex items-center gap-[36px] xl:gap-[20px] xl:overflow-auto md:px-[30px]">
                            <?php $tabs = ['General Features', 'Technical Information', 'Gallery', 'Frequently Asked Questions', 'Get Offer']; foreach ($tabs as $key => $item): ?>
                                <div class="reveal tab group cursor-pointer py-[18px] px-[42px] xl:px-[16px] grid place-items-center xl:w-full relative before:absolute before:left-0 before:top-0 before:w-full before:h-full before:opacity-0 before:bg-primary-main before:rounded-[6px] before:transition-all before:duration-300 before:-skew-x-12 [&.active]:before:opacity-100 <?= $key == 0 ? 'active' : '' ?>" data-tab-id="<?= $key ?>">
                                    <p class="text-[20px] md:text-[18px] leading-[30px] text-white/75 transition-all duration-300 group-[&.active]:text-white relative z-2 text-center min-xl:whitespace-nowrap md:whitespace-nowrap"><?= $item ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="custom-dropdown min-lg:hidden w-full !hidden">
                        <div class="dropdown relative group/dropdown">
                            <div class="placeholder flex items-center justify-between px-[25px] py-[15px] bg-primary-main cursor-pointer rounded-[9px] group-[&.active]/dropdown:rounded-b-none transition-all duration-450">
                                <span class="text-[18px] leading-normal font-medium text-white transition-all duration-450 placeholder-text">General Features</span>
                                <i class="icon-angle-down text-[14px] text-white leading-none transition-all duration-450 group-[&.active]/dropdown:rotate-180"></i>
                            </div>
                            <div class="dropdown-list w-full bg-secondary-50 overflow-hidden rounded-[9px] group-[&.active]/dropdown:rounded-t-none absolute left-0 z-[20] transition-all duration-300 opacity-0 pointer-events-none group-[&.active]/dropdown:opacity-100 group-[&.active]/dropdown:pointer-events-auto">
                                <ul class="flex flex-col gap-[10px] overflow-hidden">
                                    <?php foreach ($tabs as $key => $item): ?>
                                        <li class="tab cursor-pointer py-[10px] bg-transparent grid place-items-center transition-all duration-450 [&.active]:bg-primary-main group whitespace-nowrap rounded-[9px] group-[&.active]/dropdown:first:rounded-t-none <?= $key == 0 ? 'active' : '' ?>" data-tab-id="<?= $key ?>">
                                            <div class="py-[15px] px-[25px] 2xl:px-[15px] 2xl:py-[10px] xl:px-[5px] lg:px-[15px] group-[&.active]:border-transparent text-[17px] xl:text-[15px] leading-none tracking-[0.17px] text-paragraph transition-all duration-450 group-[&.active]:text-white group-[&.active]:font-bold"><?= $item ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-contents w-full relative transition-all duration-450 delay-500">
                        <div class="content general-features pointer-events-none absolute left-0 top-0 md:px-[30px] w-full h-auto transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto active" data-content-id="0">
                            <div class="about-us-tabs flex flex-col gap-[60px] sm:gap-[20px] w-full">
                                <div class="text-editor w-full max-w-full reveal sm:mb-[10px]">
                                    <p><?= $product->features_description ?></p>
                                </div>
                                <div class="w-full min-md:hidden">
                                    <div class="tabs">
                                        <div class="custom-dropdown w-full">
                                            <div class="dropdown relative group/dropdown">
                                                <div class="placeholder flex items-center justify-between px-[25px] py-[15px] bg-primary-main cursor-pointer rounded-[9px] group-[&.active]/dropdown:rounded-b-none transition-all duration-450">
                                                    <span class="text-[18px] leading-normal font-medium text-white transition-all duration-450 placeholder-text">Fence Systems</span>
                                                    <i class="icon-angle-down text-[14px] text-white leading-none transition-all duration-450 group-[&.active]/dropdown:rotate-180"></i>
                                                </div>
                                                <div class="dropdown-list w-full bg-secondary-50 overflow-hidden rounded-[9px] group-[&.active]/dropdown:rounded-t-none absolute left-0 z-[20] transition-all duration-300 opacity-0 pointer-events-none group-[&.active]/dropdown:opacity-100 group-[&.active]/dropdown:pointer-events-auto">
                                                    <ul class="flex flex-col gap-[10px] overflow-hidden">
                                                        <?php foreach ($product->features as $key => $item): ?>
                                                            <li class="tab cursor-pointer py-[10px] bg-transparent grid place-items-center transition-all duration-450 [&.active]:bg-primary-main group whitespace-nowrap rounded-[9px] group-[&.active]/dropdown:first:rounded-t-none <?= $key == 0 ? 'active' : '' ?>" data-feature-id="<?= $key ?>">
                                                                <div class="py-[15px] px-[25px] 2xl:px-[15px] 2xl:py-[10px] xl:px-[5px] lg:px-[15px] group-[&.active]:border-transparent text-[17px] xl:text-[15px] leading-none tracking-[0.17px] text-paragraph transition-all duration-450 group-[&.active]:text-white group-[&.active]:font-bold"><?= $item['title'] ?></div>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-area">
                                    <div class="image-area w-full h-[690px] sm:h-[400px] relative isolate reveal-big-content">
                                        <img src="<?=asset( getFolder(['uploads_folder', 'product_images_folder'], $product->lang) . "/" . $product->features_image)?>" alt="<?= $product->alt ?>" width="1440" height="690" class="w-full h-full object-cover rounded-[20px]">
                                        <?php foreach ($product->features as $key => $item): ?>
                                            <div class="dot-content min-md:h-[76px] absolute z-10 flex flex-col items-center gap-[20px] md:gap-[10px] cursor-pointer group hover:min-md:z-[11] [&.active]:z-[11] md:!top-[unset] md:bottom-[10px] md:translate-y-0 md:!left-1/2 md:-translate-x-1/2 <?= $key == 0 ? 'active' : '' ?>" style="left: <?= $item['left'] ?>%; top: <?= $item['top'] ?>%;" data-dot-id="<?= $key ?>">
                                                <div class="dot w-[56px] md:w-[40px] aspect-square bg-primary-main rounded-full grid place-items-center peer">
                                                    <i class="icon-plus text-[20px] md:text-[16px] leading-none h-[20px] md:h-[16px] text-white"></i>
                                                </div>
                                                <div class="dot-description flex flex-col items-center text-center gap-[15px] bg-secondary-main/10 backdrop-blur-[15px] border border-solid border-primary-main rounded-[20px] p-[30px] sm:p-[20px] w-[380px] xs:w-[360px] pointer-events-none min-md:absolute top-0 translate-y-[80px] md:translate-y-[60px] z-10 opacity-0 transition-all duration-450 group-[&.active]:md:opacity-100 group-hover:min-md:opacity-100 group-[&.active]:md:pointer-events-auto group-hover:min-md:pointer-events-auto md:group-[&.active]:translate-y-0 group-hover:min-md:translate-y-[60px]">
                                                    <p class="text-[24px] lg:text-[20px] leading-[36px] text-white font-bold"><?= $item['title'] ?></p>
                                                    <p class="text-[16px] leading-[19px] text-white/65"><?= $item['description'] ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content technical-information pointer-events-none absolute left-0 top-0 md:px-[30px] w-full h-auto transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto" data-content-id="1">
                            <img src="../assets/image/static/hand.png" alt="" width="37" height="38" class="animate-hand absolute right-5 -top-5 z-2 width-[30px] invert">
                            <div class="text-editor w-full max-w-full overflow-x-auto scrollbar scrollbar-w-[3px] scrollbar-track-rounded-[3px] scrollbar-thumb-rounded-[3px] scrollbar-thumb-primary-500 scrollbar-track-primary-500/10">
                                <?=$product->technical_info?>
                            </div>
                        </div>

                        <div class="content gallery pointer-events-none absolute left-0 top-0 md:px-[30px] w-full h-auto transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto" data-content-id="2">
                            <div class="relative px-[120px] md:px-[60px] sm:px-0">
                                <div class="prev absolute top-1/2 -translate-y-1/2 left-0 sm:left-[10px] z-2">
                                    <div class="gallery-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-[#2E485C]/5 backdrop-blur-[5px] border-[3px] border-solid border-white/25 relative z-10 transition-all duration-450  [&.gallery-disabled]:pointer-events-none">
                                        <i class="icon-arrow-left text-[20px] leading-none h-[20px] text-white transition-all duration-450 group-[&.gallery-disabled]/nav:text-white/60"></i>
                                        <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                            <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="next absolute top-1/2 -translate-y-1/2 right-0 sm:right-[10px] z-2">
                                    <div class="gallery-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-[#2E485C]/5 backdrop-blur-[5px] border-[3px] border-solid border-white/25 relative z-10 transition-all duration-450  [&.gallery-disabled]:pointer-events-none">
                                        <i class="icon-arrow-right text-[20px] leading-none h-[20px] text-white transition-all duration-450 group-[&.gallery-disabled]/nav:text-white/60"></i>
                                        <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                            <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="gallery-slider overflow-hidden">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($product->gallery as $item): ?>
                                            <div class="swiper-slide">
                                                <div class="item w-full flex flex-col items-center gap-[34px] group">
                                                    <a href="<?= isset($item['video']) ? $item['video'] : asset( getFolder(['uploads_folder', 'product_images_folder'], $item->lang) . "/" . $item->image) ?>" class="image-wrapper rounded-[20px] overflow-hidden h-[420px] relative md:h-[370px] sm:h-[320px]" data-fancybox="gallery">
                                                        <img src="<?=asset( getFolder(['uploads_folder', 'product_images_folder'], $item->lang) . "/" . $item->image)?>" alt="<?= $item['alt'] ?>" width="580" height="420" class="w-full h-full object-cover">
                                                        <?php if (isset($item['video'])): ?>
                                                            <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 w-[96px] aspect-square rounded-full bg-secondary-main/20 backdrop-blur-[20px] grid place-items-center transition-transform duration-300 delay-100 group-hover:min-md:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="25" viewBox="0 0 21 25" fill="none">
                                                                    <path d="M21 12.4999L0.75 24.1913L0.750001 0.808594L21 12.4999Z" fill="white"/>
                                                                </svg>
                                                            </div>
                                                        <?php endif; ?>
                                                    </a>
                                                    <p class="text-[24px] md:text-[20px] leading-[36px] text-white text-center"><?= $item['title'] ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content faq pointer-events-none absolute left-0 top-0 md:px-[30px] w-full h-auto transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto" data-content-id="3">
                            <div class="faq w-full">
                                <div class="faq-area flex flex-col w-full">
                                    <?php foreach ($product->faqs as $key => $item): ?>
                                        <div class="item cursor-pointer overflow-hidden group/faq flex flex-col py-[45px] px-[90px] xl:px-[65px] lg:px-[45px] md:p-[30px] transition-all duration-450 rounded-[10px] [&.active]:bg-[#3C5469] [&.active]:py-[60px] [&.active]:md:p-[30px] [&.active]:md:pb-[50px] relative after:w-full after:absolute after:bottom-0 after:left-o after:h-[1px] after:bg-black/8 last:after:hidden [&.active]:after:bg-transparent">
                                            <div class="flex items-center justify-between sm:gap-[20px]">
                                                <p class="text-[24px] md:text-[20px] xs:text-[18px] xs:leading-tight leading-normal text-white transition-all duration-450 group-[&.active]/faq:font-bold"><span class="mr-[5px]"><?= $key + 1 ?>.</span><?= $item['title'] ?></p>
                                                <div class="dropdown-icon min-w-[44px] aspect-square flex gap-[6px] items-center justify-center bg-[#3C5469] rounded-[5px] group-[&.active]/faq:bg-primary-main transition-all duration-450 relative before:transition-all before:duration-450 before:w-[1px] before:h-[10px] before:-rotate-45 before:bg-white after:w-[1px] after:h-[10px] after:rotate-45 after:bg-white after:transition-all after:duration-450 group-[&.active]/faq:before:rotate-45 group-[&.active]/faq:after:-rotate-45"></div>
                                            </div>
                                            <p class="text-[19px] lg:text-[17px] md:text-[16px] leading-[30px] text-white font-light tracking-[-0.19px] transition-all duration-450 opacity-0 translate-y-[10px] faq-description group-[&.active]/faq:opacity-100 group-[&.active]/faq:translate-y-0 group-[&.active]/faq:mt-[20px] "><?= $item['description'] ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="content get-offer pointer-events-none absolute left-0 top-0 md:px-[30px] w-full h-auto transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto" data-content-id="4">
                            <div class="flex flex-wrap items-center">
                                <div class="gallery-area w-1/2 pr-[45px] xl:pr-[30px] md:pr-0 md:w-full md:order-2 md:!hidden">
                                    <div class="flex flex-col w-full items-center gap-[37px] lg:gap-[25px]">
                                        <div class="contact-gallery-slider overflow-hidden w-full">
                                            <div class="swiper-wrapper">
                                                <?php for ($s = 0; $s <= 3; $s++): ?>
                                                    <div class="swiper-slide">
                                                        <div class="item w-full h-[550px] xl:h-[450px] lg:h-[400px] sm:h-[320px] rounded-[20px] overflow-hidden isolate">
                                                            <img src="../assets/image/general/contact.jpg" alt="Offer" width="740" height="550" class="w-full h-full object-cover">
                                                        </div>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <div class="contact-gallery-slider-pagination flex items-center justify-center gap-[7px] [&_.swiper-pagination-bullet]:w-[11px] [&_.swiper-pagination-bullet]:h-[12px] [&_.swiper-pagination-bullet]:-skew-x-12 [&_.swiper-pagination-bullet]:bg-white/16 [&_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-primary-main [&_.swiper-pagination-bullet]:rounded-[2px] [&_.swiper-pagination-bullet]:!m-0 [&_.swiper-pagination-bullet]:!opacity-100 [&_.swiper-pagination-bullet]:transition-all [&_.swiper-pagination-bullet]:duration-300"></div>
                                    </div>

                                </div>
                                <div class="form w-1/2 pl-[45px] xl:pl-[30px] md:pl-0 md:mb-[30px] md:w-full md:order-1">
                                    <form action="#" method="post" id="career-form" enctype="multipart/form-data">
                                        <div class="grid grid-cols-2 gap-y-[15px] gap-x-[30px] sm:gap-y-[30px] xs:gap-y-[12px]">
                                            <div class="form-group sm:col-span-2">
                                                <div class="w-full relative flex flex-col group/item">
                                                    <input type="text" name="name" id="name" required minlength="2" class="order-2 w-full border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[20px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                                    <label for="name" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Name</label>
                                                    <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                                </div>
                                            </div>

                                            <div class="form-group  sm:col-span-2">
                                                <div class="w-full relative flex flex-col group/item">
                                                    <input type="text" name="surname" id="surname" required minlength="2" class="order-2 w-full border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[20px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                                    <label for="surname" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Surname</label>
                                                    <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                                </div>
                                            </div>

                                            <div class="form-group  sm:col-span-2">
                                                <div class="w-full relative flex flex-col group/item">
                                                    <input type="email" name="email" id="email" required minlength="5" class="order-2 w-full border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[19px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                                    <label for="email" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">E-Mail</label>
                                                    <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                                </div>
                                            </div>

                                            <div class="form-group sm:col-span-2">
                                                <div class="w-full relative flex flex-col group/item">
                                                    <input type="text" name="phone" id="phone" required minlength="5" class="order-2 w-full border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[20px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                                    <label for="phone" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Phone</label>
                                                    <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                                </div>
                                            </div>

                                            <div class="form-group  col-span-2">
                                                <div class="w-full relative flex flex-col group/item">
                                                    <textarea name="message" id="message" required minlength="5" class="order-2 w-full resize-none border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[20px] text-primary-main pb-[71px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main"></textarea>
                                                    <label for="message" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Message</label>
                                                    <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                                </div>
                                            </div>

                                            <div class="form-el group/form relative flex items-center gap-[20px] md:col-span-2 xs:py-[12px] mt-[50px] xl:mt-[25px] ml-[15px]"> <!-- error için bu div'e class="error" eklenecek -->
                                                <input type="checkbox" id="app-form-checkbox" class="peer cursor-pointer absolute left-0 top-0 w-full h-full opacity-0 z-10">
                                                <div class="box relative shrink-0 w-[21px] rounded-[3px] aspect-square duration-300 before:absolute before:duration-450 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:scale-0 before:rounded-[2px] before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-white border border-solid border-white/25 peer-hover:bg-primary-400/10 peer-hover:border-primary-400/50 peer-checked:!border-white group-[&.error]/form:border-red-500"></div>
                                                <label for="app-form-checkbox" class=" leading-normal duration-300 text-[15px] text-white font-light tracking-[-0.15px]">
                                                    I have read and accept the <a href="#popup-gdpr" class="inline-block relative z-20 text-white font-bold duration-300 decoration decoration-white underline" data-fancybox="">Clarification Text.</a>
                                                </label>
                                            </div>

                                            <div class="form-group flex justify-end md:col-span-2 md:justify-start mt-[50px] xl:mt-[25px] md:my-0 mr-[51px] xl:mr-0">
                                                <button type="submit" class="main-button group/button inline-flex items-center sm:justify-between gap-[32px] lg:gap-[24px] xs:gap-[20px] w-fit sm:w-full max-h-[60px] py-[6px] pl-[50px] lg:pl-[25px] xs:pl-[15px] pr-[11px] relative transition-all duration-450 before:absolute before:-skew-x-12 before:rounded-[6px] before:z-3 before:right-0 before:top-0 before:w-0 before:h-full before:bg-primary-main before:transition-all before:duration-450 hover:before:min-md:w-full hover:before:min-md:right-auto hover:before:min-md:left-0">
                                                    <div class="absolute w-full h-full left-0 top-0 -skew-x-12 rounded-[6px] z-2 bg-white/10 backdrop-blur-[15px]"></div>
                                                    <span class="text-[18px] md:text-[16px] leading-[24px] relative z-5 transition-all duration-450 whitespace-nowrap group-hover/button:min-md:text-white text-white">Send</span>
                                                    <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center relative z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] ---- after:absolute after:right-0 after:top-0 after:w-0 after:h-full after:bg-secondary-main after:transition-all after:duration-450 group-hover/button:after:delay-200 after:-skew-x-12 after:rounded-[6px] group-hover/button:after:min-md:w-full group-hover/button:after:min-md:right-auto group-hover/button:after:min-md:left-0">
                                                        <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="other-products mb-[140px] 2xl:mb-[110px] xl:mb-[70px] lg:mb-[40px] relative">
            <div class="circle w-[1000px] h-[528px] absolute top-[-90px] left-[-240px] rounded-b-full opacity-10 bg-[radial-gradient(50%_100%_at_50%_0%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] pointer-events-none -rotate-90"></div>
            <div class="content relative z-4">
                <div class="container max-w-[1640px]">
                    <div class="flex flex-col gap-[70px] xl:gap-[30px] lg:gap-[20px]">
                        <div class="flex min-md:items-center justify-between gap-[20px] sm:flex-col">
                            <div class="text-editor reveal">
                                <h3>Other <span>Products</span></h3>
                            </div>
                            <div class="flex min-xs:items-center min-xsm:justify-end xs:flex-col-reverse gap-[120px] 2xl:gap-[90px] xl:gap-[60px] lg:gap-[40px] xs:gap-[20px]">
                                <div class="nav-buttons flex items-center min-xs:justify-end gap-[20px] md:gap-[15px] reveal-button-left">
                                    <div class="other-products-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-[#2E485C]/15 relative z-10 transition-all duration-450  [&.other-products-disabled]:pointer-events-none">
                                        <i class="icon-arrow-left text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.other-products-disabled]/nav:text-secondary-main/60 group-[&.other-products-disabled]/nav:md:text-secondary-main/60"></i>
                                        <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                            <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                        </svg>
                                    </div>

                                    <div class="other-products-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-[#2E485C]/15 relative z-10 transition-all duration-450  [&.other-products-disabled]:pointer-events-none">
                                        <i class="icon-arrow-right text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.other-products-disabled]/nav:text-secondary-main/60 group-[&.other-products-disabled]/nav:md:text-secondary-main/60"></i>
                                        <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                            <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="reveal-button-right">
                                    <?php
                                        $link = "products.php";
                                        $title = "All Products";
                                        $background = "bg-secondary-50 backdrop-blur-[15px]";
                                        $backgroundHover = "before:bg-primary-main";
                                        $textColor = "text-secondary-main";
                                        $textColorHover = "group-hover/button:min-md:text-white";
                                        
                                    ?>
                                    <a href="<?= $link ?>" class="main-button group/button inline-flex items-center sm:justify-between gap-[32px] lg:gap-[24px] xs:gap-[20px] w-fit sm:w-full max-h-[60px] py-[6px] pl-[50px] lg:pl-[25px] xs:pl-[15px] pr-[11px] relative transition-all duration-450 before:absolute before:-skew-x-12 before:rounded-[6px] before:z-3 before:right-0 before:top-0 before:w-0 before:h-full <?= $backgroundHover ?> before:transition-all before:duration-450 hover:before:min-md:w-full hover:before:min-md:right-auto hover:before:min-md:left-0">
                                        <div class="absolute w-full h-full left-0 top-0 -skew-x-12 rounded-[6px] z-2 <?= $background ?>"></div>
                                        <span class="text-[18px] md:text-[16px] leading-[24px] relative z-5 transition-all duration-450 whitespace-nowrap <?= $textColorHover ?>  <?= $textColor ?>"><?= $title ?></span>
                                        <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center relative z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] ---- after:absolute after:right-0 after:top-0 after:w-0 after:h-full after:bg-secondary-main after:transition-all after:duration-450 group-hover/button:after:delay-200 after:-skew-x-12 after:rounded-[6px] group-hover/button:after:min-md:w-full group-hover/button:after:min-md:right-auto group-hover/button:after:min-md:left-0">
                                            <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="slide-area w-full">
                            <div class="other-product-slider min-xs:p-[30px] min-xs:mx-[-30px] overflow-hidden reveal-big-content">
                                <div class="swiper-wrapper">
                                    <?php for ($i = 0; $i < 10; $i++): ?>
                                        <div class="swiper-slide">
                                            <div class="item group/item bg-white relative w-full overflow-hidden rounded-[20px] border border-solid border-transparent md:border-primary-main/10 transition-all duration-450 hover:min-md:border-primary-main hover:min-md:shadow-[0px_4px_30px_0px_rgba(0,0,0,0.10)] px-[60px] 2xl:px-[45px] lg:px-[30px] py-[50px] xl:py-[35px] flex min-md:items-center md:flex-col gap-[68px] 2xl:gap-[45px] lg:gap-[30px]">
                                                <div class="min-w-[200px] max-w-[200px] lg:max-w-[160px] lg:min-w-[160px] md:max-w-full md:w-full flex flex-col gap-[21px]">
                                                    <div class="product-card-slider overflow-hidden">
                                                        <div class="swiper-wrapper">
                                                            <?php for ($x = 0; $x < 4; $x++): ?>
                                                                <div class="swiper-slide">
                                                                    <div class="item w-full h-[270px]">
                                                                        <img src="../assets/image/general/product.png" alt="Product" width="376" height="518" class="w-full h-full object-contain">
                                                                    </div>
                                                                </div>
                                                            <?php endfor; ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-card-slider-pagination flex items-center justify-center gap-[7px] [&_.swiper-pagination-bullet]:w-[11px] [&_.swiper-pagination-bullet]:h-[12px] [&_.swiper-pagination-bullet]:-skew-x-12 [&_.swiper-pagination-bullet]:bg-secondary-main/16 [&_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-primary-main [&_.swiper-pagination-bullet]:rounded-[2px] [&_.swiper-pagination-bullet]:!m-0 [&_.swiper-pagination-bullet]:!opacity-100 [&_.swiper-pagination-bullet]:transition-all [&_.swiper-pagination-bullet]:duration-300"></div>
                                                </div>
                                                <div class="flex flex-col gap-[20px] xs:gap-[10px] w-full">
                                                    <span class="text-[24px] lg:text-[20px] xs:text-[18px] leading-[36px] text-primary-main">Category Name</span>
                                                    <div class="title">
                                                        <a href="product-detail.php" class="flex items-center gap-[20px] transition-all duration-450 hover:min-md:translate-x-[20px]">
                                                            <h3 class="text-[32px] xl:text-[28px] md:text-[22px] leading-[48px] xl:leading-[40px] md:leading-[30px] font-bold text-secondary-main line-clamp-2">Razor Single Panel Fence</h3>
                                                        </a>
                                                    </div>
                                                    <p class="text-[20px] lg:text-[18px] xs:text-[17px] leading-[30px] text-secondary-main opacity-85 line-clamp-3 lg:line-clamp-2">Our Wemobile brand generally produces and assembles fence systems, door systems and wrought iron systems.</p>
                                                </div>
                                                <a href="product-detail.php" class="block min-md:absolute right-[40px] bottom-[40px] min-md:opacity-0 min-md:translate-x-[60px] transition-all duration-450 group-hover/item:min-md:translate-x-0 group-hover/item:min-md:opacity-100">
                                                    <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center transition-all duration-300 z-5 relative before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] --- after:sm:hidden after:-skew-x-12 after:rounded-[6px] after:absolute after:right-0 after:top-0 after:bg-secondary-main after:w-0 after:h-full after:transition-all after:duration-300 after:z-2 hover:after:w-full hover:after:right-auto hover:after:left-0">
                                                        <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>

@endsection