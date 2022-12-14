# Sample/sampleModule

URL: `http://mage244.com/`

## Composer install

- `composer config repositories.reponame vcs https://github.com/rajudiya/sampleModule`
- `composer require vendername/sampleModule`

## Composer uninstall

- `composer remove vendername/sampleModule:branch name`

## Preview will be added

- `This is Sample Module`
- `Images`

## Settings
- app/code/Sample/Module/registration.php 
  `Sample_sampleModule` replace with `Vendername_Modulename`

- app/code/Sample/Module/etc/module.xml 
  `Sample_sampleModule` replace with `Vendername_Modulename` 

- in a Composer.json File in Change `Name & psr-4`
  `sample/sampleModule` replace with `vendername/modulename`
- Option `will be updated ..` - no settings

## Known issues

- **Issues will be here .. Hopfuly not**\
  No issues

## Developer informations
- Developer Name - Rohan Ajudiya
- Inkdin url     - https://www.linkedin.com/in/ajudiya-rohan-9a9ab81b3/
- Contect us     - +91 6353856107

### Install module
1. Run `php bin/magento setup:upgrade`
2. Run `php bin/magento setup:di:compile`
3. Run `php bin/magento s:s:d`
4. Run `php bin/magento c:c`

### Uninstall module
1. Run `php bin/magento setup:di:compile`
2. Run `php bin/magento s:s:d`
3. Run `php bin/magento c:c`

### Additional developer notes
Reference URL `http://mage244.com/`
