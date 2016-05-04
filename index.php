<center><?php


class Me
{

	public $Name;
	public $Age;


	function TextBox() 
	{
		echo "<form action='index.php' method='post'>
		<input type='text' name='name' autofocus placeholder='Name'><br>";
		echo "<input type='text' name='age' placeholder='Age'><br>";
		echo "<input type='submit' value='submit'>
		</form>";

		if (isset($_POST['name']))
		{
			if (empty($_POST['name']) || empty($_POST['age'])) 
			{
				echo "<span style='color:red'>empty</span> </p>";
			}

			else 
			{
				  
			}
			
		}
	}

	function Name()
	{
		$this -> Name = $_POST['name'];
		$this -> Age = $_POST['age'];
		echo "Hello My Name is: " . $this -> Name . "</p>";
		$this -> Age();

	}

	function Age() 
	{

		echo "I am " . $this -> Age . "yrs Old";

		if ($this->Age == 18) 
		{

			$this -> Bye();

		}
	}

	function Bye() 
	{

		echo "</p>Goodye";

	}

}

$Me = new Me();
$Me -> TextBox();
$Me -> Name();

?></center>