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

  $local_path =  '/app/locale/main';
  setlocale(LC_ALL, $locale);
  bindtextdomain('main', $local_path);
  textdomain('main');
?>

<div>
  <h3>Main</h3>
  <?=_('This is main section')?>
  <?=_('Main test 4')?>
</div>