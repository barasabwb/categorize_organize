//global classes
//cyan active
var cyan_tab_active = "border-cyan-500 text-cyan-500", error_class='border-red-500';

//spinners
var success_spinner = '<div class="flex justify-center items-center">\
                            <div class="spinner-border animate-spin inline-block w-8 h-8 border-4 rounded-full text-teal-500" role="status">\
                            <span class="visually-hidden">Loading...</span>\
                            </div>\
                        </div>';
                        

$(document).ready(function(){
 if(notification_alert!==false){
    notify_me(message, position, msg_class, duration);
 }
});

function notify_me(message, position, msg_class, duration){
    Swal.fire({
        position: position,
        icon: msg_class,
        title: message,
        showConfirmButton: false,
        timer: duration
      })
}


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
$(document).ready(function(){
    $('.landing_page').fadeIn('fast');
  

});
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
        update_mod(input);
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
     if ($('.mods .editing').length>0 && $('.mods .editing').val().length>0) {
            update_mod($('.mods .editing'));
        }else if ($('.mods .editing').length>0 && $('.mods .editing').val().length==0){
            $('.mods .editing').parent().parent().remove();
        }
    var classes= 'border-none focus:ring-0 bg-transparent';
    $(this).removeClass(classes).addClass('editing');
    $(this).attr('readonly', false);
});


function update_mod(input){
    input.removeClass('editing');
    if(input.hasClass('retrieved_input')){
        $.ajax({
            url: url_root + "main/update_mod",
            type: "POST",
            dataType: "JSON",
            data: {
                mod: input.val(),
                original_mod: input.parent().find('.original_value').text(),
                category_name:$('.category_item.active .category_key').text()
    
            },
            success: function (data) {
                input.parent().find('.original_value').html(input.val())
                var classes= 'border-none focus:ring-0 bg-transparent';
                input.attr('readonly', true);
                $(input).addClass(classes);
            },
            error: function (xhr, desc, err) {},
        });
    }else{
        $.ajax({
            url: url_root + "main/add_mod_to_Category",
            type: "POST",
            dataType: "JSON",
            data: {
                mod: input.val(),
                category_name:$('.category_item.active .category_key').text()
    
            },
            success: function (data) {
                var classes= 'border-none focus:ring-0 bg-transparent retrieved_input';
                input.attr('readonly', true);
                $(input).addClass(classes);
            },
            error: function (xhr, desc, err) {},
        });
    }  
}

$(document).on('click', function (e) {
    var classes= 'border-none focus:ring-0 bg-transparent';
    if (!$(e.target).hasClass("mod_input") && !$(e.target).hasClass("add_mod_btn")) {
        if ($('.mods .editing').length>0 && $('.mods .editing').val().length>0) {
            update_mod($('.mods .editing'));
        }else if ($('.mods .editing').length>0 && $('.mods .editing').val().length==0){
            $('.mods .editing').parent().parent().remove();
        }
    }
});
$("#go_to_get_started").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#get_started_section").offset().top
    }, 500);
});
$("#go_to_home").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#home_section").offset().top-50
    }, 500);
});

// $(window).scroll(function() {
//     if ($(this).scrollTop() > 75 ) {
//       $('#get_started_section').slideDown();
//     } else {
//       $('#get_started_section').slideUp();
//     }
//   }); 

$(document).on('click','.user_form_tabination .tab_item',function(e){
    if($(this).hasClass('login_tab')){
        $('.user_form_tabination .login_tab').addClass(cyan_tab_active);
        $('.user_form_tabination .register_tab').removeClass(cyan_tab_active);
        $('.register_section').fadeOut(1);
        $('.login_section').fadeIn('fast');
        $('#register_user_modal .modal-dialog').removeClass('modal-lg');
        $('#register_user_modal .signup_btn').removeClass('signup_btn').addClass('signin_btn').html('Sign In');



    }else{
        $('.user_form_tabination .register_tab').addClass(cyan_tab_active);
        $('.user_form_tabination .login_tab').removeClass(cyan_tab_active);
        $('.login_section').fadeOut(1);
        $('.register_section').fadeIn('fast');
        $('#register_user_modal .modal-dialog').addClass('modal-lg');
        $('#register_user_modal .signin_btn').removeClass('signin_btn').addClass('signup_btn').html('Sign Up');


    }
});

