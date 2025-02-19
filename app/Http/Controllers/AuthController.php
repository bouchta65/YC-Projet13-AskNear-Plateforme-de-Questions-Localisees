<?php 
namespace App\Http\Controllers;

class AuthController {
    public function showLogin() {
        return view('login');
    }
    public function showRegister() {
        return view('register');
    }
    public function processLogin() {
        return "Process login";
    }
    public function processRegister() {
        return "Process register";
    }
}
?>