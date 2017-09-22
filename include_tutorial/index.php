<?php

/* 
	always use when you need to use any part of html (like header, footer, sidebar) or part that doesn't have any logical code
	important note: if file not found it will continue execute the program
 */
include "yourFileName.ext";

/* 
	always use when you need to use any part of html (like function, class) or part that have any logical code
	important note: if file not found it will continue execute the program
 */
include_once "yourFileName.ext";


/* 
	always use when you need to use any part of html (like header, footer, sidebar) or part that doesn't have any logical code
	important note: if file not found it will exit the program
 */
require "yourFileName.ext";

/* 
	always use when you need to use any part of html (like function, class) or part that have any logical code
	important note: if file not found it will exit the program
 */
require_once "yourFileName.ext";


?>