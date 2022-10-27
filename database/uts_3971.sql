-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 09:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_3971`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(50) NOT NULL,
  `Nama_Dosen` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `Nama_Dosen`, `Tanggal_Lahir`, `JK`, `No_Telp`, `Alamat`) VALUES
('10.10.10', 'Pak Firman', '1984-01-01', 'L', '085025376288', 'Sleman'),
('11.11.11', 'Pak Ahlihi', '1979-11-15', 'L', '085727555321', 'Magelang'),
('12.12.12', 'Pak Kusnawi', '1980-11-06', 'L', '085727272718', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Id_Jadwal` int(11) NOT NULL,
  `Kode_Matakuliah_Jadwal` varchar(50) NOT NULL,
  `NIP_Jadwal` varchar(50) NOT NULL,
  `Kode_Ruangan_Jadwal` varchar(50) NOT NULL,
  `Kode_Jurusan_Jadwal` varchar(50) NOT NULL,
  `Hari` varchar(50) NOT NULL,
  `Jam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`Id_Jadwal`, `Kode_Matakuliah_Jadwal`, `NIP_Jadwal`, `Kode_Ruangan_Jadwal`, `Kode_Jurusan_Jadwal`, `Hari`, `Jam`) VALUES
(19, 'MK05', '10.10.10', '1', '00S3TI', 'Senin', '08:50-10:30'),
(20, 'MK08', '11.11.11', '7', '00S2TI', 'Rabu', '10:40-12:20'),
(21, 'MK09', '12.12.12', '5', '00S1TI', 'Kamis', '15:30-17:10'),
(22, 'MK05', '10.10.10', '10', '00S2TI', 'Jumat', '20:50-22:30'),
(23, 'MK07', '12.12.12', '2', '00S3TI', 'Selasa', '19:00-20:40'),
(24, 'MK02', '11.11.11', '8', '00D3TI', 'Sabtu', '13:20-15:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `Kode_Jenjang` varchar(50) NOT NULL,
  `Nama_Jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`Kode_Jenjang`, `Nama_Jenjang`) VALUES
('00D1', 'D1'),
('00D2', 'D2'),
('00D3', 'D3'),
('00S1', 'S1'),
('00S2', 'S2'),
('00S3', 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `Kode_Jurusan` varchar(50) NOT NULL,
  `Nama_Jurusan` varchar(50) NOT NULL,
  `Kode_Jenjang_Jrs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Kode_Jurusan`, `Nama_Jurusan`, `Kode_Jenjang_Jrs`) VALUES
('00D1TI', 'D1TI', '00D1'),
('00D2TI', 'D2TI', '00D2'),
('00D3TI', 'D3TI', '00D3'),
('00S1TI', 'S1TI', '00S1'),
('00S2TI', 'S2TI', '00S2'),
('00S3TI', 'S3TI', '00S3');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(50) NOT NULL,
  `Nama_Mahasiswa` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Kode_Jurusan_Mhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama_Mahasiswa`, `Tanggal_Lahir`, `JK`, `No_Telp`, `Alamat`, `Kode_Jurusan_Mhs`) VALUES
('17.01.3939', 'Ramadhan Agung Rifai', '2000-01-03', 'L', '086988467172', 'Jogja', '00D3TI'),
('17.01.3971', 'Hilmi Afifi Al-Atsari', '1999-05-15', 'L', '085728518982', 'Klaten', '00S3TI');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `Kode_Matakuliah` varchar(50) NOT NULL,
  `Nama_Matakuliah` varchar(50) NOT NULL,
  `SKS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`Kode_Matakuliah`, `Nama_Matakuliah`, `SKS`) VALUES
('MK01', 'OS Fundamentals (T)', 2),
('MK02', 'Struktur Data (T)', 2),
('MK03', 'Jaringan Komputer (P)', 4),
('MK04', 'OS Fundamentals (P)', 2),
('MK05', 'Perancangan Web (P)', 4),
('MK06', 'Metodologi (T)', 2),
('MK07', 'Basis Data (T)', 2),
('MK08', 'Struktur Data (P)', 2),
('MK09', 'Basis Data (P)', 2),
('MK10', 'B Indonesia', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `Id_Nilai` int(11) NOT NULL,
  `NIM_Nilai` varchar(50) NOT NULL,
  `Kode_Matakuliah_Nilai` varchar(50) NOT NULL,
  `Nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`Id_Nilai`, `NIM_Nilai`, `Kode_Matakuliah_Nilai`, `Nilai`) VALUES
(6, '17.01.3971', 'MK05', 'C'),
(7, '17.01.3939', 'MK05', 'D'),
(8, '17.01.3939', 'MK02', 'B'),
(9, '17.01.3971', 'MK02', 'A'),
(10, '17.01.3939', 'MK08', 'B'),
(11, '17.01.3971', 'MK08', 'A'),
(12, '17.01.3939', 'MK07', 'B'),
(13, '17.01.3939', 'MK09', 'D'),
(14, '17.01.3971', 'MK07', 'A'),
(15, '17.01.3971', 'MK09', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `Kode_Ruangan` varchar(50) NOT NULL,
  `Nama_Ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`Kode_Ruangan`, `Nama_Ruangan`) VALUES
