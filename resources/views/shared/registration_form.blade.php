<div class="md-card-content large-padding" id="register_form">
    <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
    <form method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        @each('shared.util.form_attrs', $attrs, 'attr')
        <div class="uk-form-row">
            <p>
                <input {{ isset($pro) ? 'checked' : '' }} type="checkbox" name="profile_type" id="profile_type" data-md-icheck />
                <label for="profile_type" class="inline-label">Real Estate Professional</label>
            </p>
        </div>
        <div class="uk-margin-medium-top">
            <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</button>
        </div>
    </form>
</div>
