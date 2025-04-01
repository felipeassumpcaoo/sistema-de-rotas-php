<?php

namespace app\routes;

use app\helpers\Request;
use app\helpers\Uri;
use Exception;

class Router
{
    const CONTROLLER_NAMESPACE = 'app\\controllers';

    public static function load(string $controller, string $method)
    {
        try {
            // Verificar se o controller existe
            $controllerNamespace = self::CONTROLLER_NAMESPACE . '\\' . $controller;
            if (!class_exists($controllerNamespace)) {
                throw new Exception("O Controller {$controller} não existe");
            }


            $controllerInstance = new $controllerNamespace;

            if (!method_exists($controllerInstance, $method)) {
                throw new Exception("O método {$method} não existe no Controller {$controller}");
            }

            $controllerInstance->$method();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public static function routes(): array
    {
        return [
            'get' => [
                '/' => fn() => self::load('HomeController', 'index'),
                '/contact' => fn() => self::load('ContactController', 'index'),
            ],
            'post' => [
                 '/contact' => fn() => self::load('ContactController', 'store'),
            ],
        ];
    }

    public static function execute()
    {
        try {
            $routes = self::routes();
            $request = Request::get();
            $uri = Uri::get('path');

            // Verifica se o método HTTP (GET, POST, etc.) existe nas rotas
            if (!isset($routes[$request])) {
                self::load('ErrorController', 'notFound');
                return;
            }

            // Verifica se a URI solicitada está definida nas rotas
            if (!array_key_exists($uri, $routes[$request])) {
                self::load('ErrorController', 'notFound');
                return;
            }

            // Executa a rota correspondente
            $router = $routes[$request][$uri];
            $router(); // Executa a função da rota

        } catch (\Throwable $th) {
            self::load('ErrorController', 'notFound');
        }
    }
}
