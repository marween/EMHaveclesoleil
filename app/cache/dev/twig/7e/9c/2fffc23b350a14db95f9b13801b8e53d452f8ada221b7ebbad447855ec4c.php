<?php

/* SonataAdminBundle:CRUD:base_list_flat_field.html.twig */
class __TwigTemplate_7e9c2fffc23b350a14db95f9b13801b8e53d452f8ada221b7ebbad447855ec4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</span>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 180,  561 => 178,  549 => 174,  544 => 172,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  487 => 152,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  426 => 102,  419 => 98,  410 => 96,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  357 => 125,  333 => 117,  226 => 67,  205 => 59,  370 => 100,  367 => 131,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  287 => 72,  188 => 21,  12 => 34,  351 => 135,  343 => 91,  327 => 86,  323 => 125,  271 => 66,  262 => 63,  251 => 101,  211 => 81,  270 => 4,  212 => 74,  206 => 71,  202 => 77,  172 => 52,  167 => 48,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 169,  533 => 169,  530 => 165,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 134,  465 => 147,  462 => 146,  451 => 141,  446 => 122,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  388 => 107,  377 => 82,  371 => 113,  358 => 139,  347 => 118,  339 => 100,  329 => 95,  324 => 116,  319 => 124,  311 => 89,  307 => 115,  297 => 84,  289 => 112,  233 => 81,  223 => 66,  90 => 20,  306 => 141,  303 => 140,  300 => 113,  286 => 80,  263 => 71,  248 => 100,  236 => 63,  216 => 25,  70 => 23,  344 => 97,  340 => 90,  338 => 130,  295 => 88,  292 => 135,  282 => 80,  259 => 70,  249 => 70,  190 => 50,  178 => 45,  118 => 46,  170 => 79,  129 => 42,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 150,  378 => 144,  373 => 142,  369 => 136,  364 => 139,  359 => 138,  352 => 121,  349 => 103,  342 => 101,  336 => 99,  332 => 88,  328 => 124,  315 => 83,  301 => 117,  296 => 111,  290 => 106,  280 => 79,  277 => 68,  274 => 77,  261 => 91,  244 => 85,  239 => 97,  234 => 80,  225 => 87,  200 => 55,  198 => 66,  195 => 68,  192 => 55,  184 => 47,  180 => 104,  155 => 53,  146 => 34,  134 => 56,  126 => 55,  124 => 43,  76 => 32,  194 => 87,  181 => 47,  175 => 53,  161 => 38,  148 => 44,  137 => 47,  84 => 28,  65 => 25,  318 => 145,  316 => 121,  299 => 116,  293 => 75,  288 => 108,  284 => 106,  281 => 110,  279 => 104,  275 => 77,  265 => 64,  260 => 62,  256 => 121,  250 => 67,  237 => 86,  228 => 88,  222 => 81,  215 => 54,  210 => 73,  191 => 50,  185 => 20,  174 => 53,  165 => 64,  160 => 48,  153 => 48,  150 => 58,  113 => 39,  110 => 36,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 179,  585 => 177,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 177,  550 => 326,  542 => 172,  538 => 170,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 158,  492 => 154,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 97,  396 => 234,  383 => 224,  366 => 140,  361 => 127,  346 => 92,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 79,  291 => 109,  272 => 76,  267 => 94,  257 => 61,  253 => 1,  242 => 113,  232 => 84,  213 => 82,  197 => 56,  186 => 54,  152 => 63,  127 => 34,  114 => 71,  104 => 42,  97 => 31,  77 => 20,  53 => 16,  34 => 16,  23 => 12,  100 => 36,  81 => 30,  58 => 22,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 122,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 120,  305 => 119,  298 => 173,  294 => 90,  285 => 81,  283 => 70,  278 => 86,  268 => 107,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  107 => 40,  61 => 28,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 64,  235 => 74,  230 => 106,  227 => 60,  224 => 103,  221 => 79,  219 => 84,  217 => 79,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 142,  71 => 32,  67 => 31,  63 => 16,  59 => 23,  38 => 14,  94 => 39,  89 => 37,  85 => 28,  75 => 25,  68 => 26,  56 => 22,  87 => 29,  21 => 11,  26 => 14,  93 => 138,  88 => 74,  78 => 29,  46 => 9,  27 => 14,  44 => 20,  31 => 19,  28 => 22,  201 => 57,  196 => 65,  183 => 82,  171 => 63,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 42,  117 => 50,  105 => 143,  91 => 75,  62 => 24,  49 => 28,  24 => 13,  25 => 12,  19 => 11,  79 => 33,  72 => 19,  69 => 32,  47 => 25,  40 => 15,  37 => 21,  22 => 11,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 45,  123 => 33,  120 => 48,  115 => 40,  111 => 41,  108 => 144,  101 => 37,  98 => 140,  96 => 139,  83 => 64,  74 => 19,  66 => 17,  55 => 24,  52 => 20,  50 => 20,  43 => 16,  41 => 23,  35 => 20,  32 => 3,  29 => 13,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 60,  164 => 54,  162 => 71,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 67,  133 => 51,  130 => 35,  125 => 40,  122 => 44,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 26,  95 => 37,  92 => 28,  86 => 65,  82 => 23,  80 => 41,  73 => 27,  64 => 28,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 17,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
