@extends('template')

@section('page-title')
    {{ $user === null ? 'Create a New User' : 'Edit User'  }}
@endsection

@section('page-header')
	{{ $user === null ? 'Create a New User' : 'Edit User'  }}
@endsection

@section('page-content')
    <div class="row">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="col-12">
        <form method="post" action="{{ $user === null ? Route('users.store') : Route('users.update',['user' => $user])  }}" enctype="multipart/form-data">
                <div class="row gtr-uniform">
                    @csrf
                    @if($user !== null)
                        @method('PUT')
                    @endif
                    @include('userviews.partials.basicdetails')
                    @include('userviews.partials.skills')
                    @include('userviews.partials.professionaldetails')
                    <div class="col-12">
                        <ul class="actions">
                            <li>{!! Form::submit($user === null ? 'Create User' : 'Edit User', ['class' => 'button primary']) !!}</li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection