<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/add_contact.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pompiere&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="contact_book-header">
			<div class="header">
				<div class="lg:flex lg:items-center lg:justify-between">
				  <div class="flex-1 min-w-0 container mx-auto">
				    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
				      Adress Book
				    </h2>
				    
				  <div class="mt-5 flex lg:mt-0 lg:ml-4">
				    <span class="hidden sm:block">
				      <a href="add-contact.html"><button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				        Add Contact
				      </button></a>
				    </span>

				    <span class="hidden sm:block ml-3">
				      <a href="contacts.php"><button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				        Contact List
				      </button></a>
				    </span>
				  </div>
				</div>
			</div>
		</div>
	</div>

		<div class="contact_content">
			<form method="GET">			
				<?php
					require __DIR__ . '/vendor/autoload.php';

					$reader = \League\Csv\Reader::createFromPath('csv/data.csv','r');

					$records = $reader->getRecords();

					$index = 0;
				?>	

				<div class="flex flex-col">
					<div>
						<div>
						    <div>
						      	<div class="container mx-auto px-6">
							        <table class="min-w-full divide-y divide-gray-200">
							        	<thead class="bg-gray-50">
							            	<tr>
							              		<th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
							                		First Name
							              		</th>
							              		
							              		<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
							                		Last Name
							              		</th>
							              		
							              		<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
							                		Phone
							              		</th>
							              		
							              		<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
							                		Email
							              		</th>
							              		
							              		<th scope="col" class="relative px-6 py-3">
							                		<span class="sr-only">Edit</span>
							              		</th>
							            	</tr>
							          	</thead>
							          	
							          	<tbody class="bg-white divide-y divide-gray-200">
							            		<?php foreach ($records as $record) : ?> 
							            			<tr>
								              			<td class="px-6 py-4 whitespace-nowrap">
								                			<div class="flex items-center">
								                  				<div class="ml-4">
								                    				<div class="text-sm font-medium text-gray-900">
								                    					<?php echo $record[0] ?>
								                    				</div>
								                  				</div>
								                			</div>
								              			</td>
								              			
								              			<td class="px-6 py-4 whitespace-nowrap">
								                			<?php echo $record[1] ?>
								              			</td>
								              			
								              			<td class="px-6 py-4 whitespace-nowrap">
								                			<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
								                  				<?php echo $record[2] ?>
								                			</span>
								              			</td>
								              			
								              			<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
											                <?php echo $record[3] ?>
										              </td>
									
										              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
								    		            <a href="php/edit-contact.php?var1=<?php echo $index?>" class="text-indigo-600 hover:text-indigo-900">Edit
								    		            </a>
								              			</td>

								              			<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
								    		            <a href="php/delete-contact.php?var2=<?php echo $index?>" class="text-indigo-600 hover:text-indigo-900">Delete
								    		            </a>
								              			</td>
							              			</tr>

							              			<?php $index++;?>
							              		<?php endforeach; ?>
							            	</tr>
							          	</tbody>
							        </table>
							    </div>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</form>
		</div>

	<script type="text/javascript">
		
	</script>

</body>
</html>