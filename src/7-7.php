@extends('layouts.master')

@section('header')
    @parent
    <section class="greeting">
        @if (Carbon\Carbon::now()->isWeekend())
            Let's grab a {{ $drink or 'coffee' }}
        @else
            Go to work...
        @endif
    </section>
@endsection

@include('partials.footer', ['foo' => 'bar'])
