<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_675e85ec7173b0623306ad0bd4ca36c20f45cdb007ffbcad1c37085bddb55f46 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  66 => 25,  62 => 24,  50 => 15,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  79 => 29,  69 => 6,  64 => 5,  55 => 17,  49 => 14,  46 => 14,  35 => 7,  29 => 5,  23 => 1,  227 => 107,  219 => 102,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  203 => 93,  199 => 69,  186 => 59,  178 => 54,  174 => 52,  166 => 47,  162 => 46,  157 => 43,  148 => 40,  145 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  128 => 109,  126 => 99,  120 => 95,  118 => 93,  93 => 70,  91 => 35,  77 => 24,  72 => 22,  60 => 12,  51 => 9,  47 => 8,  44 => 12,  41 => 6,  36 => 4,  33 => 6,  109 => 30,  104 => 27,  90 => 26,  86 => 24,  84 => 23,  74 => 12,  70 => 26,  65 => 15,  61 => 14,  57 => 18,  40 => 11,  31 => 4,  28 => 3,);
    }
}
