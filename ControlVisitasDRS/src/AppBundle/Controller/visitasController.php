<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\visitas;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * 
 * 
 *
 */

class visitasController extends Controller
{
    /**
     * @Route("insert/visita", name="insert_visita")
     * @method ({"POST"})
     */
    public function guardarVisita(Request $request){
        //Recuerando datos del request
        $visitaNom1     = $request->get('visita_Nombre');
        $visitaNom2     = $request->get('visita_nom2');
        $visitaAp       = $request->get('visita_ap');
        $visitaAm       = $request->get('visita_am');
        $visitaFacceso  = $request->get('visita_fa');
        $visitaDracceso = $request->get('visita_ha');
        $visitaHrsalida = $request->get('visita_hs');
        $visitaArea     = $request->get('visita_area');
        $visitaAutoriza = '1';//$request->get('visita_aut');
        
        //Preparando datos para la inserción
        $visita = new visitas();
        $visita->setVisitaNom1($visitaNom1);
        $visita->setVisitaNom2($visitaNom2);
        $visita->setVisitaAp($visitaAp);
        $visita->setVisitaAm($visitaAm);
        $visita->setVisitaFacceso($visitaFacceso);
        $visita->setVisitaDracceso(new \DateTime($visitaDracceso));
        $visita->setVisitaHrsalida($visitaHrsalida);
        $visita->setVisitaArea($visitaArea);
        $visita->setVisitaAutoriza($visitaAutoriza);
        
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($visita);
        $em->flush();
        
        return new Response('La visita se registró correctamente');
    }
    
    
    /**
     * @Route("select/visita", name="select_visita")
     * @method ({"POST"})
     */
    public function consultarVisita(){
        
        $em = $this->getDoctrine()->getManager();
        
        $entidad = $em->getRepository('AppBundle:visitas');
        $visitas = $entidad->findAll();
        
        //$encode = [new JsonEncoder()];
        $serializer = $this->container->get('jms_serializer');
        $data = $serializer->serialize($visitas,'json');
        //dump($visitas);
        if(count($visitas)>0){
            $resultado = array(
                'value'=>$data,
                'mensaje'=>''
            );
        }
        else{
            $resultado = array(
                'value'=>'',
                'mensaje'=>'No hay visitas registradas'
            );
        }
        
        return new JsonResponse($resultado);
    }
}
