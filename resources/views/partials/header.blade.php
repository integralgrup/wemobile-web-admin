<?php $nop = 'We Mobile'; ?>

<!DOCTYPE html>
<html lang="tr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= !empty($pt) ? $pt.' - ' : ''; ?><?= $nop; ?></title>
    <link rel="shortcut icon" href="assets/image/trademark/favicon.png" type="image/x-icon">
    <!-- Önbellek tutmasın diye ekledim; '?id<?= rand(); ?>' yazısını silersin -->
    <link rel="stylesheet" href="assets/css/utils.css?id<?= rand(); ?>">
    <link rel="stylesheet" href="assets/css/style.css?id<?= rand(); ?>">
</head>

<!-- GENEL YAPILAR İÇİN BİLGİLERDİR. BACKEND AŞAMASINDA SİLİNEBİLİR. -->
<?php
    $menu = App\Models\Menu::where(['parent_menu_id' => 0, 'menu_type' => 'header', 'lang' => app()->getLocale()])->with('children')->get();
    
    $menuData = [];

    foreach ($menu as $key => $item) {
        $menuData[$key] = [
            'title' => $item->title,
            'link'  => $item->seo_url,
        ];

        if ($item->type == 1) {
            $menuData[$key]['sub-menu'] = 'type-1';
            if(isset($item->children)) {
                foreach ($item->children as $key2 => $item2) {
                    $menuData[$key]['sub-menu-content'][$key2] = [
                        'title' => $item2->title,
                        'link'  => 'javascript:;',
                    ];
                    if(isset($item2->children)){
                        foreach($item2->children as $key3 => $item3) {
                            $menuData[$key]['sub-menu-content'][$key2]['sub-menu-content-2'][$key3] = [
                                'title' => $item3->title,
                                'link'  => 'javascript:;',
                            ];
                            if(isset($item3->children)){
                                foreach($item3->children as $key4 => $item4) {
                                    $menuData[$key]['sub-menu-content'][$key2]['sub-menu-content-2'][$key3]['sub-menu-content-3'][$key4] = [
                                        'title' => $item4->title,
                                        'link'  => 'javascript:;',
                                        "image" => "assets/image/other/sub-menu-1.jpg",
                                    ];
                                }
                            }
                        }
                    }
                }
            }
            
        }

        if ($item->type == 2) {
            $menuData[$key]['sub-menu'] = 'type-2';
            if(isset($item->children)) {
                foreach ($item->children as $key2 => $item2) {
                    $menuData[$key]['sub-menu-content'][$key2] = [
                        'title' => $item2->title,
                        'link'  => $item2->seo_url,
                        "image" => "assets/image/other/sub-menu-1.jpg",
                        "icon" => "assets/image/icon/icon-1.png",

                    ];
                    
                }
            }
            
        }
    }

    $menu = $menuData;

   //dd($menu);

?>

<body class="select-none scrollbar scrollbar-w-[5px] scrollbar-h-[5px] scrollbar-track-transparent scrollbar-thumb-primary scrollbar-thumb-rounded-none [--header-height:100px]">

