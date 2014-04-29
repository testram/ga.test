<?php

namespace GameAffinity\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GameAffinity\DesarrolladorBundle\Entity\Desarrollador;
use GameAffinity\BackendBundle\Form\DesarrolladorType;

/**
 * Desarrollador controller.
 *
 */
class DesarrolladorController extends Controller
{

    /**
     * Lists all Desarrollador entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DesarrolladorBundle:Desarrollador')->findAll();

        return $this->render('BackendBundle:Desarrollador:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Desarrollador entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Desarrollador();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('desarrollador_show', array('id' => $entity->getId())));
        }

        return $this->render('BackendBundle:Desarrollador:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Desarrollador entity.
    *
    * @param Desarrollador $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Desarrollador $entity)
    {
        $form = $this->createForm(new DesarrolladorType(), $entity, array(
            'action' => $this->generateUrl('desarrollador_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Desarrollador entity.
     *
     */
    public function newAction()
    {
        $entity = new Desarrollador();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackendBundle:Desarrollador:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Desarrollador entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DesarrolladorBundle:Desarrollador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Desarrollador entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Desarrollador:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Desarrollador entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DesarrolladorBundle:Desarrollador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Desarrollador entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Desarrollador:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Desarrollador entity.
    *
    * @param Desarrollador $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Desarrollador $entity)
    {
        $form = $this->createForm(new DesarrolladorType(), $entity, array(
            'action' => $this->generateUrl('desarrollador_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Desarrollador entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DesarrolladorBundle:Desarrollador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Desarrollador entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('desarrollador_edit', array('id' => $id)));
        }

        return $this->render('BackendBundle:Desarrollador:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Desarrollador entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DesarrolladorBundle:Desarrollador')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Desarrollador entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('desarrollador'));
    }

    /**
     * Creates a form to delete a Desarrollador entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('desarrollador_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
