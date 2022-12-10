<?

/*recipe loader for tp8 php*/

$name = $_GET["recipeName"];
$list = $_GET["recipeList"];

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
    echo "1";
  }
  
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
    echo "2";
  }

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
    echo "3";
  }
  
} else 
{
  echo "0";
}