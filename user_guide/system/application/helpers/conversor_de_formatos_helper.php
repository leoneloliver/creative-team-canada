<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		//Convertendo de um formato americano para um formato brasileiro
    function data_us_to_br($dateUSA){
    	if ($dateUSA){
				$ano = substr($dateUSA, 0, 4);
				$mes = substr($dateUSA, 5, 2);
				$dia = substr($dateUSA, 8, 2);
				$dateBR = $dia . '/' . $mes . '/' . $ano;
				return $dateBR;
			} 
			else{
				return null;
			}
    }
    //Convertendo uma data do formato brasileiro para um formato americano
		function data_br_to_us($dateBR){
    	if($dateBR){
				$ano = substr($dateBR, 6, 4);
				$mes = substr($dateBR, 3, 2);
				$dia = substr($dateBR, 0, 2);
				$dateUSA = $ano . '-' . $mes . '-' . $dia;
				return $dateUSA;
			}
			else{
				return null;
			}
    }
    
    	//Convertendo do formato decimal para o formato de moeda brasileira
    	function decimal_to_reaisbr($data){
    		if($data){
	    		$data = str_replace(',','',$data);
  	  		$data = str_replace('.',',',$data);
    			return $data; 
			}
			else{
				return null;
			}
    	}

    //Convertendo do formato de moeda brasileira para decimal
		function reaisbr_to_decimal($data){
    		if($data){
	    		$data = str_replace('.','',$data);
  	  		$data = str_replace(',','.',$data);
    			return $data; 
			}
			else{
				return null;
			}
    }
?>