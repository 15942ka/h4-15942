<!DOCTYPE html>
<html>

<style>
div {
	
	border-radius: 30px;
    
    padding: 20px;
}
input[type=Color] {
    margin: 5px 5px 4px 0px ;
    border-style: dashed solid;
    width: 8%;
}
input[type=Number] {
    margin: 5px 5px 4px 0px ;
    border-style: dashed solid;
    width: 8%;
}
input[type=submit] {
    margin: 5px 5px 4px 100px ;
    border: none;
    border-width: 8px;
    
}
</style>

<body>

<h1> Survey Form and WebSQL </h1>



<div>
<form action="action_page.php">
  Color:
  <input type="Color" name="favcolor" value="#ff0000"> <br>
  
  Number:
  
  <input type="Number" name="quantity" min="0" max="130"><br>
  <br>
  <input type="submit" value="Save"><br>
</form>

</div>


</body>
</html>
