<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Assign Roles</title>
</head>
<body>
  <a href="{{ route('list_posts') }}" class="btn btn-primary">Return</a>
   
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Give Role</th>
        <th scope="col">Add Role</th>
      </tr>
    </thead>
</div>
  <div class="container">
    <tbody>
      
          
      
      @foreach ($users as $user)
      @if (!$user->email_verified_at == null) 
     
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
        
          
        
        @can('assign-roles')
          <a href="{{ route('give_roles', $user->id) }}" class="pull-right btn btn-sm btn-primary pd-4">Assign Role</a>
        @endcan 
       
          
         {{-- {{ Auth::user()->roles->pluck('slug')}} --}}
        </td>
         <td>
        {{ $user->roles()->get()->pluck('name') }}
        </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </div>
</table>
</body>
</html>
