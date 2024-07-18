<?php

namespace App\Controllers;

use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->find(session()->get('id'));
        return view('profile/index', $data);
    }

    public function update()
    {
        $model = new UserModel();
        $id = session()->get('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'surname' => $this->request->getVar('surname'),
            'cpf' => $this->request->getVar('cpf'),
            'rg' => $this->request->getVar('rg'),
            'profession' => $this->request->getVar('profession'),
            'position' => $this->request->getVar('position'),
            'company' => $this->request->getVar('company'),
            'phone' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email')
        ];

        if ($this->request->getVar('password')) {
            $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        }

        $model->update($id, $data);
        return redirect()->to('/profile')->with('msg', 'Perfil atualizado com sucesso.');
    }
}
