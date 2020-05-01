@extends('layouts.app')

@section('content')
    <header>
        <img src="/images/default-profile-banner.jpg" 
            alt="User profile banner"
            class="h-40 w-full rounded-lg"
            >
    </header>
   
   @include('_timeline', [
       'tweets' => $user->tweets
   ])
@endsection
