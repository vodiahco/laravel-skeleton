@if(Session::has('success'))
    <div class="alert alert-success">
        <div>{{ Session::get('success') }}</div>
    </div>
@endif
