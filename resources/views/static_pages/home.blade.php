@extends('layouts.default')
@section('content')
<div class="jumbotron">
<h1>欢迎来到JYF的应用</h1>
<p class="lead">
    你现在看到的是<a href="tencent://AddContact/?fromId=45&fromSubId=1&subcmd=all&uin=283678339&website=www.oicqzone.com">假疯</a>学PHP的入门网页的示例项目主页。
</p>
<p>
    永远相信，美好的事情即将发生。
</p>
<p>
    <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
</p>
</div>
@stop
