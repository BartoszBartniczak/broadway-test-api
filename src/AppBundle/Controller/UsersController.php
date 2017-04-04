<?php

namespace AppBundle\Controller;

use BartoszBartniczak\Demo\Application\Controller\UserController;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends FOSRestController
{

    /**
     * @var UserController
     */
    private $userController;

    public function __construct(UserController $userController)
    {
        $this->userController = $userController;
    }

    public function postUsersAction(Request $request){

        $response = $this->userController->createNewUserAction(json_decode($request->getContent(), true));
        return new View($response->getData(), $response->getCode());
    }

}
