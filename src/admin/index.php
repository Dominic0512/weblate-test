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

  $local_path =  '/app/locale/admin';
  setlocale(LC_ALL, $locale);
  bindtextdomain('admin', $local_path);
  textdomain('admin');
?>

<div>
  <h3>Admin</h3>
  <?=_('This is admin section')?>
  <?=_('Admin test 1')?>
</div>