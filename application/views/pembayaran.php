<div class="container-fluid">
	<diiv class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "Total Belanja Anda : Rp. ",number_format($grand_total,00, ',','.');
				
				?>



			</div><br><br>

				<h3>input Alamat Pengiriman dan Pembayaran</h3>
				<form method="POST" action="<?php echo base_url()?>dashboard/proses_pesanan">
			
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
					</div>


					<div class="form-group">
						<label>Alamat Lengkap</label>
						<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
					</div>


					<div class="form-group">
						<label>No Telepon</label>
						<input type="text" name="no_telp" placeholder="Nomor Telepon" class="form-control">
					</div>

					<div class="form-group">
						<label>Jasa Pengiriman</label>
						<select class="form-control">
							<option>JNE</option>
							<option>TIKI</option>
							<option>Pos INDONESIA</option>
							<option>GOJEK</option>
							<option>GRAB</option>
						</select>
					</div>


					<div class="form-group">
						<label>Pilih Bank</label>
						<select class="form-control">
							<option>BCA - XXXXXXX</option>
							<option>BNI - XXXXXXXX</option>
							<option>BRI - XXXXXXXX</option>
							<option>MANDIRI - XXXXX</option>
						</select>
					</div>

					<button type="submit" class="btn btn-sm btn-primary">Pesan</button>
			</form>
			<?php 
			}else{
				echo "Keranjang Belanja Anda Masih Kosong";
			}
			?>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
