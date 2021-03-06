<?php

namespace GameAffinity\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GameAffinity\ValoracionBundle\Entity\Valoracion;
use GameAffinity\BackendBundle\Form\ValoracionType;

/**
 * Valoracion controller.
 *
 */
class ValoracionController extends Controller
{

    /**
     * Lists all Valoracion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ValoracionBundle:Valoracion')->findAll();

        return $this->render('BackendBundle:Valoracion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Valoracion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Valoracion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('valoracion_show', array('id' => $entity->getId())));
        }

        return $this->render('BackendBundle:Valoracion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Valoracion entity.
    *
    * @param Valoracion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Valoracion $entity)
    {
        $form = $this->createForm(new ValoracionType(), $entity, array(
            'action' => $this->generateUrl('valoracion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Valoracion entity.
     *
     */
    public function newAction()
    {
        $entity = new Valoracion();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackendBundle:Valoracion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Valoracion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ValoracionBundle:Valoracion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Valoracion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Valoracion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Valoracion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ValoracionBundle:Valoracion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Valoracion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendBundle:Valoracion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Valoracion entity.
    *
    * @param Valoracion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Valoracion $entity)
    {
        $form = $this->createForm(new ValoracionType(), $entity, array(
            'action' => $this->generateUrl('valoracion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Valoracion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ValoracionBundle:Valoracion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Valoracion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('valoracion_edit', array('id' => $id)));
        }

        return $this->render('BackendBundle:Valoracion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Valoracion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ValoracionBundle:Valoracion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Valoracion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('valoracion'));
    }

    /**
     * Creates a form to delete a Valoracion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('valoracion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
