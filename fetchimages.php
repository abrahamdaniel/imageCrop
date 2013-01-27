<?php
/***********************************************************************************/
/* 		IMPORTANT NOTE:

		1) HERE THE FINAL IMAGE WE NEED HAS A DIMENSION OF 192px by 160px
		
		2) $image->save is the function used to save an image, you can change the extension and save the image as you need. 
		FOR EXAMPLE: 
		$image->save('intermediate_landscape.jpg');	 will save the image as a JPG,
		$image->save('intermediate_landscape.png');	  will save the image as a PNG,
		$image->save('intermediate_landscape.gif');	  will save the image as a GIF,
*/
/***********************************************************************************/
	include('image.php');
	$image = new SimpleImage(); 		// Creating an instance for the class SimpleImage
	
	
	
	/************** LANDSCAPE IMAGE ***************/
	$coverImageUrl = 'http://localhost/rawimage_landscape.jpg';
	
			$image->load($coverImageUrl); 					// Loading the Image from the URL
			$image->resizeToHeight(160); 					// Resizing to 160px Height (THIS IS THE SMALLER SIDE), by maintaining the aspect ratio	
			$image->save('intermediate_landscape.jpg');		// Temporarily saving the resized image for cropping
			$tempImage = 'intermediate_landscape.jpg';
			$image->createThumb($tempImage);				// Cropping the image to Width 192px and Height 160px
			//$image->renderImage(); 						// Rendering the image	
			$image->save('landscape_final.jpg');			// Saving the final Image		
			unlink('intermediate_landscape.jpg');  			// Deleting the intermediate image
						
			
	/************** PORTRAIT IMAGE ***************/
	$coverImageUrl = 'http://localhost/rawimage_portrait.jpg';
			
			$image->load($coverImageUrl); 					// Loading the Image from the URL
			$image->resizeToWidth(192); 					// Resizing to 192px Width (THIS IS THE SMALLER SIDE), by maintaining the aspect ratio	
			$image->save('intermediate_portrait.jpg');		// Temporarily saving the resized image for cropping
			$tempImage = 'intermediate_portrait.jpg';
			$image->createThumb($tempImage);				// Cropping the image to Width 192px and Height 160px
			//$image->renderImage(); 						// Rendering the image	
			$image->save('portrait_final.jpg');				// Saving the final Image
			unlink('intermediate_portrait.jpg');  			// Deleting the intermediate image
	
	
	/************** SQUARE IMAGE ***************/
	$coverImageUrl = 'http://localhost/rawimage_square.jpg';
	
			$image->load($coverImageUrl); 					// Loading the Image from the URL
			$image->resizeToWidth(192); 					// Resizing to 192px Height (THIS IS THE BIGGER SIDE), by maintaining the aspect ratio	
			$image->save('intermediate_square.jpg');		// Temporarily saving the resized image for cropping
			$tempImage = 'intermediate_square.jpg';
			$image->createThumb($tempImage);				// Cropping the image to Width 192px and Height 160px
			//$image->renderImage(); 						// Rendering the image	
			$image->save('square_final.jpg');				// Saving the final Image
			unlink('intermediate_square.jpg');  			// Deleting the intermediate image
?>

