<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller {
    public function __construct()
    {
        parent::__construct();
        // load auth library
        $this->call->library('Auth');
    }

    public function login()
    {
        // show login form or process POST
        if ($this->io->method() === 'post') {
            $username = $this->io->post('username');
            $password = $this->io->post('password');

            // Bypass DB: allow cedrick/cedrick
            if ($username === 'cedrick' && $password === 'cedrick') {
                // Set session manually
                $_SESSION['user'] = [
                    'id' => 1,
                    'username' => 'cedrick',
                    'role' => 'admin'
                ];
                redirect(site_url());
                return;
            }

            // fallback to normal DB login for others
            if ($this->Auth->login($username, $password)) {
                redirect(site_url());
            } else {
                $data['error'] = 'Invalid username or password';
                $this->call->view('auth/login', $data);
            }
        } else {
            $this->call->view('auth/login');
        }
    }

    public function logout()
    {
        $this->Auth->logout();
        redirect(site_url());
    }
}
