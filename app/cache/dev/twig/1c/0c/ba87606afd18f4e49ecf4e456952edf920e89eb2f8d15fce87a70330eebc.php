<?php

/* ::layoutGenerale.html.twig */
class __TwigTemplate_1c0cba87606afd18f4e49ecf4e456952edf920e89eb2f8d15fce87a70330eebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        ";
        // line 6
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "
            ";
        // line 21
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::layoutGenerale.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  74 => 17,  71 => 16,  66 => 15,  56 => 9,  50 => 7,  47 => 6,  22 => 1,  100 => 38,  96 => 37,  93 => 36,  84 => 31,  79 => 30,  75 => 29,  70 => 24,  67 => 23,  60 => 10,  57 => 18,  51 => 16,  46 => 14,  43 => 13,  41 => 22,  38 => 16,  36 => 15,  31 => 12,  28 => 6,);
    }
}
