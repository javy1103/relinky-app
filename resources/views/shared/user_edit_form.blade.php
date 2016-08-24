<form action="{{ action('UsersController@update', ['username' => $user->username]) }}" class="uk-form-stacked" id="user_edit_form">
    {{ csrf_field() }}
    <div class="uk-margin-top">
        <h3 class="full_width_in_card heading_c">
            General info
        </h3>
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-3">
                <label for="user_edit_name">Name</label>
                <input class="md-input" type="text" id="user_edit_name" name="name" value="{{ $user->name }}"/>
            </div>
            <div class="uk-width-medium-1-3">
                <label for="user_edit_email">Email</label>
                <input class="md-input" type="email" id="user_edit_email" name="email" value="{{ $user->email }}"/>
            </div>
            <div class="uk-width-medium-1-3">
                <label for="user_edit_password">Username</label>
                <input class="md-input" type="text" id="user_edit_username" name="username" value="{{ $user->username }}"/>
            </div>
            <div class="uk-width-medium-1-3 uk-container-center">
                <span data-uk-modal="{target: '#modal_header_footer'}" class="md-btn md-btn-primary md-btn-block md-btn-wave-light waves-effect waves-button waves-light">Change Password</span>
            </div>
        </div>
    </div>
</form>
