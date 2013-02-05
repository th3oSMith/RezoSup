<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // home
        if (rtrim($pathinfo, '/') === '/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Rezo\\RezoSupBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // thanks
        if (rtrim($pathinfo, '/') === '/thanks') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'thanks');
            }

            return array (  '_controller' => 'Rezo\\RezoSupBundle\\Controller\\DefaultController::thanksAction',  '_route' => 'thanks',);
        }

        // charte
        if (rtrim($pathinfo, '/') === '/charte') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'charte');
            }

            return array (  '_controller' => 'Rezo\\RezoSupBundle\\Controller\\DefaultController::charteAction',  '_route' => 'charte',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
