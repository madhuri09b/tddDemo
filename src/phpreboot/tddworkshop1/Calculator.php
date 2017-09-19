<?php
namespace Phpreboot\Tddworkshop1;

class Calculator
{
	//when no parameter
	/* public function add(){
		return 0;
	} */ 
	
	//when single parameter
	/* public function add($numbers = '')
    {
        if (empty($numbers)) {
            return 0;
        }

        return intval($numbers);
    } */
	
	//when multiple parameters
	public function add($numbers = '')
    {
        if (empty($numbers)) {
            return 0;
        }
		
		 if (!is_string($numbers)) {
            throw new \InvalidArgumentException('Parameters must be a string');
        }
		 $all_nums = explode(',', $numbers);
		
		if (array_filter($all_nums, 'is_numeric') !== $all_nums) {
            throw new \InvalidArgumentException('Parameters string must contain numbers');
        }
 
       return array_sum($all_nums); 
    } 
	
}