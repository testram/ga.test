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
        $context = $this->context;
        $request = $this->request;

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

        // valoracion_form
        if (0 === strpos($pathinfo, '/valoracion/tu_critica') && preg_match('#^/valoracion/tu_critica/(?P<juego>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'valoracion_form')), array (  '_controller' => 'GameAffinity\\ValoracionBundle\\Controller\\DefaultController::ValoracionFormAction',));
        }

        if (0 === strpos($pathinfo, '/backend')) {
            // backend_homepage
            if (0 === strpos($pathinfo, '/backend/hello') && preg_match('#^/backend/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_homepage')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/backend/categoria')) {
                // categoria
                if (rtrim($pathinfo, '/') === '/backend/categoria') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categoria');
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\CategoriaController::indexAction',  '_route' => 'categoria',);
                }

                // categoria_show
                if (preg_match('#^/backend/categoria/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\CategoriaController::showAction',));
                }

                // categoria_new
                if ($pathinfo === '/backend/categoria/new') {
                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\CategoriaController::newAction',  '_route' => 'categoria_new',);
                }

                // categoria_create
                if ($pathinfo === '/backend/categoria/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categoria_create;
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\CategoriaController::createAction',  '_route' => 'categoria_create',);
                }
                not_categoria_create:

                // categoria_edit
                if (preg_match('#^/backend/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\CategoriaController::editAction',));
                }

                // categoria_update
                if (preg_match('#^/backend/categoria/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_categoria_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_update')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\CategoriaController::updateAction',));
                }
                not_categoria_update:

                // categoria_delete
                if (preg_match('#^/backend/categoria/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_categoria_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\CategoriaController::deleteAction',));
                }
                not_categoria_delete:

            }

            if (0 === strpos($pathinfo, '/backend/desarrollador')) {
                // desarrollador
                if (rtrim($pathinfo, '/') === '/backend/desarrollador') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'desarrollador');
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\DesarrolladorController::indexAction',  '_route' => 'desarrollador',);
                }

                // desarrollador_show
                if (preg_match('#^/backend/desarrollador/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'desarrollador_show')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\DesarrolladorController::showAction',));
                }

                // desarrollador_new
                if ($pathinfo === '/backend/desarrollador/new') {
                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\DesarrolladorController::newAction',  '_route' => 'desarrollador_new',);
                }

                // desarrollador_create
                if ($pathinfo === '/backend/desarrollador/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_desarrollador_create;
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\DesarrolladorController::createAction',  '_route' => 'desarrollador_create',);
                }
                not_desarrollador_create:

                // desarrollador_edit
                if (preg_match('#^/backend/desarrollador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'desarrollador_edit')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\DesarrolladorController::editAction',));
                }

                // desarrollador_update
                if (preg_match('#^/backend/desarrollador/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_desarrollador_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'desarrollador_update')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\DesarrolladorController::updateAction',));
                }
                not_desarrollador_update:

                // desarrollador_delete
                if (preg_match('#^/backend/desarrollador/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_desarrollador_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'desarrollador_delete')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\DesarrolladorController::deleteAction',));
                }
                not_desarrollador_delete:

            }

            if (0 === strpos($pathinfo, '/backend/juego')) {
                // juego
                if (rtrim($pathinfo, '/') === '/backend/juego') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'juego');
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\JuegoController::indexAction',  '_route' => 'juego',);
                }

                // juego_show
                if (preg_match('#^/backend/juego/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'juego_show')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\JuegoController::showAction',));
                }

                // juego_new
                if ($pathinfo === '/backend/juego/new') {
                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\JuegoController::newAction',  '_route' => 'juego_new',);
                }

                // juego_create
                if ($pathinfo === '/backend/juego/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_juego_create;
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\JuegoController::createAction',  '_route' => 'juego_create',);
                }
                not_juego_create:

                // juego_edit
                if (preg_match('#^/backend/juego/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'juego_edit')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\JuegoController::editAction',));
                }

                // juego_update
                if (preg_match('#^/backend/juego/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_juego_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'juego_update')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\JuegoController::updateAction',));
                }
                not_juego_update:

                // juego_delete
                if (preg_match('#^/backend/juego/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_juego_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'juego_delete')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\JuegoController::deleteAction',));
                }
                not_juego_delete:

            }

            if (0 === strpos($pathinfo, '/backend/redaccion')) {
                // redaccion
                if (rtrim($pathinfo, '/') === '/backend/redaccion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'redaccion');
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\RedaccionController::indexAction',  '_route' => 'redaccion',);
                }

                // redaccion_show
                if (preg_match('#^/backend/redaccion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redaccion_show')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\RedaccionController::showAction',));
                }

                // redaccion_new
                if ($pathinfo === '/backend/redaccion/new') {
                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\RedaccionController::newAction',  '_route' => 'redaccion_new',);
                }

                // redaccion_create
                if ($pathinfo === '/backend/redaccion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_redaccion_create;
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\RedaccionController::createAction',  '_route' => 'redaccion_create',);
                }
                not_redaccion_create:

                // redaccion_edit
                if (preg_match('#^/backend/redaccion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redaccion_edit')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\RedaccionController::editAction',));
                }

                // redaccion_update
                if (preg_match('#^/backend/redaccion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_redaccion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redaccion_update')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\RedaccionController::updateAction',));
                }
                not_redaccion_update:

                // redaccion_delete
                if (preg_match('#^/backend/redaccion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_redaccion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redaccion_delete')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\RedaccionController::deleteAction',));
                }
                not_redaccion_delete:

            }

            if (0 === strpos($pathinfo, '/backend/sistema')) {
                // sistema
                if (rtrim($pathinfo, '/') === '/backend/sistema') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sistema');
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\SistemaController::indexAction',  '_route' => 'sistema',);
                }

                // sistema_show
                if (preg_match('#^/backend/sistema/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistema_show')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\SistemaController::showAction',));
                }

                // sistema_new
                if ($pathinfo === '/backend/sistema/new') {
                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\SistemaController::newAction',  '_route' => 'sistema_new',);
                }

                // sistema_create
                if ($pathinfo === '/backend/sistema/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sistema_create;
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\SistemaController::createAction',  '_route' => 'sistema_create',);
                }
                not_sistema_create:

                // sistema_edit
                if (preg_match('#^/backend/sistema/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistema_edit')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\SistemaController::editAction',));
                }

                // sistema_update
                if (preg_match('#^/backend/sistema/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_sistema_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistema_update')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\SistemaController::updateAction',));
                }
                not_sistema_update:

                // sistema_delete
                if (preg_match('#^/backend/sistema/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_sistema_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistema_delete')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\SistemaController::deleteAction',));
                }
                not_sistema_delete:

            }

            if (0 === strpos($pathinfo, '/backend/usuario')) {
                // usuario
                if (rtrim($pathinfo, '/') === '/backend/usuario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario');
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
                }

                // usuario_show
                if (preg_match('#^/backend/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\UsuarioController::showAction',));
                }

                // usuario_new
                if ($pathinfo === '/backend/usuario/new') {
                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
                }

                // usuario_create
                if ($pathinfo === '/backend/usuario/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuario_create;
                    }

                    return array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
                }
                not_usuario_create:

                // usuario_edit
                if (preg_match('#^/backend/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\UsuarioController::editAction',));
                }

                // usuario_update
                if (preg_match('#^/backend/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_usuario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\UsuarioController::updateAction',));
                }
                not_usuario_update:

                // usuario_delete
                if (preg_match('#^/backend/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'GameAffinity\\BackendBundle\\Controller\\UsuarioController::deleteAction',));
                }
                not_usuario_delete:

            }

            if (0 === strpos($pathinfo, '/backend/valoracion')) {
                // valoracion
                if (rtrim($pathinfo, '/') === '/backend/valoracion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'valoracion');
                    }

                    return array (  '_controller' => 'ValoracionBundle:Valoracion:index',  '_route' => 'valoracion',);
                }

                // valoracion_show
                if (preg_match('#^/backend/valoracion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'valoracion_show')), array (  '_controller' => 'ValoracionBundle:Valoracion:show',));
                }

                // valoracion_new
                if ($pathinfo === '/backend/valoracion/new') {
                    return array (  '_controller' => 'ValoracionBundle:Valoracion:new',  '_route' => 'valoracion_new',);
                }

                // valoracion_create
                if ($pathinfo === '/backend/valoracion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_valoracion_create;
                    }

                    return array (  '_controller' => 'ValoracionBundle:Valoracion:create',  '_route' => 'valoracion_create',);
                }
                not_valoracion_create:

                // valoracion_edit
                if (preg_match('#^/backend/valoracion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'valoracion_edit')), array (  '_controller' => 'ValoracionBundle:Valoracion:edit',));
                }

                // valoracion_update
                if (preg_match('#^/backend/valoracion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_valoracion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'valoracion_update')), array (  '_controller' => 'ValoracionBundle:Valoracion:update',));
                }
                not_valoracion_update:

                // valoracion_delete
                if (preg_match('#^/backend/valoracion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_valoracion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'valoracion_delete')), array (  '_controller' => 'ValoracionBundle:Valoracion:delete',));
                }
                not_valoracion_delete:

            }

        }

        // desarrollador_homepage
        if (0 === strpos($pathinfo, '/desarrollador/hello') && preg_match('#^/desarrollador/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'desarrollador_homepage')), array (  '_controller' => 'GameAffinity\\DesarrolladorBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/redaccion')) {
            // portada_redaccion
            if (0 === strpos($pathinfo, '/redaccion/redactor') && preg_match('#^/redaccion/redactor/(?P<redactor>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portada_redaccion')), array (  '_controller' => 'GameAffinity\\RedaccionBundle\\Controller\\DefaultController::portadaAction',));
            }

            // perfil
            if (0 === strpos($pathinfo, '/redaccion/perfil') && preg_match('#^/redaccion/perfil/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil')), array (  '_controller' => 'GameAffinity\\RedaccionBundle\\Controller\\DefaultController::perfilAction',));
            }

            // crear_juego
            if ($pathinfo === '/redaccion/nuevo') {
                return array (  '_controller' => 'GameAffinity\\RedaccionBundle\\Controller\\DefaultController::nuevoAction',  '_route' => 'crear_juego',);
            }

            if (0 === strpos($pathinfo, '/redaccion/e')) {
                // editar_juego
                if (0 === strpos($pathinfo, '/redaccion/editar') && preg_match('#^/redaccion/editar/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_juego')), array (  '_controller' => 'GameAffinity\\RedaccionBundle\\Controller\\DefaultController::editarAction',));
                }

                // eliminar_juego
                if ($pathinfo === '/redaccion/eliminar') {
                    return array (  '_controller' => 'GameAffinity\\RedaccionBundle\\Controller\\DefaultController::eliminarAction',  '_route' => 'eliminar_juego',);
                }

            }

            if (0 === strpos($pathinfo, '/redaccion/log')) {
                if (0 === strpos($pathinfo, '/redaccion/login')) {
                    // redaccion_login
                    if ($pathinfo === '/redaccion/login') {
                        return array (  '_controller' => 'GameAffinity\\RedaccionBundle\\Controller\\DefaultController::loginAction',  '_route' => 'redaccion_login',);
                    }

                    // redaccion_login_check
                    if ($pathinfo === '/redaccion/login_check') {
                        return array('_route' => 'redaccion_login_check');
                    }

                }

                // redaccion_logout
                if ($pathinfo === '/redaccion/logout') {
                    return array('_route' => 'redaccion_logout');
                }

            }

        }

        // sistema_homepage
        if (0 === strpos($pathinfo, '/sistema/hello') && preg_match('#^/sistema/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistema_homepage')), array (  '_controller' => 'GameAffinity\\SistemaBundle\\Controller\\DefaultController::indexAction',));
        }

        // categoria_homepage
        if (0 === strpos($pathinfo, '/categoria/hello') && preg_match('#^/categoria/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_homepage')), array (  '_controller' => 'GameAffinity\\CategoriaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            if (0 === strpos($pathinfo, '/usuario/log')) {
                if (0 === strpos($pathinfo, '/usuario/login')) {
                    // usuario_login
                    if ($pathinfo === '/usuario/login') {
                        return array (  '_controller' => 'GameAffinity\\UsuarioBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuario_login',);
                    }

                    // usuario_login_check
                    if ($pathinfo === '/usuario/login_check') {
                        return array('_route' => 'usuario_login_check');
                    }

                }

                // usuario_logout
                if ($pathinfo === '/usuario/logout') {
                    return array('_route' => 'usuario_logout');
                }

            }

            // usuario_registro
            if ($pathinfo === '/usuario/registro') {
                return array (  '_controller' => 'GameAffinity\\UsuarioBundle\\Controller\\DefaultController::registroAction',  '_route' => 'usuario_registro',);
            }

            // usuario_perfil
            if (0 === strpos($pathinfo, '/usuario/perfil') && preg_match('#^/usuario/perfil\\-(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_perfil')), array (  '_controller' => 'GameAffinity\\UsuarioBundle\\Controller\\DefaultController::perfilAction',));
            }

            // usuario_recientes
            if ($pathinfo === '/usuario/recientes') {
                return array (  '_controller' => 'GameAffinity\\UsuarioBundle\\Controller\\DefaultController::recientesAction',  '_route' => 'usuario_recientes',);
            }

            // confirmacion
            if (0 === strpos($pathinfo, '/usuario/confirmacion') && preg_match('#^/usuario/confirmacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'confirmacion')), array (  '_controller' => 'GameAffinity\\UsuarioBundle\\Controller\\ConfirmacionController::confirmacionAction',));
            }

        }

        // portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portada');
            }

            return array (  '_controller' => 'GameAffinity\\JuegoBundle\\Controller\\DefaultController::portadaAction',  '_route' => 'portada',);
        }

        if (0 === strpos($pathinfo, '/juegos')) {
            // lista_total_estrenos
            if (0 === strpos($pathinfo, '/juegos/estrenos/listado') && preg_match('#^/juegos/estrenos/listado/(?P<tipo_lista>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lista_total_estrenos')), array (  '_controller' => 'GameAffinity\\JuegoBundle\\Controller\\DefaultController::listaTotalEstrenosAction',));
            }

            // ficha
            if (preg_match('#^/juegos/(?P<juego>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ficha')), array (  '_controller' => 'GameAffinity\\JuegoBundle\\Controller\\DefaultController::fichaAction',));
            }

            // post
            if ($pathinfo === '/juegos/busqueda/form') {
                return array (  '_controller' => 'GameAffinity\\JuegoBundle\\Controller\\DefaultController::fichapostAction',  '_route' => 'post',);
            }

            // review
            if (0 === strpos($pathinfo, '/juegos/reviews') && preg_match('#^/juegos/reviews/(?P<juego>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'review')), array (  '_controller' => 'GameAffinity\\JuegoBundle\\Controller\\DefaultController::reviewAction',));
            }

            // ajax_search
            if ($pathinfo === '/juegos/ajax/search') {
                return array (  '_controller' => 'GameAffinity\\JuegoBundle\\Controller\\DefaultController::ajaxSearchAction',  '_route' => 'ajax_search',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
