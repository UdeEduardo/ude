# Mage2 Module Hibrido Color

    ``hibrido/module-color``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Module developed with the objective of changing all buttons of the storeView passed by parameter together with the color chosen via the magento CLI command line.
In order to use the switch functionality of all front-end buttons, you must enter the following command in the root of the project:

bin/magento color:change 000000 1

where the first parameter is a hex value (NO NEED TO PASS THE #) that represents a color and the second parameter is the id of the store-view that will be affected by changing the color of the buttons.

After this process, in magento refresh the page.

-------------------------------------------------pt-br--------------------------------------------------------------------------------------------------------
Módulo desenvolvido com o objetivo de alterar todos os botões do storeView passados ​​por parâmetro juntamente com a cor escolhida via linha de comando magento CLI.
Para usar a funcionalidade de alternância de todos os botões front-end, você deve inserir o seguinte comando na raiz do projeto:

bin/magento color:change 000000 1

onde o primeiro parâmetro é um valor hexadecimal (NÃO PRECISA PASSAR O #) que representa uma cor e o segundo parâmetro é o id da store-view que será afetado pela alteração da cor dos botões.

Após esse processo, no magento atualize a página.

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
For the correct operation of this module, it is necessary to perform some configurations described below:

1-) Enable client side less build mode, you need to navigate in magento admin in (Stores > Configuration > Advanced > Developer ) Frontend development workflow and then set client side LESS build mode client side and click on the Save Configuration button.

2-) Set theme developed in the module, In Admin, go to Content > Design > Configuration. A design configuration page opens. Contains a grid with available configuration scopes, In the configuration record corresponding to your store view, click Edit. The page with design configuration for the selected scope opens, In the Default Theme tab, in the drop-down menu, select the luma_child Theme and click on save.

3-) Make sure that magento is in developer mode with the command bin/magento deploy:mode:show. If you are in production mode, you can use this command to set developer mode "bin/magento deploy:mode:set developer".

------------------------------------------pt-br-------------------------------------------------------------------------------
Para o correto funcionamento deste módulo, é necessário realizar algumas configurações descritas abaixo:

1-) Habilite o modo de construção menos do lado do cliente, você precisa navegar no magento admin em (Lojas > Configuração > Avançado > Desenvolvedor) Fluxo de trabalho de desenvolvimento do frontend e, em seguida, definir o lado do cliente do modo de construção MENOS do lado do cliente e clicar no botão Salvar configuração.

2-) Defina o tema desenvolvido no módulo, No Admin, vá em Conteúdo > Design > Configuração. Uma página de configuração de design é aberta. Contém uma grade com os escopos de configuração disponíveis. No registro de configuração correspondente à visualização da sua loja, clique em Editar. Abre-se a página com a configuração do design para o escopo selecionado, Na aba Default Theme, no menu drop-down, selecione o luma_child Theme e clique em salvar.

3-) Certifique-se que o magento está no modo desenvolvedor com o comando bin/magento deploy:mode:show. Se você estiver no modo de produção, poderá usar este comando para definir o modo de desenvolvedor "bin/magento deploy:mode:set developer".

## Specifications

 - Console Command
	- Change




## Attributes



