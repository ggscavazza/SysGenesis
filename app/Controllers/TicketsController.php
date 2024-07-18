<?php

namespace App\Controllers;

use App\Models\TicketModel;

class TicketsController extends BaseController
{
    public function index()
    {
        $model = new TicketModel();
        $data['tickets'] = $model->findAll();
        return view('tickets/index', $data);
    }

    public function create()
    {
        return view('tickets/create');
    }

    public function store()
    {
        $model = new TicketModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'status' => 'open',
            'priority' => 'normal',
            'created_by' => session()->get('id')
        ];
        $model->save($data);
        return redirect()->to('/tickets');
    }

    public function update($id)
    {
        $model = new TicketModel();
        $data = $model->find($id);
        return view('tickets/update', $data);
    }

    public function saveUpdate()
    {
        $model = new TicketModel();
        $id = $this->request->getVar('id');
        $data = [
            'status' => $this->request->getVar('status'),
            'priority' => $this->request->getVar('priority'),
            'estimated_time' => $this->request->getVar('estimated_time')
        ];
        $model->update($id, $data);
        return redirect()->to('/tickets');
    }
}
