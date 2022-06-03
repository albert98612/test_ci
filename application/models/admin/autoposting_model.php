<?php
	class autoposting_model extends CI_Model {
		function http_request($url){ //untuk mengambil data dari controller ke controller lain, menggunakan json, tidak bisa langsung menggunakan array, harus menggunakan json_encode baru bisa, nanti di decode
			// persiapkan curl
			$ch = curl_init(); 
		
			// set url 
			curl_setopt($ch, CURLOPT_URL, $url);
		
			// return the transfer as a string 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		
			// $output contains the output string 
			$output = curl_exec($ch); 
		
			// tutup curl 
			curl_close($ch);      
		
			// mengembalikan hasil curl
			return $output;
		}
	}
?>