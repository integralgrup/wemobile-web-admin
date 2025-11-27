@extends('layouts.main')

@section('content')
<main class="main-field header-space sub-page">
    <!-- BREADCRUMB -->

    <section class="main-area w-full overflow-hidden">
        <div class="hero project-detail-hero w-full bg-secondary-main py-[80px] xl:py-[50px] relative mb-[120px] 2xl:mb-[90px] xl:mb-[70px] lg:mb-[40px]">
            <div class="circle w-[861px] h-[455px] absolute z-3 bottom-0 left-[140px] rounded-t-full opacity-50 bg-[radial-gradient(50%_100%_at_50%_140%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] pointer-events-none"></div>
            <div class="circle w-[861px] h-[455px] absolute z-3 top-0 right-[-180px] rounded-b-full opacity-50 bg-[radial-gradient(50%_100%_at_50%_-30%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] pointer-events-none"></div>
            <div class="absolute right-0 top-0 z-2 w-full h-full flex justify-end mix-blend-color-burn opacity-35">
                <div class="w-[86px] h-full bg-[linear-gradient(270deg,_rgba(46,71,92,0.1)_0%,_rgba(46,71,92,0.00)_100%)]"></div>
                <img src="../assets/image/static/project-detail-bg.png" alt="" class="w-auto h-full">
            </div>
            <div class="content relative z-4 md:mb-[50px]">
                <div class="container max-w-[1640px]">
                    <div class="flex flex-wrap">
                        <div class="w-3/5 md:w-full pr-[75px] xl:pr-[50px] lg:pr-[25px] md:pr-0 md:mb-[30px]">
                            <div class="slide-area w-full">
                                <div class="project-detail-slider rounded-[20px] group/slider reveal-big-content overflow-hidden">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($project->gallery as $image): ?>
                                            <div class="swiper-slide w-full rounded-[20px] transition-all group ">
                                                <div class="item w-full h-[530px] xl:h-[450px] md:h-[400px] sm:h-[320px] rounded-[20px] overflow-hidden transition-all duration-300">
                                                    <img src="{{asset( getFolder(['uploads_folder', 'project_images_folder'], $project->lang) . '/' . $image->image )}}" alt="Project Detail" width="820" height="530" class="w-full h-full object-cover rounded-[20px]">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-2/5 md:w-full pl-[75px] xl:pl-[50px] lg:pl-[25px] md:pl-0 ">
                            <div class="flex flex-col justify-center h-full gap-[60px] xl:gap-[40px] lg:gap-[30px]">
                                <div class="text-editor w-full max-w-full reveal">
                                    <h1><span>{{$project->title_1}}</span></h1>
                                    <p>{{$project->short_description}}</p>
                                </div>
                                <div class="nav-buttons flex items-center gap-[20px] md:ml-0 reveal-button-left">
                                    <div class="project-detail-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-[#2E485C]/5 backdrop-blur-[5px] border-[3px] border-solid border-white/25 relative z-10 transition-all duration-450  [&.project-detail-disabled]:pointer-events-none">
                                        <i class="icon-arrow-left text-[20px] leading-none h-[20px] text-white transition-all duration-450 group-[&.project-detail-disabled]/nav:text-white/60"></i>
                                        <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                            <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                        </svg>
                                    </div>

                                    <div class="project-detail-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-[#2E485C]/5 backdrop-blur-[5px] border-[3px] border-solid border-white/25 relative z-10 transition-all duration-450  [&.project-detail-disabled]:pointer-events-none">
                                        <i class="icon-arrow-right text-[20px] leading-none h-[20px] text-white transition-all duration-450 group-[&.project-detail-disabled]/nav:text-white/60"></i>
                                        <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                            <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-area flex min-md:justify-end md:w-full absolute bottom-[-50px] md:bottom-0 right-0 pr-[90px] 2xl:px-[30px]">
                <div class="breadcrumb md:w-full relative py-[40px] pl-[100px] 2xl:pl-[60px] md:px-0 md:py-[20px] reveal before:absolute before:left-0 before:md:-left-1/2 before:top-0 before:w-screen before:md:w-[calc(100vw+50%)] before:h-full before:bg-primary-main before:min-md:-skew-x-[30deg] before:rounded-[6px]">
                    <ul class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-white/60 flex items-center flex-wrap relative z-2">
                        <li class="inline-flex items-center">
                            <a href="index.php" class="block">
                                <i class="icon-home text-[18px] md:text-[15px] leading-none h-[18px]  text-white"></i>
                            </a>
                        </li>

                        <li class="inline-flex items-center">
                            <a href="projects.php" class="block">
                                <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">Projects</p>
                            </a>
                        </li>

                        <li class="inline-flex items-center">
                            <a href="project-detail.php" class="block">
                                <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">Project Detail</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="project-detail-description w-full mb-[120px] 2xl:mb-[90px] xl:mb-[70px] lg:mb-[40px]">
            <div class="container max-w-[1640px] reveal-product-box">
                <div class="flex items-center gap-[8px] mb-[20px]">
                    <i class="icon-location-pin text-[16px] leading-none h-[16px] text-primary-main"></i>
                    <p class="text-[20px] xl:text-[18px] leading-[30px] text-primary-main font-bold">{{$project->country->title}}</p>
                </div>
                <div class="text-editor w-full max-w-full">
                    <h2>{{$project->title_2}}</h2>
                    <p>{{$project->description}}</p>
                </div>
            </div>
        </div>

        <section class="other-products used-products mb-[120px] 2xl:mb-[90px] xl:mb-[70px] lg:mb-[40px] relative">
            <div class="circle w-[1000px] h-[528px] absolute top-[-90px] left-[-240px] rounded-b-full opacity-10 bg-[radial-gradient(50%_100%_at_50%_0%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] pointer-events-none -rotate-90"></div>
            <div class="content relative z-4">
                <div class="container max-w-[1640px]">
                    <div class="flex flex-col gap-[70px] xl:gap-[30px] lg:gap-[20px]">
                        <div class="flex min-md:items-center justify-between gap-[20px] sm:flex-col">
                            <div class="text-editor reveal">
                                <h3>Used <span>Products</span></h3>
                            </div>
                            <div class="flex min-xs:items-center min-sm:justify-end xs:flex-col-reverse gap-[120px] 2xl:gap-[90px] xl:gap-[60px] lg:gap-[40px] xs:gap-[20px]">
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
                                    <?php foreach ($products as $key => $item): ?>
                                        <div class="swiper-slide">
                                            <div class="item group/item bg-white relative w-full overflow-hidden rounded-[20px] border border-solid border-transparent md:border-primary-main/10 transition-all duration-450 hover:min-md:border-primary-main hover:min-md:shadow-[0px_4px_30px_0px_rgba(0,0,0,0.10)] px-[60px] 2xl:px-[45px] lg:px-[30px] py-[50px] xl:py-[35px] flex min-md:items-center md:flex-col gap-[68px] 2xl:gap-[45px] lg:gap-[30px]">
                                                <div class="min-w-[200px] max-w-[200px] lg:max-w-[160px] lg:min-w-[160px] md:max-w-full md:w-full flex flex-col gap-[21px]">
                                                    <div class="product-card-slider overflow-hidden">
                                                        <div class="swiper-wrapper">
                                                            <?php foreach ($item->gallery as $image): ?>
                                                                <div class="swiper-slide">
                                                                    <div class="item w-full h-[270px]">
                                                                        <img src="{{asset( getFolder(['uploads_folder', 'product_images_folder'], $image->lang) . '/' . $image->image )}}" alt="Product" width="376" height="518" class="w-full h-full object-contain">
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-card-slider-pagination flex items-center justify-center gap-[7px] [&_.swiper-pagination-bullet]:w-[11px] [&_.swiper-pagination-bullet]:h-[12px] [&_.swiper-pagination-bullet]:-skew-x-12 [&_.swiper-pagination-bullet]:bg-secondary-main/16 [&_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-primary-main [&_.swiper-pagination-bullet]:rounded-[2px] [&_.swiper-pagination-bullet]:!m-0 [&_.swiper-pagination-bullet]:!opacity-100 [&_.swiper-pagination-bullet]:transition-all [&_.swiper-pagination-bullet]:duration-300"></div>
                                                </div>
                                                <div class="flex flex-col gap-[20px] xs:gap-[10px] w-full">
                                                    <span class="text-[24px] lg:text-[20px] xs:text-[18px] leading-[36px] text-primary-main">{{$item->category->title}}</span>
                                                    <div class="title">
                                                        <a href="product-detail.php" class="flex items-center gap-[20px] transition-all duration-450 hover:min-md:translate-x-[20px]">
                                                            <h3 class="text-[32px] xl:text-[28px] md:text-[22px] leading-[48px] xl:leading-[40px] md:leading-[30px] font-bold text-secondary-main line-clamp-2">{{$item->title}}</h3>
                                                        </a>
                                                    </div>
                                                    <p class="text-[20px] lg:text-[18px] xs:text-[17px] leading-[30px] text-secondary-main opacity-85 line-clamp-3 lg:line-clamp-2">{!!mb_substr($item->description, 0, 200, 'utf-8') . '...' !!}</p>
                                                </div>
                                                <a href="product-detail.php" class="block min-md:absolute right-[40px] bottom-[40px] min-md:opacity-0 min-md:translate-x-[60px] transition-all duration-450 group-hover/item:min-md:translate-x-0 group-hover/item:min-md:opacity-100">
                                                    <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center transition-all duration-300 z-5 relative before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] --- after:sm:hidden after:-skew-x-12 after:rounded-[6px] after:absolute after:right-0 after:top-0 after:bg-secondary-main after:w-0 after:h-full after:transition-all after:duration-300 after:z-2 hover:after:w-full hover:after:right-auto hover:after:left-0">
                                                        <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-section relative mb-[150px] 2xl:mb-[110px] xl:mb-[70px] lg:mb-[40px]">
            <div class="container max-w-[1640px]">
                <div class="text-editor w-full max-w-full mb-[60px] lg:mb-[30px] text-center reveal">
                    <h4>Wemobile <span>Frequently Asked Questions</span></h4>
                </div>
                <div class="faq w-full px-[100px] 2xl:px-[70px] xl:px-[50px] lg:px-[20px] md:px-0">
                    <div class="faq-area flex flex-col w-full">
                        <?php $faqs = [
                            [
                                'title' => 'On which floors and in which weather conditions is the Decorative Grass Carpet suitable?',
                                'description' => 'It offers high quality medical imaging services with state-of-the-art devices and expert staff. The aim of the center is to obtain clear, sharp and high-resolution images so that patients can receive the most accurate diagnosis and treatment. Customer satisfaction has always been adopted as the primary goal and is tailored to the needs of patients.'
                            ],

                            [
                                'title' => 'Is there a guarantee of Decorative Grass Carpet?',
                                'description' => 'It offers high quality medical imaging services with state-of-the-art devices and expert staff. The aim of the center is to obtain clear, sharp and high-resolution images so that patients can receive the most accurate diagnosis and treatment. Customer satisfaction has always been adopted as the primary goal and is tailored to the needs of patients.'
                            ],

                            [
                                'title' => 'Are there color options for Decorative Grass Carpet?',
                                'description' => 'It offers high quality medical imaging services with state-of-the-art devices and expert staff. The aim of the center is to obtain clear, sharp and high-resolution images so that patients can receive the most accurate diagnosis and treatment. Customer satisfaction has always been adopted as the primary goal and is tailored to the needs of patients.'
                            ],

                            [
                                'title' => 'What are the storage conditions for Decorative Grass Carpet?',
                                'description' => 'It offers high quality medical imaging services with state-of-the-art devices and expert staff. The aim of the center is to obtain clear, sharp and high-resolution images so that patients can receive the most accurate diagnosis and treatment. Customer satisfaction has always been adopted as the primary goal and is tailored to the needs of patients.'
                            ],
                        ]; foreach ($faqs as $key => $item): ?>
                            <div class="reveal-product-box">
                                <div class="item cursor-pointer overflow-hidden group/faq flex flex-col py-[45px] px-[90px] xl:px-[65px] lg:px-[45px] md:p-[30px] transition-all duration-450 rounded-[10px] [&.active]:bg-[#3C5469] [&.active]:py-[60px] [&.active]:md:p-[30px] [&.active]:md:pb-[50px] relative after:w-full after:absolute after:bottom-0 after:left-o after:h-[1px] after:bg-black/8 last:after:hidden [&.active]:after:bg-transparent">
                                    <div class="flex items-center justify-between sm:gap-[20px]">
                                        <p class="text-[24px] md:text-[20px] xs:text-[18px] xs:leading-tight leading-normal text-secondary-main transition-all duration-450 group-[&.active]/faq:font-bold group-[&.active]/faq:text-white"><span class="mr-[5px]"><?= $key + 1 ?>.</span><?= $item['title'] ?></p>
                                        <div class="dropdown-icon min-w-[44px] aspect-square flex gap-[6px] items-center justify-center bg-[#3C5469] rounded-[5px] group-[&.active]/faq:bg-primary-main transition-all duration-450 relative before:transition-all before:duration-450 before:w-[1px] before:h-[10px] before:-rotate-45 before:bg-white after:w-[1px] after:h-[10px] after:rotate-45 after:bg-white after:transition-all after:duration-450 group-[&.active]/faq:before:rotate-45 group-[&.active]/faq:after:-rotate-45"></div>
                                    </div>
                                    <p class="text-[19px] lg:text-[17px] md:text-[16px] leading-[30px] text-white font-light tracking-[-0.19px] transition-all duration-450 opacity-0 translate-y-[10px] faq-description group-[&.active]/faq:opacity-100 group-[&.active]/faq:translate-y-0 group-[&.active]/faq:mt-[20px] "><?= $item['description'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="other-products used-projects mb-[120px] 2xl:mb-[90px] xl:mb-[70px] lg:mb-[40px] relative">
            <div class="circle w-[1000px] h-[528px] absolute top-[-90px] left-[-240px] rounded-b-full opacity-10 bg-[radial-gradient(50%_100%_at_50%_0%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] pointer-events-none -rotate-90"></div>
            <div class="content relative z-4">
                <div class="container max-w-[1640px]">
                    <div class="flex flex-col gap-[50px] xl:gap-[30px] lg:gap-[20px]">
                        <div class="flex min-md:items-center justify-between gap-[20px] sm:flex-col">
                            <div class="text-editor reveal">
                                <h3>Other <span>Projects</span></h3>
                            </div>
                            <div class="flex min-xs:items-center min-sm:justify-end xs:flex-col-reverse gap-[120px] 2xl:gap-[90px] xl:gap-[60px] lg:gap-[40px] xs:gap-[20px]">
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
                                    $link = "projects.php";
                                    $title = "All Projects";
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
                            <div class="other-product-slider p-[30px] pb-[60px] mx-[-30px] overflow-hidden reveal-big-content">
                                <div class="swiper-wrapper">
                                    <?php for ($i = 0; $i < 10; $i++): ?>
                                        <div class="swiper-slide">
                                            <div class="item relative group/item h-[600px] sm:h-[460px]">
                                                <div class="image-wrapper w-full h-[500px] sm:h-[320px] relative">
                                                    <a href="project-detail.php" class="block w-full h-full">
                                                        <img src="../assets/image/general/project-image.jpg" alt="Project" width="800" height="500" class="w-full h-full object-cover  rounded-[20px]">
                                                    </a>
                                                </div>
                                                <div class="content px-[40px] xsm:px-[10px] translate-y-[-100px]">
                                                    <div class="bg-white overflow-hidden rounded-[20px] px-[50px] xl:px-[30px] py-[30px] xl:py-[24px] shadow-[0px_4px_30px_0px_rgba(0,0,0,0.10)] border border-solid border-transparent transition-all duration-450 group-hover/item:border-primary-main">
                                                        <div class="flex flex-col gap-[12px] ">
                                                            <div class="flex min-sm:items-center sm:flex-col gap-[30px] sm:gap-[10px]">
                                                                <div class="location h-full relative py-[4px] pr-[30px] border-0 min-sm:!border-r min-sm:border-solid border-r-secondary-main/16">
                                                                    <div class="flex items-center gap-[8px] transition-all ease-[cubic-bezier(.45,.05,.55,.95)] duration-300 group-hover/item:min-sm:translate-x-[-100px] group-hover/item:min-sm:opacity-0 delay-500 group-hover/item:min-sm:delay-0">
                                                                        <i class="icon-location-pin text-[16px] leading-none h-[16px] text-primary-main"></i>
                                                                        <p class="text-[20px] xl:text-[18px] leading-[30px] text-primary-main font-bold">Russia</p>
                                                                    </div>
                                                                    <a href="project-detail.php" class="block absolute opacity-0 z-3 left-0 top-0 md:hidden min-md:-translate-x-[150px] transition-all ease-manidar duration-500 delay-300 group-hover/item:min-md:translate-x-0 group-hover/item:min-md:opacity-100">
                                                                        <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center transition-all duration-300 z-5 relative before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] --- after:-skew-x-12 after:rounded-[6px] after:absolute after:right-0 after:top-0 after:bg-secondary-main after:w-0 after:h-full after:transition-all after:duration-300 after:z-2 hover:after:w-full hover:after:right-auto hover:after:left-0">
                                                                            <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <h3 class="text-[32px] xl:text-[28px] md:text-[20px] leading-[48px] xl:leading-[40px] md:leading-[30px] font-bold text-secondary-main line-clamp-2">
                                                                    <a href="project-detail.php">The standard Lorem Ipsum passage, used since the 1500s</a>
                                                                </h3>
                                                            </div>
                                                            <p class="text-[20px] lg:text-[18px] leading-[30px] text-secondary-main opacity-85 line-clamp-2">Our Wemobile brand generally produces and assembles fence systems, door systems and wrought iron systems.</p>
                                                        </div>
                                                    </div>
                                                </div>
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

<!-- script --> 
@section('script') 

@endsection