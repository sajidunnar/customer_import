## Custom Import Module Test
## Purpose
Magento Customer import from CLI

### Type 1: Installation

 - Extract code here `app/code/WireIT`
 - Enable module `php bin/magento module:enable WireIT_CustomerImport` 
 - Apply Module changes to Magento `php bin/magento setup:upgrade`\*
 - Compile Code to see any errors `php bin/magento s:d:c`
 - Deploy static `php bin/magento s:s:dep -f` - 

## Commands

 - Console Command
    - CsvProfile  **customer:import:sample-csv**
    - JSONProfile **customer:import:sample-json**
    - `php bin/magento setup:upgrade ustomer:import:sample-csv --filename`\*
    - `php bin/magento setup:upgrade ustomer:import:sample-json --filename`\*



