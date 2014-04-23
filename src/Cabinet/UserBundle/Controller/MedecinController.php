<?php

namespace Cabinet\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cabinet\UserBundle\Entity\Medecin;
use Cabinet\UserBundle\Form\MedecinType;

/**
 * Medecin controller.
 *
 */
class MedecinController extends Controller {

    /**
     * Lists all Medecin entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetUserBundle:Medecin')->findAll();

        return $this->render('CabinetUserBundle:Medecin:index.html.twig', array(
                    'entities' => $entities,
                ));
    }

    /**
     * Creates a new Medecin entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Medecin();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('medecin_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetUserBundle:Medecin:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Creates a form to create a Medecin entity.
     *
     * @param Medecin $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Medecin $entity) {
        $form = $this->createForm(new MedecinType(), $entity, array(
            'action' => $this->generateUrl('medecin_create'),
            'method' => 'POST',
                ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Medecin entity.
     *
     */
    public function newAction() {
        $entity = new Medecin();
        $form = $this->createCreateForm($entity);

        return $this->render('CabinetUserBundle:Medecin:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Finds and displays a Medecin entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetUserBundle:Medecin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medecin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetUserBundle:Medecin:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Medecin entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetUserBundle:Medecin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medecin entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetUserBundle:Medecin:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Creates a form to edit a Medecin entity.
     *
     * @param Medecin $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Medecin $entity) {
        $form = $this->createForm(new MedecinType(), $entity, array(
            'action' => $this->generateUrl('medecin_update', array('id' => $entity->getId())),
            'method' => 'PUT',
                ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Medecin entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetUserBundle:Medecin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medecin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('medecin_edit', array('id' => $id)));
        }

        return $this->render('CabinetUserBundle:Medecin:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Deletes a Medecin entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CabinetUserBundle:Medecin')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Medecin entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('medecin'));
    }

    /**
     * Creates a form to delete a Medecin entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('medecin_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function activateAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetUserBundle:Medecin')->find($id);
        $entity->setEnabled(true);
        $em->merge($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('cabinet_user_homepage'));
    }

    public function desactivateAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetUserBundle:Medecin')->find($id);
        $entity->setEnabled(false);
        $em->merge($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('cabinet_user_homepage'));
    }

}
