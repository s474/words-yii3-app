<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\EchoForm;
use App\ViewRenderer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Yiisoft\Http\Method;

class EchoController
{
    private ViewRenderer $viewRenderer;
    
    public function __construct(ViewRenderer $viewRenderer)
    {
        $this->viewRenderer = $viewRenderer->withControllerName('echo');
    }

    public function say(ServerRequestInterface $request, EchoForm $form): ResponseInterface
    {
        if ($request->getMethod() === Method::POST) {
            $form->load($request->getParsedBody());
        }

        return $this->viewRenderer->withCsrf()->render('say', [
            'form' => $form,
        ]);
    }
}