<?php
/**
 * Copyright © Eduardo Vinicius dos Santos All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hibrido\Color\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Hibrido\Color\Helper\GenerateStyle;
use Psr\Log\LoggerInterface as Logger;
use \Magento\Store\Api\StoreRepositoryInterface;
use \Magento\Store\Model\StoreManagerInterface;

class Change extends Command
{

    const COLOR_ARGUMENT = "color";
    const ID_ARGUMENT = "id";


    /**
     * @var Logger
     */
    protected $logger;
    protected $storeRepoManager;
    protected $_storeManager;
    
    public function __construct(
       
        Logger $logger,
        GenerateStyle $helperGenerateStyle,
        StoreRepositoryInterface $storeRepoManager,
        StoreManagerInterface $storeManager 
    ) {
        $this->logger = $logger;
        $this->helperGenerateStyle = $helperGenerateStyle;
        $this->storeRepoManager = $storeRepoManager;
        $this->_storeManager = $storeManager;
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) { 
        $validator = false;    
        $color = $input->getArgument(self::COLOR_ARGUMENT);
        $id = $input->getArgument(self::ID_ARGUMENT);
        $stores = $this->storeRepoManager->getList();
        foreach ($stores as $store) {
            if($store->getId() === $id){
                $validator = true;
            }
        }   
        if(!$validator){
            $output->writeln("ID INVALIDO" );
            return 0;
        }
        if(ctype_xdigit($color) && strlen($color)==6){
            $this->_storeManager->setCurrentStore($id);
            $this->helperGenerateStyle->generateStoreCss($color);
            $output->writeln("ALTERADO COM SUCESSO PARA A COR: ".$color.' NA STORE VIEW '.$id);
        }
        else{
            $output->writeln("FORMATO DE COR INVALIDO");
            $output->writeln("DIGITE A COR SEM #");
            return 0;
        }
        return 0;
    }
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName("color:change");
        $this->setDescription("Color");
        $this->setDefinition([
            new InputArgument(self::COLOR_ARGUMENT, InputArgument::REQUIRED, "Color"),
            new InputArgument(self::ID_ARGUMENT, InputArgument::REQUIRED, "Id"),

        ]);
        parent::configure();
    }
}

