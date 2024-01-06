$(document).ready(function(){	
	var employeeData = $('#employeeList').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"table/php/action.php",
			type:"POST",
			data:{action:'listEmployee'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 6, 7],
				"orderable":false,
			},
		],
		"pageLength": 10
	});		
	$('#addEmployee').click(function(){
		$('#employeeModal').modal('show');
		$('#employeeForm')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add Employee");
		$('#action').val('addEmployee');
		$('#save').val('Add');
	});		
	$("#employeeList").on('click', '.update', function(){
		var id = $(this).attr("id");
		var action = 'getEmployee';
		$.ajax({
			url:'table/php/action.php',
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data){
				$('#employeeModal').modal('show');
				$('#id').val(data.id);		
				$('#issue_status').val(data.issue_status);	
				$('.modal-title').html("<i class='fa fa-plus'></i> Edit Job Details");
				$('#action').val('updateEmployee');
				$('#save').val('Save');
			}
		})
	});
	$("#employeeModal").on('submit','#employeeForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"table/php/action.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#employeeForm')[0].reset();
				$('#employeeModal').modal('hide');				
				$('#save').attr('disabled', false);
				employeeData.ajax.reload();
			}
		})
	});		
	$("#employeeList").on('click', '.delete', function(){
		var id = $(this).attr("id");		
		var action = "empDelete";
		if(confirm("Are you sure you want to delete this employee?")) {
			$.ajax({
				url:"table/php/action.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(data) {					
					employeeData.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
});