<?
  $lang_code = $_GET['lang'];

  $locale = 'en_US.UTF-8';

  switch($lang_code) {
    case 'kr':
      $locale = 'ko_KR.UTF-8';
      break;
    case 'tw':
      $locale = 'zh_TW.UTF-8';
      break;
    case 'en':
    default: 
      break;
  }

  $local_path =  '/app/locale';
  setlocale(LC_ALL, $locale);
  bindtextdomain('main', $local_path);
  textdomain('main');
?>

<html>
  <head></head>
  <body class="main">
    <h1><?=_('This is weblate demo test')?></h1>
    <h3><?=_('Current language code is') . ' [' . $lang_code . ']'?></h3>
    <hr/>
    <p><?=_('Hi Lisa, Ashley!') ?></p>
    <p><?=_('Let get start it.') ?></p>
    <p><?=_('aloha') ?></p>
    <p><?=_('test 6') ?></p>
  </body>
</html>

<style>
  .main {
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: auto;
    text-align: center;
  }
</style>