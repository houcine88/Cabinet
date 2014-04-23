<?php

/* CabinetPatientBundle:Patient:new.html.twig */
class __TwigTemplate_4110135e093bb1b593b8d5d7211260160e8b19bb230ed3502100b03d5ab8b468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "        
<h1>Patient creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "form-horizontal")));
        echo "

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("patient");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
    <script type=\"text/javascript\">
        
            \$( \"form input.datepicker\" ).datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: '1970:2000',
            });
      
    </script>

";
    }

    public function getTemplateName()
    {
        return "CabinetPatientBundle:Patient:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  24 => 7,  19 => 4,);
    }
}
