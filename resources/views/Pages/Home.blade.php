@extends('layout.app')
@section('content')
    <div class="h-full"
        style="background: url('/assets/images/background.png') no-repeat center center fixed; background-size: cover;">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <section>
                @include('Components.Menu')
            </section>
        </div>
    </div>
@endsection
