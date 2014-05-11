<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_f41773c76c93f56484adba71012f04545d7231ee9ae7faf02092560102259146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  830 => 198,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  801 => 185,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  712 => 150,  697 => 141,  695 => 139,  689 => 137,  675 => 132,  662 => 125,  619 => 113,  614 => 111,  598 => 107,  564 => 99,  555 => 95,  524 => 90,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  464 => 71,  442 => 62,  433 => 60,  405 => 49,  385 => 41,  266 => 366,  245 => 335,  350 => 26,  308 => 13,  810 => 492,  807 => 491,  796 => 183,  792 => 488,  788 => 486,  775 => 485,  746 => 161,  710 => 149,  698 => 471,  682 => 467,  679 => 466,  649 => 122,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  532 => 410,  529 => 92,  389 => 160,  334 => 141,  276 => 395,  255 => 353,  660 => 464,  651 => 337,  644 => 335,  640 => 119,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  606 => 449,  593 => 105,  591 => 309,  588 => 308,  563 => 298,  559 => 296,  552 => 293,  545 => 291,  541 => 290,  527 => 91,  522 => 406,  519 => 278,  515 => 85,  497 => 267,  489 => 262,  479 => 256,  471 => 253,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  418 => 224,  412 => 222,  397 => 213,  353 => 328,  431 => 189,  348 => 140,  207 => 269,  836 => 271,  833 => 199,  828 => 197,  821 => 261,  815 => 258,  811 => 256,  809 => 189,  806 => 254,  800 => 252,  798 => 184,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 170,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 162,  740 => 188,  735 => 187,  730 => 186,  727 => 476,  722 => 184,  719 => 183,  715 => 151,  708 => 267,  706 => 473,  699 => 142,  693 => 232,  690 => 469,  688 => 230,  683 => 135,  677 => 465,  674 => 223,  672 => 345,  664 => 342,  638 => 118,  632 => 211,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 101,  569 => 300,  566 => 182,  548 => 292,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  478 => 74,  475 => 141,  468 => 140,  459 => 69,  450 => 64,  447 => 134,  434 => 130,  417 => 126,  408 => 50,  376 => 205,  363 => 32,  345 => 147,  325 => 129,  317 => 185,  231 => 83,  572 => 193,  561 => 174,  549 => 411,  544 => 172,  521 => 162,  517 => 404,  511 => 160,  508 => 159,  499 => 268,  487 => 152,  477 => 150,  470 => 73,  463 => 248,  460 => 132,  449 => 198,  441 => 196,  426 => 58,  419 => 98,  410 => 221,  395 => 84,  392 => 83,  386 => 159,  382 => 93,  380 => 158,  357 => 123,  333 => 117,  226 => 84,  205 => 108,  370 => 100,  367 => 339,  330 => 87,  320 => 127,  313 => 15,  310 => 81,  302 => 125,  287 => 72,  188 => 90,  12 => 34,  351 => 120,  343 => 146,  327 => 114,  323 => 128,  271 => 374,  262 => 98,  251 => 101,  211 => 81,  270 => 102,  212 => 279,  206 => 71,  202 => 266,  172 => 57,  167 => 48,  713 => 270,  707 => 148,  704 => 210,  702 => 472,  696 => 140,  686 => 468,  681 => 203,  669 => 221,  666 => 126,  655 => 215,  652 => 214,  635 => 117,  618 => 190,  613 => 320,  608 => 202,  605 => 201,  602 => 317,  596 => 106,  590 => 178,  568 => 175,  551 => 174,  547 => 93,  539 => 162,  536 => 161,  533 => 284,  530 => 158,  528 => 167,  525 => 280,  516 => 161,  512 => 84,  510 => 158,  507 => 157,  505 => 270,  502 => 155,  498 => 149,  483 => 258,  473 => 254,  467 => 72,  465 => 249,  462 => 202,  451 => 141,  446 => 197,  428 => 59,  425 => 128,  414 => 52,  400 => 47,  388 => 42,  377 => 37,  371 => 35,  358 => 151,  347 => 191,  339 => 100,  329 => 188,  324 => 113,  319 => 71,  311 => 14,  307 => 128,  297 => 104,  289 => 113,  233 => 304,  223 => 66,  90 => 27,  306 => 286,  303 => 106,  300 => 105,  286 => 112,  263 => 365,  248 => 336,  236 => 35,  216 => 79,  70 => 19,  344 => 24,  340 => 145,  338 => 135,  295 => 178,  292 => 135,  282 => 80,  259 => 103,  249 => 70,  190 => 76,  178 => 59,  118 => 49,  170 => 84,  129 => 148,  406 => 158,  403 => 48,  401 => 172,  394 => 168,  390 => 43,  378 => 157,  373 => 156,  369 => 115,  364 => 139,  359 => 138,  352 => 121,  349 => 103,  342 => 23,  336 => 99,  332 => 20,  328 => 139,  315 => 131,  301 => 117,  296 => 121,  290 => 5,  280 => 79,  277 => 68,  274 => 110,  261 => 50,  244 => 85,  239 => 97,  234 => 80,  225 => 298,  200 => 72,  198 => 66,  195 => 68,  192 => 55,  184 => 233,  180 => 120,  155 => 47,  146 => 181,  134 => 161,  126 => 147,  124 => 132,  76 => 31,  194 => 248,  181 => 232,  175 => 58,  161 => 202,  148 => 97,  137 => 47,  84 => 41,  65 => 17,  318 => 111,  316 => 16,  299 => 8,  293 => 6,  288 => 4,  284 => 106,  281 => 411,  279 => 104,  275 => 105,  265 => 105,  260 => 363,  256 => 96,  250 => 341,  237 => 86,  228 => 88,  222 => 297,  215 => 280,  210 => 270,  191 => 246,  185 => 74,  174 => 217,  165 => 83,  160 => 48,  153 => 77,  150 => 55,  113 => 40,  110 => 38,  694 => 138,  685 => 406,  680 => 134,  678 => 133,  668 => 344,  663 => 199,  658 => 124,  654 => 123,  647 => 336,  643 => 120,  637 => 378,  633 => 377,  627 => 208,  617 => 112,  609 => 319,  599 => 355,  592 => 179,  585 => 307,  581 => 305,  579 => 342,  577 => 303,  571 => 338,  567 => 414,  557 => 96,  550 => 94,  542 => 163,  538 => 170,  531 => 283,  526 => 157,  518 => 307,  514 => 306,  509 => 83,  504 => 158,  492 => 154,  486 => 145,  481 => 143,  466 => 280,  456 => 68,  452 => 272,  445 => 267,  443 => 261,  439 => 195,  429 => 188,  424 => 254,  422 => 226,  420 => 127,  415 => 180,  396 => 159,  383 => 207,  366 => 33,  361 => 152,  346 => 92,  335 => 21,  331 => 140,  326 => 138,  321 => 135,  304 => 181,  291 => 102,  272 => 76,  267 => 101,  257 => 49,  253 => 342,  242 => 113,  232 => 88,  213 => 78,  197 => 249,  186 => 239,  152 => 46,  127 => 35,  114 => 111,  104 => 90,  97 => 41,  77 => 25,  53 => 11,  34 => 4,  23 => 12,  100 => 36,  81 => 30,  58 => 15,  20 => 1,  480 => 75,  474 => 149,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 258,  430 => 103,  427 => 143,  423 => 57,  413 => 134,  409 => 124,  407 => 95,  402 => 215,  398 => 119,  393 => 211,  387 => 164,  384 => 122,  381 => 121,  379 => 119,  374 => 36,  368 => 34,  365 => 197,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 119,  298 => 120,  294 => 90,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 72,  258 => 354,  252 => 68,  247 => 66,  241 => 93,  229 => 87,  220 => 290,  214 => 61,  177 => 54,  169 => 210,  140 => 58,  132 => 57,  128 => 47,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 60,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 79,  219 => 29,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 106,  196 => 92,  183 => 121,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 42,  138 => 93,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 24,  203 => 73,  199 => 265,  193 => 51,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 38,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
