<?php
date_default_timezone_set('America/Santiago');
$days = [
    'Sunday' => 'Domingo',
    'Monday' => 'Lunes',
    'Tuesday' => 'Martes',
    'Wednesday' => 'Miércoles',
    'Thursday' => 'Jueves',
    'Friday' => 'Viernes',
    'Saturday' => 'Sábado'
];

$months = [
    'Jan' => 'Ene',
    'Feb' => 'Feb',
    'Mar' => 'Mar',
    'Apr' => 'Abr',
    'May' => 'May',
    'Jun' => 'Jun',
    'Jul' => 'Jul',
    'Aug' => 'Ago',
    'Sep' => 'Sep',
    'Oct' => 'Oct',
    'Nov' => 'Nov',
    'Dec' => 'Dic'
];

$hour = date('H');
$greeting;

if ($hour >= 6 && $hour < 12) {
    $greeting = "Buenos dias";
} elseif ($hour >= 12 && $hour < 19) {
    $greeting = "Buenas tardes";
} else {
    $greeting = "Buenas noches";
}

return [
    'app-welcome' => $greeting,
    'app-its' => 'Hoy es',
    'app-day' => $days[date('l')],
    'app-date' => date('d ') . 'de ' . $months[date('M')] . '.',
    'app-input-write' => 'Escriba una nueva tarea. &#x23ce; para crearla'
];