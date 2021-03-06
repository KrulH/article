
<div class="form-group">
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Body:') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('published_at', 'Published On:') }}
    {{ Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) }}
</div>
<!-- Tags Form Input -->
<div class="form-group">
    {{ Form::label('tag_list', 'Tags:') }}
    {{ Form::select('tag_list[]',$tags, null, ['id' => 'tag_list','class' => 'form-control','multiple']) }}
</div>
{{ Form::submit($submitButton,['class' => 'btn btn-primary form-control']) }}

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder:'choose a tag'
        });
    </script>
@stop
