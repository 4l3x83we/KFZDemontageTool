@if($message = Session::get('success'))
    <div class="d-flex justify-content-center align-items-center mx-2 px-1 my-3 alertSection">
        <div class="alert alert-success alert-block mb-0 w-100">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if($message = Session::get('error'))
    <div class="d-flex justify-content-center align-items-center mx-2 px-1 my-3 alertSection">
        <div class="alert alert-danger alert-block mb-0 w-100">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if($message = Session::get('warning'))
    <div class="d-flex justify-content-center align-items-center mx-2 px-1 my-3 alertSection">
        <div class="alert alert-warning alert-block mb-0 w-100">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if($message = Session::get('info'))
    <div class="d-flex justify-content-center align-items-center mx-2 px-1 my-3 alertSection">
        <div class="alert alert-info alert-block mb-0 w-100">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if($errors->any())
    <div class="d-flex justify-content-center align-items-center mx-2 px-1 my-3 alertSection">
        <div class="alert alert-danger alert-block mb-0 w-100">
            Bitte überprüfen Sie das unten stehende Formular auf Fehler.
        </div>
    </div>
@endif

<style>
    .alertSection.hide {
        display: none !important;
    }
</style>

<script type="module">
    setTimeout(function () {
        // Adding the class dynamically
        $('.alertSection').addClass('hide');
    }, 10000);
</script>
