$(function () {
    $("#categories_sortable").sortable({});
});

$(function () {
    $('#mods_table tbody').sortable({});
});

// const url_root= 'http://localhost/mod_organizer/';

$(document).on('click', '#add_category_input_btn', function(){
    var id = 'category__'+($('#add_category_modal .category').length+1);
    $('.hidden_elements .add_category .category_input').prop('id', id);
    var category = $('.hidden_elements .add_category').html();
    $('#add_category_modal .add_categories_section').append(category);
    $('#add_category_modal #'+id).focus();

});


$(document).on('click', '#add_mod_btn', function(){
    $('#mods_table .no_mods').remove();
    var id = 'mod__'+($('.mod_section').length+1);
    $('.hidden_elements .add_mod .mod_input').prop('id', id);
    var mod = $('.hidden_elements .add_mod').html();
    mod= '<tr class="border-b bg-gray-50 border-gray-200 mod_section"><td class="text-md text-gray-900 font-medium px-6 py-4 whitespace-nowrap">'+mod+'</td></tr>';
    $('#mods_table .mods').append(mod);
    $('#'+id).focus();
});

$(document).on('submit','#categories_form',function(e){
    e.preventDefault();
    $.ajax({
        url: url_root+'main/add_category',
        type: 'POST',
        dataType: "JSON",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (data, status)
        {
            
        },
        error: function (xhr, desc, err)
        {
            

        }
    }); 
});


$(document).on('click','.category_item',function(e){
    e.preventDefault();
    $.ajax({
        url: url_root+'main/get_category_mods',
        type: 'POST',
        dataType: "JSON",
        data: {
            category:$(this).find('.category_key').text()
        },
        success: function (data)
        {
            $('#mods_table .mods').html(data);
        },
        error: function (xhr, desc, err)
        {
            

        }
    }); 
});

$(document).on('keyup','.mod_input',function(e){
    e.preventDefault();
    $.ajax({
        url: url_root+'main/add_mod_to_Category',
        type: 'POST',
        dataType: "JSON",
        data: {
            mod:$(this).val()
        },
        success: function (data)
        {
        },
        error: function (xhr, desc, err)
        {
            

        }
    });
    
});