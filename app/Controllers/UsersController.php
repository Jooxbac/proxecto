<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Shield\Entities\User;

class UsersController extends BaseController
{


    /**
     * Muestra la página de inicio.
     * 
     * Prepara los datos necesarios y renderiza la vista de la página.
     * 
     * @return string la renderización de la vista correspondiente.
     */
    public function update()
    {
        $users = auth()->getProvider();

        $user = new User([
            'username' => 'nuevoUsuario',
            'email'    => 'correo@ejemplo.com',
            'password' => 'contraseña123',
        ]);

        $users->save($user);
        $user = $users->findById($users->getInsertID());

        $users->addToDefaultGroup($user);
    }


    /**
     * Muestra la página de inicio.
     * 
     * Prepara los datos necesarios y renderiza la vista de la página.
     * 
     * @return string la renderización de la vista correspondiente.
     */
    public function delete()
    {
        $users = auth()->getProvider();

        $user = new User([
            'username' => 'nuevoUsuario',
            'email'    => 'correo@ejemplo.com',
            'password' => 'contraseña123',
        ]);

        $users->save($user);
        $user = $users->findById($users->getInsertID());

        $users->addToDefaultGroup($user);
    }


    /**
     * Muestra la página de inicio.
     * 
     * Prepara los datos necesarios y renderiza la vista de la página.
     * 
     * @return string la renderización de la vista correspondiente.
     */
    public function index()
    {

        // Get the User Provider (UserModel by default)
        $users = auth()->getProvider();

        // Find by the user_id
        $userslist = $users->findAll();

        $data = [
            'lista_usuarios' => $userslist,
            'titulo'     => 'Listado de usuarios',
        ];

        return view('templates/headerTemplate', $data)
            . view('usuarios/index')
            . view('templates/footerTemplate');
    }


    /**
     * Muestra la página de inicio.
     * 
     * Prepara los datos necesarios y renderiza la vista de la página.
     * 
     * @return string la renderización de la vista correspondiente.
     */
    public function mostrar(?string $id = null)
    {
/*         $model = model(UsuariosModel::class);

        $data['usuario'] = $model->getUsuario($id);

        if ($data['usuario'] === null) {
            throw new PageNotFoundException('Cannot find the user: ' . $id);
        }

        $data['titulo'] = $data['usuario']['username'];

        return view('templates/headerTemplate', $data)
            . view('usuarios/view')
            . view('templates/footerTemplate'); */
    }
}
