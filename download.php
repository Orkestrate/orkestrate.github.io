<?php include 'header.php'; ?>

<html>

<head>
<style>
/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
  display: inline-block;
  border-radius: 0px;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  display: none;
  padding: 100px 50px 30px 50px;
  width: 100%;
}

#Home {background-color: white;}
#News {background-color: white;}
#Contact {background-color: white;}
#About {background-color: white;}
</style>
</head>

<body>

    <!-- Start page-top-banner section -->
    <section class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5">
        <div class="overlay overlay-bg"></div>
        <div class="container">
                <div class="col-lg-12 text-center">
                    <h1>Download</h1>
                </div>
        </div>
    </section>
    <!-- End about-top-banner section -->

    <!-- Start blog-lists section -->
    <div class="custom-container container" style="margin-top:10px;padding:0;">
	<div class="tabs">
    
<button class="tablink" onclick="openPage('One', 'defaultOpen', 'purple')" id="defaultOpen">A.&nbspIntro</button>
<button class="tablink" id='b' onclick="openPage('Two', 'b', 'purple')" >B.&nbspInstall</button>
<button class="tablink" id='c' onclick="openPage('Three', 'c', 'purple')">C.&nbspTrain</button>
<button class="tablink" id='d' onclick="openPage('Four', 'd', 'purple')">D.&nbspUse</button>

<div id="One" class="tabcontent">
	<h3>1. Download the Orkestrate ML app:</h3>
  		  <img src="/static/guide-report-image-first.jpg" alt="" width="45%"/>
	<p style="font-size:15px">For Windows: <a href="https://github.com/Orkestrate/Orkestrate-ML-Win">https://github.com/Orkestrate/Orkestrate-ML-Win</a><br>
	For MacOS: <a href="https://github.com/Orkestrate/Orkestrate-ML-Mac">https://github.com/Orkestrate/Orkestrate-ML-Mac</a></p>
	

	<h3>2. Why are we building this app?</h3>
	<p align="justify">Our mission is to help people, and we want to pursue this mission with the latest technology in AI and Machine Learning. That is the reason why we build and open-source this Orkestrate ML app. We believe the app can help you understand a bit more about AI and how this new technology can be useful for everyone.</p>
	<h3>3. How do we do it?</h3>
	<p align="justify">Normal deep learning applications require a lot of coding knowledge, which makes it hard for everyone to get a hold of the technology. We are creating this document to show you how to install and use the Orkestrate ML app without any special coding knowledge. </p>
	<h3>4. What can you do with the app?</h3>
	<p align="justify">On the current version of the app, you can train either the image or text classification models. There are many problems that can be solved using this AI technology (e.g., object detection for autonomous driving or natural language processing with topic and emotion detection). We have also included small sample datasets as a part of this guide to get you started.</p>

		<button class="btn btn-primary  btn-lg" onclick="openPage('Two', 'b', 'purple')" >Next</button>

</div>

<div id="Two" class="tabcontent">

  <h3>5. Download and install Python</h3>
  <p align="justify">Firstly, you need to download and install Python 3.6.6 from the official Python website. You can choose the suitable installation file for your Windows or Mac machines here: </p>
  <p><a href="https://www.python.org/downloads/release/python-366/">https://www.python.org/downloads/release/python-366/</a></p>
  
  <h3>6. Install Orkestrate ML App</h3>
  <p align="justify">After unzipping the downloaded Orkestrate ML app to a specific location on your local machine, you will need to use the following commands to install the app.<p>
	<p align="justify"><b>For Windows:</b><br>
<b>a.</b>	Click on "Search Windows" button/bar next to the Windows icon on the bottom left corner on your screen<br>
<b>b.</b>	Type "cmd.exe" and press "Enter" to open "Command Prompt"<br>
<b>c.</b>	Change the directory using command "cd /path/to/app" with "/path/to/app" is the app folder location on your local machine<br>
<b>d.</b>	Once the directory is changed, install the required packages by using command "pip install -r requirements.txt". Alternatively, you can click on the "install.bat" file to run it.</p>
	  <center><img src="/static/guide-install-win.jpg" alt="" width="50%"/></center>

	<p align="justify"><b>For MacOS:</b><br>
