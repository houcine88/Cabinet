<?php

/* CabinetPatientBundle:Rdv:show.html.twig */
class __TwigTemplate_5fb75e9219b9e37885c44f3a73a0dd1a8943ec1ef65d29c2a1f25d6ef14a85a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Rdv</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heure"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("rdv");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdv_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CabinetPatientBundle:Rdv:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  118 => 64,  167 => 61,  77 => 27,  148 => 54,  113 => 6,  152 => 59,  129 => 47,  97 => 34,  90 => 24,  100 => 51,  161 => 81,  137 => 66,  81 => 35,  172 => 66,  165 => 61,  153 => 55,  134 => 47,  126 => 69,  110 => 42,  84 => 23,  76 => 25,  70 => 11,  65 => 25,  53 => 18,  34 => 5,  23 => 6,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 53,  132 => 51,  128 => 49,  107 => 56,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 64,  143 => 56,  135 => 53,  119 => 42,  102 => 29,  71 => 30,  67 => 27,  63 => 25,  59 => 30,  38 => 9,  94 => 27,  89 => 33,  85 => 30,  75 => 29,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 12,  93 => 36,  88 => 39,  78 => 34,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 58,  156 => 66,  151 => 74,  142 => 59,  138 => 54,  136 => 42,  121 => 8,  117 => 43,  105 => 30,  91 => 33,  62 => 22,  49 => 17,  24 => 7,  25 => 3,  19 => 4,  79 => 30,  72 => 24,  69 => 26,  47 => 12,  40 => 14,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 52,  131 => 39,  123 => 58,  120 => 33,  115 => 42,  111 => 33,  108 => 36,  101 => 32,  98 => 28,  96 => 38,  83 => 32,  74 => 31,  66 => 23,  55 => 8,  52 => 18,  50 => 25,  43 => 15,  41 => 12,  35 => 6,  32 => 15,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 90,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 52,  147 => 52,  144 => 53,  141 => 48,  133 => 73,  130 => 62,  125 => 36,  122 => 50,  116 => 7,  112 => 42,  109 => 43,  106 => 41,  103 => 55,  99 => 53,  95 => 42,  92 => 42,  86 => 30,  82 => 29,  80 => 27,  73 => 16,  64 => 20,  60 => 23,  57 => 18,  54 => 5,  51 => 17,  48 => 16,  45 => 16,  42 => 10,  39 => 10,  36 => 13,  33 => 6,  30 => 10,);
    }
}
