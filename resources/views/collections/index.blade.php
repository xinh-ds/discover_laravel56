<!DOCTYPE html>
<html>
<head>
    <title>Collection</title>
    <link rel="stylesheet" href="{{ asset('app/css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .btn-danger {
            position: fixed;
            top: calc(90%);
            left: calc(95%)
        }
    </style>
</head>
<body>
    <div id="top"></div>
    <div class="row">
        <div class="col-md-2 _left-side-bar">
            <ul>
            <li><button class="btn btn-success btn-eloquent btn-show" alt="eloquent">Eloquent</button></li>
            <li><button class="btn btn-success btn-model btn-show" alt="model">Model</button></li>
            <li><button class="btn btn-success btn-builder btn-show" alt="builder">Builder</button></li>
            </ul>
        </div>
        <div class="col-md-10">
            <div id="eloquent" class="tag-news-table tag-news-table-index">
                <pre class="pre-function"><code>$employees = [
    ['name' => 'Nguyễn Đức A', 'age' => 20, 'salary' => 1000],
    ['name' => 'Nguyễn Đức Xinh', 'age' => 30, 'salary' => 2000],
    ['name' => 'Nguyễn Đức B', 'age' => 30, 'salary' => 3000],
];
$data = collect($employees)->avg('salary');
<span class="comment">// 2000</span>
</code></pre>
            </div>
            @include('collections.eloquent')
            @include('collections.model')
            @include('collections.builder')
        </div>
    </div>
    <a href="#top" class="btn btn-danger">TOP</a>
    <script type="text/javascript" src="{{ asset('app/js/collection.js') }}"></script>
</body>
</html>