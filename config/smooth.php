<script>
	
	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
		if (!useServerName) {
			setServerName(servername);
		}
	}

	function SetStatusChanged( status ) {
		changeStatus(status);
	}
	
	function changeStatus(status) {
		$(".status").html(status);
	}
	
	function animations() {
		// Hide Stuff
		$(".serverWrapper").hide();
		$(".serverName").hide();
		$(".user-info-actual").hide();
		
		$(".serverWrapper").delay(500).fadeIn("slow");
		$(".serverName").delay(1000).fadeIn("slow");
		// End Server Name
		
		// Set Date and Time
		setDateTime();
		
		// Slide User Info
		$(".user-content").delay(1500).animate( { top: "100px" }, 1000 );
		$(".user-info").delay(2500).animate( { width: "355px" }, 500 ).animate( { height: "60px", marginTop: "-30px" }, 500);
		$(".user-info-actual").delay(3500).fadeIn("slow");
		
		// Slide Server Info
		$(".serverInfo").delay(2000).animate( { left: "50px" }, 1000 );
		$(".serverInfo2").delay(2000).animate( { left: "460px" }, 1000 );
		$(".serverInfo3").delay(2000).animate( { left: "50px" }, 1000 );
		$(".serverRules").delay(2000).animate( { top: "50%" }, 1000);
	}
	
	function setServerName(serverName) {
		$(".serverName").html(serverName);
	}
	
	function setDescription(desc) {
		$(".serverInfoContent").html(desc);
	}
	
	function setMultDesc(desc, descDelay) {
		var i = 0;
		setInterval(function() {
			if(i <= (desc.length - 1)) {
				$(".serverInfoContent").fadeOut(500, function() {
					$(".serverInfoContent").html(desc[i]);
					i++;
				}).fadeIn(500);
			}
			else if(i > (desc.length - 1)) {
				i = 0;
				$(".serverInfoContent").fadeOut(500, function() {
					$(".serverInfoContent").html(desc[i]);
					i++;
				}).fadeIn(500);
			}
				
			
			
		}, descDelay);
	}
	
	function setRules(rules, rulesDelay) {
		$(".rule1").html('1) ' + rules[0]);
		$(".rule2").html('2) ' + rules[1]);
		$(".rule3").html('3) ' + rules[2]);
		$(".rule4").html('4) ' + rules[3]);
		$(".rule5").html('5) ' + rules[4]);
		
		setInterval(function() {
			$(".rule5").fadeOut(rulesDelay, function() {
				$(".rule4").fadeOut(rulesDelay, function() {
					$(".rule3").fadeOut(rulesDelay, function() {
						$(".rule2").fadeOut(rulesDelay, function() {
							$(".rule1").fadeOut(rulesDelay, function() {
								$(".rule1").delay(rulesDelay).fadeIn(function() {
									$(".rule2").delay(rulesDelay).fadeIn(function() {
										$(".rule3").delay(rulesDelay).fadeIn(function() {
											$(".rule4").delay(rulesDelay).fadeIn(function() {
												$(".rule5").delay(rulesDelay).fadeIn();
											});
										});
									});
								});
							});
						});
					});
				});
			});
		}, 20000);
	}
	
	function setBackground(backgroundImage) {
		$("body").css("backgroundImage", "url(" + backgroundImage + ")");
	}
	
	function setDateTime() {
		// Date and Time
		var dateTime = new Date();
		$(".dateTime").html('Today is ' + dateTime.toDateString());
	}
	
	function setServerImage(serverImage) {
		$(".serverImageimg").css("backgroundImage", "url(" + serverImage + ")");
	}
	
	function setDefaultImage() {
		$(".serverImageimg").css("backgroundImage", "url(images/defaultServer.jpg)");
	}
	
	$(document).ready(function() {
		animations();
		
		// Sets the server's name
		if(useServerName) {
			setServerName(serverName);
		}
		
		// Sets the background image
		if(backgroundImage != "") {
			setBackground(backgroundImage);
		}
		
		// Check whether there are multiple server descriptions.
		if(useDescArray) {
			setMultDesc(serverDescription, descDelay);
		}
		else
			setDescription(serverDesc);
		
		// Sets the server rules
		if(serverRules.length > 0) {
			setRules(serverRules, rulesDelay);
		}
		
		if(useImage) {
			setServerImage(serverImage);
		}
		else
			setDefaultImage();
	})
	
</script>