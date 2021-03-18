<?php
$str = 'Как снежинку на ладошке,
        Ты согрей меня немножко,
        И увидишь, как я таю
        И от счастья улетаю!
        В день святого Валентина,
        Так как праздник этот наш.
        Поздравляю и целую
        Много, много, много раз!
        Чтоб ты понял, чтоб ты знал,
        Кто тебе его послал!';


$words = str_word_count($str, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
$words = array_unique($words);

$count = count($words);

$words_count = [];

foreach ($words as $word) {

    preg_match_all('~\b' . $word . '\b~iu', $str, $words_count[$word]);
}


foreach ($words_count as $word => $word_count) {
    $entry_count = count($word_count[0]);
    echo "{$word}: {$entry_count}" . '<br>';
}

echo "Всего слов: {$count}";