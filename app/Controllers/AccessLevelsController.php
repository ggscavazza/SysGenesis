<?php

namespace App\Controllers;

use App\Models\AccessLevelModel;

class AccessLevelsController extends BaseController
{
    public function index()
    {
        $model = new AccessLevelModel();
        $data['access_levels'] = $model->findAll();
        return view('access_levels/index', $data);
    }

    public function create()
    {
        return view('access_levels/create');
    }

    public function store()
    {
        $model = new AccessLevelModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'modules' => json_encode($this->request->getVar('modules')),
            'permissions' => json_encode($this->request->getVar('permissions'))
        ];
        $model->save($data);
        return redirect()->to('/access_levels')->with('msg', 'Nível de acesso criado com sucesso.');
    }

    public function edit($id)
    {
        $model = new AccessLevelModel();
        $data['access_level'] = $model->find($id);
        return view('access_levels/edit', $data);
    }

    public function update($id)
    {
        $model = new AccessLevelModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'modules' => json_encode($this->request->getVar('modules')),
            'permissions' => json_encode($this->request->getVar('permissions'))
        ];
        $model->update($id, $data);
        return redirect()->to('/access_levels')->with('msg', 'Nível de acesso atualizado com sucesso.');
    }
}
