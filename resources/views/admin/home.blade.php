@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">NEWS後台</div>

                <div class="panel-body">
                
                    <a href="{{ url('admin/article') }}" class="btn btn-lg btn-success col-xs-12">管理篇章</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
