<?
  function _i($key, $code) {
    switch ($code) {
      case 'en':
      case 'ko_KR':
      case 'zh_TW':
        return $key . $code;
    }
  }

  echo _i('hello world!', 'zh_TW');
  echo _i('how are you?', 'en');
  echo _i('test 8', 'en');
?>