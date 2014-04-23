<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_65c22a32d92c4d5b7a7195896eb7269d9de221a1be90b7c567754491cbeea27a extends Twig_Template
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
        // line 1
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  58 => 19,  118 => 64,  167 => 61,  77 => 27,  148 => 54,  113 => 6,  152 => 59,  129 => 47,  97 => 34,  90 => 24,  100 => 33,  161 => 81,  137 => 66,  81 => 35,  172 => 66,  165 => 61,  153 => 55,  134 => 47,  126 => 69,  110 => 42,  84 => 23,  76 => 25,  70 => 11,  65 => 20,  53 => 18,  34 => 5,  23 => 6,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 53,  132 => 51,  128 => 49,  107 => 56,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 64,  143 => 56,  135 => 53,  119 => 42,  102 => 29,  71 => 30,  67 => 27,  63 => 25,  59 => 18,  38 => 10,  94 => 30,  89 => 28,  85 => 30,  75 => 29,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 12,  93 => 36,  88 => 39,  78 => 34,  46 => 13,  27 => 5,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 58,  156 => 66,  151 => 74,  142 => 59,  138 => 54,  136 => 42,  121 => 8,  117 => 43,  105 => 35,  91 => 29,  62 => 19,  49 => 17,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 24,  69 => 26,  47 => 12,  40 => 14,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 52,  131 => 39,  123 => 58,  120 => 33,  115 => 42,  111 => 33,  108 => 36,  101 => 32,  98 => 28,  96 => 38,  83 => 32,  74 => 31,  66 => 23,  55 => 17,  52 => 16,  50 => 25,  43 => 12,  41 => 11,  35 => 6,  32 => 7,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 90,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 52,  147 => 52,  144 => 53,  141 => 48,  133 => 73,  130 => 62,  125 => 36,  122 => 50,  116 => 7,  112 => 42,  109 => 43,  106 => 41,  103 => 34,  99 => 53,  95 => 42,  92 => 42,  86 => 27,  82 => 29,  80 => 27,  73 => 23,  64 => 20,  60 => 23,  57 => 18,  54 => 5,  51 => 17,  48 => 7,  45 => 16,  42 => 10,  39 => 10,  36 => 13,  33 => 5,  30 => 10,);
    }
}
