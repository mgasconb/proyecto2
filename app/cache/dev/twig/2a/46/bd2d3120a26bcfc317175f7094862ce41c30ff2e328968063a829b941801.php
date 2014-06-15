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
        // line 60
        $this->displayBlock('login', $context, $blocks);
        // line 78
        echo "                                 </ul>             
                                    ";
        // line 79
        if ((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje"))) {
            echo " 
                                                    <div id=\"mensaje\">
                                                        ";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "       
                                                    </div>
                                    ";
        }
        // line 83
        echo "                
                                
                            
                                </section>
                                
                                <footer>

                                    <div class=\"footerLinks\">Copyright 2014 by MDM</div>
                                </footer>
                        </div>
                    </body>
                </html>";
    }

    // line 60
    public function block_login($context, array $blocks = array())
    {
        // line 61
        echo "                                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "form_login")));
        echo "
                                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                                                ";
        // line 64
        echo "                                                ";
        $this->displayBlock('form_login', $context, $blocks);
        // line 70
        echo "                                                ";
        $this->displayBlock('form_password', $context, $blocks);
        // line 76
        echo "                                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                        ";
    }

    // line 64
    public function block_form_login($context, array $blocks = array())
    {
        // line 65
        echo "                                                    ";
        // line 66
        echo "                                                    <li>
                                                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login"), 'row', array("attr" => array("class" => "campos")));
        echo "
                                                    </li>
                                                ";
    }

    // line 70
    public function block_form_password($context, array $blocks = array())
    {
        // line 71
        echo "                                                    ";
        // line 72
        echo "                                                    <li>
                                                        ";
        // line 73
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
        return array (  167 => 73,  164 => 72,  162 => 71,  159 => 70,  152 => 67,  149 => 66,  147 => 65,  144 => 64,  137 => 76,  134 => 70,  131 => 64,  127 => 62,  122 => 61,  119 => 60,  104 => 83,  98 => 81,  93 => 79,  90 => 78,  88 => 60,  36 => 11,  31 => 9,  22 => 2,);
    }
}
