<?php


namespace App\Controllers;

use App\Libraries\Controller;


class HomePages extends Controller
{
  private $userModel;

  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    $users = $this->userModel->getUsers();
    $data = [
      'title' => "Home",
      'users' => $users
    ];
    // $this->view('homepages/index', $data);
    $this->view('homepages/index', $data);
  }
}
