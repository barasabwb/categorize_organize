<section class="navigation_bar_section bg-white sticky top-0 z-50">
    <!-- <div class="site_logo inline-block">
        <img class="w-10 h-10 rounded"  src="<?= ROOT?>resources/images/sample_logo.png" alt="">
    </div>
    <div class="inline-block h-full">
        <a href="">Hello</a>
    </div> -->
    <nav class="border-b border-black to-black w-full py-4 px-4 flex items-center">
        <div>
            <img class="rounded h-6 w-6" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT24PMoXJm5E9HNV0KMcDsNZfaA3FIBr6xLeg&usqp=CAU" alt="" />
        </div>
        <div class="ml-auto flex justify-center text-sm space-x-12">
            <span class="hover:scale-110 transition duration-100 ease-in-out" id="go_to_home"><a href="#home_section">Home</a></span>
            <span class="hover:scale-110 transition duration-100 ease-in-out" id="go_to_get_started"><a href="#get_started_section">Get Started</a></span>
            <span class="hover:scale-110 transition duration-100 ease-in-out"><a href="">Contact Us</a></span>
            <span class="hover:scale-110 transition duration-100 ease-in-out"><a href="">FAQ</a></span>
        </div>
        <div class="ml-auto float-right space-x-3 text-sm">
            <span> <button class="text-sm text-black p-1 px-2 hover:scale-110 hover:shadow-lg rounded transition duration-100 ease-in-out login_user_btn">Sign In</button></span>
            <span> <button class="text-sm text-white bg-blue-500 p-1 px-2 hover:scale-110 hover:bg-indigo-400 hover:shadow-lg rounded transition duration-100 ease-in-out register_user_btn">Sign Up</button></span>
        </div>
    </nav>
</section>
<section class="body">
    <div class="home_section w-full items-center h-full" id="home_section">
        <div class="flex md:flex-row flex-col pt-10 px-5 w-full h-full">
            <div class="h-full w-full">
                <img class="w-full h-full md:h-auto rounded-t-lg md:rounded-none md:rounded-l-lg" src="<?= ROOT?>resources/images/laptop.jpg" alt="" />
            </div>
            <div class="h-full w-full">
                <div class="px-4 py-2 h-full">
                    <h1 class="font-bold">Get Organized!</h1>
                    <h1 class="text-3xl mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. facilis voluptate sit eaque molestiae distinctio quod!</h1>
                    <p class="italic mt-8">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ipsam vel sunt aliquam sequi? Laboriosam expedita quasi voluptates sint repellat debitis soluta obcaecati eius, quibusdam hic. Ex aut corporis officia!
                    </p>
                    <div class="w-full mt-20 text-center">
                        <button class="hover:animate-spin px-3 py-1 text-xl transition duration-100 hover:scale-110 hover:shadow-xl rounded-xl items-center">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="flex justify-center">
        <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
            <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="<?= ROOT?>resources/images/laptop.jpg" alt="" />
            <div class="p-6 flex flex-col justify-start">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
            <p class="text-gray-700 text-base mb-4">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            </p>
            <p class="text-gray-600 text-xs">Last updated 3 mins ago</p>
            </div>
        </div>
        </div> -->
    </div>

    <div class="get_started_section w-full items-center h-full mt-10" id="get_started_section">
        <div class="flex md:flex-row flex-col pt-10 px-5 w-full h-full py-5 space-x-6 ">
            <div class="border rounded px-4 py-4 w-1/3 flex flex-col items-center shadow-lg hover:scale-105 bg-white transition duration ease-in-out">
                <div class="mb-4">
                    <img src="<?= ROOT?>resources/images/organize.jpg" class="h-32 w-32 rounded-full" alt="" />
                </div>
                <div class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto repellendus quae voluptatibus animi doloremque inventore tempore voluptate sapiente maxime ab velit aut harum explicabo laborum accusantium aliquam sed, molestiae qui!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto repellendus quae voluptatibus animi doloremque inventore tempore voluptate sapiente maxime ab velit aut harum explicabo laborum accusantium aliquam sed, molestiae qui!

                </div>
            </div>
            <div class="border rounded px-4 py-4 w-1/3 flex flex-col items-center shadow-lg hover:scale-105 bg-white transition duration ease-in-out">
                <div class="mb-4">
                    <img src="<?= ROOT?>resources/images/organize2.jpg" class="h-32 w-32 rounded-full" alt="" />
                </div>
                <div class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto repellendus quae voluptatibus animi doloremque inventore tempore voluptate sapiente maxime ab velit aut harum explicabo laborum accusantium aliquam sed, molestiae qui!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto repellendus quae voluptatibus animi doloremque inventore tempore voluptate sapiente maxime ab velit aut harum explicabo laborum accusantium aliquam sed, molestiae qui!

                </div>
            </div>
            <div class="border rounded px-4 py-4 w-1/3 flex flex-col items-center shadow-lg hover:scale-105 bg-white transition duration ease-in-out">
                <div class="mb-4">
                    <img src="<?= ROOT?>resources/images/organize3.jpg" class="h-32 w-32 rounded-full" alt="" />
                </div>
                <div class="text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto repellendus quae voluptatibus animi doloremque inventore tempore voluptate sapiente maxime ab velit aut harum explicabo laborum accusantium aliquam sed, molestiae qui!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto repellendus quae voluptatibus animi doloremque inventore tempore voluptate sapiente maxime ab velit aut harum explicabo laborum accusantium aliquam sed, molestiae qui!

                </div>
            </div>
        </div>
       
    </div>
</section>
<section></section>
