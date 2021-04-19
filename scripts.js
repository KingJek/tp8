// JavaScript for TP6

// generic AJAX function to load fromFile into object with ID whereTo

function makeBig(element) {
  element = document.getElementById("title");
  element.classList.add("makeBig");
}

function clickColor(element) {
  element = document.getElementById("title");
  element.onclick = function() {
    element.classList.toggle("makeOrange");
  }
}

function clickSections(element) {
  element = document.getElementById("header1");
  element.onclick = function(ul) {
    ul = document.getElementById("show1");
    ul.classList.toggle("shown");
  }
  
  element = document.getElementById("header2");
  element.onclick = function(ul) {
    ul = document.getElementById("show2");
    ul.classList.toggle("shown");
  }
  
  element = document.getElementById("header3");
  element.onclick = function(ul) {
    ul = document.getElementById("show3");
    ul.classList.toggle("shown");
  }
}

function addSection(element) {
  element = document.getElementById("section");
  element.innerHTML = "<p>Created by Jake Stephens</p>";
}

function loadFileInto(fromIdentifier, fromList) {

	// creating a new XMLHttpRequest object
	ajax = new XMLHttpRequest();
  
  // define the fromFile value based on the PHP URL
  fromFile = "recipes.php?id=" + fromIdentifier + "&list=" + fromList;
  console.log("fromFile: " + fromFile);

	// defines the GET/POST method, source, and async value of the AJAX object
	ajax.open("GET", fromFile, false);

	// prepares code to do something in response to the AJAX request
	ajax.onreadystatechange = function() {
		
			if ((this.readyState == 4) && (this.status == 200)) {
        
        console.log("AJAX JSON response: " + this.responseText);
        
        
        // convert received JSON from PHP into JavaScript array
        responseArray = JSON.parse(this.responseText);
        responseHTML = "";
        
        if (this.responseText != 0) {
        for (x=0; x < responseArray.length; x++) {
          responseHTML += "<li>" + responseArray[x] + "</li>";
          }
        }

        // figure out querySelector target
        whereTo = "#" + fromList + " ul";
        if (fromList == "directions") whereTo = "#" + fromList + " ol";
				document.querySelector(whereTo).innerHTML = responseHTML;
				
			} else if ((this.readyState == 4) && (this.status != 200)) {
				console.log("Error: " + this.responseText);
				
			}
		
	} // end ajax.onreadystatechange

	// now that everything is set, initiate request
	ajax.send();

}

// object constructor for Recipe prototype
function Recipe(recipeName, imageURL, contributorName, recipeIdentifier) {
  this.name = recipeName;
  this.imgsrc = imageURL;
  this.contributor = contributorName;
  this.identifier = recipeIdentifier;
  
  // update the screen with this object's recipe information
  this.displayRecipe = function() {
    
    // update the recipe title
    document.querySelector("#title h1").innerHTML = this.name;
    
    // update the contributor
    document.querySelector("#title h3").innerHTML = this.contributor;
    
    // update the image
    document.getElementById("recipeImg").src = this.imgsrc;
    
    // update the 3 columns of info
    loadFileInto(this.identifier, "ingredients");
    loadFileInto(this.identifier, "equipment");
    loadFileInto(this.identifier, "directions");
  }
  
}

SliderBurger = new Recipe(
  "Slider-Style Mini Burgers",
  "https://images.unsplash.com/photo-1456418047667-56bcd35b1a88?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
  "Jake Stephens",
  "SliderBurger"
);

LemonBar = new Recipe(
  "Lemon Bars",
  "https://images.unsplash.com/photo-1530077561647-4c376cd0ee7d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80",
  "Mary Anne Keovongphet",
  "LemonBar"
);

OnionChicken = new Recipe(
  "French Onion-Breaded Baked Chicken",
  "https://images.unsplash.com/photo-1598515214211-89d3c73ae83b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80",
  "Owen Kapuza",
  "OnionChicken"
);

window.onload = function() {
  
  makeBig();
  
  clickColor();
	
}