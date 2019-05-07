
CREATE TABLE `tb_contato` (
  `id_contato` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`id_contato`);


ALTER TABLE `tb_contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
