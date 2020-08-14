<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Yiisoft\Html\Html;
use Yiisoft\Yii\Rest\AbstractController;

class EchoController extends AbstractController
{
    protected function name(): string 
    {
        return 'echo';
    }
    
    public function say(ServerRequestInterface $request): ResponseInterface
    {
        $message = $request->getAttribute('message', 'Hello');
        
        $response = $this->responseFactory->createResponse();
        $response->getBody()->write('The message is: ' . Html::encode($message));
        return $response;
    }
}
