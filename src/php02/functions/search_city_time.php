<?php
// searchCityTime 関数は都市の現在の時刻を表記する関数
function searchCityTime($city_name){
// このファイルに（）内パスを使って読み込む。
require('config/cities.php');
// $citiesを分解して$cityに入れる。
foreach($cities as $city){
  // もし$cityの中のnameとユーザーが選択した名前（$city_name）が一致した時、以下の処理が行われる。
    if ($city['name'] === $city_name) {
      //DateTimeZoneで各国の自国を指定、 引数に、$cityの中の"time_zone"を渡す。
        $date_time = new DateTime('',new DateTimeZone($city["time_zone"]));
        // 日時の表示方法を指定。
        $time = $date_time->format('H:i');
        // 追加で、city配列のtimeに$timeを代入する。
        $city['time'] = $time;
        // 関数の結果を返して、＄cityの処理を最初に戻す。
        return $city;
    }
  }
}
// 日付などの表示指定


