<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
  public function renderRegister()
  {
    helper(['form']);
    $data = [];
    return view('register', $data);
  }

  public function register()
  {
    // include helper form
    helper(['form']);

    $rules = [
      'id' => 'required|is_unique[student.id]',
      'firstName' => 'required|min_length[3]|max_length[50]',
      'lastName' => 'required|min_length[3]|max_length[50]',
      'password' => 'required|min_length[8]|max_length[255]',
      'confirmPassword' => 'matches[password]',
      // 'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[student.email]',
      // After this line, it's just a temporary code and then move to other place.
      // 'sex' => '',
      // 'province' => '',
      // 'class' => '',
      // 'tel' => '',
      // 'role' => 'student',
      // 'facebook' => '',
      // 'line' => '',
      // 'position' => '',
      // 'endyear' => '',
      // 'startyear' => '',
      // 'grade' => '',
      // 'avgGrade' => ''
    ];

    if ($this->validate($rules)) {
      $model = new UserModel();
      $data = [
        'name' => ($this->request->getVar('firstName') . '/n' . $this->request->getVar('lastName')),
        'id' => $this->request->getVar('id'),
        // 'id' => '62425914',
        'email' => $this->request->getVar('email'),
        'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
      ];
      // return var_dump($data);
      $model->insert($data);
      return redirect()->to('/login');
    }

    $data['validation'] = $this->validator;
    return view('register', $data);
  }

  public function renderLogin()
  {
    helper(['form']);
    return view('login');
  }

  public function login()
  {
    $session = session();
    $model = new UserModel();

    $id = $this->request->getVar('id');
    $password = $this->request->getVar('password');

    $data = $model->where('id', $id)->first();

    if ($data) {
      $hashPass = $data['password'];
      $isCorrect = password_verify($password, $hashPass);
      if ($isCorrect) {
        $ses_data = [
          'id' => $data['id'],
          'name' => $data['name'],
          'isLogin' => true
        ];
        $session->set($ses_data);
        return redirect()->to('/index');
      }
    }

    $session->setFlashdata('msg', 'username or password incorrect');
    return redirect()->to('/login');
  }

  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/index');
  }
}
