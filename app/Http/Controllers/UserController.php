<?php


namespace UserDirectory\Http\Controllers;


use Laminas\Diactoros\Response;
use League\Plates\Engine;
use PDOException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use UserDirectory\Models\User;

class UserController
{
    private Engine $templates;

    public function __construct(Engine $templates)
    {
        $this->templates = $templates;
    }

    public function login(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write($this->templates->render('login', ['error' => false]));
        return $response;
    }

    public function validateUser(ServerRequestInterface $request): ResponseInterface
    {
        $data = $request->getParsedBody();
        $email = $data['email'];
        $password = $data['password'];

        $user = User::where('email', $email)
            ->where('password', $password)
            ->first();

        $response = new Response();

        if ($user) {
            $response->getBody()->write($this->templates->render('search', ['users' => []]));
        } else {
            $response->getBody()->write($this->templates->render('login', ['error' => true]));
        }

        return $response;
    }

    public function search(ServerRequestInterface $request): ResponseInterface
    {
        $data = $request->getParsedBody();
        $nameEmail = $data['search'];

        $users = User::where('name', 'LIKE', '%' . $nameEmail . '%')
            ->orWhere('email', $nameEmail)
            ->get();

        $response = new Response();
        $response->getBody()->write($this->templates->render('search', ['users' => $users]));
        return $response;
    }

    public function signUp(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write($this->templates->render('signup', ['error' => '']));
        return $response;
    }

    public function createUser(ServerRequestInterface $request): ResponseInterface
    {
        $data = $request->getParsedBody();

        $tmpUser = User::where('email', $data['email'])
            ->first();

        $response = new Response();

        if ($tmpUser) {
            $response->getBody()->write($this->templates->render('signup', ['error' => 'usuario ya existe']));
            return $response;
        }

        try {
            $user = new User();
            $user->name = $data['name'];
            $user->document = $data['document'];
            $user->country = $data['country'];
            $user->email = $data['email'];
            $user->password = $data['password'];

            $user->save();
            $response->getBody()->write($this->templates->render('search', ['users' => []]));
        } catch (PDOException $ex) {
            $response->getBody()->write($this->templates->render('signup', ['error' => $ex->getMessage()]));
        }

        return $response;
    }


}