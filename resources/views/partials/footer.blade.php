<?php
    $footerInfo = App\Models\FooterInfo::where('lang', app()->getLocale())->first();
    //$footerMenu = App\Models\Menu::where(['parent_menu_id' => 0, 'menu_type' => 'footer', 'lang' => app()->getLocale()])->with('children')->get();
$footerMenu = [
    [
        "title" => "Services",
        "footer-menu" => [
            [
                "title" => "Football Pitch",
                "link" => "service-detail.php",
            ],
            [
                "title" => "Soccer Pitch",
                "link" => "service-detail.php",
            ],
            [
                "title" => "Multipurpose Fields",
                "link" => "service-detail.php",
            ],
            [
                "title" => "Tennis Courts",
                "link" => "service-detail.php",
            ],
            [
                "title" => "Padel",
                "link" => "service-detail.php",
            ],
        ],
    ],
    [
        "title" => "Using Areas",
        "footer-menu" => [
            [
                "title" => "Design",
                "link" => "using-area-detail.php",
            ],
            [
                "title" => "Installation",
                "link" => "using-area-detail.php",
            ],
            [
                "title" => "Maintenance",
                "link" => "using-area-detail.php",
            ],
            [
                "title" => "Turnkey Projects",
                "link" => "using-area-detail.php",
            ],
            [
                "title" => "Renovations",
                "link" => "using-area-detail.php",
            ],
        ],
    ],
    [
        "title" => "Sport Grass",
        "footer-menu" => [
            [
                "title" => "Football Grass",
                "link" => "sport-grass-detail.php",
            ],
            [
                "title" => "Hybrid Grass",
                "link" => "sport-grass-detail.php",
            ],
            [
                "title" => "Multipurpose Grass",
                "link" => "sport-grass-detail.php",
            ],
            [
                "title" => "Padel Turf",
                "link" => "sport-grass-detail.php",
            ],
            [
                "title" => "Tennis Grass",
                "link" => "sport-grass-detail.php",
            ],
        ],
    ],
    [
        "title" => "Company",
        "footer-menu" => [
            [
                "title" => "Who We Are",
                "link" => "about.php",
            ],
            [
                "title" => "Privacy Policy",
                "link" => "page.php",
            ],
            [
                "title" => "GPDR",
                "link" => "page.php",
            ],
            [
                "title" => "Certificates",
                "link" => "certificates.php",
            ],
        ],
    ],
    [
        "title" => "Project",
        "footer-menu" => [
            [
                "title" => "Kıbrıs Padel Cort",
                "link" => "project-detail.php",
            ],
            [
                "title" => "Rwanda Nizami Saha",
                "link" => "project-detail.php",
            ],
            [
                "title" => "Kongo Goma",
                "link" => "project-detail.php",
            ],
            [
                "title" => "Kongo Bunya",
                "link" => "project-detail.php",
            ],
        ],
    ],
    [
        "title" => "Landspace Grass",
        "footer-menu" => [
            [
                "title" => "Garden Grass",
                "link" => "landscape-detail.php",
            ],
            [
                "title" => "Playground Grass",
                "link" => "landscape-detail.php",
            ],
            [
                "title" => "Decorative Grass",
                "link" => "landscape-detail.php",
            ],
        ],
    ],
];
?>
 <footer class="footer-field z-10 block relative border-0 border-t-2 border-solid border-main-500<?= !empty($fc) ? ' ' . $fc : ''; ?>">
    <div class="footer-top relative">
        <div class="container max-w-[1500px]">
            <div class="wrapper grid grid-cols-[minmax(0,3.8fr)_minmax(0,9.8fr)] md:grid-cols-1">
                <div class="logo-content pt-[100px] pb-[80px] md:py-[30px] relative">
                    <div class="footer-top-background bg-[#F9F2F2] absolute top-0 left-0 w-full h-full z-2 translate-z-0"></div>
                    <div class="content relative z-20 flex flex-col gap-[110px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px]">
                        <!-- LOGO FIELD -->
                        <div class="logo-field w-fit md:mx-auto">
                            <a href="index.php" class="flex justify-start">
                                <div class="image overflow-hidden max-w-[315px] w-full">
                                    <img src="assets/image/trademark/logo.png" class="w-full h-full object-contain object-center" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- IMAGE FIELD -->
                        <div class="footer-image-field relative pointer-events-none md:hidden pr-[60px] xl:pr-[45px] lg:pr-[30px] md:pr-0 rtl:-scale-x-100">
                            <div class="gradient [background:_linear-gradient(90deg,_#F9F2F2_0%,_rgba(249,_242,_242,_0.00)_100%)] absolute top-0 left-0 w-[40%] h-full z-2 translate-z-0"></div>
                            <div class="image aspect-[790/500] max-h-[500px] w-full h-full overflow-hidden translate-z-0">
                                <img src="assets/image/other/footer-image.png" class="full-cover !object-right" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOOTER MENU -->
                <div class="footer-menu-field sm:hidden relative">
                    <div class="footer-top-background-image absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none">
                        <img src="assets/image/static/footer-background-2.png" class="full-cover" alt="">
                    </div>
                    <div class="menu-content py-[95px] md:py-[30px] relative z-20">
                        <div class="wrapper grid grid-cols-3 gap-y-[100px] gap-x-[30px] 2xl:gap-y-[80px] xl:gap-y-[60px] lg:gap-y-[40px] md:gap-[20px] pl-[70px] 2xl:pl-[60px] xl:pl-[40px] lg:pl-[30px] md:pl-0">
                            <?php foreach ($footerMenu as $key => $item) : ?>
                                <div class="item footer-menu-item group/item">
                                    <div class="content flex flex-col gap-[35px] lg:gap-[30px] md:gap-[20px]">
                                        <div class="title-field">
                                            <p class="title text-[22px] md:text-[20px] sm:text-[18px] leading-tight text-main-500 font-semibold"><?= $item['title'] ?></p>
                                        </div>
                                        <div class="content-field">
                                            <ul class="flex flex-col gap-[20px]">
                                                <?php foreach ($item['footer-menu'] as $key => $footerLinks) : ?>
                                                    <li>
                                                        <a href="<?= $footerLinks['link'] ?>" class="flex items-center gap-[10px] w-fit group/link">
                                                            <span class="text text-[18px] md:text-[16px] text-[#1E1E1E]/85 leading-tight duration-350 group-hover/link:translate-x-[3px] group-hover/link:text-main-500 [-webkit-text-stroke:0.5px_transparent] group-hover/link:[-webkit-text-stroke:0.5px_var(--main-500)]"><?= $footerLinks['title'] ?></span>
                                                            <i class="icon icon-arrow-right-2 text-[16px] h-[16px] text-main-500 block leading-none duration-350 scale-0 group-hover/link:translate-x-[3px] group-hover/link:scale-100"></i>
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
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle relative py-[35px] md:py-[35px] sm:py-[30px] xs:py-[20px]">
        <div class="background bg-[#AB3433] absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
        <div class="background-image absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none">
            <img src="assets/image/static/footer-background-1.png" class="full-cover" alt="">
        </div>
        <div class="container max-w-[1500px] relative z-20">
            <div class="wrapper flex justify-between gap-[75px] 2xl:gap-[60px] xl:gap-[45px] lg:gap-[30px] md:flex-col sm:gap-[20px] xs:gap-[15px]">
                <!-- İLETİŞİM BİLGİLERİ -->
                <div class="contact-information-field w-full">
                    <div class="content grid grid-cols-3 gap-[75px] 2xl:gap-[60px] xl:gap-[45px] lg:gap-[30px] md:gap-[20px] xs:gap-[15px] [&_.item:last-child_.split-field]:hidden sm:grid-cols-1 md:[&_.item:last-child_.content]:pb-0">
                        <?php $list = [
                            [
                                "title" => "Address",
                                "expo" => "Orta Mahalle, Kanuni Sk. No:1<br> Kat 3, 34880 Kartal/İstanbul",
                                "expo-class" => "text-[18px] md:text-[16px] sm:text-[16px] md:text-center",
                            ],
                            [
                                "title" => "Phone",
                                "expo" => "+90 (212) 678 13 13",
                                "expo-class" => "text-[30px] 2xl:text-[26px] xl:text-[24px] lg:text-[20px] md:text-[16px] sm:text-[16px] font-light sm:font-normal md:text-center",
                            ],
                            [
                                "title" => "E-Mail",
                                "expo" => "info@wemobile.com",
                                "expo-class" => "text-[30px] 2xl:text-[26px] xl:text-[24px] lg:text-[20px] md:text-[16px] sm:text-[16px] font-light sm:font-normal md:text-center",
                            ],
                        ]; ?>

                        <?php foreach ($list as $key => $item) : ?>
                            <div class="item contact-item group/item relative flex gap-[75px] 2xl:gap-[60px] xl:gap-[45px] lg:gap-[30px] md:gap-[20px] md:justify-center">
                                <div class="content flex flex-col justify-between h-full gap-[10px] py-[15px] md:py-0 sm:pb-[20px] xs:pb-[15px]">
                                    <div class="title-field flex gap-[10px] md:justify-center">
                                        <p class="title text-[16px] leading-tight font-semibold text-white"><?= $item['title'] ?></p>
                                    </div>
                                    <div class="text-field">
                                        <a href="javascript:;" class="flex group/link">
                                            <span class="text leading-tight text-white duration-350 group-hover/link:translate-x-[3px] <?= $item['expo-class'] ?>"><?= $item['expo'] ?></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="split-field block absolute right-0 h-full w-[1px] sm:w-full sm:h-[1px] sm:right-auto sm:left-0 sm:bottom-0">
                                    <div class="split w-[1px] h-full bg-white/10 sm:w-full sm:h-[1px]"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- SOSYAL MEDYA -->
                <div class="social-media-field relative">
                    <div class="split-field hidden md:block mb-[30px] sm:mb-[20px] xs:mb-[15px]">
                        <div class="split w-full h-[1px] bg-white/10"></div>
                    </div>
                    <div class="content flex flex-col justify-between h-full gap-[25px] lg:gap-[20px] md:gap-[15px] py-[15px] md:py-0 md:justify-center">
                        <div class="title-field flex gap-[10px] md:justify-center">
                            <p class="title text-[16px] leading-tight font-semibold text-white">Social Media</p>
                        </div>
                        <?php $list = [
                            "icon-facebook",
                            "icon-instagram",
                            "icon-linkedin",
                            "icon-youtube",
                            // "icon-pinterest",
                        ]; ?>

                        <ul class="flex gap-[30px] lg:gap-[20px] md:gap-[15px] sm:gap-[10px] min-md:min-h-[25px] md:justify-center">
                            <?php foreach ($list as $key => $item) : ?>
                                <li>
                                    <a href="javascript:;" class="flex items-center group/link">
                                        <i class="icon <?= $item ?> text-[18px] h-[18px] sm:text-[16px] sm:h-[16px] text-white block leading-none duration-350 group-hover/link:text-white/70 group-hover/link:translate-y-[-3px]"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            <!-- SVG ÖRNEĞİ | EKSTRA ICON EKLENMEK İSTENİRSE KULLANILABİLİR. -->
                            <li>
                                <a href="javascript:;" class="flex items-center group/link">
                                    <svg class="w-[18px] h-[18px] sm:w-[16px] sm:h-[16px] duration-350 fill-white group-hover/link:fill-white/70 group-hover/link:translate-y-[-3px]" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 8.0006C0 11.2767 1.96999 14.0911 4.78897 15.3285C4.76647 14.7698 4.78497 14.0991 4.92823 13.4913C5.08205 12.8418 5.95766 9.13179 5.95766 9.13179C5.95766 9.13179 5.70209 8.62095 5.70209 7.86596C5.70209 6.68033 6.38925 5.79484 7.24505 5.79484C7.97278 5.79484 8.32437 6.34144 8.32437 6.99598C8.32437 7.72752 7.85778 8.82177 7.61782 9.83527C7.41738 10.6839 8.04335 11.3762 8.88059 11.3762C10.3964 11.3762 11.4174 9.42924 11.4174 7.12248C11.4174 5.369 10.2364 4.05655 8.08829 4.05655C5.6614 4.05655 4.14949 5.86641 4.14949 7.88803C4.14949 8.58507 4.35501 9.0766 4.6769 9.45725C4.82491 9.63207 4.84547 9.70238 4.79191 9.90315C4.75353 10.0503 4.6654 10.4047 4.6289 10.5452C4.57564 10.7478 4.41145 10.8203 4.22831 10.7454C3.1105 10.2891 2.5899 9.06497 2.5899 7.68889C2.5899 5.41619 4.50664 2.69103 8.30787 2.69103C11.3624 2.69103 13.3729 4.90141 13.3729 7.27412C13.3729 10.4126 11.628 12.7573 9.05597 12.7573C8.19223 12.7573 7.37975 12.2904 7.10142 11.7601C7.10142 11.7601 6.63695 13.6034 6.53857 13.9594C6.36894 14.5762 6.03692 15.1928 5.73334 15.6733C6.45288 15.8857 7.21299 16.0014 8.00078 16.0014C12.4188 16.0014 16.001 12.4194 16.001 8.0006C16.001 3.58202 12.4188 0 8.00078 0C3.58234 0 0 3.58202 0 8.0006Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom relative py-[18px]">
        <div class="background bg-[#8B2726] absolute top-0 left-0 w-full h-full z-2 translate-z-0 pointer-events-none"></div>
        <div class="container max-w-[1500px] relative z-20">
            <div class="wrapper grid grid-cols-3 items-center justify-between gap-[20px] sm:grid-cols-1">
                <div class="brand-field">
                    <p class="text text-[17px] md:text-[16px] sm:text-[14px] leading-tight text-white font-light [&_a]:duration-350 [&_a:hover]:text-white/70 [&_a]:font-semibold sm:text-center">Wemobile is a Brand of <a href="javascript:;">Integral Group</a></p>
                </div>
                <div class="copyright-field">
                    <p class="text text-[17px] md:text-[16px] sm:text-[14px] leading-tight text-white font-light [&_a]:duration-350 [&_a:hover]:text-white/70 [&_a]:font-semibold text-center">© 2023 <a href="index.php">wemobile.com</a> | All rights reserved</p>
                </div>
                <div class="signature-field flex justify-end sm:justify-center">
                    <a href="javascript:;" class="image flex max-w-[96px] w-full overflow-hidden translate-z-0 group/image">
                        <img src="assets/image/static/integral-logo.png" class="full-contain duration-350 group-hover/image:opacity-70" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
    </div>
