-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/04/2024 às 04:44
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_gagal`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `COD_NOT` int(11) NOT NULL,
  `MANCHETE_NOT` varchar(500) NOT NULL,
  `RESUMO_NOT` varchar(300) NOT NULL,
  `TEXTO_NOT` longtext NOT NULL,
  `CATEGORIA_NOT` varchar(10) NOT NULL,
  `IMAGEM_NOT` varchar(45) NOT NULL,
  `USUARIOS_COD_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `noticias`
--

INSERT INTO `noticias` (`COD_NOT`, `MANCHETE_NOT`, `RESUMO_NOT`, `TEXTO_NOT`, `CATEGORIA_NOT`, `IMAGEM_NOT`, `USUARIOS_COD_USER`) VALUES
(1, 'teste', 'teste', 'teste', 'Software', 'img/hardware_gforce.png', 3),
(2, 'Nova versão do Kali Linux chega com atualizações sobre Máquina Virtual e novas ferramentas', 'O Kali Linux é uma distro que ganhou fama por causa da série Mr. Robot, que já foi notícia por ensinar a hackear smartphones Android no passado. Agora, ela busca fazer valer a sua popularidade com um sistema feito para Hackers éticos.', 'A nova versão do software chega como uma surpresa, em virtude do Hacker Summer Camp 2022, que acontece nos EUA. Entre as novidades, os destaques ficam para uma opção de bate-papo em tempo real por meio do servidor no Discord e novos elementos na NetHunter, a loja do SO.\r\n\r\nNovas ferramentas\r\nA versão 2022.3 do Kali Linux traz como uma de suas novidades a adição de novas ferramentas, como a BruteShark, que fica a cargo de analisar redes. Além disso, há a phpsploit que tem a finalidade de ser útil para estruturas de pós-exploração furtiva e a DefectDojo, que serve para lidar com vulnerabilidades de aplicações de código aberto.\r\n\r\nEstes são apenas alguns dos novos elementos, mas o sistema também trouxe novidades visuais na tela de login e corrigiu a manutenção no repositório de internet. Por fim, vale citar as atualizações para uso de Máquina Virtual com o sistema. Nesse caso, a imagem do novo Kali Linux é disponibilizada como VDI e um arquivo .vbox, o formato nativo do aplicativo VirtualBox.', 'Software', 'img/1712608125_instalar-kali-linux-hacker.jpg', 1),
(3, 'Por que você deve investir em um Software de Gerenciamento para o seu negócio?', 'Sistemas de gestão empresarial são responsáveis por ajudar os donos de empresas, empreendedores a administrarem o negócio da melhor forma possível, otimizando tempo e trabalho. Veja 5 motivos para investir em softwares de gerenciamento empresarial:', 'Proporciona um planejamento mais eficiente:\r\nSistemas de gestão empresarial possuem várias funções e uma delas é ajudar o gestor a fazer o planejamento do negócio, que é uma das principais etapas da administração de uma empresa. O sistema ERP é capaz de alertar o gestor caso os resultados não estejam de acordo com o que foi planejado anteriormente. Além disso, a ferramenta organiza todas as informações e dados empresariais de forma automatizada, minimizando os erros.\r\n\r\n \r\n\r\nMenor possibilidade de erros:\r\nO uso de um Software de gestão, visa, entre várias outras coisas, diminuir os possíveis erros humanos. As tarefas realizadas com ele possuem um índice de erro muito menor em relação a tarefas manuais. Com a implantação de sistemas automatizados, diminui-se o risco de falha, ganhando-se tempo em áreas e tarefas que realmente precisam de mais atenção.\r\n\r\n \r\n\r\nIntegração dos setores:\r\nSistemas de gestão empresarial ERP visam a máxima integração entre os diversos departamentos da organização. Uma empresa integrada funciona de forma mais eficiente, pois a gestão de processos é mais rápida e soluciona os problemas com mais agilidade. Informações integradas garantem uma melhor administração dos dados do cliente e, assim, um melhor atendimento.\r\n\r\n \r\n\r\nRedução de Custos:\r\nUm software de gestão é capaz de reduzir desperdícios, gerando economia. O corte de gastos se dá, por exemplo, quando o sistema consegue fazer uma análise de estoque e dizer quando e se é melhor comprar algum produto. O sistema também diminui drasticamente retrabalho que resultam em perda de tempo.', 'Software', 'img/1712610332_unnamed.png', 1),
(5, 'Kingstom SSD', 'Kingston lança linha de SSDs, voltada para d', 'Recentemente a Kingston anunciou sua nova linha de SSDs voltada para o mercado consumidor, a KC600, e agora a companhia apresentou a sua aposta mais recente para o mercado de data centers. Trata-se da linha DC400R. Os SSDs sÃ£o fabricados em um formato de 2,5 polegadas, usam a interface SATA de 6 Gb / s e serÃ£o oferecidos em versÃµes que variam de 480 GB a 3,8 TB.', 'Hardware', 'img/1712607891_erp_software.png', 3),
(6, 'Rumor aponta para a chegada da GPU NVIDIA GeForce RTX 4080 Ti no início de 2024', 'A possível GeForce RTX 4080 Ti usaria o mesmo chip que equipa a GPU topo de linha, RTX 4090, e custaria algo próxima da RTX 4080A possível GeForce RTX 4080 Ti usaria o mesmo chip que equipa a GPU topo de linha, RTX 4090, e custaria algo próxima da RTX 4080', 'Recentemente, diferentes rumores apareceram apontando para possíveis novas GPUs de entrada. Agora, a mais nova informação não oficial é referente a uma GPU topo de linha da NVIDIA, a GeForce RTX 4080 Ti (ou SUPER), segundo o leaker MEGA sizeGPU. Se for real, ela pode chegar já no início de 2024 custando algo próximo da RTX 4080.  Assim como vários rumores iniciais sobre um determinado produto, essa também não revela detalhes sobre especificações, a não ser o uso da GPU AD102, a mesma que equipa a GeForce RTX 4090, ao invés da GPU AD103, presente na RTX 4080. Por conta disso, a suposta RTX 4080 Ti teria o TDP de 450w, mesmo número da GPU topo de linha.  Além disso, a nova GPU deve operar com frequências cerca de 17% menores, 1470 MHz. Não foi revelado, no entanto, a contagem de núcleos CUDA que a GPU GA107-325-Kx terá. Essas reduções em relação ao modelo existente levam a um TDP de 70w. A produção da nova GeForce RTX 3050 de 6 GB deve começar em janeiro de 2024 com o lançamento acontecendo em fevereiro.  Ainda em relação a novas GPUs, do lado da AMD, existem rumores de uma Radeon RX 7600 XT 16 GB, e do lado da Intel, a GPU Arc A580, que antes era só rumores, agora já está sendo vendida lá fora.', 'Hardware', 'img/hardware_gforce.png', 1),
(7, 'O que são exploits e como afetam a segurança da sua empresa?', 'Muito se fala sobre malwares e ataques cibernéticos feitos para o roubo de informações. Por outro lado, também é fundamental identificar as entradas desses ataques, como os exploits que exploram as vulnerabilidades dos sistemas.', 'O que são exploits?\r\nSão códigos de programas desenvolvidos para burlar sistemas, aproveitando-se de suas falhas.\r\n\r\nOs exploits basicamente são meios utilizados para alcançar e adentrar sistemas a partir de falhas nos softwares ou hardwares, com intuitos comumente prejudiciais.\r\n\r\nAssim, geralmente são programas associados aos malwares, que realizam funções pré-determinadas nos sistemas invadidos.\r\n\r\nOs ataques de ransomware, por exemplo, podem ser resultado de falhas nos sistemas exploradas por esses códigos.\r\n\r\nPor incrível que pareça, as falhas na segurança das aplicações são extremamente comuns no meio digital. O relatório State of Software Security (SOSS) indicou que cerca de 76% dos aplicativos da atualidade apresentam alguma vulnerabilidade.\r\n\r\nNo entanto, as atualizações desses sistemas são as grandes responsáveis pela segurança deles, sempre que os desenvolvedores detectam essas falhas.\r\n\r\nVale lembrar, também, que nem sempre uma vulnerabilidade representa a chance de exploits para os hackers. Em alguns casos, não é possível desenvolver códigos para explorar falhas, embora elas estejam presentes na aplicação.\r\n\r\nExploits vs Malware\r\nAmbos são inimigos da segurança cibernética. No entanto, enquanto os malwares são códigos desenvolvidos para atuar de forma maliciosa nos sistemas invadidos, o exploit apenas possui o papel de adentrá-lo a partir de uma brecha.\r\n\r\nPode-se dizer que esse código é como a chave de acesso até o sistema da organização invadida. Enquanto isso, o malware é o programa mal-intencionado por si só, que pode bloquear, excluir ou danificar dados.', 'Software', 'img/1712612032_instalar-kali-linux-hacker.jpg', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `COD_USER` int(11) NOT NULL,
  `NOME_USER` varchar(45) NOT NULL,
  `PERFIL_USER` varchar(20) NOT NULL,
  `LOGIN_USER` varchar(45) NOT NULL,
  `SENHA_USER` varchar(45) NOT NULL,
  `STATUS_USER` char(1) NOT NULL DEFAULT 'a',
  `IMAGEM_USER` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`COD_USER`, `NOME_USER`, `PERFIL_USER`, `LOGIN_USER`, `SENHA_USER`, `STATUS_USER`, `IMAGEM_USER`) VALUES
(1, 'Admin', 'Administrador', 'admin', '123', 'a', 'img/1712601555_1712601448_Nick.png'),
(2, 'Joao', 'Operador', 'operador', '1', 'a', 'img/1712601507_José_operador_feioso.jpg'),
(3, 'Barros', 'Jornalista', 'jornalista', '1234', 'a', 'img/1712601494_Operador.jpg'),
(4, 'Camila', 'Jornalista', 'camomila', '123', 'a', 'img/foto_bonita.jpg'),
(5, 'Piter', 'Jornalista', 'piter', '1234', 'a', 'img/1704422522_Carlos_jornalista_mais_feio.jpg'),
(6, 'Joao', 'Jornalista', 'jonasbrother', '1234', 'a', 'img/1712601448_Nick.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`COD_NOT`),
  ADD KEY `USUARIOS_COD_USER` (`USUARIOS_COD_USER`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`COD_USER`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `COD_NOT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `COD_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`USUARIOS_COD_USER`) REFERENCES `usuarios` (`COD_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
