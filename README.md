# GoogleLookupField

For using SugarCRM Instance versions 7.5.x - 7.7.x

 Creates a Google Lookup Field Type in Sugar utilizing the Google Places API. Enables an address or place lookup as well as optinoal address field population.
 
 For more information on Google's Places API, please see https://developers.google.com/places/

## Install

- Create a Module Loadable Package from Repo
  - If downloaded as a zip ( GoogleLookupField-master.zip ):
    - Extract Contents of Repo
    - Create new ZIP file with manifest.php at the root of the file
```bash
$ cd ~/Downloads
$ unzip GoogleLookupField-master.zip
$ cd GoogleLookupField-master
$ zip -r -X ../GoogleLookupField-package.zip *
```
  - If cloned or forked through GitHub
    - Create new ZIP file with manifest.php at the root of the file
```bash
$ git clone git@github.com:meveridge/GoogleLookupField.git
$ cd GoogleLookupField
$ zip ../GoogleLookupField-package.zip *
```
- Install the GoogleLookupField-package.zip package created above via Admin > Module Loader
- Run Repair JS Groupings from Admin > Repair

## Setup

- Navigate to Admin > Studio > Module_Name > Fields > Add Field
- Select Field Type of "Google Lookup Field"
- Give the field a name and select the approprioate options below:
  - Google Places API Type to Return:
    - All
    - Businesses
    - Addresses
    - Regions
    - Cities
  - Google Places API Country to Filter On
  - Google Places API Populate Address Fields
    - No
    - Long Names
    - Short Names
- Add the field to the Record view

#Contributing
Everyone is welcome to be involved by creating or improving existing Sugar repairs. If you would like to contribute, please make sure to review the [CONTRIBUTOR TERMS](CONTRIBUTOR TERMS.pdf). When you update this [README](README.md), please check out the [contribution guidelines](CONTRIBUTING.md) for helpful hints and tips that will make it easier to accept your pull request.

## Contributors

[Mark Everidge](https://github.com/meveridge)

# Licensed under Apache
© 2016 SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.
