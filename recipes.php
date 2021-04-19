<?

// PHP response code for TP8

$recipes = array();

// Slider Burgers multidimensional array
$recipes["SliderBurger"] = array();
$recipes["SliderBurger"]["ingredients"] = array();
$recipes["SliderBurger"]["equipment"] = array();
$recipes["SliderBurger"]["directions"] = array();

$recipes["SliderBurger"]["ingredients"][] = "2 pounds ground beef";
$recipes["SliderBurger"]["ingredients"][] = "1 (1.25 ounce) envelope onion soup mix";
$recipes["SliderBurger"]["ingredients"][] = "½ cup mayonnaise";
$recipes["SliderBurger"]["ingredients"][] = "2 cups shredded Cheddar cheese";
$recipes["SliderBurger"]["ingredients"][] = "24 dinner rolls, split";
$recipes["SliderBurger"]["ingredients"][] = "½ cup sliced pickles (Optional)";

$recipes["SliderBurger"]["equipment"][] = "Oven";
$recipes["SliderBurger"]["equipment"][] = "Baking Sheet";
$recipes["SliderBurger"]["equipment"][] = "Measuring cups";
$recipes["SliderBurger"]["equipment"][] = "Spatula";
$recipes["SliderBurger"]["equipment"][] = "Knife";
  
$recipes["SliderBurger"]["directions"][] = "Preheat an oven to 350 degrees F (175 degrees C).";
$recipes["SliderBurger"]["directions"][] = "Cover a baking sheet with aluminum foil and spray with cooking spray.";
$recipes["SliderBurger"]["directions"][] = "Mix together the ground beef and onion soup mix in a large skillet. Drain and discard any excess grease. Remove from heat.";
$recipes["SliderBurger"]["directions"][] = "Cook and stir over medium-high heat until the beef is crumbly, evenly browned, and no longer pink.";
$recipes["SliderBurger"]["directions"][] = "Stir the mayonnaise and Cheddar cheese into the ground beef mixture.";
$recipes["SliderBurger"]["directions"][] = "Lay the bottoms of the dinner rolls on the prepared baking sheet. Replace the tops.";
$recipes["SliderBurger"]["directions"][] = "Spread the cheese and beef mixture on the bottom half of each roll.";
$recipes["SliderBurger"]["directions"][] = "Cover with another sheet of aluminum foil sprayed with cooking spray.";
$recipes["SliderBurger"]["directions"][] = "Bake in the preheated oven until the burgers are heated through and cheese melts, about 30 minutes. Serve with sliced pickles.";

// Slider Burgers multidimensional array
$recipes["LemonBar"] = array();
$recipes["LemonBar"]["ingredients"] = array();
$recipes["LemonBar"]["equipment"] = array();
$recipes["LemonBar"]["directions"] = array();

$recipes["LemonBar"]["ingredients"][] = "2 cups flour";
$recipes["LemonBar"]["ingredients"][] = "1 cup butter or margarine";
$recipes["LemonBar"]["ingredients"][] = "1/2 cup of powdered sugar";
$recipes["LemonBar"]["ingredients"][] = "4 eggs";
$recipes["LemonBar"]["ingredients"][] = "5 - 7 tablespoon of lemon juice";
$recipes["LemonBar"]["ingredients"][] = "2 cups sugar";
$recipes["LemonBar"]["ingredients"][] = "4 tablespoons flour";
$recipes["LemonBar"]["ingredients"][] = "1/2 teaspoon salt";


$recipes["LemonBar"]["equipment"][] = "Oven";
$recipes["LemonBar"]["equipment"][] = "9\" x 12\" pan";
$recipes["LemonBar"]["equipment"][] = "Measuring cups";
$recipes["LemonBar"]["equipment"][] = "Measuring spoons";
$recipes["LemonBar"]["equipment"][] = "Hand mixer";

  
$recipes["LemonBar"]["directions"][] = "Preheat oven to 350 degrees F.";
$recipes["LemonBar"]["directions"][] = "Cream and press crust ingredients into ungreased 9\" x 12\" pan.";
$recipes["LemonBar"]["directions"][] = "Place pan into oven and bake for 20 minutes.";
$recipes["LemonBar"]["directions"][] = "Mix lemon filling ingredients together until smooth.";
$recipes["LemonBar"]["directions"][] = "Pour lemon filling ontop of baked crust.";
$recipes["LemonBar"]["directions"][] = "Place pan back into the oven and bake for 25 minutes at 350 degrees F.";
$recipes["LemonBar"]["directions"][] = "Sprinkle powdered sugar on top while still warm.";
$recipes["LemonBar"]["directions"][] = "Let cool before cutting into bars.";

// Slider Burgers multidimensional array
$recipes["OnionChicken"] = array();
$recipes["OnionChicken"]["ingredients"] = array();
$recipes["OnionChicken"]["equipment"] = array();
$recipes["OnionChicken"]["directions"] = array();

$recipes["OnionChicken"]["ingredients"][] = "1/2 cup of bread crumbs";
$recipes["OnionChicken"]["ingredients"][] = "1 ounce of French Onion Soup Mix";
$recipes["OnionChicken"]["ingredients"][] = "1/3 cup of mayo";
$recipes["OnionChicken"]["ingredients"][] = "1 cup of garlic paste (optional)";
$recipes["OnionChicken"]["ingredients"][] = "4 skinless and boneless chicken breasts";

$recipes["OnionChicken"]["equipment"][] = "Oven";
$recipes["OnionChicken"]["equipment"][] = "Bowl";
$recipes["OnionChicken"]["equipment"][] = "Measuring cup";
  
$recipes["OnionChicken"]["directions"][] = "Preheat the oven to 425 degrees F (220 degrees C).";
$recipes["OnionChicken"]["directions"][] = "Mix bread crumbs and dry soup mix together in a bowl.";
$recipes["OnionChicken"]["directions"][] = "Mix mayonnaise and garlic paste together in a separate bowl. Microwave on high to thin out consistency, 20 to 30 seconds.";
$recipes["OnionChicken"]["directions"][] = "Brush chicken breasts with the mayonnaise mixture. Cover with the crumb mixture. Place on a baking sheet.";
$recipes["OnionChicken"]["directions"][] = "Bake on the middle rack of the preheated oven until chicken is no longer pink in the center and juices run clear, about 20 minutes. An instant-read thermometer inserted into the center should read at least 165 degrees F (74 degrees C).";

  
// receive and process $_GET data

// get the requested ID
$requestedID = $_GET["id"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

// get the requested list
$requestedList = $_GET["list"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedList, FILTER_SANITIZE_STRING);

// get the sub-array of that ID and list

$requestedArray = $recipes[$requestedID][$requestedList];

// start converting requested data into JSON
$requestedJSON = "0"; // default value of zero

if ($requestedArray != null) {
  $requestedJSON = json_encode($requestedArray);
}

// output the JSON
echo $requestedJSON;
  








