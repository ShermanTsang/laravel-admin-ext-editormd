<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{$id}}" class="col-sm-2  control-label">
        {{$label}}
    </label>
    <div class="col-sm-8">
        @include('admin::form.error')
        @include('admin::form.help-block')
        @if(config('admin.extensions.editormd.dynamicMode'))
            <div id="editormd-create-btn-{{$id}}" class="editormd-create-btn">
                点击展开{{$label ?? ''}}编辑器
            </div>
        @endif
    </div>
    <div class="editormd-body {{config('admin.extensions.editormd.wideMode') ? 'col-sm-12' : $viewClass['field'] }}">
        <div id="{{$id}}">
            <textarea {!! $attributes !!} style="display:none;">{{ old($column, $value) }}</textarea>
        </div>
    </div>
</div>

<style>

    .editormd-create-btn {
        padding: 10px;
        border: 1px solid #d2d6de;
        color: #666;
        cursor: pointer;
        text-align: center;
        width: 100%;
        margin: 0 auto;
        transition: all .2 ease-in-out;
    }

    .editormd-create-btn:hover {
        box-shadow: 0 0 8px rgba(177, 177, 177, .5) inset;
    }

    .editormd-fullscreen {
        z-index: 9999 !important;
    }

    .editormd-body {
        margin-top: 10px;
    }

</style>
