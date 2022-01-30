## Custom Import Module Test
## Purpose
Magento Customer import from CLI



### Type 1: Composer Installation

 - run the command on CLI  `composer require wireit/module-customerimport2`
 - Enable module `php bin/magento module:enable WireIT_CustomerImport` 
 - Apply Module changes to Magento `php bin/magento setup:upgrade`
 - Compile Code to see any errors `php bin/magento s:d:c`
 - Deploy static `php bin/magento s:s:dep -f` - 
### Type 1: Manual Installation

 - Extract code here `app/code/WireIT/CustomerImport`
 - Enable module `php bin/magento module:enable WireIT_CustomerImport` 
 - Apply Module changes to Magento `php bin/magento setup:upgrade`
 - Compile Code to see any errors `php bin/magento s:d:c`
 - Deploy static `php bin/magento s:s:dep -f` - 

## Commands

 - Console Command
    - CsvProfile  **customer:import:sample-csv**
    - JSONProfile **customer:import:sample-json**
    - `php bin/magento setup:upgrade customer:import:sample-csv --filename`
    - `php bin/magento setup:upgrade customer:import:sample-json --filename`


## Supported
### Tested on Magento 2.4.3 with php 7.4
 