<div class="flex flex-col h-auto justify-between w-full bg-gradient-to-tr from-slate-100 via-teal-50 to-cyan-50 landing_page">
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
    <section class="w-full h-auto  bg-gradient-to-tr from-slate-300 via-teal-50 to-cyan-50">
        <div class="h-full w-full px-5 md:px-10 py-5">
            <div class="w-full border-b-2 pb-2 border-teal-700">
                <p class="font-bold md:text-2xl text-2xl text-teal-600">
                    <?= (date('H:i')>='05:00' && date('H:i')<'12:00'?'Good Morning':(date('H:i')>='12:00' && date('H:i')<'18:00'?'Good Afternoon':'Good Evening')) ?>
                    <span class="text-teal-700 md:text-2xl text-xl">
                        <?= $_SESSION['username']?>
                        &#128075;
                    </span>
                </p>
                <p class="md:pl-1 text-cyan-600">Get back to your projects right below!</p>
            </div>
            <div class="w-full h-full mt-4">
                <button type="button" id="add_mod_btn" class="mb-2 float-right px-3 py-1.5 bg-teal-400 text-white hover:bg-teal-500 rounded hover:scale-110 transition duration-100 ease-in-out add_new_project_btn">
                    <i class="fa fa-plus-circle add_mod_btn" aria-hidden="true"></i>
                </button>
                <br />
                <br />
                <?php  if($data->projects_count==0){?>
                <div class="bg-white h-3/4 flex justify-center px-4 py-4 col-span-3 shadow-xl rounded-lg grid text-center items-center">
                    <p class="font-extrabold text-2xl text-transparent bg-clip-text bg-gradient-to-r from-slate-700 to-teal-600">
                        You don't have any active projects yet! Make one by clicking on the plus button.
                    </p>
                </div>
                <?php } ?>
                <div class="grid grid-cols-3 gap-4 w-full projects_section">

                <?php  if($data->projects_count>0){
                    foreach($data->projects as $project):
                    ?>
                    <div class="cursor-pointer bg-white px-4 py-4 md:col-span-1 col-span-3 shadow-xl rounded-lg grid grid-cols-3 items-center hover:scale-105 transition duration-100 ease-in-out my_project" id="<?= $project->id ?>">
                        <div class="col-span-3 h-48 w-full bg-cover bg-no-repeat pb-2 border-b-2 border-grey-700 hover:border-teal-700 mb-2" style="background-image: url('<?= ROOT?>resources/images/sorting.png');"></div>

                        <div class="col-span-3 ">
                            <button class="bg-transparent ml-3 rounded-lg float-right text-red-500 text-xl delete_project_btn hover:scale-105 transition duration-100 ease-in-out" id="<?= $project->id?>"><i class="fa fa-trash" aria-hidden="true"></i></button>

                            <button class="bg-transparent rounded-lg float-right text-blue-500 text-xl edit_project_btn hover:scale-105 transition duration-100 ease-in-out" id="<?= $project->id?>"><i class="fa fa-pen" aria-hidden="true"></i></button>

                            <p class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-slate-700 to-teal-600">
                                <?=$project->project ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; }?>
                </div>


            </div>
        </div>
    </section>
</div>
