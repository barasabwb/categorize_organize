<style></style>
<div class="h-full">
    <div class="w-60 custom_scroll h-full shadow-md bg-white px-1 absolute font-sans overflow-y-auto">
        <div class="float-right text-sm mr-4">
            <button
                data-bs-toggle="modal"
                data-bs-target="#add_category_modal"
                class="add_category_btn bg-blue-200 hover:bg-blue-500 hover:ring-1 hover:ring-blue-400 focus:bg-green-500 focus:ring-2 focus:ring-green-400 text-white py-1 px-2 transition duration-150 ease-in-out rounded-sm"
            >
                Add
            </button>
        </div>

        <div class="pt-1 px-1">
            <span class="ml-5 text-sm tracking-wide font-sans align-bottom">
                <span>Categories</span>
            </span>
        </div>
        <ul class="relative mt-4" id="categories_sortable">
            <?php foreach(json_decode($data->categories->category_name) as $key=>$category): ?>

            <li class="relative category_item">
                <a
                    class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-100 ease-in-out"
                    href="#!"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="dark"
                >
                    <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 mr-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            fill="currentColor"
                            d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"
                        ></path>
                    </svg> -->
                    <img class="w-4 h-1 mr-3" src="<?= ROOT?>/resources/images/c1.png" style="height: 20px;" alt="" loading="lazy" />

                    <span class="category_key"><?=$key ?></span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="block p-6 ml-64 h-full rounded-lg shadow-lg bg-white">
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
                                    <td class="text-md text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        <input type="text" value="Yes" readonly />
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
                <input class="mod_input" type="text" value="Yes" />
            </td>
        </tr>
    </div>
    <div class="add_category">
        <div class="category grid grid-cols-2 gap-4">
            <div class="form-group mb-6">
                <input
                    type="text"
                    class="category_input form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="category_name"
                    name="category_name[]"
                    aria-describedby="category_name"
                    placeholder="Category Name:"
                />
            </div>
            <div class="form-group mb-6">
                <input
                    type="file"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="file_input"
                    name="category_image[]"
                    aria-describedby="categoryImage"
                    placeholder="Category Image"
                />
            </div>
        </div>
    </div>
</div>
