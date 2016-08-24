/*
*  altair admin
*  @version v2.7.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  page_user_edit.js - page_user_edit.html
*/

$(function() {
    // user edit
    altair_user_edit.init();
});

altair_user_edit = {

    init: function() {
        // user edit form
        altair_user_edit.edit_form();
        // user languages
        altair_user_edit.user_languages();
        // user groups
        altair_user_edit.user_groups();
        // user todo_list
        altair_user_edit.user_todo();
    },

    save( data, url ) {
        $.ajax({
            type: 'PUT',
            url: url,
            dataType: 'json',
            data: data
        })
        .done( data => UIkit.notify({ message: data.message, status: 'success' }) )
        .fail( () => UIkit.notify({ message: "There was a problem while updating your account.", status: 'danger' }) )
    },

    edit_form: function() {

        // form variables
        var $user_edit_form = $('#user_edit_form'),
            $user_edit_submit_btn = $('#user_edit_save'),
            user_edit_name = $('#user_edit_name'),
            user_edit_email = $('#user_edit_email'),
            user_edit_active = $('#user_edit_active'),
            user_edit_username = $('#user_edit_username'),
            user_edit_password = $('#user_edit_password'),
            user_edit_password_confirmation = $('#user_edit_password_confirmation'),
            $user_password_save = $('#user_password_save'),
            $user_password_form = $('#user_password_form'),
            uploadFile = $(".upload-file")




        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': token = $('[name="_token"]').val() },
        })

        user_edit_active.on('change', () => {
            let data = { isActive: Boolean(user_edit_active.is(':checked')) },
                url = $user_edit_form.attr('action')
            this.save(data, url)
        })

        // submit form
        $user_edit_submit_btn.on('click', (e) => {
            e.preventDefault();

            let submit_form = $(".form-container.uk-active form"),
                form_serialized = submit_form.serializeObject(),
                url = submit_form.attr('action')
            this.save(form_serialized, url)
        })

        // submit form
        $user_password_save.on('click', (e) => {
            e.preventDefault();
            let form_serialized = $user_password_form.serializeObject(),
                url = $user_password_form.attr('action')
            this.save(form_serialized, url)
        })

        uploadFile.on('click', (e) => {
            e.preventDefault();
            let data = new FormData(),
                file = $('#user_edit_avatar_control').prop('files')[0]

            data.append('image', file)

            $.ajax({
                url: '/users/javy1103',
                type: 'POST',
                data: data,
                dataType: 'JSON',
                contentType: false,
                processData: false,
            })
            .done( response => {
                console.log(response);
            })

        })
    },

    user_languages: function(languages) {

        $('#user_edit_languages').selectize({
            plugins: {
                'remove_button': {
                    label     : ''
                }
            },
            placeholder: 'Select language(s)',
            options: languages,
            render: {
                option: function(data, escape) {
                    return  '<div class="option">' +
                    '<i class="item-icon flag-' + escape(data.value).toUpperCase() + '"></i>' +
                    '<span>' + escape(data.title) + '</span>' +
                    '</div>';
                },
                item: function(data, escape) {
                    return '<div class="item"><i class="item-icon flag-' + escape(data.value).toUpperCase() + '"></i>' + escape(data.title) + '</div>';
                }
            },
            load: function(query, callback) {
                if (!query.length) return callback();
                $.getJSON('/languages')
                .done(function(data){
                    callback(data)
                })
            },
            maxItems: null,
            valueField: 'value',
            labelField: 'title',
            searchField: 'title',
            create: false,
            onDropdownOpen: function($dropdown) {
                $dropdown
                .hide()
                .velocity('slideDown', {
                    begin: function() {
                        $dropdown.css({'margin-top':'0'})
                    },
                    duration: 200,
                    easing: easing_swiftOut
                })
            },
            onDropdownClose: function($dropdown) {
                $dropdown
                .show()
                .velocity('slideUp', {
                    complete: function() {
                        $dropdown.css({'margin-top':''})
                    },
                    duration: 200,
                    easing: easing_swiftOut
                })
            }
        });
    },
    user_groups: function() {

        var $user_groups = $('#user_groups'),
        $all_groups = $('#all_groups'),
        $user_groups_control = $('#user_groups_control'),
        serialize_user_group = function() {
            var serialized_data = $user_groups.data("sortable").serialize();
            $user_groups_control.val( JSON.stringify(serialized_data) );
        };


        var sortable_user_groups = UIkit.sortable($user_groups, {
            group: '.groups_connected',
            handleClass: 'sortable-handler'
        });

        UIkit.sortable($all_groups, {
            group: '.groups_connected',
            handleClass: 'sortable-handler'
        });

        // serialize user group on change
        $user_groups.on('change.uk.sortable',function() {
            serialize_user_group();
        });

        // serialize group on init
        serialize_user_group();

    },
    user_todo: function() {
        var $user_todo = $('#user_todo');
        $user_todo.find('input:checkbox')
        .on('ifChecked', function(){
            $(this).closest('li').addClass('md-list-item-disabled');
        })
        .on('ifUnchecked', function(){
            $(this).closest('li').removeClass('md-list-item-disabled');
        });
    }
};
