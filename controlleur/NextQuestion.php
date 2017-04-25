<?php

$index = ListQuestion.getIndexActuel();

$LaQuestion = ListQuestion.GetUneQuestion($index + 1);

$Question = ListQuestion.GetUneQuestion(1);


//returne question1
header("Location : ..\vue\question.php?Question=$LaQuestion");
exit();

?>