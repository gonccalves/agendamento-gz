<?php

namespace Core;

class Router
{
    public function run()
    {
        $url = $_SERVER['REQUEST_URI'];

        switch ($url) {
            case '/':
                $controllerName = 'App\controllers\AgendamentoController';
                $actionName = 'agendamento';
                break;
            case '/agendamentos':
                $controllerName = 'App\controllers\AgendamentoController';
                $actionName = 'listar';
                break;
            default:
                http_response_code(404);
                echo "Página não encontrada!";
                exit;
        }

        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                echo "Método '$actionName' não encontrado no controller '$controllerName'!";
            }
        } else {
            echo "Controller '$controllerName' não encontrado!";
        }
    }
}