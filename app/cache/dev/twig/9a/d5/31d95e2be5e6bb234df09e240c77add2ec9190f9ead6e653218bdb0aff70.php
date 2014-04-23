<?php

/* CabinetPatientBundle:Patient:show.html.twig */
class __TwigTemplate_9ad531d95e2be5e6bb234df09e240c77add2ec9190f9ead6e653218bdb0aff70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layoutMedecin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutMedecin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <table style=\"width: 100%;\">
            <tr>
                <td style=\"text-align: left;\"><h4>Fiche patient</h4></td>
                <td style=\"text-align: right;\"><h5>Numero dossier: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fiche"), "id"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fiche"), "annee"), "Y"), "html", null, true);
        echo "</h5></td>
            </tr>
        </table>
    </div>
    <div class=\"panel-body\">
        <table class=\"record_properties\">
            <tbody>

                <tr>
                    <th>Nom :</th>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Prenom :</th>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Date de naissance :</th>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateNaissance"), "d-m-Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Adresse :</th>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Telephonne :</th>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tel"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Cin :</th>
                    <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cin"), "html", null, true);
        echo "</td>
                </tr>

            </tbody>
        </table>

    </div>
</div>
";
        // line 53
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div id=\"operationsPatient\" url=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operation_getOperations", array("idFiche" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fiche"), "id"), "page" => 1)), "html", null, true);
        echo "\">
            ";
        // line 56
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CabinetPatientBundle:Operation:getOperations", array("idFiche" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fiche"), "id"), "page" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "page"), "method"))));
        echo "
            </div>
        </div>
    </div>


    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("patient");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "CabinetPatientBundle:Patient:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 64,  167 => 61,  77 => 33,  148 => 54,  113 => 6,  152 => 59,  129 => 47,  97 => 34,  90 => 24,  100 => 51,  161 => 81,  137 => 66,  81 => 35,  172 => 66,  165 => 61,  153 => 55,  134 => 47,  126 => 69,  110 => 42,  84 => 23,  76 => 25,  70 => 11,  65 => 25,  53 => 19,  34 => 5,  23 => 6,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 53,  132 => 51,  128 => 49,  107 => 56,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 64,  143 => 56,  135 => 53,  119 => 42,  102 => 29,  71 => 30,  67 => 27,  63 => 31,  59 => 30,  38 => 9,  94 => 27,  89 => 20,  85 => 30,  75 => 29,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 12,  93 => 36,  88 => 39,  78 => 28,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 58,  156 => 66,  151 => 74,  142 => 59,  138 => 54,  136 => 42,  121 => 8,  117 => 43,  105 => 30,  91 => 33,  62 => 22,  49 => 19,  24 => 7,  25 => 3,  19 => 4,  79 => 30,  72 => 24,  69 => 26,  47 => 9,  40 => 14,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 52,  131 => 39,  123 => 58,  120 => 33,  115 => 42,  111 => 33,  108 => 36,  101 => 32,  98 => 28,  96 => 39,  83 => 32,  74 => 31,  66 => 23,  55 => 8,  52 => 25,  50 => 25,  43 => 15,  41 => 12,  35 => 7,  32 => 15,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 90,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 52,  147 => 52,  144 => 53,  141 => 48,  133 => 73,  130 => 62,  125 => 36,  122 => 50,  116 => 7,  112 => 42,  109 => 43,  106 => 41,  103 => 55,  99 => 53,  95 => 42,  92 => 42,  86 => 30,  82 => 29,  80 => 27,  73 => 16,  64 => 24,  60 => 23,  57 => 18,  54 => 5,  51 => 17,  48 => 16,  45 => 13,  42 => 11,  39 => 10,  36 => 13,  33 => 6,  30 => 10,);
    }
}
