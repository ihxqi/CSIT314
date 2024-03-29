<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cinema Manager - Movie listing</title>
        <link rel ="stylesheet" href = "styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    </head>
	
	<style>
		.search-results 
		{
			margin-top: 20px;
		}
		
		.box 
		{
			display: block;
		}
		
		.hidden
		{
			display: none;
		}
	</style>
<body>
    <div class="white-box">
        <section>
            <div class="container1">
                <div class="logo">
                    <img src="Images/cinemethologo.jpeg">
                </div>
    
                <div class="topnav">
				<a href="#" onclick="logout()">LOG OUT</a>
				<a href="loyaltyRewards.html">LOYALTY REWARDS</a>
                <a href="tickets.html">TICKETS</a>
                <a href="cinemaRooms.html">CINEMA ROOMS</a>  
                <a href="movies.html">MOVIES</a>    
                <a href="f&b.html">F&B</a>                				
                <a class="active" href="#">HOME</a>				
                </div>
            </div> 
        </section>

        <hr>
        <br><br>
		<div class="search-container">			
				<input type="text" id="search" placeholder="Search by movie name">
				<div class="search-results"></div>
		</div>
		
        <section>
            <div class="container2">
                <div class="box">
                    <div class="imgBx">
                        <a href="D&Ddesc.html"><img src="Images/dnd.jpeg"></a> 
                    </div>
                    <div class="layer layer1"></div>
                    <a href ="D&Ddesc.html">
                        <div class="contentBx">
                            <div>
                                <h2>Dungeons &#38; Dragons &#40;English Sub&#41;<br></h2>
                                <h2>PG13<br></h2>
                                <p>Action<br></p>
                                <p>PG13 - Some Violence<br></p>
                                <p>134 mins<br></p>
                                <p>English</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <div class="imgBx">
                        <a href="johnwick4desc.html"><img src="Images/johnwick4.jpeg"></a>
                    </div>
                    <div class="layer layer1"></div>
                    <a href ="johnwick4desc.html">
                        <div class="contentBx">
                            <div>
                                <h2>John Wick: Chapter 4<br></h2>
                                <h2>M18<br></h2>
                                <p>Action<br></p>
                                <p>M18 - Violence<br></p>
                                <p>170 mins<br></p>
                                <p>English</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <div class="imgBx">
                        <a href ="supermariobrosdesc.html"><img src="Images/mario.jpeg"></a>
                    </div>
                    <div class="layer layer1"></div>
                    <a href ="supermariobrosdesc.html">
                        <div class="contentBx">
                            <div>
                                <h2>The Super Mario Bros. Movie &#40;English Sub&#41;<br></h2>
                                <h2>PG<br></h2>
                                <p>Animation<br></p>
                                <p>PG<br></p>
                                <p>92 mins<br></p>
                                <p>English</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <br><br><br>

        <section>
            <div class="container2">
                <div class="box">
                    <div class="imgBx">
                        <a href="suzumedesc.html"><img src="Images/suzume.jpeg"></a>
                    </div>
                    <div class="layer layer1"></div>
                    <a href ="suzumedesc.html">
                        <div class="contentBx">
                            <div>
                                <h2>Suzume<br></h2>
                                <h2>PG<br></h2>
                                <p>Anime<br></p>
                                <p>PG<br></p>
                                <p>122 mins<br></p>
                                <p>Japanese</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <div class="imgBx">
                        <a href="renfielddesc.html"><img src="Images/renfield.jpeg"></a>
                    </div>
                    <div class="layer layer1"></div>
                    <a href ="renfielddesc.html">
                        <div class="contentBx">
                            <div>
                                <h2>Renfield<br></h2>
                                <h2>M18<br></h2>
                                <p>Comedy<br></p>
                                <p>M18 - Violence and Gore<br></p>
                                <p>93 mins<br></p>
                                <p>English</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <div class="imgBx">
                        <a href="gotg3.html"><img src="Images/gotg3.jpeg"></a>
                    </div>
                    <div class="layer layer1"></div>
                    <a href ="gotg3.html">
                        <div class="contentBx">
                            <div>
                                <h2>Guardians of the Galaxy Vol. 3<br></h2>
                                <h2>PG13<br></h2>
                                <p>Sci-Fi<br></p>
                                <p>PG13 - Some Violence and Coarse Language<br></p>
                                <p>150 mins<br></p>
                                <p>English</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
	
	<script>
		document.getElementById('search').addEventListener('input', function(e) 
		{
			var searchVal = e.target.value.toLowerCase();
			var boxes = document.getElementsByClassName('box');

			for (var i = 0; i < boxes.length; i++) 
			{
				var box = boxes[i];
				var text = box.textContent || box.innerText;

				if (text.toLowerCase().includes(searchVal)) 
				{
					box.classList.remove('hidden');
				}	 
				else 
				{
					box.classList.add('hidden');
				}
			}
		});
	
	function logout() 
	{
		// Code to handle logout
		console.log("Logged out");
		window.location.href = '..\cinemetho\index.php'; // redirect to login page after logout
	}
	</script>
</body>

</html>