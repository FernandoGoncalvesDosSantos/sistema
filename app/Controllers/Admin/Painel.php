<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class Painel extends BaseController
{
 public function index()
 {
 return view('admin/painel');
 }
 public function logout()
 {
 auth()->logout();
 return redirect()->to('login');
 }
}