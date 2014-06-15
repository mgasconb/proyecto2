<?php

/* mdmBundle:Users:signup.html.twig */
class __TwigTemplate_960d2c0a3bd111fab4c2927528d9df6ffd7cddc4aacfbfb53ede23a23f9fab1e extends Twig_Template
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
        <title>MDM gestión de tareas</title>
        <meta charset=\"UTF-8\"/>
         <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdmmdm/css/signup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        
        <link href=\"./img/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />
        <script type=\"text/javascript\" src=\"";
        // line 9
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

                \$(\"#selecGrupo\").click(function() {
                    if (\$(\"#formSelecG\").is(\":hidden\")) {
                        \$(\"#formSelecG\").css(\"display\", \"inline-block\");
                        \$(\"#formSelecG\").slideDown(\"slow\");
                        \$(\"#formSelecG\").animate({
                            \"margin-left\": \"40%\"}, \"slow\");

                    }
                    else {
                        \$(\"#formSelecG\").slideUp(\"slow\");
                        \$(\"#formSelecG\").animate({
                            \"margin-left\": \"4%\"}, \"slow\");
                    }

                    if (\$(\"#formCrearG\").is(\":visible\")) {
                        \$(\"#formCrearG\").css(\"display\", \"none\");
                        \$(\"#formCrearG\").slideUp(\"slow\");
                    }
                });

                \$(\"#crearGrupo\").click(function() {
                    if (\$(\"#formCrearG\").is(\":hidden\")) {
                        \$(\"#formCrearG\").css(\"display\", \"inline-block\");
                        \$(\"#formCrearG\").slideDown(\"slow\");
                        \$(\"#formCrearG\").animate({
                            \"margin-left\": \"40%\"}, \"slow\");
                    }

                    else {
                        \$(\"#formCrearG\").slideUp(\"slow\");
                        \$(\"#formCrearG\").animate({
                            \"margin-left\": \"70%\"}, \"slow\");
                    }
                    
                    
                    if (\$(\"#formSelecG\").is(\":visible\")) {
                        \$(\"#formSelecG\").css(\"display\", \"none\");
                        \$(\"#formSelecG\").slideUp(\"slow\");
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
                <form id=\"form_login\">
                    <ul>  
                        <li>
                            <input class=\"check\" id=\"selecGrupo\" type=\"radio\" name=\"grupo\" value=\"Seleccionar un grupo\" >Seleccionar un grupo
                            
                            <input class=\"check\" id=\"crearGrupo\" type=\"radio\" name=\"grupo\" value=\"Crear un grupo\"  >Crear un grupo  </li>
                    </ul>  
                </form>
                <!--en crear grupo van los de grupo  y los de usuario
                en seleccionar grupo van los de usuarios y 1 campo para meter el grupo-->

                <form id=\"formSelecG\" method=\"POST\" path=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("mdm_user_signup");
        echo "\">
                    <ul>  
                        <li>
                            <label>Nombre</label><input class=\"campos\" type=\"text\" name=\"nombre\">
                        </li>
                        <li>
                            <label>Apellidos</label><input class=\"campos\" type=\"text\" name=\"apellidos\">
                        </li>
                        <li>  
                            <label>Login</label><input class=\"campos\" type=\"text\" name=\"login\">
                        </li>
                        <li>
                            <label>Email</label><input class=\"campos\" type=\"text\" name=\"email\">
                        </li>
                        <li>
                            <label>Password</label><input class=\"campos\" type=\"password\" name=\"password\">
                        </li>
                        <li>
                            <label>Other</label><input class=\"campos\" type=\"text\" name=\"other\">
                        </li>                        
                        <li>
                            <label>Nombre del grupo</label><input class=\"campos\" type=\"text\" name=\"groupname\">
                        </li>
                        
                        <li><br/> <input id=\"form_save\" type=\"submit\" value=\"Enviar\"/>
                    </ul>  
                </form>

                <form id=\"formCrearG\" method=\"POST\" path=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("mdm_user_signup");
        echo "\">
                    <ul>  
                        <li>
                            <label>Nombre</label><input class=\"campos\" type=\"text\" name=\"nombre\">
                        </li>
                        <li>
                            <label>Apellidos</label><input class=\"campos\" type=\"text\" name=\"apellidos\">
                        </li>
                        <li>  
                            <label>Login</label><input class=\"campos\" type=\"text\" name=\"login\">
                        </li>
                        <li>
                            <label>Email</label><input class=\"campos\" type=\"text\" name=\"email\">
                        </li>
                        <li>
                            <label>Password</label><input class=\"campos\" type=\"password\" name=\"password\">
                        </li>
                        <li>
                            <label>Other</label><input class=\"campos\" type=\"text\" name=\"other\">
                        </li>
                        <li>
                            <label>Nombre del grupo</label><input class=\"campos\" type=\"text\" name=\"nombreGrupo\">
                        </li>  
                        <li>
                            <label>Descripción del grupo</label><input class=\"campos\" type=\"text\" name=\"descripcion\">
                        </li>
                        <li><br/> <input id=\"form_save\" type=\"submit\" value=\"Enviar\"/>
                    </ul>  
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
        return "mdmBundle:Users:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 133,  131 => 105,  32 => 9,  26 => 6,  19 => 1,);
    }
}
