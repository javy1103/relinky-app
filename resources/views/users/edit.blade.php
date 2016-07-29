@extends('layouts.dashboard')

    @section('head')
        <link rel="stylesheet" href="/css/dashboard/css/style_switcher.min.css" media="all">
        <link rel="stylesheet" href="/css/icons/flags/flags.min.css" media="all">
        <!-- page specific plugins -->
        <!-- file input -->
        <script src="/js/dashboard/custom/uikit_fileinput.js"></script>

        <!--  user edit functions -->
        <script src="/js/dashboard/pages/page_user_edit.js"></script>
    @endsection

@section('content')
<div id="page_content_inner">
    <div id="page_content_inner">
        <form action="" class="uk-form-stacked" id="user_edit_form">
            {{ csrf_field() }}
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-7-10">
                    <div class="md-card">
                        <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="assets/img/avatars/user.png" alt="user avatar"/>
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div class="user_avatar_controls">
                                    <span class="btn-file">
                                        <span class="fileinput-new"><i class="material-icons">&#xE2C6;</i></span>
                                        <span class="fileinput-exists"><i class="material-icons">&#xE86A;</i></span>
                                        <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">
                                    </span>
                                    <a href="#" class="btn-file fileinput-exists" data-dismiss="fileinput"><i class="material-icons">&#xE5CD;</i></a>
                                </div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate" id="user_edit_uname">Margarete Monahan</span><span class="sub-heading" id="user_edit_position">Land acquisition specialist</span></h2>
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
                            <ul id="user_edit_tabs" class="uk-tab" data-uk-tab="{connect:'#user_edit_tabs_content'}">
                                <li class="uk-active"><a href="#">Basic</a></li>
                            </ul>
                            <ul id="user_edit_tabs_content" class="uk-switcher uk-margin">
                                <li>
                                    <div class="uk-margin-top">
                                        <h3 class="full_width_in_card heading_c">
                                            General info
                                        </h3>
                                        <div class="uk-grid" data-uk-grid-margin>
                                            <div class="uk-width-medium-1-2">
                                                <label for="user_edit_uname_control">User name</label>
                                                <input class="md-input" type="text" id="user_edit_uname_control" name="name" />
                                            </div>
                                            <div class="uk-width-medium-1-2">
                                                <label for="user_edit_position_control">User position</label>
                                                <input class="md-input" type="text" id="user_edit_position_control" name="user_edit_position_control" />
                                            </div>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <label for="user_edit_personal_info_control">About</label>
                                                <textarea class="md-input" name="user_edit_personal_info_control" id="user_edit_personal_info_control" cols="30" rows="4">Repellat amet voluptas fugit doloremque reiciendis repellat praesentium quidem et eum aut voluptatem hic aut laborum ullam ipsam dicta quo ad quae beatae eius voluptas sequi voluptatem reiciendis quam omnis officia deserunt nostrum cupiditate corrupti doloribus quos eos temporibus et et enim qui quae omnis.</textarea>
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
                                                            <input type="text" class="md-input" name="email" value="{{ old('email') }}" />
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-3-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_c uk-margin-medium-bottom">Other settings</h3>
                            <div class="uk-form-row">
                                <input type="checkbox" checked data-switchery id="user_edit_active" />
                                <label for="user_edit_active" class="inline-label">User Active</label>
                            </div>
                            <hr class="md-hr">
                            <div class="uk-form-row">
                                <label class="uk-form-label" for="user_edit_role">User Role</label>
                                <select data-md-selectize>
                                    <option value="">Select...</option>
                                    <option value="admin">Admin</option>
                                    <option value="super_admin">Super Admin</option>
                                    <option value="editor" selected>Editor</option>
                                    <option value="author">Author</option>
                                    <option value="none">None</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection
