@extends('template')

@section('page-title')
    Users
@endsection

@section('page-header')
    Users
@endsection

@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <div class="row gtr-uniform">
                <div class="col-12">
                    {{ $users->render() }}
                </div>
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Birthday</th>
                                <th>Gender</th>
                                <th>Edit User</th>
                                <th>Delete User</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td><a href="#">{{ $user->id }}</a></td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <a target="_blank" href="{{ Route('users.search',['search_field' => 'email','search_value' => $user->email]) }}">
                                    {{ $user->email }}
                                    </a>
                                </td>
                                <td>
                                    <a target="_blank" href="{{ Route('users.search',['search_field' => 'mobile','search_value' => $user->mobile]) }}">
                                        {{ $user->mobile }}
                                    </a>
                                </td>
                                <td>{{ $user->birthday->format('d-m-y') }}</td>
                                <td>{{ ucfirst($user->gender) }}</td>
                                <td>
                                    <a href="{{ route('users.edit',['user' => $user]) }}" class="button primary">Edit</a>
                                </td>
                                <td>
                                    {!! Form::open([
                                        'url' => Route('users.destroy',['user' => $user]),
                                        'method' => 'DELETE'
                                        ]) !!}
                                    <input type="submit" class="button primary" value="Delete">
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection