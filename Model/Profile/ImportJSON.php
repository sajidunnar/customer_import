<?php

declare(strict_types=1);

namespace WireIT\CustomerImport\Model\Profile;
use Exception;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use \WireIT\CustomerImport\Model\ImportCustomer;
use \WireIT\CustomerImport\Helper\Utility;


class ImportJSON
{



    /**
     * @var Utility
     */
    protected Utility $utility;


    /**
     * @var ImportCustomer
     */
    protected ImportCustomer $importCustomer;



    /**
     * @param Utility $utility
     * @param ImportCustomer $importCustomer
     */
    public function __construct(
        \WireIT\CustomerImport\Helper\Utility $utility,
        \WireIT\CustomerImport\Model\ImportCustomer $importCustomer
    ) {
        $this->utility = $utility;
        $this->importCustomer =$importCustomer;
    }


    /**
     * @param $fileName
     */
    public function importCustomersByJSON($fileName)
    {

        try {
        $this->utility->log("Reading JSON from ".$fileName);
        $jsonData=$this->utility->getJSONFileData($fileName);

        $this->importCustomers($jsonData);
        } catch (Exception $e) {
            $this->utility->log("ERROR: ".$e->getMessage());
        }
    }

    /**
     * @param $jsonData
     */
    private function importCustomers($jsonData){

        //lopping data or split as per need
        foreach ( $jsonData as $jsonDatum)
        {
            try {
                $this->importCustomer->createCustomer($jsonDatum);

            } catch (NoSuchEntityException $e) {
            } catch (LocalizedException $e) {
                $this->utility->log($e->getMessage());
            }
        }
    }




}
