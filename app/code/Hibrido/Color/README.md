# Mage2 Module Hibrido Color

    ``hibrido/module-color``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Módulo desenvolvido com o objetivo de alterar todos botões da storeView passada por parâmetro juntamente com a cor escolhida.
Para funcionamento correto deste módulo, é necessario que sejam realizadas algumas configurações descritas abaixo:

1-) Ativar modo de compilação less do lado do cliente, você precisa navegar no magento admin em ( Lojas> Configuração> Avançado> Desenvolvedor ) Fluxo de trabalho de desenvolvimento de front-end e, em seguida, definir o modo de compilação LESS do lado do cliente e clicar no botão Salvar configuração.

2-) Setar tema desenvolvido no módulo, Em Admin, vá para Conteúdo > Design > Configuração. Uma página de configuração de design é aberta. Contém uma grade com os escopos de configuração disponíveis, No registro de configuração correspondente à visualização da sua loja, clique em Editar. A página com configuração de design para o escopo selecionado é aberta, Na guia Default Theme, no menu suspenso, selecione o Tema luma_child e clique em salvar.


## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Hibrido`
 - Enable the module by running `php bin/magento module:enable Hibrido_Color`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require hibrido/module-color`
 - enable the module by running `php bin/magento module:enable Hibrido_Color`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Console Command
	- Change




## Attributes



