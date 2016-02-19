<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __dIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider, array(
        "twig.path"=>__DIR__."/../views/"
    ));

    $app->get('/', function() use ($app)
    {
        return $app['twig']->render("form.html.twig");
    });

    $app->get('/match', function() use ($app)
    {
        $new_RepeatCounter = new RepeatCounter;
        $phrase_input = $_GET["phrase"];
        $word_input = $_GET["word"];
        $counter = $new_RepeatCounter->countRepeats($phrase_input, $word_input);
        return $app["twig"]->render("result.html.twig", array("times"=>$counter, "word"=>$word_input, "phrase"=>$phrase_input));
    });

    return $app;
?>
