<?php

namespace App\Controllers;

use App\Models\UserModel;

class UsersController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('users/index', $data);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $model = new UserModel();
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'name' => $this->request->getVar('name'),
            'role' => $this->request->getVar('role')
        ];
        $model->save($data);
        return redirect()->to('/users')->with('msg', 'Usuário criado com sucesso.');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('users/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'role' => $this->request->getVar('role')
        ];

        if ($this->request->getVar('password')) {
            $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        }

        $model->update($id, $data);
        return redirect()->to('/users')->with('msg', 'Usuário atualizado com sucesso.');
    }
}
