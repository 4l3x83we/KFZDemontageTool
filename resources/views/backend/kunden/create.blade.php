@extends('layouts.appBackend')

@section('title', $page_title)

@push('css')
    <!-- page CSS -->
@endpush

@push('js')
    <!-- page JS -->
@endpush

@push('script')

@endpush

@section('content')
    <section>
        <div class="container-fluid" id="kunden">
        <form action="{{ route('backend.kunden.store') }}" method="post" class="text-bg-light rounded my-3 card_fzd_header">
        @csrf
            @include('backend.kunden.partials.form')
        </form>
        </div>
    </section>
@endsection
