<div class="flex flex-col h-screen justify-between w-full bg-gradient-to-tr from-slate-100 via-teal-50 to-cyan-50">
    <section class="navigation_bar_section sticky top-0 z-50">
        <nav class="bg-gradient-to-br from-slate-100 via-cyan-50 to-teal-50 w-full py-4 px-4 flex items-center">
            <div>
                <!-- <img class="rounded h-6 w-6" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT24PMoXJm5E9HNV0KMcDsNZfaA3FIBr6xLeg&usqp=CAU" alt="" /> -->
            </div>
            <div class="ml-auto flex justify-center text-sm space-x-12">
                <span class="hover:scale-110 transition duration-100 ease-in-out" id="go_to_home"><a href="#home_section">Home</a></span>
                <span class="hover:scale-110 transition duration-100 ease-in-out" id="go_to_get_started"><a href="#get_started_section">Get Started</a></span>
                <span class="hover:scale-110 transition duration-100 ease-in-out"><a href="">Contacts</a></span>
            </div>
            <div class="ml-auto float-right space-x-3 text-sm">
                <span> <button class="text-sm text-black p-1 px-2 hover:scale-110 hover:shadow-lg rounded transition duration-100 ease-in-out login_user_btn">Sign In</button></span>
                <span> <button class="text-sm text-white bg-blue-500 p-1 px-2 hover:scale-110 hover:bg-indigo-400 hover:shadow-lg rounded transition duration-100 ease-in-out register_user_btn">Sign Up</button></span>
            </div>
        </nav>
    </section>
    <!-- <section class="w-full h-full bg-no-repeat bg-cover" style="background-position: center center; background-image: url('<?= ROOT?>resources/images/png_tree_Sort.png'); height: 500px;"> -->
    <section class="w-full h-full">    
        <div class="grid grid-cols-2 h-full">
            <div class="h-auto w-full flex justify-left bg-cover bg-no-repeat" style="background-image: url('<?= ROOT?>resources/images/png_tree_Sort.png');">
                <!-- <img src="<?= ROOT?>resources/images/png_tree_Sort.png" class="" alt=""> -->
            </div>
            <div class="h-full w-full flex justify-left">
                <p class="font-bold">Greetings</p>
            </div>
        </div>
    </section>
</div>
