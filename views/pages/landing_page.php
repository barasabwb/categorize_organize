<div class="flex flex-col h-screen justify-between w-full bg-gradient-to-tr from-slate-100 via-teal-50 to-cyan-50 landing_page">
    <section class="navigation_bar_section sticky top-0 z-50">
        <nav class="bg-transparent to-teal-50 w-full py-4 px-4 flex items-center pb-2">
            <div>
                <!-- <img class="rounded h-6 w-6" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT24PMoXJm5E9HNV0KMcDsNZfaA3FIBr6xLeg&usqp=CAU" alt="" /> -->
            </div>
            <div class="ml-auto flex justify-center text-sm space-x-12 ">
                <span class="hover:scale-110 transition duration-100 ease-in-out hover:border-b-2 hover:border-cyan-600" id="go_to_home"><a href="#home_section">Other Projects by Me</a></span>
                <span class="hover:scale-110 transition duration-100 ease-in-out" id="go_to_get_started"><a href="#get_started_section">Beatstore</a></span>
                <span class="hover:scale-110 transition duration-100 ease-in-out "><a href="">About Me</a></span>
            </div>
            <div class="ml-auto float-right space-x-3 text-sm">
                <span> <button class="text-sm text-black p-1 px-2 hover:scale-110 hover:shadow-sm rounded transition duration-100 ease-in-out login_user_btn">Sign In</button></span>
                <span> <button class="text-sm text-white bg-blue-500 p-1 px-2 hover:scale-110 hover:bg-indigo-400 hover:shadow-lg rounded transition duration-100 ease-in-out register_user_btn">Sign Up</button></span>
            </div>
        </nav>
    </section>
    <!-- <section class="w-full h-full bg-no-repeat bg-cover" style="background-position: center center; background-image: url('<?= ROOT?>resources/images/sorting.png'); height: 500px;"> -->
    <section class="w-full h-full  bg-gradient-to-tr from-slate-300 via-teal-50 to-cyan-50">    
        <div class="hidden md:block h-full w-full bg-cover bg-no-repeat" style="background-image: url('<?= ROOT?>resources/images/sorting.png');">
            <div class="w-full text-center pt-16">
                <p class=" font-bold text-6xl text-teal-600">Greetings!</p> 
                <p class="pl-8">Get started with organizing your processes!</p>
                <button data-bs-toggle="modal" data-bs-target="#register_user_modal" class="px-3 py-1 bg-blue-400 rounded text-white mt-4 mr-36 animate-bounce get_started_btn">Get Started Now</button>
            </div> 
        </div>

        <div class="md:hidden h-full w-full">
            <div class="w-full pt-16 px-8">
                <p class=" font-bold text-4xl text-teal-600">Greetings!</p> 
                <p>Get started with organizing your processes!</p>
                <button class="px-3 py-1 bg-blue-400 rounded text-white mt-8 animate-bounce hover:scale-110 hover:bg-indigo-400 hover:shadow-lg rounded transition duration-100 ease-in-out">Get Started Now</button>
            </div> 
        </div>
    </section>
</div>
