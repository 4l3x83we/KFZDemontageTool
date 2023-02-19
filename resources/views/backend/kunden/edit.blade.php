@extends('layouts.appBackend')

@section('title', $page_title)

@push('css') @endpush
@push('js') @endpush
@push('script') @endpush

@section('content')
    <section>
        <div class="container-fluid" id="kunden">
            <form action="{{ route('backend.kunden.update', $kunden->id) }}" method="post" class="text-bg-light rounded my-3 card_fzd_header">
                @csrf
                @method('PATCH')
                @include('backend.kunden.partials.form')
            </form>
        </div>
    </section>
@endsection
