<?php

namespace App\Controllers;

use App\Models\UserModel;


class User extends BaseController
{
  public function index()
  {
    $session = session();
    // echo $session->get('name');

    $userModel = new UserModel();
    $data = $userModel->find($session->get('id'));
    // var_dump($user['name']);
    return view('profile', $data);
  }

  public function renderProfile()
  {
    $session = session();
    // echo $session->get('name');

    $userModel = new UserModel();
    $data = $userModel->find($session->get('id'));
    // var_dump($user['name']);
    return view('editProfile', $data);
  }

  public function editProfile()
  {
    $session = session();
    // echo $session->get('name');
    $data = [
      'name' => ($this->request->getVar('firstName') . '/n' . $this->request->getVar('lastName')),
      'email' => $this->request->getVar('email'),
      'sex' => $this->request->getVar('gender'),
      'province' => $this->request->getVar('province'),
      // 'gen' => '',
      // 'class' => '',
      'tel' => $this->request->getVar('tel'),
      // 'role' => 'student',
      'facebook' => $this->request->getVar('facebook'),
      'line' => $this->request->getVar('line'),
      // 'position' => '',
      // 'endDate' => '',
      // 'startDate' => '',
      // 'grade' => '',
      // 'avgGrade' => ''
    ];

    $userModel = new UserModel();
    $userModel->update($session->get('id'), $data);
    // var_dump($user['name']);
    return redirect()->to('/profile');
  }
}
