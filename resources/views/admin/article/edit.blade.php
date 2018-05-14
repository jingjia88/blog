@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">編輯文章</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>編輯失敗</strong> 輸入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/article/'.$article->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <input type="text" name="title" class="form-control" required="required" value="{{$article->title}}">
                        <br>
                        <textarea class="form-control"name="body" id="body" required="required">{{$article->body}}</textarea>
                        <script>CKEDITOR.replace( 'body' );</script>
                        <br>
                        <button class="btn btn-lg btn-info">編輯文章</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection