SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `usuario` (
    `id` int(10) NOT NULL,
    `nome` varchar(100) NOT NULL,
    `senha` varchar(150) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `post`(
    `id` int(10) NOT NULL,
    `id_categoria`int(10) NOT NULL,
    `nome` varchar(100) NOT NULL,
    `descricao` text NOT NULL 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `categoria`(
    `id_categoria` int(10) NOT NULL,
    `nome` varchar(100) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `usuario`
ADD PRIMARY KEY (`id`);

ALTER TABLE `post`
ADD PRIMARY KEY (`id`);

ALTER TABLE `categoria`
ADD PRIMARY KEY (`id_categoria`);

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;