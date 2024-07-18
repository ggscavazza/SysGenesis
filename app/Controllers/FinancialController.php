<?php

namespace App\Controllers;

use App\Models\FinancialModel;
use Config\Services;

class FinancialController extends BaseController
{
    public function index()
    {
        $model = new FinancialModel();
        $data['charges'] = $model->findAll();
        return view('financial/index', $data);
    }

    public function createCharge()
    {
        return view('financial/create_charge');
    }

    public function storeCharge()
    {
        $model = new FinancialModel();
        $data = [
            'customer_id' => $this->request->getVar('customer_id'),
            'amount' => $this->request->getVar('amount'),
            'description' => $this->request->getVar('description'),
            'due_date' => $this->request->getVar('due_date')
        ];

        // Chamada para a API da Asaas
        $response = $this->createAsaasCharge($data);
        if ($response->status == 'CONFIRMED') {
            $model->save($data);
            return redirect()->to('/financial')->with('msg', 'Cobrança criada com sucesso.');
        } else {
            return redirect()->to('/financial/create_charge')->with('msg', 'Erro ao criar cobrança.');
        }
    }

    private function createAsaasCharge($data)
    {
        $apiKey = 'sua_chave_da_api_asaas';
        $client = Services::curlrequest([
            'baseURI' => 'https://www.asaas.com/api/v3',
            'headers' => [
                'Content-Type' => 'application/json',
                'access_token' => $apiKey
            ]
        ]);

        $response = $client->post('/payments', [
            'json' => [
                'customer' => $data['customer_id'],
                'billingType' => 'BOLETO',
                'dueDate' => $data['due_date'],
                'value' => $data['amount'],
                'description' => $data['description']
            ]
        ]);

        return json_decode($response->getBody());
    }
}
