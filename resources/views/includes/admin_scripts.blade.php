<script src="{{asset('assets/vendors/jquery/jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

<script>
    function getnotifications(){
		$.ajax({    //create an ajax request to display.php
			type: "GET",
			url: "backend_2/getnotification.php",                            
			success: function(response){   
				const obj = jQuery.parseJSON(response);
				document.getElementById("usernotification").innerHTML=obj.notifications;
				document.getElementById("usernotificationCounter").innerHTML=obj.notificationCounter;
				if(obj.notificationCounter > 0){
				    document.getElementById("liveToast").innerHTML = obj.notificationdisplay;
				    const toast = new bootstrap.Toast(document.getElementById('liveToast'));
                    toast.show();
				}
			}
		});
	}
	
	function updatenoticationCounter(){
	    $.ajax({    //create an ajax request to display.php
			type: "GET",
			url: "backend_2/updatenotication.php",                            
			success: function(response){   
				const obj = jQuery.parseJSON(response);
			}
		});
	}
	
	// Call getnotifications after every 15-second
    window.setInterval(function(){
        getnotifications();
    }, 15000);
	getnotifications();
</script>