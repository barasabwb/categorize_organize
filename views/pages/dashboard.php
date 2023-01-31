<div class="flex flex-col h-screen justify-between w-full bg-gradient-to-tr from-slate-100 via-teal-50 to-cyan-50 landing_page">
    <section class="navigation_bar_section sticky top-0 z-50">
        <nav class="bg-transparent w-full py-4 px-4 flex items-center">
            <div>
                <!-- <img class="rounded h-6 w-6" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT24PMoXJm5E9HNV0KMcDsNZfaA3FIBr6xLeg&usqp=CAU" alt="" /> -->
            </div>
            <div class="ml-auto flex justify-center text-sm space-x-12">
                <!-- <span class="hover:scale-110 transition duration-100 ease-in-out" id="go_to_home"><a href="#home_section">Home</a></span>
                <span class="hover:scale-110 transition duration-100 ease-in-out" id="go_to_get_started"><a href="#get_started_section">Get Started</a></span>
                <span class="hover:scale-110 transition duration-100 ease-in-out"><a href="">Contacts</a></span> -->
            </div>
            <div class="ml-auto float-right space-x-3 text-sm">
                <span class="inline-block hover:scale-110 hover:shadow-xs rounded transition duration-100 ease-in-out"> <a href="<?= ROOT?>authentication/logout" class="text-sm text-black p-1 px-2 logout_user_btn">Logout</a></span>
                <span class="inline-block prevent-select">
                    <p class="text-cyan-500 hover:scale-110 rounded transition duration-100 ease-in-out cursor-pointer"><?= $_SESSION['username'] ?></p>
                </span>
            </div>
        </nav>
    </section>
    <!-- <section class="w-full h-full bg-no-repeat bg-cover" style="background-position: center center; background-image: url('<?= ROOT?>resources/images/sorting.png'); height: 500px;"> -->
    <section class="w-full h-full bg-gradient-to-tr from-slate-300 via-teal-50 to-cyan-50">
        <div class="h-full w-full px-5 md:px-10 py-5">
            <div class="w-full">
                <p class="font-bold md:text-4xl text-2xl text-teal-600">
                    <?= (date('H:i')>='05:00' && date('H:i')<'12:00'?'Good Morning':(date('H:i')>='12:00' && date('H:i')<'18:00'?'Good Afternoon':'Good Evening')) ?>
                    <span class="text-teal-700 md:text-2xl text-xl">
                        <?= $_SESSION['username']?>
                        &#128075;
                    </span>
                </p>
                <p class="md:pl-1 text-cyan-600">Get back to your projects right below!</p>
            </div>
            <div class="w-full mt-4">
                <div class="grid grid-cols-3">
                    <div class="bg-white px-4 py-4 shadow-xl rounded-lg">
                        <p class="font-bold md:text-4xl text-2xl text-teal-600">
                            <?= (date('H:i')>='05:00' && date('H:i')<'12:00'?'Good Morning':(date('H:i')>='12:00' && date('H:i')<'18:00'?'Good Afternoon':'Good Evening')) ?>
                            <span class="text-teal-700 md:text-2xl text-xl">
                                <?= $_SESSION['username']?>
                                &#128075;
                            </span>
                        </p>
                        <p class="md:pl-1 text-cyan-600">Get back to your projects right below!</p>
                    </div>
                    <div class="">
                        <p class="font-bold md:text-4xl text-2xl text-teal-600">
                            <?= (date('H:i')>='05:00' && date('H:i')<'12:00'?'Good Morning':(date('H:i')>='12:00' && date('H:i')<'18:00'?'Good Afternoon':'Good Evening')) ?>
                            <span class="text-teal-700 md:text-2xl text-xl">
                                <?= $_SESSION['username']?>
                                &#128075;
                            </span>
                        </p>
                        <p class="md:pl-1 text-cyan-600">Get back to your projects right below!</p>
                    </div>
                    <div class="">
                        <p class="font-bold md:text-4xl text-2xl text-teal-600">
                            <?= (date('H:i')>='05:00' && date('H:i')<'12:00'?'Good Morning':(date('H:i')>='12:00' && date('H:i')<'18:00'?'Good Afternoon':'Good Evening')) ?>
                            <span class="text-teal-700 md:text-2xl text-xl">
                                <?= $_SESSION['username']?>
                                &#128075;
                            </span>
                        </p>
                        <p class="md:pl-1 text-cyan-600">Get back to your projects right below!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