</footer>
    </div>
    </div>
    </penta-yazilim>

    <script>
        let footerTop = document.querySelector('.footer-top');
        let footerContainer = footerTop.querySelector('.footer-top .container');
        let footerWrapper = footerContainer.querySelector('.wrapper');
        let footerIMGField = document.querySelector('.footer-image-field');
        let footerTopBG = document.querySelector('.footer-top-background');
        let footerTopBGIMG = document.querySelector('.footer-top-background-image');
        let remainWidth

        remainWidth = (footerTop.offsetWidth - footerWrapper.offsetWidth) / 2;

        if (document.querySelector('html').getAttribute('dir') == 'rtl') {
            if (window.innerWidth > 1024) {
                footerIMGField.style.width = "calc(100% + " + remainWidth + "px)";
                footerIMGField.style.left = remainWidth + 'px';
             
                footerTopBG.style.width = "calc(100% + " + remainWidth + "px)";
             
                footerTopBGIMG.style.width = "calc(100% + " + remainWidth + "px)";
                footerTopBGIMG.style.left = -remainWidth + 'px';
            } else {
                footerTopBG.style.width = "calc(100% + " + remainWidth * 2 + "px)";
                footerTopBG.style.left = -remainWidth + 'px';
                footerTopBG.style.right = -remainWidth + 'px';

                footerTopBGIMG.style.width = "calc(100% + " + remainWidth * 2 + "px)";
                footerTopBGIMG.style.left = -remainWidth + 'px';
                footerTopBGIMG.style.right = -remainWidth + 'px';
            }
        } else {
            if (window.innerWidth > 1024) {
                footerIMGField.style.width = "calc(100% + " + remainWidth + "px)";
                footerIMGField.style.left = -remainWidth + 'px';
                footerTopBG.style.width = "calc(100% + " + remainWidth + "px)";
                footerTopBG.style.left = -remainWidth + 'px';
                footerTopBGIMG.style.width = "calc(100% + " + remainWidth + "px)";
            } else {
                footerTopBG.style.width = "calc(100% + " + remainWidth * 2 + "px)";
                footerTopBG.style.left = -remainWidth + 'px';
                footerTopBG.style.right = -remainWidth + 'px';

                footerTopBGIMG.style.width = "calc(100% + " + remainWidth * 2 + "px)";
                footerTopBGIMG.style.left = -remainWidth + 'px';
                footerTopBGIMG.style.right = -remainWidth + 'px';
            }
        }
    </script>


    <!-- POPUP | GDPR -->
    <section id="popup-gdpr" class="hidden !bg-white !rounded-none !m-0 !p-[60px] md:!p-[30px] sm:!px-[15px] !max-w-[768px] w-full">
        <div class="inner w-full">
            <div class="text-editor mx-auto relative !max-w-none">
                <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                <h4><strong>KİŞİSEL VERİLERİN KORUNMASI</strong></h4>
                <h5><strong>İNTERNET SİTESİ ÇEREZ POLİTİKASI</strong></h5>

                <p>Kişisel verileriniz; veri sorumlusu olarak Firma Adı (“ŞİRKET” veya Firma Adı” olarak adlandırılacaktır.) tarafından işletilen (www.alanadi.com) internet sitesini ziyaret edenlerin gizliliğini korumak Kurumumuzun önde gelen ilkelerindendir. Bu Çerez Kullanımı Politikası (“Politika”), tüm web sitesi ziyaretçilerimize ve kullanıcılarımıza hangi tür çerezlerin hangi koşullarda kullanıldığını açıklamaktadır.</p>
                <p>Çerezler, bilgisayarınız ya da mobil cihazınız üzerinden ziyaret ettiğiniz internet siteleri tarafından cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır.</p>
                <p>Genellikle ziyaret ettiğiniz internet sitesini kullanmanız sırasında size kişiselleştirilmiş bir deneyim sunmak, sunulan hizmetleri geliştirmek ve deneyiminizi iyileştirmek için kullanılır ve bir internet sitesinde gezinirken kullanım kolaylığına katkıda bulunabilir. Çerez kullanılmasını tercih etmezseniz tarayıcınızın ayarlarından Çerezleri silebilir ya da engelleyebilirsiniz. Ancak bunun internet sitemizi kullanımınızı etkileyebileceğini hatırlatmak isteriz. Tarayıcınızdan Çerez ayarlarınızı değiştirmediğiniz sürece bu sitede çerez kullanımını kabul ettiğinizi varsayacağız.</p>

                <h6><strong>1. ÇEREZLERDE HANGİ TÜR VERİLER İŞLENİR?</strong></h6>
                <p>İnternet sitelerinde yer alan çerezlerde, türüne bağlı olarak, siteyi ziyaret ettiğiniz cihazdaki tarama ve kullanım tercihlerinize ilişkin veriler toplanmaktadır. Bu veriler, eriştiğiniz sayfalar, incelediğiniz hizmet ve ürünler, tercih ettiğiniz dil seçeneği ve diğer tercihlerinize dair bilgileri kapsamaktadır.</p>

                <h6><strong>2. ÇEREZ NEDİR ve KULLANIM AMAÇLARI NELERDİR?</strong></h6>
                <p>Çerezler, ziyaret ettiğiniz internet siteleri tarafından tarayıcılar aracılığıyla cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır. Sitede tercih ettiğiniz dil ve diğer ayarları içeren bu küçük metin dosyaları, siteye bir sonraki ziyaretinizde tercihlerinizin hatırlanmasına ve sitedeki deneyiminizi iyileştirmek için hizmetlerimizde geliştirmeler yapmamıza yardımcı olur. Böylece bir sonraki ziyaretinizde daha iyi ve kişiselleştirilmiş bir kullanım deneyimi yaşayabilirsiniz.</p>
                <p>İnternet Sitemizde çerez kullanılmasının başlıca amaçları aşağıda sıralanmaktadır:</p>
                <ul>
                    <li>İnternet sitesinin işlevselliğini ve performansını arttırmak yoluyla sizlere sunulan hizmetleri geliştirmek,</li>
                    <li>İnternet Sitesini iyileştirmek ve İnternet Sitesi üzerinden yeni özellikler sunmak ve sunulan özellikleri sizlerin tercihlerine göre kişiselleştirmek;</li>
                    <li>İnternet Sitesinin, sizin ve Kurum’un hukuki ve ticari güvenliğinin teminini sağlamak, Site üzerinden sahte işlemlerin gerçekleştirilmesini önlemek;</li>
                    <li>5651 sayılı Internet Ortamında Yapılan Yayınların Düzenlenmesi ve Bu Yayınlar Yoluyla İşlenen Suçlarla Mücadele Edilmesi Hakkında Kanun ve Internet Ortamında Yapılan Yayınların Düzenlenmesine Dair Usul ve Esaslar Hakkında Yönetmelik’ten kaynaklananlar başta olmak üzere, kanuni ve sözleşmesel yükümlülüklerini yerine getirmek.</li>
                </ul>

                <h5><strong>3.İNTERNET SİTEMİZDE KULLANILAN ÇEREZ TÜRLERİ</strong></h5>

                <h6><strong>3.1. Oturum Çerezleri</strong></h6>
                <p>Oturum çerezlerini ziyaretinizi süresince internet sitesinin düzgün bir şekilde çalışmasının teminini sağlamaktadır. Sitelerimizin ve sizin, ziyaretinizde güvenliğini, sürekliliğini sağlamak gibi amaçlarla kullanılırlar. Oturum çerezleri geçici çerezlerdir, siz tarayıcınızı kapatıp sitemize tekrar geldiğinizde silinir, kalıcı değillerdir.</p>

                <h6><strong>3.2. Kalıcı Çerezler</strong></h6>
                <p>Bu tür çerezler tercihlerinizi hatırlamak için kullanılır ve tarayıcılar vasıtasıyla cihazınızda depolanır Kalıcı çerezler, sitemizi ziyaret ettiğiniz tarayıcınızı kapattıktan veya bilgisayarınızı yeniden başlattıktan sonra bile saklı kalır. Tarayıcınızın ayarlarından silinene kadar bu çerezler tarayıcınızın alt klasörlerinde tutulurlar.</p>
                <p>Kalıcı çerezlerin bazı türleri; İnternet Sitesini kullanım amacınız gibi hususlar göz önünde bulundurarak sizlere özel öneriler sunulması için kullanılabilmektedir.</p>
                <p>Kalıcı çerezler sayesinde İnternet Sitemizi aynı cihazla tekrardan ziyaret etmeniz durumunda, cihazınızda İnternet Sitemiz tarafından oluşturulmuş bir çerez olup olmadığı kontrol edilir ve var ise, sizin siteyi daha önce ziyaret ettiğiniz anlaşılır ve size iletilecek içerik bu doğrultuda belirlenir ve böylelikle sizlere daha iyi bir hizmet sunulur.</p>

                <h6><strong>3.3. Zorunlu/Teknik Çerezler</strong></h6>
                <p>Ziyaret ettiğiniz internet sitesinin düzgün şekilde çalışabilmesi için zorunlu çerezlerdir. Bu tür çerezlerin amacı, sitenin çalışmasını sağlamak yoluyla gerekli hizmet sunmaktır. Örneğin, internet sitesinin güvenli bölümlerine erişmeye, özelliklerini kullanabilmeye, üzerinde gezinti yapabilmeye olanak verir.</p>

                <h6><strong>3.4. Analitik Çerezler</strong></h6>
                <p>İnternet sitesinin kullanım şekli, ziyaret sıklığı ve sayısı, hakkında bilgi toplayan ve ziyaretçilerin siteye nasıl geçtiğini gösterirler. Bu tür çerezlerin kullanım amacı, sitenin işleyiş biçimini iyileştirerek performans arttırmak ve genel eğilim yönünü belirlemektir. Ziyaretçi kimliklerinin tespitini sağlayabilecek verileri içermezler. Örneğin, gösterilen hata mesajı sayısı veya en çok ziyaret edilen sayfaları gösterirler.</p>

                <h6><strong>3.5. İşlevsel/Fonksiyonel Çerezler</strong></h6>
                <p>Ziyaretçinin site içerisinde yaptığı seçimleri kaydederek bir sonraki ziyarette hatırlar. Bu tür çerezlerin amacı ziyaretçilere kullanım kolaylığı sağlamaktır. Örneğin, site kullanıcısının ziyaret ettiği her bir sayfada kullanıcı şifresini tekrar girmesini önler.</p>

                <h6><strong>3.6. Hedefleme/Reklam Çerezleri</strong></h6>
                <p>Ziyaretçilere sunulan reklamların etkinliğinin ölçülmesi ve reklamların kaç kere görüntülendiğinin hesaplanmasını sağlarlar. Bu tür çerezlerin amacı, ziyaretçilerin ilgi alanlarına özelleştirilmiş reklamların sunulmasıdır.</p>
                <p>Aynı şekilde, ziyaretçilerin gezinmelerine özel olarak ilgi alanlarının tespit edilmesini ve uygun içeriklerin sunulmasını sağlarlar. Örneğin, ziyaretçiye gösterilen reklamın kısa süre içinde tekrar gösterilmesini engeller.</p>

                <h5><strong>4. ÇEREZ TERCİHLERİ NASIL YÖNETİLİR?</strong></h5>
                <p>Çerezlerin kullanımına ilişkin tercihlerinizi değiştirmek ya da çerezleri engellemek veya silmek için tarayıcınızın ayarlarını değiştirmeniz yeterlidir.</p>
                <p>Birçok tarayıcı çerezleri kontrol edebilmeniz için size çerezleri kabul etme veya reddetme, yalnızca belirli türdeki çerezleri kabul etme ya da bir internet sitesinin cihazınıza çerez depolamayı talep ettiğinde tarayıcı tarafından uyarılma seçeneği sunar.</p>
                <p>Aynı zamanda, daha önce tarayıcınıza kaydedilmiş çerezlerin silinmesi de mümkündür.</p>
                <p>Çerezleri devre dışı bırakır veya reddederseniz, bazı tercihleri manuel olarak ayarlamanız gerekebilir, hesabınızı tanıyamayacağımız ve ilişkilendiremeyeceğimiz için internet sitesindeki bazı özellikler ve hizmetler düzgün çalışmayabilir. Tarayıcınızın ayarlarını aşağıdaki tablodan ilgili link’e tıklayarak değiştirebilirsiniz.</p>

                <h5><strong>5. İNTERNET SİTESİ GİZLİLİK POLİTİKASI’NIN YÜRÜRLÜĞÜ</strong></h5>
                <p>İnternet Sitesi Gizlilik Politikası ..../..../.... .tarihlidir. Politika’nın tümünün veya belirli maddelerinin yenilenmesi durumunda Politika’nın yürürlük tarihi güncellenecektir. Gizlilik Politikası Kurum’un internet sitesinde (www.alanadi.com) yayımlanır ve kişisel veri sahiplerinin talebi üzerine ilgili kişilerin erişimine sunulur.</p>
                <p><strong>Firma Adı</strong><br><strong>Adres:</strong> Mahalle Adı Sokak Adı. No: 1/A, 34444 İlçe Adı/İl Adı<br><strong>Telefon:</strong> +90 216 555 55 55<br><strong>E – Posta:</strong> mail@alanadi.com<br><strong>Web Adresi:</strong> www.alanadi.com</p>
            </div>
        </div>
    </section>

    <!-- POPUP | CONTANCT -->
    <section id="popup-contact" class="hidden !bg-white !rounded-none !m-0 !p-0 !max-w-[1240px] w-full">
        <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,7.5fr)] w-full md:grid-cols-1">
            <div class="left-field relative md:order-2">
                <div class="background bg-main-500 absolute top-0 left-0 w-full h-full z-2 translate-z-0">
                    <div class="image aspect-[500/310] max-w-[500px] max-h-[310px] w-full h-full overflow-hidden translate-z-0">
                        <img src="assets/image/static/popup-contact.png" class="full-cover" alt="">
                    </div>
                </div>
                <div class="content relative z-20 h-full flex items-end p-[50px] lg:p-[40px] md:p-[30px]">
                    <div class="text-wrapper flex flex-col gap-[50px] xl:gap-[40px] lg:gap-[30px] md:gap-[20px]">
                        <div class="text-field flex flex-col gap-[10px]">
                            <p class="text text-[30px] 2xl:text-[26px] xl:text-[24px] lg:text-[22px] md:text-[20px] sm:text-[18px] leading-tight font-semibold text-white">A Brand New Experience<br> That Keeps the Passion<br> of Sports Alive</p>
                        </div>
                        <div class="contact-information-field">
                            <ul class="flex flex-col gap-[20px]">
                                <li>
                                    <a href="javascript:;" class="flex items-center gap-[15px] group/link">
                                        <i class="icon icon-phone text-[16px] h-[16px] text-white block leading-none duration-350"></i>
                                        <span class="text text-[18px] md:text-[16px] sm:text-[14px] leading-tight text-white duration-350 group-hover/link:translate-x-[3px]">+90 (212) 678 13 13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="flex items-center gap-[15px] group/link">
                                        <i class="icon icon-mail text-[16px] h-[16px] text-white block leading-none duration-350"></i>
                                        <span class="text text-[18px] md:text-[16px] sm:text-[14px] leading-tight text-white duration-350 group-hover/link:translate-x-[3px]">info@wemobile.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-field pt-[60px] pb-[90px] pl-[80px] pr-[60px] 2xl:pb-[80px] xl:p-[60px] lg:p-[45px] md:p-[30px] md:order-1 border border-l-0 md:border-l md:border-b-0 border-solid border-black/10">
                <div class="content flex flex-col gap-[80px] 2xl:gap-[80px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px]">
                    <div class="title-field flex flex-col gap-[15px]">
                        <p class="text text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-none text-[#1E1E1E] font-semibold">Contact Us.</p>
                    </div>
                    <form action="">
                        <div class="form-wrapper grid grid-cols-6 sm:grid-cols-1 gap-x-[30px] gap-y-[30px] lg:gap-y-[30px] md:gap-y-[30px] sm:gap-[20px]">
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
                                <textarea id="your-message" type="text" class="form-el w-full min-h-[85px] md:min-h-[85px] sm:min-h-[85px] peer order-2 resize-none"></textarea>
                                <label for="your-message" class="text text-[18px] md:text-[16px] text-[#1E1E1E] leading-tight block bg-white order-1 peer-focus:text-main-500 duration-350 relative top-[calc(22.5px+10px)] pointer-events-none peer-focus:top-[-10px] group-[&.is-focus]/item:top-[-10px]">Your Message *</label>
                                <div class="line-field absolute left-0 bottom-0 w-full h-[1px] bg-black/15 before:absolute before:left-0 before:bottom-0 before:w-full before:h-[1px] before:bg-main-500 before:duration-350 before:scale-x-0 before:origin-left peer-focus:before:!scale-x-100"></div>
                            </div>
                            <div class="item form-item relative group/item col-span-4 sm:col-span-1 flex flex-col">
                                <div class="check flex items-center gap-[20px] sm:gap-[15px] h-full">
                                    <input type="checkbox" id="contact-gdpr" class="peer cursor-pointer absolute left-0 top-0 w-full h-full opacity-0 z-10">
                                    <div class="box relative shrink-0 w-[30px] sm:w-[20px] rounded-none aspect-square before:absolute before:duration-350 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:rounded-none before:scale-0 before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-main-500 duration-350 border-[1px] border-solid bg-black/5 border-black/25 peer-hover:bg-black/10 peer-hover:border-black/50 peer-checked:!border-main-500"></div>
                                    <label for="contact-gdpr" class="text-[#111111] leading-snug duration-350 text-[15px] [&_a]:font-bold [&_a:hover]:text-main-500 [&_a]:inline-block [&_a]:relative [&_a]:z-20 [&_a]:duration-350"><a href="#popup-gdpr" data-fancybox>GDPR</a>, I have read and approved</label>
                                </div>
                            </div>
                            <div class="item form-item relative group/item col-span-2 sm:col-span-1 flex flex-col">
                                <div class="button-field flex justify-end items-end sm:justify-start">
                                    <button class="button w-fit min-w-[120px] group/button flex items-center gap-[20px]">
                                        <span class="text text-[18px] md:text-[16px] leading-tight text-main-500 group-hover/button:text-main-600 tracking-[0.25rem] font-medium">SEND</span>
                                        <i class="icon icon-arrow-right text-[39px] h-[39px] text-main-500 block leading-none duration-350 group-hover/button:text-main-600 group-hover/button:translate-x-[3px]"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- POPUP | PROJECT -->
    <section id="popup-project" class="hidden !bg-white !rounded-none !m-0 !p-[60px] md:!p-[30px] sm:!px-[15px] !max-w-[1280px] w-full">
        <div class="inner w-full" dir="ltr">
            <div class="popup-project-title-field mb-[50px] 2xl:mb-[40px] xl:mb-[30px] lg:mb-[20px] md:mb-[15px] flex gap-[10px]">
                <p class="title popup-project-title text-[40px] 2xl:text-[36px] xl:text-[32px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-[#1E1E1E] font-semibold">ASIA</p>
                <p class="count text-[40px] 2xl:text-[36px] xl:text-[32px] lg:text-[28px] md:text-[24px] sm:text-[20px] leading-tight text-main-500 font-semibold">(<span class="popup-project-count">5</span>)</p>
            </div>
            <div class="content-field">
                <div class="popup-project-wrapper grid grid-cols-2 gap-[30px] md:grid-cols-1 scrollbar scrollbar-w-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-primary scrollbar-track-primary/10 overflow-x-hidden overflow-y-auto pr-[20px]">
                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                        <div class="popup-project-item item relative group/item">
                            <div class="content bg-white duration-350 group-hover/item:bg-main-500">
                                <div class="image-field aspect-[460/275]">
                                    <a href="project-detail.php" class="flex w-full h-full image overflow-hidden translate-z-0 group/image">
                                        <img src="assets/image/other/product-1.jpg" class="full-cover group-hover/image:scale-105 duration-350" alt="">
                                    </a>
                                </div>
                                <div class="text-field">
                                    <div class="content px-[20px] py-[25px] lg:p-[20px]">
                                        <div class="location">
                                            <p class="text text-[15px] sm:text-[14px] leading-tight text-[#454545]/50 duration-350 group-hover/item:text-white tracking-[0.1rem] group-hover/item:group-hover/link:text-white/70">Russia</p>
                                        </div>
                                        <div class="title mt-[15px]">
                                            <a href="project-detail.php" class="block w-fit group/link">
                                                <span class="text text-[20px] lg:text-[18px] md:text-[16px] leading-tight text-[#1E1E1E] duration-350 group-hover/item:text-white font-semibold group-hover/item:group-hover/link:text-white/70">RUSSIA Origin Discover Padel Construction</span>
                                            </a>
                                        </div>
                                        <div class="button-field mt-[24px] lg:mt-[20px] md:mt-[15px]">
                                            <a href="project-detail.php" class="flex items-center gap-[15px] w-fit group/link opacity-65 duration-350 hover:opacity-100">
                                                <span class="text text-[16px] sm:text-[14px] leading-tight text-[#1E1E1E] font-medium duration-350 group-hover/item:text-white tracking-[0.25rem]">VIEW</span>
                                                <i class="icon icon-arrow-right-2 text-[27px] h-[27px] text-[#1E1E1E] group-hover/item:text-white group-hover/link:translate-x-[3px] block leading-none duration-350"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-overlay-general fixed left-0 top-0 w-full h-full z-90 bg-black/50 opacity-0 duration-350 pointer-events-none [&.is-active]:opacity-100 [&.is-active]:pointer-events-auto [backdrop-filter:blur(10px)]"></div>

        <!-- close-cookie => bu classa sahip olanlara tıklayınca cookie kapanıyor -->
        <!-- accept-cookie => bu classa sahip olanlara tıklayınca cookie kabul edilip öyle kapanıyor -->
        <div class="cookie-box duration-350 max-h-[100dvh] overflow-y-auto fixed bottom-[30px] sm:right-0 sm:bottom-0 right-[30px] z-[120] p-[30px] bg-cookie max-w-[625px] sm:max-w-none translate-y-[125%] ease-manidar scrollbar scrollbar-w-[5px] scrollbar-h-[5px] scrollbar-track-transparent scrollbar-thumb-main-500 scrollbar-thumb-rounded-full rounded-none">
            <div class="close close-cookie absolute right-[20px] top-[20px] cursor-pointer group/close"><div class="icon group-hover/close:text-main-500 group-hover/close:rotate-90 icon-cross text-white text-[14px] h-[14px] block leading-none duration-350"></div></div>
            <div class="text-field text-white">
                <div class="title font-medium text-[18px] mb-[15px]">Çerez Ayarları</div>
                <div class="expo text-[14px] sm:text-[12px] text-white/50">Bu web sitesinde, cihaz bilgilerini ve kişisel verileri işlemek için çerezleri ve benzer işlevleri kullanıyoruz. İşleme, içeriğin, harici hizmetlerin ve üçüncü şahısların unsurlarının, istatistiksel analiz/ölçümün, kişiselleştirilmiş reklamcılığın ve sosyal medyanın entegrasyonunun entegrasyonuna hizmet eder. İşleve bağlı olarak, veriler üçüncü taraflara aktarılır ve onlar tarafından işlenir. Bu onay isteğe bağlıdır, web sitemizin kullanımı için gerekli değildir ve sol alttaki simge kullanılarak herhangi bir zamanda iptal edilebilir.</div>
            </div>
            <div class="split my-[20px] bg-white/5 w-full h-[1px]"></div>
            <div class="action-field flex items-center justify-between gap-[20px] sm:flex-col">
                <button class="button accept-cookie button group/button w-full flex justify-center items-center gap-[20px] bg-main-500 px-[20px] hover:bg-secondary h-[45px] md:h-[50px] duration-350 shadow-[0_0_0_1px_rgb(var(--color-white)/0.25)]">
                    <div class="text text-[13px] text-white font-medium relative z-2 whitespace-nowrap duration-350">Çerezleri Kabul Et</div>
                </button>
                <button class="button close-cookie group/button w-full flex justify-center items-center gap-[20px] bg-transparent px-[20px] h-[45px] md:h-[50px] duration-350 shadow-[0_0_0_1px_var(--main-500)]">
                    <div class="text text-[13px] text-white/50 duration-350 font-medium relative z-2 whitespace-nowrap group-hover/button:text-white">Reddet</div>
                </button>
            </div>
            <div class="link-field mt-[30px]">
                <a href="page.php" class="text-white/50 duration-350 hover:text-white underline text-[13px] font-medium">Kişisel Verilerin Korunması</a>
                <span class="mx-[10px] text-black/50">|</span>
                <a href="page.php" class="text-white/50 duration-350 hover:text-white underline text-[13px] font-medium">Gizlilik</a>
            </div>
        </div>
        
        <!-- Önbellek tutmasın diye ekledim '?id<?= rand(); ?>' yazısını silersin -->
        <script src="assets/js/script.js?id<?= rand(); ?>"></script>
    </body>
</html>