-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 01-Jun-2019 às 18:17
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgpro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acabamento`
--

CREATE TABLE `acabamento` (
  `id_acabamento` int(11) NOT NULL,
  `nome_acabamento` varchar(30) NOT NULL,
  `descricao_acabamento` varchar(150) NOT NULL,
  `preco_acabamento` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acabamento`
--

INSERT INTO `acabamento` (`id_acabamento`, `nome_acabamento`, `descricao_acabamento`, `preco_acabamento`) VALUES
(1, 'Sem Acabamento', 'Material sem acabamento', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexos`
--

CREATE TABLE `anexos` (
  `id_anexos` int(11) NOT NULL,
  `anexo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caminho_anexo` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `producao_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `tipo_pessoa` int(1) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro_cliente` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `sexo`, `tipo_pessoa`, `documento`, `telefone`, `celular`, `email`, `data_cadastro_cliente`) VALUES
(1, 'Marcelo', NULL, 0, '', '+55(21)2606-3333', '+55(22)9 8818-9303', 'marcelomotta.art@gmail.com', 2147483647),
(2, 'Lalá', NULL, 1, '260.546.598-46', '+55(21)3616-4989', '', '', 2147483647),
(3, 'Cliente 12', NULL, 0, '125.000.300-36', '', '+55(22)9 8482-9382', 'desenvolvimento@marcelomotta.com', 2147483647),
(4, 'Cliente 2', NULL, 1, '123.600.696-66', '+55(21)3245-6666', '+55(22)9 8658-5565', 'cliente2@', 2147483647),
(5, 'Cliente 3', NULL, 2, '31.223.300/0001-56', '+55(22)2604-5465', '+55(22)9 8885-6544', 'marcelomotta.art@gmail.com', 2147483647),
(6, 'Novo Cliente', NULL, 1, '123.423.422-23', '+55(25)2522-3232', '+55(23)9 2342-3222', '', 2147483647),
(7, 'Jozé', NULL, 2, '22.312.123/0001-56', '', '', 'asdfasd@cliente.com', 2147483647),
(8, 'Ziraldo', NULL, 1, '123.123.424-25', '', '+55(21)9 5565-4687', '', 2147483647),
(13, 'Cliente 14', NULL, 0, '', '', '', 'desenvolvimento@marcelomotta.com', 2147483647),
(18, 'Testando Testando', NULL, 0, '', '', '', '', 2147483647),
(21, 'outro', NULL, 0, '', '', '', '', 2147483647),
(22, 'Capacitados', NULL, 0, '', '', '', '', 2147483647),
(23, 'Andar', NULL, 0, '', '', '', '', 2147483647),
(31, 'Novo Teste ae', NULL, 1, '222.222.222-23', '', '', '', 2147483647),
(33, 'Preciso Dizer', NULL, 1, '___.___.___-__', '', '', 'ta@massa.pacarai', 2147483647),
(34, 'OP', NULL, 1, '222.222.222-22', '', '', 'email@validado.com', 2147483647),
(35, 'Jyraia', NULL, 1, '232.323.232-22', '+55(22)2604-6565', '+55(22)9 8886-8545', 'validando@teste.c', 0),
(36, 'Super Novo teste', NULL, 1, '121.212.121-21', '', '+55(22)9 3234-4223', '', 2147483647),
(37, 'Jyraia 22', NULL, 1, '232.323.232-32', '', '', '', 2147483647),
(38, 'Outro 22', NULL, 0, '', '', '', '', 0),
(39, 'Outro jeca', NULL, 0, '', '', '', '', 2147483647),
(40, 'Jyraia 22 ataca novamente s', NULL, 0, '234.252.323-42', '', '', '', 2147483647),
(41, 'adenotsss', NULL, 0, '', '', '', 'marcelomotta@outlook.com.br', 2147483647),
(42, 'Novo teste', NULL, 0, '', '', '', '', 2147483647),
(43, 'Outro', NULL, 0, '', '', '', '', 2147483647),
(44, 'aeaeae', NULL, 0, '', '', '', 'validando@t', 2147483647),
(45, 'ace', NULL, 0, '', '', '', '', 2147483647),
(47, 'abc', NULL, 0, '', '', '', 'marcelomotta@outlook.com.br', 2147483647),
(69, 'Jyraia', NULL, 0, '', '', '', 'super@teste.com', 0),
(71, 'Outro', NULL, 1, '123.412.312-42', '', '+55(22)9 2323-3233', 'marcelomotta@outlook.com.br', 0),
(72, 'Novo Teste', NULL, 1, '123.445.232-34', '+55(22)3224-4444', '+55(22)9 3234-2344', 'superdom@teste.com', 0),
(76, 'teste serio', NULL, 1, '222.223.333-33', '', '', 'marcelomotta@outlook.com.br', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_empresa`
--

CREATE TABLE `dados_empresa` (
  `id_emissor` int(11) NOT NULL,
  `nome_emissor` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnpj_emissor` int(50) DEFAULT NULL,
  `website_emissor` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_emissor` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone_emissor` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco_id_emissor` int(11) DEFAULT NULL,
  `url_logo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL,
  `rua` varchar(80) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `referencia` varchar(150) DEFAULT NULL,
  `numero` int(30) NOT NULL,
  `uf` int(11) NOT NULL,
  `cep` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_endereco`, `rua`, `bairro`, `cidade`, `referencia`, `numero`, `uf`, `cep`) VALUES
(1, 'teste ', '1234', 'SG', '', 0, 19, 0),
(3, 'teste 3', 'qqqqqqqqqq', 'qqqq', '', 0, 14, 0),
(4, 'teste ', 'rrrrrrrrrrr', 'qqqq', '', 0, 18, 0),
(5, 'teste 3', 'sdsds', 'SG', '', 0, 18, 0),
(6, 'novo teste de rua', 'sdsds', 'SG', '', 0, 18, 0),
(7, 'Rua ali', 'bairro ali', 'outra la', 'um aqui', 2123, 19, 123123),
(8, 'Novo Endereço', 'outro bairro', 'mesma cidade', '', 0, 17, 0),
(9, 'teste de captação', 'valores', 'de estados', '', 0, 19, 0),
(11, 'Rua ali novo teste', 'teste', 'outra la', '', 0, 19, 123123),
(12, 'anfitriao', 'generoso', 'boa praça', '', 0, 18, 0),
(13, 'Ultimato', 'Borne', 'boa praça', '', 0, 9, 1255555),
(14, 'Ipanema Beach Paradise', 'Coca', 'No mundo', '', 123, 6, 252525),
(15, 'Foi ali e volta Ja', 'Ja', 'Jo', 'Soares', 0, 16, 0),
(16, 'Rua ali novo teste', 'aaaa', 'outra la', '', 123123123, 19, 123123),
(17, 'Rua ali novo teste', 'aaaa', 'outra la', '', 123123123, 19, 123123),
(28, 'teste o ajax', 'oia', 'ae', '', 0, 19, 0),
(29, 'teste o ajax', 'oia', 'ae', '', 0, 19, 0),
(30, 'Ipanema Beach ', 'Paradise', 'No mundo', 'coca', 0, 19, 252525),
(31, 'Ipanema Beach ', 'Paradise', 'No mundo', 'coca', 0, 19, 252525),
(32, 'Rua ali novo teste', 'outro bairro', 'outra la', '', 0, 19, 123123),
(33, 'Rua ali novo teste2', 'outro bairro', 'outra la', '', 0, 19, 123123),
(34, 'Rua ali novo teste3', 'outro bairro', 'outra la', '', 0, 19, 123123),
(35, 'Ipanema Beach', 'el', 'No mundo', '', 0, 19, 252525),
(36, 'Ipanema Beach', 'el', 'No mundo', '', 0, 19, 252525),
(37, 'eldorado', '123', 'quatro', 'cinco', 0, 19, 0),
(38, 'eldorado', '123', 'quatro', 'cinco', 0, 19, 0),
(39, 'abc', 'sdsds', 'outra la', '', 0, 19, 123123),
(40, 'Rua ali novo teste', 'ss', 'outra la', '', 0, 19, 123123),
(41, 'Rua ali novo teste', '23', 'outra la', '', 0, 19, 123123),
(42, 'Rua ali novo teste', '23', 'outra la', '', 0, 19, 123123),
(43, 'Ipanema Beach Paradise', '2332', 'No mundo', '', 0, 6, 252525),
(44, 'abc', 'sds', 'outra la', '', 0, 19, 123123),
(45, 'abc', 'ssssssssssssss', 'outra la', '', 0, 19, 123123),
(46, 'Ipanema Beach Paradise', 's', 'No mundo', '', 0, 6, 252525),
(47, 'Ipanema Beach Paradise', '2222222222', 'No mundo', '', 0, 6, 252525),
(48, 'abc', 'ddd', 'outra la', '', 0, 19, 123123),
(49, 'Rua ali novo teste', '222222222', 'outra la', '', 0, 19, 123123),
(50, 'Ipanema Beach Paradise', 's', 'No mundo', '', 0, 6, 252525),
(51, 'Ipanema Beach Paradise', 'outro bairro', 'No mundo', '', 0, 6, 252525),
(52, 'Ipanema Beach Paradise', 'outro bairro', 'No mundo', '', 0, 6, 252525),
(53, 'Rua ali novo teste', 'outro bairro', 'outra la', '', 0, 19, 123123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos_cliente`
--

CREATE TABLE `enderecos_cliente` (
  `id_endereco_cliente` int(11) NOT NULL,
  `endereco_id_cliente` int(11) NOT NULL,
  `cliente_id_endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enderecos_cliente`
--

INSERT INTO `enderecos_cliente` (`id_endereco_cliente`, `endereco_id_cliente`, `cliente_id_endereco`) VALUES
(1, 7, 18),
(2, 9, 7),
(3, 9, 7),
(4, 14, 37),
(5, 14, 37),
(7, 9, 8),
(8, 9, 8),
(10, 44, 45),
(11, 44, 45);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_rede_social_cliente`
--

CREATE TABLE `endereco_rede_social_cliente` (
  `id_endereco_redesocial` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `redesocial_id` int(11) NOT NULL,
  `cliente_redesocial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco_rede_social_cliente`
--

INSERT INTO `endereco_rede_social_cliente` (`id_endereco_redesocial`, `cliente_id`, `redesocial_id`, `cliente_redesocial`) VALUES
(1, 71, 3, 'outrao_oficial'),
(2, 76, 3, 'fulano-de-tal'),
(3, 72, 1, 'fulano_72'),
(4, 76, 2, 'mesmo_fulano'),
(5, 47, 2, 'oia'),
(11, 69, 3, 'fulano-de-tal'),
(12, 69, 3, 'fulano-de-tal'),
(13, 69, 3, 'Algo'),
(20, 45, 2, 'Jonas'),
(21, 45, 1, '12'),
(22, 45, 1, 'jonas-racing'),
(23, 72, 3, 'json'),
(25, 76, 2, 'outrao_oficial'),
(26, 42, 2, 'zezin'),
(34, 69, 2, 'fulano'),
(35, 47, 3, 'tuit'),
(51, 72, 2, 'asd'),
(52, 72, 2, 'asds'),
(53, 76, 3, 'ssss');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id_fornecedor` int(11) NOT NULL,
  `nome_fornecedor` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnpj_fornecedor` int(50) DEFAULT NULL,
  `website_fornecedor` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_fornecedor` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone_fornecedor` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco_id_fornecedor` int(11) DEFAULT NULL,
  `url_logo_fornecedor` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_funcionario` int(50) DEFAULT NULL,
  `email_funcionario` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone_funcionario` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular_funcionario` int(30) DEFAULT NULL,
  `endereco_id_funcionario` int(11) DEFAULT NULL,
  `data_cadastro_funcionario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL,
  `nome_material` varchar(30) NOT NULL,
  `descricao_material` varchar(150) NOT NULL,
  `preco_material` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`id_material`, `nome_material`, `descricao_material`, `preco_material`) VALUES
(1, 'Lona', 'Lona Front-light', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE `os` (
  `id_os` int(11) NOT NULL,
  `tipo_os` int(1) NOT NULL,
  `data_inicio` int(50) NOT NULL,
  `data_final` int(50) DEFAULT NULL,
  `descricao_os` text,
  `status_os` int(1) DEFAULT NULL,
  `total_os` int(50) DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `os_faturada` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id_lancamento` int(11) NOT NULL,
  `tipo_beneficiario` int(11) NOT NULL,
  `beneficiario_lancamento` varchar(150) NOT NULL,
  `descricao_lancamento` varchar(150) DEFAULT NULL,
  `tipo_pagamento_lancamento` int(11) NOT NULL,
  `total_lancamento` int(30) NOT NULL,
  `data_lancamento` int(50) NOT NULL,
  `data_vencimento_lancamento` int(50) NOT NULL,
  `lancamento_faturado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao_os`
--

CREATE TABLE `producao_os` (
  `id_producao` int(11) NOT NULL,
  `descricao_producao` varchar(150) NOT NULL,
  `material_id` int(11) NOT NULL,
  `os_id` int(11) NOT NULL,
  `tipo_producao` int(1) NOT NULL,
  `unidade_medida_id` int(11) NOT NULL,
  `medida_producao` varchar(50) DEFAULT NULL,
  `quantidade_producao` int(11) NOT NULL,
  `status_producao` int(1) NOT NULL,
  `acabamento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes_sociais`
--

CREATE TABLE `redes_sociais` (
  `id_redesocial` int(11) NOT NULL,
  `nome_redesocial` varchar(50) NOT NULL,
  `url_base_redesocial` varchar(100) NOT NULL,
  `tag_redesocial` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `redes_sociais`
--

INSERT INTO `redes_sociais` (`id_redesocial`, `nome_redesocial`, `url_base_redesocial`, `tag_redesocial`) VALUES
(1, 'Facebook', 'facebook.com', '/'),
(2, 'Instagram', 'instagram.com', '@'),
(3, 'Twitter', 'twitter.com', '@');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servicos` int(11) NOT NULL,
  `nome_servico` varchar(50) NOT NULL,
  `descricao_servico` varchar(150) DEFAULT NULL,
  `preco_servico` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id_servicos`, `nome_servico`, `descricao_servico`, `preco_servico`) VALUES
(1, 'Reparo', 'Reparo em geral', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_os`
--

CREATE TABLE `servicos_os` (
  `id_servicos_os` int(11) NOT NULL,
  `os_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL,
  `sub_total_servico_os` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_pagamento`
--

CREATE TABLE `tipos_pagamento` (
  `id_tipo_pagamento` int(11) NOT NULL,
  `nome_tipo_pagamento` varchar(50) NOT NULL,
  `descricao_tipo_pagamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipos_pagamento`
--

INSERT INTO `tipos_pagamento` (`id_tipo_pagamento`, `nome_tipo_pagamento`, `descricao_tipo_pagamento`) VALUES
(1, 'Receita', 'Registro de Entrada de Receita '),
(2, 'Despesa', 'Registro de Despesas ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades_medida`
--

CREATE TABLE `unidades_medida` (
  `id_unidade_medida` int(11) NOT NULL,
  `simbolo_unidade` varchar(11) NOT NULL,
  `nome_unidade` varchar(50) NOT NULL,
  `grandeza` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidades_medida`
--

INSERT INTO `unidades_medida` (`id_unidade_medida`, `simbolo_unidade`, `nome_unidade`, `grandeza`) VALUES
(1, 'cm', 'centímetros', ''),
(2, 'm', 'metro', ''),
(3, 'mm', 'milímetros', ''),
(4, 'un', 'unitário', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acabamento`
--
ALTER TABLE `acabamento`
  ADD PRIMARY KEY (`id_acabamento`);

--
-- Indexes for table `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`id_anexos`),
  ADD KEY `fk_anexos_os1` (`producao_id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `dados_empresa`
--
ALTER TABLE `dados_empresa`
  ADD PRIMARY KEY (`id_emissor`),
  ADD KEY `fk_endereco_emissor` (`endereco_id_emissor`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Indexes for table `enderecos_cliente`
--
ALTER TABLE `enderecos_cliente`
  ADD PRIMARY KEY (`id_endereco_cliente`),
  ADD KEY `fk_endereco_id` (`endereco_id_cliente`),
  ADD KEY `fk_cliente_id_endereco` (`cliente_id_endereco`);

--
-- Indexes for table `endereco_rede_social_cliente`
--
ALTER TABLE `endereco_rede_social_cliente`
  ADD PRIMARY KEY (`id_endereco_redesocial`),
  ADD KEY `fk_cliente_id_redesocial` (`cliente_id`),
  ADD KEY `fk_redesocial_id` (`redesocial_id`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_fornecedor`),
  ADD KEY `fk_endereco_emissor` (`endereco_id_fornecedor`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD KEY `fk_endereco_emissor` (`endereco_id_funcionario`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id_os`),
  ADD KEY `fk_os_clientes1` (`cliente_id`);

--
-- Indexes for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id_lancamento`),
  ADD KEY `fk_tipo_lancamento` (`tipo_pagamento_lancamento`);

--
-- Indexes for table `producao_os`
--
ALTER TABLE `producao_os`
  ADD PRIMARY KEY (`id_producao`),
  ADD KEY `producao_fk` (`os_id`),
  ADD KEY `material_fk` (`material_id`),
  ADD KEY `acabamento_fk` (`acabamento_id`),
  ADD KEY `fk_unidade_medida_producao` (`unidade_medida_id`) USING BTREE;

--
-- Indexes for table `redes_sociais`
--
ALTER TABLE `redes_sociais`
  ADD PRIMARY KEY (`id_redesocial`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servicos`);

--
-- Indexes for table `servicos_os`
--
ALTER TABLE `servicos_os`
  ADD PRIMARY KEY (`id_servicos_os`),
  ADD KEY `fk_servicos_os_os1` (`os_id`),
  ADD KEY `fk_servicos_os_servicos1` (`servicos_id`);

--
-- Indexes for table `tipos_pagamento`
--
ALTER TABLE `tipos_pagamento`
  ADD PRIMARY KEY (`id_tipo_pagamento`);

--
-- Indexes for table `unidades_medida`
--
ALTER TABLE `unidades_medida`
  ADD PRIMARY KEY (`id_unidade_medida`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acabamento`
--
ALTER TABLE `acabamento`
  MODIFY `id_acabamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anexos`
--
ALTER TABLE `anexos`
  MODIFY `id_anexos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `dados_empresa`
--
ALTER TABLE `dados_empresa`
  MODIFY `id_emissor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `enderecos_cliente`
--
ALTER TABLE `enderecos_cliente`
  MODIFY `id_endereco_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `endereco_rede_social_cliente`
--
ALTER TABLE `endereco_rede_social_cliente`
  MODIFY `id_endereco_redesocial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `id_os` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id_lancamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `producao_os`
--
ALTER TABLE `producao_os`
  MODIFY `id_producao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `redes_sociais`
--
ALTER TABLE `redes_sociais`
  MODIFY `id_redesocial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `servicos_os`
--
ALTER TABLE `servicos_os`
  MODIFY `id_servicos_os` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipos_pagamento`
--
ALTER TABLE `tipos_pagamento`
  MODIFY `id_tipo_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `unidades_medida`
--
ALTER TABLE `unidades_medida`
  MODIFY `id_unidade_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `anexos`
--
ALTER TABLE `anexos`
  ADD CONSTRAINT `fk_anexos_producao` FOREIGN KEY (`producao_id`) REFERENCES `producao_os` (`id_producao`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `dados_empresa`
--
ALTER TABLE `dados_empresa`
  ADD CONSTRAINT `cons_fk_endereco_emissor` FOREIGN KEY (`endereco_id_emissor`) REFERENCES `enderecos` (`id_endereco`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `enderecos_cliente`
--
ALTER TABLE `enderecos_cliente`
  ADD CONSTRAINT `cons_fk_cliente_id_endereco` FOREIGN KEY (`cliente_id_endereco`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `cons_fk_endereco_id` FOREIGN KEY (`endereco_id_cliente`) REFERENCES `enderecos` (`id_endereco`);

--
-- Limitadores para a tabela `endereco_rede_social_cliente`
--
ALTER TABLE `endereco_rede_social_cliente`
  ADD CONSTRAINT `cons_fk_cliente_redesocial` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `cons_fk_redesocial` FOREIGN KEY (`redesocial_id`) REFERENCES `redes_sociais` (`id_redesocial`);

--
-- Limitadores para a tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD CONSTRAINT `cons_fk_endereco_fornecedor` FOREIGN KEY (`endereco_id_fornecedor`) REFERENCES `enderecos` (`id_endereco`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `cons_fk_endereco_funcionario` FOREIGN KEY (`endereco_id_funcionario`) REFERENCES `enderecos` (`id_endereco`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `os`
--
ALTER TABLE `os`
  ADD CONSTRAINT `fk_os_clientes1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `cons_tipo_pagamento_lancamento` FOREIGN KEY (`tipo_pagamento_lancamento`) REFERENCES `tipos_pagamento` (`id_tipo_pagamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `producao_os`
--
ALTER TABLE `producao_os`
  ADD CONSTRAINT `acabamento_fk` FOREIGN KEY (`acabamento_id`) REFERENCES `acabamento` (`id_acabamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cons_fk_unidade_medida_producao` FOREIGN KEY (`unidade_medida_id`) REFERENCES `unidades_medida` (`id_unidade_medida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `material` FOREIGN KEY (`material_id`) REFERENCES `material` (`id_material`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `producao_fk` FOREIGN KEY (`os_id`) REFERENCES `os` (`id_os`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servicos_os`
--
ALTER TABLE `servicos_os`
  ADD CONSTRAINT `fk_servicos_os_os1` FOREIGN KEY (`os_id`) REFERENCES `os` (`id_os`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicos_os_servicos1` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`id_servicos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
