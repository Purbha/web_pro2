/*
Navicat MySQL Data Transfer

Source Server         :  Lokal
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : dbjual

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2014-03-30 16:25:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `barang`
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `kdbrg` varchar(5) NOT NULL,
  `brg_nama` varchar(50) DEFAULT NULL,
  `brg_harga` float DEFAULT NULL,
  `brg_stok` int(11) DEFAULT NULL,
  `brg_kategori` varchar(50) DEFAULT NULL,
  `brg_garansi` int(11) DEFAULT NULL,
  `brg_create` datetime DEFAULT NULL,
  `brg_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kdbrg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('BR001', 'Seagate Barracuda 500GB', '350000', '7', 'HARD DISK', '1', '2014-03-04 21:22:28', '2014-03-04 21:22:34');
INSERT INTO `barang` VALUES ('BR002', 'Western Digital', '400000', '5', 'HARD DISK', '0', '2014-03-04 21:22:28', '2014-03-04 21:41:30');
INSERT INTO `barang` VALUES ('BR003', 'Sandisk 16GB', '145000', '10', 'USB FLASH DISK', '0', '2014-03-04 21:22:28', '2014-03-04 21:41:33');
INSERT INTO `barang` VALUES ('BR004', 'Nexus 16GB', '150000', '12', 'USB FLASH DISK', '1', '2014-03-04 21:22:28', '2014-03-04 21:40:47');

-- ----------------------------
-- Table structure for `pelanggan`
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `kdpel` varchar(5) NOT NULL,
  `pel_nama` varchar(50) DEFAULT NULL,
  `pel_jk` int(2) DEFAULT NULL,
  `pel_alamat` varchar(100) DEFAULT NULL,
  `pel_telp` varchar(20) DEFAULT NULL,
  `pel_kawin` int(2) DEFAULT NULL,
  `pel_create` datetime DEFAULT NULL,
  `pel_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kdpel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('PL001', 'Adi Laksono', '1', 'Jalan Jatiwaringin Raya No.1 Jakarta Timur', '08213243878', '0', '2014-03-30 06:00:38', '2014-03-30 06:00:38');
INSERT INTO `pelanggan` VALUES ('PL002', 'Saptono Nugroho', '1', 'Jalan Anggrek No.23 Kebayoran Lama Jakarta Selatan', '08213298654', '1', '2014-03-30 09:57:58', '2014-03-30 09:57:58');
INSERT INTO `pelanggan` VALUES ('PL003', 'Nety Nurhayati', '0', 'Jalan Raflesia No.12 Podok Gede Bekasi', '08561939419', '2', '2014-03-30 10:00:12', '2014-03-30 10:00:12');
INSERT INTO `pelanggan` VALUES ('PL005', 'Gilang Ramadan', '1', 'Jalan Pegangsaaan No.23 Jakarta Pusat', '08132434564', '0', '2014-03-30 11:24:13', '2014-03-30 11:24:13');
