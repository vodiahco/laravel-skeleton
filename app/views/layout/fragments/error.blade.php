@if($errors->all())
    <div class='alert alert-danger'>
        @foreach($errors->all() as $error)
            <div class='list-group-item-danger'>{{ $error }}</div>
        @endforeach
    </div>
    @endif