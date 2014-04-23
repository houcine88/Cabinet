<?php

/* CabinetPatientBundle:Operation:index.html.twig */
class __TwigTemplate_b0843cc0d8a78ae4376551a829ed6001428ef9f5f23d86d0934c0d4bd6567c68 extends Twig_Template
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
        echo "<h1>Liste des opérations</h1>
<div class=\"count\">
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount"), "html", null, true);
        echo "
</div>

<table class=\"table\">
    <thead>

        <tr>
            <th";
        // line 13
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "op.Date"), "method")) {
            echo " class=\"sorted\"";
        }
        echo "><b class=\"caret\">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Date", "op.date");
        echo "</b></th>
            <th>Type</th>
            <th>Doit</th>
            <th>Recu</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "        <tr ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
            <td>";
            // line 23
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "doit"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recu"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a class=\"deleteOperation\" href=\"#\" url=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operation_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "idFiche" => (isset($context["idFiche"]) ? $context["idFiche"] : $this->getContext($context, "idFiche")))), "html", null, true);
            echo "\">delete</a>
                    </li>
                    <li>
                        <a class=\"actionOperation\" href=\"#\" url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operation_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>
<div class=\"navigation\">
    ";
        // line 42
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>
    ";
        // line 48
        echo "<div id=\"operation\" url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operation_create", array("idFiche" => (isset($context["idFiche"]) ? $context["idFiche"] : $this->getContext($context, "idFiche")))), "html", null, true);
        echo "\" style=\"display: none;\"></div>

<ul>
    <li>
        <a id=\"ajoutOperation\" class=\"actionOperation\" href=\"#\" url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operation_new", array("idFiche" => (isset($context["idFiche"]) ? $context["idFiche"] : $this->getContext($context, "idFiche")))), "html", null, true);
        echo "\">
            Nouvelle opération
        </a>
    </li>
</ul>

<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/operation.js"), "html", null, true);
        echo "\" type=\"text/javascript\">

</script>

    ";
    }

    public function getTemplateName()
    {
        return "CabinetPatientBundle:Operation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 61,  77 => 22,  148 => 54,  113 => 6,  152 => 59,  129 => 47,  97 => 34,  90 => 24,  100 => 51,  161 => 81,  137 => 66,  81 => 34,  172 => 66,  165 => 61,  153 => 55,  134 => 47,  126 => 45,  110 => 42,  84 => 23,  76 => 35,  70 => 11,  65 => 25,  53 => 18,  34 => 5,  23 => 1,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 53,  132 => 51,  128 => 49,  107 => 5,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 64,  143 => 56,  135 => 53,  119 => 42,  102 => 74,  71 => 30,  67 => 26,  63 => 31,  59 => 30,  38 => 6,  94 => 25,  89 => 20,  85 => 20,  75 => 29,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 12,  93 => 36,  88 => 38,  78 => 28,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 58,  156 => 66,  151 => 74,  142 => 59,  138 => 54,  136 => 42,  121 => 8,  117 => 43,  105 => 30,  91 => 36,  62 => 23,  49 => 14,  24 => 7,  25 => 3,  19 => 4,  79 => 30,  72 => 25,  69 => 26,  47 => 9,  40 => 14,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 52,  131 => 39,  123 => 58,  120 => 44,  115 => 42,  111 => 33,  108 => 36,  101 => 32,  98 => 26,  96 => 39,  83 => 32,  74 => 30,  66 => 22,  55 => 8,  52 => 25,  50 => 7,  43 => 13,  41 => 12,  35 => 6,  32 => 15,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 90,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 52,  147 => 52,  144 => 53,  141 => 48,  133 => 49,  130 => 62,  125 => 9,  122 => 43,  116 => 7,  112 => 42,  109 => 50,  106 => 41,  103 => 36,  99 => 31,  95 => 42,  92 => 45,  86 => 30,  82 => 29,  80 => 35,  73 => 16,  64 => 26,  60 => 21,  57 => 18,  54 => 5,  51 => 17,  48 => 16,  45 => 13,  42 => 10,  39 => 10,  36 => 13,  33 => 6,  30 => 10,);
    }
}
