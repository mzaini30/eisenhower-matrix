<?php ob_start() ?>
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
<?php $slot = ob_get_clean() ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/base.php' ?>