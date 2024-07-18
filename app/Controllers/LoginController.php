<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/index');
    }

    public function authenticate()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();

        if($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id' => $data['id'],
                    'email' => $data['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function recoverPassword()
    {
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $data = $model->where('email', $email)->first();

        if($data) {
            // Gera uma senha provisória e envia por email
            $new_password = substr(md5(time()), 0, 8);
            $data['password'] = password_hash($new_password, PASSWORD_DEFAULT);
            $model->save($data);

            // Envio de email com a nova senha (configurar email no CodeIgniter)
            $email = \Config\Services::email();
            $email->setTo($data['email']);
            $email->setSubject('Recuperação de Senha');
            $email->setMessage('Sua nova senha provisória é: ' . $new_password);
            $email->send();

            return redirect()->to('/login')->with('msg', 'Nova senha enviada para seu email.');
        } else {
            return redirect()->to('/recover-password')->with('msg', 'Email não encontrado.');
        }
    }
}
