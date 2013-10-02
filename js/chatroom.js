// JavaScript Document
jQuery(function($){
	
	// Send Message And Update Chat History
	
	$("#chatapp").submit(function(){
		alert("Click On Post!");
		return false;
	});
	
	$("#postChat").on({
		click:function(){
			$.ajax({
				type:"post",
				async:true,
				url:'processchat.php',
				data: $("#chatapp").serialize(),
				success:function(){
					var reqid="reqid="+2;
					$.ajax({
					url:'processchat.php',
					data: reqid,
					success:function(data){
						$("#chatContent #chatlist").html(data);
						$("#listing").scrollTop(99999999);
					}
			});		// Ajax Completes
			}
			});
			$("#sendchat").val(""); 
		}
	});
	
	function refreshChatList(){
		var reqid="reqid="+2;
		$.ajax({
		url:'processchat.php',
		data: reqid,
		success:function(data){
			$("#chatContent #chatlist").html(data);
		}
		});
	};
			
	setInterval(function(){
		refreshChatList();
		//$("#listing").scrollTop(99999999);
	},2000);
	
	$("#listing").scrollTop(99999999);
	
});