<?php 
$pageTitle = 'Products';
$breadcrumbTitle = 'Products';
$mc = 'bg-white'; 
//$breadcrumbImage = $menu->image;
?> 
@extends('layouts.main')

@section('content')


<main class="main-field">
    <!-- BREADCRUMB -->
    <section class="breadcrumb-field relative hs-padding">
        <div class="background [background:_linear-gradient(91deg,_#AB3433_-0.67%,_#8F2C2B_99.94%)] shadow-[0px_50px_250px_0px_rgba(0,_0,_0,_0.05)] absolute top-0 left-0 w-full h-full z-2 translate-z-0"></div>
        <div class="content-field relative">
            <div class="background-svg absolute left-0 top-0 z-20 h-full group/bg-svg 2xl:hidden">
                <svg class="h-full w-full duration-350 scale-x-0 group-[&.is-active]/bg-svg:scale-x-100 origin-left" viewBox="0 0 164 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.15" clip-path="url(#clip0_5240_3753)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.994 -12.7964V156.676L0 152.798V-8.89439L5.80505 -10.4118L14.994 -12.7964ZM163.475 -51.3105L164 195.31L129.695 186.422V-42.5431L163.475 -51.3105ZM113.534 -38.3521V182.231L94.3394 177.245V-33.3662L113.534 -38.3521ZM79.7247 -29.5846V173.44L60.5301 168.454V-24.5987L79.7247 -29.5846ZM45.9445 -20.8172V164.696L28.7919 160.24V-16.3612L45.9445 -20.8172Z" fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_5240_3753">
                            <rect class="h-full w-full" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

            </div>
            <div class="container max-w-[1500px] relative z-20">
                <div class="wrapper">
                    <div class="content py-[40px] xl:py-[40px] lg:py-[30px] flex items-center gap-[60px] 2xl:gap-[50px] xl:gap-[40px] lg:gap-[30px]">
                        <div class="title-field">
                            <h1 class="title text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-white font-semibold">Products</h1>
                        </div>
                        <div class="navigation-field sm:hidden">
                            <ul class="flex gap-[5px] [&_li:last-child_.seperator]:hidden">
                                <?php $list = [
                                    ["title" => "Home", "link" => "index.php",],
                                    ["title" => "Products", "link" => "javascript:;",],
                                ]; ?>

                                <?php foreach ($list as $key => $item) : ?>
                                    <li>
                                        <a href="<?= $item['link'] ?>" class="flex gap-[5px] group/link">
                                            <span class="text text-[18px] md:text-[16px] leading-tight text-white/50 group-hover/link:text-white duration-350"><?= $item['title'] ?></span>
                                            <span class="seperator text-[18px] md:text-[16px] leading-tight text-white/50">/</span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT LIST SECTOPN -->
    <section class="product-list-section py-[80px] 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px]">
        <div class="container max-w-[1500px]">
            <div class="wrapper grid grid-cols-[minmax(0,4.3fr)_minmax(0,9.3fr)] gap-[70px] 2xl:gap-[60px] xl:gap-[50px] lg:gap-[40px] md:gap-[30px] md:grid-cols-1">
                <!-- SIDEBAR | FILTER -->
                <div class="sidebar-field">
                    <div class="dynamic-sticky">
                        <div class="sidebar-content">
                            <div class="mobile-view hidden md:block">
                                <a href="javascript:;" class="flex show-filter-list items-center justify-center h-[65px] md:h-[50px] bg-main-500 duration-350 hover:bg-main-600">
                                    <span class="text text-[20px] md:text-[18px] text-white text-center" data-show-text="Show Filters" data-hide-text="Hide Filters">Show Filters</span>
                                </a>
                            </div>
                            <div class="web-view md:hidden md:mt-[20px] [&.is-active]:block">
                                <?php foreach ($categories as $key => $item) : ?>
                                    <div class="widget widget-item relative group/widget">
                                        <div class="content">
                                            <div class="title-field widget-title-field bg-[#5E5E5B] py-[27.5px] px-[30px] md:p-[20px] flex items-center justify-between gap-[15px] cursor-pointer duration-350">
                                                <p class="text text-[20px] md:text-[18px] leading-tight text-white"><?= $item['title'] ?></p>
                                                <i class="icon icon-chevron-bottom-3 text-[12px] h-[12px] text-white block leading-none duration-350 group-[&.is-active]/widget:rotate-180"></i>
                                            </div>
                                            <div class="content-field bg-white px-[30px] py-[35px] xl:p-[30px] md:p-[20px] hidden group-[&.is-active]/widget:block">
                                                <ul class="flex flex-col gap-[30px] lg:gap-[20px] md:gap-[15px]">
                                                    <?php foreach ($item->children as $keyer => $widgetItem) : ?>
                                                        <li>
                                                            <a href="javascript:;" class="flex justify-between gap-[15px] group/link <?php if ($key == 0 && $keyer == 0) : ?>is-active<?php endif; ?>">
                                                                <div class="text-field flex items-center">
                                                                    <div class="split w-0 h-[3px] duration-350 group-hover/link:w-[23px] group-[&.is-active]/link:w-[23px] bg-main-500 sm:hidden"></div>
                                                                    <span class="text text-[16px] md:text-[14px] leading-tight group-hover/link:[-webkit-text-stroke:0.5px_var(--main-500)] group-hover/link:pl-[15px] group-hover/link:text-main-500 [-webkit-text-stroke:0.5px_transparent] group-[&.is-active]/link:[-webkit-text-stroke:0.5px_var(--main-500)] group-[&.is-active]/link:pl-[15px] group-[&.is-active]/link:text-main-500 duration-350 sm:!pl-0 sm:!translate-x-0"><?= $widgetItem['title'] ?></span>
                                                                </div>
                                                                <span class="count text-[16px] font-medium text-black/30 group-hover/link:text-main-500 group-[&.is-active]/link:text-main-500 duration-350">(<?= $widgetItem->products->count() ?>)</span>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="split w-full h-[1px] bg-white/10 absolute left-0 bottom-0"></div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="button-field mt-[20px]">
                                    <a href="javascript:;" class="flex show-all-filter items-center justify-center h-[65px] md:h-[50px] bg-main-500 duration-350 hover:bg-main-600" data-show-text="Show All" data-hide-text="Hide All">
                                        <span class="text text-[20px] md:text-[18px] text-white text-center">Show All</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT LIST -->
                <div class="product-list-field">
                    <div class="product-wrapper grid grid-cols-2 gap-[17px] sm:grid-cols-1">
                        <?php foreach ($products as $key => $item) : ?>
                            <div class="item product-item group/item">
                                <div class="content bg-white shadow-[0px_2.15px_10.76px_0px_rgba(0,0,0,0.10)] duration-350 group-hover/item:bg-main-500">
                                    <div class="image-field aspect-[460/275]">
                                        <a href="<?= $item['title-link'] ?>" class="flex w-full h-full image overflow-hidden translate-z-0 group/image">
                                            <img src="<?= env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'product_images_folder'], $item['lang']) . '/' . $item['image'] ?>" class="full-cover group-hover/image:scale-105 duration-350" alt="">
                                        </a>
                                    </div>
                                    <div class="text-field">
                                        <div class="content px-[20px] py-[25px] lg:p-[20px]">
                                            <div class="category">
                                                <a href="<?= $item['category-link'] ?>" class="block w-fit group/link">
                                                    <span class="text text-[16px] sm:text-[14px] leading-tight text-[#454545]/50 duration-350 group-hover/item:text-white tracking-[0.1rem] group-hover/item:group-hover/link:text-white/70"><?= $item->category->title ?></span>
                                                </a>
                                            </div>
                                            <div class="title mt-[15px] sm:mt-[5px]">
                                                <a href="<?= $item['title-link'] ?>" class="block w-fit group/link">
                                                    <span class="text text-[24px] 2xl:text-[22px] xl:text-[20px] lg:text-[18px] md:text-[16px] leading-tight text-[#1E1E1E] duration-350 group-hover/item:text-white font-semibold group-hover/item:group-hover/link:text-white/70"><?= $item['title'] ?></span>
                                                </a>
                                            </div>
                                            <div class="button-field mt-[24px] lg:mt-[20px] md:mt-[15px] sm:hidden">
                                                <a href="<?= $item['title-link'] ?>" class="flex items-center gap-[15px] w-fit group/link opacity-65 duration-350 hover:opacity-100">
                                                    <span class="text text-[18px] md:text-[16px] sm:text-[14px] leading-tight text-[#1E1E1E] font-medium duration-350 group-hover/item:text-white tracking-[0.25rem]">VIEW</span>
                                                    <i class="icon icon-arrow-right-2 text-[27px] h-[27px] text-[#1E1E1E] group-hover/item:text-white group-hover/link:translate-x-[3px] block leading-none duration-350"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="button-field mt-[50px] xl:mt-[40px] lg:mt-[30px] flex justify-center">
                        <a href="javascript:;" class="flex items-center gap-[15px] w-fit group/link duration-350">
                            <span class="text text-[16px] sm:text-[14px] leading-tight text-main-500 font-medium duration-350 group-hover/item:text-main-500 tracking-[0.25rem]">MORE</span>
                            <i class="icon icon-chevron-bottom text-[15px] h-[15px] text-main-500 group-hover/item:text-main-500 group-hover/link:translate-y-[3px] block leading-none duration-350"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php $fc = '';?>
