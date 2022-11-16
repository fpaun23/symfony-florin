<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * LuckyController
 */
class LuckyController extends AbstractController
{
    
    protected LoggerInterface $logger;
    
    /**
     * __construct
     *
     * @param LoggerInterface $logger
     * @return void
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    /**
     * number
     *
     * @param  mixed $number
     * @return Response
     */
    public function number(int $number): Response
    {
        $this->logger->notice("My first notice");

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
