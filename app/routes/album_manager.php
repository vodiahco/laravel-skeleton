<?php

        Route::get(
            '/profile-photo',
            array(
                'as'   => 'get-profile-photo',
                'uses' => 'App\Controllers\AlbumManagerController@getProfilePhoto'
            )
        );
        
        Route::post(
            '/profile-photo',
            array(
                'as'   => 'post-profile-photo',
                'uses' => 'App\Controllers\AlbumManagerController@postProfilePhoto'
            )
        );

