<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.7 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">
    <h2>Edit Data</h2><br/>
    <form method="post" action="{{ route('student.update', $student)}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Имя:</label>
                <input type="text" class="form-control" name="name" value="{{$student->name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="birthyear">Фамилия:</label>
                <input type="text" class="form-control" name="surname" value="{{$student->surname}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="description">Отчество:</label>
                <input type="text" class="form-control" name="patronymic" value="{{$student->patronymic}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="link">Дата Рождения:</label>
                <input type="text" class="form-control" name="date" value="{{$student->date}}">
            </div>
        </div>
        @foreach($disciplines as $disciplineId => $discipline)
            <div class="row">

                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Оценка по {{ $discipline->name }}</label>
                    <input type="text" class="form-control"
                           name="evaluation[{{ $discipline->id }}]"
                           value=" {{ $student->discipline[$disciplineId]->pivot->assessment }}">
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>