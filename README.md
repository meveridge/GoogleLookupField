# GoogleLookupField

For using SugarCRM Instance versions 7.5.x - 7.7.x

## Install

- Create a Module Loadable Package from Repo
  - If downloaded as a zip:
    - Extract Contents of Repo
    - Create new ZIP file with manifest.php at the root of the file
  - If cloned or forked through GitHub
    - Create new ZIP file with manifest.php at the root of the file
- Install the package via Admin > Module Loader
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
