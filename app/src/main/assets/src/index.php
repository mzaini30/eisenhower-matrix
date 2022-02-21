<?php ob_start() ?>
	<div class="app" @vue:mounted='cek' v-cloak>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<td class="do">
						<h2>Do</h2>
						<textarea v-if='kunci' readonly class="form-control" name="" id="" cols="30" rows="10">{{ nilaiDo }}</textarea>
						<textarea v-else v-model='nilaiDo' class="form-control" name="" id="" cols="30" rows="10"></textarea>
					</td>
					<td class="plan">
						<h2>Plan</h2>
						<textarea v-if='kunci' readonly class="form-control" name="" id="" cols="30" rows="10">{{ nilaiPlan }}</textarea>
						<textarea v-else v-model='nilaiPlan' class="form-control" name="" id="" cols="30" rows="10"></textarea>
					</td>
				</tr>
				<tr>
					<td class="delegate">
						<h2>Delegate</h2>
						<textarea v-if='kunci' readonly class="form-control" name="" id="" cols="30" rows="10">{{ nilaiDelegate }}</textarea>
						<textarea v-else v-model='nilaiDelegate' class="form-control" name="" id="" cols="30" rows="10"></textarea>
					</td>
					<td class="delete">
						<h2>Delete</h2>
						<textarea v-if='kunci' readonly class="form-control" name="" id="" cols="30" rows="10">{{ nilaiDelete }}</textarea>
						<textarea v-else v-model='nilaiDelete' class="form-control" name="" id="" cols="30" rows="10"></textarea>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="menu"> <!-- 38px -->
			<a href="https://play.google.com/store/apps/details?id=com.mzaini30.eisenhowermatrix" class="btn btn-outline-secondary btn-sm">review app</a>

			<button v-if='kunci' @click='kunci = false' class="btn btn-outline-primary btn-sm">edit</button>
			<button v-else @click='simpan' class="btn btn-outline-success btn-sm">save</button>
		</div>
	</div>

	<script>
		const tabel = document.querySelector('.table')
		tabel.style.height = `${window.innerHeight - 45}px`

		const textarea = document.querySelectorAll('textarea')
		textarea.forEach(x => {
			x.style.height = `${window.innerHeight / 2 - 70}px`
		})

		PetiteVue.createApp({
			kunci: true,
			nilaiDo: '',
			nilaiPlan: '',
			nilaiDelegate: '',
			nilaiDelete: '',
			cek(){
				if (localStorage.do){
					this.nilaiDo = localStorage.do
				}
				if (localStorage.plan){
					this.nilaiPlan = localStorage.plan
				}
				if (localStorage.delegate){
					this.nilaiDelegate = localStorage.delegate
				}
				if (localStorage.delete){
					this.nilaiDelete = localStorage.delete
				}
			},
			simpan(){
				localStorage.do = this.nilaiDo
				localStorage.plan = this.nilaiPlan
				localStorage.delegate = this.nilaiDelegate
				localStorage.delete = this.nilaiDelete
				this.kunci = true
			}
		}).mount('.app')
	</script>

	<style>
		.table {
			margin-bottom: 0;
		}
		h2 {
			font-size: 1.1rem;
			text-align: center;
		}
		.table td {
			width: 50%;
		}
		textarea.form-control {
			padding: .5rem;
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
		.table td {
			color: white;
		}
		.table tr,
		.table td {
			border-color: transparent;
		}
		.form-control[readonly]{
			background-color: white;
		}
		.table .do {
			background-color: #22c55e; /* warna: 500 */
		}
		.table .plan {
			background-color: #3b82f6; /* warna: 500 */
		}
		.table .delegate {
			background-color: #f97316; /* warna: 500 */
		}
		.table .delete {
			background-color: #ef4444; /* warna: 500 */
		}
	</style>
<?php $slot = ob_get_clean() ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/base.php' ?>