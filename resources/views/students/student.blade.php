<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <div class="container">
  <td><a href="{{action('StudentControler@create')}}" class="btn btn-warning">создать</a></td>
  <td><a href="{{action('DisciplineController@create')}}" class="btn btn-warning">создать дисциплину </a></td>
  <td><a href="{{action('GroupController@create')}}" class="btn btn-warning">создать группу</a></td>
  <td><a href="{{action('EvaluationController@create')}}" class="btn btn-warning">создать оценку</a></td>
  </div>
    <div class="container">
    <br />
     <h2>Список студентов</h2>
    <table class="table table-striped">
    <thead>
      <tr>

        <th>Фамилия </th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Дата рождения</th>
        <th>Группа</th>
        <th>Дисцеплина</th>
        <th>Оценка</th>
        <th colspan="4">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($students as $student)
      <tr>
        <td>{{$student['name']}}</td>
        <td>{{$student['surname']}}</td>
        <td>{{$student['patronymic']}}</td>
        <td>{{$student['data']}}</td>

{{--        <td><a href="{{action('StudentController@edit', $student['id'])}}" class="btn btn-warning">Edit</a></td>--}}
{{--        <td>--}}
{{--          <form action="{{action('StudentController@destroy', $student['id'])}}" method="post">--}}
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>