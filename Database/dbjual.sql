/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 100138
Source Host           : localhost:3306
Source Database       : dbjual

Target Server Type    : MYSQL
Target Server Version : 100138
File Encoding         : 65001

Date: 2019-03-25 09:14:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `kdbrg` varchar(5) NOT NULL,
  `brg_nama` varchar(50) NOT NULL,
  `brg_harga` float NOT NULL,
  `brg_stok` int(11) NOT NULL,
  `brg_kategori` varchar(50) NOT NULL,
  `brg_garansi` int(11) NOT NULL,
  `brg_create` datetime NOT NULL,
  `brg_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kdbrg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('BR001', 'Seagate Skyhawk 2TB Sata', '730000', '3', 'HARD DISK', '1', '2014-03-04 21:22:28', '2019-03-25 09:13:53');
INSERT INTO `barang` VALUES ('BR002', 'Seagate Barracuda 2TB', '745000', '5', 'HARD DISK', '0', '2014-03-04 21:22:28', '2019-03-19 12:46:46');
INSERT INTO `barang` VALUES ('BR003', 'VGEN DDR 3 - 4 GB PC 12800', '800000', '10', 'MEMORY', '0', '2014-03-04 21:22:28', '2019-03-19 12:46:53');
INSERT INTO `barang` VALUES ('BR004', 'TEAM DELTA DDR4 8GB (4GBx2) PC2400', '1520000', '12', 'MEMORY', '1', '2014-03-04 21:22:28', '2019-03-19 12:46:53');
INSERT INTO `barang` VALUES ('BR005', 'Ram DDR4 Laptop / Sodimm 4GB Team Elite 2666', '499000', '28', 'MEMORY', '1', '2019-03-19 09:39:47', '2019-03-19 12:46:54');

-- ----------------------------
-- Table structure for detail
-- ----------------------------
DROP TABLE IF EXISTS `detail`;
CREATE TABLE `detail` (
  `idtrans` varchar(10) NOT NULL,
  `kdbrg` varchar(5) NOT NULL,
  `detail_qty` int(11) NOT NULL,
  `detail_harga` float NOT NULL,
  `detail_create` datetime NOT NULL,
  `detail_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  KEY `fk_detail_transaksi` (`idtrans`),
  KEY `fk_detail_barang` (`kdbrg`),
  CONSTRAINT `fk_detail_barang` FOREIGN KEY (`kdbrg`) REFERENCES `barang` (`kdbrg`) ON UPDATE CASCADE,
  CONSTRAINT `fk_detail_transaksi` FOREIGN KEY (`idtrans`) REFERENCES `transaksi` (`idtrans`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail
-- ----------------------------

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `kdpel` varchar(5) NOT NULL,
  `pel_nama` varchar(50) NOT NULL,
  `pel_jk` int(2) NOT NULL,
  `pel_alamat` varchar(100) NOT NULL,
  `pel_telp` varchar(20) NOT NULL,
  `pel_kawin` int(2) NOT NULL,
  `pel_create` datetime NOT NULL,
  `pel_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kdpel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('PL001', 'SILFIANI SUHERMAN', '0', 'JL ANGGREK NELIMURNI II BLOK C/9 , JKB 11980', '08213243878', '0', '2014-03-30 06:00:38', '2019-03-19 09:42:33');
INSERT INTO `pelanggan` VALUES ('PL002', 'FRANKI SETYO WARGO', '1', 'JL MERUYA UTARA NO 23 A , RT 008/002 JKB 11620', '08213298654', '1', '2014-03-30 09:57:58', '2019-03-19 10:52:41');
INSERT INTO `pelanggan` VALUES ('PL003', 'ANDI NASRI MANSUR', '1', 'JL. KEBON MANGGA RT 011/03 NO 5 KEL CIPULIR KEC KEBAYORAN LAMA JAKARTA SELATAN 12230', '08524565987', '2', '2014-03-30 10:00:12', '2019-03-19 10:52:47');
INSERT INTO `pelanggan` VALUES ('PL004', 'AGUSTRIA YUDHASARI', '0', 'JL. KEBON BARU IV RT 002/09 NO 9 KEBON BARU KEC. TEBET JAKARTA SELATAN 12830', '08135497852', '0', '2019-03-19 09:35:22', '2019-03-19 10:52:51');

-- ----------------------------
-- Table structure for sementara
-- ----------------------------
DROP TABLE IF EXISTS `sementara`;
CREATE TABLE `sementara` (
  `idtrans` varchar(10) NOT NULL,
  `kdbrg` varchar(5) NOT NULL,
  `detail_qty` int(11) NOT NULL,
  `detail_harga` float NOT NULL,
  KEY `fk_detail_transaksi` (`idtrans`),
  KEY `fk_detail_barang` (`kdbrg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sementara
-- ----------------------------

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `idtrans` varchar(10) NOT NULL,
  `trans_tgl` date NOT NULL,
  `kdpel` varchar(5) NOT NULL,
  `trans_create` datetime NOT NULL,
  `trans_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idtrans`),
  KEY `fk_transaksi_pelanggan` (`kdpel`),
  CONSTRAINT `fk_transaksi_pelanggan` FOREIGN KEY (`kdpel`) REFERENCES `pelanggan` (`kdpel`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
