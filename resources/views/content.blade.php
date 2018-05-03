@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div>
                    <form >
                        <p>{{$article->title}}</p>
                        <hr>
                        <p>{{$article->body}}</p>                
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection