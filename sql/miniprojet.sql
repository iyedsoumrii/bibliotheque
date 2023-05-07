CREATE DATABASE miniprojet;


CREATE TABLE IF NOT EXISTS abonne (
  id_abonne int(3) NOT NULL AUTO_INCREMENT,
  prenom varchar(15) NOT NULL,
  PRIMARY KEY (id_abonne)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS emprunt (
  id_emprunt int(3) NOT NULL AUTO_INCREMENT,
  id_livre int(3) DEFAULT NULL,
  id_abonne int(3) DEFAULT NULL,
  date_sortie date NOT NULL,
  date_rendu date DEFAULT NULL,
  PRIMARY KEY (id_emprunt),
  KEY id_livre (id_livre),
  KEY id_abonne (id_abonne)
) ENGINE=InnoDB DEFAULT CHARSET=latin1  ;


CREATE TABLE IF NOT EXISTS livre (
  id_livre int(3) NOT NULL AUTO_INCREMENT,
  auteur varchar(25) NOT NULL,
  titre varchar(30) NOT NULL,
  fichier varchar(30) NOT NULL,
  PRIMARY KEY (id_livre)
) ENGINE=InnoDB DEFAULT CHARSET=latin1  ;


CREATE TABLE `tbl_member` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);


ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
