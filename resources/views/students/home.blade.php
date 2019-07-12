<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<div class="container">
    <div class="container">
        <td><a href="{{ route('student.create') }}" class="btn btn-warning">создать студента</a></td>
        <td><a href="{{ route('discipline.create') }}" class="btn btn-warning">создать дисциплину </a></td>
        <td><a href="{{ route('group.create') }}" class="btn btn-warning">создать группу</a></td>
        <td><a href="{{ route('evaluation.create') }}" class="btn btn-warning">поставить оценку студенту</a></td>
        {{--</div>--}}
        {{--<div class="container">--}}
        <td><a href="{{ route('group.index') }}" class="btn btn-warning">Показать Группы</a></td>
        <td><a href="{{ route('discipline.index') }}" class="btn btn-warning">Показать Дисциплину</a></td>
        <td><a href="{{  route('student.index') }}" class="btn btn-warning">Показать Студентов</a></td>
    </div>
    @foreach ($groups as $group)
        <table class="table table-bordered">
            {{--     //   <caption>{{ $group['name'] }}</caption>--}}
            <caption> среднее группы {{$assessmentGroup[$group->id]}}
                имя группы {{ $group['name'] }}</caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                @foreach ($disciplines as $discipline)
                    <th scope="col">{{ $discipline->name }}</th>
                @endforeach
                    {{--           // <th scope="col">{{$student->discipline->implode('name',',')}}</th>--}}
            </tr>
            </thead>

            <tbody>
            @foreach ($group->student as $student)
                <tr>
                    @if ($assessmentStudent[$student->id] === 5)
                        <th scope="row" class="table-success">{{ $student['name'] }}</th>
                    @elseif(($assessmentStudent[$student->id] < 4.5 || $assessmentStudent[$student->id] == 4.5)
                    && ($assessmentStudent[$student->id] > 3.1 || $assessmentStudent[$student->id] ==3.1))
                        <th scope="row" class="table-warning">{{ $student['name'] }}</th>
                    @elseif($assessmentStudent[$student->id] < 3 || $assessmentStudent[$student->id] == 3)
                        <th scope="row" class="table-danger">{{ $student['name'] }}</th>
                    @endif
                    @foreach ($student->discipline as $discipline)
{{--                        @if ($discipline['name'] === 'история' )--}}
{{--                            <td> оценка по истории{{$discipline->pivot->assessment}}</td>--}}
{{--                        @elseif ($discipline['name'] === 'русский')--}}
{{--                            <td> оценка по русскому{{$discipline->pivot->assessment}}</td>--}}
{{--                        @elseif ($discipline['name'] === 'Математика')--}}
                            <td> {{$discipline->pivot->assessment}}</td>
{{--                        @endif--}}
                    @endforeach
                </tr>
            </tbody>
            @endforeach
        </table>
    @endforeach
    <p> общее среднее {{$avgTotal}}</p>
</div>

{{--          <thead>--}}
{{--          <tr>--}}
{{--            @foreach($students as $student)--}}
{{--            <tr>--}}
{{--              <td>{{$student->discipline->implode('name', ',')}}</td>--}}
{{--            @endforeach--}}
{{--          </tr>--}}
{{--          </thead>--}}
{{--        <tbody>--}}

{{--          @foreach($students as $student)--}}
{{--          <tr>--}}
{{--            <td>{{$student['name']}}</td>--}}
{{--            <td>{{$student['surname']}}</td>--}}
{{--            <td>{{$student['patronymic']}}</td>--}}
{{--            <td>{{$student['date']}}</td>--}}
{{--            <td>{{$student->discipline->implode('name',',')}}</td>--}}
{{--            <td>{{$student->group->name}}</td>--}}
{{--           <td>{{$student->group->description}}</td>--}}
{{--            <td>{{$student->discipline->first()->pivot->assessment}}</td>--}}
{{--            <td><a href="{{action('StudentControler@edit', $student['id'])}}"--}}
{{--                   class="btn btn-warning">Edit</a></td>--}}
{{--            <td>--}}
{{--              <form action="{{action('StudentControler@destroy', $student['id'])}}" method="post">--}}
{{--                @csrf--}}
{{--                <input name="_method" type="hidden" value="DELETE">--}}
{{--                <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--              </form>--}}
{{--            </td>--}}
{{--          </tr>--}}
{{--          @endforeach--}}
{{--    </tbody>--}}
{{--    </table>--}}
{{--    </div>--}}

</body>
</html>