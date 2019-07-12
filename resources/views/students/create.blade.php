<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.7 Crud Example Tutorial </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if (session()->has('errors')) {
    dd(session()->get('errors'));
} ?>

<div class="container">
    <h2>Crud - create </h2><br/>

    <form method="post" action="{{ route('student.create') }}">
    @csrf
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" name="name">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="name">Фамилия:</label>
            <input type="text" class="form-control" name="surname">
        </div>
    </div>


    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="name">Отчество:</label>
            <input type="text" class="form-control" name="patronymic">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="date">Дата рождения:</label>
            <input type="number" class="form-control" name="date">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-offset-3 col-xs-6">
                <div class="form-group">
                    <div class="form-group input-group">
                        <label for="date">Группа:</label>
                        <select name="group_id" class="form-control">
                            @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($disciplines as $discipline)
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Оценка по {{ $discipline->name }}</label>
                <input type="text" class="form-control" name="evaluation[{{ $discipline->id }}]">
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

    </form>
</div>

</body>
</html>