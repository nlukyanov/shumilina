<?php

/* @core/form.twig */
class __TwigTemplate_182f79cfaa1fc8b3ae53cdf6d49919ef5a69381dae66a64af419dbfdd3ed80f6 extends Twig_Template
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
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 20
        echo "
";
        // line 51
        echo "
";
        // line 74
        echo "
";
        // line 86
        echo "
";
        // line 92
        echo "
";
        // line 98
        echo "
";
        // line 108
        echo "
";
        // line 114
        echo "
";
        // line 120
        echo "
";
        // line 126
        echo "
";
        // line 132
        echo "
";
        // line 138
        echo "
";
        // line 148
        echo "
";
        // line 156
        echo "
";
        // line 164
        echo "
";
        // line 170
        echo "
";
        // line 174
        echo "
";
    }

    // line 1
    public function getopen($__method__ = null, $__action__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "action" => $__action__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <form method=\"";
            if (isset($context["method"])) { $_method_ = $context["method"]; } else { $_method_ = null; }
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $_method_), "html", null, true);
            echo "\" ";
            if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
            if ( !twig_test_empty($_action_)) {
                echo "action=\"";
                if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                echo twig_escape_filter($this->env, $_action_, "html", null, true);
                echo "\"";
            }
            // line 3
            echo "    ";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                echo "=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getclose()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    </form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getshow_tooltip($__id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            if (isset($context["tooltips"])) { $_tooltips_ = $context["tooltips"]; } else { $_tooltips_ = null; }
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            $context["title"] = $this->getAttribute($_tooltips_, $_id_, array(), "array");
            // line 13
            echo "
    ";
            // line 14
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            if ( !twig_test_empty($_title_)) {
                // line 15
                echo "        <i class=\"fa fa-";
                if (isset($context["tooltips_icon"])) { $_tooltips_icon_ = $context["tooltips_icon"]; } else { $_tooltips_icon_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_tooltips_icon_, "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_tooltips_icon_, "icon", array()), "question")) : ("question")), "html", null, true);
                echo " supsystic-tooltip\"
           title=\"";
                // line 16
                if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                echo $_title_;
                echo "\"
           style=\"";
                // line 17
                if (isset($context["tooltips_icon"])) { $_tooltips_icon_ = $context["tooltips_icon"]; } else { $_tooltips_icon_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_tooltips_icon_, "style", array()));
                foreach ($context['_seq'] as $context["property"] => $context["value"]) {
                    if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                    echo twig_escape_filter($this->env, trim($_property_), "html", null, true);
                    echo ":";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, trim($_value_), "html", null, true);
                    echo ";";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['property'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getrow($__label__ = null, $__element__ = null, $__id__ = null, $__titleRow__ = null, $__row_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "element" => $__element__,
            "id" => $__id__,
            "titleRow" => $__titleRow__,
            "row_id" => $__row_id__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    ";
            $context["form"] = $this;
            // line 23
            echo "    
    ";
            // line 24
            if (isset($context["row_id"])) { $_row_id_ = $context["row_id"]; } else { $_row_id_ = null; }
            if ( !twig_test_empty($_row_id_)) {
                // line 25
                echo "    <tr id=\"";
                if (isset($context["row_id"])) { $_row_id_ = $context["row_id"]; } else { $_row_id_ = null; }
                echo twig_escape_filter($this->env, $_row_id_, "html", null, true);
                echo "\">
    ";
            } else {
                // line 27
                echo "    <tr>
    ";
            }
            // line 29
            echo "        <th scope=\"row\">
            ";
            // line 30
            if (isset($context["titleRow"])) { $_titleRow_ = $context["titleRow"]; } else { $_titleRow_ = null; }
            if ( !twig_test_empty($_titleRow_)) {
                // line 31
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 32
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "
                    ";
                // line 33
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo $_form_->getshow_tooltip($_id_);
                echo "
                </h3>
            ";
            } else {
                // line 36
                echo "                <label ";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if ( !twig_test_empty($_id_)) {
                    echo "id=\"label-";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "\" for=\"";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 37
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "
                    ";
                // line 38
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo $_form_->getshow_tooltip($_id_);
                echo "
                </label>
            ";
            }
            // line 41
            echo "        </th>
        ";
            // line 42
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if ( !twig_test_empty($_id_)) {
                // line 43
                echo "        <td id=\"";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\">
        ";
            } else {
                // line 45
                echo "        <td>
        ";
            }
            // line 47
            echo "            ";
            if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
            echo $_element_;
            echo "
        </td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getrowpro($__label__ = null, $__link__ = null, $__id__ = null, $__element__ = null, $__titleRow__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "link" => $__link__,
            "id" => $__id__,
            "element" => $__element__,
            "titleRow" => $__titleRow__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["form"] = $this;
            // line 54
            echo "    
    <tr>
        <th scope=\"row\">
            ";
            // line 57
            if (isset($context["titleRow"])) { $_titleRow_ = $context["titleRow"]; } else { $_titleRow_ = null; }
            if ( !twig_test_empty($_titleRow_)) {
                // line 58
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 59
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "
                    ";
                // line 60
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo $_form_->getshow_tooltip($_id_);
                echo "
                </h3>
            ";
            } else {
                // line 63
                echo "                <label ";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if ( !twig_test_empty($_id_)) {
                    echo "id=\"label-";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "\" for=\"";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 64
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "
                    ";
                // line 65
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo $_form_->getshow_tooltip($_id_);
                echo "
                </label>
            ";
            }
            // line 68
            echo "            <br>
            <label><a href=\"";
            // line 69
            if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array($_link_)), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
        </th>
        <td>";
            // line 71
            if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
            echo $_element_;
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function getinput($__type__ = "text", $__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "    <input type=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\" name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"
    ";
            // line 77
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 78
                echo "        ";
                if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                if (twig_test_iterable($_val_)) {
                    // line 79
                    echo "            ";
                    if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                    echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                    echo "=\"";
                    if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($_val_);
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                        echo twig_escape_filter($this->env, $_attr_, "html", null, true);
                        echo ":";
                        if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                        echo twig_escape_filter($this->env, $_param_, "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
        ";
                } else {
                    // line 81
                    echo "            ";
                    if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                    echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                    echo "=\"";
                    if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                    echo twig_escape_filter($this->env, $_val_, "html", null, true);
                    echo "\"
        ";
                }
                // line 83
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function gettext($__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    ";
            $context["form"] = $this;
            // line 89
            echo "
    ";
            // line 90
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $_form_->getinput("text", $_name_, $_value_, $_attributes_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function getpassword($__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 94
            echo "    ";
            $context["form"] = $this;
            // line 95
            echo "
    ";
            // line 96
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $_form_->getinput("password", $_name_, $_value_, $_attributes_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function getbutton($__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    ";
            $context["form"] = $this;
            // line 101
            echo "
    ";
            // line 102
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            if ($this->getAttribute($_attributes_, "class", array(), "any", true, true)) {
                // line 103
                echo "        ";
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                $context["attributes"] = twig_array_merge($_attributes_, array("class" => ($this->getAttribute($_attributes_, "class", array()) . " button button-primary")));
                // line 104
                echo "    ";
            }
            // line 105
            echo "
    ";
            // line 106
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $_form_->getinput("button", $_name_, $_value_, $_attributes_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getcheckbox($__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    ";
            $context["form"] = $this;
            // line 111
            echo "
    ";
            // line 112
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $_form_->getinput("checkbox", $_name_, $_value_, $_attributes_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 115
    public function getfile($__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 116
            echo "    ";
            $context["form"] = $this;
            // line 117
            echo "
    ";
            // line 118
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $_form_->getinput("file", $_name_, $_value_, $_attributes_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function gethidden($__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    ";
            $context["form"] = $this;
            // line 123
            echo "
    ";
            // line 124
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $_form_->getinput("hidden", $_name_, $_value_, $_attributes_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 127
    public function getradio($__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "    ";
            $context["form"] = $this;
            // line 129
            echo "
    ";
            // line 130
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $_form_->getinput("radio", $_name_, $_value_, $_attributes_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getcolor($__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["form"] = $this;
            // line 135
            echo "
    ";
            // line 136
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $_form_->getinput("color", $_name_, $_value_, $_attributes_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 139
    public function getsubmit($__name__ = null, $__value__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 140
            echo "    ";
            $context["form"] = $this;
            // line 141
            echo "
    ";
            // line 142
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            if ($this->getAttribute($_attributes_, "class", array(), "any", true, true)) {
                // line 143
                echo "        ";
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                $context["attributes"] = twig_array_merge($_attributes_, array("class" => ($this->getAttribute($_attributes_, "class", array()) . " button button-primary")));
                // line 144
                echo "    ";
            }
            // line 145
            echo "
    ";
            // line 146
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $_form_->getinput("submit", $_name_, $_value_, $_attributes_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 149
    public function getselect($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "    <select name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" ";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                echo "=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 151
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 152
                echo "        <option value=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\" name = \"";
                if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $_text_), "html", null, true);
                echo "\" ";
                if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($_selected_ == $_value_)) {
                    echo "selected";
                }
                echo ">";
                if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
                echo twig_escape_filter($this->env, $_text_, "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 157
    public function getselectv($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 158
            echo "    <select name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" ";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                echo "=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 159
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 160
                echo "        <option value=\"";
                if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
                echo twig_escape_filter($this->env, $_text_, "html", null, true);
                echo "\" name = \"";
                if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $_text_), "html", null, true);
                echo "\" ";
                if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
                if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
                if (($_selected_ == $_text_)) {
                    echo "selected";
                }
                echo ">";
                if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
                echo twig_escape_filter($this->env, $_text_, "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getspan($__name__ = null, $__text__ = null, $__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "text" => $__text__,
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    <span name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" ";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
                echo "=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 167
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $_text_), "html", null, true);
            echo "
    </span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function getselected($__actual__ = null, $__expected__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "actual" => $__actual__,
            "expected" => $__expected__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "    ";
            if (isset($context["actual"])) { $_actual_ = $context["actual"]; } else { $_actual_ = null; }
            if (isset($context["expected"])) { $_expected_ = $context["expected"]; } else { $_expected_ = null; }
            if (($_actual_ == $_expected_)) {
                echo "selected=\"selected\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getlabel($__label__ = null, $__for__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 176
            echo "    <label for=\"";
            if (isset($context["for"])) { $_for_ = $context["for"]; } else { $_for_ = null; }
            echo twig_escape_filter($this->env, $_for_, "html", null, true);
            echo "\">";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo "</label>
";
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
        return "@core/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1193 => 176,  1180 => 175,  1160 => 172,  1147 => 171,  1128 => 167,  1107 => 166,  1093 => 165,  1077 => 162,  1055 => 160,  1050 => 159,  1029 => 158,  1014 => 157,  998 => 154,  976 => 152,  971 => 151,  950 => 150,  935 => 149,  914 => 146,  911 => 145,  908 => 144,  904 => 143,  901 => 142,  898 => 141,  895 => 140,  881 => 139,  860 => 136,  857 => 135,  854 => 134,  840 => 133,  819 => 130,  816 => 129,  813 => 128,  799 => 127,  778 => 124,  775 => 123,  772 => 122,  758 => 121,  737 => 118,  734 => 117,  731 => 116,  717 => 115,  696 => 112,  693 => 111,  690 => 110,  676 => 109,  655 => 106,  652 => 105,  649 => 104,  645 => 103,  642 => 102,  639 => 101,  636 => 100,  622 => 99,  601 => 96,  598 => 95,  595 => 94,  581 => 93,  560 => 90,  557 => 89,  554 => 88,  540 => 87,  524 => 84,  518 => 83,  508 => 81,  486 => 79,  482 => 78,  477 => 77,  465 => 76,  450 => 75,  431 => 71,  425 => 69,  422 => 68,  414 => 65,  409 => 64,  395 => 63,  387 => 60,  382 => 59,  379 => 58,  376 => 57,  371 => 54,  368 => 53,  352 => 52,  331 => 47,  327 => 45,  320 => 43,  317 => 42,  314 => 41,  306 => 38,  301 => 37,  287 => 36,  279 => 33,  274 => 32,  271 => 31,  268 => 30,  265 => 29,  261 => 27,  254 => 25,  251 => 24,  248 => 23,  245 => 22,  229 => 21,  198 => 17,  193 => 16,  187 => 15,  184 => 14,  181 => 13,  176 => 12,  174 => 11,  162 => 10,  146 => 7,  135 => 6,  104 => 3,  92 => 2,  78 => 1,  73 => 174,  70 => 170,  67 => 164,  64 => 156,  61 => 148,  58 => 138,  55 => 132,  52 => 126,  49 => 120,  46 => 114,  43 => 108,  40 => 98,  37 => 92,  34 => 86,  31 => 74,  28 => 51,  25 => 20,  22 => 9,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@core/form.twig", "Z:\\home\\shumilina.local\\www\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Core\\views\\form.twig");
    }
}
