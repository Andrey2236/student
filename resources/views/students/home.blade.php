<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <div class="container">
  <td><a href="{{action('StudentControler@create')}}" class="btn btn-warning">создать студента</a></td>
  <td><a href="{{action('DisciplineController@create')}}" class="btn btn-warning">создать дисциплину </a></td>
  <td><a href="{{action('GroupController@create')}}" class="btn btn-warning">создать группу</a></td>

  </div>
  <div class="container">
  <td><a href="{{action('GroupController@index')}}" class="btn btn-warning">Показать Группы</a></td>
    <td><a href="{{action('DisciplineController@index')}}" class="btn btn-warning">Показать Дисциплину</a></td>
    <td><a href="{{action('StudentControler@index')}}" class="btn btn-warning">Показать Студентов</a></td>
  </div>
    <div class="container">
    <br />
     <h2>Список студентов</h2>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>""</th>
        @foreach($students as $student)
          <td>{{$student->name}}</td>--}}

        @endforeach
      </tr>
      </thead>
{{--      <thead>--}}
{{--      <tr>--}}
{{--        @foreach($students as $student)--}}
{{--        <tr>--}}
{{--          <td>{{$student->discipline->implode('name', ',')}}</td>--}}
{{--        @endforeach--}}
{{--      </tr>--}}
{{--      </thead>--}}
{{--    <tbody>--}}

{{--      @foreach($students as $student)--}}
{{--      <tr>--}}
{{--        <td>{{$student['name']}}</td>--}}
{{--        <td>{{$student['surname']}}</td>--}}
{{--        <td>{{$student['patronymic']}}</td>--}}
{{--        <td>{{$student['date']}}</td>--}}
{{--        <td>{{$student->discipline->implode('name',',')}}</td>--}}
{{--        <td>{{$student->group->name}}</td>--}}
{{--       <td>{{$student->group->description}}</td>--}}
{{--        <td>{{$student->discipline->first()->pivot->assessment}}</td>--}}
{{--        <td><a href="{{action('StudentControler@edit', $student['id'])}}"--}}
{{--               class="btn btn-warning">Edit</a></td>--}}
{{--        <td>--}}
{{--          <form action="{{action('StudentControler@destroy', $student['id'])}}" method="post">--}}
{{--            @csrf--}}
{{--            <input name="_method" type="hidden" value="DELETE">--}}
{{--            <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--          </form>--}}
{{--        </td>--}}
{{--      </tr>--}}
{{--      @endforeach--}}
    </tbody>
  </table>
  </div>
  </body>
</html>