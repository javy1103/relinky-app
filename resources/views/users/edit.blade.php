@extends('layouts.dashboard')

@section('head')
    <link rel="stylesheet" href="/css/icons/flags/flags.min.css" media="all">
    <script src="/js/dashboard/custom/uikit_fileinput.js"></script>
    <!--  user edit functions -->
    <script src="/js/dashboard/pages/page_user_edit.js"></script>
@endsection

@section('content')
    <div id="page_content_inner">
        <div id="page_content_inner">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-7-10">
                    <div class="md-card">
                        <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img id="profile-image" src="assets/img/avatars/user.png" alt="user avatar"/>
                                </div>

                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div class="user_avatar_controls">
                                    <span class="btn-file">
                                        <span class="fileinput-new"><i class="material-icons">&#xE2C6;</i></span>
                                        <span class="fileinput-exists"><i class="material-icons">&#xE86A;</i></span>
                                        <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">
                                    </span>
                                    <a href="#" class="btn-file fileinput-exists" data-dismiss="dfileinput"><i class="material-icons">&#xE5CD;</i></a>
                                </div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">{{ $user->name }}</span><span class="sub-heading">Land acquisition specialist</span></h2>
                            </div>
                            <div class="md-fab-wrapper">
                                <div class="md-fab md-fab-toolbar md-fab-small md-fab-accent">
                                    <i class="material-icons">&#xE8BE;</i>
                                    <div class="md-fab-toolbar-actions">
                                        <button type="submit" id="user_edit_save" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Save"><i class="material-icons md-color-white">&#xE161;</i></button>
                                        <button type="submit" id="user_edit_print" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Print"><i class="material-icons md-color-white">&#xE555;</i></button>
                                        <button type="submit" id="user_edit_delete" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Delete"><i class="material-icons md-color-white">&#xE872;</i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user_content">
                            <span class="upload-file">Upload</span>
                            <ul id="user_edit_tabs" class="uk-tab" data-uk-tab="{connect:'#user_edit_tabs_content'}">
                                <li class="uk-active"><a href="#">Edit Profile</a></li>
                                <li><a href="#">Account Settings</a></li>
                            </ul>
                            <ul id="user_edit_tabs_content" class="uk-switcher uk-margin">
                                <li class="form-container">
                                    <form class="" action="index.html" method="post">

                                    </form>
                                    <div class="uk-margin-top">
                                        <h3 class="full_width_in_card heading_c">
                                            Name here!!!
                                        </h3>
                                        <div class="uk-grid" data-uk-grid-margin>
                                            <div class="uk-width-medium-1-1">
                                                <div class="uk-form-row">
                                                    <label>Bio</label>
                                                    <textarea cols="30" class="md-input">{{ $user->profile->bio }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="full_width_in_card heading_c">
                                            Languages
                                        </h3>
                                        <div class="uk-grid" data-uk-grid-margin>
                                            <div class="uk-width-1-1">
                                                <select id="user_edit_languages" name="user_edit_languages" multiple>
                                                    <option value="gb" selected>English</option>
                                                    <option value="pl" selected>Polish</option>
                                                    <option value="fr" selected>French</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h3 class="full_width_in_card heading_c">
                                            Contact info
                                        </h3>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon">
                                                                <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                                            </span>
                                                            <label>Email</label>
                                                            <input type="text" class="md-input" name="user_edit_email" value="frami.zula@hillsklein.net" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon">
                                                                <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                                            </span>
                                                            <label>Phone Number</label>
                                                            <input type="text" class="md-input" name="user_edit_phone" value="798.981.0388x44933" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon">
                                                                <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                                            </span>
                                                            <label>Facebook</label>
                                                            <input type="text" class="md-input" name="user_edit_facebook" value="facebook.com/envato" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon">
                                                                <i class="md-list-addon-icon uk-icon-twitter"></i>
                                                            </span>
                                                            <label>Twitter</label>
                                                            <input type="text" class="md-input" name="user_edit_twitter" value="twitter.com/envato" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon">
                                                                <i class="md-list-addon-icon uk-icon-linkedin"></i>
                                                            </span>
                                                            <label>Linkdin</label>
                                                            <input type="text" class="md-input" name="user_edit_linkdin" value="linkedin.com/company/envato" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-input-group">
                                                            <span class="uk-input-group-addon">
                                                                <i class="md-list-addon-icon uk-icon-google-plus"></i>
                                                            </span>
                                                            <label>Google+</label>
                                                            <input type="text" class="md-input" name="user_edit_google_plus" value="plus.google.com/+envato/about" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="form-container">
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
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-modal" id="modal_header_footer">
                    <div class="uk-modal-dialog">
                        <div class="uk-modal-header">
                            <h3 class="uk-modal-title">New Password <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="Please enter a password that is 6 characters minimum">&#xE8FD;</i></h3>
                        </div>
                        <form action="{{ action('UsersController@update', ['username' => $user->username]) }}" id="user_password_form">
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1">
                                    <label for="user_edit_password">Password</label>
                                    <input class="md-input" type="password" id="user_edit_password" name="password"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1">
                                    <label for="user_edit_password_confirmation">Password Confirmation</label>
                                    <input class="md-input" type="password" id="user_edit_password_confirmation" name="password_confirmation"/>
                                </div>
                            </div>
                            <div class="uk-modal-footer uk-text-right">
                                <button type="button" id="user_password_save" class="md-btn md-btn-flat md-btn-flat-primary uk-modal-close">Save</button><button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="uk-width-large-3-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_c uk-margin-medium-bottom">Other settings</h3>
                            <div class="uk-form-row">
                                <input type="checkbox" {{ $user->isActive ? 'checked' : '' }} data-switchery id="user_edit_active" />
                                <label for="user_edit_active" class="inline-label">User Active</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
