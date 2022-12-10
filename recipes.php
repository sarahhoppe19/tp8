<?

/*recipe loader for tp8 php*/

$name = $_GET["recipeName"];
$list = $_GET["recipeList"];

//start of if statement for first recipe
if ($name == "Mushroom Salsa Chili")
{
  if ($list == "ingredients")
  {
    include "ingredients.html";
    
  } elseif ($list == "equipment")
  {
    include "equipment.html";
    
  } elseif ($list == "directions")
  {
    include "directions.html";
    
  } else 
  {
    //default else in case something doesn't work to prevent breaking
    echo "1";
  }

 //continued if statement using elseif for second recipe
} elseif ($name == "Basic Crepes")
{
    if ($list == "ingredients")
  {
    include "ingredientsCrepes.html";
    
  } elseif ($list == "equipment")
  {
    include "equipmentCrepes.html";
    
  } elseif ($list == "directions")
  {
    include "directionsCrepes.html";
    
  } else 
  {
      //default else in case something doesn't work to prevent breaking
    echo "2";
  }

//continued if statement using another elseif for third recipe
} elseif ($name == "Old Fashioned Pancakes")
{
    if ($list == "ingredients")
  {
    include "ingredientsPancakes.html";
    
  } elseif ($list == "equipment")
  {
    include "equipmentPancakes.html";
    
  } elseif ($list == "directions")
  {
    include "directionsPancakes.html";
    
  } else 
  {
      //default else in case something doesn't work to prevent breaking
    echo "3";
  }
  
} else 
{
  echo "0";
}