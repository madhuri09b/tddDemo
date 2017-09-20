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
	
	public function task3($numbers = '',$extravar = null){
		$all_nums = explode(',',preg_replace('([\\\n]+)', ',', $numbers));
		
		if (array_filter($all_nums, 'is_numeric') !== $all_nums) {
            throw new \InvalidArgumentException('Parameters string must contain numbers');
       }
		if($extravar == "multi"){
			return array_product($all_nums);	   
		}
       return array_sum($all_nums); 
		
	}
	
	public function task4($numbers = '',$extravar = null){
		
		//$pattern = "~\\\\+([\"\'\\x00\\\\])~";
		/* $numbers = str_replace('\\','0',$numbers);
		$numbers = preg_replace('/;+/',',',str_replace('\\','0',$numbers));  */
		$numbers = trim(preg_replace('([\\\\\;]+)',',',$numbers),','); 
		$all_nums = explode(',',$numbers);
		
		if (array_filter($all_nums, 'is_numeric') !== $all_nums) {
            throw new \InvalidArgumentException('Parameters string must contain numbers');
       }
		if($extravar == "multi"){
			return array_product($all_nums);	   
		}
        return array_sum($all_nums);  
	} 
	
	public function task5($numbers = ''){
		
		$data = trim(preg_replace('([\\\\]+)',',',$numbers),',');
		//return $data;
		$all_nums = explode(',',$data);
		if (array_filter($all_nums, 'ctype_digit') !== $all_nums) {
            throw new \InvalidArgumentException('Negative numbers not allowed');
       }
		return array_sum($all_nums); 
		 
	}
	
	public function task6($numbers = ''){
		
		//$data = str_replace('\\','0',$numbers);
		$all_nums = explode(',',str_replace('\\','0',$numbers));
		$str = array();
		foreach ($all_nums as $test) {
		  if($test < 0 ){
			$str[] = $test;  
		  }
	    }
		if(!empty($str)){
			$alldata = implode(",",$str);
			throw new \InvalidArgumentException('Negative numbers ('.$alldata.') not allowed');
		}
		return array_sum($all_nums);		
		//echo ($alldata);
	}
	
	public function task7($numbers = '',$extravar = null){
		if (empty($numbers)) {
            return 0;
       }
		
		if (!is_string($numbers)) {
          throw new \InvalidArgumentException('Parameters must be a string');
       }
	   $all_nums_data = array();
	   $all_nums = explode(',',str_replace('\\','0',$numbers));
	  
		 foreach ($all_nums as $data) {
			if($data < 1000){
				$all_nums_data[] = $data;
			}
		}
		if($extravar == "multi"){
			return array_product($all_nums_data);	   
		}	
       return array_sum($all_nums_data);  
	} 
	
}