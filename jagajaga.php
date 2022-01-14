<tbody>
														<?php
														include 'config.php';
														error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
														$view = mysqli_query($conn, "SELECT * FROM tb_company order by id_company asc");
														while ($data = mysqli_fetch_array($view)) {
														echo $data['description'];
														}
														?>
														<!-- <form method="GET">
															<textarea class="textarea" name="description" id="description" readonly>
															</textarea>
														</form></br> -->
														<button type="submit" class="btn btn-sm btn-secondary ml-auto btn-style" href="#" data-toggle="modal" data-target="#modaledit">Edit
															Description</button>

														<!-- Modal Edit Company Profile-->
														<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered cascading-modal modal-lg" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="modal-editcompany">
																			EDIT COMPANY PROFILE</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>

																	<form method="POST" action="proses_dummy_test.php?PageAction=edit_description">
																		<div class="modal-body">
																			<div class="form-group">
																				<textarea class="form-control" id="description" name="description" placeholder="Company Brief Description..." rows="10" cols="100" onkeyup="charCount(this)"></textarea>
																				<span id="textcount">0</span> of 550 Characters
																			</div>
																		</div>
																		<div class="modal-footer border-top-0 d-flex justify-content-center">
																			<button type="submit" class="btn btn-secondary btn-sm">UPDATE</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
														<!-- End Modal Company Profile -->
											</div>
											</tbody>