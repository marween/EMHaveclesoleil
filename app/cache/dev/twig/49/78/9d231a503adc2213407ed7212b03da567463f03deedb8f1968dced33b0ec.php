<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_49789d231a503adc2213407ed7212b03da567463f03deedb8f1968dced33b0ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 74,  129 => 57,  406 => 158,  403 => 157,  401 => 156,  394 => 152,  390 => 150,  378 => 144,  373 => 142,  369 => 141,  364 => 139,  359 => 138,  352 => 135,  349 => 133,  342 => 129,  336 => 126,  332 => 125,  328 => 124,  315 => 118,  301 => 111,  296 => 109,  290 => 106,  280 => 101,  277 => 100,  274 => 98,  261 => 91,  244 => 85,  239 => 83,  234 => 80,  225 => 77,  200 => 70,  198 => 69,  195 => 68,  192 => 65,  184 => 63,  180 => 62,  155 => 53,  146 => 49,  134 => 59,  126 => 42,  124 => 31,  76 => 57,  194 => 87,  181 => 80,  175 => 77,  161 => 71,  148 => 64,  137 => 46,  84 => 39,  65 => 30,  318 => 122,  316 => 121,  299 => 112,  293 => 109,  288 => 107,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  265 => 99,  260 => 98,  256 => 89,  250 => 93,  237 => 86,  228 => 78,  222 => 81,  215 => 74,  210 => 75,  191 => 69,  185 => 68,  174 => 60,  165 => 72,  160 => 70,  153 => 56,  150 => 65,  113 => 41,  110 => 77,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 393,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 140,  361 => 208,  346 => 196,  335 => 188,  331 => 187,  326 => 185,  321 => 123,  304 => 174,  291 => 169,  272 => 158,  267 => 94,  257 => 149,  253 => 95,  242 => 140,  232 => 84,  213 => 126,  197 => 70,  186 => 82,  152 => 92,  127 => 32,  114 => 71,  104 => 67,  97 => 63,  77 => 27,  53 => 5,  34 => 16,  23 => 18,  100 => 36,  81 => 25,  58 => 18,  20 => 11,  480 => 162,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 147,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 136,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 90,  285 => 89,  283 => 102,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 88,  247 => 78,  241 => 84,  229 => 73,  220 => 80,  214 => 69,  177 => 61,  169 => 57,  140 => 55,  132 => 58,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 100,  254 => 92,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 71,  221 => 75,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  119 => 28,  102 => 38,  71 => 19,  67 => 27,  63 => 50,  59 => 23,  38 => 17,  94 => 28,  89 => 40,  85 => 34,  75 => 19,  68 => 31,  56 => 24,  87 => 33,  21 => 12,  26 => 14,  93 => 34,  88 => 60,  78 => 24,  46 => 35,  27 => 13,  44 => 11,  31 => 15,  28 => 14,  201 => 72,  196 => 90,  183 => 82,  171 => 63,  166 => 100,  163 => 62,  158 => 67,  156 => 68,  151 => 63,  142 => 61,  138 => 36,  136 => 56,  121 => 53,  117 => 51,  105 => 27,  91 => 27,  62 => 29,  49 => 21,  24 => 13,  25 => 12,  19 => 11,  79 => 18,  72 => 56,  69 => 50,  47 => 19,  40 => 8,  37 => 9,  22 => 12,  246 => 86,  157 => 56,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 40,  115 => 50,  111 => 37,  108 => 48,  101 => 73,  98 => 44,  96 => 31,  83 => 25,  74 => 34,  66 => 15,  55 => 22,  52 => 17,  50 => 20,  43 => 19,  41 => 9,  35 => 17,  32 => 16,  29 => 15,  209 => 73,  203 => 71,  199 => 67,  193 => 73,  189 => 64,  187 => 84,  182 => 80,  176 => 77,  173 => 65,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 90,  144 => 62,  141 => 48,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 41,  112 => 49,  109 => 40,  106 => 36,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 19,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 8,  30 => 15,);
    }
}
