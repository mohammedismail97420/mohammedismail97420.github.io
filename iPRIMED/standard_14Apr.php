
<?php
header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure');
header('Access-Control-Allow-Origin: http://extranet.qa.com');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPRIMED Educational Solutions</title>


    <!--Links-->




    <link rel="icon" href="Assets/Images/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        p {
            text-align: justify;
        }
    </style>

   



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/5e6131c1bd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script src="javascript/main.js"></script>





</head>



<body >

 <?php include "header.html" ?>



    <div class="img-text-div">
        <img class="img-fluid w-100 img-text" src="Assets/Images/qa1.png" alt="">
        <h1 class="text-on-img">Standard (Off the Shelf) Technical Training programs</h1>
    </div>
    <div class="container mt-3 mb-5">



        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
                <p>QA (www.qa.com) started in 1985 and is UK’s leading digital education and skills providers with a
                    presence in
                    technical, management and other associated professional skills. </p>
                <p>We have tied up with QA to offer its vast number of “Virtual Classroom” courses (formerly known as
                    AFA – Attend from Anywhere). The delivery model is unique, where you book a “virtual seat” in a
                    physical class room! It’s like an extended class room where your class mate could be from anywhere
                    in the world, creating a truly Global experience. QA’s technology helps you collaborate in real time
                    with the trainer in the physical class room and delegates attending the training in person or
                    virtually! </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6 ">
              <iframe width="100%" height="275" src="https://www.youtube.com/embed/WeQDqdG3GOE" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe> 
					  <!-- <iframe width="100%" height="275" src="Assets/videos/QAAttendfromAnywhere.mp4" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>  -->

					<!--<div class="embed-responsive embed-responsive-16by9" style="height:250;"> 
						<video width="100%" height="250"  controls="true" class="embed-responsive-item">
							<source src="Assets/videos/QAAttendfromAnywhere.mp4" type="video/mp4" />
						</video>
					</div> -->

					
            </div>
        </div>

        <div class="text-center">
            <h1>Advantages</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="advcard box-part text-center shadow p-3">
                        <div class="text-center p-5">
                            <img class="img-fluid w-25" src="Assets/Images/standard1.png" alt="">
                        </div>
                        <div class="title">
                            <h4>Trainer support</h4>
                        </div>

                        <div class="text">
                            <span>You get full help from the mentors for the term of your course.</span>
                        </div>



                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="advcard box-part text-center shadow p-3">

                        <div class="text-center p-5">
                            <img class="img-fluid w-25" src="Assets/Images/standard2.png" alt="">
                        </div>

                        <div class="title">
                            <h4>Learn from anywhere, anytime</h4>
                        </div>

                        <div class="text">
                            <span>Regardless of whether you're at home or busy working: you can access the training from
                                anywhere you have internet access.</span>
                        </div>



                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="advcard box-part text-center shadow p-3">

                        <div class="text-center p-5">
                            <img class="img-fluid w-25" src="Assets/Images/standard3.png" alt="">
                        </div>

                        <div class="title">
                            <h4>Quality</h4>
                        </div>

                        <div class="text">
                            <span>Live online trainings have the same quality as classroom training courses, because of
                                the access to trainer support.</span>
                        </div>



                    </div>
                </div>

            </div>
        </div>



        <br>
        <p>The technical courses offered run in the hundreds and cut across the Application, Infrastructure,
            Platform and Network Layers and span most technology vendors! To name a few – AWS, Microsoft Azure, GCP,
            CISCO, Citrix, VMware, CompTIA, Oracle and Red Hat.</p>



