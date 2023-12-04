<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_e439e4a7b8f211bdb80d46403e5cca570c734e23cddb9c2564c6c58fd43c1f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'form_row_class' => array($this, 'block_form_row_class'),
                'text_with_unit_widget' => array($this, 'block_text_with_unit_widget'),
                'ip_address_text_widget' => array($this, 'block_ip_address_text_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        $this->displayBlock('form_start', $context, $blocks);
        // line 33
        $this->displayBlock('form_label', $context, $blocks);
        // line 44
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 50
        $this->displayBlock('form_row', $context, $blocks);
        // line 62
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 66
        $this->displayBlock('radio_row', $context, $blocks);
        // line 70
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 82
        $this->displayBlock('submit_row', $context, $blocks);
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 97
        $this->displayBlock('form_row_class', $context, $blocks);
        // line 101
        $this->displayBlock('text_with_unit_widget', $context, $blocks);
        // line 112
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 121
        $this->displayBlock('switch_widget', $context, $blocks);
    }

    // line 26
    public function block_form_start($context, array $blocks = array())
    {
        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 28
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 33
    public function block_form_label($context, array $blocks = array())
    {
        // line 34
        ob_start();
        // line 35
        if ((($context["label"] ?? null) === false)) {
            // line 36
            echo "            <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 38
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 39
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_form_label_class($context, array $blocks = array())
    {
        // line 45
        echo "col-sm-2";
    }

    // line 50
    public function block_form_row($context, array $blocks = array())
    {
        // line 51
        ob_start();
        // line 52
        echo "        <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
            <div class=\"";
        // line 54
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 66
    public function block_radio_row($context, array $blocks = array())
    {
        // line 67
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 70
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        // line 71
        ob_start();
        // line 72
        echo "        <div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">
            <div class=\"";
        // line 73
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 74
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_submit_row($context, array $blocks = array())
    {
        // line 83
        ob_start();
        // line 84
        echo "        <div class=\"form-group\">
            <div class=\"";
        // line 85
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 86
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            </div>
        </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        // line 94
        echo "col-sm-10";
    }

    // line 97
    public function block_form_row_class($context, array $blocks = array())
    {
        // line 98
        echo "form-group";
    }

    // line 101
    public function block_text_with_unit_widget($context, array $blocks = array())
    {
        // line 102
        echo "<div class=\"input-group\">";
        // line 103
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 104
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "unit", array(), "any", true, true)) {
            // line 105
            echo "        <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "unit", array()), "html", null, true);
            echo "</span>
        </div>";
        }
        // line 109
        echo "</div>";
    }

    // line 112
    public function block_ip_address_text_widget($context, array $blocks = array())
    {
        // line 113
        echo "<div class=\"input-group\">";
        // line 114
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 115
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
        <i class=\"material-icons\">add_circle</i>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add my IP", array(), "Admin.Actions"), "html", null, true);
        echo "
    </button>
</div>";
    }

    // line 121
    public function block_switch_widget($context, array $blocks = array())
    {
        // line 122
        echo "<div class=\"input-group\">";
        // line 123
        $this->displayParentBlock("switch_widget", $context, $blocks);
        // line 124
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  264 => 124,  262 => 123,  260 => 122,  257 => 121,  250 => 116,  245 => 115,  243 => 114,  241 => 113,  238 => 112,  234 => 109,  229 => 106,  226 => 105,  224 => 104,  222 => 103,  220 => 102,  217 => 101,  213 => 98,  210 => 97,  206 => 94,  203 => 93,  195 => 87,  192 => 86,  188 => 85,  185 => 84,  183 => 83,  180 => 82,  172 => 76,  170 => 75,  167 => 74,  163 => 73,  156 => 72,  154 => 71,  151 => 70,  147 => 67,  144 => 66,  140 => 63,  137 => 62,  129 => 56,  127 => 55,  124 => 54,  120 => 53,  113 => 52,  111 => 51,  108 => 50,  104 => 45,  101 => 44,  95 => 39,  93 => 38,  88 => 36,  86 => 35,  84 => 34,  81 => 33,  77 => 28,  75 => 27,  72 => 26,  68 => 121,  66 => 112,  64 => 101,  62 => 97,  60 => 93,  58 => 82,  56 => 70,  54 => 66,  52 => 62,  50 => 50,  48 => 44,  46 => 33,  44 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\phoneshop\\src\\PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig");
    }
}
