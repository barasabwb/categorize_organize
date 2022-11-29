<div class="card px-10 py-2 ">
<div class=" grid grid-cols-3 gap-4">
    <div>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">   
    </div>
    <div>
    <input  id="grid-first-name" type="file">   
    </div>
    <div>
    <button class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="large-modal">
    Add Category
    </button>
    </div>

</div>
<!-- Button trigger modal -->
<button type="button" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Modal title</h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        Modal body text goes here.
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button" class="px-6
          py-2.5
          bg-purple-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-purple-700 hover:shadow-lg
          focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-purple-800 active:shadow-lg
          transition
          duration-150
          ease-in-out" data-bs-dismiss="modal">Close</button>
        <button type="button" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out
      ml-1">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="card px-10 py-10">
    <div class="max-w rounded shadow-lg px-5 py-5">
        <ul id="categories_sortable">
            <li>
                <div class="flex md:justify-center mb-2">
                    <div class="block md:inline-block category">
                        <a href="#" class="w-40 md:w-80 flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-teal-100">
                            <div class="pr-2 md:border-r-2">
                                <img class="text-center ml-2 object-cover w-full rounded-t-lg h-auto w-10 md:h-auto md:w-10 md:rounded-none md:rounded-l-lg" src="<?= ROOT ?>resources/imageS/categories.png" alt="" />
                            </div>
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <p class="mb-2 text-normal font-sans tracking-tight text-gray-500">
                                    Category
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="block md:inline-block space-y-1 ml-2">
                        <button
                            type="button"
                            class="block edit_category_btn text-white h-7 w-7 text-center bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        >
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                        <button
                            type="button"
                            class="block text-white h-8 w-8 text-center bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"
                        >
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex md:justify-center mb-2">
                    <div class="block md:inline-block category">
                        <a href="#" class="w-40 md:w-80 flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-teal-100">
                            <div class="pr-2 md:border-r-2">
                                <img class="text-center ml-2 object-cover w-full rounded-t-lg h-auto w-10 md:h-auto md:w-10 md:rounded-none md:rounded-l-lg" src="<?= ROOT ?>resources/imageS/categories.png" alt="" />
                            </div>
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <p class="mb-2 text-normal font-sans tracking-tight text-gray-500">
                                    Category
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="block md:inline-block space-y-1 ml-2">
                        <button
                            type="button"
                            class="block edit_category_btn text-white h-7 w-7 text-center bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        >
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                        <button
                            type="button"
                            class="block text-white h-8 w-8 text-center bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"
                        >
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
<script>
    $(function () {
        $("#categories_sortable").sortable({});
    });
    $(document).on("click", ".category", function () {
        alert($(this).html());
    });
    $(document).on("click", ".edit_category_btn", function (e) {
        e.preventDefault();
        alert($(this).html());
    });
</script>
