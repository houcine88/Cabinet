<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_df1b1a894bb395f950164eaf84ba32ed25c9a4b0cc160a10ff1890691451a3f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "

<section class=\"container\">
    <div class=\"login\">
        <h1>Connectez-vous à Cabinet.com</h1>
        <form method=\"post\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <p><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Identifiant\" /></p>
            <p><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" /></p>
            <p class=\"remember_me\">
                <label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    Se souvenir de moi
                </label>
            </p>
            <p class=\"submit\">    <input class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </p>
        </form>
    </div>

    <div class=\"login-help\">
        <p>Mot de passe oublié? <a href=\"\">Cliquez ici pour le réinitialiser</a>.</p>
        <p>Vous n'êtes pas encore membre? <a id=\"enregistrer\" class=\"register\" href=\"#\" url=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("medecin_registration");
        echo "\">S'inscrire</a>.</p>
    </div>
</section>

<div id=\"register\"></div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  54 => 16,  39 => 9,  33 => 7,  77 => 21,  74 => 17,  71 => 16,  66 => 15,  56 => 9,  50 => 15,  47 => 6,  22 => 1,  100 => 38,  96 => 37,  93 => 36,  84 => 31,  79 => 30,  75 => 31,  70 => 24,  67 => 23,  60 => 10,  57 => 18,  51 => 16,  46 => 14,  43 => 13,  41 => 22,  38 => 16,  36 => 15,  31 => 6,  28 => 5,);
    }
}
