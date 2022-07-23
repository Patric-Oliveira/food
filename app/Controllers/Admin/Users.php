<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
     
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }

    public function index()
    {

        $data = [

            'title' => 'Listando os usuários',
            'users' => $this->userModel->findAll(),
        ];
        return view('Admin/Users/index', $data);

    }

    public function search() 
    {

        if (!$this->request->isAJAX()) {
            
            exit('Página não encontrada');

        }
        
        $users = $this->userModel->search($this->request->getGet('term'));

        $return = [];

        foreach ($users as $user) {

            $data['id'] = $user->id;
            $data['value'] = $user->name;

            $return[] = $data;

        }

        return $this->response->setJSON($return);

    }

    public function show($id = null) 
    {

        $user = $this->searchUserOr404($id);

        $data = [

            'title' => "Detalhes do usuário - $user->name",
            'user' => $user,
        ];
        return view('Admin/Users/show', $data);
        
    }

    public function edit($id = null) 
    {

        $user = $this->searchUserOr404($id);

        $data = [

            'title' => "Editar usuário - $user->name",
            'user' => $user,
        ];
        return view('Admin/Users/edit', $data);
        
    }

    /**
     * 
     * @param int $id
     * @return objeto user
     */
    private function searchUserOr404(int $id = null)
    {

        if (!$id || !$user = $this->userModel->where('id', $id)->first()) {
            
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o usuário $id");

        }

        return $user;

    }
}
