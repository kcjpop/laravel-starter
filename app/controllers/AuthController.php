<?php
class AuthController extends BaseController
{

    public function login()
    {
        try {
            Sentry::authenticate([
                'email'    => Input::get('email'),
                'password' => Input::get('password')
            ]);

            return Redirect::route('/');
        } catch (Exception $e) {
            return Redirect::route('login')->withError($e);
        }
    }

    public function logout()
    {
        Sentry::logout();
        return Redirect::route('/');
    }

}
