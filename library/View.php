<?php

/* 
*
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */
class View {
	function __construct() {
	}
	public function render($name)
	{
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';	

	}
}