@endsection

<!-- script --> 
@section('scripts') 
    <script>
        // SIDEBAR | FILTER
        let widgetTitleField = document.querySelectorAll('.widget-title-field');

        widgetTitleField.forEach(item => {
            item.addEventListener('click', function() {
                item.closest('.widget').classList.toggle('is-active');
            });
        });

        // SHOW ALL FILTER
        let showAllFilter = document.querySelector('.show-all-filter');
        let widgetItem = document.querySelectorAll('.widget-item');
        showAllFilter.addEventListener('click', function() {
            this.classList.toggle('is-active');
            if (this.classList.contains('is-active')) {
                this.querySelector('.text').textContent = this.dataset.hideText;
                widgetItem.forEach(item => {
                    item.classList.add('is-active');
                });
            } else {
                this.querySelector('.text').textContent = this.dataset.showText;
                widgetItem.forEach(item => {
                    item.classList.remove('is-active');
                });
            }
        })

        // SHOW FILTER LIST
        let showFilterList = document.querySelector('.show-filter-list');
        showFilterList.addEventListener('click', function() {
            this.classList.toggle('is-show');
            this.closest('.mobile-view').nextElementSibling.classList.toggle('is-active');
            if (this.classList.contains('is-show')) {
                this.querySelector('.text').textContent = this.querySelector('.text').dataset.hideText;
            } else {
                this.querySelector('.text').textContent = this.querySelector('.text').dataset.showText;
            }
        });
    </script>
@endsection