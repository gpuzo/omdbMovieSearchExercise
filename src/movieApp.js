$(document).ready(function() {
	
	//link to omdb 
	var baseUrl = "http://www.omdbapi.com/";
	
	// defining form for easier usage
	var $Search = $("#SearchForm");
	
	//create handlebars template
	var source = $("#MovieTemplate").html();
	var movieTemplate = Handlebars.compile(source);
	
	
	$Search.on("submit", function(Event){
		//Keep any unwanted interaction (e.g. load new page)
		Event.preventDefault();
		$("#Movie-container").empty();
		//Set text field input to a variable
		var searchInput = $("#SearchTextBox").val();
		//set url for query 
		var omdbUrl = encodeURI( baseUrl + searchInput +"");
		
		//execute ajax request to return search results from omdbUrl
		//Perform a GET to retrieve movie from baseUrl(omdbapi.com) using the 's' feature to search movie titles.
		$.ajax({
			type: "GET",
			url: baseUrl,
			data: {
				s: searchInput
			},
			//If the app is able to succesfully connect to omdbapi mkaae sure there is a movie to return
			success: function(movies, mvrqStatus, mvrqXHR){
				if (movies.Response === "False") {
					//if not alert the user that no movie was found
					alert("Movie info not found.")
				} else {
					//else we want to create a container for the imdb information we are pulling for each movie
					movies.Search.forEach(function(movie) {
						$.ajax({
							type: "GET",
							url: baseUrl,
							data: {
								i: movie.imdbID
							},
							success: function(movie) {
								//If we succesfully pull data from imdb create a new container with the corresponding information
								$("#Movie-container").append(movieTemplate(movie));
							},
							error: function() {
								//if it fails we alert the user of its' failure
								alert("Unable to get movie information from imdb!");
							}
						});
					});
				}

			}
		});
	});
});
