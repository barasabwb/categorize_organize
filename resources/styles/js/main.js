$(function () {
    $("#categories_sortable").sortable({
        axis: 'y',
        update: function (event, ui) {
            var keys = [];
            $('#categories_sortable .category').each(function() {
                    keys.push($(this).find('.category_key').text());
            });

            // POST to server using $.post or $.ajax
            $.ajax({
                data: {
                    category_keys:keys
                },
                type: 'POST',
                url: url_root+'main/update_categories_position',
                dataType: "JSON",
                success: function (data, status) {
                    // alert('yes');
                },
                error: function (xhr, desc, err) {},
            });
        }
    });
});

$(function () {
    $("#mods_table tbody").sortable({
        axis: 'y',
        update: function (event, ui) {
            var keys = [];
            $('#mods_table .retrieved_input ').each(function() {
                keys.push($(this).val());
            });

            // POST to server using $.post or $.ajax
            $.ajax({
                data: {
                    mod_keys:keys,
                    category_name:$('.category_item.active .category_key').text()

                },
                type: 'POST',
                url: url_root+'main/update_mods_position',
                dataType: "JSON",
                success: function (data, status) {
                    // alert('yes');
                },
                error: function (xhr, desc, err) {},
            });
        }
    });
});

// const url_root= 'http://localhost/mod_organizer/';

$(document).on("click", "#add_category_input_btn", function () {
    var id = "category__" + ($("#add_category_modal .category").length + 1);
    $(".hidden_elements .add_category .category_input").prop("id", id);
    var category = $(".hidden_elements .add_category").html();
    $("#add_category_modal .add_categories_section").append(category);
    $("#add_category_modal #" + id).focus();
});

$(document).on("click", "#add_mod_btn", function () {
    $("#mods_table .no_mods").remove();
    var id = "mod__" + ($(".mod_section").length + 1);
    $(".hidden_elements .add_mod .mod_input").prop("id", id);
    var mod = $(".hidden_elements .add_mod").html();
    mod = '<tr class="border-b bg-gray-50 border-gray-200 mod_section"><td class="text-md text-gray-900 font-medium px-6 py-4 whitespace-nowrap">' + mod + "</td>";
    mod +=
        '<td class="text-md text-gray-900 font-medium px-6 py-4 whitespace-nowrap"><button type="button" class="delete_item_btn delete_mod_btn px-3 py-1.5 bg-red-600 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>';
    $("#mods_table .mods").append(mod);
    $("#" + id).focus();
});

$(document).on("submit", "#categories_form", function (e) {
    e.preventDefault();
    var form_data = new FormData(this);
    $.ajax({
        url: url_root + "main/add_category",
        type: "POST",
        dataType: "JSON",
        data: form_data,
        processData: false,
        contentType: false,
        success: function (data, status) {
            window.setTimeout(function () {
                window.location.href = window.location.href;
            }, 1500);
        },
        error: function (xhr, desc, err) {},
    });
});

$(document).on("click", ".category_item", function (e) {
    e.preventDefault();
    $('.category_item').each(function(){
        $(this).removeClass('active');
    });
    $(this).addClass('active');
    $.ajax({
        url: url_root + "main/get_category_mods",
        type: "POST",
        dataType: "JSON",
        data: {
            category: $(this).find(".category_key").text(),
        },
        success: function (data) {
            $('.add_mod_btn').removeClass('hidden');
            $("#mods_table .mods").html(data);
        },
        error: function (xhr, desc, err) {},
    });
});

$(document).on("keyup", ".mod_input", function (e) {
    e.preventDefault();
    var input = $(this);
    if (e.which == 13) {
        $.ajax({
            url: url_root + "main/add_mod_to_Category",
            type: "POST",
            dataType: "JSON",
            data: {
                mod: $(this).val(),
                category_name:$('.category_item.active .category_key').text()

            },
            success: function (data) {
                var classes= 'border-none focus:ring-0 bg-transparent';
                input.attr('readonly', true);
                $(input).addClass(classes);
            },
            error: function (xhr, desc, err) {},
        });
    }
});

$(document).on("click", ".delete_item_btn", function (e) {
    e.preventDefault();
    
    if($(this).hasClass('delete_mod_btn')){
        var parent = $(this).parent().parent();
        $.ajax({
            url: url_root + "main/delete_property/mod",
            type: "POST",
            dataType: "JSON",
            data: {
                mod_name: parent.find('.mod_input').val(),
                category_name:$('.category_item.active .category_key').text()
            },
            success: function (response) {
                parent.remove();

            },
            error: function (xhr, desc, err) {},
        });
    }else if($(this).hasClass('delete_category_btn')){
        $(this).parent().parent().remove();
    }if($(this).hasClass('delete_category_db_btn')){
        var parent = $(this).parent();

        $.ajax({
            url: url_root + "main/delete_property/category",
            type: "POST",
            dataType: "JSON",
            data: {
                category_name:parent.find('.category_key').text()
            },
            success: function (response) {
                if(response=="deleted"){
                    parent.remove();
                }else{
                    alert('not deleted');
                }
            },
            error: function (xhr, desc, err) {},
        });
    }

});

// prime with empty jQuery object
window.prevFocus = $();

// Catch any bubbling focusin events (focus does not bubble)
$(document).on('focusin', '.mod_input', function () {
    window.prevFocus = $(this);
});

$(document).on("click.lose_focus", function (e) {
    if ($(e.target) == prevFocus) {

    } else if ($(e.target).hasClass("mod_input")) {

    }
});

$(document).on("dblclick", ".retrieved_input", function (e) {
    e.preventDefault();
    var classes= 'border-none focus:ring-0 bg-transparent';
    $(this).removeClass(classes);
    input.attr('readonly', false);

});