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
  <body class="main-container">
    <h1><?=_('This is weblate demo test')?></h1>
    <h2><?=_('Current language code is') . ' [' . $lang_code . ']'?></h2>
    <hr/>

    <div class="section-container">
      <div class="section">
        <? include('./main/index.php') ?>
      </div>
      <div class="section">
        <? include('./admin/index.php') ?>
      </div>
      <div class="section">
        <? include('./site/index.php') ?>
      </div>
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

  .section-container {
    width: 100vw;
    display: flex;
  }

  .section {
    flex-grow: 1;
  }

</style>