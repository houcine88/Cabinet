<?php

namespace Cabinet\PatientBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cabinet\PatientBundle\Entity\Operation;
use Cabinet\PatientBundle\Form\OperationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Operation controller.
 *
 */
class OperationController extends Controller {

    /**
     * Lists all Operation entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('CabinetPatientBundle:Operation')->findAll();
        $dql = "SELECT op FROM CabinetPatientBundle:Operation op";
        $query = $em->createQuery($dql);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );
        return $this->render('CabinetPatientBundle:Operation:Operations.html.twig', array(
                    'pagination' => $pagination,
        ));
    }

    /**
     * Creates a new Operation entity.
     *
     */
    public function createAction(Request $request, $idFiche) {
        $em = $this->getDoctrine()->getManager();
        $fiche = $em->getRepository('CabinetPatientBundle:Fiche')->find($idFiche);
        $entity = new Operation();
        $form = $this->createCreateForm($entity, $idFiche);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setFiche($fiche);
            $em->persist($entity);
            $em->flush();

            $response = new Response(json_encode(array('ok' => 'ajout operation avec succes')));
            return $response;
            //return $this->redirect($this->generateUrl('operation_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetPatientBundle:Operation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Operation entity.
     *
     * @param Operation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Operation $entity, $idFiche) {
        $form = $this->createForm(new OperationType(), $entity, array(
            'action' => $this->generateUrl('operation_create', array('idFiche' => $idFiche)),
//            'method' => 'POST',
            'attr' => array('id' => 'createOperation')
        ));

        $form->add('submit', 'button', array('label' => 'Ajouter',
            'attr' => array(
                'class' => 'btn',
                'onclick' => 'javascript:ajouterOperation()'))
        );

        return $form;
    }

    /**
     * Displays a form to create a new Operation entity.
     *
     */
    public function newAction($idFiche) {
        $entity = new Operation();
        $form = $this->createCreateForm($entity, $idFiche);

        return $this->render('CabinetPatientBundle:Operation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'idFiche' => $idFiche
        ));
    }

    /**
     * Finds and displays a Operation entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetPatientBundle:Operation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Operation entity.');
        }

        //$deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetPatientBundle:Operation:show.html.twig', array(
                    'entity' => $entity,
                        //        'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Operation entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetPatientBundle:Operation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Operation entity.');
        }

        $editForm = $this->createEditForm($entity);
        //$deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetPatientBundle:Operation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                        //          'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Operation entity.
     *
     * @param Operation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Operation $entity) {
        $form = $this->createForm(new OperationType(), $entity, array(
            'action' => $this->generateUrl('operation_update', array('id' => $entity->getId())),
//            'method' => 'PUT',
            'attr' => array('id' => 'updateOperation')
        ));

        $form->add('submit', 'button', array('label' => 'Modifier',
            'attr' => array(
                'class' => 'btn',
                'onclick' => 'javascript:modifierOperation()'))
        );

        return $form;
    }

    /**
     * Edits an existing Operation entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetPatientBundle:Operation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Operation entity.');
        }

        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $response = new Response(json_encode(array('ok' => 'Modification avec succes')));
            return $response;
//            return $this->redirect($this->generateUrl('operation_edit', array('id' => $id)));
        }

        return $this->render('CabinetPatientBundle:Operation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                        //      'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Operation entity.
     *
     */
    public function deleteAction($id) {
        //Request $request,
//        $form = $this->createDeleteForm($id, $idFiche);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetPatientBundle:Operation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Operation entity.');
        }

        $em->remove($entity);
        $em->flush();
        //}
        $response = new Response(json_encode(array('ok' => 'Operation supprimé avec succes')));
        return $response;
        //return $this->redirect($this->generateUrl('operation_getOperations', array('idFiche' => $idFiche)));
    }

    /**
     * Creates a form to delete a Operation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('operation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }


    public function getOperationsAction($idFiche, $page) {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('CabinetPatientBundle:Operation')->findBy(array('fiche' => $idFiche));
        $query = $em->createQuery(
                        'SELECT op
                        FROM CabinetPatientBundle:Operation op
                        WHERE op.fiche = :idFiche
                        ORDER BY op.date DESC'
                )->setParameter('idFiche', $idFiche);
        $paginator = $this->get('knp_paginator');
        if($page==null)
        {
            $p=1;
        }
        else
        {
            $p=$page;
        }
        $pagination = $paginator->paginate(
                $query, $this->get('request')->query->get('page', $p)/* page number */, 3/* limit per page */
        );
        return $this->render('CabinetPatientBundle:Operation:index.html.twig', array(
                    'pagination' => $pagination,
                    //'entities' => $entities,
                    'idFiche' => $idFiche,
        ));
    }


    public function redirectAction($idFiche) {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('CabinetPatientBundle:Operation')->findBy(array('fiche' => $idFiche));
        $query = $em->createQuery(
                        'SELECT op
                        FROM CabinetPatientBundle:Operation op
                        WHERE op.fiche = :idFiche
                        ORDER BY op.date DESC'
                )->setParameter('idFiche', $idFiche);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );
        return $this->render('CabinetPatientBundle:Operation:index.html.twig', array(
                    'pagination' => $pagination,
                    //'entities' => $entities,
                    'idFiche' => $idFiche
        ));
    }

}
