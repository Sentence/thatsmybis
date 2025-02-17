@extends('layouts.app')
@section('title', 'Loot - ' . config('app.name'))

@section('content')
<div class="container-fluid container-width-capped">
    <div class="row">
        <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 col-12">
            <div class="row">
                <div class="col-12 pt-2 mb-2">
                    <h1 class="font-weight-medium">
                        <span class="fab fa-fw fa-battle-net text-mage"></span>
                        World of Warcraft Loot Tables
                    </h1>
                </div>
                <div class="col-12 pt-3 pb-1 mb-2 bg-light rounded">
                    <p class="text-4">
                        Try our <a href="{{ route('home') }}">open source tool</a> if you're considering loot council. It helps with
                        <span class="font-weight-bold">transparency</span>,
                        <span class="font-weight-bold">recordkeeping</span>, and
                        <span class="font-weight-bold">communication</span> challenges.
                    </p>
                    <p>
                        If you need help or have questions, please reach out on
                        <a href="{{ env('APP_DISCORD') }}" target="_blank" alt="Join the {{ env('APP_NAME') }} Discord Server" title="Join the {{ env('APP_NAME') }} Discord Server" class="">Discord</a>.
                    </p>
                    <ol class="no-bullet no-indent striped">
                        @include('partials/expansionDatabases')
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
