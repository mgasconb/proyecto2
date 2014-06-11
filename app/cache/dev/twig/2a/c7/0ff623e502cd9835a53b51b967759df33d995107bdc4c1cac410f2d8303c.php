<?php

/* mdmBundle:Tasks:showTasks.html.twig */
class __TwigTemplate_2ac70ff623e502cd9835a53b51b967759df33d995107bdc4c1cac410f2d8303c extends Twig_Template
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

                <div id=\"divTareas\">
                    ";
        // line 57
        if ((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all"))) {
            // line 58
            echo "                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 59
                echo "                    <div>
                        <p>Nombre de la tarea: ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "getTask"), "getName"), "html", null, true);
                echo "</p>
                        <p>Grupo: ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "getTask"), "getGroupId"), "html", null, true);
                echo "</p>
                        <p>Otro: ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "getTask"), "getOther"), "html", null, true);
                echo "</p>
                    </div>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                    ";
        } else {
            // line 66
            echo "                    <div>No hay tareas para mostrar</div>
                    ";
        }
        // line 68
        echo "                </div>
                
                ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 71
            echo "                a
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUser"), "getRoles"), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </section>

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
        return "mdmBundle:Tasks:showTasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 74,  128 => 72,  125 => 71,  121 => 70,  117 => 68,  113 => 66,  110 => 65,  101 => 62,  97 => 61,  93 => 60,  90 => 59,  85 => 58,  83 => 57,  30 => 7,  24 => 4,  19 => 1,);
    }
}
