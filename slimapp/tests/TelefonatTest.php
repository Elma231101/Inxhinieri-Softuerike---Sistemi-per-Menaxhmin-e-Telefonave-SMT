<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Slim\Factory\AppFactory;
use Slim\Psr7\Factory\ServerRequestFactory;
use Psr\Http\Message\ResponseInterface;

class HelloRouteTest extends TestCase
{
    private $app;

    protected function setUp(): void
    {
        // Inicizo Slim app
        $this->app = AppFactory::create();

        // Regjistro endpointin /hello/{name}
        $this->app->get('/hello/{name}', function ($request, $response, $args) {
            $name = $args['name'];
            $response->getBody()->write("Hello, $name");
            return $response;
        });
    }

    public function testHelloRoute()
    {
        // Krijo një kërkesë të tipit GET për /hello/Arta
        $request = (new ServerRequestFactory())->createServerRequest('GET', '/hello/Arta');

        // Ekzekuto aplikacionin
        $response = $this->app->handle($request);

        // Lexo përmbajtjen e përgjigjes
        $body = (string) $response->getBody();

        // Kontrolo që përgjigjja është e saktë
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals("Hello, Arta", $body);
    }
}