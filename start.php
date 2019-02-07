<html>
    <head>
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      
        <style>
        	/*search bar*/
			.search {
			  width: 100%;
			  position: relative
			}

			.searchTerm {
			  float: left;
			  width: 100%;
			  border: 3px solid #f15c28;
			  padding: 5px;
			  height: 20px;
			  border-radius: 5px;
			  outline: none;
			  color: #9DBFAF;
			}

			.searchTerm:focus{
			  color: #00B4CC;
			}

			.searchButton {
			  position: absolute;  
			  right: -80px;
			  width: 70px;
			  height: 36px;
			  border: 1px solid #f15c28;
			  background: #f15c28;
			  text-align: center;
			  color: #fff;
			  border-radius: 5px;
			  cursor: pointer;
			  font-size: 10px;
			}

			/*Resize the wrap to see the search bar change!*/
			.searchWrap{
			  width: 30%;
			  position: absolute;
			  top: 20%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			}


			/*buttons*/          
			html {
			  padding-top: 0px;
			  font-family: 'Chronicle Deck A', 'Chronicle Deck B', Chronicle, georgia, 'times new roman', serif !important;
			  text-align: center;
			}
			html *,
			html *:before,
			html *:after {
			  box-sizing: border-box;
			  transition: 0.5s ease-in-out;
			}
			html i, html em,
			html b, html strong,
			html span {
			  transition: none;
			}

			*:before,
			*:after {
			  z-index: -1;
			}

			a {
			  text-decoration: none;
			  line-height: 80px;
			  color: black;
			}

			.centerer {
			  width: 100%;
			  max-width: 800px;
			  margin: 0 auto;
			  padding: 0 1rem;
			}

			@media (min-width: 600px) {
			  .wrap {
			    width: 100%;
			    float: left;
			  }
			}
			[class^="btn-"] {
			  position: relative;
			  display: block;
			  overflow: hidden;
			  width: 100%;
			  height: 80px;
			  max-width: 500px;
			  margin: 1rem auto;
			  text-transform: uppercase;
			  border: 1px solid currentColor;
			}

			.btn-0 {
			  color: #fff;
			  font-family: 'Chronicle Deck A', 'Chronicle Deck B', Chronicle, georgia, 'times new roman', serif !important;
			}
			.btn-0:before {
			  content: '';
			  position: absolute;
			  top: 0;
			  right: 0;
			  bottom: 0;
			  left: 0;
			  background-color: #f15c28;
			  -webkit-transform: translateX(-100%);
			          transform: translateX(-100%);
			}
			.btn-0:hover {
			  color: #999999;
			}
			.btn-0:hover:before {
			  -webkit-transform: translateX(0);
			          transform: translateX(0);
			}

			/*Other text*/


          	body{
          		background-image: url("download.jpg");
          	}



          }
          
          .one_item{
            background:#f15c28/*#F8F8F8*/;
            border:1px solid #e0e0e0;
            border-radius:7px;
            padding:10px 20px;
            margin-bottom:20px;
          }
          

          h1{
            font-family:'Chronicle Deck A', 'Chronicle Deck B', Chronicle, georgia, 'times new roman', serif !important;
            font-size:45pt;
            color:#fff;
            margin-bottom:20px;
          }
          
          
        </style>

      
    </head>
    <body>
      
          <h1 style="padding-top:50px;padding-bottom:50px;">Competition Search</h1>


      <!--Search bar
      <div class="searchWrap">
	   	<div class="search">
	   	  <form action="search.php">
	   	  	<input name="searchWord" type="text" class="searchTerm" id="searchWordId" placeholder="What are you looking for?">
	   	  	<input type="submit" class="searchButton">
	   	  </form>
	   </div>
	</div>-->


	<!--Buttons-->
      <div class="centerer">
  <div class="wrap">
    <a class="btn-0" href="all.php">All Competitions</a>
     </div>

 <div class="centerer">
  <div class="wrap">
    <a class="btn-0" href="international.php">International Level</a>
     </div>

 <div class="centerer">
  <div class="wrap">
    <a class="btn-0" href="national_and_below.php">National Level and Below</a>
     </div>
      <script type="text/javascript">
      	$( "form" ).on( "submit", function( event ) {
		  console.log( $( this ).serialize() );
		});

      </script>
    </body>
</html>


<!--search bar

