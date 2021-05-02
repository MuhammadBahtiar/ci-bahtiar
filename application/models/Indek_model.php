<?php
defined ('BASEPATH') or exit ('No direct script acces allowed');
class Indek_model extends CI_Model
{
	public function get_data()
	{
		$mahasiswa = array(
			array(1, 171240000987, 'Abdillah Faqih', 'Laki-Laki', 2017, 'Dekave')
			, array(2, 171240000988, 'Ahmad Syarif', 'Laki-Laki', 2017, 'Dekave')
			, array(3, 171240000989, 'Ummi Qulsum', 'Perempuan', 2017, 'Teknik Sipil')
			, array(4, 181240000987, 'Abduh Somat', 'Laki-Laki', 2018, 'Sistem Informasi')
			, array(5, 181240000988, 'Soleh Mukarom', 'Laki-Laki', 2018, 'Sistem Informasi')
			, array(6, 181240000989, 'Siti Qomariah', 'Perempuan', 2018, 'Teknik Informatika')
			, array(7, 191240000894, 'Muhammad Bahtiar Noor Ihsan', 'Laki-Laki', 2019, 'Teknik Informatika')
		);
		return $mahasiswa;
	}
}