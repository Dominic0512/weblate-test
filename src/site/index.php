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

  $local_path =  '/app/locale/site';
  setlocale(LC_ALL, $locale);
  bindtextdomain('site', $local_path);
  textdomain('site');
?>

<div>
  <h3>Site</h3>
  <?=_('This is site section')?>
  <?=_('Site test 3')?>
</div>