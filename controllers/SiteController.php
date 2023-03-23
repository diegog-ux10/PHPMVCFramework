<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
             'name' => 'Diego',
             'apellido' => 'Granados',
        ];
        return $this->render('home', $params);
    }

    public function handleContact(Request $request)
    {
       $body = $request->getBody();
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }
}