<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="add_category_modal" tabindex="-1" aria-labelledby="add_category_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <!-- <h5 class="text-mdfont-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    Add a Category
                </h5> -->
                <button
                    type="button"
                    class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                    data-bs-dismiss="modal"
                >
                    Close
                </button>
                <button
                    type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body relative p-4">
                <form method="POST" id="categories_form" enctype="multipart/form-data" autocomplete="off">
                    <div class="add_categories_section">
                        <div class="category grid grid-cols-7 gap-4">
                            <div class="form-group mb-6 col-span-6">
                                <input
                                    type="text"
                                    class="category_input form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="category_name"
                                    name="category_name[]"
                                    aria-describedby="category_name"
                                    placeholder="Category Name:"
                                />
                            </div>
                            <div>
                                <button
                                    type="button"
                                    class="float-right delete_item_btn delete_category_btn px-3 py-1.5 bg-red-600 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                >
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-2">
                        <button
                            type="button"
                            id="add_category_input_btn"
                            class="px-3 py-1.5 bg-blue-600 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                        >
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </button>
                    </div>

                    <button
                        type="submit"
                        class="submit_categories_btn w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    >
                        Submit
                    </button>
                </form>
            </div>
            <!-- <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Close
        </button>
        <button type="button"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Save changes
        </button>
      </div> -->
        </div>
    </div>
</div>

<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="register_user_modal" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-transparent bg-clip-padding rounded-md outline-none text-current">
            <!-- <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md text-white">
                <div class="bg-cyan-50">
                <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
              
            </div> -->
            <div class="modal-body rounded-lg relative p-4 bg-gradient-to-r from-slate-100 via-teal-50 to-cyan-50">
                <div class="w-full h-full flex flex-row user_form_tabination prevent-select">
                    <div class="w-full h-full text-center border-b-2 border-cyan-500 text-cyan-500 py-2 tab_item register_tab cursor-pointer">
                        Register
                    </div>
                    <div class="w-full h-full text-center border-b-2 py-2 tab_item login_tab cursor-pointer">
                        Login
                    </div>                       
                </div>
                <div class="register_section w-full h-full flex flex-row mt-8 mb-4">
                    <div class="w-full h-full">
                        <img src="<?= ROOT?>resources/images/sorting.png" class="" alt="" />
                    </div>
                    <div class="w-full h-full pt-1">
                        <form id="register_user_form" autocomplete="off">
                            <div class="flex flex-col space-y-8">
                            <div class="form-group">
                                <input
                                autocomplete="off"
                                    type="text"
                                    class="input-value form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-teal-600 focus:outline-none"
                                    id="registration_username"
                                    name="registration_username"
                                    aria-describedby="registration_username"
                                    placeholder="Username:"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="input-value form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-teal-600 focus:outline-none"
                                    id="registration_user_email"
                                    name="registration_user_email"
                                    aria-describedby="registration_user_email"
                                    placeholder="Email Address:"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    type="password"
                                    class="input-value form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-teal-600 focus:outline-none"
                                    id="registration_password"
                                    name="registration_password"
                                    aria-describedby="registration_password"
                                    placeholder="Password:"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    type="password"
                                    class="input-value form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-teal-600 focus:outline-none"
                                    id="registration_confirm_password"
                                    name="registration_confirm_password"
                                    aria-describedby="registration_confirm_password"
                                    placeholder="Confirm Password:"
                                />
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="login_section w-full h-full flex flex-row">
                    <div class="w-full h-full pt-8 mb-4">
                        <form id="login_user_form">
                            <div class="flex flex-col space-y-8">
                        
                                <div class="form-group">
                                    <input
                                        autocomplete="off"
                                        type="email"
                                        class="input-value form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-teal-600 focus:outline-none"
                                        id="login_user_email"
                                        name="login_user_email"
                                        aria-describedby="login_user_email"
                                        placeholder="Email Address/Username:"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="password"
                                        class="input-value form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-teal-600 focus:outline-none"
                                        id="login_user_password"
                                        name="login_user_password"
                                        aria-describedby="login_user_password"
                                        placeholder="Password:"
                                    />
                                </div>
         
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full h-full text-center mb-2">

                    <button class="px-2 py-1 bg-teal-400 text-white hover:bg-teal-500 rounded hover:scale-110 transition duration-100 ease-in-out signup_btn">Sign Up </button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="add_project_modal" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-transparent bg-clip-padding rounded-md outline-none text-current">
            <!-- <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md text-white">
                <div class="bg-cyan-50">
                <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
              
            </div> -->
            <div class="modal-body rounded-lg relative p-4 bg-gradient-to-r from-slate-100 via-teal-50 to-cyan-50">
                <div class="grid grid-cols-1 gap-2">
                    <div class="form-group">
                                    <input
                                        type="project_name"
                                        class="input-value form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-teal-600 focus:outline-none"
                                        id="project_name"
                                        name="project_name"
                                        aria-describedby="project_name"
                                        placeholder="Project Name:"
                                    />
                                </div>
                  
                    <div class="">
                        Project Image(optional):
                        <input id="project_image" type="file" class="dropify">
                    </div>
                    <div class="text-center">
                        <button class="p-2 bg-teal-400 hover:bg-teal-500 hover:scale-105 transition duration-100 ease-in-out text-sm text-white rounded submit_project_details_btn">Add Project</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="project_template cursor-pointer bg-white px-4 py-4 md:col-span-1 col-span-3 shadow-xl rounded-lg grid grid-cols-3 items-center hover:scale-105 transition duration-100 ease-in-out my_project hidden" id="{{id}}">
    <div class="col-span-3 h-48 w-full bg-cover bg-no-repeat pb-2 border-b-2 border-grey-700 hover:border-teal-700 mb-2" style="background-image: url('<?= ROOT?>resources/images/{{project_image}}');"></div>

    <div class="col-span-3 ">
        <button class="bg-transparent ml-3 rounded-lg float-right text-red-500 text-xl delete_project_btn hover:scale-105 transition duration-100 ease-in-out" id="{{id}}"><i class="fa fa-trash" aria-hidden="true"></i></button>

        <button class="bg-transparent rounded-lg float-right text-blue-500 text-xl edit_project_btn hover:scale-105 transition duration-100 ease-in-out" id="{{id}}"><i class="fa fa-pen" aria-hidden="true"></i></button>

        <p class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-slate-700 to-teal-600">
        {{project}}
        </p>
    </div>
</div>