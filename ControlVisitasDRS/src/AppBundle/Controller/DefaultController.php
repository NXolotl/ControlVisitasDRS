<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\visitas;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * 
     */
    //@Method({POST})
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/visita/new", name="reg_visitas")
     * @method ({"POST"})
     */
    public function insertarVisita(Request $request)
    {
        //$request->get($key);
        //json_encode($request->request->all());
        // replace this example code with whatever you need
        return new Response("<h1>".$request->get('id')."</h1>");
        
        /*$em = $this->getDoctrine()->getManager();
        
        $repository = $em->getRepository('AppBundle:visitas');
        
        $entity = $repository->findAll();
        
        //json_encode($entity);
        return new Response(
            json_encode($entity)
            );*/
    }
}
