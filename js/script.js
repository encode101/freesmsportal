// JavaScript Document

jQuery(function($){
	$("#sendsms").on({
		click:function(){
			/* if($('#message').val()==null){
				console.log("Empty");
				return false;
			} */
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
				}
			});			
			return false;
		}
	});
	
	/* Load SMS History */
	
	function loadHistory(){
		$.ajax({
			url:'process.php',
			data:'reqid=2',
			success:function(data){
				$('#smsviews').html(data);
			}
		});
	};
	
	function updateHistoryAuto(){
		setInterval(function(){
			/* $('#smsviews').prepend("<tr id='historyLoader'><td colspan='2' style='text-align=center'><img src='js/load-sms-history.gif' />&nbsp; Updating</td></tr>");
			setTimeout(function(){
				loadHistory();
			},9000); */
		loadHistory();
		},5000);
	};
	
	loadHistory(); 			// Loading SMS History On Page Load
	//updateHistoryAuto();	//	Update History Automatically After 5 Seconds
	
	/* setInterval(function(){
		setTimeout(function(){
			for(var i=0;i<100;i++){
				$("#sendprogress").attr("aria-valuenow",i);
				console.log(i);
			}
		},1000);
	},2000) */
	
	setTimeout(function(){
		$("#sendprogress").attr("aria-valuenow",100);
	},2000)
});