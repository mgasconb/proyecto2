<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_3af9a2331f43a01ba58f9ac0dd6d2683ae6633a657dc214fe0c183eb58ee2787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  76 => 17,  53 => 11,  216 => 97,  213 => 96,  211 => 95,  198 => 90,  186 => 85,  181 => 83,  178 => 82,  153 => 72,  148 => 70,  100 => 70,  395 => 333,  390 => 331,  383 => 328,  378 => 325,  376 => 324,  373 => 323,  363 => 337,  357 => 323,  353 => 321,  349 => 320,  346 => 319,  343 => 307,  340 => 306,  330 => 342,  328 => 306,  113 => 66,  97 => 64,  90 => 32,  84 => 29,  118 => 72,  110 => 22,  70 => 45,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 334,  393 => 332,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 331,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 45,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 94,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 19,  67 => 15,  63 => 15,  59 => 13,  38 => 6,  94 => 34,  89 => 61,  85 => 59,  75 => 17,  68 => 14,  56 => 11,  87 => 60,  21 => 2,  26 => 11,  93 => 62,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 91,  196 => 89,  183 => 84,  171 => 79,  166 => 77,  163 => 76,  158 => 67,  156 => 73,  151 => 71,  142 => 59,  138 => 66,  136 => 65,  121 => 73,  117 => 19,  105 => 18,  91 => 62,  62 => 23,  49 => 10,  24 => 4,  25 => 2,  19 => 1,  79 => 18,  72 => 51,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 105,  123 => 47,  120 => 20,  115 => 100,  111 => 37,  108 => 19,  101 => 67,  98 => 8,  96 => 31,  83 => 57,  74 => 14,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 9,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 88,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 78,  164 => 59,  162 => 133,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 67,  133 => 64,  130 => 41,  125 => 75,  122 => 43,  116 => 41,  112 => 94,  109 => 88,  106 => 82,  103 => 76,  99 => 67,  95 => 7,  92 => 21,  86 => 28,  82 => 28,  80 => 57,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 3,);
    }
}
