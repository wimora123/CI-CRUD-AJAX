<div class="articleCharacter">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

			<?php echo validation_errors('<div class = "alert alert-danger">', '</div>');
		    if($this->session->flashdata('failed'))
		    {
		        echo '<div class = "alert alert-danger">';
		        echo $this->session->flashdata('failed');
		        echo '</div>';
		    } 

		    else if($this->session->flashdata('success'))
		    {
		        echo '<div class = "alert alert-success">';
		        echo $this->session->flashdata('success');
		        echo '</div>';
		    } 
		    ?>

		
		  		<div class="form-group" style="width: 30%; margin-left: 30%;margin-right: 30%">


	  				<!-- Modal -->
	  				<?php echo form_open_multipart() ?>
					
					<div class="form-group">
					    <center><h4 class="modal-title" style="color:darkgreen; font-weight: bold;">Tambah Data</h4></center>
					    <center><img src="<?php echo base_url('assets/img/addData.jpg') ?>" style="width:47%; height: 150px; margin-top: 10px; margin-bottom: 10px;"></center>
					</div>

					<div class="form-group">
				        <input type="hidden" name="idAnime" id="idAnime">
				  		<label for="Title">Title:<code class="titleWarning"></code></label>
				   		<input type="text" name="title" class="form-control" id="title">
					</div>

					<div class="form-group">
				  		<label for="Description">Description:</label> <code class="descWarning"></code>
				   		<textarea id="descCharacter" name="description"></textarea>
					</div>


				    <div class="form-group">
				       <center><button type="button" id="actionInsert" name="actionInsert" class="btn btn-success btnInsert">Add</button>
				    </div>

					<?php echo form_close() ?>
			 		
		 		</div>
		

			</div>
		</div>
	</div>
</div>	

<div class="contentCharacter1">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
			<center><h1 style="color:#006644; font-weight: bold; display: none; position: fixed;top: 50%;left: 35%;" id="pesan"></h1></center>

			<table class="table tableCharacter table-resposive">
			    <thead>	
			      <tr>
			        <th><h4 style="font-weight: bold; font-family: arial; color:#660066;" align="center">No</h4></th>
			        <th><h4 style="font-weight: bold; font-family: arial; color:#660066;" align="center">Title</h4></th>
			        <th><h4 style="font-weight: bold; font-family: arial; color:#660066;" align="center">Description</h4></th>
			        <th colspan="2"><h4 style="font-weight: bold; font-family: arial; color:#660066;" align="center">Action</h4></th>
			      </tr>
			    </thead>

			    <tbody class="tbodyCharacter">	
			     
					<!-- Modal -->
					<div class="modal fade" id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">


					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <center><h4 class="modal-title">Update Data</h4></center>
					      </div>
					      
					      <?php echo form_open_multipart() ?>

					      <div class="modal-body">
			
					        <input type="hidden" name="idAnimeUpdate" id="idAnimeUpdate" value="">

					  		<div class="form-group"> 
					  		  	<label for="Title">Title:</label><code class="titleWarningUpdate"></code>
					   			<input type="text" name="titleUpdate" class="form-control" id="titleUpdate" value="">
					  		</div>

					  		<div class="form-group">
					  		  	<label for="Description">Description:</label> <code class="descWarningUpdate"></code>
					   			<textarea id="descCharacterUpdate" name="descriptionUpdate" ></textarea>
					  		</div>

					      </div>

					      <div class="modal-footer">
					        <center><button type="button" id="actionUpdate" name="actionUpdate" class="btn btn-success btnUpdate">Update</button>
					        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button></center>
					      </div>

					      <?php echo form_close() ?>

					    </div>
					  </div>
					</div>

			    </tbody>
		  	</table>
		
			</div>

			<div class="col-md-3">
				<ul class="ulListCat">
					<li><h1>Category</h1></li>
					<li><a>Comedy</a></li>
					<li><a>Horror</a></li>
					<li><a>Adventure</a></li>
				</ul>	
			</div>

		</div>
	</div>
</div>	
