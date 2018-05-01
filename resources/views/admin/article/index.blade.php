@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新聞管理</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                
                <a href="{{ url('admin/article/create') }}" class="btn btn-lg btn-primary">新增</a>

                @foreach ($article as $article)
                <hr>
                <div class="article">
                    <h4>{{ $article->title }}</h4>
                    <div class="content">
                        <p>
                            {{ $article->body }}
                        </p>
                    </div>
                </div>
                <a href="{{ url('admin/article/'.$article->id.'/edit') }}" class="btn btn-success">編輯</a>
                <form action="{{ url('admin/article/'.$article->id) }}" method="POST" style="display: inline;">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">删除</button>
                </form>
                 @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection