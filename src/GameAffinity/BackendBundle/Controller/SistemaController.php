<?php

namespace GameAffinity\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GameAffinity\SistemaBundle\Entity\Sistema;
use GameAffinity\BackendBundle\Form\SistemaType;

/**
 * Sistema controller.
 *
 */
class SistemaController extends Controller
{

    /**
     * Lists all Sistema entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SistemaBundle:Sistema')->findAll();

        return $this->render('BackendBundle:Sistema:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Sistema entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Sistema();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sistema_show', array('id' => $entity->getId())));
        }

        return $this->render('BackendBundle:Sistema:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Sistema entity.
    *
    * @param Sistema $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Sistema $entity)
    {
        $form = $this->createForm(new SistemaType(), $entity, array(
            'action' => $this->generateUrl('sistema_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Sistema entity.
     *
     */
    public function newAction()
    {
        $entity = new Sistema();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackendBundle:Sistema:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sistema entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaBundle:Sistema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sistema entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Sistema:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Sistema entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaBundle:Sistema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sistema entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Sistema:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Sistema entity.
    *
    * @param Sistema $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Sistema $entity)
    {
        $form = $this->createForm(new SistemaType(), $entity, array(
            'action' => $this->generateUrl('sistema_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Sistema entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SistemaBundle:Sistema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sistema entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sistema_edit', array('id' => $id)));
        }

        return $this->render('BackendBundle:Sistema:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Sistema entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SistemaBundle:Sistema')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sistema entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sistema'));
    }

    /**
     * Creates a form to delete a Sistema entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sistema_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
