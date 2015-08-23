<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// https://ellislab.com/forums/viewthread/174206/#827587
// http://phpcodeignitor.blogspot.com/2011/07/php-xml-simplexml.html
class Xml_parser extends CI_Model {

	function __construct() {
		parent::__construct();

		//$this->load->library('simple_xml');
	}

	function parser( $xml_file ) {
		$result = "";

		if( !file_exists($xml_file) ) {
			//$xml_raw = file_get_contents($xml_file);
			$xml_raw = simplexml_load_file($xml_file);
//			$xml_raw = new SimpleXMLElement($xml_file);

			//$xml_data = $this->simplexml->xml_parse($xml_raw);

			// foreach loop
			$result = $xml_raw;
		} else {
			$result .= 'File ' . $xml_file . ' was not found';
		}

		return $result;
	}
}