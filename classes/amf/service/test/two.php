<?php

/**
 * Another test service to show that nested service directories
 * can be picked up properly
 *
 * @package AMF
 * @category Example
 * @author Lowgain
 */
class AMF_Service_Test_Two {
	
	/**
	 *
	 * Straightforward enough
	 *
	 * @return string
	 **/
	public function say_bye()
	{
		return 'bye';
	}
	
}