$(document).on('click', '.get_started_btn', function(){
    $('.user_form_tabination .register_tab').addClass(cyan_tab_active);
    $('.user_form_tabination .login_tab').removeClass(cyan_tab_active);
    $('#register_user_modal .modal-dialog').addClass('modal-lg');
    $('.login_section').fadeOut(1);
    $('.register_section').fadeIn(1);
    $('#register_user_modal .signin_btn').removeClass('signin_btn').addClass('signup_btn').html('Sign Up');

});
$(document).on('click', '.login_user_btn', function(){
    $('.user_form_tabination .login_tab').addClass(cyan_tab_active);
    $('.user_form_tabination .register_tab').removeClass(cyan_tab_active);
    $('.register_section').fadeOut(1);
    $('.login_section').fadeIn(1);
    $('#register_user_modal .modal-dialog').removeClass('modal-lg');
    $('#register_user_modal .signup_btn').removeClass('signup_btn').addClass('signin_btn').html('Sign In');

    $('#register_user_modal').modal('show')

});
$(document).on('click', '.register_user_btn', function(){
    $('.user_form_tabination .register_tab').addClass(cyan_tab_active);
    $('.user_form_tabination .login_tab').removeClass(cyan_tab_active);
    $('.login_section').fadeOut(1);
    $('.register_section').fadeIn(1);
    $('#register_user_modal .modal-dialog').addClass('modal-lg');
    $('#register_user_modal .signin_btn').removeClass('signin_btn').addClass('signup_btn').html('Sign Up');


    $('#register_user_modal').modal('show')

});

$(document).on('click', '.signup_btn', function(){
    var valid = validate_user('register'), button = $(this);
    if(valid!=='valid'){
        Swal.fire(
            'Notice!',
            valid,
            'error'
          );
        return false
    }
    $.ajax({
        url: url_root + "authentication/register_user",
        type: "POST",
        dataType: "JSON",
        data: {
            username: $('#register_user_modal #registration_username').val(),
            password: $('#register_user_modal #registration_password').val(),
            email_address: $('#register_user_modal #registration_user_email').val()

        },
        success: function (data) {
            $('.input-value').each(function(){
                $(this).removeClass(error_class);
            });
            if(data == 'registered'){
                button.parent().html(success_spinner);
                window.setTimeout(function() { 
                    window.location.href = url_root + 'main';
                }, 1000);
            }else{
                Swal.fire(
                    'Notice!',
                    data,
                    'error'
                  );
            }
        },
        error: function (xhr, desc, err) {
            Swal.fire(
                'Notice!',
                'We encountered an error! Try again Later!',
                'error'
              );
        },
    });
    
});
$(document).on('click', '.signin_btn', function(){
    var valid = validate_user('login'), button = $(this);
    if(valid!=='valid'){
        Swal.fire(
            'Notice!',
            valid,
            'error'
          );
          return false;
    }
    $.ajax({
        url: url_root + "authentication/login_user",
        type: "POST",
        dataType: "JSON",
        data: {
            username: $('#register_user_modal #login_user_email').val(),
            password: $('#register_user_modal #login_user_password').val()

        },
        success: function (data) {
            $('.input-value').each(function(){
                $(this).removeClass(error_class);
            });
            if(data == 'logged in'){
                button.parent().html(success_spinner);
                window.setTimeout(function() { 
                    window.location.href = url_root + 'main';
                }, 1000);
            }else{
                Swal.fire(
                    'Notice!',
                    data,
                    'error'
                  );
            }
        },
        error: function (xhr, desc, err) {
            Swal.fire(
                'Notice!',
                'We encountered an error! Try again Later!',
                'error'
              );
        },
    });
});

$(document).on('focus', '.input-value', function(){
    $(this).removeClass(error_class);
});

function validate_user(type){
    var valid = 'valid';
    if(type == 'register'){
        if($('#register_user_modal #registration_username').val().length<4){
            $('#register_user_modal #registration_username').addClass(error_class);
            valid ='Username must be 4 characters or more';
            return valid;
        }
        var test =  /^\w+$/.test($('#register_user_modal #registration_username').val());
        if(test==false){
            $('#register_user_modal #registration_username').addClass(error_class);
            valid ='Invalid Username';
            return valid;
        }

        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test($('#register_user_modal #registration_user_email').val())) {
            $('#register_user_modal #registration_user_email').addClass(error_class);
            valid ='Invalid Email';
            return valid;
        }

        if($('#register_user_modal #registration_password').val()!==$('#register_user_modal #registration_confirm_password').val()){
            $('#register_user_modal #registration_password').addClass(error_class);
            $('#register_user_modal #registration_confirm_password').addClass(error_class);

            valid ='Passwords do not match';
            return valid;
        }
        var pass_test =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test($('#register_user_modal #registration_password').val());
        if(pass_test==false){
            $('#register_user_modal #registration_password').addClass(error_class);
            $('#register_user_modal #registration_confirm_password').addClass(error_class);

            valid ='Invalid Password. Length must be at least 8 with at least one uppercase letter';
            return valid;
        }
    return valid;
    }else if(type == 'login'){
        if($('#register_user_modal #login_user_email').val().length<4){
            $('#register_user_modal #login_user_email').addClass(error_class);
            valid ='Invalid Username';
            return valid;
        }
        
        

        var pass_test =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test($('#register_user_modal #login_user_password').val());
        if(pass_test==false){
            $('#register_user_modal #login_user_password').addClass(error_class);
            $('#register_user_modal #login_user_password').addClass(error_class);

            valid ='Invalid Password.';
            return valid;
        }
    return valid;    }
}


