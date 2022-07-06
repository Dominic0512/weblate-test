<?
  function _i($key, $code) {
    switch ($code) {
      case 'en':
      case 'ko_KR':
      case 'zh_TW':
        return $key . $code;
    }
  }

  echo _i('hello world', 'zhTW');
?>