<!-- if(isset($_POST['submit']))
$coder= $_POST['coder'];
echo $coder; -->



        <div class="dropdown">
                <!-- <form> -->
                <select name="productvalue" id="productvalue" onchange="oncl()">
                <option selected>Select a Course</option>

                <?php
                $datas= file_get_contents("productname.json");
                $datas= json_decode($datas);
                $datas1= file_get_contents("qacoursedata.json");
                $datas1= json_decode($datas1);
                foreach($datas as $data){
                echo '<option>'.$data->CourseVendor.'</option>';
                }
                $url='http://extranet.qa.com/fetchData.asp?table=EV&CourseID=1&EventID=1&EventDate=1&LocationName=1&CourseDuration=1&Availability=1';
                $curl = curl_init($url);

                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'X-RapidAPI-Host: http://extranet.qa.com',
                'Content-Type: application/json'
                ]);

                $responsess = curl_exec($curl);
                curl_close($curl);                
                ?>
                </select>
                <!-- <input type="submit" name="submit" value="submit" onclick="oncl()"/> -->
                <!-- <button onclick=onsubmit() >Submit </button> -->
            <!-- </form>  -->
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        
        <script>
                var tabdata;
                var dataTable_course;
                $( document ).ready(function() {
                    console.log( "ready!" );
                    $.ajax({
                        method: "GET",
                        url: "http://extranet.qa.com/fetchData.asp?table=EV&CourseID=1&EventID=1&EventDate=1&LocationName=1&CourseDuration=1&Availability=1",
                        async:false,
                        dataType : "json",
                        success: function(resp){
                            // alert(resp);
                            
                        } ,
                        error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            alert(err.Message);
                            }    
                        
                    });
                });

                function oncl() {
                    var selected = document.getElementById('productvalue').value;
                    // var js_data =  $.getJSON(qacoursedata.json); 
                    //var jsontest = JSON.parse(test);
                    //debugger;
                    var simple = <?php echo json_encode($responsess); ?>;
                    // alert(simple);
                    var lines = simple.split(/\r?\n/);
                    var mainJsonData={};
                    for(var i = 0; i < lines.length; i++){
                        var temp=lines[i].split('\t');;
                        // alert(temp);
                        var tempJson={
                            "eventId" : temp[1],
                            "eventDate" : temp[2],
                            "courseDuration" : temp[3],
                            "eventType" :  temp[4],
                            "availability" : temp[5],
                            
                          };


                        // for(var j = 0; j < temp.length; j++){
                        //     var tem1=temp[j];
                        //     alert(tem1);
                        //     json1[temp] = temp1;
                        // }

                        if(typeof mainJsonData[temp[0]] === "undefined"){
                            var list=[];
                            list.push(tempJson);
                            mainJsonData[temp[0]]=list;
                        } else{
                            mainJsonData[temp[0]].push(tempJson);
                        }
                        //mainJsonData[temp[0]]=tempJson;
                       
                    }
                    //alert(JSON.stringify(mainJsonData));
                    $("#course-table-body").empty();
                   var datacount=0;
                    $.ajax({
                        url: "Assets/Files/qacoursedata.json",
                        method: "GET",
                        async:false,
                        success: function(response){
                            var html="";
                            jQuery.each(response, function(index, item) {
                                
                                var productName=item.ProductName;
                                var CourseTitle=item.CourseTitle;
                                var finalPrice1=item.FinalPricce;
								var finalPrice =number_format(finalPrice1, 2, '.', ',' );
								finalPrice = "&#8377 "+finalPrice;
                                var Course_ID=item.Course_ID;
                                var CourseVendor=item.CourseVendor;
                             
                                var courseDetailsList=mainJsonData[Course_ID];
                              
                                if(typeof finalPrice === "undefined"){
                                    finalPrice="0";
                                }
                               if(selected==CourseVendor){
                               
                                if(typeof courseDetailsList !== "undefined"){
                                    for(var i = 0; i < courseDetailsList.length; i++) {
                                        var courseDetails = courseDetailsList[i];
                                        var eventID=(typeof courseDetails==="undefined"?"":courseDetails.eventId);
                                        var eventDate=(typeof courseDetails==="undefined"?"":courseDetails.eventDate);
                                        var courseDuration=(typeof courseDetails==="undefined"?"":courseDetails.courseDuration);
                                        var availability=(typeof courseDetails==="undefined"?"":courseDetails.availability);
                                        var eventType=(typeof courseDetails==="undefined"?"":courseDetails.eventType);

										var splitdate = new Array(); 
										splitdate= eventDate.split(" "); 
										var eventDay=splitdate[0];
										var eventTime=splitdate[1];
                                     
                                        if(eventType == 'Attend From Anywhere' && availability=='Yes'){
                                            var evdate = moment(eventDate,'DD/MM/YYYY HH:mm:ss').format('DD/MM/YYYY');
                                            var currentDate=moment(new Date()).format('DD/MM/YYYY');
                                            var startDate = moment(currentDate, 'DD/MM/YYYY');
                                            var endDate = moment(evdate, 'DD/MM/YYYY');
                                            var result = endDate.diff(startDate, 'days');
											var result1 = endDate.diff(startDate, 'days');
											var duration =courseDuration+" days";
											if(result1 <=112)
											{
												if(result=>28){
													html +="<tr>"                                                
													+"<td>"+Course_ID+"</td>"
													+"<td>"+CourseTitle+"</td>"
													+"<td>"+eventDay+"</td>"
													+"<td>"+eventTime+"</td>"
													+"<td>"+duration+"</td>"
													+"<td>"+finalPrice+"</td>"
													+"<td><div><a class='btn btn-primary text-white' href='./register.php?courseId="+Course_ID+"&CourseTitle="+CourseTitle+"&eventId="+eventID+"&eventDate="+eventDate+"&finalPrice="+finalPrice1+"'>Request</a></div></td>"
													+"</tr>";
													datacount++;
												}
											}
                                            

                                        }
                                        
                                        
                                    }
                                }

                                

                               }
                            }); 
                           $('#course-table').append(html);
                           if(datacount==0){
                            alert("Currently No Event has been scheduled, please check back later.");
                           }
                            
                        }
                    });

                    



                    }
        </script>
		<script>
			function number_format(number, decimals, decPoint, thousandsSep){
				decimals = decimals || 0;
				number = parseFloat(number);

				if(!decPoint || !thousandsSep){
					decPoint = '.';
					thousandsSep = ',';
				}

				var roundedNumber = Math.round( Math.abs( number ) * ('1e' + decimals) ) + '';
				var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
				var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
				var formattedNumber = "";

				while(numbersString.length > 3){
					formattedNumber += thousandsSep + numbersString.slice(-3)
					numbersString = numbersString.slice(0,-3);
				}

				return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
			}

		</script>


        <table id="course-table" style="width: 100%;" border="1">
            <thead>
                <tr>
                    <th>
                        Course ID
                    </th>
                    <th>
						Course Title
					</th>
                    <th>
                        Date
                    </th>
					<th>
                        Time
                    </th>
                    <th>
                        Duration
                    </th>
                    <th>
                        Price
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody id="course-table-body">
                <tr>
                    <td></td>
                    <td></td>
					<td></td>
                    <td></td>
                    <td></td>
                    <td class="price-td"></td>
                    <td>
                        <div>
                            <!-- <a class="btn btn-primary text-white"></a> -->
                        </div>
                    </td>
                </tr>
               
            </tbody>
        </table>

        <h4 class="mt-5">How it works.</h4>
        <ol>
            <li>Before you book, please check if your device meets the WebEx system requirements. More information
                <span><a href="https://www.qa.com/faqs/virtual-classroom/">here.</a></span>
            </li>
            <li>Select the training of your preference from the drop-down menu above.
            </li>
            <li> You will see a list with different course dates. Choose a date that suits you and click on the
                “request”
                button.</li>
            <li>A form will pop up. Fill in the form and click on “submit”.</li>
            <li>You will receive further instructions from us via email.</li>
        </ol>
    </div>
























    
    <!-- Footer -->

    <?php include "footer.html" ?>

    <!-- End of footer -->





</body>

</html>