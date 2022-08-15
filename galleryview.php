<?php	  


   				function add(){
					
					  if(isset($_GET['eventname']))	{
					  
							switch($_GET['eventname']) {
							
								case 'Feast Holy Mass - 2019':
										$text='';
										$total_images=42;
										for($i=1;$i<=$total_images;$i++){
											$text.=
														"<div class='col-md-4 col-xs-6'>
															<div class='gallery-image-wrapper'>
																<div class='image'>
																	<img src='images/gallery/2018-19/FeastHolyMass/1 (".$i.").JPG' alt=''>
																	<div class='opacity'><a data-fancybox='project' href='images/gallery/2018-19/FeastHolyMass/1 (".$i.").JPG' class='zoom-view' title='We’ve done lot’s of work, Let’s Check'><i class='fa fa-search' aria-hidden='true'></i></a></div>
																		
																</div>
															</div> 
														</div>"
											;
										}
										break;


										return $text;
							}




?>
