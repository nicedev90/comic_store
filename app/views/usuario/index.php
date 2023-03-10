<?php require APPROOT . '/views/usuario/partials/header.php'; ?>

<div class="flex flex-col p-4 space-y-5 bg-primary text-xl text-white">
<div class="p-5">
	Hola, <?php echo $_SESSION['user_nombre'] ?>

</div>


<a href="<?php echo URLROOT . '/usuarios/mi_galeria' ?>"> Ir a  mi galeria</a>

<a href="<?php echo URLROOT . '/users/logout' ?>"> Logout</a>
</div>



<?php foreach($data['comics'] as $comic): ?>

	<div class="mx-auto p-4 w-full md:w-1/2">
		<p class="text-xl bg-dark text-white"><?= $comic->nombre ?></p>
		<p class="text-xl bg-dark text-white"><?= $comic->genero ?></p>
		<p class="text-xl bg-dark text-white"><?= $comic->estado ?></p>
		<br>
				<a class="bg-cta text-dark" href="<?php echo URLROOT . '/usuarios/galeria/' . str_replace(" ","_",$comic->nombre) ?>"> Ver detalles</a>

		<br><br>
	</div>

<?php endforeach; ?>


<?php require APPROOT . '/views/usuario/partials/footer.php'; ?>