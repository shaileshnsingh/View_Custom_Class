// Class Which do the hufeering of out Put

<?php
class View {
    function render($file, $variables = array()) {
/**
     	Definition and Usage OF extract();

		The extract() function imports variables into the local symbol table from an array.

		This function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table.

		This function returns the number of variables extracted on success.

		extract(array,extract_rules,prefix)


			Parameter	         Description
			array				Required. Specifies the array to use
			extract_rules		Optional. The extract() function checks for invalid variable names and collisions with existing variable names. This parameter specifies how invalid and 		
							colliding names are 						treated.
					Possible values:

					EXTR_OVERWRITE - Default. On collision, the existing variable is overwritten
					EXTR_SKIP - On collision, the existing variable is not overwritten
					EXTR_PREFIX_SAME - On collision, the variable name will be given a prefix
					EXTR_PREFIX_ALL - All variable names will be given a prefix
					EXTR_PREFIX_INVALID - Only invalid or numeric variable names will be given a prefix
					EXTR_IF_EXISTS - Only overwrite existing variables in the current symbol table, otherwise do nothing
					EXTR_PREFIX_IF_EXISTS - Only add prefix to variables if the same variable exists in the current symbol table
					EXTR_REFS - Extracts variables as references. The imported variables are still referencing the values of the array parameter
		prefix				Optional. If EXTR_PREFIX_SAME, EXTR_PREFIX_ALL, EXTR_PREFIX_INVALID or EXTR_PREFIX_IF_EXISTS are used in the extract_rules parameter, a specified prefix is 	 
					required. 
					This parameter specifies the prefix. The prefix is automatically separated from the array key by an underscore character.


					Technical Details
					Return Value:	Returns  the number of variables extracted on success
					PHP Version:	4+
					Changelog:	The extract_rules value EXTR_REFS was added in PHP 4.3.

							    The extract_rules values EXTR_IF_EXISTS and EXTR_PREFIX_IF_EXISTS were added in PHP 4.2.

								As of PHP 4.0.5, this function now returns the number of variables extracted.

								The extract_rules value EXTR_PREFIX_INVALID was added in PHP 4.0.5.

								As of PHP 4.0.5, the extract_rules value EXTR_PREFIX_ALL now includes numeric variables as well.

***/
        extract($variables);


/****
ob_start();
This function will turn output buffering on. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer.

The contents of this internal buffer may be copied into a string variable using ob_get_contents(). To output what is stored in the internal buffer, use ob_end_flush(). Alternatively, ob_end_clean() will silently discard the buffer contents.

***/
        ob_start();
        include $file;

/***
Gets the current buffer contents and delete current output buffer.

ob_get_clean() essentially executes both ob_get_contents() and ob_end_clean().

***/
        $renderedView = ob_get_clean();

        return $renderedView;
    }
}


?>
