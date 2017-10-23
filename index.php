<?php

include('vendor/autoload.php');

$vue = file_get_contents('component.vue');
$vue = preg_replace('/\s+/', ' ', $vue);

preg_match('#<mustache>(.*?)</mustache>#', $vue, $matches);

$m = new Mustache_Engine;
$rendered = $m->render($matches[1], array('hello' => 'PHP!')); // "Hello World!"

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>HELLO</title>
  </head>
  <body>
    <noscript>
      You need to enable JavaScript to run this app.
    </noscript>
    <div id="app">
      <component>
        <?php echo $rendered; ?>
      </component>
    </div>
    <script type="text/javascript" src="/dist/manifest.1a6b806a.js"></script><script type="text/javascript" src="/dist/vendor.a6d27dcb.js"></script><script type="text/javascript" src="/dist/client.cdf25236.js"></script>
  </body>
</html>
