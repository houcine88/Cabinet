<?php

/* CabinetPatientBundle:Patient:index.html.twig */
class __TwigTemplate_ef589e9eb8e24c9eac21c6da772ed9bb1e4fef06311844ad9051fa9b6334498e extends Twig_Template
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
        echo "<h1>Patient list</h1>

<table class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de naissance</th>
            <th>Adresse</th>
            <th>Telephonne</th>
            ";
        // line 15
        echo "            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateNaissance")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateNaissance"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tel"), "html", null, true);
            echo "</td>
                ";
            // line 27
            echo "                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer ce patient?');\">delete</a>
                        </li>
                        <li>
                            <a class=\"OperationPatient\" href=\"#\" url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <a class=\"OperationPatient\" class=\"btn\" href=\"#\" url=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("patient_new");
        echo "\">
            Nouveau patient
        </a>
    </ul>
    <div id=\"patient\" style=\"display: none;\"></div>

    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
         \$(document).ready(function() {
        \$('.OperationPatient').click(function() {
            var url = \$(this).attr('url');
            \$(\"#patient\").load(url, function() {
                \$(this).dialog({
                    height: 'auto',
                    width: 'auto',
                    modal: true,
                    draggable:true,
                    title: 'Enregistrement',
                    //position: 'center',
                    overlay: {
                        backgroundColor: '#000',
                        opacity: 0.5
                    },
                    close: function() {
                        \$(this).dialog('close');
                        //self.location.reload();
                    }
                });
            });
        });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "CabinetPatientBundle:Patient:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  118 => 49,  109 => 43,  103 => 39,  91 => 33,  85 => 30,  80 => 27,  76 => 25,  72 => 24,  66 => 23,  62 => 22,  56 => 21,  53 => 20,  49 => 19,  43 => 15,  31 => 4,  28 => 3,);
    }
}
