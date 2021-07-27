<?php

if (!function_exists('user')) {
    /**
     * Shortcut to get user everywhere
     *
     * @return \App\Models\User|null
     */
    function user()
    {
        return call_user_func_array([\Illuminate\Support\Facades\Auth::class, 'user'], func_get_args());
    }
}
