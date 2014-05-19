<?php

/* mdmBundle:Default:formularioUsuarios.html.twig */
class __TwigTemplate_ea0a052ab7a7df3cf0ebdcfdb7ef4a7f69b6ad3882d10e3b452e58ef000f754b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_login' => array($this, 'block_form_login'),
            'form_password' => array($this, 'block_form_password'),
            'form_name' => array($this, 'block_form_name'),
            'form_surname' => array($this, 'block_form_surname'),
            'form_other' => array($this, 'block_form_other'),
            'form_email' => array($this, 'block_form_email'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<!DOCTYPE HTML>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdmmdm/css/styles.css"), "html", null, true);
        echo "\"
        <style>
        </style>
        <title>MDM GestiÃ³n de Tareas</title>
        <meta charset=\"UTF-8\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/styles.css\"/>
        <link href=\"./img/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />
        <script type=\"text/javascript\" src=\"jquery-2.1.0.min.js\"></script>
        <script>
            \$(document).ready(function() {
                \$(\"#last\").click(function() {
                    if (\$(\"#divForm\").is(\":hidden\")) {
                        \$(\"#divForm\").css(\"display\", \"inline-block\");
                        \$(\"#divForm\").slideDown(\"slow\");
                    }
                    else {
                        \$(\"#divForm\").slideUp(\"slow\");
                    }
                });
            });
        </script>
    </head>

    <body>
        <div id=\"wrapper\">
            <header>
                <div id=\"subheader\"> 
                    <div id=\"image\"></div>
                    <h1 id=\"signature\">MDM GestiÃ³n de Tareas</h1><!--</div>-->
                </div>
                <nav>
                    <a href=\"index.html\">Home</a>
                    <a href=\"perfil.html\">Perfil</a>
                    <a href=\"registro.html\">Registro</a>
                    <a id=\"last\">Login</a>
                </nav>
                <!--
                <div id=\"divForm\">
                    <form>
                        <ul>  
                            <li><label for=\"usermail\">Email</label>  
                                <input type=\"email\" name=\"usermail\" value=\"\" placeholder=\"yourname@email.com\"/></li>  
                            <li><label for=\"password\">Password</label>  
                                <input type=\"password\" name=\"password\" value=\"\" placeholder=\"password\"/></li>  
                            <li><input type=\"submit\" value=\"Login\"/></li>  
                        </ul>  
                    </form>
                </div>
            </header>
                -->
                <section id=\"registro\">

                    <div id=\"form_registro\">
                        <ul>
                            ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                                ";
        // line 64
        echo "                                ";
        $this->displayBlock('form_login', $context, $blocks);
        // line 70
        echo "                                ";
        $this->displayBlock('form_password', $context, $blocks);
        // line 76
        echo "                                ";
        $this->displayBlock('form_name', $context, $blocks);
        // line 82
        echo "                                ";
        $this->displayBlock('form_surname', $context, $blocks);
        // line 88
        echo "                                ";
        $this->displayBlock('form_other', $context, $blocks);
        // line 94
        echo "                                ";
        $this->displayBlock('form_email', $context, $blocks);
        // line 100
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </ul>
                    </div>   
                </section>

                <footer>

                    <div class=\"footerLinks\"><a href=\"\">Copyright 2014 by MDM</a></div>
                </footer>
        </div>   
    </body>
</html>
";
    }

    // line 64
    public function block_form_login($context, array $blocks = array())
    {
        // line 65
        echo "                                    ";
        // line 66
        echo "                            <li class=\"campos\">
                                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login"), 'row');
        echo "
                            </li>
                                ";
    }

    // line 70
    public function block_form_password($context, array $blocks = array())
    {
        // line 71
        echo "                                    ";
        // line 72
        echo "                            <li class=\"campos\">
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
                            </li>
                                ";
    }

    // line 76
    public function block_form_name($context, array $blocks = array())
    {
        // line 77
        echo "                                    ";
        // line 78
        echo "                            <li class=\"campos\">
                                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
                            </li>
                                ";
    }

    // line 82
    public function block_form_surname($context, array $blocks = array())
    {
        // line 83
        echo "                                    ";
        // line 84
        echo "                            <li class=\"campos\">
                                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname"), 'row');
        echo "
                            </li>
                                ";
    }

    // line 88
    public function block_form_other($context, array $blocks = array())
    {
        // line 89
        echo "                                    ";
        // line 90
        echo "                            <li class=\"campos\">
                                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "other"), 'row');
        echo "
                            </li>
                                ";
    }

    // line 94
    public function block_form_email($context, array $blocks = array())
    {
        // line 95
        echo "                                    ";
        // line 96
        echo "                            <li class=\"campos\">
                                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
                            </li>
                                ";
    }

    public function getTemplateName()
    {
        return "mdmBundle:Default:formularioUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 97,  213 => 96,  211 => 95,  208 => 94,  201 => 91,  198 => 90,  196 => 89,  193 => 88,  186 => 85,  183 => 84,  181 => 83,  178 => 82,  171 => 79,  168 => 78,  166 => 77,  163 => 76,  156 => 73,  153 => 72,  151 => 71,  148 => 70,  141 => 67,  138 => 66,  136 => 65,  133 => 64,  115 => 100,  112 => 94,  109 => 88,  106 => 82,  103 => 76,  100 => 70,  97 => 64,  93 => 62,  89 => 61,  32 => 7,  25 => 2,);
    }
}
