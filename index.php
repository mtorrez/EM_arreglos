<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arreglos</title>
</head>
<body>
	<h1>Arreglos en PHP</h1>
	<p>Los arreglos son un tipo de variable que permite agrupar diferentes elementos y manejarlos como si fueran una sola variable. En otros términos un arreglo de una lista de variables.</p>
	<p>Una vez que que un arreglo sea creado, se pueden agregar, editar eliminar sus elementos. Los elementos de un arreglo pueden ser de cualquier tipo y se pueden mezclar, es decir no todos los elementos de un arreglo deben ser del mismo tipo. Los elementos en un arreglo se acceden usando una llave, para esto existen dos tipos de llaves y por lo tanto dos tipos de arreglos en PHP, los numéricos y los asociativos.</p>
	<p>Los arreglos numéricos son a los que se acceden con números a los datos que guardan, el primer dato tendría como numero el 0, el segundo el 1 y así sucesivamente. Los arreglos asociativos poseen un nombre sobre cada dato y con ese nombre es que se accede al dato especifico.</p>
	<h2>Crear un arreglo</h2>
	<p>Para crear un arreglo se hace uso de la función array(). Esta puede tomar de cero a varios parámetros y retorna un arreglo el cual es asignado a una variable con el operado de igualación =. Si la función recibe parámetros, entonces el arreglo será creado con estos valores. Los arreglos en PHP cambian su tamaño dinámicamente dependiendo la cantidad de datos que tengan, por lo tanto no es necesario establecer un tamaño al momento de su creación como en otros lenguaje.</p>
	<pre>
		$arreglo = array();
		$arreglo1 = array('Uno', 'dos', 'tres','cuatro','cinco');
	</pre>
	<h2>Arrays numericos</h2>
	<?php 
	$arreglo = array('Uno', 'dos', 'tres','cuatro');
	$arreglo[4] ="Cinco";
	$arreglo[] = "Diez";
	?>
	<p>Los elementos del arreglo son:</p>
	<ul>
		<?php for($i = 0; $i < count($arreglo); $i++){ ?>
		<li><?php echo $arreglo[$i]; ?></li>
		<?php } ?>
	</ul>
	<h2>Otro ejemplo</h2>
	<?php 
	$ciudades = array('Sucre','La Paz','Cochabamba');
	$ciudades[] = 'Oruro';
	$ciudades[] = 'Tarija';
	?>
	<p>Los datos de el arreglo $ciudades son:</p>

	<?php 
	for($i = 0; $i < count($ciudades); $i++) {
		echo "<li>".$ciudades[$i]."</li>";
	}
	?>

	<p>Otra forma de recorrer el arreglo</p>
	<?php 
	foreach ($ciudades as $key => $value) {
		echo "<li> clave: ".$key." valor: ".$value;
	}

	?>
	<h2>Array asociativos</h2>
	<?php 
	$paises = array('bolivia' => 'Sucre',
		'brasil' => 'Brasilea',
		'paraguay' => 'Asunción');
		?>
		<p>Los datos del arreglo $paises son: </p>
		<ul>
			<?php 
			foreach ($paises as $indice => $valor) {
				echo "<li>Pais: ". $indice ." Capital: " .$valor."</li>";
			}

			?>
		</ul>

	</body>
	</html>
