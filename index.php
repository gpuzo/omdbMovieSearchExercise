<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="Libraries/JQuery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="Libraries/Handlebars/handlebars-v4.0.5.js"></script>
<script type="text/javascript" src="src/movieApp.js"></script>
<link rel="stylesheet" href="css/custom.css" />
</head>
<body>
<div class="container"> 
  <h1 class="CenterText">Enter the name of a Movie below!</h1>
  <form id=SearchForm>
        <input id="SearchTextBox" type="text" placeholder="Input Movie Title" />
		<button id="SearchButton" type="submit" >Search</button>
  </form>
</div>

<div id="Movie-container"></div>

<script id="MovieTemplate" type="text/x-handlebars-template">
	<div class="MovieBox Border">
	
		<h3 class="CenterText"><a href="http://www.imdb.com/title/{{imdbID}}" target="_blank">{{Title}}</a></h3> 
			
		<div class="row">
				<div>
					<img src="{{Poster}}" class="Poster"/>
				</div>	
				
					<div id="Year" class="BoxItem">
						<strong>Year: </strong>{{Year}}
					</div>
					
					<div id="Rated" class="BoxItem">
						<strong>Rated: </strong>{{Rated}}
					</div>

					<div id="Released" class="BoxItem">
						<strong>Released: </strong>{{Released}}
					</div>
					
					<div id="Runtime" class="BoxItem">
						<strong>Runtime: </strong>{{Runtime}}
					</div>
				
					<div id="Genre" class="BoxItem">
						<strong>Genre: </strong>{{Genre}}
					</div>
					
					<div id="Director" class="BoxItem">
						<strong>Director: </strong>{{Director}}
					</div>
				
					<div id="Actors" class="Actors">
						<strong>Actors: </strong>{{Actors}}
					</div>

					<div id="Class" class="Plot">
						<strong>Plot: </strong>{{Plot}}
					</div>
	
		</div>
	</div>
</script>


</body>
</html>