$(document).on('click', '.add_new_project_btn', function(){
    $('#add_project_modal #project_name').val('');
    $('.submit_project_details_btn').removeClass('update_project_btn').html('Add Project');

    $('#add_project_modal').modal('show');
    $('.dropify').dropify();
});
function validate_input_length(modal_name, length, custom_length_1=0, custom_length_2=0){
    var isvalid=true;
    $('#'+modal_name+' .input-value').each(function(){
        if($(this).val()<length){
            $(this).addClass(error_class);
            isvalid=false;
        }
    });
    return isvalid;
}
$(document).on('click', '.submit_project_details_btn', function(){
    if(!validate_input_length('add_project_modal', 3)){
        return false;
    }
    var project_template = $('.project_template').clone(),url='add_project',id=null;

    if($(this).hasClass('update_project_btn')){
        url = 'edit_project/update';
        id = $(this).prop('id');
    }
    // project_template.find('.my_project').removeClass('hidden');
    $.ajax({
        url: url_root + "main/"+url,
        type: "POST",
        dataType: "JSON",
        data: {
            project_name: $('#add_project_modal #project_name').val(),
            project_template: project_template.html(),
            id:id

        },
        success: function (data) {
            if(data == "project exists"){
                Swal.fire('Wait a minute...', 'You already have this project on deck!', 'info');
                return false;
            }
            if(data.status == "added"){
                $('.projects_section').append(data.project);
                $('.projects_section #'+data.id).slideDown('slow');
                $('#add_project_modal').modal('hide');
                $('#add_project_modal #project_name').val('');
                notify_me('Project Added', 'center', 'success', '1000');
            }
            if(data.status == "updated"){
                $('#add_project_modal').modal('hide');
                $('.projects_section #'+data.id).fadeOut('fast', function(){
                    window.setTimeout(function() { 
                        $('.projects_section #'+data.id+' .font-extrabold').html(data.project);
                        if(data.project_image!=='none'){
                            $('.projects_section #'+data.id+' .bg-cover').css("background-image", "url("+url_root+"/resources/images/+"+data.project_image+")");  
                        }
                        $('.projects_section #'+data.id).slideDown('fast');
                    }, 100);
                });              
            }
        },
        error: function (xhr, desc, err) {
            Swal.fire(
                'Notice!',
                'We encountered an error! Try again Later!',
                'error'
              );
        },
    });
});

$(document).on('click', '.delete_project_btn', function(){
    var current_btn = $(this);
    // Swal.fire(
        $.ajax({
            url: url_root + "main/delete_project",
            type: "POST",
            dataType: "JSON",
            data: {
                project_id: $(this).prop('id')
    
            },
            success: function (data) {
                $(current_btn).closest('.my_project').slideUp('slow');
                notify_me('Project Removed', 'center', 'success', '1000');
            },
            error: function (xhr, desc, err) {
                Swal.fire(
                    'Notice!',
                    'We encountered an error! Try again Later!',
                    'error'
                  );
            },
        });
    //     'Confirm',
    //     'Are you sure you want to delete this project? Note Deleted projects are sent to a bin where they are deleted after 7 days.'
    // );
    // Swal.fire({
    //     title: 'Are you sure?',
    //     text: "You won't be able to revert this!",
    //     icon: 'warning',
    //     showCancelButton: true,
    //     customClass: {
    //         confirmButton: 'bg-teal-400',
    //         cancelButton: 'btn btn-danger'
    //       },
    //     // confirmButtonColor: '#3085d6',
    //     // cancelButtonColor: '#d33',
    //     confirmButtonText: 'Yes, delete it!'
    //   }).then((result) => {
    //     if (result.isConfirmed) {
    //       Swal.fire(
    //         'Deleted!',
    //         'Your file has been deleted.',
    //         'success'
    //       )
    //     }
    //   })

});

$(document).on('click', '.edit_project_btn', function(){
    var id = $(this).prop('id');
    $.ajax({
        url: url_root + "main/edit_project/start",
        type: "POST",
        dataType: "JSON",
        data: {
            project_id: $(this).prop('id')

        },
        success: function (data) {
            $('#add_project_modal #project_name').val(data.name);
            // $('#project_image').attr("data-default-file", "http://mod_organizer.test/resources/images/"+data.image);            
            // var drEvent = $('#project_image').dropify();
            // drEvent = drEvent.data('dropify');
            // drEvent.resetPreview();
            // drEvent.clearElement();
            // drEvent.destroy();
            // drEvent.init();
            // $('#project_image').dropify();
            $('.submit_project_details_btn').addClass('update_project_btn').html('Update').prop('id',id);

            $('#add_project_modal').modal('show');

        },
        error: function (xhr, desc, err) {
            Swal.fire(
                'Notice!',
                'We encountered an error! Try again Later!',
                'error'
              );
        },
    });
});