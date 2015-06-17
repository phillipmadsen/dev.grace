@extends('frontend/layout/layout')
@section('content')

@include('frontend/layout/slider', $sliders)

@include('frontend/elements/services-section')
@include('frontend/elements/our-clients')
{{-- @include('frontend/layout/project', $projects) --}}

{{-- @include('frontend/elements/testimonials') --}}


@stop
