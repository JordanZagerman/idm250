/* RUN DIALOG BACKEND JS - specify run box aliases and the functions they execute */
/*      this file gets loaded dynamically whenever the run dialog is opened      */

// we should eventually replace the hardcoded aliases here with a database-type system
// loaded dynamically
function aliasRun(rawCommand) {
	var themeUri = $('[data-theme-uri]').attr('data-theme-uri');
	var pagesUri = $('[data-pages-uri]').attr('data-pages-uri');
	var searchUri = $('[data-search-uri]').attr('data-search-uri');

	var command = rawCommand.toLowerCase(); // for case insensitivity
	if(command == "debug") {
		var debugJsLink = $("<script src='"+themeUri+"system/debug/debug.js'>");
		$("head").append(debugJsLink);
		winDebug();
	} else if (command == "winver") {
		winverStart();
	} else {
		console.log("else aliasRun");
		console.log("command: " + command);
		console.log("rawCommand: " + rawCommand);
		console.log("pageshUri: " + pagesUri);
		console.log("searchUri: " + searchUri);

		// Grab Current URl idm250/
		// Concatinate the keyword to that url
		// force browser to redirect to that url
		// redirect close() to the homepage
		// get search results to look like homepage with a loop
		
		makeWindow(themeUri + 'system/icons/find24.png', 'Find', '?s=' + command, true);
	}
}