<b>a.</b>	Click on "Search" button/bar on the top right corner on your screen<br>
<b>b.</b>	Type "Terminal" and press "Enter" to open "Terminal"<br>
<b>c.</b>	Change the directory using command "cd /path/to/app" with "/path/to/app" is the app folder location on your local machine<br>
<b>d.</b>	Once the directory is changed, install the required packages by using command "pip3 install -r requirements.txt"</p>
	  <center><img src="/static/guide-install-mac.png" alt="" width="50%"/></center>

  
  <h3>7. Start Orkestrate ML App</h3>
	<p align="justify">After successfully installing the Orkestrate Ml app, you can start the app using the following steps.</p>
	<p align="justify"><b>For Windows:</b><br>
<b>a.</b>	Click on "Search Windows" button/bar next to the Windows icon on the bottom left corner on your screen<br>
<b>b.</b>	Type "cmd.exe" and press "Enter" to open "Command Prompt"<br>
<b>c.</b>	Change the directory using command "cd /path/to/app" with "/path/to/app" is the app folder location on your local machine<br>
<b>d.</b>	Start the app server by using command "python app.py". Alternatively, you can click on the "start.bat" file to start it.<br>
<b>e.</b>	Enter in your internet browser the address of the server "localhost:5000" or click on the "Orkestrate-ML" internet shortcut.<br>
<b>f.</b>	The app is started. If you are using the app for the first time, register an account or simply log in if you already registered.</p>
	<p align="justify"><b>For MacOS:</b><br>
<b>a.</b>	Click on "Search" button/bar on the top right corner on your screen<br>
<b>b.</b>	Type "Terminal" and press "Enter" to open "Terminal"<br>
<b>c.</b>	Change the directory using command "cd /path/to/app" with "/path/to/app" is the app folder location on your local machine<br>
<b>d.</b>	Start the app server by using command "python3 app.py"<br>
<b>e.</b>	Enter in your internet browser the address of the server "localhost:5000" or click on the "Orkestrate-ML" internet shortcut.<br>
<b>f.</b>	The app is started. If you are using the app for the first time, register an account or simply log in if you already registered.</p>

	  <center><img src="/static/guide-register.jpg" alt="" width="50%"/></center>
	  
	  <button class="btn btn-primary  btn-lg" onclick="openPage('Three', 'c', 'purple')" >Next</button>

</div>

<div id="Three" class="tabcontent">

  <h3>8. Prepare the data</h3>
  <p align="justify">Before training the model, you need to prepare your own datasets as below. We have also included small sample datasets in the "sample_data" folder as an example.</p>
  <p align="justify"><b>For the image model:</b><br>
<b>a.</b>	Create a folder for all images to be used for training the model. You can call it "train_images".<br>
<b>b.</b>	Inside the folder "train_images", create subfolders with folder names corresponding to the category of those images. For example, a folder named "houses" will contain images of houses and a folder named "cars" will contain images of cars.<br>
<b>c.</b>	Copy or download the images into the corresponding folder.<br>
<b>d.</b>	IMPORTANT: you will need to have at least 50 images in each folder for the neural networks to work, and you should have the same amount of images in each folder to ensure the model accuracy.</p>
	<p align="justify"><b>For the text model:</b><br>
<b>a.</b>	Open the sample data file "text_data.xlxs" inside the "sample_data/text_data" folder.<br>
<b>b.</b>	In this dataset, we collected posts from "happy" and "depressed" people.<br>
<b>c.</b>	Different category of text data should be in separated Excel tabs named "happy" and "depressed".<br>
<b>d.</b>	IMPORTANT: Each instance of text data must be separated in a new row</p>

  <h3>9. Train the model</h3>
  	<p align="justify">After logging into the app, you can see your dashboard and buttons to add the image or text model to start the training</p>
  <p align="justify"><b>For the image model:</b><br>
