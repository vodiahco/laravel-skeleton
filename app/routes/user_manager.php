<?php
Route::model('user', 'App\Models\User');

Route::get(
        '/signup',
        array(
            'as'   => 'get-signup',
            'uses' => 'App\Controllers\UserManagerController@getSignup'
        )
    );

Route::post(
        '/signup',
        array(
            'as'   => 'post-signup',
            'uses' => 'App\Controllers\UserManagerController@postSignup'
        )
    );

Route::get(
        '/activation/{id}/{h}',
        array(
            'as'   => 'get-activation',
            'uses' => 'App\Controllers\UserManagerController@getActivation'
        )
    );

Route::get(
        '/login',
        array(
            'as'   => 'get-login',
            'uses' => 'App\Controllers\UserManagerController@getLogin'
        )
    );

Route::post(
        '/login',
        array(
            'as'   => 'post-login',
            'uses' => 'App\Controllers\UserManagerController@postLogin'
        )
    );

Route::get(
        '/resetpassword',
        array(
            'as'   => 'get-reset-password',
            'uses' => 'App\Controllers\UserManagerController@getResetPassword'
        )
    );

Route::post(
    '/resetpassword',
    array(
        'as'   => 'post-reset-password',
        'uses' => 'App\Controllers\UserManagerController@postResetPassword'
    )
);

Route::group(array('before' => 'auth'), function()
{
    

Route::get(
    '/emailupdate',
    array(
        'as'   => 'get-email-update',
        'uses' => 'App\Controllers\UserManagerController@getUpdateEmail'
    )
);

Route::post(
    '/emailupdate',
    array(
        'as'   => 'post-email-update',
        'uses' => 'App\Controllers\UserManagerController@postUpdateEmail'
    )
);

Route::get(
    '/passwordupdate',
    array(
        'as'   => 'get-password-update',
        'uses' => 'App\Controllers\UserManagerController@getUpdatePassword'
    )
);

Route::post(
    '/passwordupdate',
    array(
        'as'   => 'post-password-update',
        'uses' => 'App\Controllers\UserManagerController@postUpdatePassword'
    )
);

Route::get(
    '/update',
    array(
        'as'   => 'get-user-update',
        'uses' => 'App\Controllers\UserManagerController@getUpdateUser'
    )
);

Route::post(
    '/update',
    array(
        'as'   => 'post-user-update',
        'uses' => 'App\Controllers\UserManagerController@postUpdateUser'
    )
);

Route::get(
    '/profile',
    array(
        'as'   => 'get-my-profile',
        'uses' => 'App\Controllers\UserManagerController@getMyProfile'
    )
);

Route::get(
    '/profile/{user}',
    array(
        'as'   => 'get-user-profile',
        'uses' => 'App\Controllers\UserManagerController@getUserProfile'
    )
);

});