<style></style>
<div class="h-auto md:block hidden">
    <div style="min-width: 15rem;max-width:15rem; height: 100%;" class=" w-auto custom_scroll shadow-md bg-white px-1 fixed z-10 font-sans overflow-y-auto">
        
        <div style="max-width:14.5rem" class="flex pb-2 fixed z-50 bg-white w-full border-b">
            <div class="mr-4">
                <span class="ml-5 text-sm tracking-wide font-sans align-bottom">
                    <span>Categories</span>
                </span>
            </div>
            <div class="text-sm">
                <button
                    data-bs-toggle="modal"
                    data-bs-target="#add_category_modal"
                    class="add_category_btn bg-blue-200 hover:bg-blue-500 hover:ring-1 hover:ring-blue-400 focus:bg-green-500 focus:ring-2 focus:ring-green-400 text-white py-1 px-2 transition duration-150 ease-in-out rounded-sm"
                >
                    Add
                </button>
            </div>
        </div>

        <ul class="relative mt-9 mb-10" id="categories_sortable">
            <?php foreach(json_decode($data->categories->category_name) as $key=>$category): ?>

            <li class="relative hover:text-gray-900 hover:bg-gray-100 transition duration-100 ease-in-out">
                <button
                    type="button"
                    class="mt-1 inline-block w-7 h-8 ml-2 float-right delete_item_btn delete_category_db_btn bg-transparent text-red-500 font-medium text-sm leading-tight uppercase rounded hover:bg-grey-700 focus:bg-white-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white-800 active:shadow-lg transition duration-150 ease-in-out"
                >
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
                <a class=" break-all inline-block flex category_item items-center text-sm py-4 pl-2 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded" href="" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                    <!-- <img class="w-4 h-1 mr-3" src="<?= ROOT?>/resources/images/c1.png" style="height: 20px;" alt="" loading="lazy" /> -->

                    <span class="category_key text-xs"><?=$key ?></span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="block p-6 ml-64 mr-5 h-full rounded-lg shadow-lg bg-white">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full" id="mods_table">
                            <thead class="border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                        Mods
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="mods">
                                <tr class="border-b bg-gray-50 border-gray-200 mod_section">
                                    <td class="text-md text-center text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        Choose a category
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-2">
            <button
                type="button"
                id="add_mod_btn"
                class="px-3 py-1.5 bg-blue-600 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</div>

<div class="hidden_elements hidden">
    <div class="add_mod">
        <tr class="border-b bg-gray-50 border-gray-200 mod_section">
            <td class="text-md text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                <input class="mod_input w-full" type="text" value="" />
            </td>
        </tr>
    </div>
    <div class="add_category">
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
</div>
