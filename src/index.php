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
  echo $local_path . '</br>';

  setlocale(LC_ALL, $locale);
  bindtextdomain('main', $local_path);
  textdomain('main');

  // echo phpInfo();
  
  echo 'Current Lang Code is: ' . $lang_code . '</br>';
  echo _('hello world') . '</br>';
  echo _('how are you') . '</br>';
  echo _('test 8') . '</br>';
  echo _('demo 3') . '</br>';
?>