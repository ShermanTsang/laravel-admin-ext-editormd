<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{$id}}"
           class="{{config('admin.extensions.editormd.wideMode')? 'col-sm-12'.' editormd-wide-mode-label' : $viewClass['label'].' control-label' }}">{{$label}}</label>
    <div class="{{config('admin.extensions.editormd.wideMode') ? 'col-sm-12' : $viewClass['field'] }}">
        @include('admin::form.error')
        <div id="{{$name}}">
            <textarea {!! $attributes !!} style="display:none;">{{ old($column, $value) }}</textarea>
        </div>
        @include('admin::form.help-block')
    </div>
</div>

<style>

    .editormd-fullscreen {
        z-index: 9999 !important;
    }

    .editormd-wide-mode-label {
        text-align: center;
        margin-bottom: 10px;
    }

</style>