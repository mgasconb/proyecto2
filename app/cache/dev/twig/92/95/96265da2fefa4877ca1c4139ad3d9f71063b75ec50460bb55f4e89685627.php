<?php

/* mdmBundle:Tasks:editTasks.html.twig */
class __TwigTemplate_929596265da2fefa4877ca1c4139ad3d9f71063b75ec50460bb55f4e89685627 extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdmmdm/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" />

        <link href=\"./img/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />
        <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdmmdm/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <title>MDM Gestión de tareas</title>
        <meta charset=\"UTF-8\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/styles.css\"/>
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

            <section id=\"tareas\">
                <form id=\"formEditarTareas\" method=\"POST\">
                    <div id=\"divTareas\">
                        {<ul>
                            ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


                            <li>
                                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
                            </li>


                            <li>
                                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "other"), 'row');
        echo "
                            </li>

";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </ul>

                        </section>
                    </div>
                </form>
            </section>

            <footer>

                <div class=\"footerLinks\"><a href=\"\">Copyright 2014 by MDM</a></div>
            </footer>
        </div>   
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "mdmBundle:Tasks:editTasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 70,  99 => 67,  91 => 62,  84 => 58,  30 => 7,  24 => 4,  19 => 1,);
    }
}
