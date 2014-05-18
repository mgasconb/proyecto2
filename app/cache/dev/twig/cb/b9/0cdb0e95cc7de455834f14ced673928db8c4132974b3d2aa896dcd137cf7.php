<?php

/* mdmBundle:Default:formularioUsuarios.html.twig */
class __TwigTemplate_cbb90cdb0e95cc7de455834f14ced673928db8c4132974b3d2aa896dcd137cf7 extends Twig_Template
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
            'form_group' => array($this, 'block_form_group'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<!DOCTYPE HTML>
<html>
    <head>
        <style>
                html {
                    height: 100%;
                }

                body {
                    margin: 0;     
                    padding: 0;       
                    text-align: justify;
                    background: white;
                    font-family: \"Arial\";
                }

                a {
                    text-decoration: none;
                }

                /*Contains logotype, proyect name, form login and nav*/

                header {\t
                    padding-top: 0%;
                    height: 30%;
                    width: 98%;
                    margin: auto;
                    border-radius: 10px;
                    margin-bottom: 0%;
                }

                /*Contains logotype, proyect name and form login*/

                #subheader {
                    margin-top: 2%;
                    width: 90%;
                    margin-left: 5%;
                }

                #image {
                    height: 6.3em;
                    position: relative;
                    background-image: url('../img/logo.jpg');
                    background-size: 6.5em;
                    background-repeat: no-repeat;
                    width: 9%;
                    float: left;
                    min-width: 107px;
                }

                #signature { /*Proyect name */
                    position: relative;
                    float: left;
                    width: 40%;
                    text-shadow: 5px 5px 5px #D2691E;
                    font-size: 42px;
                    font-family: \"Forte\";
                }

                #signature h1{

                }
                /*-----NAV-----*/

                nav {
                    position: relative;
                    font-family: \"Arial\";
                    font-size: 14px;
                    font-weight: bold;
                    margin: auto;
                    text-align: center;
                    width: 90.2%;
                    margin-bottom:1%;
                    margin-top: 1%;
                    clear: both;
                }

                nav a, nav a:visited {
                    border-top: 1px solid #777777;
                    border-bottom: 1px solid #777777;
                    border-left: 1px solid #777777;
                    border-right: 1px solid #000000;
                    color: #D2691E;
                    display: inline-block;
                    font-family: \"Arial\";
                    font-size: 14px;
                    font-weight: 700;
                    margin: 0px -2px;
                    padding: 0.8% 8%;
                    text-decoration: none;
                    width: 8.8%;
                    background: -moz-radial-gradient(#9ACD32,#1BB312);
                    background: -webkit-radial-gradient(#9ACD32,#1BB312);
                    background: -o-radial-gradient(#9ACD32,#1BB312);
                    background: -ms-radial-gradient(#9ACD32,#1BB312);
                }

                nav a:hover {
                    background: -moz-radial-gradient(#1BB312, #9ACD32);
                    background: -webkit-radial-gradient(#1BB312, #9ACD32);
                    background: -o-radial-gradient(#1BB312, #9ACD32);
                    background: -ms-radial-gradient(#1BB312, #9ACD32);
                }

                nav a#last{
                    border-right: 1px solid #777777;
                    cursor: pointer;
                }

                /*-----LOGIN-----*/

                /* formulario desplegable */

                #divForm {
                    position: absolute;
                    display: none;
                    z-index: 20;
                    float: right;
                    margin-right: 3.1%;
                    right: 5.4%;
                    top: 28.1%;
                    background: white;
                    padding-right: 3%;
                    border: #9ACD32 solid 1px;
                }

                label {
                    display: block;
                    color: darkorange;
                    font-weight: 900;
                }

                #divForm form ul li {
                    list-style: none;
                }

                /*Formulario central*/

                #formulario {
                    margin-top: 8%;
                    margin-bottom: 10%;
                }

                #form_login {
                    position: relative;
                    text-align: center;
                }

                #form_login li {
                    list-style: none;
                }

                #form_login .campos {
                    width: 20%;
                    height: 25px;
                    border-radius: 5px;
                    margin-top: 1%;
                    margin-bottom: 1%;
                }

                #form_login label {
                    font-size: 22px;
                }

                #loguear {
                    width: 10%;
                    height: 40px;
                    border-radius: 10px;
                    cursor: pointer;
                    background-color: orange;
                    color: white;
                    font-weight: 900;
                }

                /* REGISTRO */

                #registro {
                    margin-top: 6%;
                    margin-bottom: 8%;
                }

                #form_registro {
                    position: relative;
                    text-align: center;   
                }

                #form_registro li {
                    list-style: none;
                }

                #form_registro .campos {
                    width: 20%;
                    height: 25px;
                    border-radius: 5px;
                    margin-top: 1%;
                    margin-bottom: 1%;
                }


                /* perfil */

                #perfil {
                    margin-top: 6%;
                    margin-bottom: 8%;
                }

                #form_perfil {
                    position: relative;
                    text-align: center;   
                }

                #form_perfil li {
                    list-style: none;
                }

                #form_perfil .campos {
                    width: 20%;
                    height: 25px;
                    border-radius: 5px;
                    margin-top: 1%;
                    margin-bottom: 1%;
                }

                .check {
                    margin-top: 1%;
                    margin-bottom: 1%; 
                }

                #descripcion {
                    border-radius: 5px;
                    margin-top: 1%;
                    margin-bottom: 1%;
                }

                /*-----FOOTER-----*/

                footer {
                    position: absolute;
                    margin-top: 0.5%;
                    width: 88%;
                    height: 2em;
                    background: -moz-radial-gradient(#9ACD32,#1BB312);
                    background: -webkit-radial-gradient(#9ACD32,#1BB312);
                    background: -o-radial-gradient(#9ACD32,#1BB312);
                    background: -ms-radial-gradient(#9ACD32,#1BB312);
                    text-align: center;
                    color: #D2691E;
                    margin-left: 5.9%;
                    margin-bottom: 0.5%;
                }

                .footerLinks  {
                    height: 100%;
                    position: relative;
                    line-height: 2.5em;
                    color: #D2691E;
                    float: right;
                    margin-right: 7%;
                    margin-left: 18%;
                    font-size: 13px;
                }

                .footerLinks a, footerLinks a:visited, footerLinks a:hover,footerLinks a:link{
                    color: #D2691E;
                    font-style: italic;
                }
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


                            <ul>
                            ";
        // line 322
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 323
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                                ";
        // line 325
        echo "                                ";
        $this->displayBlock('form_login', $context, $blocks);
        // line 331
        echo "                                ";
        $this->displayBlock('form_password', $context, $blocks);
        // line 337
        echo "                                ";
        $this->displayBlock('form_name', $context, $blocks);
        // line 343
        echo "                                ";
        $this->displayBlock('form_surname', $context, $blocks);
        // line 349
        echo "                                ";
        $this->displayBlock('form_other', $context, $blocks);
        // line 355
        echo "                                ";
        $this->displayBlock('form_email', $context, $blocks);
        // line 361
        echo "                                ";
        $this->displayBlock('form_group', $context, $blocks);
        // line 367
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                    </ul>
                                </section>

                                <footer>

                                    <div class=\"footerLinks\"><a href=\"\">Copyright 2014 by MDM</a></div>
                                </footer>
                        </div>   
                    </body>
                </html>";
    }

    // line 325
    public function block_form_login($context, array $blocks = array())
    {
        // line 326
        echo "                                    ";
        // line 327
        echo "                                    <li>
                                        ";
        // line 328
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login"), 'row');
        echo "
                                    </li>
                                ";
    }

    // line 331
    public function block_form_password($context, array $blocks = array())
    {
        // line 332
        echo "                                    ";
        // line 333
        echo "                                    <li>
                                        ";
        // line 334
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
                                    </li>
                                ";
    }

    // line 337
    public function block_form_name($context, array $blocks = array())
    {
        // line 338
        echo "                                    ";
        // line 339
        echo "                                    <li>
                                        ";
        // line 340
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
                                    </li>
                                ";
    }

    // line 343
    public function block_form_surname($context, array $blocks = array())
    {
        // line 344
        echo "                                    ";
        // line 345
        echo "                                    <li>
                                        ";
        // line 346
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname"), 'row');
        echo "
                                    </li>
                                ";
    }

    // line 349
    public function block_form_other($context, array $blocks = array())
    {
        // line 350
        echo "                                    ";
        // line 351
        echo "                                    <li>
                                        ";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "other"), 'row');
        echo "
                                    </li>
                                ";
    }

    // line 355
    public function block_form_email($context, array $blocks = array())
    {
        // line 356
        echo "                                    ";
        // line 357
        echo "                                    <li>
                                        ";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
                                    </li>
                                ";
    }

    // line 361
    public function block_form_group($context, array $blocks = array())
    {
        // line 362
        echo "                                    ";
        // line 363
        echo "                                    <li>
                                        ";
        // line 364
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group"), 'row');
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
        return array (  491 => 364,  488 => 363,  486 => 362,  483 => 361,  476 => 358,  473 => 357,  471 => 356,  468 => 355,  461 => 352,  458 => 351,  456 => 350,  453 => 349,  446 => 346,  443 => 345,  441 => 344,  438 => 343,  431 => 340,  428 => 339,  426 => 338,  423 => 337,  416 => 334,  413 => 333,  411 => 332,  408 => 331,  401 => 328,  398 => 327,  396 => 326,  393 => 325,  377 => 367,  374 => 361,  371 => 355,  368 => 349,  365 => 343,  362 => 337,  359 => 331,  356 => 325,  352 => 323,  348 => 322,  26 => 2,);
    }
}
