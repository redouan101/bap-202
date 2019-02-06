@extends('layouts.app')

@section('content')

        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>@if($user->is_admin === 1)
                                <i class="fas fa-check"></i>
                            @endif</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>

    @endsection