<b>a.</b>	Click on "Add Image Model" button on your dashboard.<br>
<b>b.</b>	Give your model a name by typing into the "Model Name" text box, for example we will call it "HouseOrCarModel". IMPORTANT: Please do not use spaces or special characters in your model name.<br>
<b>c.</b>	Click on the "Choose Files" button to select the "train_images" folder to upload. IMPORTANT: Please select the "train_images" folder, not the subfolders.<br>
<b>d.</b>	Click on the "Submit" button to start training your model. After the training has finished, you will be automatically redirected to your dashboard to use the trained model.</p>
	  <center><img src="/static/guide-train-image.jpg" alt="" width="50%"/></center>

	<p align="justify"><b>For the text model:</b><br>
<b>a.</b>	Click on "Add Text Model" button on your dashboard.<br>
<b>b.</b>	Give your model a name by typing into the "Model Name" text box, for example we will call it "DepressionModel". IMPORTANT: Please do not use spaces or special characters in your model name.<br>
<b>c.</b>	Click on the "Add Label and Data" button to open the input area for the first category of text data. Here we can put "Depressed" as "Label Name", then copy and paste the data into the "Text Data" field.<br>
<b>d.</b>  Click on the "Add Label and Data" button again to open the input area for a new category of text data. Here we can put "Happy" as "Label Name", then copy and paste the data into the "Text Data" field.<br>
<b>e.</b>	Click on the "Submit" button to start training your model. After the training has finished, you will be automatically redirected to your dashboard to use the trained model.</p>
	  <center><img src="/static/guide-train-text.jpg" alt="" width="50%"/></center>


	<h3>10. Retrain and delete the model</h3>
  	<p align="justify">For retraining the model, click on the "Retrain" button next to the model you want to retrain and repeat the same steps as training a new model with the new data. Please note this will override your old model and data stored within the app.</p>
		
	<p align="justify">For deleting the model, click on the "Delete" button next to the model you want to delete and it will immediately remove the model and data from our app.</p>
	
			  <center><img src="/static/guide-dashboard.jpg" alt="" width="50%"/></center><p></p>
		  <button class="btn btn-primary  btn-lg" onclick="openPage('Four', 'd', 'purple')" >Next</button>

</div>

<div id="Four" class="tabcontent">
  <h3>11. Use the model</h3>
  <p align="justify">To use the trained model, click on the "Use" button next to the model you want to use. It will open the page for using the image or text model accordingly.</p>
  		  <center><img src="/static/guide-dashboard.jpg" alt="" width="50%"/></center>

  <p align="justify"><b>For image model:</b><br>
<b>a.</b>	Create a folder for all images to be used for testing the model. You can call it "test_images".<br>
<b>b.</b>	Copy or download the images into this folder. There is no limit to how many images you want to test.<br>
<b>c.</b>	Click on "Choose Files" button to select the images you want to test with your trained model.<br>
<b>d.</b>	Click on "Submit" button to start generating the report. After finished, you will be automatically redirected to your report page to see the result.</p>
	  <center><img src="/static/guide-use-image.jpg" alt="" width="50%"/></center>
	  <center><img src="/static/guide-report-image.jpg" alt="" width="50%"/></center>

	<p align="justify"><b>For text model:</b><br>
<b>a.</b>	Click on "Add Label and Data" button to open the input area for the test data<br>
<b>b.</b>	Here we can put "Depressed" or "Happy" as "Label Name", then copy and paste test the corresponding data into the "Text Data" field.<br>
<b>c.</b>	If the test data is not yet categorized as "Happy" or "Depressed", you can just put "Test" as "Label Name"<br>
<b>d.</b>	Click on "Submit" button to start generating the report. After finished, you will be automatically redirected to your report page to see the result.</p>
	  <center><img src="/static/guide-use-text.jpg" alt="" width="50%"/></center>
	  <center><img src="/static/guide-report-text.jpg" alt="" width="50%"/></center>
	  
	<h3>12. Export report</h3>
  <p align="justify">The current version of the app only supports displaying the report on the webpage. We will consider including the function to export the report to file in our next update.</p>
	
</div>
</div>	  
</div>	  
<script>
function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
	var elmnt = document.getElementById(elmnt);
    elmnt.style.backgroundColor = color;
	
	window.scrollTo(0, 0);
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    <!-- End blog-lists section -->
</body>

</html>

<?php include 'footer.php'; ?>
