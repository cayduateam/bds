@if(Session::has('message'))
    <div class="row alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif