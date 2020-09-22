@extends('layouts.app')

@section('content')
    <div class="section-main-wrap">
        <div class="content-wrap">
            <div class="sections-wrap">
                @include('pages.header')
                @include('pages.section_about_short')
                @include('pages.section_about_short_t')
                @include('pages.section_about_short_m')
                {{-- @include('pages.section2')
                
                @include('pages.section3')
                @include('pages.section4')
                @include('pages.section5') --}}
            </div>
        </div>
    
    </div>
@endsection


