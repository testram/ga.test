<?php

namespace GameAffinity\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GameAffinity\JuegoBundle\Entity\Juego;
use GameAffinity\BackendBundle\Form\JuegoType;

/**
 * Juego controller.
 *
 */
class JuegoController extends Controller
{

    /**
     * Lists all Juego entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('JuegoBundle:Juego')->findAll();

        return $this->render('BackendBundle:Juego:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Juego entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Juego();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('juego_show', array('id' => $entity->getId())));
        }

        return $this->render('BackendBundle:Juego:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Juego entity.
    *
    * @param Juego $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Juego $entity)
    {
        $form = $this->createForm(new JuegoType(), $entity, array(
            'action' => $this->generateUrl('juego_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Juego entity.
     *
     */
    public function newAction()
    {
        $entity = new Juego();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackendBundle:Juego:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Juego entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JuegoBundle:Juego')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Juego entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Juego:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Juego entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JuegoBundle:Juego')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Juego entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Juego:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Juego entity.
    *
    * @param Juego $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Juego $entity)
    {
        $form = $this->createForm(new JuegoType(), $entity, array(
            'action' => $this->generateUrl('juego_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Juego entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JuegoBundle:Juego')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Juego entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('juego_edit', array('id' => $id)));
        }

        return $this->render('BackendBundle:Juego:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Juego entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JuegoBundle:Juego')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Juego entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('juego'));
    }

    /**
     * Creates a form to delete a Juego entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('juego_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
