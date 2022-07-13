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

  $locale_path =  '/app/locale/site';
  setlocale(LC_ALL, $locale);
  bindtextdomain('main', $locale_path);
  textdomain('main');
?>

<html>
  <head></head>
  <body class="main-container">
    <h1><?=_('This is site Weblate demo test')?></h1>
    <h2><?=_('Current language code is') . ' [' . $lang_code . ']'?></h2>
    <hr/>
    <div>
      <h3>Site</h3>
      <?=_('This is site section')?>
      <?=_('Site parallel test 2')?>
    </div>
  </body>
</html>

<style>
  hr {
    border: 0;
    clear:both;
    display:block;
    width: 96%;               
    background-color: black;
    height: 1px;
  }
  .main-container {
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
