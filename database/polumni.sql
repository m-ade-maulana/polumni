-- --------------------------------------------------------
-- Host:                         185.229.118.64
-- Server version:               10.5.15-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table u1774902_db_polumni.tb_data_diri: ~0 rows (approximately)

-- Dumping data for table u1774902_db_polumni.tb_foto_profile: ~0 rows (approximately)

-- Dumping data for table u1774902_db_polumni.tb_lowongan_kerja: ~0 rows (approximately)

-- Dumping data for table u1774902_db_polumni.tb_pekerjaan: ~1 rows (approximately)
INSERT IGNORE INTO `tb_pekerjaan` (`id`, `id_account`, `nama`, `nama_perusahaan`, `bidang`, `jabatan`, `tanggal_masuk`, `tanggal_keluar`) VALUES
	(1, 394204, 'Safitri wulandari', 'RSAB HARAPAN KITA', 'Kesehatan', 'Administrasi', '0000-00-00', '0000-00-00');

-- Dumping data for table u1774902_db_polumni.tb_registered: ~36 rows (approximately)
INSERT IGNORE INTO `tb_registered` (`id`, `id_account`, `nama`, `tanggal_lahir`, `telepon`, `email`, `username`, `password`, `role`, `is_active`, `token`) VALUES
	(5, 19422, 'Neneng hudriyah', '1987-10-21', '', 'nenghoed@gmail.com', 'Nenghoed', '$2y$10$2wBzIJlsJgMw332irk/6fOfsxehgYb./CszziTwQS/RNSfc0GBHsW', 2, '0', ''),
	(6, 864646, 'wulandari', '1995-04-07', '', 'wulaaaaaaan@gmail.com', 'wulandari', '$2y$10$K7cZ2qeL7EO/Hp1YhYaEROxbWBk9hvtPlU0YlpvsxT9pem2U/FGFa', 2, '0', ''),
	(7, 916612, 'Mohammad Farhan Widjaya', '2002-04-01', '', 'wijaya.farhan147@gmail.com', 'FarhanWijaya', '$2y$10$UDGq//mSWVvI0pEXMDsL6eUr0qnW8wf7ffWM521QxEwAhTXy6qzhC', 2, '0', ''),
	(8, 129078, 'Reynaldi Putra Hasli', '2002-07-16', '', 'renaldyputrahasli@gmail.com', 'rabb1t', '$2y$10$XdHwc52jqRIvUS5adRuWEuIWHMS0y03Vnpt7VqnI4hxM0pbJ8Iqq.', 2, '0', ''),
	(9, 459712, 'Mohammad Farhan Widjaya', '2002-04-01', '', 'farhanboys.wijaya@gmail.com', 'Farhanwijaya01', '$2y$10$HznixtvdVjuNKNxUMOJieuw1EjErk2BFF39n/W0H8PT/alN3mlf/C', 2, '0', ''),
	(10, 226890, 'Dinda Friechua', '2002-07-12', '', 'dfriechia@gmail.com', 'Dinda Friechia', '$2y$10$gDbQVGLSC/nXVYrPp3AGwuFZcnv0FLjQDpCJp.z7KlXVlh0LpJcu2', 2, '0', ''),
	(11, 368956, 'Dedi Irawan', '1997-12-07', '', 'irawan202123@gmail.com', 'dewan12', '$2y$10$rOxBlKk6QlOPhiCBWw7t/.6dYGk4qIhN4XubM7sqVmAc4Ux41JGM.', 2, '0', ''),
	(12, 167930, 'Debora Costanza ', '2001-10-13', '', 'Hursepuny56@gmail.com', 'Debora_ch', '$2y$10$8OO.El.A6UGcLUr3dPledug51PI5gbPmyE5Se5SivMVc5dJ3aOku.', 2, '0', ''),
	(13, 144797, 'Nanda Nabila Sukmi', '2002-07-21', '', 'nandanabila58@gmail.com', 'Nandanabila_', '$2y$10$o91Ma0oQF2vSRkv7Y.BX.OZiiIwJDZCbX..xJjLSe.mYoRE//O5ta', 2, '0', ''),
	(14, 250065, 'Arjuna Dewa Taruna', '2022-02-26', '', 'dewataruna22412@gmail.com', 'ardeta05_', '$2y$10$odak4/ghXxwaoZib0noB7Og/fkT5XXj2fRLPdxKOk54VuRGqEXrP6', 2, '0', ''),
	(15, 19146, 'Rochmat Wahyu', '2022-02-26', '', 'rochmatwahyus@gmail.com', 'rochmatwahyus', '$2y$10$nrkkccQ6vQ78mmSO8daL.uWglQIbbYXLvhWkcGoYUUY3cd4DrOLK2', 2, '0', ''),
	(16, 781603, 'Arjuna Dewa Taruna', '2022-02-26', '', 'arjunadewataruna@gmail.com', 'Ardeta05', '$2y$10$6fs1QA7kT2N0PZwNvzW6JuWl1QjgqOwBajtpGW3I4Dq1tZfyyGr06', 2, '0', ''),
	(17, 83812, 'Siti Farah Dhibah', '2000-12-08', '', 'farahdhibah653@gmail.com', 'farahdhibah653', '$2y$10$jB9pyvPjD5CcHpw01oe9K.L6zoUzl.pc0dF8HXp0pSGKCgsUI8PVG', 2, '0', ''),
	(18, 744973, 'Arjuna Dewa Taruna', '2022-02-26', '', 'dewataruna704@gmail.com', 'ardeta_', '$2y$10$GcZnbEE68B7Ikou9bda15.FCEWmcWWxE/s7NgJNBKjoo0Dl.Er6GO', 2, '0', ''),
	(19, 185714, 'Hayya Dinnur', '1989-03-11', '', 'lordhayya@gmail.com', 'Hayya Dinnur', '$2y$10$w.4l8PdEYJ0Szv1HPJFzvuVvAqSUNUn3gIhQZJOdp1YmYNFXo3AdS', 2, '0', ''),
	(20, 751725, 'Luthpi Hidayat ', '2022-02-27', '', 'luthpi73@gmail.com', 'Hidayat', '$2y$10$ybZXKcIt61GVLVOw0FZnx.8aPqjBPZuvm/LmxOXrDpIvOXBuKCCQC', 2, '0', ''),
	(22, 844266, 'Ratih Puspita sari', '2022-02-27', '', 'ratih.vivi0917@gmail.com', 'Vivi ratih', '$2y$10$Wk.bY/BF.0tCaR5iLDY6ge3gAGWQK5TkDqdyKdHn.Q08T9IVzbyEC', 2, '0', ''),
	(23, 589272, 'Rahayu dwi sekar arum', '2022-02-27', '', 'rahayudwisekararum253@gmail.com', 'Aerumm', '$2y$10$IOY8RzQAe.If4hDqbJ3Vau08zDBoYYioinsL0849eBPOKpfAzlCvS', 2, '0', ''),
	(24, 166933, 'Nurhani', '1981-07-21', '', 'hanibaihaqi23@gmail.com', 'Nurhani', '$2y$10$knT5XfrjGMl/Jp0vmYxFPuP0tD/HAs7Dvoi5DVXRfKNc5jIPUrrtq', 2, '0', ''),
	(25, 188681, 'Yayah Fariyah ', '1981-05-13', '', 'yayahfariyah81@gmail.com', 'Yayah Fariyah', '$2y$10$x6w0ff7bD93QOtgRvgYL2uwlAdQn9Ra0JZ3fbdXhrK/TD7.Xaad1G', 2, '0', ''),
	(26, 873747, 'Salma', '2001-04-16', '', 'samlafdyh16@gmail.com', 'Safdyh', '$2y$10$GZjcFHjsXT27XMWRacOopOTNai6Gg4LiO32Sb.9PoKYhA9K8RmdVy', 2, '0', ''),
	(27, 455877, 'Salma', '2001-04-16', '', 'fadhiyah230@gmail.com', 'Salmafadhiyah', '$2y$10$B84PeWvvm5yNercr3j987.2/COWAKCSL28ih8SPf8t.JnFp7EBoWS', 2, '0', ''),
	(29, 454687, 'Dinda Friechia', '2002-07-12', '', 'friechiad@gmail.com', 'dindafriechia', '$2y$10$eQfILfam6cs.XlxWQcFlguz5foiujrNbQ2miFiHGLWJsX15X.0vPG', 2, '0', ''),
	(30, 488200, 'Shayhan Sagufta', '2002-09-26', '', 'sayhansagufta100@gmail.com', 'shayhan', '$2y$10$C3Ed9aJH/Cph2M5MWh6WuuqpJQKiDZyVhKEExvkEQ5/XbMglxVE3O', 2, '0', ''),
	(31, 304722, 'Muhammad Rifky Aditya', '2000-11-10', '', 'm.rifky.aditya.mra@gmail.com', 'mraditya1011', '$2y$10$5ENb0ER63vi3Ha6G7e2q8uuuy636wGddgPWPXWeATV6i.lxw9Z2be', 2, '0', ''),
	(32, 687413, 'Luthfiyani Cahya Rengganis', '2002-03-01', '', 'luthfiyani.cahya@gmail.com', 'Luthfiyani Cahya', '$2y$10$qdbBCJB.oBYywZUAs.yV8evaW2bqnB84Wl0ZxihGOqJ9dqehoDStm', 2, '0', ''),
	(33, 416852, 'Agus Triyadi', '2022-02-27', '', 'Agustriyadi170894@gmail.com', 'Agustr', '$2y$10$uG78ywIBo96PQA51RbpIfuHdCxEIAzmTuTFqdutU0QC.Vg8LQm16q', 2, '0', ''),
	(34, 401545, 'Stefanny Hennidar', '1988-09-30', '', 'stefanny.hennidar@gmail.com', 'StefannyHennidar', '$2y$10$OtLKCxfATd/boQyo0ctnhunGYKyy1TokGa9i8nItogmN9nYcss0Q2', 2, '0', ''),
	(35, 279819, 'Rodiatul azizah', '1994-08-28', '', 'rodiatulazizah@gmail.com', 'Rodiatul azizah', '$2y$10$AhhXfn0f0MtuMJqtHueQAujafBest71/6KyHj9iGKBmDVKe9SzFJa', 2, '0', ''),
	(36, 108388, 'Gilang Chandra Saputra', '1998-09-25', '', 'chickenricemayo@gmail.com', 'Gilangchandras', '$2y$10$uMGqfidYoAx.ePeZB9Ama.Ao3cjr2ejBpntWkJJQjszVCebNfamtS', 2, '0', ''),
	(37, 394204, 'Safitri wulandari', '1988-09-18', '', 'safitri_wd37@yahoo.co.id', 'WoeLan', '$2y$10$t6SH2AnXiepzVCZM7BnWW.zD5QjzsbrI7/CNBOWrxYyEExydL3nd2', 2, '0', ''),
	(38, 538442, 'M Ade Maulana', '1992-09-06', '089525019512', 'ademaulana464@gmail.com', 'adhemaul', '$2y$10$2QMTi3p4/aSnGPipGk/3nuymJEniRTItKXu2NRIw/NAmNQPoGShIq', 2, '0', '20fa8f10fd2f2b6282915bb9cbb02932757fd4d0'),
	(39, 708128, 'Hendrawan', '0000-00-00', '', 'hendrawanhpm@gmail.com', 'Hendrawan', '$2y$10$PP5umWs4i9E8EWStbLDd0eA1yBQqmx4xnEClOY6K14fxTlbCY1DG.', 2, '1', 'c88093da441365508a05d7701d492887aa3b8bae'),
	(40, 242498, 'Sisca setyawati ', '0000-00-00', '085819939095', 'siscasetyawati123@gmail.com', 'Setyawati', '$2y$10$UEZMH8LDZW82FdUfnp/yIu69R18YIeD/CmfdnbAuEM93NZqZwwpaa', 2, '0', 'e8f8fb8fcc1a74c3ce19540de11c1211c8405684'),
	(41, 881873, 'M Ridwan Fauzi', '2001-07-15', '081654901350', 'ridwanridwan13@gmail.com', 'uwan15_', '$2y$10$oFvfU0kknmw/8kb/v6Pgm.Ro1CZQANAbuvzby5Y4ZZKV74hCfgODq', 2, '0', '0b3e5623f5dc9269c80dd7ee5ab6dbf319916976'),
	(42, 904506, 'M Ade Maulana', '2022-08-16', '089525019512', 'adhemaulana464@gmail.com', 'admin_nusteng', '$2y$10$/I7FJpe3ZW0Q6RM11N69..eyIaxX6wJWCD8sau53kyqNp5BHTry.y', 2, '0', '35375f1a52baa4bca934da7e7ac9120dec953788');

-- Dumping data for table u1774902_db_polumni.tb_universitas: ~3 rows (approximately)
INSERT IGNORE INTO `tb_universitas` (`id`, `id_account`, `nama`, `nama_kampus`, `nama_jurusan`, `jenjang`, `tanggal_masuk`, `tanggal_keluar`) VALUES
	(1, '526099', 'Maulana', 'Nusantara', 'Teknik Informatika', 'S1', '2022-02-01', '2022-02-21'),
	(2, '129078', 'Reynaldi Putra Hasli', 'Binsa Sarana Informatika', 'Teknologi Informasi', 'Sarjana', '2021-09-09', '0000-00-00'),
	(3, '394204', 'Safitri wulandari', 'BSI', 'Komputer Akuntansi', 'D3', '0000-00-00', '0000-00-00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
