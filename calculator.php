<?php include 'includes/header.php'; ?>
 
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
<form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is:</p>
<?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
                echo "you need to select a method";
                break;
                case "Add":
                echo $result1 + $result2;
                break;
                case "Subtract":
                echo  $result1 - $result2;
                break;
                case "Multiply":
                echo  $result1 * $result2;
                break;
                case "Divide":
                echo  $result1 / $result2;
                break;
        }
    }
?>
<link rel="stylesheet" href="style.css"> 

</body>
</html>
