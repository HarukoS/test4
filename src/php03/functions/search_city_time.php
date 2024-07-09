<?php

/*フォームで選んだ'city'をresult.phpでGETし、result.phpで'city'を変数$cityに代入し、searchCityTime関数の変数に代入*/
function searchCityTime($city_name)
{
  require('config/cities.php');

  /*ここの$citiesはcities.php内で定義した$cities変数を$cityに置き換え*/
  foreach ($cities as $city) {
    /*もし$cityつまりcities.php内の$citiesの配列内の'name'がsearchCityTime関数の変数($city_name)と一致する場合*/
    if ($city['name'] === $city_name) {
    /*new DateTimeクラスでcities.php内の$city（つまり$cities）の'time_zone'を使って現在の時刻を取得する*/
      $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
      /*時刻の表示フォーマットを指定する*/
      $time = $date_time->format('H:i');
      /*もし$city($cities)のnameがsearchCityTime関数の変数と一致する場合、新たに'time'要素が作られ、その中身が$time変数。これをresult.phpに渡す*/
      $city['time'] = $time;

      return $city;
    }
  }
}