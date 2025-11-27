@extends('layouts.main')

@section('content')
    <?php 
        $pageTitle = $blog->title; 
        $breadcrumbImage = "corporate-breadcrumb.jpg";
        $breadcrumbVideo = "breadcrumb-video.mp4";
        $pageLink = "page-corporate.php";
        $imageOrVideo = "image";
    ?> 

<main class="main-field header-space sub-page">
   
    <?php $social = [
        [
            'link' => 'https://wa.me',
            'icon' => 'whatsapp'
        ],
        [
            'link' => 'https://facebook.com',
            'icon' => 'facebook'
        ],
        [
            'link' => 'https://twitter.com',
            'icon' => 'twitter'
        ],
        [
            'link' => 'https://linkedin.com',
            'icon' => 'linkedin'
        ],
    ]; ?>
    <section class="main-area w-full">
        <div class="container max-w-[1640px] mb-[60px] md:mb-[25px]">
            <div class="breadcrumb-area flex min-md:justify-end md:w-full mb-[55px] xl:mb-[30px]">
                            <div class="breadcrumb md:w-full relative py-[40px] pl-[100px] 2xl:pl-[60px] md:px-0 md:py-[20px] reveal before:absolute before:left-0 before:md:-left-1/2 before:top-0 before:w-screen before:md:w-[calc(100vw+50%)] before:h-full before:bg-primary-main before:min-md:-skew-x-[30deg] before:rounded-[6px]">
                                <ul class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-white/60 flex items-center flex-wrap relative z-2">
                                    <li class="inline-flex items-center">
                                        <a href="index.php" class="block">
                                            <i class="icon-home text-[18px] md:text-[15px] leading-none h-[18px]  text-white"></i>
                                        </a>
                                    </li>

                                    <li class="inline-flex items-center">
                                        <a href="news.php" class="block">
                                            <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">News</p>
                                        </a>
                                    </li>

                                    <li class="inline-flex items-center">
                                        <a href="news.php" class="block">
                                            <h1 class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">Events</h1>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
            <div class="flex flex-wrap">
                <div class="w-1/2 md:w-full pr-[60px] 2xl:pr-[45px] xl:pr-[30px] md:pr-0 md:my-[30px]">
                    <div class="news-image-area w-full h-[800px] 2xl:h-[700px] xl:h-[560px] md:h-[450px] sm:h-[320px] flex items-center min-md:sticky min-md:top-[120px] min-md:-translate-x-[calc((100vw-1640px)/2+30px)] min-md:w-[calc(100%+(100vw-1640px)/2+30px)] reveal-image">
                        <img src="../assets/image/general/blog.jpg" alt="Blog" width="858" height="680" class="w-full h-full object-cover rounded-r-[20px] md:rounded-[20px]">
                    </div>
                </div>
                <div class="w-1/2 md:w-full pl-[60px] 2xl:pl-[45px] xl:pl-[30px] md:p-0 relative">
                    <div class="flex flex-col h-full w-full">
                        <div class="news-page-detail flex flex-col gap-[45px] md:gap-[30px] w-full h-full md:h-auto">
                            <div class="top w-full flex flex-col gap-[20px]">
                                <div class="flex items-center gap-[60px]">
                                    <time class="flex items-center gap-[10px] reveal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M3.72515 0.553314C3.72515 1.11786 3.2675 1.57551 2.70296 1.57551C1.48889 1.57551 0.5 2.56453 0.5 3.77964V11.2958C0.5 12.511 1.48889 13.5 2.70293 13.5H11.297C12.5111 13.5 13.5 12.511 13.5 11.2958V3.77964C13.5 2.56453 12.5111 1.57551 11.297 1.57551C10.7325 1.57551 10.2749 1.11787 10.2749 0.553342V0.546875C10.2749 0.520768 10.2538 0.5 10.2282 0.5C10.2027 0.5 10.1816 0.520769 10.1816 0.546875C10.1816 1.11498 9.72107 1.57551 9.15297 1.57551H4.84705C4.27895 1.57551 3.81842 1.11498 3.81842 0.546875C3.81842 0.520769 3.79734 0.5 3.77179 0.5C3.74623 0.5 3.72515 0.520768 3.72515 0.546875V0.553314ZM10.2749 2.69143C10.2749 2.1269 10.7325 1.66926 11.297 1.66926C12.461 1.66926 13.4067 2.61575 13.4067 3.77964C13.4067 4.34432 12.949 4.80207 12.3843 4.80207H1.61569C1.05102 4.80207 0.593264 4.34432 0.593264 3.77964C0.593264 2.61575 1.53901 1.66926 2.70293 1.66926C3.26747 1.66926 3.72513 2.12691 3.72513 2.69146V3.23567C3.72513 3.26178 3.74621 3.28254 3.77176 3.28254C3.79731 3.28254 3.81839 3.26177 3.81839 3.23567C3.81839 2.37057 4.51969 1.66926 5.3848 1.66926H8.6152C9.48031 1.66926 10.1816 2.37057 10.1816 3.23567C10.1816 3.26177 10.2027 3.28254 10.2282 3.28254C10.2538 3.28254 10.2749 3.26178 10.2749 3.23567V2.69143ZM11.297 13.4062H2.70296C1.53901 13.4062 0.593264 12.4598 0.593264 11.2958C0.593264 7.76047 3.46611 4.89582 7 4.89582C10.5339 4.89582 13.4067 7.76047 13.4067 11.2958C13.4067 12.4598 12.461 13.4062 11.297 13.4062ZM9.64408 7.54688C9.64408 7.57298 9.66516 7.59375 9.69071 7.59375H10.7657C10.7913 7.59375 10.8124 7.57298 10.8124 7.54688C10.8124 7.52077 10.7913 7.5 10.7657 7.5H9.69071C9.66517 7.5 9.64408 7.52078 9.64408 7.54688ZM3.1876 7.54688C3.1876 7.57298 3.20868 7.59375 3.23423 7.59375H4.30926C4.33481 7.59375 4.35589 7.57298 4.35589 7.54688C4.35589 7.52077 4.33481 7.5 4.30926 7.5H3.23423C3.20869 7.5 3.1876 7.52078 3.1876 7.54688ZM6.41895 7.54688C6.41895 7.57298 6.44003 7.59375 6.46559 7.59375H7.54062C7.56617 7.59375 7.58725 7.57298 7.58725 7.54688C7.58725 7.52077 7.56617 7.5 7.54062 7.5H6.46559C6.44004 7.5 6.41895 7.52078 6.41895 7.54688ZM9.64408 10.7734C9.64408 10.7995 9.66516 10.8203 9.69071 10.8203H10.7657C10.7913 10.8203 10.8124 10.7995 10.8124 10.7734C10.8124 10.7473 10.7913 10.7266 10.7657 10.7266H9.69071C9.66517 10.7266 9.64408 10.7473 9.64408 10.7734ZM3.1876 10.7734C3.1876 10.7995 3.20868 10.8203 3.23423 10.8203H4.30926C4.33481 10.8203 4.35589 10.7995 4.35589 10.7734C4.35589 10.7473 4.33481 10.7266 4.30926 10.7266H3.23423C3.20869 10.7266 3.1876 10.7473 3.1876 10.7734ZM6.41895 10.7734C6.41895 10.7995 6.44003 10.8203 6.46559 10.8203H7.54062C7.56617 10.8203 7.58725 10.7995 7.58725 10.7734C7.58725 10.7473 7.56617 10.7266 7.54062 10.7266H6.46559C6.44004 10.7266 6.41895 10.7473 6.41895 10.7734Z" stroke="#00AE83"/>
                                        </svg>
                                        <span class="text-[16px] leading-[26px] text-secondary-main/75 tracking-[-0.16px]"><?= date("j F Y", strtotime($blog['created_at'])) ?></span>
                                    </time>
                                    <div class="stars right flex gap-[10px] reveal" data-selected-rate="">
                                        <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#008826]/20 [&.to-rate]:text-[#008826] [&.to-hover]:text-[#008826] [&.rated]:text-[#008826] [&.no-to-rated]:text-[#d0e8f0]" data-id="1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                                <path d="M8.02447 0.463524C8.17415 0.00286853 8.82585 0.00287008 8.97553 0.463525L10.5206 5.21885C10.5876 5.42486 10.7795 5.56434 10.9962 5.56434H15.9962C16.4806 5.56434 16.6819 6.18415 16.2901 6.46885L12.245 9.4078C12.0697 9.53512 11.9964 9.7608 12.0633 9.96681L13.6084 14.7221C13.7581 15.1828 13.2309 15.5659 12.839 15.2812L8.79389 12.3422C8.61865 12.2149 8.38135 12.2149 8.20611 12.3422L4.16099 15.2812C3.76913 15.5659 3.24189 15.1828 3.39157 14.7221L4.93667 9.96681C5.0036 9.7608 4.93027 9.53512 4.75503 9.4078L0.709911 6.46885C0.318054 6.18415 0.519443 5.56434 1.0038 5.56434H6.00385C6.22046 5.56434 6.41244 5.42486 6.47937 5.21885L8.02447 0.463524Z"/>
                                            </svg>
                                        </a>
                                        <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#008826]/20 [&.to-rate]:text-[#008826] [&.to-hover]:text-[#008826] [&.rated]:text-[#008826] [&.no-to-rated]:text-[#d0e8f0]" data-id="2">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                                <path d="M8.02447 0.463524C8.17415 0.00286853 8.82585 0.00287008 8.97553 0.463525L10.5206 5.21885C10.5876 5.42486 10.7795 5.56434 10.9962 5.56434H15.9962C16.4806 5.56434 16.6819 6.18415 16.2901 6.46885L12.245 9.4078C12.0697 9.53512 11.9964 9.7608 12.0633 9.96681L13.6084 14.7221C13.7581 15.1828 13.2309 15.5659 12.839 15.2812L8.79389 12.3422C8.61865 12.2149 8.38135 12.2149 8.20611 12.3422L4.16099 15.2812C3.76913 15.5659 3.24189 15.1828 3.39157 14.7221L4.93667 9.96681C5.0036 9.7608 4.93027 9.53512 4.75503 9.4078L0.709911 6.46885C0.318054 6.18415 0.519443 5.56434 1.0038 5.56434H6.00385C6.22046 5.56434 6.41244 5.42486 6.47937 5.21885L8.02447 0.463524Z"/>
                                            </svg>
                                        </a>
                                        <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#008826]/20 [&.to-rate]:text-[#008826] [&.to-hover]:text-[#008826] [&.rated]:text-[#008826] [&.no-to-rated]:text-[#d0e8f0]" data-id="3">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                                <path d="M8.02447 0.463524C8.17415 0.00286853 8.82585 0.00287008 8.97553 0.463525L10.5206 5.21885C10.5876 5.42486 10.7795 5.56434 10.9962 5.56434H15.9962C16.4806 5.56434 16.6819 6.18415 16.2901 6.46885L12.245 9.4078C12.0697 9.53512 11.9964 9.7608 12.0633 9.96681L13.6084 14.7221C13.7581 15.1828 13.2309 15.5659 12.839 15.2812L8.79389 12.3422C8.61865 12.2149 8.38135 12.2149 8.20611 12.3422L4.16099 15.2812C3.76913 15.5659 3.24189 15.1828 3.39157 14.7221L4.93667 9.96681C5.0036 9.7608 4.93027 9.53512 4.75503 9.4078L0.709911 6.46885C0.318054 6.18415 0.519443 5.56434 1.0038 5.56434H6.00385C6.22046 5.56434 6.41244 5.42486 6.47937 5.21885L8.02447 0.463524Z"/>
                                            </svg>
                                        </a>
                                        <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#008826]/20 [&.to-rate]:text-[#008826] [&.to-hover]:text-[#008826] [&.rated]:text-[#008826] [&.no-to-rated]:text-[#d0e8f0]" data-id="4">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                                <path d="M8.02447 0.463524C8.17415 0.00286853 8.82585 0.00287008 8.97553 0.463525L10.5206 5.21885C10.5876 5.42486 10.7795 5.56434 10.9962 5.56434H15.9962C16.4806 5.56434 16.6819 6.18415 16.2901 6.46885L12.245 9.4078C12.0697 9.53512 11.9964 9.7608 12.0633 9.96681L13.6084 14.7221C13.7581 15.1828 13.2309 15.5659 12.839 15.2812L8.79389 12.3422C8.61865 12.2149 8.38135 12.2149 8.20611 12.3422L4.16099 15.2812C3.76913 15.5659 3.24189 15.1828 3.39157 14.7221L4.93667 9.96681C5.0036 9.7608 4.93027 9.53512 4.75503 9.4078L0.709911 6.46885C0.318054 6.18415 0.519443 5.56434 1.0038 5.56434H6.00385C6.22046 5.56434 6.41244 5.42486 6.47937 5.21885L8.02447 0.463524Z"/>
                                            </svg>
                                        </a>
                                        <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#008826]/20 [&.to-rate]:text-[#008826] [&.to-hover]:text-[#008826] [&.rated]:text-[#008826] [&.no-to-rated]:text-[#d0e8f0]" data-id="5">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                                <path d="M8.02447 0.463524C8.17415 0.00286853 8.82585 0.00287008 8.97553 0.463525L10.5206 5.21885C10.5876 5.42486 10.7795 5.56434 10.9962 5.56434H15.9962C16.4806 5.56434 16.6819 6.18415 16.2901 6.46885L12.245 9.4078C12.0697 9.53512 11.9964 9.7608 12.0633 9.96681L13.6084 14.7221C13.7581 15.1828 13.2309 15.5659 12.839 15.2812L8.79389 12.3422C8.61865 12.2149 8.38135 12.2149 8.20611 12.3422L4.16099 15.2812C3.76913 15.5659 3.24189 15.1828 3.39157 14.7221L4.93667 9.96681C5.0036 9.7608 4.93027 9.53512 4.75503 9.4078L0.709911 6.46885C0.318054 6.18415 0.519443 5.56434 1.0038 5.56434H6.00385C6.22046 5.56434 6.41244 5.42486 6.47937 5.21885L8.02447 0.463524Z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <ul class="min-md:!hidden flex flex-col md:flex-row md:justify-center items-center gap-[25px] [&_i]:hover:[&_a]:text-primary-main [&_i]:hover:[&_p]:text-primary-main">
                                    <?php foreach ($social as $key => $item) { ?>
                                        <li class="reveal relative">
                                            <a href="<?= $item['link'] ?>" class="group flex items-center text-[27px] text-paragraph/52 reveal">
                                                <i class="icon-<?= $item['icon'] ?> text-[24px] leading-none h-[24px] transition-all duration-450 text-[#B0B0B0] group-hover:text-primary-main"></i>
                                                <div class="tooltip md:hidden absolute opacity-0 rounded-[5px] group-hover:opacity-100 translate-x-0 group-hover:translate-x-[15px] px-[20px] rotate-90 bg-primary-main transition-all duration-450 grid place-items-center h-[30px]">
                                                    <div class="icon-triangle-down absolute left-1/2 top-full -translate-y-[30%] -translate-x-1/2 text-primary-main"></div>
                                                    <span class="text-[14px] leading-none font-medium text-white h-max">Paylaş</span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <li class="reveal relative">
                                        <div class="reveal group flex items-center text-[27px] text-[#B0B0B0] cursor-pointer [&_input]:opacity-0 [&_input]:z-[-1] [&_input]:w-0 [&_input]:h-0 [&_input]:absolute" id="copy-link">
                                            <i class="icon-link text-[24px] leading-none h-[24px] transition-all duration-450 text-[#B0B0B0] group-hover:text-primary-main"></i>
                                            <div class="tooltip md:hidden absolute opacity-0 rounded-[5px] group-hover:opacity-100 translate-x-0 group-hover:translate-x-[15px] px-[20px] rotate-90 bg-primary-main transition-all duration-450 grid place-items-center h-[30px] group-[&.copied]:bg-secondary-main group-[&.copied]:translate-x-[19px]">
                                                <div class="icon-triangle-down absolute left-1/2 top-full -translate-y-[30%] -translate-x-1/2 text-primary-400 transition-all duration-300 group-[&.copied]:text-secondary-main"></div>
                                                <span id="span" class="text-[14px] leading-none font-medium text-white">Kopyala</span>
                                                <span id="copy-text" class="hidden opacity-0 invisible h-0 w-0 overflow-hidden">Kopyala</span>
                                                <span id="copied-text" class="hidden opacity-0 invisible h-0 w-0 overflow-hidden">Kopyalandı</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="reveal relative">
                                        <div class="reveal group flex items-center text-[27px] text-[#B0B0B0] cursor-pointer" id="print">
                                            <i class="icon-print text-[24px] leading-none h-[24px] transition-all duration-450 text-[#B0B0B0] group-hover:text-primary-main"></i>
                                            <div class="tooltip md:hidden absolute opacity-0 rounded-[5px] group-hover:opacity-100 translate-x-0 group-hover:translate-x-[15px] px-[20px] rotate-90 bg-primary-main transition-all duration-450 grid place-items-center h-[30px]">
                                                <div class="icon-triangle-down absolute left-1/2 top-full -translate-y-[30%] -translate-x-1/2 text-primary-400"></div>
                                                <span class="text-[14px] leading-none font-medium text-white">Yazdır</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <h1 class="text-[48px] 2xl:text-[40px] xl:text-[30px] md:text-[20px] leading-[64px] xl:leading-[35px] text-secondary-main font-semibold reveal">{{$blog->title}}</h1>
                            </div>
                            <div class="content flex md:flex-col gap-[70px] 2xl:gap-[45px] xl:gap-[35px]">
                                <div class="social md:order-2 h-max min-md:sticky min-md:top-[120px] md:!hidden">
                                    <ul class="flex flex-col md:flex-row md:justify-center items-center gap-[25px] [&_i]:hover:[&_a]:text-primary-main [&_i]:hover:[&_p]:text-primary-main">
                                        <?php foreach ($social as $key => $item) { ?>
                                            <li class="reveal relative">
                                                <a href="<?= $item['link'] ?>" class="group flex items-center text-[27px] text-paragraph/52 reveal">
                                                    <i class="icon-<?= $item['icon'] ?> text-[24px] leading-none h-[24px] transition-all duration-450 text-[#B0B0B0] group-hover:text-primary-main"></i>
                                                    <div class="tooltip md:hidden absolute opacity-0 rounded-[5px] group-hover:opacity-100 translate-x-0 group-hover:translate-x-[15px] px-[20px] rotate-90 bg-primary-main transition-all duration-450 grid place-items-center h-[30px]">
                                                        <div class="icon-triangle-down absolute left-1/2 top-full -translate-y-[30%] -translate-x-1/2 text-primary-main"></div>
                                                        <span class="text-[14px] leading-none font-medium text-white h-max">Paylaş</span>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <li class="reveal relative">
                                            <div class="reveal group flex items-center text-[27px] text-[#B0B0B0] cursor-pointer [&_input]:opacity-0 [&_input]:z-[-1] [&_input]:w-0 [&_input]:h-0 [&_input]:absolute" id="copy-link">
                                                <i class="icon-link text-[24px] leading-none h-[24px] transition-all duration-450 text-[#B0B0B0] group-hover:text-primary-main"></i>
                                                <div class="tooltip md:hidden absolute opacity-0 rounded-[5px] group-hover:opacity-100 translate-x-0 group-hover:translate-x-[15px] px-[20px] rotate-90 bg-primary-main transition-all duration-450 grid place-items-center h-[30px] group-[&.copied]:bg-secondary-main group-[&.copied]:translate-x-[19px]">
                                                    <div class="icon-triangle-down absolute left-1/2 top-full -translate-y-[30%] -translate-x-1/2 text-primary-400 transition-all duration-300 group-[&.copied]:text-secondary-main"></div>
                                                    <span id="span" class="text-[14px] leading-none font-medium text-white">Kopyala</span>
                                                    <span id="copy-text" class="hidden opacity-0 invisible h-0 w-0 overflow-hidden">Kopyala</span>
                                                    <span id="copied-text" class="hidden opacity-0 invisible h-0 w-0 overflow-hidden">Kopyalandı</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="reveal relative">
                                            <div class="reveal group flex items-center text-[27px] text-[#B0B0B0] cursor-pointer" id="print">
                                                <i class="icon-print text-[24px] leading-none h-[24px] transition-all duration-450 text-[#B0B0B0] group-hover:text-primary-main"></i>
                                                <div class="tooltip md:hidden absolute opacity-0 rounded-[5px] group-hover:opacity-100 translate-x-0 group-hover:translate-x-[15px] px-[20px] rotate-90 bg-primary-main transition-all duration-450 grid place-items-center h-[30px]">
                                                    <div class="icon-triangle-down absolute left-1/2 top-full -translate-y-[30%] -translate-x-1/2 text-primary-400"></div>
                                                    <span class="text-[14px] leading-none font-medium text-white">Yazdır</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-editor w-full max-w-full reveal">
                                    <p>{{ strip_tags($blog->description) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="faq-section relative mt-[150px] 2xl:mt-[110px] xl:mt-[70px] lg:mt-[40px]">
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
                                    <p class="text-[19px] lg:text-[17px] md:text-[16px] leading-[30px] text-white font-light tracking-[-0.19px] transition-all duration-450 opacity-0 translate-y-[10px] faq-description group-[&.active]/faq:opacity-100 group-[&.active]/faq:translate-y-0 group-[&.active]/faq:mt-[20px] "><?= strip_tags($item['description']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-news py-[110px] 2xl:py-[80px] xl:py-[60px] lg:py-[30px] mb-[170px] 2xl:mb-[140px] xl:mb-[100px] lg:mb-[60px] relative">
            <div class="circle w-[1000px] h-[528px] absolute top-[-90px] left-[-240px] rounded-b-full opacity-10 bg-[radial-gradient(50%_100%_at_50%_0%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] pointer-events-none -rotate-90"></div>
            <div class="content relative z-4">
                <div class="container max-w-[1640px]">
                    <div class="flex flex-col gap-[100px] xl:gap-[60px] lg:gap-[40px]">
                        <div class="flex min-md:items-center justify-between gap-[20px] sm:flex-col">
                            <div class="text-editor rounded-[10px] reveal">
                                <h3>Wemobile <span>News</span></h3>
                            </div>
                            <div class="flex items-center min-sm:justify-end gap-[120px] 2xl:gap-[90px] xl:gap-[60px] lg:gap-[40px]">
                                <div class="nav-buttons flex items-center justify-end gap-[20px] md:gap-[15px] reveal-button-left">
                                    <div class="home-news-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-[#2E485C]/15 relative z-10 transition-all duration-450  [&.home-news-disabled]:pointer-events-none">
                                        <i class="icon-arrow-left text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.home-news-disabled]/nav:text-secondary-main/60 group-[&.home-news-disabled]/nav:md:text-secondary-main/60"></i>
                                        <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                            <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                        </svg>
                                    </div>

                                    <div class="home-news-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-[#2E485C]/15 relative z-10 transition-all duration-450  [&.home-news-disabled]:pointer-events-none">
                                        <i class="icon-arrow-right text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.home-news-disabled]/nav:text-secondary-main/60 group-[&.home-news-disabled]/nav:md:text-secondary-main/60"></i>
                                        <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                            <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="reveal-button-right">
                                    <?php
                                        $link = "news.php";
                                        $title = "All News";
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
                            <div class="home-news-slider xl:overflow-hidden reveal-image">
                                <div class="swiper-wrapper">
                                    <?php foreach ($blogs as $key => $item): ?>
                                        <div class="swiper-slide">
                                            <div class="item w-full rounded-[10px] overflow-hidden bg-secondary-main">
                                                <div class="flex xsm:flex-col">
                                                    <div class="image-wrapper min-w-[500px] md:min-w-[300px] h-auto xsm:h-[300px]">
                                                        <img src="{{asset( getFolder(['uploads_folder', 'blog_images_folder'], $item->lang) . '/' . $item->image )}}" alt="<?= $item['image'] ?>" width="503" height="547" class="w-full h-full object-cover">
                                                    </div>
                                                    <div class="content p-[80px] 2xl:p-[65px] xl:p-[45px] lg:p-[25px] flex flex-col justify-center gap-[20px]">
                                                        <time class="flex items-center gap-[10px]">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.70296 1.07551C2.99136 1.07551 3.22515 0.841716 3.22515 0.553314V0.546875C3.22515 0.244836 3.46988 0 3.77179 0C4.07369 0 4.31842 0.244836 4.31842 0.546875C4.31842 0.838833 4.5551 1.07551 4.84705 1.07551H9.15297C9.44493 1.07551 9.68161 0.838833 9.68161 0.546875C9.68161 0.244836 9.92634 0 10.2282 0C10.5301 0 10.7749 0.244836 10.7749 0.546875V0.553342C10.7749 0.841728 11.0087 1.07551 11.297 1.07551C12.7875 1.07551 14 2.28859 14 3.77964V11.2958C14 12.7869 12.7875 14 11.297 14H2.70293C1.21254 14 0 12.7869 0 11.2958V3.77964C0 2.28859 1.21254 1.07551 2.70296 1.07551ZM11.297 2.16926C11.0087 2.16926 10.7749 2.40305 10.7749 2.69143V3.23567C10.7749 3.53771 10.5301 3.78254 10.2282 3.78254C9.92634 3.78254 9.68161 3.53771 9.68161 3.23567C9.68161 2.64671 9.20416 2.16926 8.6152 2.16926H5.3848C4.79584 2.16926 4.31839 2.64671 4.31839 3.23567C4.31839 3.53771 4.07366 3.78254 3.77176 3.78254C3.46985 3.78254 3.22513 3.53771 3.22513 3.23567V2.69146C3.22513 2.40306 2.99133 2.16926 2.70293 2.16926C1.81536 2.16926 1.09326 2.89168 1.09326 3.77964C1.09326 4.06817 1.32716 4.30207 1.61569 4.30207H12.3843C12.6728 4.30207 12.9067 4.06817 12.9067 3.77964C12.9067 2.89168 12.1846 2.16926 11.297 2.16926ZM2.70296 12.9062H11.297C12.1846 12.9062 12.9067 12.1838 12.9067 11.2958C12.9067 8.03735 10.2585 5.39582 7 5.39582C3.74151 5.39582 1.09326 8.03735 1.09326 11.2958C1.09326 12.1838 1.81536 12.9062 2.70296 12.9062ZM9.14408 7.54688C9.14408 7.84891 9.38881 8.09375 9.69071 8.09375H10.7657C11.0676 8.09375 11.3124 7.84891 11.3124 7.54688C11.3124 7.24484 11.0676 7 10.7657 7H9.69071C9.38883 7 9.14408 7.24484 9.14408 7.54688ZM2.6876 7.54688C2.6876 7.84891 2.93232 8.09375 3.23423 8.09375H4.30926C4.61117 8.09375 4.85589 7.84891 4.85589 7.54688C4.85589 7.24484 4.61117 7 4.30926 7H3.23423C2.93235 7 2.6876 7.24484 2.6876 7.54688ZM5.91895 7.54688C5.91895 7.84891 6.16368 8.09375 6.46559 8.09375H7.54062C7.84252 8.09375 8.08725 7.84891 8.08725 7.54688C8.08725 7.24484 7.84252 7 7.54062 7H6.46559C6.16371 7 5.91895 7.24484 5.91895 7.54688ZM9.14408 10.7734C9.14408 11.0755 9.38881 11.3203 9.69071 11.3203H10.7657C11.0676 11.3203 11.3124 11.0755 11.3124 10.7734C11.3124 10.4714 11.0676 10.2266 10.7657 10.2266H9.69071C9.38883 10.2266 9.14408 10.4714 9.14408 10.7734ZM2.6876 10.7734C2.6876 11.0755 2.93232 11.3203 3.23423 11.3203H4.30926C4.61117 11.3203 4.85589 11.0755 4.85589 10.7734C4.85589 10.4714 4.61117 10.2266 4.30926 10.2266H3.23423C2.93235 10.2266 2.6876 10.4714 2.6876 10.7734ZM5.91895 10.7734C5.91895 11.0755 6.16368 11.3203 6.46559 11.3203H7.54062C7.84252 11.3203 8.08725 11.0755 8.08725 10.7734C8.08725 10.4714 7.84252 10.2266 7.54062 10.2266H6.46559C6.16371 10.2266 5.91895 10.4714 5.91895 10.7734Z" fill="white"/>
                                                            </svg>
                                                            <span class="text-[16px] leading-[26px] text-white tracking-[-0.16px]"><?= date("j F Y", strtotime($item['created_at'])) ?></span>
                                                        </time>
                                                        <h4 class="text-[32px] xl:text-[26px] md:text-[20px] leading-[40px] xl:leading-[35px] text-white font-bold mb-[10px] sm:mb-0"><?= $item['title'] ?></h4>
                                                        <p class="text-[18px] lg:text-[16px] leading-[24px] text-white/75 mb-[60px] xl:mb-[35px] sm:mb-0">{{ mb_substr(strip_tags($item['description']), 0, 200) . '...' }}</p>
                                                        <?php
                                                            $link = env('HTTP_DOMAIN') . '/' . getUrl('blog_url') . '/' . $item['seo_url'] ;
                                                            $title = "Read More";
                                                            $background = "bg-white/10";
                                                            $backgroundHover = "before:bg-primary-main";
                                                            $textColor = "text-white";
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
                                        </div>
                                    <?php endforeach; ?>
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

@section('scripts')

<script>
    let ratingStar = document.querySelectorAll('.rating-star');
    let dataSelectedRate
    ratingStar.forEach((item, index) => {
        item.addEventListener('click', () => {
            ratingStar.forEach((item, index) => {
                item.classList.remove('to-rate');
                item.classList.remove('rated');
                item.classList.add('no-to-rated');
            });
            for (let i = 0; i <= index; i++) {
                ratingStar[i].classList.remove('no-to-rated');
                ratingStar[i].classList.add('rated');
            }
            item.classList.add('to-rate');

            dataSelectedRate = item.dataset.id;
            item.parentElement.dataset.selectedRate = dataSelectedRate;
            // item.parentElement.querySelector('.rating-text span').innerText = dataSelectedRate;
        });

        item.addEventListener('mouseover', () => {
            ratingStar.forEach((item, index) => {
                item.classList.remove('to-hover');
            });
            for (let i = 0; i <= index; i++) {
                ratingStar[i].classList.add('to-hover');
            }

            dataSelectedRate = item.dataset.id;
            // item.parentElement.querySelector('.rating-text span').innerText = dataSelectedRate;
        });

        item.addEventListener('mouseout', () => {
            ratingStar.forEach((item, index) => {
                item.classList.remove('to-hover');
            });

            dataSelectedRate = item.dataset.id;
            // item.parentElement.querySelector('.rating-text span').innerText = dataSelectedRate;
        });
    });
</script>

<script>
    if (windowWidth > mobileLimit) document.querySelector("penta-yazilim").classList.remove("overflow-hidden");
</script>

@endsection