@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Employee !!') }}<br><br>
                    <a href='{{route('employees')}}'>veiw all employees</a><br><br>
                    <a href='{{route('home')}}' >show Employee Personal Info(this route is not available right now(i will use the IsEmployee middleware for it))</a><br><br>
                    <a href='{{route('home')}}' >back to the previous page</a><br>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
