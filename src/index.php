<?
  $lang_code = $_GET['lang'];
  $curdir = dirname($_SERVER['REQUEST_URI']) . '/';
  $baseUri = str_replace($curdir, '/', $curdir);
  switch ($baseUri) {
    case '/':
    case '/main' :
      require __DIR__ . '/main/index.php';
      break;
    case '/site' :
      require __DIR__ . '/site/index.php';
      break;
    case '/admin' :
      require __DIR__ . '/admin/index.php';
      break;
    default:
      http_response_code(404);
      require __DIR__ . '/404.php';
      break;
  }
?>