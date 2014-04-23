<?php

/* ::layoutMedecin.html.twig */
class __TwigTemplate_d4919fe8b584c81554f26631e98b4ea0e49e71a38a2e19b338c8f1498291c317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
        <div class=\"panel panel-primary\" style=\"margin-left: 2%;margin-right: 2%;\">
            <div class=\"panel-heading\">
                <div class=\"navbar\">
                    <div class=\"navbar-inner\">";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "                        <a class=\"brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("cabinet_patient_homepage");
            echo "\">Cabinet Dr.";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "
                        </a>
                        <ul id=\"main-menu\" class=\"nav\" style=\"float: right;text-decoration: underline;\">
                            <li><a class=\"accueil\" href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("cabinet_patient_homepage");
            echo "\">ACCUEIL</a></li>
                            <li><a class=\"patient\" href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("patient");
            echo "\">Patients</a></li>
                            <li><a href=\"#\">Gestion</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li class=\"dropdown\"> 
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"glyphicon glyphicon-cog\"></i>
                                    <b class=\"caret\"></b></a>

                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"#\">Réglages</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>";
        }
        // line 40
        echo "                    </div>
                </div>
            </div>
            <div class=\"panel-body\" style=\"min-height:500px;height: 100%;overflow: auto;\">
                ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "                </div>
                <div class=\"panel-footer\">
                    Panel footer
                </div>
            </div>

            ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "            </body>
        </html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Medecin";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            
            <script type=\"text/javascript\">
            \$(document).ready(function(){
            var i = \$(location).attr('href');
            \$('#main-menu li a').each(function(){
                if('http://localhost'+\$(this).attr('href')==i)
                \$(this).parent().addClass('active');
            });
            });
            \$(document).ready(function(){
            \$( \".hasDatepicker\" ).datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: '1970:2000',
            });
            });
                </script>
            ";
    }

    public function getTemplateName()
    {
        return "::layoutMedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 54,  144 => 53,  139 => 52,  136 => 51,  131 => 44,  125 => 9,  121 => 8,  116 => 7,  113 => 6,  107 => 5,  102 => 74,  100 => 51,  92 => 45,  90 => 44,  84 => 40,  76 => 35,  61 => 23,  57 => 22,  48 => 19,  46 => 18,  35 => 11,  33 => 6,  29 => 5,  23 => 1,);
    }
}