<header class="header-field group/header block z-100 fixed w-full left-0 top-0 duration-350 will-change-[height,_transform] [&.is-fixed]:!top-0 [&.is-fixed]:!translate-y-0 [&.is-hidden.is-fixed]:!-translate-y-full [&.no-scroll]:absolute [&.no-scroll]:!transform-none [&.no-scroll]:!shadow-none h-[var(--header-height)] min-h-[135px] lg:min-h-[100px] sm:min-h-[80px] bg-transparent
[&.is-fixed]:shadow-[0px_4px_25px_0px_rgba(0,0,0,0.1)]
[&.is-active]:bg-white
[&.is-fixed]:bg-white
[&.is-fixed]:min-h-[calc(var(--header-height)-14px-30px)]
[&.is-fixed]:h-[calc(var(--header-height)-14px-30px)]
 <?= !empty($mc) ? ' ' . $mc : ''; ?>">
    <div class="split absolute left-0 bottom-0 w-full h-[1px] bg-black/10 group-[&.is-transparent]/header:bg-white/10"></div>
    <div class="container max-w-[1500px] h-full">
        <div class="wrapper h-full flex items-center">
            <!-- LOGO FIELD -->
            <div class="logo-field">
                <a href="{{env('HTTP_DOMAIN')}}" class="flex justify-start relative">
                    <div class="is-fixed-field block group-[&.is-transparent]/header:hidden">
                        <div class="image overflow-hidden w-full opacity-100 group-[&.is-fixed]/header:opacity-100 duration-350">
                            <img src="assets/image/trademark/logo.png" class="w-full h-full object-contain object-left max-w-[292px]" alt="">
                        </div>
                        <div class="image overflow-hidden w-full opacity-0 group-[&.is-fixed]/header:opacity-0 absolute left-0 top-0 h-full duration-350">
                            <img src="assets/image/trademark/logo-white.png" class="w-full h-full object-contain object-left max-w-[292px]" alt="">
                        </div>
                    </div>
                    <div class="is-transparent-field hidden group-[&.is-transparent]/header:block">
                        <div class="image overflow-hidden w-full block duration-350 group-[&.is-fixed]/header:opacity-0 group-[&.is-active]/header:opacity-0">
                            <img src="assets/image/trademark/logo-white.png" class="w-full h-full object-contain object-left max-w-[292px]" alt="">
                        </div>
                        <div class="image overflow-hidden w-full opacity-0 group-[&.is-fixed]/header:opacity-100 group-[&.is-active]/header:opacity-100 absolute left-0 top-0 h-full duration-350">
                            <img src="assets/image/trademark/logo.png" class="w-full h-full object-contain object-left max-w-[292px]" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <!-- MENU FIELD -->
            <div class="menu-field w-full flex flex-col gap-[30px] group-[&.is-fixed]/header:gap-0 duration-350 lg:gap-[15px]">
                <!-- TOP MENU FIELD | SOCIAL MEDIA -->
                <div class="top-menu-field h-[14px] origin-top group-[&.is-fixed]/header:h-0 duration-350 overflow-hidden sm:hidden">
                    <?php $list = [
                        "icon-facebook",
                        "icon-instagram",
                        "icon-linkedin",
                        "icon-youtube",
                        // "icon-pinterest",
                    ]; ?>

                    <ul class="flex justify-end gap-[30px]">
                        <?php foreach ($list as $key => $item) : ?>
                            <li>
                                <a href="javascript:;" class="flex items-center justify-center group/link">
                                    <i class="icon <?= $item ?> text-[14px] h-[14px] text-[#1E1E1E]/50 group-[&.is-transparent]/header:text-white/50 group-hover/link:text-main-500 group-[&.is-transparent]/header:group-hover/link:text-white block leading-none duration-350 group-[&.is-active]/header:text-[#1E1E1E]/50 group-[&.is-active]/header:group-hover/link:text-main-500 group-[&.is-transparent]/header:group-[&.is-active]/header:text-[#1E1E1E]/50 group-[&.is-transparent]/header:group-[&.is-active]/header:group-hover/link:text-main-500"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <!-- SVG ÖRNEĞİ | EKSTRA ICON EKLENMEK İSTENİRSE KULLANILABİLİR. -->
                        <li>
                            <a href="javascript:;" class="flex items-center justify-center group/link">
                                <svg class="w-[14px] h-[14px] duration-350 fill-[#1E1E1E]/50 group-[&.is-transparent]/header:fill-white/50 group-hover/link:fill-main-500 group-[&.is-transparent]/header:group-hover/link:fill-white group-[&.is-active]/header:fill-[#1E1E1E]/50 group-[&.is-active]/header:group-hover/link:fill-main-500 group-[&.is-transparent]/header:group-[&.is-active]/header:fill-[#1E1E1E]/30 group-[&.is-transparent]/header:group-[&.is-active]/header:group-hover/link:fill-main-500" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 8.0006C0 11.2767 1.96999 14.0911 4.78897 15.3285C4.76647 14.7698 4.78497 14.0991 4.92823 13.4913C5.08205 12.8418 5.95766 9.13179 5.95766 9.13179C5.95766 9.13179 5.70209 8.62095 5.70209 7.86596C5.70209 6.68033 6.38925 5.79484 7.24505 5.79484C7.97278 5.79484 8.32437 6.34144 8.32437 6.99598C8.32437 7.72752 7.85778 8.82177 7.61782 9.83527C7.41738 10.6839 8.04335 11.3762 8.88059 11.3762C10.3964 11.3762 11.4174 9.42924 11.4174 7.12248C11.4174 5.369 10.2364 4.05655 8.08829 4.05655C5.6614 4.05655 4.14949 5.86641 4.14949 7.88803C4.14949 8.58507 4.35501 9.0766 4.6769 9.45725C4.82491 9.63207 4.84547 9.70238 4.79191 9.90315C4.75353 10.0503 4.6654 10.4047 4.6289 10.5452C4.57564 10.7478 4.41145 10.8203 4.22831 10.7454C3.1105 10.2891 2.5899 9.06497 2.5899 7.68889C2.5899 5.41619 4.50664 2.69103 8.30787 2.69103C11.3624 2.69103 13.3729 4.90141 13.3729 7.27412C13.3729 10.4126 11.628 12.7573 9.05597 12.7573C8.19223 12.7573 7.37975 12.2904 7.10142 11.7601C7.10142 11.7601 6.63695 13.6034 6.53857 13.9594C6.36894 14.5762 6.03692 15.1928 5.73334 15.6733C6.45288 15.8857 7.21299 16.0014 8.00078 16.0014C12.4188 16.0014 16.001 12.4194 16.001 8.0006C16.001 3.58202 12.4188 0 8.00078 0C3.58234 0 0 3.58202 0 8.0006Z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- BOTTOM MENU FIELD | MENU ELEMENTS -->
                <div class="bottom-menu-field">
                    <nav class="flex items-center sh justify-end gap-[40px] 2xl:gap-[30px] xl:gap-[20px] lg:gap-0">
                        <!-- GENEL MENÜ ALANI -->
                        <ul class="menu-ul min-lg:flex min-lg:justify-end gap-[50px] 2xl:gap-[40px] xl:gap-[30px] lg:gap-0 lg:flex-col lg:absolute lg:left-0 lg:top-full lg:w-full lg:bg-white lg:border-0 lg:border-t lg:border-solid lg:border-black/15 lg:max-h-[calc(100dvh-var(--header-height))] lg:scrollbar lg:scrollbar-w-[5px] lg:scrollbar-track-rounded-[5px] lg:scrollbar-thumb-rounded-[5px] lg:scrollbar-thumb-primary lg:scrollbar-track-primary/10 lg:overflow-x-hidden lg:overflow-y-auto hidden [&.is-active]:block">
                            <?php foreach ($menu as $key => $item) : ?>
                                <li class="menu-item group/menu-item lg:relative <?php if (isset($item['sub-menu'])) : ?>has-sub-menu<?php endif; ?>">
                                    <a href="<?= $item['link'] ?>" class="block group/link relative lg:px-[30px] lg:py-[10px] lg:border-0 lg:border-b lg:border-solid lg:border-black/15 <?php if ($key == 0) : ?>is-active<?php endif; ?>"> <!-- Mevcut sayfaya ".is-active" eklenir. -->
                                        <span class="text text-[18px] lg:text-[16px] duration-350 text-[#1E1E1E] min-lg:group-[&.is-transparent]/header:text-white group-hover/menu-item:text-main-500 min-lg:group-[&.is-transparent]/header:group-hover/menu-item:text-white lg:text-[#1E1E1E] group-[&.is-transparent]/header:group-[&.is-fixed]/header:text-[#1E1E1E] group-[&.is-transparent]/header:group-[&.is-fixed]/header:group-hover/menu-item:text-main-500

                                        min-lg:[-webkit-text-stroke:0.5px_transparent]
                                        min-lg:group-[&.is-active]/link:[-webkit-text-stroke:0.5px_#1E1E1E]
                                        min-lg:group-[&.is-transparent]/header:[-webkit-text-stroke:0.5px_transparent]
                                        min-lg:group-[&.is-transparent]/header:group-[&.is-active]/link:[-webkit-text-stroke:0.5px_white]

                                        min-lg:group-hover/menu-item:[-webkit-text-stroke:0.5px_var(--main-500)]
                                        min-lg:group-[&.is-active]/link:group-hover/link:[-webkit-text-stroke:0.5px_var(--main-500)]
                                        min-lg:group-[&.is-transparent]/header:group-hover/menu-item:[-webkit-text-stroke:0.5px_white]
                                        min-lg:group-[&.is-transparent]/link:group-hover/link:[-webkit-text-stroke:0.5px_white]

                                        min-lg:group-[&.is-fixed]/header:group-[&.is-active]/link:[-webkit-text-stroke:0.5px_#1E1E1E]
                                        min-lg:group-[&.is-fixed]/header:group-hover/link:[-webkit-text-stroke:0.5px_var(--main-500)]

                                        min-lg:group-[&.is-transparent.is-fixed]/header:group-[&.is-active]/link:[-webkit-text-stroke:0.5px_#1E1E1E]
                                        min-lg:group-[&.is-transparent.is-fixed]/header:group-hover/menu-item:[-webkit-text-stroke:0.5px_var(--main-500)]

                                        "><?= $item['title'] ?></span>
                                        <div class="line-field absolute left-0 bottom-[-31px] w-full h-[1px] bg-main-500 group-[&.is-transparent]/header:bg-white scale-x-0 duration-350 origin-left group-[&.is-active]/link:scale-x-100 group-hover/menu-item:scale-x-100 lg:hidden group-[&.is-transparent]/header:group-[&.is-fixed]/header:bg-main-500"></div>
                                    </a>
                                    <!-- SUB MENU TRIGGER -->
                                    <div class="sub-trigger group/sub-trigger absolute right-[30px] top-[7px] w-[30px] h-[30px] bg-main-500 justify-center items-center hidden cursor-pointer rounded-none duration-350 [&.is-active]:bg-main-300 lg:group-[&.has-sub-menu]/menu-item:flex z-20 rtl:left-[30px] rtl:right-auto">
                                        <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-350 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
                                        <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-350 rounded-full"></div>
                                    </div>
                                    <!-- SUB MENU LIST -->
                                    <?php if (isset($item['sub-menu'])) : ?>
                                        <!-- SUB MENU | TYPE 1 -->
                                        <?php if ($item['sub-menu'] == "type-1") : ?>
                                            <div class="sub-menu type-1 min-lg:absolute min-lg:left-0 min-lg:top-full min-lg:w-full min-lg:bg-white min-lg:translate-y-[10px] duration-350
                                            min-lg:opacity-0 min-lg:invisible min-lg:pointer-events-none min-lg:group-hover/menu-item:opacity-100 min-lg:group-hover/menu-item:translate-y-0 min-lg:group-hover/menu-item:visible min-lg:group-hover/menu-item:pointer-events-auto
                                            min-lg:before:absolute min-lg:before:left-0 min-lg:before:top-[calc(-32px-10px)] min-lg:before:h-[calc(32px+10px)] min-lg:before:w-full min-lg:before:duration-350 min-lg:group-hover/menu-item:before:top-[calc(-32px)] min-lg:group-hover/menu-item:before:h-[calc(32px)] min-lg:before:bg-transparent
                                            lg:hidden lg:[&.is-active]:block">
                                                <div class="background bg-[#000000] opacity-2 absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none lg:hidden"></div>
                                                <div class="container max-w-[1560px] relative z-20 lg:px-0">
                                                    <div class="wrapper grid grid-cols-[minmax(0,4.1fr)_minmax(0,10fr)] gap-0 lg:grid-cols-1">
                                                        <div class="content-field relative py-[80px] 2xl:py-[40px] xl:py-[30px] lg:py-0 min-lg:pr-[30px]">
                                                            <div class="content-background bg-white absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none shadow-[0px_4px_250px_0px_rgba(0,0,0,0.05)] lg:hidden"></div>
                                                            <div class="content-split-wrapper absolute top-1/2 -translate-y-1/2 w-full h-full z-20 lg:hidden py-[80px] 2xl:py-[40px] xl:py-[30px] lg:py-0">
                                                                <div class="content-split-field flex flex-col gap-[35px] 2xl:gap-[30px] xl:gap-[25px] lg:gap-0 min-lg:max-h-[440px] min-lg:min-h-[440px] min-lg:scrollbar min-lg:scrollbar-w-[0px] min-lg:scrollbar-track-rounded-[5px] min-lg:scrollbar-thumb-rounded-[5px] min-lg:scrollbar-thumb-primary min-lg:scrollbar-track-primary/10 min-lg:overflow-x-hidden min-lg:overflow-y-auto">
                                                                    <?php foreach ($item['sub-menu-content'] as $key => $subItem) : ?>
                                                                        <div class="content-split h-[24px] shrink-0 flex items-center w-full">
                                                                            <div class="split w-0 h-[1px] bg-main-500 duration-350 group-hover/link:w-full group-[&.is-active]/link:w-full ease-manidar z-20 lg:hidden"></div>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                            <ul class="sub-menu-ul flex flex-col gap-[35px] 2xl:gap-[30px] xl:gap-[25px] lg:gap-0 relative z-20 min-lg:max-h-[440px] min-lg:min-h-[440px] min-lg:scrollbar min-lg:scrollbar-w-[5px] min-lg:scrollbar-track-rounded-[5px] min-lg:scrollbar-thumb-rounded-[5px] min-lg:scrollbar-thumb-primary min-lg:scrollbar-track-primary/10 min-lg:overflow-x-hidden min-lg:overflow-y-auto">
                                                                <?php foreach ($item['sub-menu-content'] as $key => $subItem) : ?>
                                                                    <li class="lg:relative sub-menu-li">
                                                                        <a href="<?= $subItem['link'] ?>" class="sub-menu-link flex items-center gap-[23px] 2xl:gap-[20px] xl:gap-[15px] lg:px-[40px] lg:py-[10px] group/link relative lg:border-0 lg:border-b lg:border-solid lg:border-black/15">
                                                                            <span class="text text-[#1E1E1E] leading-tight text-[19px] lg:text-[14px] duration-350 group-hover/link:text-main-500 min-lg:group-hover/link:[-webkit-text-stroke:0.5px_var(--main-500)] group-[&.is-active]/link:text-main-500 min-lg:[-webkit-text-stroke:0.5px_transparent] min-lg:group-[&.is-active]/link:[-webkit-text-stroke:0.5px_var(--main-500)]"><?= $subItem['title'] ?></span>
                                                                        </a>
                                                                        <!-- SUB MENU TRIGGER -->
                                                                        <div class="sub-trigger group/sub-trigger absolute right-[30px] top-[4px] w-[30px] h-[30px] bg-main-500 justify-center items-center hidden cursor-pointer rounded-none duration-350 [&.is-active]:bg-main-300 lg:group-[&.has-sub-menu]/menu-item:flex z-20 rtl:left-[30px] rtl:right-auto">
                                                                            <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-350 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
                                                                            <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-350 rounded-full"></div>
                                                                        </div>
                                                                        <!-- MOBIL MENU ALANI | BU ALAN SADECE MOBIL TARAFINDA GÖRÜNMEKTEDİR. WEB TARAFINDA GİZLENMEKTEDİR. -->
                                                                        <div class="mobile-menu-field hidden lg:hidden [&.is-active]:block">
                                                                            <ul>
                                                                                <?php foreach ($subItem['sub-menu-content-2'] as $key => $subContent2) : ?>
                                                                                    <li class="lg:relative">
                                                                                        <a href="<?= $subContent2['link'] ?>" class="flex items-center gap-[23px] 2xl:gap-[20px] xl:gap-[15px] lg:px-[50px] lg:py-[10px] group/link relative lg:border-0 lg:border-b lg:border-solid lg:border-black/15">
                                                                                            <span class="text text-[#1E1E1E] leading-tight text-[19px] lg:text-[14px] duration-350 group-hover/link:text-main-500 min-lg:group-hover/link:font-semibold group-[&.is-active]/link:text-main-500 min-lg:group-[&.is-active]/link:font-semibold"><?= $subContent2['title'] ?></span>
                                                                                        </a>
                                                                                        <!-- SUB MENU TRIGGER -->
                                                                                        <div class="sub-trigger group/sub-trigger absolute right-[30px] top-[4px] w-[30px] h-[30px] bg-main-500 justify-center items-center hidden cursor-pointer rounded-none duration-350 [&.is-active]:bg-main-300 lg:group-[&.has-sub-menu]/menu-item:flex z-20 rtl:left-[30px] rtl:right-auto">
                                                                                            <div class="icon w-[2px] h-[15px] sm:h-[12px] absolute left-1/2 -translate-x-1/2 bg-white duration-350 group-[&.is-active]/sub-trigger:rotate-90 rounded-full"></div>
                                                                                            <div class="icon w-[15px] h-[2px] sm:w-[12px] bg-white duration-350 rounded-full"></div>
                                                                                        </div>
                                                                                        <div class="hidden [&.is-active]:block bg-black/15">
                                                                                            <ul>
                                                                                                <?php foreach ($subContent2['sub-menu-content-3'] as $key => $subContent3) : ?>
                                                                                                    <li>
                                                                                                        <a href="<?= $subContent3['link'] ?>" class="flex items-center gap-[23px] 2xl:gap-[20px] xl:gap-[15px] lg:px-[60px] lg:py-[10px] group/link relative lg:border-0 lg:border-b lg:border-solid lg:border-black/15">
                                                                                                            <span class="text text-[#1E1E1E] leading-tight text-[19px] lg:text-[14px] duration-350 group-hover/link:text-main-500 min-lg:group-hover/link:font-semibold group-[&.is-active]/link:text-main-500 min-lg:group-[&.is-active]/link:font-semibold"><?= $subContent3['title'] ?></span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                <?php endforeach; ?>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </li>
                                                                                <?php endforeach; ?>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                        <!-- WEB MENU ALANI | BU ALAN SADECE WEB TARAFINDA GÖRÜNMEKTEDİR. MOBİL TARAFINDA GİZLENMEKTEDİR. -->
                                                        <div class="sub-menu-content-field lg:hidden pl-[85px] 2xl:pl-[60px] xl:pl-[45px] py-[80px] 2xl:py-[40px] xl:py-[30px] lg:py-0 rtl:pl-0 rtl:2xl:pl-0 rtl:xl:pl-0 rtl:pr-[85px] rtl:2xl:pr-[60px] rtl:xl:pr-[45px]">
                                                            <div class="sub-menu-wrapper relative">
                                                                <?php foreach ($item['sub-menu-content'] as $initkey => $subItem) : ?>
                                                                    <div class="sub-menu-content absolute left-0 top-0 w-full opacity-0 invisible translate-y-[10px] [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 duration-350 h-[440px] [&.is-active]:delay-250 group/sub-menu-content">
                                                                        <div class="top-selector-field relative group/top-selector">
                                                                            <ul class="sub-menu-ul flex gap-[60px] 2xl:gap-[40px] lg:gap-[30px]">
                                                                                <?php foreach ($subItem['sub-menu-content-2'] as $key => $subContent2) : ?>
                                                                                    <li>
                                                                                        <!-- BURAYA LİNK VERİLEBİLİR. -->
                                                                                        <!-- MEVCUT YAPIDA TIKLAYINCA AŞAĞISI DEĞİŞMEKTEDİR. LİNK OLDUĞU ZAMAN TIKLAYINCA DİREK LİNKE GİDECEKTİR. -->
                                                                                        <!-- MEVCUT YAPIYA LİNK VERİLİRSE, HOVER İLE DEĞİŞİM SEÇENEĞİ KULLANILABİLİR. BUNUN İÇİN ".is-clickable" CLASSI SİLİNEBİLİR. -->
                                                                                        <a href="javascript:;" class="sub-menu-content-link flex relative group/sm-link is-clickable pb-[30px]">
                                                                                            <span class="text text-[16px] text-[#1E1E1E]/50 leading-tight duration-350 font-semibold group-hover/sm-link:text-[#1E1E1E] group-[&.is-active]/sm-link:text-[#1E1E1E] text-center"><?= $subContent2['title'] ?></span>
                                                                                            <div class="split absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[2px] bg-main-500 duration-350 group-hover/sm-link:w-1/2 group-[&.is-active]/sm-link:w-1/2"></div>
                                                                                        </a>
                                                                                    </li>
                                                                                <?php endforeach; ?>
                                                                            </ul>
                                                                            <div class="split w-full h-[1px] bg-black/10 absolute left-0 bottom-0"></div>
                                                                        </div>
                                                                        <div class="sub-menu-main-content mt-[30px] relative h-[360px]">
                                                                            <?php foreach ($subItem['sub-menu-content-2'] as $keyet => $subContent2) : ?>
                                                                                <div class="sub-menu-main-field absolute left-0 top-0 w-full h-full opacity-0 invisible translate-y-[10px] duration-350 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 [&.is-active]:delay-250">
                                                                                    <div class="sub-menu-main-wrapper grid grid-cols-[minmax(0,4.8fr)_minmax(0,4.4fr)] gap-[10px]">
                                                                                        <div class="image-wrapper relative aspect-[488/360] max-w-[488px] w-full h-full">
                                                                                            <?php foreach ($subContent2['sub-menu-content-3'] as $keyer => $subContent3) : ?>
                                                                                                <div class="sub-menu-image sub-menu-image-left image w-full h-full overflow-hidden translate-z-0 absolute left-0 top-0 z-20 opacity-0 invisible translate-y-[10px] duration-350 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 group/image pointer-events-none <?php if ($keyer == 0) : ?>is-active<?php endif; ?>" data-id="<?= $initkey . $keyet . $keyer ?>">
                                                                                                    <img src="<?= $subContent3['image'] ?>" class="full-cover duration-350 group-hover/image:scale-105" alt="">
                                                                                                </div>
                                                                                            <?php endforeach; ?>
                                                                                            <div class="image-splat absolute left-[-10px] bottom-[-10px] w-full h-full max-w-[200px] max-h-[200px] bg-main-500 pointer-events-none"></div>
                                                                                        </div>
                                                                                        <div class="sub-menu-main-list">
                                                                                            <ul class="sub-menu-main-ul flex flex-col gap-[50px] h-full justify-center">
                                                                                                <?php foreach ($subContent2['sub-menu-content-3'] as $keyer => $subContent3) : ?>
                                                                                                    <li>
                                                                                                        <a href="<?= $subContent3['link'] ?>" class="sub-menu-main-link flex items-center gap-[20px] group/smm-link" data-id="<?= $initkey . $keyet . $keyer ?>">
                                                                                                            <div class="split-line w-0 h-[2px] bg-main-500 duration-350 group-hover/smm-link:w-[12px]"></div>
                                                                                                            <span class="text text-[18px] leading-tight text-[#1E1E1E] group-hover/smm-link:text-main-500 duration-350 [-webkit-text-stroke:0.5px_transparent] group-hover/smm-link:[-webkit-text-stroke:0.5px_var(--main-500)]"><?= $subContent3['title'] ?></span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                <?php endforeach; ?>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php endforeach; ?>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <!-- SUB MENU | TYPE 2 -->
                                        <?php if ($item['sub-menu'] == "type-2") : ?>
                                            <div class="sub-menu type-2 min-lg:absolute min-lg:left-0 min-lg:top-full min-lg:w-full min-lg:bg-white min-lg:translate-y-[10px] duration-350
                                            min-lg:opacity-0 min-lg:invisible min-lg:pointer-events-none min-lg:group-hover/menu-item:opacity-100 min-lg:group-hover/menu-item:translate-y-0 min-lg:group-hover/menu-item:visible min-lg:group-hover/menu-item:pointer-events-auto
                                            min-lg:before:absolute min-lg:before:left-0 min-lg:before:top-[calc(-32px-10px)] min-lg:before:h-[calc(32px+10px)] min-lg:before:w-full min-lg:before:duration-350 min-lg:group-hover/menu-item:before:top-[calc(-32px)] min-lg:group-hover/menu-item:before:h-[calc(32px)] min-lg:before:bg-transparent
                                            lg:hidden lg:[&.is-active]:block">
                                                <div class="background bg-[#000000] opacity-2 absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none lg:hidden"></div>
                                                <div class="container max-w-[1560px] relative z-20 lg:px-0">
                                                    <div class="wrapper grid grid-cols-[minmax(0,4.1fr)_minmax(0,10fr)] gap-0 lg:grid-cols-1">
                                                        <div class="content-field relative py-[50px] 2xl:py-[40px] xl:py-[30px] lg:py-0 min-lg:pr-[30px]">
                                                            <div class="content-background bg-white absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none shadow-[0px_4px_250px_0px_rgba(0,0,0,0.05)] lg:hidden"></div>
                                                            <div class="content-split-wrapper absolute top-1/2 -translate-y-1/2 w-full h-full z-20 lg:hidden py-[50px] 2xl:py-[40px] xl:py-[30px] lg:py-0">
                                                                <div class="content-split-field flex flex-col gap-[35px] 2xl:gap-[30px] xl:gap-[25px] lg:gap-0 min-lg:max-h-[462px] min-lg:min-h-[462px] min-lg:scrollbar min-lg:scrollbar-w-[0px] min-lg:scrollbar-track-rounded-[5px] min-lg:scrollbar-thumb-rounded-[5px] min-lg:scrollbar-thumb-primary min-lg:scrollbar-track-primary/10 min-lg:overflow-x-hidden min-lg:overflow-y-auto">
                                                                    <?php foreach ($item['sub-menu-content'] as $key => $subItem) : ?>
                                                                        <div class="content-split h-[36px] shrink-0 flex items-center w-full">
                                                                            <div class="split w-0 h-[1px] bg-main-500 duration-350 group-hover/link:w-full group-[&.is-active]/link:w-full ease-manidar z-20 lg:hidden"></div>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                            <ul class="sub-menu-ul flex flex-col gap-[35px] 2xl:gap-[30px] xl:gap-[25px] lg:gap-0 relative z-20 min-lg:max-h-[462px] min-lg:min-h-[462px] min-lg:scrollbar min-lg:scrollbar-w-[5px] min-lg:scrollbar-track-rounded-[5px] min-lg:scrollbar-thumb-rounded-[5px] min-lg:scrollbar-thumb-primary min-lg:scrollbar-track-primary/10 min-lg:overflow-x-hidden min-lg:overflow-y-auto">
                                                                <?php foreach ($item['sub-menu-content'] as $key => $subItem) : ?>
                                                                    <li>
                                                                        <a href="<?= $subItem['link'] ?>" class="sub-menu-link flex items-center gap-[23px] 2xl:gap-[20px] xl:gap-[15px] lg:px-[40px] lg:py-[10px] group/link relative lg:border-0 lg:border-b lg:border-solid lg:border-black/15">
                                                                            <div class="image aspect-square max-w-[36px] w-full h-full overflow-hidden translate-z-0 lg:hidden shrink-0">
                                                                                <img src="<?= $subItem['icon'] ?>" class="full-contain grayscale duration-350 group-hover/link:grayscale-0 group-[&.is-active]/link:grayscale-0" alt="">
                                                                            </div>
                                                                            <span class="text text-[#1E1E1E] leading-tight text-[19px] lg:text-[14px] duration-350 min-lg:[-webkit-text-stroke:0.5px_transparent] group-hover/link:text-main-500 min-lg:group-hover/link:[-webkit-text-stroke:0.5px_var(--main-500)] group-[&.is-active]/link:text-main-500 min-lg:group-[&.is-active]/link:[-webkit-text-stroke:0.5px_var(--main-500)]"><?= $subItem['title'] ?></span>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                        <div class="image-field lg:hidden py-[50px] 2xl:py-[40px] xl:py-[30px] lg:py-0 pl-[85px] 2xl:pl-[60px] xl:pl-[45px] rtl:pl-0 rtl:2xl:pl-0 rtl:xl:pl-0 rtl:pr-[85px] rtl:2xl:pr-[60px] rtl:xl:pr-[45px]">
                                                            <div class="image-wrapper relative w-full h-full">
                                                                <?php foreach ($item['sub-menu-content'] as $key => $subItem) : ?>
                                                                    <div class="sub-menu-image image aspect-[940/495] max-w-[940px] w-full h-full overflow-hidden translate-z-0 absolute left-0 top-0 z-20 opacity-0 invisible translate-y-[10px] duration-350 [&.is-active]:opacity-100 [&.is-active]:visible [&.is-active]:translate-y-0 group/image">
                                                                        <img src="<?= $subItem['image'] ?>" class="full-cover" alt="">
                                                                    </div>
                                                                <?php endforeach; ?>
                                                                <div class="image-splat absolute left-[-10px] bottom-[-10px] w-full h-full max-w-[200px] max-h-[200px] bg-main-500 pointer-events-none"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="split-field lg:hidden h-[34px]">
                            <div class="split w-[1px] h-full bg-black/10 group-[&.is-transparent]/header:bg-white/10 group-[&.is-fixed]/header:bg-black/10"></div>
                        </div>
                        <!-- DİĞER MENÜ ALANI -->
                        <div class="other-menu-field flex items-center gap-[20px]">
                            <!-- DİL SEÇİMİ -->
                            <div class="language-field relative group/language">
                                <div class="current-language flex items-center gap-[5px] group/current-language cursor-pointer">
                                    <i class="icon icon-earth text-[18px] h-[18px] text-[#1E1E1E] group-[&.is-transparent]/header:text-white group-hover/language:text-main-500 group-[&.is-transparent]/header:group-hover/language:text-white block leading-none duration-350 mr-[5px] xl:mr-0 group-[&.is-active]/header:text-[#1E1E1E] group-[&.is-active]/header:group-hover/language:text-main-500 group-[&.is-fixed]/header:text-[#1E1E1E] group-[&.is-fixed]/header:group-hover/language:text-main-500 group-[&.is-transparent]/header:group-[&.is-active]/header:text-[#1E1E1E] group-[&.is-transparent]/header:group-[&.is-active]/header:group-hover/language:text-main-500 group-[&.is-transparent.is-fixed]/header:text-black group-[&.is-transparent.is-fixed]/header:group-hover/language:text-main-500"></i>
                                    <span class="text text-[18px] duration-350 text-[#1E1E1E] group-[&.is-transparent]/header:text-white group-hover/language:text-main-500 group-[&.is-transparent]/header:group-hover/language:text-white leading-tight group-[&.is-active]/header:text-[#1E1E1E] group-[&.is-active]/header:group-hover/language:text-main-500 group-[&.is-fixed]/header:text-[#1E1E1E] group-[&.is-fixed]/header:group-hover/language:text-main-500 group-[&.is-transparent]/header:group-[&.is-active]/header:text-[#1E1E1E] group-[&.is-transparent]/header:group-[&.is-active]/header:group-hover/language:text-main-500 group-[&.is-transparent.is-fixed]/header:text-black group-[&.is-transparent.is-fixed]/header:group-hover/language:text-main-500">TR</span>
                                    <i class="icon icon-chevron-bottom text-[8px] h-[8px] text-[#1E1E1E] group-[&.is-transparent]/header:text-white group-hover/language:text-main-500 group-[&.is-transparent]/header:group-hover/language:text-white block leading-none duration-350 group-hover/language:rotate-180 group-[&.is-active]/header:text-[#1E1E1E] group-[&.is-active]/header:group-hover/language:text-main-500 group-[&.is-fixed]/header:text-[#1E1E1E] group-[&.is-fixed]/header:group-hover/language:text-main-500 group-[&.is-transparent]/header:group-[&.is-active]/header:text-[#1E1E1E] group-[&.is-transparent]/header:group-[&.is-active]/header:group-hover/language:text-main-500 group-[&.is-transparent.is-fixed]/header:text-black group-[&.is-transparent.is-fixed]/header:group-hover/language:text-main-500"></i>
                                </div>
                                <div class="other-language absolute left-0 top-[calc(100%+32px)] duration-350 opacity-0 invisible pointer-events-none translate-y-[10px] group-hover/language:opacity-100 group-hover/language:pointer-events-auto group-hover/language:visible group-hover/language:translate-y-0 before:absolute before:left-0 before:top-[calc(-32px-10px)] before:h-[calc(32px+10px)] before:w-full before:duration-350 group-hover/language:before:top-[calc(-32px)] group-hover/language:before:h-[calc(32px)] before:bg-transparent z-100">
                                    <div class="content bg-white p-[20px] shadow-[0px_10px_30px_0px_rgba(0,0,0,0.05)]">
                                        <ul class="flex flex-col gap-[15px]">
                                            <?php $list = [
                                                [
                                                    "text" => "EN",
                                                    "flag" => "assets/image/static/flag-en.png",
                                                ],
                                                [
                                                    "text" => "AR",
                                                    "flag" => "assets/image/static/flag-ar.png",
                                                ],
                                                [
                                                    "text" => "RU",
                                                    "flag" => "assets/image/static/flag-ru.png",
                                                ],
                                                [
                                                    "text" => "ES",
                                                    "flag" => "assets/image/static/flag-es.png",
                                                ],
                                                [
                                                    "text" => "FR",
                                                    "flag" => "assets/image/static/flag-fr.png",
                                                ],
                                            ]; ?>

                                            <?php foreach ($list as $key => $item) : ?>
                                                <li>
                                                    <a href="javascript:;" class="flex items-center gap-[5px] group/link">
                                                        <div class="image h-[16px] w-[16px] overflow-hidden translate-z-0 rounded-full">
                                                            <img src="<?= $item['flag'] ?>" class="full-cover" alt="">
                                                        </div>
                                                        <span class="text text-[16px] leading-tight duration-350 text-[#111111] group-hover/link:text-main-500"><?= $item['text'] ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- MOBIL MENU -->
                            <div class="mobile-menu-selector group/mobile-menu-selector hidden lg:flex relative">
                                <div class="trigger h-[40px] w-[40px] square-hover cursor-pointer flex items-center justify-center before:absolute before:left-1/2 before:top-1/2 before:w-full before:h-full before:[transform-origin:50%_100%] before:-translate-x-1/2 before:-translate-y-1/2 before:scale-y-0 before:duration before:bg-main-500 before:duration-350 group-hover/mobile-menu-selector:before:scale-y-100 border border-solid border-black/15 group-[&.is-transparent]/header:group-[&.is-fixed]/header:border-black/15 group-[&.is-transparent]/header:border-white/15 group-[&.is-active]/header:border group-[&.is-active]/header:border-solid group-[&.is-active]/header:border-black/15 group-[&.is-fixed]/header:border-black/15 group-[&.is-transparent]/header:group-[&.is-active]/header:border-black/15 group-[&.is-active]/mobile-menu-selector:before:!scale-y-100">
                                    <svg class="w-[20px] h-[20px] duration-350 group-hover/mobile-menu-selector:scale-[0.8] group-[&.is-active]/mobile-menu-selector:scale-[0.8]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 319.24 63.99">
                                        <path class="duration-350 fill-main-500 group-[&.is-transparent]/header:fill-white group-[&.is-transparent]/header:group-[&.is-fixed]/header:fill-main-500 group-[&.is-active]/header:fill-main-500 group-hover/mobile-menu-selector:fill-white group-[&.is-fixed]/header:fill-main-500 group-[&.is-transparent]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-transparent]/header:group-[&.is-active]/header:fill-main-500 group-[&.is-fixed]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-active]/mobile-menu-selector:!fill-white" d="M191.59,31.91c.08,17.46-14.24,31.9-31.8,32.07-17.4,.16-31.91-14.16-32.14-31.72C127.41,14.73,142.03,0,159.63,0c17.5,.02,31.88,14.37,31.95,31.91Z"></path>
                                        <path class="duration-350 fill-main-500 group-[&.is-transparent]/header:fill-white group-[&.is-transparent]/header:group-[&.is-fixed]/header:fill-main-500 group-[&.is-active]/header:fill-main-500 group-hover/mobile-menu-selector:fill-white group-[&.is-fixed]/header:fill-main-500 group-[&.is-transparent]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-transparent]/header:group-[&.is-active]/header:fill-main-500 group-[&.is-fixed]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-active]/mobile-menu-selector:!fill-white group-[&.is-active]/mobile-menu-selector:translate-y-[-175%]" d="M319.24,31.85c.07,17.64-13.98,31.92-31.62,32.13-17.4,.21-32.02-14.18-32.16-31.66C255.32,14.59,269.64,.07,287.33,0c17.5-.07,31.84,14.23,31.91,31.85Z"></path>
                                        <path class="duration-350 fill-main-500 group-[&.is-transparent]/header:fill-white group-[&.is-transparent]/header:group-[&.is-fixed]/header:fill-main-500 group-[&.is-active]/header:fill-main-500 group-hover/mobile-menu-selector:fill-white group-[&.is-fixed]/header:fill-main-500 group-[&.is-transparent]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-transparent]/header:group-[&.is-active]/header:fill-main-500 group-[&.is-fixed]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-active]/mobile-menu-selector:!fill-white group-[&.is-active]/mobile-menu-selector:translate-y-[175%]" d="M319.24,31.85c.07,17.64-13.98,31.92-31.62,32.13-17.4,.21-32.02-14.18-32.16-31.66C255.32,14.59,269.64,.07,287.33,0c17.5-.07,31.84,14.23,31.91,31.85Z"></path>
                                        <path class="duration-350 fill-main-500 group-[&.is-transparent]/header:fill-white group-[&.is-transparent]/header:group-[&.is-fixed]/header:fill-main-500 group-[&.is-active]/header:fill-main-500 group-hover/mobile-menu-selector:fill-white group-[&.is-fixed]/header:fill-main-500 group-[&.is-transparent]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-transparent]/header:group-[&.is-active]/header:fill-main-500 group-[&.is-fixed]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-active]/mobile-menu-selector:!fill-white group-[&.is-active]/mobile-menu-selector:translate-y-[-175%]" d="M63.78,32.14c-.06,17.51-14.48,31.88-31.97,31.85C14.28,63.96,.02,49.63,0,32.03-.02,14.28,14.54-.24,32.1,0c17.63,.25,31.74,14.57,31.68,32.13Z"></path>
                                        <path class="duration-350 fill-main-500 group-[&.is-transparent]/header:fill-white group-[&.is-transparent]/header:group-[&.is-fixed]/header:fill-main-500 group-[&.is-active]/header:fill-main-500 group-hover/mobile-menu-selector:fill-white group-[&.is-fixed]/header:fill-main-500 group-[&.is-transparent]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-transparent]/header:group-[&.is-active]/header:fill-main-500 group-[&.is-fixed]/header:group-hover/mobile-menu-selector:fill-white group-[&.is-active]/mobile-menu-selector:!fill-white group-[&.is-active]/mobile-menu-selector:translate-y-[175%]" d="M63.78,32.14c-.06,17.51-14.48,31.88-31.97,31.85C14.28,63.96,.02,49.63,0,32.03-.02,14.28,14.54-.24,32.1,0c17.63,.25,31.74,14.57,31.68,32.13Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<penta-yazilim class="block">
    <div id="smooth-wrapper" class="block">
        <div id="smooth-content">