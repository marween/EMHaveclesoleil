<?php

/* emhInscriptionBundle:Formations:liste.html.twig */
class __TwigTemplate_f2acb611fac3a4466556384ef24b013a60b086d4bf276408b2e1c73500ab06db extends Twig_Template
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
        echo "<h1>liste des formations</h1> <br>

";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formations"]) {
            // line 4
            echo "

<ul>
    <li>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emh_formation_detail", array("id" => $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "id"))), "html", null, true);
            echo "\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")), "nomFr"), "html", null, true);
            echo "
                </a>
    </li>
</ul>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
<p><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("emh_formation_add");
        echo "\" >ajouter une formation</a></p>";
    }

    public function getTemplateName()
    {
        return "emhInscriptionBundle:Formations:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  34 => 8,  23 => 3,  100 => 27,  81 => 24,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 20,  63 => 15,  59 => 6,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 19,  68 => 17,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 29,  88 => 6,  78 => 21,  46 => 11,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 15,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 11,  47 => 12,  40 => 8,  37 => 9,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 13,  52 => 16,  50 => 10,  43 => 9,  41 => 9,  35 => 7,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 28,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 10,  60 => 16,  57 => 11,  54 => 16,  51 => 13,  48 => 11,  45 => 17,  42 => 10,  39 => 10,  36 => 7,  33 => 8,  30 => 2,);
    }
}
