
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
< class="container">
    <br/>
    <h2>Список групп/h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отчество</th>
                <th>Дата Рождения</th>
                <th colspan="4">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($students as $student)
                <tr>
                    <td>{{$student['name']}}</td>
                    <td>{{$student['surname']}}</td>
                    <td>{{$student['patronymic']}}</td>
                    <td>{{$student['date']}}</td>
                    <td>
                        <a href="{{ route('student.edit', $student) }}" class="btn btn-warning">
                            Edit
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('student.destroy', $student) }}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

</body>
</html>