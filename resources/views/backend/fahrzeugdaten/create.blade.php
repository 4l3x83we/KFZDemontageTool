@extends('layouts.appBackend')

@section('title', $page_title)

@push('css')
    <!-- page CSS -->
@endpush

@push('js')
    <!-- page JS -->
@endpush

@push('script')
    <!-- page Script -->
    <script type="module">
        let maxLength = 17;
        $('#fzd_id').keyup(function () {
            let inputLen = maxLength + $(this).val().length - maxLength;
            $('#finChars').text(inputLen);
        });

        $('#fzd_hersteller').on('change', function () {
            let selected = $(this).find(":selected").attr('value');
            $.ajax({
                url: '/suche/' + selected + '/modell',
                type: 'GET',
                dataType: 'json',
            }).done(function (data) {
                $('#fzd_modell').removeAttr('disabled');
                let select = $('#fzd_modell');
                select.empty();
                select.append('<option>Bitte Modell wählen</option>');
                $.each(data, function (key, value) {
                    select.append('<option value="' + value.modell_name + '">' + value.modell_name + '</option>')
                });
            });
            console.log('success');
        });
    </script>
@endpush

@section('content')
    <section>
        <div class="container-fluid" id="fahrzeuge">
            <form action="{{ route('backend.fahrzeugdaten.store') }}" method="POST" class="text-bg-light rounded my-3 card_fzd_header">
                @csrf
                @include('backend.fahrzeugdaten.partials.form')
            </form>

            @include('backend.fahrzeugdaten.partials.modal')

        </div>
    </section>
@endsection
