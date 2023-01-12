

-- Host: 127.0.0.1

-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0





-- Banco de dados: `imoveis`


-- --------------------------------------------------------


-- Estrutura da tabela `imovel`


CREATE TABLE `imovel` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `metragem` varchar(255) DEFAULT NULL,
  `comodos` int(5) DEFAULT NULL,
  `localizacao` varchar(50) DEFAULT NULL,
  `cep` int(9) DEFAULT NULL,
  `areas_comuns` varchar(50) DEFAULT NULL,
  `vagas_automovel` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id`, `tipo`, `metragem`, `comodos`, `localizacao`, `cep`, `areas_comuns`, `vagas_automovel`) VALUES
(1, 'apartament', '10m', 2, NULL, 30810120, 'Varanda', 3),
(3, 'apartament', '10m', 2, NULL, 30810120, 'Varanda', 3),
(4, 'apartament', '10m', 2, NULL, 3081012, 'Varanda', 3),
(5, 'apartament', '10m', 2, NULL, 30810120, 'Varanda', 3),
(7, 'Casa', '22', 5, 'Avenida das Acácias - Palmares - 2ª Seção (Parque ', 32430110, 'Sim', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
