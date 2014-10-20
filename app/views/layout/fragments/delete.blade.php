<?php
$details = (isset($details)) ? $details : "You are about to delete this post. You will not be able to retrieve this post once deleted";
?>
<div class="row">
    
    <div class="alert alert-danger">
        {{Form::open()}}
        <div>
         {{$details}}
        </div>
       
        {{Form::submit('Delete post', ['class' => 'btn btn-lg btn-danger'])}}
        {{Form::close()}}
    </div>
</div>

