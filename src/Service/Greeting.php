<?php
/**
 * Created by PhpStorm.
 * User: Catman
 * Date: 2018. 09. 22.
 * Time: 19:02
 */

namespace App\Service;


use Psr\Log\LoggerInterface;

class Greeting
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function greet(string $name): string
    {
        $this->logger->info("Greeted $name");
        return "Hello $name";
    }
}