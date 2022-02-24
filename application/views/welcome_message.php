<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<title>Hello, world!</title>
</head>

<body>
	<div class="container">
		<div class="col-md-12 mt-5">
			<h1 class="text-center">Phone Book</h1>
			<hr style="background-color: black; color: black; height: 1px; ">
		</div>

		<div class="row">
			<div class="col-md-12 mt-2">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-primary btn-sm mb-3" data-toggle="modal" data-target="#exampleModal">
					Add User
				</button>
				<button type="submit" id="get-all-data" class="btn btn-primary mb-3">Get All Contacts</button>

				<form>
					<div class="mb-3">
						<label for="Search" class="form-label">Search Contact</label>
						<input type="text" class="form-control" id="add-search" aria-describedby="searchcontact">
					</div>
					<button type="submit" id="search" class="btn btn-primary">Search</button>

				</form>


				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="" method="post" id="form">
									<div class="form-group">
										<label for="">Name</label>
										<input type="text" class="form-control" id="name">
									</div>
									<div class="form-group">
										<label for="">Phone Number</label>
										<input type="text" class="form-control" id="phone_numberr">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" id="add">Add</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Edit Modal -->
				<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Update Modal</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="" method="post" id="update_form">
									<input type="hidden" id="edit_modal_id">
									<div class="form-group">
										<label for="">Name</label>
										<input type="text" class="form-control" id="edit_name">
									</div>
									<!-- <div class="form-group">
										<label for="">Phone NUmber</label>
										<input type="text" class="form-control" id="edit_ph">
									</div> -->


								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" id="update">Update</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Add number Modal -->
				<div class="modal fade" id="addnumberModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Add Number Modal</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="" method="post" id="update_form">
									<input type="hidden" id="add_number_modal_id">
									<div class="form-group">
										<label for="">Add Number</label>
										<input type="text" class="form-control" id="addd_number">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" id="add_phone_num">Add</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-3">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Phone Number</th>

						</tr>
					</thead>
					<tbody id="tbody">
					</tbody>
					<tbody id="search-body" style="display: none;">
						<td>lolk</td>
					</tbody>
				</table>
			</div>
		</div>

		<nav aria-label="Page navigation example">
			<ul class="pagination">

				<li class="page-item"><a id="page" value="0" class="page-link val-1" href="#">1</a></li>
				<li class="page-item"><a id="page" class="page-link val-2" value="10" href="#">2</a></li>
				<li class="page-item val-3"><a id="page" class="page-link" value="20" href="#">3</a></li>

			</ul>
		</nav>
	</div>


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script>
		$(document).on("click", "#add", function(e) {
			e.preventDefault();

			var name = $("#name").val();
			var phone_numberr = $("#phone_numberr").val();


			/* alert(name); */

			$.ajax({
				url: "<?php echo base_url(); ?>insert",
				type: "POST",

				dataType: "json",
				data: {
					name: name,
					phone_numberr: phone_numberr

				},
				success: function(data) {
					fetch();
					console.log(data)
					$('#exampleModal').modal('hide');

					if (data.response == "success") {
						toastr["success"](data.message)

						toastr.options = {
							"closeButton": false,
							"debug": false,
							"newestOnTop": false,
							"progressBar": false,
							"positionClass": "toast-top-right",
							"preventDuplicates": false,
							"onclick": null,
							"showDuration": "300",
							"hideDuration": "1000",
							"timeOut": "5000",
							"extendedTimeOut": "1000",
							"showEasing": "swing",
							"hideEasing": "linear",
							"showMethod": "fadeIn",
							"hideMethod": "fadeOut"
						}
					}

				},
				error: function(err) {
					console.log(err);
				}
			});
			$('#form')[0].reset();
		});

		var globdat;

		$(document).on("click", "#page", function(e) {
			e.preventDefault();

			var offset = ($(this).attr("value"))


			fetch(offset)

			$.ajax({

			});

		});



		function fetch(offset = "0") {
			var val = $('.val-1').attr("value");
			console.log(val)

			console.log(offset)

			$.ajax({
				url: "<?php echo base_url(); ?>fetch",
				type: "post",
				dataType: "json",
				data: {
					offset: offset
				},
				success: function(data) {
					console.log(data)
					var posts = data['posts']
					globdat = posts;
					var numphone = data['numphone']
					var offset = data['offset']
					console.log(posts)
					console.log(numphone)
					console.log(offset)


					var i = 1;
					var tbody = "";
					for (let x = 0; x < posts.length; x++) {

						var split = (posts[x]['phone']).split(",")
						console.log(split)

						if (!numphone[x]['number']) {
							numphone[x]['number'] = ""
						} else {
							tbody += "<tr>";
							tbody += "<td>" + i++ + "</td>";
							tbody += "<td>" + posts[x]['name'] + "</td>";



							for (let l = 0; l < split.length; l++) {
								tbody += "<td>" +
									"<li>" +
									split[l] +
									"</li>" +
									"</td>"
							}




							tbody += `<td>
                                    <a href="#" id="del" value="${posts[x]['id']}">Delete</a>
                                    <a href="#" id="edit" value="${posts[x]['id']}">Edit</a>
                                </td>`;


							tbody += `<td>
							<a href="##" id="add_number" class="id_number" value="${posts[x]['id']}">Add Number</a>
							</td>`
							tbody += "<tr>";
						}


					}

					$("#tbody").html(tbody);
				},
				error: function(err) {
					console.log("err");
				}
			})
		}
		fetch();

		$(document).on("click", "#del", function(e) {
			e.preventDefault();

			var del_id = $(this).attr("value");

			if (del_id == "") {
				alert("delete id required");
			} else {
				const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn btn-danger mr-2'
					},
					buttonsStyling: false
				})

				swalWithBootstrapButtons.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Yes, delete it!',
					cancelButtonText: 'No, cancel!',
					reverseButtons: true
				}).then((result) => {
					if (result.isConfirmed) {
						$.ajax({
							url: "<?php echo base_url(); ?>delete",
							type: "post",
							dataType: "json",
							data: {
								del_id: del_id
							},
							success: function(data) {
								fetch();
								if (data.responce == 'success') {
									swalWithBootstrapButtons.fire(
										'Deleted!',
										'Your file has been deleted',
										'success'
									)
								}
								/* fetch();
								if (data.response === 'success') {
								    swalWithBootstrapButtons.fire(
								        'Deleted!',
								        'Your file has been deleted.',
								        'success'
								    )
								} */
							},
							error: function(err) {
								console.log(err)
							}
						});

						swalWithBootstrapButtons.fire(
							'Deleted!',
							'Your file has been deleted.',
							'success'
						)
					} else if (
						/* Read more about handling dismissals below */
						result.dismiss === Swal.DismissReason.cancel
					) {
						swalWithBootstrapButtons.fire(
							'Cancelled',
							'Your imaginary file is safe :)',
							'error'
						)
					}
				})
			}
		})



		$(document).on("click", "#edit", function(e) {
			e.preventDefault();

			var edit_id = $(this).attr("value");

			if (edit_id == "") {
				alert("Edit id required");
			} else {
				$.ajax({
					url: "<?php echo base_url(); ?>edit",
					type: "post",
					dataType: "json",
					data: {
						edit_id: edit_id
					},
					success: function(data) {
						if (data.response == "success") {
							console.log(data)
							$('#editModal').modal('show');
							$('#edit_modal_id').val(data.post.id);
							$('#edit_name').val(data.post.name);

							var datasame = data.lost.same
							var newNumArr = datasame.split(",")
							console.log(newNumArr)

							/* var add = document.getElementsByClassName('modal-body')
							var created = document.createElement("div")
							var createdlabel = document.createElement("label")
							var createdinput = document.createElement("input") */

							for (let xy = 0; xy < newNumArr.length; xy++) {

								$('#update_form').append(`<div id="number-form-group-${[xy]}" class="form-group"></div>`)
								$(`#number-form-group-${[xy]}`).append('<label id="label-number" for="">Number</label>')
								$(`#number-form-group-${[xy]}`).append(`<input type="number" class="form-control take-num" id="edit-ph-${xy}">`)
								$(`#edit-ph-${xy}`).val(newNumArr[xy]);
								console.log(newNumArr[xy])
							}






						} else {
							toastr["error"](data.message)

							toastr.options = {
								"closeButton": false,
								"debug": false,
								"newestOnTop": false,
								"progressBar": false,
								"positionClass": "toast-top-right",
								"preventDuplicates": false,
								"onclick": null,
								"showDuration": "300",
								"hideDuration": "1000",
								"timeOut": "5000",
								"extendedTimeOut": "1000",
								"showEasing": "swing",
								"hideEasing": "linear",
								"showMethod": "fadeIn",
								"hideMethod": "fadeOut"
							}
						}
					}
				})
			}
		})

		$(document).on("click", "#update", function(e) {
			e.preventDefault();

			var edit_id = $("#edit_modal_id").val();
			var edit_name = $("#edit_name").val();
			/* var edit_number = $(".form-control").val(); */
			var element = document.getElementsByClassName("take-num");

			var values = '';
			for (var i = 0; i < element.length; i++) {
				if (i == (element.length - 1)) {
					values += element[i].value;
				} else {
					values += element[i].value + ',';
				}


			}
			/* console.log(values.split(',')) */
			var splitted_val = values.split(',')

			if (edit_id == "" || edit_name == "") {
				alert("both field is required");
			} else {

				$.ajax({
					url: "<?php echo base_url(); ?>update",
					type: "post",
					dataType: "json",
					data: {
						edit_id: edit_id,
						edit_name: edit_name,
						splitted_val: splitted_val

					},
					success: function(data) {
						fetch();
						$("#tbody").show();
						$("#search-body").css("display", "none");
						console.log(data)

						if (data.response === 'success') {
							$('#editModal').modal('hide');
							Command: toastr["success"](data.message)

							toastr.options = {
								"closeButton": false,
								"debug": false,
								"newestOnTop": false,
								"progressBar": false,
								"positionClass": "toast-top-right",
								"preventDuplicates": false,
								"onclick": null,
								"showDuration": "300",
								"hideDuration": "1000",
								"timeOut": "5000",
								"extendedTimeOut": "1000",
								"showEasing": "swing",
								"hideEasing": "linear",
								"showMethod": "fadeIn",
								"hideMethod": "fadeOut"
							}
						} else {
							Command: toastr["error"](data.message)

							toastr.options = {
								"closeButton": false,
								"debug": false,
								"newestOnTop": false,
								"progressBar": false,
								"positionClass": "toast-top-right",
								"preventDuplicates": false,
								"onclick": null,
								"showDuration": "300",
								"hideDuration": "1000",
								"timeOut": "5000",
								"extendedTimeOut": "1000",
								"showEasing": "swing",
								"hideEasing": "linear",
								"showMethod": "fadeIn",
								"hideMethod": "fadeOut"
							}
						}
					}
				});
				$("#update_form")[0].reset();
				$(".take-num").reset();
			}

		});

		var fi = ''

		$(document).on("click", "#add_number", function(e) {

			e.preventDefault();

			var number = $("#addd_number").val();
			fi = $(this).attr("value");
			var add_id = $(this).attr("value");




			if (add_id == "") {
				alert("Add number id required");
			} else {
				$.ajax({
					url: "<?php echo base_url(); ?>add_number",
					type: "post",
					dataType: "json",
					data: {
						number: number,
						add_id: add_id,
					},
					success: function(data) {
						$('#addnumberModal').modal('show');
						console.log(data)
						/* else {
							toastr["error"](data.message)

							toastr.options = {
								"closeButton": false,
								"debug": false,
								"newestOnTop": false,
								"progressBar": false,
								"positionClass": "toast-top-right",
								"preventDuplicates": false,
								"onclick": null,
								"showDuration": "300",
								"hideDuration": "1000",
								"timeOut": "5000",
								"extendedTimeOut": "1000",
								"showEasing": "swing",
								"hideEasing": "linear",
								"showMethod": "fadeIn",
								"hideMethod": "fadeOut"
							}
						} */
					}
				})
			}
		})

		$(document).on("click", "#add_phone_num", function(e) {
			e.preventDefault();

			var number = $("#addd_number").val();
			/* var id = $("#add_number").attr("value") */
			console.log(fi)

			$.ajax({
				url: "<?php echo base_url(); ?>phone_num",
				type: "post",
				dataType: "json",
				data: {
					number: number,
					fi: fi,
				},
				success: function(data) {
					fetch();
					$('#addnumberModal').modal('hide');
					console.log(data)
					/* if (data.response === 'success') {
						$('#editModal').modal('hide');
						Command: toastr["success"](data.message)

						toastr.options = {
							"closeButton": false,
							"debug": false,
							"newestOnTop": false,
							"progressBar": false,
							"positionClass": "toast-top-right",
							"preventDuplicates": false,
							"onclick": null,
							"showDuration": "300",
							"hideDuration": "1000",
							"timeOut": "5000",
							"extendedTimeOut": "1000",
							"showEasing": "swing",
							"hideEasing": "linear",
							"showMethod": "fadeIn",
							"hideMethod": "fadeOut"
						}
					} else {
						Command: toastr["error"](data.message)

						toastr.options = {
							"closeButton": false,
							"debug": false,
							"newestOnTop": false,
							"progressBar": false,
							"positionClass": "toast-top-right",
							"preventDuplicates": false,
							"onclick": null,
							"showDuration": "300",
							"hideDuration": "1000",
							"timeOut": "5000",
							"extendedTimeOut": "1000",
							"showEasing": "swing",
							"hideEasing": "linear",
							"showMethod": "fadeIn",
							"hideMethod": "fadeOut"
						}
					} */
				}
			});
			$("#update_form")[0].reset();


		});

		function isNumeric(n) {
			return !isNaN(parseFloat(n)) && isFinite(n);
		}

		$(document).on("click", "#search", function(e) {

			e.preventDefault();

			var search = $("#add-search").val();
			console.log(search)

			if (search === "") {
				$("#tbody").show();
				$("#search-body").css("display", "none");
			} else if (!isNumeric(search)) {
				for (let i = 0; i < globdat.length; i++) {
					if (globdat[i].name === search) {
						console.log(globdat[i])
						var x = 1;
						var tbody = "";

						var split = globdat[i].phone.split(",")

						console.log(split)


						tbody += "<tr>";
						tbody += "<td>" + x++ + "</td>";
						tbody += "<td>" + globdat[i]['name'] + "</td>";
						for (let l = 0; l < split.length; l++) {
							tbody += "<td>" +
								"<li>" +
								split[l] +
								"</li>" +
								"</td>"
						}
						tbody += `<td>
                                    <a href="#" id="del" value="${globdat[i]['id']}">Delete</a>
                                    <a href="#" id="edit" value="${globdat[i]['id']}">Edit</a>
                                </td>`;


						tbody += `<td>
							<a href="##" id="add_number" class="id_number" value="${globdat[i]['id']}">Add Number</a>
							</td>`
						tbody += "<tr>";




						$("#tbody").hide();
						$("#search-body").html(tbody);
						$("#search-body").css("display", "block");

					}


				}
			} else {
				for (let i = 0; i < globdat.length; i++) {
					var split = globdat[i].phone.split(",")

					console.log(split)

					for (let mm = 0; mm < split.length; mm++) {
						if (split[mm] === search) {
							/* console.log(globdat[i]['name']) */
							console.log(split)

							var x = 1;
							var tbody = "";

							tbody += "<tr>";
							tbody += "<td>" + x++ + "</td>";
							tbody += "<td>" + globdat[i]['name'] + "</td>";
							for (let l = 0; l < split.length; l++) {
								tbody += "<td>" +
									"<li>" +
									split[l] +
									"</li>" +
									"</td>"
							}
							tbody += `<td>
                                    <a href="#" id="del" value="${globdat[i]['id']}">Delete</a>
                                    <a href="#" id="edit" value="${globdat[i]['id']}">Edit</a>
                                </td>`;

							tbody += `<td>
							<a href="##" id="add_number" class="id_number" value="${globdat[i]['id']}">Add Number</a>
							</td>`
							tbody += "<tr>";

							$("#tbody").hide();
							$("#search-body").html(tbody);
							$("#search-body").css("display", "block");




						} else {
							console.log("nf")
						}
					}




				}
			}




		})

		$(document).on("click", "#get-all-data", function(e) {
			e.preventDefault();

			$("#tbody").show();
			$("#search-body").css("display", "none");
		});
	</script>
</body>

</html>