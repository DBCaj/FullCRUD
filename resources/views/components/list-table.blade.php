<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @extends('layouts.main')
  @section('list-table')
  
  <hr>
  
  @if(Session::get('success'))
    <div>
      {{ Session::get('success') }}
    </div>
  @endif
  
  <h2 class="text-georgia">User List</h2>
  <div style="overflow-x:auto">
    <table border="1">
      <thead>    
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th colspan="2">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
              <a href="{{ route('user.edit', $user->id) }}">
                Edit
              </a>
            </td>
            <td>
              <a href="{{ route('user.delete', $user->id) }}" onclick="return confirm('Are you sure you want to delete?')">
                Delete
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
  {{ $users->links() }}
      
  @stop 
  
</body>
</html>