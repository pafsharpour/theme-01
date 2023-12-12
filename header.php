<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,100&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet">
    <link href="/styles/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="/styles/style.css" rel="stylesheet" />
    <title><?php wp_title();?></title>
    <?php wp_head();?>
</head>

<body class="bg-background ">
    <main
        class="text-text text-Regular-md md:text-Regular min-w-screen min-h-screen [&>div]:max-w-[1140px] [&>div]:mx-auto sm:[&>div]:mt-20 [&>div]:mt-10 [&>div]:p-2">
        <header class="sticky top-0 sm:-top-14 bg-background z-40">
            <div
                class="navigation absolute [&.active]:scale-y-100 [&.active]:visible bg-section sm:bg-transparent rounded-b-xl scale-y-0 overflow-hidden sm:overflow-visible invisible sm:scale-y-100 transition-all ease-tab-expo origin-top sm:visible w-full top-full sm:static flex flex-col-reverse sm:flex-col">
                <div
                    class="flex sm:flex-row flex-col-reverse gap-5 p-2 max-w-[1140px] mx-auto w-full justify-between py-3">
                    <div>
                        <a class="flex gap-2 justify-center items-center" href="tel:+980000000000">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21"
                                fill="none">
                                <path
                                    d="M12.9314 0.957486L10.5334 3.8454C9.67694 4.8768 10.2014 6.44874 11.4619 6.71443C12.3366 6.92017 12.8947 7.82197 12.784 8.68975C12.4856 10.623 10.2676 13.3991 8.33051 14.053C7.50773 14.4143 6.51277 13.9337 6.15198 13.1091C5.66222 11.9152 4.02446 11.684 3.16802 12.7154L0.769999 15.6034C0.179151 16.4198 0.283047 17.5538 1.00376 18.1549L2.96 19.7862C5.01053 21.4089 9.8267 18.9665 13.8519 14.1189C17.8772 9.27135 19.493 4.07276 17.4338 2.35556L15.4775 0.724212C14.6625 0.131792 13.5309 0.23547 12.9314 0.957486Z"
                                    fill="#F2F2F2" />
                            </svg>
                            (888) 123456
                        </a>
                    </div>
                    <div>
                        <ul
                            class="flex items-center justify-center gap-2 [&>li>a_svg_*]:transition-all [&>li>a:hover_svg>rect]:stroke-secondary [&>li>a:hover_svg>path]:fill-secondary">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none">
                                        <rect x="0.25" y="0.25" width="21.5" height="21.5" rx="4.75" stroke="#F2F2F2"
                                            stroke-width="0.5" />
                                        <path
                                            d="M18 18V12.8725C18 10.3525 17.4575 8.4275 14.5175 8.4275C13.1 8.4275 12.155 9.1975 11.77 9.9325H11.735V8.655H8.9525V18H11.8575V13.3625C11.8575 12.1375 12.085 10.965 13.59 10.965C15.0775 10.965 15.095 12.3475 15.095 13.4325V17.9825H18V18ZM4.2275 8.655H7.1325V18H4.2275V8.655ZM5.68 4C4.7525 4 4 4.7525 4 5.68C4 6.6075 4.7525 7.3775 5.68 7.3775C6.6075 7.3775 7.36 6.6075 7.36 5.68C7.36 4.7525 6.6075 4 5.68 4Z"
                                            fill="#F2F2F2" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none">
                                        <rect x="0.25" y="0.25" width="21.5" height="21.5" rx="4.75" stroke="#F2F2F2"
                                            stroke-width="0.5" />
                                        <path
                                            d="M14.5 4H7.5C5.57517 4 4 5.57449 4 7.5V14.5C4 16.4248 5.57517 18 7.5 18H14.5C16.4248 18 18 16.4248 18 14.5V7.5C18 5.57449 16.4248 4 14.5 4ZM11 13.9166C9.38894 13.9166 8.08328 12.6103 8.08328 11C8.08328 9.38894 9.38894 8.08328 11 8.08328C12.6103 8.08328 13.9167 9.38894 13.9167 11C13.9167 12.6103 12.6103 13.9166 11 13.9166ZM14.7917 8.08328C14.308 8.08328 13.9167 7.69144 13.9167 7.20828C13.9167 6.72511 14.308 6.33328 14.7917 6.33328C15.2754 6.33328 15.6667 6.72511 15.6667 7.20828C15.6667 7.69144 15.2754 8.08328 14.7917 8.08328Z"
                                            fill="#F2F2F2" />
                                    </svg>
                                </a>
                            </li>
                            <li><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none">
                                        <rect x="0.25" y="0.25" width="21.5" height="21.5" rx="4.75" stroke="white"
                                            stroke-width="0.5" />
                                        <path
                                            d="M12.1931 18V11.6144H14.5508L14.9046 9.12509H12.1931V7.53603C12.1931 6.81554 12.4124 6.32453 13.5506 6.32453L15 6.32399V4.09746C14.7494 4.06786 13.889 4 12.8876 4C10.7965 4 9.36488 5.15988 9.36488 7.28949V9.12509H7V11.6144H9.36488V18H12.1931Z"
                                            fill="#F2F2F2" />
                                    </svg>
                                </a></li>
                            <li><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none">
                                        <rect x="0.25" y="0.25" width="21.5" height="21.5" rx="4.75" stroke="white"
                                            stroke-width="0.5" />
                                        <path
                                            d="M18 7.30223C17.5166 7.52308 17.0014 7.66946 16.4644 7.74054C17.0169 7.397 17.4386 6.85715 17.6368 6.20646C17.1217 6.52631 16.5529 6.75223 15.9468 6.87831C15.4577 6.33592 14.7606 6 14.0001 6C12.5246 6 11.3367 7.24723 11.3367 8.77623C11.3367 8.99623 11.3546 9.20777 11.3984 9.40915C9.18275 9.29662 7.22219 8.19069 5.90512 6.506C5.67519 6.92146 5.54031 7.397 5.54031 7.90892C5.54031 8.87015 6.01562 9.72223 6.72413 10.2155C6.29594 10.2071 5.87587 10.0776 5.52 9.87369V9.90415C5.52 11.2529 6.44381 12.3732 7.65525 12.6313C7.43831 12.6931 7.20187 12.7227 6.9565 12.7227C6.78587 12.7227 6.61362 12.7125 6.45194 12.6753C6.79725 13.7745 7.77713 14.5825 8.94225 14.6088C8.0355 15.3475 6.88419 15.7925 5.63781 15.7925C5.41925 15.7925 5.20962 15.7824 5 15.7545C6.18056 16.5473 7.57969 17 9.0885 17C13.9928 17 16.674 12.7692 16.674 9.102C16.674 8.97931 16.6699 8.86085 16.6643 8.74323C17.1932 8.35231 17.6376 7.86408 18 7.30223Z"
                                            fill="#F2F2F2" />
                                    </svg>
                                </a></li>
                            <li><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none">
                                        <rect x="0.25" y="0.25" width="21.5" height="21.5" rx="4.75" stroke="#F2F2F2"
                                            stroke-width="0.5" />
                                        <path
                                            d="M8.51032 13.2166L8.26285 16.6974C8.61691 16.6974 8.77025 16.5453 8.95414 16.3626L10.6141 14.7762L14.0538 17.2952C14.6846 17.6467 15.129 17.4616 15.2992 16.7148L17.557 6.13537L17.5576 6.13475C17.7577 5.20222 17.2204 4.83756 16.6057 5.06633L3.33466 10.1472C2.42893 10.4988 2.44265 11.0037 3.18069 11.2325L6.57358 12.2878L14.4546 7.35651C14.8255 7.11091 15.1627 7.2468 14.8853 7.4924L8.51032 13.2166Z"
                                            fill="#F2F2F2" />
                                    </svg>
                                </a></li>
                            <li><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none">
                                        <rect x="0.25" y="0.25" width="21.5" height="21.5" rx="4.75" stroke="white"
                                            stroke-width="0.5" />
                                        <path
                                            d="M17.7116 7.56476C17.5502 6.95289 17.0773 6.47056 16.4777 6.3058C15.3821 6 10.9998 6 10.9998 6C10.9998 6 6.61774 6 5.5222 6.29422C4.93404 6.4588 4.44964 6.953 4.28831 7.56476C4 8.68231 4 11 4 11C4 11 4 13.3294 4.28831 14.4352C4.44979 15.047 4.92251 15.5294 5.52228 15.6941C6.62927 16 11 16 11 16C11 16 15.3821 16 16.4777 15.7058C17.0774 15.5411 17.5502 15.0588 17.7117 14.447C17.9999 13.3294 17.9999 11.0118 17.9999 11.0118C17.9999 11.0118 18.0115 8.68229 17.7116 7.56476ZM9.60461 13.1412V8.85881L13.2487 11L9.60461 13.1412Z"
                                            fill="#F2F2F2" />
                                    </svg>
                                </a></li>
                        </ul>

                    </div>
                    <a class="py-2 mt-5 self-center sm:hidden px-5 bg-secondary block text-background rounded-lg "
                        href="#">Get
                        Started</a>
                </div>
                <div class="border-b hidden sm:block border-solid border-text/40"></div>
                <div class="flex items-center w-full justify-between mt-3 sm:p-2 max-w-[1140px] mx-auto">
                    <div class="hidden sm:block">
                        <img src="public/images/lgo-1.png" alt="">
                    </div>
                    <nav class="w-full sm:w-fit max-h-[60vh] overflow-y-auto sm:overflow-y-visible">
                        <ul class="
                            flex
                            justify-center
                            items-center
                            gap-4
                            [&_li>a]:after:block
                            [&_li>a]:after:border-b
                            [&_li>a]:after:border-solid
                            [&_li>a]:after:border-primary
                            [&_li>a]:after:transition-all
                            [&_li>a]:after:w-0
                            [&_li:hover>a]:after:w-full
                            [&_li.active>a]:after:w-full
                            [&>li]:relative

                            [&>li>ul]:bg-section
                            [&>li>ul]:rounded
                            sm:[&>li>ul]:absolute
                            sm:[&>li>ul]:w-max
                            [&>li>ul>li]:my-1
                            [&>li>ul]:mt-1
                            [&>li>ul]:transition-all
                            sm:[&>li>ul]:scale-y-0
                            sm:[&>li:hover>ul]:scale-y-100
                            [&>li>ul]:origin-top
                            [&>li>ul]:top-full
                            flex-col
                            sm:flex-row
                            sm:[&_li]:w-fit
                            [&_li]:w-full
                            sm:[&_li]:p-0
                            [&_li]:p-2
                            [&_li]:px-4
                            sm:[&_li]:px-0
                            sm:[&_li]:border-none
                            [&_li]:border-b
                            [&_li_a]:w-fit
                            [&_li_a]:block
                            [&_li]:border-text/40
                            ">
                            <li class="active"><a href="#">home</a></li>
                            <li
                                class="accordion gap-1 flex flex-wrap justify-between items-center [&.active_svg]:rotate-180 sm:[&.active_svg]:rotate-0">
                                <a href="#" class="title">Services</a>
                                <span class="title flex-auto flex items-center justify-end">
                                    <svg class="transition-all" xmlns="http://www.w3.org/2000/svg" width="13" height="6"
                                        viewBox="0 0 13 6" fill="none">
                                        <path
                                            d="M1 0.999999L3.80931 3.55391C5.08763 4.71602 5.72679 5.29708 6.5 5.29708C7.27321 5.29708 7.91237 4.71602 9.19069 3.55391L12 1"
                                            stroke="#00C367" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <ul class="content w-full overflow-hidden h-0 sm:!h-max !p-0 sm:!p-2">
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">SEO Marketing</a></li>
                                    <li><a href="#">Online Advertising</a></li>
                                    <li><a href="#">Social Media Managment</a></li>
                                    <li><a href="#">Digital Branding</a></li>
                                    <li><a href="#">Digital Consultancy</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Project</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile sm:hidden [&.active]:bg-section transition-all">

                <div class="flex justify-between items-center p-2">
                    <div class="h-10">
                        <img class="h-full" src="public/images/lgo-1.png" alt="">
                    </div>
                    <button class="w-8 [&>svg]:stroke-text" type="button" onclick="toggleNav()">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                            <path d="M1 6H15M1 1H15M1 11H15" stroke="white" stroke-linecap="round" />
                        </svg> -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke-width=".6"
                            fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
                            <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
                                <animate dur="0.2s" attributeName="d"
                                    values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7"
                                    fill="freeze" begin="start.begin" />
                                <animate dur="0.2s" attributeName="d"
                                    values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7"
                                    fill="freeze" begin="reverse.begin" />
                            </path>
                            <rect width="10" height="10" stroke="none">
                                <animate dur="2s" id="reverse" attributeName="width" begin="click" />
                            </rect>
                            <rect width="10" height="10" stroke="none">
                                <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze"
                                    begin="click" />
                                <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze"
                                    begin="reverse.begin" />
                            </rect>
                        </svg>
                    </button>

                </div>
                <div class="border-b mt-2 border-solid sm:border-text/40 border-text"></div>
            </div>
        </header>
