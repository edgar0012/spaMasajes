<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Masajes;
use AppBundle\Form\MasajesType;


class MasajesController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $masajes = $em->getRepository('AppBundle:Masajes')->findAll();

        return $this->render('masajes/index.html.twig', array(
            'masajes' => $masajes,
        ));
    }


    public function newAction(Request $request)
    {
        $masaje = new Masajes();
        $form = $this->createForm(MasajesType::class, $masaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($masaje);
            $em->flush();

            return $this->redirectToRoute('masajes_show', array('id' => $masaje->getIdMasaje()));
        }

        return $this->render('masajes/new.html.twig', array(
            'masaje' => $masaje,
            'form' => $form->createView(),
        ));
    }

 
    public function showAction(Masajes $masaje)
    {
       return $this->render('masajes/show.html.twig', array(
            'masaje' => $masaje,
        ));
    }
  
    public function editAction(Request $request, Masajes $masaje)
    {
        $editForm = $this->createForm(MasajesType::class, $masaje);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($masaje);
            $em->flush();

            return $this->redirectToRoute('masajes_edit', array('id' => $masaje->getIdMasaje()));
        }

        return $this->render('masajes/edit.html.twig', array(
            'masaje' => $masaje,
            'edit_form' => $editForm->createView(),
        ));
    }

 public function deleteAction($id)
    {  
        $em = $this->getDoctrine()->getEntityManager();
        $avi_repo = $em->getRepository("AppBundle:Masajes");
        $avi = $avi_repo->find($id);
        
        $em->remove($avi);
        $em->flush();
        
        return $this->redirectToRoute('masajes_index');        
    }}
