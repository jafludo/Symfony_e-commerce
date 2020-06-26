<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Advert/view.html.twig */
class __TwigTemplate_66d116e25a45c1df2d4c609d264b885a38b5d12f39d8a5b701da5a8f0d76e39f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'ocplatform_body' => [$this, 'block_ocplatform_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "layoutbundle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Advert/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Advert/view.html.twig"));

        $this->parent = $this->loadTemplate("layoutbundle.html.twig", "Advert/view.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un produit - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  ";
        // line 11
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11))) {
            // line 12
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12), "url", [], "any", false, false, false, 12), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12), "alt", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
  ";
        }
        // line 14
        echo "
  <h2>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>

  <i>Par ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 17, $this->source); })()), "author", [], "any", false, false, false, 17), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 17, $this->source); })()), "datetime", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21), "html", null, true);
        echo "
  </div>

  <h3>Avis</h3>
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) || array_key_exists("listApplications", $context) ? $context["listApplications"] : (function () { throw new RuntimeError('Variable "listApplications" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 26
            echo "    <i>Par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["application"], "author", [], "any", false, false, false, 26), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["application"], "date", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</i>
    <div class=\"well\">
      ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["application"], "content", [], "any", false, false, false, 28), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
  <h3>Catégories représentées</h3>
  ";
        // line 33
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 33, $this->source); })()), "categories", [], "any", false, false, false, 33), "empty", [], "any", false, false, false, 33)) {
            // line 34
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 36, $this->source); })()), "categories", [], "any", false, false, false, 36));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 37
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37)) {
                    echo ", ";
                }
                // line 38
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </p>
  ";
        }
        // line 41
        echo "  <p>
    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_advert_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier le produit
    </a>
    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_advert_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer le produit
    </a>
  </p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Advert/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 50,  211 => 46,  204 => 42,  201 => 41,  197 => 39,  183 => 38,  177 => 37,  160 => 36,  156 => 34,  154 => 33,  150 => 31,  141 => 28,  133 => 26,  129 => 25,  121 => 21,  113 => 17,  108 => 15,  105 => 14,  97 => 12,  95 => 11,  92 => 10,  82 => 9,  69 => 6,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"layoutbundle.html.twig\" %}

{% block title %}
  Lecture d'un produit - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  {% if advert.image is not null %}
    <img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
  {% endif %}

  <h2>{{ advert.title }}</h2>

  <i>Par {{ advert.author }}, le {{ advert.datetime|date('d/m/Y') }}</i>

  <div class=\"well\">
    {#{{ advert.content }}#}
    {{ advert.content }}
  </div>

  <h3>Avis</h3>
  {% for application in listApplications %}
    <i>Par {{ application.author }}, le {{ application.date|date('d/m/Y') }}</i>
    <div class=\"well\">
      {{ application.content }}
    </div>
  {% endfor %}

  <h3>Catégories représentées</h3>
  {% if not advert.categories.empty %}
    <p>
      Cette annonce est parue dans les catégories suivantes :
      {% for category in advert.categories %}
        {{ category.name }}{% if not loop.last %}, {% endif %}
      {% endfor %}
    </p>
  {% endif %}
  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('oc_advert_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier le produit
    </a>
    <a href=\"{{ path('oc_advert_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer le produit
    </a>
  </p>

{% endblock %}", "Advert/view.html.twig", "C:\\wamp64\\www\\symfonyecommerce\\Symfony_e-commerce\\templates\\Advert\\view.html.twig");
    }
}
