
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
                     <a href='{{route('manager.show.edit')}}'>Show ALL Users And Edit for Any User (Employee,Manager)</a><br><br>  
                     <a href="{{route('manager.get.id')}}">Edit Account by id</a><br><br> 
                     <a href='{{route('manager.dashboard')}}'>back to previous page</a><br><br>  

                     @if(session()->has("success"))
                   {{session('success')}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
