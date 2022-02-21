<?php ob_start() ?>
	<div class="app">
		<table class="table table-bordered">
			<tbody>
				<tr>
					<td>
						<h2>Do</h2>
						<textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
					</td>
					<td>
						<h2>Plan</h2>
						<textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<h2>Delegate</h2>
						<textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
					</td>
					<td>
						<h2>Delete</h2>
						<textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="menu"> <!-- 38px -->
			<a href="https://play.google.com/store/apps/details?id=com.mzaini30.eisenhowermatrix" class="btn btn-outline-secondary btn-sm">review app</a>
			<button class="btn btn-outline-primary btn-sm">edit</button>
		</div>
	</div>

	<script>
		const tabel = document.querySelector('.table')
		tabel.style.height = `${window.innerHeight - 45}px`

		PetiteVue.createApp({
			
		}).mount('.app')
	</script>

	<style>
		.table {
			margin-bottom: 0;
		}
		h2 {
			font-size: 1.1rem;
		}
		.table td {
			width: 50%;
		}
		textarea.form-control {
			padding: .5rem;
			min-height: calc(1.5em + .75rem + 2px);
		}
		.btn-sm,
		textarea.form-control {
			font-size: .8rem;
		}
		.menu {
			padding: .5rem;
			display: flex;
			justify-content: space-between;
		}
	</style>
<?php $slot = ob_get_clean() ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/base.php' ?>