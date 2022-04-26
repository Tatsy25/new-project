<pre>
<?php
// 1
$daysBeforeExam = rand(0, 9);
$daysToPrepareForExam = rand(0, 9);

// 2
$days = $daysToPrepareForExam > $daysBeforeExam ? 'Мне крышка' : 'Главное — не расслабляться';
var_dump($days);

// 3
$days1 = $daysToPrepareForExam < $daysBeforeExam ? 'Ууу, ещё успею в дотку поиграть' : 'Успею или не успею';
var_dump($days1);

// 4
$days2 = $daysToPrepareForExam = $daysBeforeExam ? 'Впритирочку' : 'Либо все плохо, либо очень плохо';
var_dump($days2);

?>
</pre>