<?php

/* mdmBundle:Users:formularioUsuarios.html.twig */
class __TwigTemplate_f7a08d10e1d5811dd3fdc049fd51aeeb11d6716928d726b23af9e1aa02192b38 extends Twig_Template
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
        return "mdmBundle:Users:formularioUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 97,  213 => 96,  211 => 95,  198 => 90,  186 => 85,  181 => 83,  178 => 82,  153 => 72,  148 => 70,  100 => 70,  395 => 333,  390 => 331,  383 => 328,  378 => 325,  376 => 324,  373 => 323,  363 => 337,  357 => 323,  353 => 321,  349 => 320,  346 => 319,  343 => 307,  340 => 306,  330 => 342,  328 => 306,  113 => 66,  97 => 64,  90 => 59,  84 => 58,  118 => 72,  110 => 65,  70 => 45,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 334,  393 => 332,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 331,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 45,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 94,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 62,  89 => 61,  85 => 59,  75 => 17,  68 => 14,  56 => 9,  87 => 60,  21 => 2,  26 => 6,  93 => 62,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 91,  196 => 89,  183 => 84,  171 => 79,  166 => 77,  163 => 76,  158 => 67,  156 => 73,  151 => 71,  142 => 59,  138 => 66,  136 => 65,  121 => 73,  117 => 68,  105 => 68,  91 => 62,  62 => 23,  49 => 19,  24 => 4,  25 => 2,  19 => 1,  79 => 18,  72 => 51,  69 => 25,  47 => 9,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 100,  111 => 37,  108 => 36,  101 => 67,  98 => 8,  96 => 31,  83 => 57,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 15,  41 => 7,  35 => 12,  32 => 7,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 88,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 78,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 67,  133 => 64,  130 => 41,  125 => 75,  122 => 43,  116 => 41,  112 => 94,  109 => 88,  106 => 82,  103 => 76,  99 => 67,  95 => 7,  92 => 21,  86 => 28,  82 => 60,  80 => 57,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 7,  30 => 7,);
    }
}
