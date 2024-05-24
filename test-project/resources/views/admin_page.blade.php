<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evNxOUQCT79vEYcZch4cDcyzslIvEoZxonMRlTyhxlQv1qGOVFyE4GIaWFA7SjvOM" crossorigin="anonymous">
</head>

<body>
<h1>Users</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">順番</th>
      <th scope="col">名前</th>
      <th scope="col">Email</th>
      <th scope="col">バンする</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
      @if (! $user->ban_user) <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <form action="{{ route('users.ban', $user->id) }}" method="POST">
            <td>
              @csrf
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('削除したいの？？')">削除</button>
            </td>
          </form>
          <form action="{{ route('users.banban', $user->id) }}" method="POST">
            <td>
              @csrf
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('削除したいの？？')">really</button>
            </td>
          </form>
        </tr>
      @endif
    @endforeach
  </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-OgwbZS7/BXzYhFOTuIr+hC7chHFLQaFu3HPDLfPvmMNOEv6UR/PkJG8VU81zGyqywx" crossorigin="anonymous"></script>

</body>

</html>