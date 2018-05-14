@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading;" style ="font-size: 28px;">DIARY後台</div>

                <div class="panel-body"style="border-top: solid 10px #efefef; padding: 8px 20px;">
                
                    <a href="{{ url('admin/article/'.$user->id) }}" class="btn btn-lg btn-success col-xs-12">管理文章</a>
                    <hr>
                    <a href="{{ url('admin/comment') }}" class="btn btn-lg btn-success col-xs-12">管理評論</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
