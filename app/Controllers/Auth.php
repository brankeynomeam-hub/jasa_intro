<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function loginPage()
    {
        // Kalau sudah login, langsung redirect ke admin
        if (session()->get('admin_logged_in')) {
            return redirect()->to('/admin');
        }
        return view('admin/login');
    }

    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $correctUser = env('ADMIN_USERNAME', 'admin');
        $correctPass = env('ADMIN_PASSWORD', 'admin123');

        if ($username === $correctUser && $password === $correctPass) {
            session()->set('admin_logged_in', true);
            session()->set('admin_username', $username);
            return redirect()->to('/admin');
        }

        return redirect()->to('/admin/login')->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->remove('admin_logged_in');
        session()->remove('admin_username');
        return redirect()->to('/admin/login')->with('message', 'Berhasil logout.');
    }
}
