<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Diary</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

    <div id="content" style="padding: 50px;">

        <h4>
            <a href="/"><< 返回首頁</a>
        </h4>

        <h1 style="text-align: center; margin-top: 50px;">{{ $article->title }}</h1>
        <hr>
        <div id="date" style="text-align: right;">
            {{ $article->updated_at }}
        </div>
        <div id="content" style="margin: 20px;">
            <p>
                {{ $article->body }}
            </p>
        </div>

        <div id="comments" style="margin-top: 50px;">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>失敗</strong> 輸入不符合要求<br><br>
                    {!! implode('<br>', $errors->all()) !!}
                </div>
            @endif
            
            <hr color=grey>
            <div id="new" style=" padding: 5px 20px;" >
            <font size='5'>Comment:</font>
                <form action="{{ url('comment') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <div class="form-group">
                        <label>nickname</label>
                        <input type="text" name="nickname" class="form-control" style="width: 300px;" required="required">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" id="newFormContent" class="form-control" rows="3" required="required"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success col-lg">Submit</button>
                </form>
            </div>

            <div class="conmments" style="margin-top: 100px;">
                @foreach ($article->hasManyComments as $comment)
                    <div class="one" style="border-top: solid 10px #efefef; padding: 5px 20px;">
                        <div class="name" data="{{ $comment->name }}">
                            <h3>{{ $comment->nickname }}</h3>
                            <h4>{{ $comment->created_at }}</h4>
                        </div>
                        <div class="content">
                            <p style="padding: 20px;">{{ $comment->content }}</p>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

    </div>

</body>
</html>