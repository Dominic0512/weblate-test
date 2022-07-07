<?
  $lang_code = $_GET['lang'];

  function _i($key, $code) {
    switch ($code) {
      case 'en':
      case 'ko_KR':
      case 'zh_TW':
        return $key . $code;
    }
  } 
  
  echo 'Current Lang Code is: ' . $lang_code . '</br>';
  echo _i('hello world', $lang_code) . '</br>';
  echo _i('how are you', $lang_code) . '</br>';
  echo _i('test 8', $lang_code) . '</br>';
  echo _i('demo 3', $lang_code) . '</br>';
?>