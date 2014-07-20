namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use namespace Acme\HelloBundle\Controller;


class HelloController extends Controller
{
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
