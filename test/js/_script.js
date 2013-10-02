// JavaScript Document

jQuery(function($){
	$("#sendsms").on({
		click:function(){
			$('.smsviews').wrap("<div class='code' />");
			$.ajax({
				url:'process.php',
				data:$('#appform').serialize(),
				success:function(data){
					$("#loader").fadeIn();
					setTimeout(function(){
						$('#app').html(data);
						loadHistory();
					},2000);
				};
			});			
			return false;
		};
	});
	
	/* Load SMS History */
	
	function loadHistory(){
		$.ajax({
			url:'process.php',
			data:'reqid=2',
			success:function(data){
				$('#smsviews').html(data);
			};
		});
	};
	
	function updateHistoryAuto(){
		setInterval(function(){
			/* $('#smsviews').prepend("<tr id='historyLoader'><td colspan='2' style='text-align=center'><img src='js/load-sms-history.gif' />&nbsp; Updating</td></tr>");
			setTimeout(function(){
				loadHistory();
			},9000); */
		loadHistory();
		},30000);
	};
	
	loadHistory(); 			// Loading SMS History On Page Load
	updateHistoryAuto();	//	Update History Automatically After 5 Seconds

});