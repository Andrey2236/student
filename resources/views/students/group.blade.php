<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>

    <div class="container">
    <br />
     <h2>Список групп/h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Группа</th>
        <th>описание Группы</th>
      </tr>
    </thead>
    <tbody>

      @foreach($groups as $group)
      <tr>
        <td>{{$group['name']}}</td>
        <td>{{$group['description']}}</td>

        <td><a href="{{action('GroupController@edit', $group['id'])}}"
               class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('GroupController@destroy', $group['id'])}}" method="post">
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