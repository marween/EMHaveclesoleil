<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_f0cb40c744f8422a36d2fc57cf23311c910edcf15dba6f2fd9410319649ac571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        echo " cms-container";
        if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method"))) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class"), "html", null, true);
        }
    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        echo "container";
    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre");
        }
        // line 23
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post");
        }
    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  388 => 117,  377 => 115,  371 => 113,  358 => 106,  347 => 102,  339 => 100,  329 => 95,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  289 => 81,  233 => 62,  223 => 58,  90 => 18,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  263 => 71,  248 => 116,  236 => 63,  216 => 100,  70 => 33,  344 => 97,  340 => 95,  338 => 94,  295 => 88,  292 => 135,  282 => 79,  259 => 70,  249 => 67,  190 => 50,  178 => 45,  118 => 28,  170 => 79,  129 => 24,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 150,  378 => 144,  373 => 142,  369 => 141,  364 => 139,  359 => 138,  352 => 135,  349 => 103,  342 => 101,  336 => 99,  332 => 97,  328 => 124,  315 => 90,  301 => 111,  296 => 109,  290 => 106,  280 => 131,  277 => 78,  274 => 77,  261 => 91,  244 => 85,  239 => 83,  234 => 80,  225 => 77,  200 => 55,  198 => 69,  195 => 68,  192 => 88,  184 => 47,  180 => 62,  155 => 53,  146 => 34,  134 => 59,  126 => 42,  124 => 23,  76 => 13,  194 => 87,  181 => 47,  175 => 43,  161 => 38,  148 => 64,  137 => 27,  84 => 16,  65 => 5,  318 => 145,  316 => 121,  299 => 112,  293 => 109,  288 => 85,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  265 => 126,  260 => 124,  256 => 121,  250 => 67,  237 => 86,  228 => 59,  222 => 81,  215 => 54,  210 => 75,  191 => 50,  185 => 86,  174 => 60,  165 => 77,  160 => 76,  153 => 72,  150 => 65,  113 => 41,  110 => 25,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 179,  585 => 177,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 326,  542 => 172,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 140,  361 => 107,  346 => 196,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 174,  291 => 82,  272 => 76,  267 => 94,  257 => 149,  253 => 95,  242 => 113,  232 => 84,  213 => 126,  197 => 54,  186 => 82,  152 => 38,  127 => 32,  114 => 71,  104 => 23,  97 => 63,  77 => 27,  53 => 80,  34 => 53,  23 => 18,  100 => 36,  81 => 15,  58 => 23,  20 => 11,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 117,  305 => 115,  298 => 173,  294 => 90,  285 => 84,  283 => 102,  278 => 86,  268 => 127,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 84,  229 => 73,  220 => 56,  214 => 99,  177 => 61,  169 => 57,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 25,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 106,  227 => 60,  224 => 103,  221 => 75,  219 => 101,  217 => 79,  208 => 57,  204 => 73,  179 => 66,  159 => 70,  143 => 29,  135 => 35,  119 => 28,  102 => 17,  71 => 19,  67 => 185,  63 => 4,  59 => 165,  38 => 17,  94 => 28,  89 => 40,  85 => 34,  75 => 39,  68 => 6,  56 => 23,  87 => 17,  21 => 11,  26 => 14,  93 => 34,  88 => 12,  78 => 40,  46 => 21,  27 => 3,  44 => 74,  31 => 15,  28 => 14,  201 => 72,  196 => 52,  183 => 82,  171 => 63,  166 => 100,  163 => 62,  158 => 75,  156 => 36,  151 => 63,  142 => 61,  138 => 61,  136 => 60,  121 => 29,  117 => 51,  105 => 27,  91 => 28,  62 => 166,  49 => 112,  24 => 2,  25 => 12,  19 => 11,  79 => 14,  72 => 199,  69 => 198,  47 => 75,  40 => 44,  37 => 54,  22 => 12,  246 => 86,  157 => 41,  145 => 52,  139 => 31,  131 => 25,  123 => 30,  120 => 56,  115 => 27,  111 => 37,  108 => 48,  101 => 25,  98 => 24,  96 => 31,  83 => 25,  74 => 24,  66 => 25,  55 => 21,  52 => 113,  50 => 78,  43 => 20,  41 => 18,  35 => 16,  32 => 13,  29 => 15,  209 => 96,  203 => 56,  199 => 53,  193 => 51,  189 => 64,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 36,  147 => 69,  144 => 33,  141 => 67,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 41,  112 => 26,  109 => 40,  106 => 36,  103 => 46,  99 => 26,  95 => 20,  92 => 19,  86 => 43,  82 => 10,  80 => 41,  73 => 7,  64 => 184,  60 => 3,  57 => 155,  54 => 154,  51 => 22,  48 => 21,  45 => 66,  42 => 18,  39 => 61,  36 => 17,  33 => 8,  30 => 15,);
    }
}
