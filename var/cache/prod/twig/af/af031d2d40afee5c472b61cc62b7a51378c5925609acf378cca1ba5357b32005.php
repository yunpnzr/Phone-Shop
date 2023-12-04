<?php

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_82afcb13da036572c901be49eec9da1ca347af9e62174eb5c8e34b3e26f5e449 extends Twig_Template
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
    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? null), 'label', array("label_attr" => array("tooltip" => ($context["tooltip"] ?? null), "tooltip_placement" => (((isset($context["placement"]) || array_key_exists("placement", $context))) ? (_twig_default_filter(($context["placement"] ?? null), "top")) : ("top")))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo twig_escape_filter($this->env, ((((isset($context["variable"]) || array_key_exists("variable", $context)) && (twig_length_filter($this->env, ($context["variable"] ?? null)) > 0))) ? (($context["variable"] ?? null)) : (false)), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, (((isset($context["position"]) || array_key_exists("position", $context))) ? (_twig_default_filter(($context["position"] ?? null), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "</i>
  </span>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getinfotip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">";
            // line 42
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "
  </p>
</div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">";
            // line 50
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "
  </p>
</div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getlabel_with_help($__label__ = null, $__help__ = null, $__class__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "help" => $__help__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "<label class=\"form-control-label";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">";
            // line 57
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
  <span
    class=\"help-box\"
    data-toggle=\"popover\"
    data-content=\"";
            // line 61
            echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            echo "\">
  </span>
</label>
<p class=\"sr-only\">";
            // line 64
            echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            echo "</p>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 68
    public function getsortable_column_header($__title__ = null, $__sortColumnName__ = null, $__orderBy__ = null, $__sortOrder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "sortColumnName" => $__sortColumnName__,
            "orderBy" => $__orderBy__,
            "sortOrder" => $__sortOrder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 69
            list($context["sortOrder"], $context["orderBy"]) =             array((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context))) ? (_twig_default_filter(($context["sortOrder"] ?? null), "")) : ("")), (((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? null), "")) : ("")));
            // line 70
            echo "    <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 72
            echo twig_escape_filter($this->env, ($context["sortColumnName"] ?? null), "html", null, true);
            echo "\"";
            // line 73
            if ((($context["orderBy"] ?? null) == ($context["sortColumnName"] ?? null))) {
                // line 74
                echo "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 75
                echo (((($context["sortOrder"] ?? null) == "desc")) ? ("desc") : ("asc"));
                echo "\"";
            }
            // line 77
            echo "    >
      <span role=\"columnheader\">";
            // line 78
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
            echo "\"></span>
    </div>
  </th>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 85
    public function getimport_file_sample($__label__ = null, $__filename__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "filename" => $__filename__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 86
            echo "    <a class=\"list-group-item list-group-item-action\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_sample_download", array("sampleName" => ($context["filename"] ?? null))), "html", null, true);
            echo "\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
    </a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 87,  299 => 86,  286 => 85,  268 => 79,  264 => 78,  261 => 77,  257 => 75,  254 => 74,  252 => 73,  249 => 72,  245 => 70,  243 => 69,  228 => 68,  212 => 64,  206 => 61,  199 => 57,  195 => 56,  181 => 55,  163 => 50,  160 => 48,  148 => 47,  130 => 42,  127 => 40,  115 => 39,  98 => 35,  91 => 34,  77 => 33,  62 => 30,  50 => 29,  35 => 26,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/macros.html.twig", "C:\\xampp\\htdocs\\phoneshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\macros.html.twig");
    }
}
