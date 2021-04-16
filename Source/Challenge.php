<?php



class Challenge{



	public function index()
	{
		echo $this->printResult(1,100);

	}



	public function printResult($start, $end)
	{


		$result='<ul>';

		//Iterate over numbers from 1 to 100
		for ($number=$start; $number <=$end ; $number++) { 
			
			
			//For each number we print the value of function checkValueToPrint.
			$result = $result.'<li>'.$this->checkValuetoPrint($number).'</li>';

		}

		$result=$result.'</ul>';

		//$data['result']=$result;

		//$data['candidate']='Luis Barrientos Z. <a href="mailto:lubarzam@gmail.com">lubarzam@gmail.com</a>';
		//$this->load->view('FalabellaChallenge_view', $data);
		
	return $result;
		
	}


	public function checkValueToPrint($number){

		/*This function returns the value to print in each iteration, depending if number is multiple of 3,5 or 3 and 5

		We have to check if number is multiple of dividers 3, 5 or 3 and 5.
		But being multiple of dividers 3 and 5 is the same to be multiple of 3*5.
		So,  We use divisor 15 insted of 3 and 5 */


		//We put all dividers in an array to iterate trough them
		//We have put in inverse order to check first multiples of 15, because it implies is multiple ot 3 and 5 too.
		$dividers=array(15,5,3);

		//Iterate over the dividers in inverse order 
		foreach ($dividers as $divider) {

			//Call function checkMultiple to check if numbes is multiple of divider
			if ($this->checkMultiple($number, $divider)){

				/*If checkMultiple returns TRUE we get the word to print insted of number.
				To get the word to print call function getWord passing the divider value.
				Then break the dividers loop on this value*/

				$number= $this->getWord($divider);
				break;
			}
		}
		

		//This function return the value to print. If number is multiple of some divider, the vaue of $number is modified to the corresponding word. If not $number converse the value iterated on index function.
		return $number;


	}

	public function checkMultiple($number, $divider){
		/*This function check if remainder of divide number by divider is zero.
		Return True or False
		*/


		return $number%$divider==0;

	}


	public function getWord($multiple){

		$result=false;
		//This function get the word we have to print depending  if number is multiple of 3,5 or 3 and 5

		//Put all 3 options in a key-> value array.
		$options= array(

			3 => 'Falabella',
			5 => 'IT',
			15 =>'Integraciones'

		);

	
		try {
        
			//Returns the value on the key corresponding to divider wich number is multiple.
        	$result = $options[$multiple];
    	}
    	
    	finally {
        	return ($result);
    	}
		
		
	

	}
}

