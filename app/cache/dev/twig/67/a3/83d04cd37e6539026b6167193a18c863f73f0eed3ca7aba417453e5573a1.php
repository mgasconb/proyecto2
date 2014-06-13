<?php

/* mdmBundle:tasks:tasksgroup.html.twig */
class __TwigTemplate_67a383d04cd37e6539026b6167193a18c863f73f0eed3ca7aba417453e5573a1 extends Twig_Template
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
        echo "

<!DOCTYPE HTML>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdmmdm/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" />

        <link href=\"./img/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />
        <script type=\"text/javascript\" src=\"";
        // line 9
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

                <div id=\"divTareas\">
                    ";
        // line 59
        if ((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all"))) {
            // line 60
            echo "                         ";
            // line 61
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 62
                echo "                    <div>
                        <p>Nombre de la tarea: ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "getName"), "html", null, true);
                echo "</p>
                        <p>Grupo: ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "getGroupId"), "html", null, true);
                echo "</p>
                        <p>Otro: ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "getOther"), "html", null, true);
                echo "</p>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                    ";
        } else {
            // line 69
            echo "                    <div>No hay tareas para mostrar</div>
                    ";
        }
        // line 71
        echo "                </div>


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
        return "mdmBundle:tasks:tasksgroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 71,  117 => 69,  114 => 68,  105 => 65,  101 => 64,  97 => 63,  94 => 62,  89 => 61,  87 => 60,  85 => 59,  32 => 9,  26 => 6,  19 => 1,);
    }
}
