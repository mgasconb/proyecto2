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
        return array (  216 => 97,  213 => 96,  211 => 95,  198 => 90,  186 => 85,  181 => 83,  178 => 82,  153 => 72,  148 => 70,  100 => 70,  395 => 333,  390 => 331,  383 => 328,  378 => 325,  376 => 324,  373 => 323,  363 => 337,  357 => 323,  353 => 321,  349 => 320,  346 => 319,  343 => 307,  340 => 306,  330 => 342,  328 => 306,  113 => 66,  97 => 64,  90 => 59,  84 => 58,  118 => 72,  110 => 65,  70 => 45,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 334,  393 => 332,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 331,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 45,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 94,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 62,  89 => 61,  85 => 59,  75 => 17,  68 => 14,  56 => 9,  87 => 60,  21 => 2,  26 => 6,  93 => 62,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 91,  196 => 89,  183 => 84,  171 => 79,  166 => 77,  163 => 76,  158 => 67,  156 => 73,  151 => 71,  142 => 59,  138 => 66,  136 => 65,  121 => 73,  117 => 68,  105 => 68,  91 => 62,  62 => 23,  49 => 19,  24 => 4,  25 => 2,  19 => 1,  79 => 18,  72 => 51,  69 => 25,  47 => 9,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 105,  123 => 47,  120 => 40,  115 => 100,  111 => 37,  108 => 36,  101 => 67,  98 => 8,  96 => 31,  83 => 57,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 15,  41 => 7,  35 => 12,  32 => 9,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 88,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 78,  164 => 59,  162 => 133,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 67,  133 => 64,  130 => 41,  125 => 75,  122 => 43,  116 => 41,  112 => 94,  109 => 88,  106 => 82,  103 => 76,  99 => 67,  95 => 7,  92 => 21,  86 => 28,  82 => 60,  80 => 57,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 7,  30 => 7,);
    }
}
