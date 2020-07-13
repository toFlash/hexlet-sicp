<?php

return [
    'title' => "Мемоизация",
    'description' => [
        '1' =>
        "Мемоизация (memoization) (называемая также табуляризация (tabulation)) — прием, который позволяет процедуре записывать в локальной таблице единожды вычисленные значения. " .
        "Такой прием может сильно повысить производительность программы. " .
        "Мемоизированная процедура поддерживает таблицу, где сохраняются результаты предыдущих вызовов, а в качестве ключей используются аргументы, относительно которых эти результаты были получены. " .
        "Когда от мемоизированной процедуры требуют вычислить значение, сначала она проверят в таблице, нет ли там уже нужного значения, и если да, то она просто возвращает это значение. " .
        "Если нет, то она вычисляет значение обычным способом и заносит его в таблицу. В качестве примера мемоизации, вспомним экспоненциальный процесс вычисления чисел Фибоначчи из раздела 1.2.2:",
        '2' =>
        "Мемоизированная версия той же самой процедуры выглядит так:",
        '3' =>
        "а процедура memoize определяется так:",
        '4' =>
        "Нарисуйте диаграмму окружений, анализирующую вычисление (memo-fib 3). Объясните, почему memo-fib вычисляет n-е число Фибоначчи за число шагов, пропорциональное n. Стала бы схема работать, если бы мы определили memo-fib просто как (memoize fib)?"
    ]
];