<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("form.html.twig");
    });

    $app->get("/view_results", function() use($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $my_results = $my_PingPongGenerator->generatePingPongArray($_GET["number"]);
        return $app["twig"]->render("results.html.twig", array("result" => $my_results));
    });

    return $app;
?>
