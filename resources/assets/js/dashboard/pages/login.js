/*
*  altair admin
*  @version v2.7.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  login.js - login.html
*/

$(function() {

    var $login_card = $('#login_card'),
        $login_form = $('#login_form'),
        $login_help = $('#login_help'),
        $login_password_reset = $('#login_password_reset');

    // login_page
    altair_login_page.init();
});

// variables


altair_login_page = {
    init: function () {
        // show login form (hide other forms)
        var login_form_show = function() {
            $login_form
                .show()
                .siblings()
                .hide();
        };

        // show login help (hide other forms)
        var login_help_show = function() {
            $login_help
                .show()
                .siblings()
                .hide();
        };

        // show password reset form (hide other forms)
        var password_reset_show = function() {
            $login_password_reset
                .show()
                .siblings()
                .hide();
        };

        $('#login_help_show').on('click',function(e) {
            e.preventDefault();
            // card animation & complete callback: login_help_show
            altair_md.card_show_hide($login_card,undefined,login_help_show,undefined);
        });

        $('#password_reset_show').on('click',function(e) {
            e.preventDefault();
            // card animation & complete callback: password_reset_show
            altair_md.card_show_hide($login_card,undefined,password_reset_show,undefined);
        });


    }
};
