
@extends('layouts.masterLayout')
@section('content')
<div class="container"><br><br><br><br><br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}

                    <table class="table table-responsive">
                        <tr><th>Username</th><th>:</th><td>{{$user->username}}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{$user->Name}}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{$user->email}}</td></tr>
                        <tr><th>Created</th><th>:</th><td>{{$user->created_at}}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br><br><br><br><br><br><br><br>
@endsection
