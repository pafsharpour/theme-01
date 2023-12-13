<?php get_header(); ?>
<div>
            <h1 class="text-center text-ExtraBold-md md:text-ExtraBold">
                Digital <span class="text-primary"> solution </span>for <br>
                Food industry success
            </h1>
            <p class="text-center">Food & Beverage Brands, Restaurants, coffeshops</p>
        </div>

        <div>
            <h3 class="text-SemiBold-md sm:text-SemiBold text-primary mb-5">Who we Are</h3>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, <span class="text-secondary"> consectetur
                    adipiscing</span> elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis
                nostrud <span class="text-secondary">exercitatio minim</span> veniam, quis
                nostrud exercitatio
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <span
                    class="text-secondary">eiusmod</span> tempor incididunt ut labore et dolore
                magna aliqua. Ut
                enim ad minim veniam, <span class="text-secondary">quis nostrud
                    exercitatio</span> minim veniam,
                quis nostrud exercitatio
            </p>
        </div>


        <div class="!max-w-none bg-section !p-0">
            <div class="flex items-stretch flex-col sm:flex-row relative justify-center">
                <div class="grayscale brightness-50 sm:brightness-100 absolute top-0 left-0 w-full sm:w-5/12 h-full">
                    <img class="object-cover w-full h-full" src="public/images/contactbg.jpg" alt="">
                </div>
                <div class="relative z-10 p-4 md:p-10 lg:p-20 sm:w-5/12">
                    <div>
                        <h3 class="text-SemiBold-md sm:text-SemiBold text-primary">You should book this call if...</h3>
                        <ul
                            class="text-justify sm:text-background list-disc list-inside marker:text-primary [&>li]:mt-3">
                            <li>
                                Lorem ipsum dolor sit amet, <span class="text-secondary"> consectetur
                                    adipiscing</span> elit, sed
                            </li>
                            <li>
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis
                            </li>
                            <li>
                                nostrud <span class="text-secondary">exercitatio minim</span> veniam, quis
                                nostrud exercitatio
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <span
                                    class="text-secondary">eiusmod</span> tempor incididunt ut labore et dolore
                            </li>
                            <li>
                                magna aliqua. Ut
                                enim ad minim veniam, <span class="text-secondary">quis nostrud
                            </li>
                            <li>
                                exercitatio</span> minim veniam,
                                quis nostrud exercitatio
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:p-20 md:p-10 p-4 sm:w-7/12 relative z-10">

                    <form class="flex flex-col gap-5" action="#">
                        <div class="flex flex-col sm:flex-row gap-5">
                            <fieldset
                                class="bg-transparent flex-1 flex p-2 relative pt-0 rounded-lg border border-solid items-center border-primary/50">
                                <input onchange="handleInputChange(event)"
                                    class="[appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 w-full p-1 mr-2 h-full bg-transparent [&:focus+legend>span]:translate-y-0 [&:focus+legend>span]:translate-x-0 [&:focus+legend:before]:w-0 "
                                    type='text' />
                                <legend
                                    class="px-2 pointer-events-none w-fit relative before:absolute before:right-0 before:w-full before:top-[48%] before:border-t before:border-primary/50 before:h-[1px] before:transition-all before:z-10 ">
                                    <span class="block translate-y-[100%] translate-x-2 transition-all text-text">
                                        First name
                                    </span>
                                </legend>
                            </fieldset>
                            <fieldset
                                class="bg-transparent flex-1 flex p-2 relative pt-0 rounded-lg border border-solid items-center border-primary/50">
                                <input onchange="handleInputChange(event)"
                                    class="[appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 w-full p-1 mr-2 h-full bg-transparent [&:focus+legend>span]:translate-y-0 [&:focus+legend>span]:translate-x-0 [&:focus+legend:before]:w-0 "
                                    type='text' />
                                <legend
                                    class="px-2 pointer-events-none w-fit relative before:absolute before:right-0 before:w-full before:top-[48%] before:border-t before:border-primary/50 before:h-[1px] before:transition-all before:z-10 ">
                                    <span class="block translate-y-[100%] translate-x-2 transition-all text-text">
                                        Last name
                                    </span>
                                </legend>
                            </fieldset>
                        </div>
                        <fieldset
                            class="bg-transparent flex-1 flex p-2 relative pt-0 rounded-lg border border-solid items-center border-primary/50">
                            <input onchange="handleInputChange(event)"
                                class="[appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 w-full p-1 mr-2 h-full bg-transparent [&:focus+legend>span]:translate-y-0 [&:focus+legend>span]:translate-x-0 [&:focus+legend:before]:w-0 "
                                type='text' />
                            <legend
                                class="px-2 pointer-events-none w-fit relative before:absolute before:right-0 before:w-full before:top-[48%] before:border-t before:border-primary/50 before:h-[1px] before:transition-all before:z-10 ">
                                <span class="block translate-y-[100%] translate-x-2 transition-all text-text">
                                    Company email address
                                </span>
                            </legend>
                        </fieldset>


                        <fieldset
                            class="bg-transparent flex-1 h-full flex p-2 relative pt-0 rounded-lg border border-solid items-start border-primary/50">
                            <textarea onchange="handleInputChange(event)"
                                class="w-full min-h-[250px] resize-none p-1 mr-2 h-full bg-transparent [&:focus+legend>span]:translate-y-0 [&:focus+legend>span]:translate-x-0 [&:focus+legend:before]:w-0 "
                                type="text"></textarea>

                            <legend
                                class="px-2 pointer-events-none w-fit relative before:absolute before:right-0 before:w-full before:top-[48%] before:border-t before:border-primary/50 before:h-[1px] before:transition-all before:z-10 ">
                                <span class="block translate-y-[100%] translate-x-2 transition-all text-text">
                                    What is your biggest sales and marketing challenges?
                                </span>
                            </legend>
                        </fieldset>

                        <fieldset
                            class="bg-transparent flex-1 flex p-2 relative pt-0 rounded-lg border border-solid items-center border-primary/50">
                            <input onchange="handleInputChange(event)"
                                class="[appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 w-full p-1 mr-2 h-full bg-transparent [&:focus+legend>span]:translate-y-0 [&:focus+legend>span]:translate-x-0 [&:focus+legend:before]:w-0 "
                                type='text' />
                            <legend
                                class="px-2 pointer-events-none w-fit relative before:absolute before:right-0 before:w-full before:top-[48%] before:border-t before:border-primary/50 before:h-[1px] before:transition-all before:z-10 ">
                                <span class="block translate-y-[100%] translate-x-2 transition-all text-text">
                                    How did you hear about us?
                                </span>
                            </legend>
                        </fieldset>
                        <button class="py-2 px-3 bg-primary w-fit self-center rounded-lg" type="submit">Talk with an
                            Advertiser</button>
                    </form>
                </div>
            </div>

        </div>

        <div>
            <div class="mb-10">
                <h3 class="text-primary mb-3 text-center text-SemiBold-md md:text-SemiBold">Check out our deep</h3>
                <p>
                    Lorem ipsum dolor sit amet, <span class="text-secondary">consectetur</span> adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et<span class="text-secondary"> dolore magna</span> aliqua. Ut
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <ul
                class="flex gap-5 justify-between items-center flex-wrap [&>li]:flex-[45%] sm:[&>li]:flex-[30%] [&_h5]:text-SemiBold-md sm:[&_h5]:text-SemiBold [&_h5]:text-primary">
                <li>
                    <h5>Worldwide</h5>
                    <a href="tel:+9777845633">888-543211</a>
                </li>
                <li>
                    <h5>France</h5>
                    <a href="tel:+9777845633">+45 5608983</a>
                </li>
                <li>
                    <h5>United Arabic Emarate</h5>
                    <a href="tel:+9777845633">+96 8767884</a>
                </li>

                <li>
                    <h5>Australlia</h5>
                    <a href="tel:+9777845633">+78 998978978</a>
                </li>
                <li>
                    <h5>China</h5>
                    <a href="tel:+9777845633">+45 5608983</a>
                </li>
                <li>
                    <h5>Email</h5>
                    <a href="mailto:contact@foodex.digital">contact@foodex.digital</a>
                </li>

            </ul>
        </div>


        <div class="!max-w-none py-10 relative">
            <div class="brightness-[0.3] absolute top-0 left-0 w-full  h-full">
                <img class="object-cover h-full w-full" src="public/images/aboutusIncontact.jpg" alt="">
            </div>
            <div class="z-10 relative max-w-[1140px] m-auto py-16">
                <h4 class="text-primary text-center text-SemiBold-md mb-5 sm:text-SemiBold">
                    Check out our deep
                </h4>
                <p>
                    Lorem ipsum dolor sit amet, <span class="text-secondary">consectetur</span> adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et<span class="text-secondary"> dolore magna</span> aliqua. Ut
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
                <div class="flex sm:flex-row flex-col mt-10 gap-4">
                    <a href="#" class="py-2 px-8 mx-auto block text-center w-full sm:w-max bg-primary rounded-lg">Email
                        Directly</a>
                    <a href="#"
                        class="py-2 px-8 mx-auto block text-center w-full sm:w-max bg-secondary rounded-lg">Download
                        Company PDF</a>
                </div>

            </div>
        </div>


        <div>
            <div class="mb-10">
                <h3 class="text-primary mb-4 text-center text-SemiBold-md md:text-SemiBold">About us</h3>
                <p>
                    Lorem ipsum dolor sit amet, <span class="text-secondary">consectetur</span> adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et<span class="text-secondary"> dolore magna</span> aliqua. Ut
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
                <a href="#" class="py-2 mt-10 px-8 mx-auto block text-center w-max bg-primary rounded-lg">Read more</a>
            </div>
        </div>
<?php get_footer();?>
