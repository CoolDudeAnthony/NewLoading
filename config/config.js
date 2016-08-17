/*
	smoothLoad
		v1.0 by Lachlan (http://steamcommunity.com/id/UnresolvedVice)
 */


/*
	BASIC SERVER INFORMATION
 */

// Define a custom server name
var useServerName = true;
// The server's name
var serverName = "ChaosVoid";

// Use a server image
var useImage = true;
// Path to server image
var serverImage = "images/defaultServer.png";

// Background Image
var backgroundImage = "images/background.jpg";

/*
	SERVER DETAILS
 */

// Server description, won't be used if useDescArray is set to true.
var serverDesc = "Welcome to ChaosVoidRP.";

// Multiple description capability
var useDescArray = false;
// Delay (in milliseconds) between descriptions - Default is 10 seconds.
var descDelay = 10000;

// Use this only if the above is set to true
var serverDescription = [
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor nulla nulla. Cras accumsan sapien massa, eu accumsan neque scelerisque at. Etiam nulla odio, tristique eu ipsum vitae, malesuada ullamcorper ante. Vestibulum eget lacinia ligula, eget porta augue. Donec ullamcorper, ligula id facilisis eleifend, tortor dolor fringilla purus, ut feugiat neque risus ac ligula. Donec nec magna mattis, pellentesque magna id, congue leo. Sed id ipsum vel velit accumsan porta vitae at odio. Nullam maximus vestibulum cursus.",
	"Lorem ipsum dolor sit amet, adipscing elit. Suspendisse nulla nulla. Cras sapien massa, eu accumsan neque scelerisque at. Etiam nulla odio, tristique eu ipsum vitae, malesuada ullamcorper ante. Vestibulum eget lacinia ligula, eget porta augue. Donec ullamcorper, ligula id facilisis eleifend, tortor dolor fringilla purus, ut feugiat neque risus ac ligula. Donec nec magna mattis, pellentesque magna id, congue leo. Sed id ipsum vel velit accumsan porta vitae at odio."
];

// Delay (in milliseconds) between the rule fading - Default is 1 second.
var rulesDelay = 1000;

// Server rules list (max is 5)
var serverRules = [
	"You cannot break NLR (You cannot come back to the place you were for 5 minutes).",
	"Do NOT Random Demote. Demotions can only be made when staff members are busy or offline.",
	"Do NOT expect an admin to take any action for any situation without substantial proof!",
	"The PD lobby is PUBLIC. It cannot be KOS or AOS. ",
	"Staff HAVE the final say in situations.",
];