('1', '02.04.01'),
('10', '02.04.10'),
('2', '02.04.02'),
('3', '02.04.03'),
('4', '02.04.04'),
('5', '02.04.05'),
('6', '02.04.06'),
('7', '02.04.07'),
('8', '02.04.08'),
('9', '02.04.09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Id_Usergroup_User` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` varchar(150) NOT NULL DEFAULT 'ids.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Id_Usergroup_User`, `Username`, `Password`, `Foto`) VALUES
(1, 1, 'admin', '$2y$10$V7zDd2Fz3QBmWFz3UnZBM.vjDK.AOTTjIdssUY8rhcBjEEJrxY7ma', 'ids.jpg'),
(24, 2, '10.10.10', '$2y$10$TQyBzf9qACjEgOFnvLYBROgVagzhSUg0pBUMNnAzLgHJMFOHmo1Oa', 'ids.jpg'),
(25, 3, '17.01.3971', '$2y$10$xCQgnfQRfdElS26z5LSCdu9LRhI3vJbClp10dzcRm1/aM9EwvYC.q', 'ids.jpg'),
(26, 2, '11.11.11', '$2y$10$ekXMOZUwDCxKCu8hEQ/fE.1HcoSCOABzDpj2gqKISvLWmqiE4QgeO', 'ids.jpg'),
(29, 2, '12.12.12', '$2y$10$5MTtTeZAGtRJG4Dx9luWXuDbmv2ByfJ4aa/CH0Q6Jy1w4odfTqHcO', 'ids.jpg'),
(30, 3, '17.01.3939', '$2y$10$x0SfwpOnjQhv.wL/3ybv8uMxj5tz/qwv655Ngyp94dIKwxiyY.aKe', 'ids.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `Id_Usergroup` int(11) NOT NULL,
  `Nama_Usergroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`Id_Usergroup`, `Nama_Usergroup`) VALUES
(1, 'Administrator'),
(2, 'Dosen'),
(3, 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Id_Jadwal`),
  ADD KEY `FK_jadwal_dosen` (`NIP_Jadwal`),
  ADD KEY `FK_jadwal_ruangan` (`Kode_Ruangan_Jadwal`),
  ADD KEY `FK_jadwal_matakuliah` (`Kode_Matakuliah_Jadwal`),
  ADD KEY `FK_jadwal_jurusan` (`Kode_Jurusan_Jadwal`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`Kode_Jenjang`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Kode_Jurusan`),
  ADD KEY `FK_jurusan_jenjang` (`Kode_Jenjang_Jrs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `FK_mahasiswa_jurusan` (`Kode_Jurusan_Mhs`),
  ADD KEY `Kode_Jurusan_Mhs` (`Kode_Jurusan_Mhs`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`Kode_Matakuliah`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Id_Nilai`),
  ADD KEY `FK_nilai_mahasiswa` (`NIM_Nilai`),
  ADD KEY `FK_nilai_matakuliah` (`Kode_Matakuliah_Nilai`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`Kode_Ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `FK_user_usergroup` (`Id_Usergroup_User`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`Id_Usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `Id_Jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `Id_Nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `Id_Usergroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_jadwal_dosen` FOREIGN KEY (`NIP_Jadwal`) REFERENCES `dosen` (`NIP`),
  ADD CONSTRAINT `FK_jadwal_jurusan` FOREIGN KEY (`Kode_Jurusan_Jadwal`) REFERENCES `jurusan` (`Kode_Jurusan`),
  ADD CONSTRAINT `FK_jadwal_matakuliah` FOREIGN KEY (`Kode_Matakuliah_Jadwal`) REFERENCES `matakuliah` (`Kode_Matakuliah`),
  ADD CONSTRAINT `FK_jadwal_ruangan` FOREIGN KEY (`Kode_Ruangan_Jadwal`) REFERENCES `ruangan` (`Kode_Ruangan`);

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `FK_jurusan_jenjang` FOREIGN KEY (`Kode_Jenjang_Jrs`) REFERENCES `jenjang` (`Kode_Jenjang`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `FK_mahasiswa_jurusan` FOREIGN KEY (`Kode_Jurusan_Mhs`) REFERENCES `jurusan` (`Kode_Jurusan`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK_nilai_mahasiswa` FOREIGN KEY (`NIM_Nilai`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`Kode_Matakuliah_Nilai`) REFERENCES `matakuliah` (`Kode_Matakuliah`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_usergroup` FOREIGN KEY (`Id_Usergroup_User`) REFERENCES `usergroup` (`Id_Usergroup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
