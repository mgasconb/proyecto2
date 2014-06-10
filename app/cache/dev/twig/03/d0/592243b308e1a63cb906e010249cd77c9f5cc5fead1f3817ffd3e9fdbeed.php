<?php

/* mdmBundle:Default:index.html.twig */
class __TwigTemplate_03d0592243b308e1a63cb906e010249cd77c9f5cc5fead1f3817ffd3e9fdbeed extends Twig_Template
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
        echo "<div>
    
    
    
  
   
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 8
            echo "    <p> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "getTask"), "getName"), "html", null, true);
            echo "</p>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo " 
   
    <p>No hay tareas</p>


</div>";
    }

    public function getTemplateName()
    {
        return "mdmBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
