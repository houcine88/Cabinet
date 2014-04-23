<?php

namespace Cabinet\PatientBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cabinet\PatientBundle\Entity\Patient;
use Cabinet\PatientBundle\Form\PatientType;
use Cabinet\PatientBundle\Entity\Fiche;

/**
 * Patient controller.
 *
 */
class PatientController extends Controller {

    /**
     * Lists all Patient entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetPatientBundle:Patient')->findAll();

        return $this->render('CabinetPatientBundle:Patient:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Patient entity.
     *
     */
    public function createAction(Request $request) {
        $medecin = $this->get('security.context')->getToken()->getUser();
        $entity = new Patient();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $fiche = new Fiche();
        $fiche->setAnnee(new \DateTime());

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setMedecin($medecin);
            $entity->setFiche($fiche);
            $em->persist($entity);
            $em->flush();
            $this->get('session')->setFlash('notice', 'Form successfully executed!');
            return $this->redirect($this->generateUrl('patient'));

//            return $this->redirect($this->generateUrl('patient_show', array('id' => $entity->getId())));
        }

        return $this->render('CabinetPatientBundle:Patient:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Patient entity.
     *
     * @param Patient $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Patient $entity) {
        $form = $this->createForm(new PatientType(), $entity, array(
            'action' => $this->generateUrl('patient_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Patient entity.
     *
     */
    public function newAction() {
        $entity = new Patient();
        $form = $this->createCreateForm($entity);

        return $this->render('CabinetPatientBundle:Patient:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Patient entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetPatientBundle:Patient')->find($id);
        $entities = $entity->getFiche()->getOperations();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetPatientBundle:Patient:show.html.twig', array(
                    'entity' => $entity,
                    'entities' => $entities,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Patient entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetPatientBundle:Patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CabinetPatientBundle:Patient:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Patient entity.
     *
     * @param Patient $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Patient $entity) {
        $form = $this->createForm(new PatientType(), $entity, array(
            'action' => $this->generateUrl('patient_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Patient entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CabinetPatientBundle:Patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('patient'));
//            return $this->redirect($this->generateUrl('patient_edit', array('id' => $id)));
        }

        return $this->render('CabinetPatientBundle:Patient:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Patient entity.
     *
     */
    public function deleteAction($id) {
//        $form = $this->createDeleteForm($id);
//        $form->handleRequest($request);
//        Request $request, 
//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetPatientBundle:Patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $em->remove($entity);
        $em->flush();
//        }

        return $this->redirect($this->generateUrl('patient'));
    }

    /**
     * Creates a form to delete a Patient entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('patient_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function getFiche($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CabinetPatientBundle:Patient')->find($id);
        $fiche = $entity->getFiche();
    }

    public function autocompletePatientAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request');
        $json = array();
        if ($request->isXmlHttpRequest()) {
            $motcle = $request->request->get('motcle');
            $qb = $em->createQueryBuilder();

            $qb->select('p')
                    ->from('CabinetPatientBundle:Patient', 'p')
                    ->where("p.nom LIKE :motcle OR p.prenom LIKE :motcle")
                    ->orderBy('p.nom', 'ASC')
                    ->setParameter('motcle', '%' . $motcle . '%');

            $query = $qb->getQuery();
            $patients = $query->getResult();
            foreach ($patients as $p) {
                $json[] = array(
                    'id' => $p->getId(),
                    'name' => $p->getNom().' '.$p->getPrenom()
                );
            }
        }
        $response = new Response(json_encode($json));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
