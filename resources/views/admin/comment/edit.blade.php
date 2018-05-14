@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size:26px;font-weight:bold;">編輯評論</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>編輯失敗</strong> 輸入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/comment/'.$comment->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <h style="font-size:18px;">nickname:</h>
                        <input type="text" name="nickname" class="form-control" required="required" value="{{$comment->nickname}}">
                        <br>
                        <h style="font-size:18px;">content:</h>
                        <textarea name="content" rows="10" class="form-control" required="required">{{$comment->content}}</textarea>
                        <br>
                        <button class="btn btn-lg btn-info">編輯文章</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection