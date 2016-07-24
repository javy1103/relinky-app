<div class="md-card-content large-padding" id="register_form">
    <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
    <form method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        @each('shared.util.form_attrs', $attrs, 'attr')
        <div class="uk-width-medium-1-3 uk-row-first">
            <input type="checkbox" data-switchery="true" checked="" id="switch_demo_1" style="display: none;"><span class="switchery switchery-default" style="border-color: rgba(0, 150, 136, 0.498039); box-shadow: rgba(0, 150, 136, 0.498039) 0px 0px 0px 7px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgba(0, 150, 136, 0.498039);"><small style="left: 18px; transition: background-color 0.4s, left 0.2s; background-color: rgb(0, 150, 136);"></small></span>
            <label for="switch_demo_1" class="inline-label">Service offline</label>
            <span class="uk-form-help-block">Checked</span>
        </div>
        <div class="uk-margin-medium-top">
            <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</button>
        </div>
    </form>
</div>
