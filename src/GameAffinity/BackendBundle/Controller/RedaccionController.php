<?php

namespace GameAffinity\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use GameAffinity\RedaccionBundle\Entity\Redaccion;
use GameAffinity\BackendBundle\Form\RedaccionType;

/**
 * Redaccion controller.
 *
 */
class RedaccionController extends Controller
{

    /**
     * Lists all Redaccion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RedaccionBundle:Redaccion')->findAll();

        return $this->render('BackendBundle:Redaccion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    /**
     * Creates a new Redaccion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Redaccion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            
            $encoder = $this->get('security.encoder_factory')->getEncoder($entity);
            $entity->setSalt(md5(time()));
            $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity->setPassword($password);
            $entity->setRole('ROLE_REDACCION');
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('redaccion_show', array('id' => $entity->getId())));
        }

        return $this->render('BackendBundle:Redaccion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Redaccion entity.
    *
    * @param Redaccion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Redaccion $entity)
    {
        $form = $this->createForm(new RedaccionType(), $entity, array(
            'action' => $this->generateUrl('redaccion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Redaccion entity.
     *
     */
    public function newAction()
    {
        $entity = new Redaccion();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackendBundle:Redaccion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Redaccion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RedaccionBundle:Redaccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Redaccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Redaccion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Redaccion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RedaccionBundle:Redaccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Redaccion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Redaccion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Redaccion entity.
    *
    * @param Redaccion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Redaccion $entity)
    {
        $form = $this->createForm(new RedaccionType(), $entity, array(
            'action' => $this->generateUrl('redaccion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Redaccion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RedaccionBundle:Redaccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Redaccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('redaccion_edit', array('id' => $id)));
        }

        return $this->render('BackendBundle:Redaccion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Redaccion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RedaccionBundle:Redaccion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Redaccion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('redaccion'));
    }

    /**
     * Creates a form to delete a Redaccion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('redaccion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
