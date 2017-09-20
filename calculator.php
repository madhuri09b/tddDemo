<?php

require_once 'vendor/autoload.php';

use Phpreboot\Tddworkshop1\Calculator;

$calculator = new Calculator();

if (!isset($argv[1])) {
    echo 'Operation missing.' . PHP_EOL;
    exit(0);
}

try {
    switch ($argv[1]) {
        case 'add':
            $numbers = isset($argv[2]) ? $argv[2] : '';
            echo $calculator->add($numbers) . PHP_EOL;
            break;
			
		case 'task3':
            $numbers = isset($argv[2]) ? $argv[2] : '';
            $extravar = isset($argv[3]) ? $argv[3] : '';			
            echo $calculator->task3($numbers,$extravar) . PHP_EOL;
            break;
			
		case 'task4':
            $numbers = isset($argv[2]) ? $argv[2] : '';
			 $extravar = isset($argv[3]) ? $argv[3] : '';		
            echo $calculator->task4($numbers,$extravar) . PHP_EOL;
            break;
			
		case 'task5':
            $numbers = isset($argv[2]) ? $argv[2] : '';
            echo $calculator->task5($numbers) . PHP_EOL;
            break;
		
		case 'task6':
            $numbers = isset($argv[2]) ? $argv[2] : '';
            echo $calculator->task6($numbers) . PHP_EOL;      
            break;
		
		case 'task7':
            $numbers = isset($argv[2]) ? $argv[2] : '';
			 $extravar = isset($argv[3]) ? $argv[3] : '';		
            echo $calculator->task7($numbers,$extravar) . PHP_EOL;
            break; 
		
        default:
            echo 'Please check the operator.' . PHP_EOL;
    }
} catch (\InvalidArgumentException $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}