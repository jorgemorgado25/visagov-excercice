<style>
    .color-success {
        color: #087402;
        font-weight: bold;
    }
</style>

@if ( Session::has('success-message') )
    <div class="alert alert-success color-success d-flex justify-content-center">
        <div>
            <i class='bx bx-check-circle'></i>
        </div>
        <div class="ml-4" style="padding-top: 2px; margin-left: 5px">
            {{ Session::get('success-message') }}
        </div>
    </div>
@endif