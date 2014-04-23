<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // cabinet_user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cabinet_user_homepage');
            }

            return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cabinet_user_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            // admin_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\AdminController::showAction',));
            }

            // admin_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_new',);
            }

            // admin_create
            if ($pathinfo === '/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_create;
                }

                return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\AdminController::createAction',  '_route' => 'admin_create',);
            }
            not_admin_create:

            // admin_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\AdminController::editAction',));
            }

            // admin_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\AdminController::updateAction',));
            }
            not_admin_update:

            // admin_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\AdminController::deleteAction',));
            }
            not_admin_delete:

        }

        if (0 === strpos($pathinfo, '/medecin')) {
            // medecin
            if (rtrim($pathinfo, '/') === '/medecin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'medecin');
                }

                return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\MedecinController::indexAction',  '_route' => 'medecin',);
            }

            // medecin_show
            if (preg_match('#^/medecin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_show')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\MedecinController::showAction',));
            }

            // medecin_new
            if ($pathinfo === '/medecin/new') {
                return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\MedecinController::newAction',  '_route' => 'medecin_new',);
            }

            // medecin_create
            if ($pathinfo === '/medecin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_medecin_create;
                }

                return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\MedecinController::createAction',  '_route' => 'medecin_create',);
            }
            not_medecin_create:

            // medecin_edit
            if (preg_match('#^/medecin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_edit')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\MedecinController::editAction',));
            }

            // medecin_update
            if (preg_match('#^/medecin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_medecin_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_update')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\MedecinController::updateAction',));
            }
            not_medecin_update:

            // medecin_delete
            if (preg_match('#^/medecin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_medecin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_delete')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\MedecinController::deleteAction',));
            }
            not_medecin_delete:

            // medecin_activate
            if (preg_match('#^/medecin/(?P<id>[^/]++)/activate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_activate')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\MedecinController::activateAction',));
            }

            // medecin_desactivate
            if (preg_match('#^/medecin/(?P<id>[^/]++)/desactivate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_desactivate')), array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\MedecinController::desactivateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // admin_registration
            if ($pathinfo === '/register/admin') {
                return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\RegistrationAdminController::registerAction',  '_route' => 'admin_registration',);
            }

            // medecin_registration
            if ($pathinfo === '/register/medecin') {
                return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\RegistrationMedecinController::registerAction',  '_route' => 'medecin_registration',);
            }

        }

        // cabinet_patient_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cabinet_patient_homepage');
            }

            return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cabinet_patient_homepage',);
        }

        if (0 === strpos($pathinfo, '/patient')) {
            // patient
            if (rtrim($pathinfo, '/') === '/patient') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'patient');
                }

                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\PatientController::indexAction',  '_route' => 'patient',);
            }

            // patient_show
            if (preg_match('#^/patient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_show')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\PatientController::showAction',));
            }

            // patient_new
            if ($pathinfo === '/patient/new') {
                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\PatientController::newAction',  '_route' => 'patient_new',);
            }

            // patient_create
            if ($pathinfo === '/patient/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_patient_create;
                }

                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\PatientController::createAction',  '_route' => 'patient_create',);
            }
            not_patient_create:

            // patient_edit
            if (preg_match('#^/patient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_edit')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\PatientController::editAction',));
            }

            // patient_update
            if (preg_match('#^/patient/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_patient_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_update')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\PatientController::updateAction',));
            }
            not_patient_update:

            // patient_delete
            if (preg_match('#^/patient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_delete')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\PatientController::deleteAction',));
            }

            // patient_autocomplete
            if ($pathinfo === '/patient/autocompletePatient') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_patient_autocomplete;
                }

                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\PatientController::autocompletePatientAction',  '_route' => 'patient_autocomplete',);
            }
            not_patient_autocomplete:

        }

        if (0 === strpos($pathinfo, '/fiche')) {
            // fiche
            if (rtrim($pathinfo, '/') === '/fiche') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fiche');
                }

                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\FicheController::indexAction',  '_route' => 'fiche',);
            }

            // fiche_show
            if (preg_match('#^/fiche/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_show')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\FicheController::showAction',));
            }

            // fiche_new
            if ($pathinfo === '/fiche/new') {
                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\FicheController::newAction',  '_route' => 'fiche_new',);
            }

            // fiche_create
            if ($pathinfo === '/fiche/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fiche_create;
                }

                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\FicheController::createAction',  '_route' => 'fiche_create',);
            }
            not_fiche_create:

            // fiche_edit
            if (preg_match('#^/fiche/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_edit')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\FicheController::editAction',));
            }

            // fiche_update
            if (preg_match('#^/fiche/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_fiche_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_update')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\FicheController::updateAction',));
            }
            not_fiche_update:

            // fiche_delete
            if (preg_match('#^/fiche/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fiche_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_delete')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\FicheController::deleteAction',));
            }
            not_fiche_delete:

        }

        if (0 === strpos($pathinfo, '/operation')) {
            // operation
            if (rtrim($pathinfo, '/') === '/operation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'operation');
                }

                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\OperationController::indexAction',  '_route' => 'operation',);
            }

            // operation_show
            if (preg_match('#^/operation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_show')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\OperationController::showAction',));
            }

            // operation_new
            if (preg_match('#^/operation/(?P<idFiche>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_new')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\OperationController::newAction',));
            }

            // operation_create
            if (preg_match('#^/operation/(?P<idFiche>[^/]++)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_operation_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_create')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\OperationController::createAction',));
            }
            not_operation_create:

            // operation_edit
            if (preg_match('#^/operation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_edit')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\OperationController::editAction',));
            }

            // operation_getOperations
            if (preg_match('#^/operation/(?P<idFiche>[^/]++)/(?P<page>[^/]++)/getOperations$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_operation_getOperations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_getOperations')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\OperationController::getOperationsAction',  'page' => 1,));
            }
            not_operation_getOperations:

            // operation_getOperations_reroute
            if (preg_match('#^/operation/(?P<idFiche>[^/]++)/redirect$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_getOperations_reroute')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\OperationController::redirectAction',));
            }

            // operation_update
            if (preg_match('#^/operation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_operation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_update')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\OperationController::updateAction',));
            }
            not_operation_update:

            // operation_delete
            if (preg_match('#^/operation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_delete')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\OperationController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/rdv')) {
            // rdv
            if (rtrim($pathinfo, '/') === '/rdv') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rdv');
                }

                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\RdvController::indexAction',  '_route' => 'rdv',);
            }

            // rdv_show
            if (preg_match('#^/rdv/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdv_show')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\RdvController::showAction',));
            }

            // rdv_new
            if ($pathinfo === '/rdv/new') {
                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\RdvController::newAction',  '_route' => 'rdv_new',);
            }

            // rdv_create
            if ($pathinfo === '/rdv/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rdv_create;
                }

                return array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\RdvController::createAction',  '_route' => 'rdv_create',);
            }
            not_rdv_create:

            // rdv_edit
            if (preg_match('#^/rdv/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdv_edit')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\RdvController::editAction',));
            }

            // rdv_update
            if (preg_match('#^/rdv/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_rdv_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdv_update')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\RdvController::updateAction',));
            }
            not_rdv_update:

            // rdv_delete
            if (preg_match('#^/rdv/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_rdv_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdv_delete')), array (  '_controller' => 'Cabinet\\PatientBundle\\Controller\\RdvController::deleteAction',));
            }
            not_rdv_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Cabinet\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // mawi_ajaxautocomplete
        if ($pathinfo === '/mawiajaxautocomplete') {
            return array (  '_controller' => 'mawi.autocomplete.handler:listAction',  '_route' => 'mawi_ajaxautocomplete',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
