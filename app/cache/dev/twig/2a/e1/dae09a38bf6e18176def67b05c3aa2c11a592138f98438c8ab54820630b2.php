<?php

/* CabinetUserBundle:Default:index.html.twig */
class __TwigTemplate_2ae1dae09a38bf6e18176def67b05c3aa2c11a592138f98438c8ab54820630b2 extends Twig_Template
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "

<div>
            ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                
                ";
            // line 12
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 13
                echo "    admin dasheboard
                    ";
                // line 14
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CabinetUserBundle:Default:admin"));
                echo "
                ";
            } else {
                // line 16
                echo "                    ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CabinetUserBundle:Default:medecin"));
                echo "
                ";
            }
            // line 18
            echo "            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CabinetUserBundle:Security:Login"));
            echo "


                ";
            // line 23
            echo "            ";
        }
        // line 24
        echo "</div>


";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 30
            echo "<div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$('#enregistrer').click(function() {
        var url = \$(this).attr('url');
        \$(\"#register\").load(url, function() {
            \$(this).dialog({
                height: '500',
                width: 'auto',
                modal: true,
                draggable: true,
                title: 'Enregistrement',
                position: 'center',
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
</script>
";
    }

    public function getTemplateName()
    {
        return "CabinetUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  96 => 37,  93 => 36,  84 => 31,  79 => 30,  75 => 29,  70 => 24,  67 => 23,  60 => 19,  57 => 18,  51 => 16,  46 => 14,  43 => 13,  41 => 12,  38 => 11,  36 => 10,  31 => 7,  28 => 6,);
    }
}
