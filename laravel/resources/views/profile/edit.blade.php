@extends('layouts.app')

@section('content')

<div class="profile-container">

    <h1 class="page-title">My Profile</h1>

    <div class="card">
        @include('profile.partials.update-profile-information-form')
    </div>

    <div class="card">
        @include('profile.partials.update-password-form')
    </div>

    <div class="card danger-card">
        @include('profile.partials.delete-user-form')
    </div>

</div>

@endsection