<?php

/* CabinetUserBundle:Medecin:listMedecin.html.twig */
class __TwigTemplate_827295b37ad60e06c8268428f2611825347c8cbaa503e0a34460f5544cf93860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layoutAdmin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " |
                <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
";
        }
        // line 10
        echo "<h1>Medecin list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>CIN</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cin"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tel"), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">
                    ";
            // line 33
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled") == 1)) {
                // line 34
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/valider.png"), "html", null, true);
                echo "\"/>
                    ";
            } else {
                // line 36
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/annuler.png"), "html", null, true);
                echo "\"/>
                    ";
            }
            // line 38
            echo "                    </td>
                    <td>
                        <ul>
                            <li>
                                ";
            // line 42
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled") == 1)) {
                // line 43
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_desactivate", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">desactiver</a>
                                ";
            } else {
                // line 45
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_activate", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">activate</a>
                                ";
            }
            // line 47
            echo "                                </li>
                                <li>
                                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                                </li>
                                
                                <li>
                                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medecin_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </tbody>
            </table>

            <ul>
                <li>
                    <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("medecin_new");
        echo "\">
                        Create a new entry
                    </a>
                </li>
            </ul>
    ";
    }

    public function getTemplateName()
    {
        return "CabinetUserBundle:Medecin:listMedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 59,  129 => 47,  97 => 34,  90 => 31,  100 => 38,  161 => 81,  137 => 66,  81 => 34,  172 => 66,  165 => 61,  153 => 55,  134 => 47,  126 => 45,  110 => 42,  84 => 36,  76 => 34,  70 => 11,  65 => 25,  53 => 18,  34 => 7,  23 => 1,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 53,  132 => 51,  128 => 49,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 64,  143 => 56,  135 => 53,  119 => 42,  102 => 40,  71 => 31,  67 => 23,  63 => 31,  59 => 30,  38 => 6,  94 => 28,  89 => 20,  85 => 20,  75 => 29,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 12,  93 => 36,  88 => 37,  78 => 28,  46 => 14,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 74,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 43,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 30,  72 => 27,  69 => 26,  47 => 12,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 45,  120 => 44,  115 => 42,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 39,  83 => 32,  74 => 30,  66 => 32,  55 => 8,  52 => 25,  50 => 7,  43 => 13,  41 => 12,  35 => 7,  32 => 15,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 90,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 52,  144 => 70,  141 => 48,  133 => 49,  130 => 46,  125 => 44,  122 => 43,  116 => 43,  112 => 42,  109 => 38,  106 => 41,  103 => 36,  99 => 31,  95 => 33,  92 => 38,  86 => 30,  82 => 29,  80 => 35,  73 => 16,  64 => 51,  60 => 6,  57 => 18,  54 => 5,  51 => 16,  48 => 10,  45 => 5,  42 => 7,  39 => 3,  36 => 10,  33 => 5,  30 => 5,);
    }
}
