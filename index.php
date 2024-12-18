<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heating and Air Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* General Reset */

        body {
            font-family: Helvetica, Arial, sans-serif;
            color: #314b57;
            line-height: 1.6;
            background-color: #ffffff;
        }

        a {
            color: #ffffff;
            text-decoration: none;
            text-align: center;
        }

        a:link{
            color: #ab3c3c;
            text-decoration: underline;
            text-align: left;
        }

        h1, h2 {
            font-family: 'Roboto Slab', serif;
            color: #ab3c3c;
            text-align: left;
            margin-bottom: 2px;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
        }
         h3 {
            font-family: 'Roboto Slab', serif;
            color: #FFFFFF;
            text-align: left;
            margin-bottom: 5px; 
         }
        img {
            max-width: 100%;
            height: auto;
        }

        .content-frame {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5px;
        }

        /* Header Section */
        header {
            background-color: #314b57;
        }

        .services {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            text-align: left;
        }

        .service-item a {
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .service-item img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin-bottom: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

         /* Container for the grid */
         .grid-container {
            display: grid;
            grid-template-columns: 15% 15% 15% 15% 40%;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #314b57;
           
        }

        /* Styling each item */
        .grid-item {
        color: #ffffff;
        font-weight: normal;
         display: grid;
         grid-template-columns: 15% 15% 15% 15% 40%; /* Specifies the column widths */
         gap: 20px; /* Adds space between the grid items */
         max-width: 1200px;
         margin: 0 auto;
         text-align: center;
         background-color: #314b57;

        }

        .grid-item img {
            width: 80px; /* Round images for the first 4 items */
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #314b57;
        }

        /* Square image for column 5 */
        .grid-item.square img {
            width: 100%;
            height: 150px;
            border-radius: 5px;
            object-fit: cover;
            background-color: #314b57;
        }

        .grid-item p {
            color: #ffffff;
            margin-top: 10px;
            font-family: 'Roboto Slab', serif;
            font-size: 1em;
            text-align: center;
            background-color: #314b57;
        }


        /* Service Area Section */
        .service-area {
            background-color: #ffffff;
            padding: 20px 0;
        }

        .service-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: left;
            gap: 15px;
        }

        .service-content img {
            flex: 1 1 45%;
         
        }

        .service-text {
            flex: 1 1 45%;
            font-size: 1rem;
        }

        .service-text a {
            font-weight: bold;
        }

        /* Helpful Articles Section */
        .articles {
            padding: 10px 0;
        }

        .article-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }

        .article {
            flex: 1 1 calc(33.33% - 20px);
            background-color: #ffffff;
            padding: 5px;
            border-radius: 5px;
            text-align: left;
        }

        .article img {
            border-radius: 0px;
            margin-bottom: 5px;
        }

        .article p {
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .services, .service-content, .article-container .article-container{
                flex-direction: column;
                gap: 5px;
            }

            .service-content img, .service-text {
                flex: 1 1 100%;
            }

            .article {
                flex: 1 1 100%;
            }
        }

            (max-width: 480px) {
            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            .service-item img {
                width: 70px;
                height: 70px;
            }

            .service-item a {
                font-size: 0.8rem;
            }
            @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr); /* Two columns on medium screens */
            }

            .grid-item img {
                width: 70px;
                height: 70px;
            }

            .grid-item.square img {
                height: 120px;
                width: fit-content;
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: 1fr; /* Single column on small screens */
            }

            .grid-item img {
                width: 60px;
                height: 60px;
            }

            .grid-item.square img {
                height: 100px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>  
            <div class="content-frame">
                <h3>HEATING AND AIRCONDITIONING SERVICES</h3><div class="content-frame">
                    
     <!-- Grid Section -->       
      <div class="grid-template-columns">
        <div class="grid-container">
            <div class="=grid-item" >  
                 <a><img src="images/heating.png" alt="Heating"/>
                     <p>Heating</p>
                 </a>
             </div>
                 <div class="=grid-item" > 
                 <a><img src="images/cooling.png" alt="Cooling"/> 
                     <p>Cooling</p>
                     </a>
                 </div>
                     <div class="=grid-item" > 
                 <a><img src="images/specials.png" alt="Specials"/>
                     <p>Specials</p>
                 </a>
                </div>
                 <div class="=grid-item" > 
                 <a><img src="images/plumber-arlington-tx.png" alt="For Plumbing"/>
                     <p>For Plumbing</p> 
                 </a>
             </div>
                 <div class="=grid-item.square" > 
                 <a><img src="images/sub_map.jpg"/> 
                     </a>
                 </div>
                 </div>
        </div>
    </header>
                   

    <!-- Service Area Section -->
    <section class="service-area">
        <div class="content-frame">
            <h1>OUR SERVICE AREA</h1>
            <div class="service-content">
                <a href="#"><img src="images/our-service-area.jpg" alt="Our Service Area"></a>
                <div class="service-text">
                    <p>Minuteman Heating & Air serves Fort Worth, Arlington, Aleda, Alvarado and the surrounding areas with first quality services you can rely upon. Our certified technicians have the experience necessary to ensure a professional repair, installation, and maintenance of your <b>heating and air conditioning</b> system.
                    Contact us today to schedule your service or a free estimate for a new <b>HVAC</b> system for residential or commercial applications.</p>
             <br>
             <a href="#">Furnace Repair Service Areas</a> <br>
             <a href="#">Air Conditioning Repair Service Areas</a> <br>
        
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Helpful Articles Section -->
    <section class="articles">
        <div class="content-frame">
            <h2>Helpful Heating and Air Articles</h2>
            <div class="article-container">
                <div class="article">
                    <a href="#"><img src="images/The-Value-of-Design-and-Right-Sizing-by-Arlington-HVAC-Contractors.jpg" alt="HVAC Worker"></a>
                    <p>Before the not-so-cold winter arrived in Arlington this year, we were looking at the importance of <b>heating, ventilation, and air conditioning (HVAC)</b> contractors. In this... <br><br><a href="#">Read More</a></p></br>
                </div>
                <div class="article">
                    <a href="#"><img src="images/Arlington-HVAC-Tips-for-Uneven-Heat.jpg" alt="Thermostat"></a>
                    <p>Uneven heat. It may be the No. 1 complaint among Arlington homeowners all winter. Many people who have multi-level... <br><br><a href="#">Read More</a></p></br>
                </div>
                <div class="article">
                    <a href="#"><img src="images/Arlington-HVAC-Tips-for-Troubleshooting-Furnaces.jpg" alt="HVAC System"></a>
                    <p>Fortunately for Arlington homeowners, the winter of 2016 has been, for the most part, pretty darn warm. There's still some cold days... <br> <br><a href="#">Read More</a></p></br>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
