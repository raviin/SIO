<?php

/* ::base.html.twig */
class __TwigTemplate_af4f11aec6b5d4c9b7ccf19f8ea54af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 260,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 207,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  725 => 188,  722 => 187,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  658 => 163,  656 => 162,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 149,  624 => 148,  621 => 147,  613 => 143,  611 => 142,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 126,  567 => 121,  559 => 120,  554 => 119,  548 => 117,  545 => 116,  543 => 115,  540 => 114,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 99,  511 => 98,  502 => 92,  498 => 91,  494 => 90,  490 => 89,  485 => 88,  479 => 86,  476 => 85,  474 => 84,  471 => 83,  455 => 79,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 61,  405 => 60,  400 => 59,  397 => 58,  394 => 57,  388 => 55,  386 => 54,  378 => 53,  374 => 51,  366 => 49,  361 => 48,  357 => 47,  352 => 46,  349 => 45,  347 => 44,  344 => 43,  335 => 39,  319 => 35,  300 => 32,  295 => 31,  292 => 30,  287 => 29,  285 => 28,  272 => 23,  270 => 22,  267 => 21,  259 => 17,  256 => 16,  253 => 15,  245 => 12,  237 => 7,  233 => 6,  226 => 4,  223 => 3,  219 => 288,  216 => 287,  206 => 271,  198 => 259,  191 => 242,  173 => 220,  167 => 217,  160 => 205,  155 => 196,  149 => 193,  147 => 187,  144 => 186,  110 => 39,  21 => 1,  332 => 137,  329 => 136,  323 => 37,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 33,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 27,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 269,  201 => 260,  194 => 76,  183 => 236,  180 => 235,  175 => 225,  118 => 36,  114 => 146,  150 => 43,  170 => 219,  157 => 204,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 14,  248 => 13,  235 => 107,  228 => 5,  221 => 99,  214 => 281,  207 => 83,  164 => 59,  151 => 53,  143 => 49,  140 => 52,  119 => 153,  105 => 37,  36 => 6,  68 => 20,  56 => 14,  65 => 17,  61 => 16,  154 => 45,  130 => 48,  112 => 141,  106 => 35,  100 => 27,  85 => 28,  83 => 26,  66 => 21,  101 => 29,  76 => 25,  45 => 12,  209 => 272,  205 => 82,  196 => 248,  192 => 78,  189 => 73,  178 => 226,  176 => 70,  165 => 212,  161 => 58,  152 => 195,  148 => 46,  145 => 49,  141 => 55,  134 => 174,  132 => 168,  127 => 161,  123 => 38,  109 => 140,  93 => 28,  90 => 31,  54 => 11,  133 => 49,  124 => 160,  111 => 33,  80 => 26,  60 => 14,  52 => 13,  97 => 114,  95 => 30,  88 => 32,  78 => 21,  71 => 20,  25 => 5,  72 => 43,  64 => 26,  53 => 13,  34 => 5,  92 => 98,  86 => 30,  79 => 76,  19 => 1,  42 => 11,  40 => 10,  29 => 5,  26 => 3,  224 => 91,  215 => 90,  211 => 280,  204 => 84,  200 => 87,  195 => 80,  193 => 247,  190 => 78,  188 => 241,  185 => 239,  179 => 72,  177 => 67,  171 => 67,  162 => 211,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 182,  137 => 175,  126 => 39,  120 => 37,  117 => 147,  103 => 28,  74 => 70,  47 => 15,  32 => 5,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 42,  63 => 17,  58 => 26,  49 => 2,  43 => 8,  37 => 7,  20 => 2,  139 => 181,  131 => 38,  128 => 43,  125 => 36,  121 => 40,  115 => 39,  107 => 134,  99 => 125,  96 => 28,  91 => 27,  82 => 77,  77 => 71,  75 => 21,  57 => 6,  50 => 13,  46 => 11,  44 => 10,  39 => 7,  33 => 7,  30 => 7,  27 => 5,  135 => 41,  129 => 167,  122 => 154,  116 => 36,  113 => 40,  108 => 38,  104 => 133,  102 => 126,  94 => 113,  89 => 97,  87 => 83,  84 => 82,  81 => 24,  73 => 23,  70 => 18,  67 => 11,  62 => 10,  59 => 20,  55 => 14,  51 => 5,  48 => 12,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
