<?php

/* mdmBundle:Users:formularioGrupo.html.twig */
class __TwigTemplate_2a46bd2d3120a26bcfc317175f7094862ce41c30ff2e328968063a829b941801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'form_login' => array($this, 'block_form_login'),
            'form_password' => array($this, 'block_form_password'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<!DOCTYPE HTML>
<html>
    <head>
        <title>MDM Gestión de Tareas</title>
            <meta charset=\"UTF-8\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdmmdm/css/styles.css"), "html", null, true);
        echo "\">
            <link href=\"./img/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />
            <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdmmdm/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
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
                    <h1 id=\"signature\">MDM Gestión de Tareas</h1><!--</div>-->
                </div>
                <nav>
                    <a href=\"index.html\">Home</a>
                    <a href=\"perfil.html\">Perfil</a>
                    <a href=\"registro.html\">Registro</a>
                    <a id=\"last\">Login</a>
                </nav>
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
                        
                       
                        <section id=\"formulario\">
                            
                    
                            
                                <ul>
                                    ";
        // line 59
        $this->displayBlock('login', $context, $blocks);
        // line 79
        echo "                                </ul>
                            
                                </section>
                                
                                <footer>

                                    <div class=\"footerLinks\">Copyright 2014 by MDM</div>
                                </footer>
                        </div>
                    </body>
                </html>";
    }

    // line 59
    public function block_login($context, array $blocks = array())
    {
        // line 60
        echo "                                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "form_login")));
        echo "
                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                                    ";
        // line 63
        echo "                                    ";
        $this->displayBlock('form_login', $context, $blocks);
        // line 71
        echo "                                    ";
        $this->displayBlock('form_password', $context, $blocks);
        // line 77
        echo "                                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                ";
    }

    // line 63
    public function block_form_login($context, array $blocks = array())
    {
        // line 64
        echo "                                     ";
        // line 65
        echo "

                                        <li>
                                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login"), 'row', array("attr" => array("class" => "campos")));
        echo "
                                        </li>
                                    ";
    }

    // line 71
    public function block_form_password($context, array $blocks = array())
    {
        // line 72
        echo "                                        ";
        // line 73
        echo "                                        <li>
                                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row', array("attr" => array("class" => "campos")));
        echo "
                                        </li>
                                    ";
    }

    public function getTemplateName()
    {
        return "mdmBundle:Users:formularioGrupo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 74,  150 => 73,  148 => 72,  145 => 71,  138 => 68,  133 => 65,  131 => 64,  128 => 63,  121 => 77,  118 => 71,  115 => 63,  111 => 61,  106 => 60,  103 => 59,  89 => 79,  87 => 59,  36 => 11,  31 => 9,  22 => 2,);
    }
}
