<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>
            @section('title')S4G@show
        </title>
         @section('stylesheet')
            {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
            <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.2.1/bootstrap-social.css" rel="stylesheet">
           
            {{ HTML::style('packages/summernote/summernote.css') }}
            {{ HTML::style('css/style.css') }}
            
         
         @show
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    </head>
    <body>
        
         
         
            
        @section('body')
            @section('header')
           
            @show
            @section('notification')
                @include('layout.fragments.notification')
            @show

            <div class="container">
                @section('content')
                
                @show
            </div>
            



            @section('footer')
                @include('layout.fragments.footer')
            @show

         @show
                
        
            
        
         @section('javascript')
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
         {{ HTML::script('packages/bootstrap/js/bootstrap.js') }}
         {{ HTML::script('packages/summernote/summernote.min.js') }}
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.5/angular.min.js"></script>     
           {{ HTML::script('js/form.js') }} 
        
        @show
    </body>
</html>
