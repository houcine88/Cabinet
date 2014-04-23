<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_05b6a6a9f8d0ffa9e54e73e7e0c5a8676f0bf4762105353e04a5479f11b440b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  181 => 81,  178 => 80,  170 => 77,  104 => 51,  188 => 88,  155 => 75,  124 => 62,  114 => 59,  58 => 32,  118 => 64,  167 => 76,  77 => 27,  148 => 69,  113 => 55,  152 => 74,  129 => 64,  97 => 52,  90 => 32,  100 => 33,  161 => 81,  137 => 65,  81 => 47,  172 => 66,  165 => 75,  153 => 55,  134 => 47,  126 => 63,  110 => 22,  84 => 29,  76 => 17,  70 => 11,  65 => 35,  53 => 11,  34 => 26,  23 => 6,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 64,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 30,  67 => 27,  63 => 34,  59 => 13,  38 => 6,  94 => 34,  89 => 28,  85 => 30,  75 => 43,  68 => 36,  56 => 11,  87 => 49,  21 => 2,  26 => 9,  93 => 47,  88 => 31,  78 => 26,  46 => 13,  27 => 5,  44 => 26,  31 => 3,  28 => 20,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 58,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 42,  121 => 61,  117 => 19,  105 => 18,  91 => 50,  62 => 19,  49 => 10,  24 => 18,  25 => 3,  19 => 16,  79 => 25,  72 => 24,  69 => 40,  47 => 8,  40 => 6,  37 => 5,  22 => 17,  246 => 90,  157 => 56,  145 => 46,  139 => 52,  131 => 61,  123 => 58,  120 => 20,  115 => 42,  111 => 33,  108 => 19,  101 => 32,  98 => 28,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 10,  50 => 29,  43 => 7,  41 => 5,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 90,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 52,  144 => 53,  141 => 70,  133 => 73,  130 => 62,  125 => 59,  122 => 50,  116 => 7,  112 => 42,  109 => 43,  106 => 41,  103 => 34,  99 => 53,  95 => 42,  92 => 42,  86 => 45,  82 => 28,  80 => 43,  73 => 16,  64 => 13,  60 => 23,  57 => 12,  54 => 34,  51 => 33,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 3,  30 => 3,);
    }
}
